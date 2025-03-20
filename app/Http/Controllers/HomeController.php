<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Maker;
use App\Models\CarFeatures;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $car = Car::destroy(2);

        return view('home.index');
    }
}
