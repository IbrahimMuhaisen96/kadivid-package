<?php

namespace Ibrah\Ibrahipkg\Commands;

use Illuminate\Console\Command;

class IbrahipkgCommand extends Command
{
    public $signature = 'skeleton';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
