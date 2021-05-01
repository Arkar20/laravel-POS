<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function show(Order $order)
    {
        // return $order;
        $this->authorize('update', $order);

        return view('voucher.vouchermyanmar', compact('order'));
    }
}
