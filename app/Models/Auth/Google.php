<?php

namespace App\Models\Auth;

use Carbon\Carbon;
use GPSOAuthPHP\GPSOAuthPHP;

class Google {

    protected $gpso;

    public function __construct()
    {
        $this->gpso = new GPSOAuthPHP;
    }

    public function login($username, $password)
    {
        $masterToken = $this->performMasterLogin($username, $password);

        if ( ! $masterToken)
        {
            die('ERROR');
        }

        $oauth = $this->performOAuth($username, $masterToken['Token']);

        if ( ! $oauth)
        {
            die('ERROR');
        }

        $output = [
            'access_token'  => $oauth['Auth'],
            'expires'       => Carbon::createFromTimestamp($oauth['Expiry'])
        ];

        return $output;
    }

    private function performMasterLogin($username, $password)
    {
        $gpso = $this->gpso->performMasterLogin($username, $password, env('GOOGLE_ANDROID_ID'));

        if (isset($gpso['Error']))
        {
            return false;
        }

        return $gpso;
    }

    private function performOAuth($username, $masterToken)
    {
        $gpso = $this->gpso->performOAuth($username, $masterToken, env('GOOGLE_ANDROID_ID'), env('GOOGLE_SERVICE'), env('GOOGLE_APP'), env('GOOGLE_CLIENT_SIG'));

        if (isset($gpso['Error']))
        {
            return false;
        }

        return $gpso;
    }

}
