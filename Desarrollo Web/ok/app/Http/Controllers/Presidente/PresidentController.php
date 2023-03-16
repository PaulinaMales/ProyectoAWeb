<?php

namespace App\Http\Controllers\Presidente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PresidentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('solopresident',['only'=> ['index']]);
    }



    public function index()
    {
        return view('presidente.president');
    }
}
