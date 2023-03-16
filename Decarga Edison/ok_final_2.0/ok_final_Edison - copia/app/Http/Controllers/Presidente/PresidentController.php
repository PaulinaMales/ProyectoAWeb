<?php

namespace App\Http\Controllers\Presidente;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Presidente;
use App\Models\Equipo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PresidentController extends Controller
{
    //
    // public function __construct()
    // {
    //     $this->middleware('auth');
    //     $this->middleware('solopresident',['only'=> ['index']]);
    // }


    public function index()
        {
            $user = Auth::user();
            $presidente = Presidente::where('usuario_id', $user->id)->first();
            $equipo = Equipo::find($presidente->equipo_id);
            return view('presidente.president', compact('equipo'));
        }

}
