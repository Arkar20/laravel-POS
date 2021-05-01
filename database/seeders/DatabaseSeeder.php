<?php

namespace Database\Seeders;

use App\Models\Size;
use App\Models\User;
use App\Models\Color;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //color
        $colors = ['အညို', 'အဖြူ'];
        foreach ($colors as $color) {
            Color::create(['color' => $color]);
        }
        //end of color

        // start of size
        $sizes = [
            '9-12',
            '8-10',
            '9-11',
            '8-11',
            '9.5-10.5',
            '10-13',
            '31-41',
            '27-34',
        ];
        foreach ($sizes as $size) {
            Size::create([
                'size' => $size,
            ]);
        }
    }
}
