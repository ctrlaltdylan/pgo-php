<?php

namespace App\Repositories;

use App\Models\Auth\Google;
use App\Models\Auth\PTC;
use Carbon\Carbon;
use Cache;


class AuthRepository {

    protected $service;
    protected $username;
    protected $password;
    protected $google;
    protected $ptc;

    public function __construct()
    {
        $this->google = new Google;
        $this->ptc = new PTC;

        $this->service = env('AUTH_SERVICE');
        $this->username = env('AUTH_USERNAME');
        $this->password = env('AUTH_PASSWORD');
    }

    public function accessToken()
    {
        $cacheKey = "auth.token:{$this->service}:{$this->username}";

        if (Cache::has($cacheKey))
        {
            return Cache::get($cacheKey);
        }
        else
        {
            $login = $this->{$this->service}->login($this->username, $this->password);

            $key = $login['access_token'];
            $expires = $login['expires'];

            Cache::put($cacheKey, $key, $expires);

            return $key;
        }
    }

}