<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $property = new Property();
        $properties = $property->getLastProperties();
        return view('home', ['properties' => $properties]);
    }
}
