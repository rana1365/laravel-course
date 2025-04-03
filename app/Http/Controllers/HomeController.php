<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Maker;
use App\Models\CarFeatures;
use App\Models\Model;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        
        $cars = Car::where('published_at', '<', now())
                    ->orderBy('published_at', 'desc')
                    ->limit(30)
                    ->get();
        

        return view('home.index', ['cars' => $cars]);
    }
}
