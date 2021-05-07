<?php

namespace App\Http\Livewire\Product;

use Carbon\Carbon;
use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\Customer;
use App\Models\Delivery;
use App\Models\order_product;
use Barryvdh\Debugbar\Twig\Extension\Debug;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Checkout extends Component
{
    use AuthorizesRequests;

    public $delivery;
    public $cart;
    public $customer;
    public $totalcost;
    public $status = 1;
    public $date;

    public $specialCustomer;
    protected $rules = [
        'customer' => 'required',
    ];
    protected $listeners = [
        'selected' => 'showCustomer',
    ];

    public function mount()
    {
        $this->authorize('have_cart', $this->cart);

        $this->cart = \Cart::content();
        $this->totalcost = \Cart::subtotalFloat();
        $this->date = Carbon::now();
    }

    public function showCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }
    public function add()
    {
        $this->validate();

        // dd($this->status);
        $cart = serialize($this->cart);
        $order = Order::create([
            'customer_id' => $this->customer->id,
            'user_id' => auth()->id(),
            'cart' => $cart,
            'status' => $this->status,
            'order_date' => $this->date,
            'delivery_id' => $this->delivery ? $this->delivery->id : null,
            'total_cost' => $this->totalcost,
        ]);
        foreach ($order->cart as $item) {
            $order->products()->attach($item['id'], ['qty' => $item['qty']]);
        }
        \Cart::destroy();
        return redirect()->route('product.display');
    }
    public function calTotalCost(Delivery $delivery)
    {
        $this->delivery = $delivery;
        if ($this->delivery) {
            $deliverycost = $delivery->price;
        }
        $carttotal = \Cart::subtotalFloat();
        $this->totalcost = $carttotal + $deliverycost;
    }
    public function render()
    {
        return view('livewire.product.checkout');
    }
}
