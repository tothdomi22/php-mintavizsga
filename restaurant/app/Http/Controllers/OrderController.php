<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Http\Requests\StatusRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('order.index', ['orders' => Order::query()->latest()->paginate(20)]);
    }

    public function create($product)
    {
        return view('order.create', ['product' => $product]);
    }

    public function store(OrderRequest $request)
    {
        Order::query()->Create($request->validated());
        return redirect('/')->with('status', 'Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderRequest $request, Order $order)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }

    public function statusUpdate(StatusRequest $request, Order $order): \Illuminate\Foundation\Application|Redirector|RedirectResponse|Application
    {
        $order->update($request->validated());
        return redirect('/order/index')->with('status', 'Order completed');
    }
}
