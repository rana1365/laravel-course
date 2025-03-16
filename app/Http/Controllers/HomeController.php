<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Select All Cars
        //$cars = Car::get();

        // Select published Cars

        $cars = Car::where('published_at', '!=', null)->get();
        
        dump($cars);

        return view('home.index');
    }
}
