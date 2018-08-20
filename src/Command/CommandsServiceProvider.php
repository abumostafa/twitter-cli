<?php

namespace Abumostafa\TweetsNotify\Command;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use TwitterAPIExchange;

class CommandsServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['twitter_sdk'] = function () {
            return new TwitterAPIExchange([
                'oauth_access_token' => '',
                'oauth_access_token_secret' => '',
                'consumer_key' => '',
                'consumer_secret' => '',
            ]);
        };

        $pimple['tweets:fetch'] = function ($app) {
            return new TweetsFetcherCommand(
                $app['twitter_sdk']
            );
        };
    }
}
