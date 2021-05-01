<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Order;
use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'customer_id' => Customer::factory()->create()->id,
            'cart' => $this->faker->sentence,
            'delivery_id' => 1,
            'total_cost' => 30000,
            'status' => 0,
            'order_data' => now(),
        ];
    }
}
