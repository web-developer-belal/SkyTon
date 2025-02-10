<?php
namespace Skyton\Enlangtranslet\Commands;

use Illuminate\Console\Command;

class GrowGrassCommand extends Command
{
    protected $signature = 'grow:grass';

    public function handle()
    {
        // Fake command
        $this->info('The grass is growing!');
    }
}