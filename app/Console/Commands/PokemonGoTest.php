<?php

namespace App\Console\Commands;

use App\Models\Http\Client;
use App\Models\Trainer;
use Illuminate\Console\Command;


class PokemonGoTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pokemongo:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run a sample PokemonGo session.';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $service = env('AUTH_SERVICE');
        $username = env('AUTH_USERNAME');

        $this->line("[!] Attempting " . ucfirst($service) . " login for: {$username}");

        $client = new Client;
        $accessToken = $client->accessToken;
        $this->info("[+] RPC Session Token: " . substr($accessToken, 0, 25) . '...');

        $apiUrl = $client->apiEndpoint;

        if ($apiUrl != false)
        {
            $this->info("[+] Received API endpoint: {$apiUrl}");
        }
        else
        {
            $this->error('[!] Could not retrieve RPC endpoint');
            return;
        }

        $this->line('[!] Getting Player Profile...');
        $trainer = new Trainer($client);
        $profile = $trainer->profile();
        $this->info('[+] Login successful');
        $this->line('[.] Username: ' . $profile['username']);
        $this->line('[.] Trainer since: ' . $profile['signupDate']);
        $this->line('[.] Pokecoins: ' . $profile['pokecoin']);
        $this->line('[.] Stardust: ' . $profile['stardust']);
    }
}
