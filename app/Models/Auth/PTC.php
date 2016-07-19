<?php

namespace App\Models\Auth;

use Carbon\Carbon;
use GuzzleHttp\Client;

class PTC {

    protected $client;
    private $loginUrl = 'https://sso.pokemon.com/sso/login?service=https%3A%2F%2Fsso.pokemon.com%2Fsso%2Foauth2.0%2FcallbackAuthorize';
    private $loginOauth = 'https://sso.pokemon.com/sso/oauth2.0/accessToken';
    private $loginClientSecret = 'w8ScCUXJQc6kXKw8FiOhd8Fixzht18Dq3PEVkUCP5ZPxtgyWsbTvWHFLm2wNY0JR';

    public function __construct()
    {
        $this->client = new Client([
            'cookies'   => true,
            'verify'    => true,
            'headers'   => ['User-Agent' => 'niantic']
        ]);
    }

    public function login($username, $password)
    {
        $request = $this->client->get($this->loginUrl, ['verify' => true, 'headers' => ['User-Agent' => 'niantic']]);
        $response = (string)$request->getBody();

        $json = json_decode(trim($response), true);

        $data = [
            'lt'        => $json['lt'],
            'execution'  => $json['execution'],
            '_eventId'  => 'submit',
            'username'  => $username,
            'password'  => $password
        ];

        $response = $this->client->post($this->loginUrl, ['form_params' => $data, 'allow_redirects' => false]);
        $locationHeader = $response->getHeader('Location');

        $ticket = explode('?ticket=', $locationHeader[0]);
        $ticket = $ticket[1];

        $data = [
            'client_id'     => 'mobile-app_pokemon-go',
            'redirect_uri'  => 'https://www.nianticlabs.com/pokemongo/error',
            'client_secret' => $this->loginClientSecret,
            'grant_type'    => 'refresh_token',
            'code'          => $ticket
        ];

        $request = $this->client->post($this->loginOauth, ['form_params' => $data]);
        $response = (string)$request->getBody();

        parse_str($response, $output);

        $output['expires'] = Carbon::now()->addSeconds(7200);

        return $output;
    }

}