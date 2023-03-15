<?php

namespace App\Services;

use App\Models\User;
use App\Contracts\TwitterContract;
use App\DataTransfers\SendTweetDTO;
use Abraham\TwitterOAuth\TwitterOAuth;
use Illuminate\Contracts\Auth\Authenticatable;

class TwitterService implements TwitterContract
{

    /**
     * @param User|Authenticatable $user
     * @param SendTweetDTO $sendTweetDTO
     * @return bool
     */
    public function sendTweet(User|Authenticatable $user, SendTweetDTO $sendTweetDTO): bool
    {
        $twitter = new TwitterOAuth(
            config('services.twitter.client_id'),
            config('services.twitter.client_secret'),
            $user->twitter_token,
            $user->twitter_secret);

        $twitter->post('statuses/update', ['status' => $sendTweetDTO->tweet]);

        return true;
    }
}
