<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Tour;
use App\Models\TruckType;

class WelcomeController extends Controller
{
    public function index()
    {
        $tours = Tour::with(['features'])->get();

    
      
        return view('welcome', compact('tours'));
    } // end of index

}//end of controller
