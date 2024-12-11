<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class AdminController extends Controller
{
    // 1. Показ формы добавления подписки
    public function addSubscription()
    {
        return view('admin.add_subscription');
    }

    // 2. Обработка данных из формы добавления подписки
    public function storeSubscription(Request $request)
    {
        $validated = $request->validate([
            'Name' => 'required|string|max:255',
            'Type' => 'required|string|max:255',
            'Duration' => 'required|integer|min:1',
            'Price' => 'required|numeric|min:0',
            'Logo' => 'nullable|string|max:255',
        ]);

        Subscription::create($validated);

        return redirect()->route('admin.view_subscriptions')->with('success', 'Subscription added successfully!');
    }

    // 3. Просмотр всех подписок
    public function viewSubscriptions()
    {
        $subscriptions = Subscription::all();
        return view('admin.view_subscriptions', compact('subscriptions'));
    }

    // 4. Редактирование подписки
    public function editSubscription($id)
    {
        $subscription = Subscription::findOrFail($id);
        return view('admin.edit_subscription', compact('subscription'));
    }

    public function updateSubscription(Request $request, $id)
{
    // Находим подписку по ID
    $subscription = Subscription::find($id);

    // Если подписка не найдена, можно вернуть ошибку
    if (!$subscription) {
        return redirect()->route('admin.view_subscriptions')->with('error', 'Subscription not found!');
    }

    // Валидируем данные из формы
    $request->validate([
        'name' => 'required|string|max:255',
        'type' => 'required|string|max:255',
        'duration' => 'required|string|max:255',
        'price' => 'required|numeric|min:0',
        'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Обновляем данные подписки
    $subscription->name = $request->input('name');
    $subscription->type = $request->input('type');
    $subscription->duration = $request->input('duration');
    $subscription->price = $request->input('price');

    // Если загружается новый логотип, обновляем его
    if ($request->hasFile('logo')) {
        $logoPath = $request->file('logo')->store('logos', 'public');
        $subscription->logo = $logoPath;
    }

    // Сохраняем изменения в базе данных
    $subscription->save();

    // Перенаправляем обратно с успешным сообщением
    return redirect()->route('admin.view_subscriptions')->with('success', 'Subscription updated successfully!');
}

}
