<?php

namespace Wgqi1126\LaravelTools\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseLocalCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!app()->isLocal()) {
            if (!$this->confirm(__('Are you sure run this command in a non-local environment?'))) {
                die(2);
            }
        }
        return parent::execute($input, $output);
    }
}
