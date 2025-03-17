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

        //$cars = Car::where('published_at', '!=', null)->get();
        
        //dump($cars);

        /* Insert data into db
        $car = new Car();

        $car->maker_id = 1;
        $car->model_id = 2;
        $car->year = 2012;
        $car->price = 3000;
        $car->vin = 'cs001';
        $car->mileage = 900;
        $car->car_type_id = 2;
        $car->fuel_type_id = 2;
        $car->user_id = 1;
        $car->city_id = 2;
        $car->address = "demo1";
        $car->phone = "01521370115";
        $car->description = "test2";
        $car->published_at = now();

        $car->save(); */
        

        $carData = 
        [
            'maker_id' => 2,
            'model_id' => 2,
            'year' => 2013,
            'price' => 4200,
            'vin' => "cs002",
            'mileage' => 1300,
            'car_type_id' => 1,
            'fuel_type_id' => 2,
            'user_id' => 1,
            'city_id' => 2,
            'address' => "test3",
            'phone' => "01245678",
            'description' => "demo text1",
            'published_at' => now(),
        ];

        /* Inserting associative array data into db approach-1
        $car = Car::create($carData); -- */

        /*-- Inserting associative array data into db approach-2
        $car2 = new Car();
        $car2->fill($carData);
        $car2->save(); --*/

        /* Inserting associative array data into db approach-3
        $car3 = new Car($carData);
        $car3->save(); -- */

        /*  Update Specific data approach-1
        $car = Car::find(3);
        $car->price = 4000;
        $car->save(); -- */

        /* Update data approach-2
        Car::updateOrCreate(
            ['price' => 4200], 
            ['price' => 5000],
        ); -- */

        return view('home.index');
    }
}
