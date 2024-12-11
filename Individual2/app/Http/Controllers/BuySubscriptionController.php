<?php


namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

class BuySubscriptionController extends Controller
{
    public function showPurchasePage()
    {
        $subscriptions = Subscription::all();
        return view('buy_subscription', compact('subscriptions'));
    }

    public function purchase($id)
    {
        // Находим подписку по ID
        $subscription = Subscription::findOrFail($id);

        // Логика для обработки покупки подписки
        $user = auth()->user();

        // Добавляем подписку пользователю
        $user->subscriptions()->attach($subscription);

        // Перенаправляем на страницу подтверждения или обратно в каталог
        return redirect()->route('catalog')->with('success', 'Subscription purchased successfully!');
    }
}

