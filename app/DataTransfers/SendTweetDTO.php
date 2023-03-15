<?php

namespace App\DataTransfers;

use App\Contracts\DTO;
use Illuminate\Http\UploadedFile;

final class SendTweetDTO implements DTO
{
    public readonly string $tweet;

    public function __construct(
        $tweet,
    )

    {
        $this->tweet = $tweet;
    }
}
