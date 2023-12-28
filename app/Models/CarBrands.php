<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarBrands extends Model
{
    use HasFactory;



    protected $fillable = [
        'Brands_Name',
        'Brands_Discription',
        'Brands_Logo',

    ];
    public static $roles =
    [
        'Brands_Name' => 'required|string|unique:car_brands,Brands_Name|max:30',
        'Brands_Discription' => 'required|string',
        'Brands_Logo' => 'required|image|mimes:jpg,png',
    ];
}
