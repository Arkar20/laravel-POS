<?php

namespace App\Policies;

use App\Models\Order;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrderPolicy
{
    use HandlesAuthorization;
    public function before(User $user, $ability)
    {
        if ($user->isAdministrator()) {
            return true;
        }
    }
    public function update(User $user, Order $order)
    {
        return $order->user->is($user);
    }
}
