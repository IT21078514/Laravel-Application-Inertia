<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class HomeController extends Controller
{
    //function to return the view of home page
    public function index(){
        return Inertia::render('Dashboard/index');
    }

}
