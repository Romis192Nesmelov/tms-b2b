<?php

namespace App\Http\Controllers;
use App\Http\Requests\OrderRequest;
use App\Jobs\SendMessage;
use \Illuminate\Http\JsonResponse;

class OrderController extends BaseController
{
    /**
     * Display home page.
     */
    public function __invoke(OrderRequest $request): JsonResponse
    {
        dispatch(new SendMessage('order', $request->all()));
        return response()->json(['success' => true],200);
    }
}
