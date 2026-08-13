<?php

namespace App\Http\Controllers;
use App\Http\Requests\MessageRequest;
use App\Jobs\SendMessage;
use \Illuminate\Http\JsonResponse;

class OrderController extends BaseController
{
    /**
     * Display home page.
     */
    public function message(MessageRequest $request): JsonResponse
    {
        dispatch(new SendMessage('message', $request->all()));
        return response()->json([
            'success' => true,
            'answer' => __('The order has been successfully submitted!')
        ],200);
    }
}
