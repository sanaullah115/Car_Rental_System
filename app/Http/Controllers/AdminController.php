<?php

namespace App\Http\Controllers;

use App\Models\CarBrands;
use Illuminate\Http\Request;
use Carbon\Carbon;


class AdminController extends Controller
{
    public function dashbaord()
    {
        return view('Admin.dashbaord');
    }



    public function CarbrandsFrom()
    {
        return view('Admin.carBrands');
    }


    public function Carbrands(Request $request)
    {
        $request->validate(CarBrands::$roles);
        $brands = new CarBrands();
        $brands->Brands_Name  =  $request->Brands_Name;
        $brands->Brands_Discription  =    $request->Brands_Discription;
        $imagename = Carbon::now("Asia/Karachi").'.'.$request->Brands_Logo->extension();
        $request->Brands_Logo->move(public_path('BrandsUpload', $imagename));
        $brands->Brands_Logo = $imagename;
        $brands->save();
        return back()->with('success', 'Brands Added successfull.');
    }
}
