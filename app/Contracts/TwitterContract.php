<?php

namespace App\Contracts;

use Illuminate\Contracts\Auth\Authenticatable;
use App\DataTransfers\SendTweetDTO;
use App\Models\User;

interface TwitterContract
{
  public function sendTweet(User|Authenticatable $user, SendTweetDTO $sendTweetDTO) : bool;
}
