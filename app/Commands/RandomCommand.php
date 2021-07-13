<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Http;
use LaravelZero\Framework\Commands\Command;

class RandomCommand extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'random';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'Print a random inspirational quote';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        // Allow overriding API URL for development
        $apiUrl = env('API_URL', 'https://quotes.sajadtorkamani.com');

        // Get quote
        $quote = Http::get("$apiUrl/random")->json();
        $content = $quote['content'];
        $author = $quote['author'];

        // Print quote
        if ($author) {
            $this->info("$content ($author)");
        } else {
            $this->info($content);
        }
    }
}
