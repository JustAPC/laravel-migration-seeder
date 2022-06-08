<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $currentDate = date("Y-m-d");

        $trains = Train::where('departure_day', '=', $currentDate)->get();

        return view('pages.home', compact('trains'));
    }
}
