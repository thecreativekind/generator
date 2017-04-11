<?php

namespace Tck\Generator\Console\Commands;

use Illuminate\Console\Command;

class GenerateResource extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:resource {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scaffold a resource.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Create Model
        $this->line($this->argument('name'));

        // Create Model Test
        // Create Migration
        // Create Controller
        // Create Views
        // Update Route list
    }
}