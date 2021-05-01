<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public $guarded = [];
    // public function getSizeAttribute($value)
    // {
    //     if (strlen($value) == 5) {
    //         $subnum = 2;
    //         $second_number = substr($value, 3, 2);
    //     } elseif (strlen($value) == 8) {
    //         $subnum = 3;
    //         $second_number = substr($value, 4, 4);
    //     } else {
    //         $subnum = 1;
    //         $second_number = substr($value, 2, 2);
    //     }
    //     $first_number = substr($value, 0, $subnum);

    //     return $first_number . '"' . '-' . $second_number . '"';
    // }
}
