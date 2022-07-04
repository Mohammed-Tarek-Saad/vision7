<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RdController;

class RdController extends Controller
{

public function home()
{
    return 'home';
}

public function about()
{
    return 'about';
}

public function contact()
{
    return 'contact';
}
    
}