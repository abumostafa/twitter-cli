<?php

namespace Abumostafa\TweetsNotify\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TweetsFetcherCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('tweets:fetch')
            ->setDescription('Fetch tweets');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    }
}
