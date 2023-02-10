<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use DateTime;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $today = new DateTime();
        $trains = Train::where('orario_di_partenza', 'like', $today->format('Y-m-d') . '%')->get();
        return view('home', compact('trains'));
    }
}
