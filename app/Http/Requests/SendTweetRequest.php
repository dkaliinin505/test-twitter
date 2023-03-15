<?php

namespace App\Http\Requests;

use App\Contracts\DTO;
use App\DataTransfers\SendTweetDTO;

class SendTweetRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tweet' => 'required|string|max:200'
        ];
    }

    public function getDTO(): DTO
    {
        return new SendTweetDTO(
            $this->input('tweet')
        );
    }
}
