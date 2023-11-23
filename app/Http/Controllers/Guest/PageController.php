<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $trains = Train::all();

        $departing_trains = Train::where('orario_di_partenza', '>=', now())->where('cancellato', 0)->get();

        return view("home", compact("trains","departing_trains"));
    }
}
