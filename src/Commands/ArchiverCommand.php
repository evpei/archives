<?php

namespace Evpei\Archiver\Commands;

use Illuminate\Console\Command;

class ArchiverCommand extends Command
{
    public $signature = 'archiver';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
