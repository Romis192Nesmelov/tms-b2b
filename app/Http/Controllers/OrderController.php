<?php

namespace App\Http\Controllers;
use App\Models\ArticleOrder;
use App\Models\Order;
use App\Http\Requests\{BasketRequest, MessageRequest, OrderRequest};
use App\Jobs\SendMessage;
use \Illuminate\Http\JsonResponse;
use App\Models\Article;

class OrderController extends BaseController
{
    /**
     * Display home page.
     */
    public function message(MessageRequest $request): JsonResponse
    {
//        Order::query()->create($request->all());
        dispatch(new SendMessage('message', $request->all()));
        return response()->json([
            'success' => true,
            'answer' => __('The order has been successfully submitted!')
        ],200);
    }

    public function basket(BasketRequest $request): JsonResponse
    {
        if (!$request->session()->has('basket')) $request->session()->put('basket', []);
        $basket = $request->session()->get('basket');
        $action = null;

        if ($request->value) {
            if (!array_key_exists($request->id, $basket)) {
                $article = Article::query()->where('id',$request->id)->select(['article','name'])->first();
                $basket[$request->id] = ['value' => $request->value, 'article' => $article->article, 'name' => $article->name];
                $action = 'add';
            } else $basket[$request->id]['value'] = $request->value;
        } else {
            unset($basket[$request->id]);
            $action = 'remove';
        }

        $request->session()->put('basket', $basket);

        return response()->json([
            'success' => true,
            'id' => $request->id,
            'article' => isset($article->article) ? $article->article : '',
            'name' => isset($article->name) ? $article->name : '',
            'value' => $request->value,
            'counter' => count($request->session()->get('basket')),
            'action' => $action
        ],200);
    }

    /**
     * @param OrderRequest $request
     * @return JsonResponse
     */
    public function makeAnOrder(OrderRequest $request): JsonResponse
    {
//        $order = Order::query()->create($request->all());
//        foreach (array_keys($request->session()->get('basket')) as $id) {
//            ArticleOrder::query()->create([
//                'article_id' => $id,
//                'order_id' => $order->id
//            ]);
//        }

        dispatch(new SendMessage('order', $request->all()));
        $request->session()->forget('basket');
        return response()->json([
            'success' => true,
            'empty_basket' => true,
            'answer' => __('The order has been successfully submitted!')
        ],200);
    }
}
