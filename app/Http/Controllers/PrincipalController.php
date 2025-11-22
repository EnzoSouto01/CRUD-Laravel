<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    public static function principal(){
        return view('site.principal');
    }
    public static function tecnico(){
        return view('site.tecnico');
    }
    public static function mtec(){
        return view('site.mtec');
    }
    public static function ams(){
        return view('site.ams');
    }
    public static function secretaria(){
        return view('site.secretaria');
    }
    public static function contato(){
        return view('site.contato');
    }
}