<?php

namespace Abumostafa\TweetsNotify\Command;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Symfony\Component\Console\Application;

class ConsoleServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['console'] = function ($app) {

            $console = new Application();

            if (isset($app['commands'])) {
                $console->addCommands($app['commands']);
            }

            return $console;
        };
    }
}
