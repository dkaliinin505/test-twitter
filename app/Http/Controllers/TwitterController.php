<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendTweetRequest;
use App\Services\TwitterService;

final class TwitterController extends Controller
{

    /**
     * @var TwitterService
     */
    private readonly TwitterService $twitterService;

    /**
     * @param TwitterService $twitterService
     */
    public function __construct(TwitterService $twitterService)
    {
        $this->twitterService = $twitterService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        return view('send-tweet');
    }

    /**
     * @param SendTweetRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Foundation\Application|\Illuminate\Http\Response
     */
    public function sendTweet(SendTweetRequest $request)
    {
        $this->twitterService->sendTweet(auth()->user(), $request->getDTO());

        return response('Tweet successfully sent');
    }
}
