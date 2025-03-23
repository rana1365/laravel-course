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
        Model::factory()
            ->count(5)
            ->for(Maker::factory()->state(['name' => 'Tesla']))
            ->create();
        

        return view('home.index');
    }
}
