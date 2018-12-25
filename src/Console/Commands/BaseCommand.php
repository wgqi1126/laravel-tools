<?php

namespace Wgqi1126\LaravelTools\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command
{
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if (!app()->isLocal()) {
            $this->error(__('Dev command must run on dev env'));
            die(2);
        }
        return parent::execute($input, $output);
    }
}
