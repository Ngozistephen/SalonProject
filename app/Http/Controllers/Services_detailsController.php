<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Services_detailsController extends Controller
{
    public function index(){
        return view('services_details');
    }
}
