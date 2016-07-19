<?php

namespace App\Models\Http;

use App\Repositories\AuthRepository;
use GuzzleHttp\Client as Guzzle;
use KamranAhmed\Geocode\Geocode;
use Protobuf\MessageCollection;
use Protobuf\Stream;
use Protobuf\PokemonGo\RequestEnvelop;
use Protobuf\PokemonGo\RequestEnvelop\Requests;
use Protobuf\PokemonGo\RequestEnvelop\Unknown3;
use Protobuf\PokemonGo\RequestEnvelop\AuthInfo;
use Protobuf\PokemonGo\RequestEnvelop\AuthInfo\JWT;
use Protobuf\PokemonGo\ResponseEnvelop;


class Client {

    protected $client;
    public $accessToken;
    public $apiEndpoint;

    public function __construct()
    {
        $this->client = new Guzzle(['cookies' => true]);

        $auth = new AuthRepository;
        $this->accessToken = $auth->accessToken();

        $this->getApiEndpoint();
    }

    private function f2i($float)
    {
        return unpack('Q', pack('d', $float))[1];
    }

    public function getLocation()
    {
        $geocode = new Geocode();
        $location = $geocode->get(env('LOCATION'));

        $latitude = $this->f2i($location->getLatitude());
        $longitude = $this->f2i($location->getLongitude());

        return [
            'latitude'  => $latitude,
            'longitude' => $longitude
        ];
    }

    public function getApiEndpoint()
    {
        $requestCollection = new MessageCollection;

        $req = new Requests;
        $req->setType(2);
        $requestCollection->add($req);

        $req = new Requests;
        $req->setType(126);
        $requestCollection->add($req);

        $req = new Requests;
        $req->setType(4);
        $requestCollection->add($req);

        $req = new Requests;
        $req->setType(129);
        $requestCollection->add($req);

        $req = new Requests;
        $req->setType(5);

        $message = new Unknown3;
        $message->setUnknown4('4a2e9bc330dae60e7b74fc85b98868ab4700802e');
        $req->setMessage($message);
        $requestCollection->add($req);

        $response = $this->request($requestCollection);

        if ($response->hasApiUrl())
        {
            $this->apiEndpoint = 'https://' . $response->getApiUrl() . '/rpc';
        }
        else
        {
            return false;
        }
    }

    public function request($requests)
    {
        $req = new RequestEnvelop;
        $req->setRpcId(8145806132888207460);
        $req->setUnknown1(2);

        $req->setRequestsList($requests);

        $location = $this->getLocation();

        $req->setLatitude($location['latitude']);
        $req->setLongitude($location['longitude']);
        $req->setAltitude(0);

        $req->setUnknown12(989);

        $token = new JWT;
        $token->setContents($this->accessToken);
        $token->setUnknown13(59);

        $auth = new AuthInfo;
        $auth->setProvider(env('AUTH_SERVICE'));
        $auth->setToken($token);

        $req->setAuth($auth);

        $protobuf = $req->toStream();


        $apiUrl = (is_null($this->apiEndpoint)) ? env('API_URL') : $this->apiEndpoint;

        $request = $this->client->request('POST', $apiUrl, ['headers' => ['User-Agent' => 'Niantic App'], 'verify' => false, 'body' => $protobuf]);

        $responseStream = \Protobuf\Stream::fromString((string)$request->getBody());
        $response = \Protobuf\PokemonGo\ResponseEnvelop::fromStream($responseStream);

        return $response;
    }

}
