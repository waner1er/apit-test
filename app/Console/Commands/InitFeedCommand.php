<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Dymantic\InstagramFeed\Profile;

class InitFeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'wan-app:init-feed-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $profile = Profile::where('username', 'wanerrivet')->first();
        $profile->feed(10);
    }
}
