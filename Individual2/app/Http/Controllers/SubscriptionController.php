<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    
    public function index()
    {
        $subscriptions = Subscription::all(); // Все подписки по умолчанию
        return view('index', compact('subscriptions'));
    }

    public function filter(Request $request)
    {
        $filter = $request->input('filter', 'none');
        
        if ($filter != 'none') {
            $subscriptions = Subscription::where('Type', $filter)->get(); // Фильтрация
        } else {
            $subscriptions = Subscription::all(); // Все подписки
        }

        return view('index', compact('subscriptions'));
    }
}

