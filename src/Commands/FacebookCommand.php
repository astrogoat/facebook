<?php

namespace Astrogoat\Facebook\Commands;

use Illuminate\Console\Command;

class FacebookCommand extends Command
{
    public $signature = 'facebook';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
