<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Commandname extends Command
{
   /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Greet a user by name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): void
    {
        $name = $this->argument('name');
        $this->info("Hello, $name!!!!!!!!!!!!");
    }
}
