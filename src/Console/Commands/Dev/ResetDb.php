<?php

namespace Wgqi1126\LaravelTools\Console\Commands\Dev;

class ResetDb extends BaseDevCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ltools:reset-db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Reset all database data';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');
    }
}
