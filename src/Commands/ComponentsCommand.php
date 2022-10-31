<?php

namespace Jah\Components\Commands;

use Illuminate\Console\Command;

class ComponentsCommand extends Command
{
    public $signature = 'components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
