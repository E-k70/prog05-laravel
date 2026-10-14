<?php

namespace App\Http\Controllers;

use App\Models\Outfit;
use Illuminate\Http\Request;

class OutfitController extends Controller
{
    public function index()
    {
        return view('outfits');
        $outfit = new Outfit();
        $outfit->title = 'nieuwe fit';
        $outfit->price = 1050;
    }
}
