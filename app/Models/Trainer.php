<?php

namespace App\Models;

use App\Models\Http\Client;
use Carbon\Carbon;
use Protobuf\MessageCollection;
use Protobuf\PokemonGo\RequestEnvelop\Requests;
use Protobuf\PokemonGo\ResponseEnvelop\ProfilePayload;


class Trainer {

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function profile()
    {
        $requestCollection = new MessageCollection;

        $req = new Requests;
        $req->setType(2);
        $requestCollection->add($req);

        $response = $this->client->request($requestCollection);

        $payload = $response->getPayloadList();
        $profilePayload = ProfilePayload::fromStream($payload[0]);
        $profile = $profilePayload->getProfile();

        $output = [
            'username'          => $profile->getUsername(),
            'team'              => $profile->getTeam(),
            'storagePokemon'    => $profile->getPokeStorage(),
            'storageItems'      => $profile->getItemStorage(),
            'signupDate'        => Carbon::createFromTimestamp($profile->getCreationTime()/1000)
        ];

        foreach($profile->getCurrencyList() as $currency)
        {
            $output[strtolower($currency->getType())] = $currency->getAmount();
        }

        return $output;
    }
}
