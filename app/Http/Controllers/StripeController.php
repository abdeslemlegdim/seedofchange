<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class StripeController extends Controller
{
    public function checkout()
    {
        $events = [
            [
                'name' => 'Beach Cleanup',
                'image' => asset('images/beach-cleanup.jpg'),
                'date' => '2024-05-10',
                'subtotal' => '10USD',
            ],
            [
                'name' => 'Tree Planting Campaign',
                'image' => asset('images/tree-planting.jpg'),
                'date' => '2024-06-20',
                'subtotal' => '20USD',
            ],
            [
                'name' => 'Recycling Awareness Workshop',
                'image' => asset('images/recycling-workshop.jpg'),
                'date' => '2024-07-05',
                'subtotal' => '15USD',
            ],
            [
                'name' => 'Wildlife Conservation',
                'image' => asset('images/wildlife-conservation.jpg'),
                'date' => '2024-08-15',
                'subtotal' => '25USD',
            ],
            [
                'name' => 'Eco-friendly Seminar',
                'image' => asset('images/eco-friendly-seminar.jpg'),
                'date' => '2024-09-05',
                'subtotal' => '12USD',
            ],
            [
                'name' => 'Organic Farming Project',
                'image' => asset('images/organic-farming.jpg'),
                'date' => '2024-10-10',
                'subtotal' => '18USD',
            ],
            [
                'name' => 'Water Conservation Campaign',
                'image' => asset('images/water-conservation.jpg'),
                'date' => '2024-11-15',
                'subtotal' => '22USD',
            ],
        ];
    
        return view('checkout', compact('events'));
    }
    
    public function session(Request $request)
    {
        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        $productName = $request->input('productname');
        $totalPrice = $request->input('total') . "00";

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => $productName,
                    ],
                    'unit_amount' => $totalPrice,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => route('success'),
            'cancel_url' => route('checkout'),
        ]);

        return redirect()->away($session->url);
    }

    public function success()
    {
        return view('success');
    }
}