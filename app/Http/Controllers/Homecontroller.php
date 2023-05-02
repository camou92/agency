<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index() {
        $properties = Property::with('pictures')->available(true)->recent()->limit(4)->get();
        return view('home', [
            'properties' => $properties
        ]);
    }
}
