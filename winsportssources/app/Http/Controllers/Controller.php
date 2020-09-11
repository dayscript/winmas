<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Matches;
use App\Teams;
use App\Home;
use App\Logos;
use App\Conferences;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        // return \Hash::make(12345);
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","domingo");
        $random = rand(0,1);
        $home = Home::where('id',3)->first();
        $matches = Matches::all();
        $teams = Teams::all();
        $conference = Conferences::where('id','>',0)->first();
        if(isset($home)){
            foreach($home->questions_asigned as $question){
                $logo = Logos::find($question->logo);
                $question->logo = $logo->logo;
            }
        }

        foreach($matches as $match){
            foreach($teams as $team){
                if($match->team_1_id == $team->id){
                    $match->name_team_1 = $team->name;
                    $match->logo_team_1 = $team->logo;
                }
                if($match->team_2_id == $team->id){
                    $match->name_team_2 = $team->name;
                    $match->logo_team_2 = $team->logo;
                }
            }
            $fecha = Carbon::parse($match->date);
            // dd($fecha->format('n'));
            $mes = $meses[($fecha->format('n')) - 1];
            $numero_dia=date('w', strtotime($fecha));
            $dia = $dias[($numero_dia)- 1];
            $match->date = $dia. ' ' .$fecha->format('d') . ' de ' . $mes;
        }

        if($random > 0){
            if(isset($matches)){
                return view('infografia')->with('matches', $matches)->with('conference',$conference->name)->with('home',$home);
            }else{
                return view('infografia');
            }
        }
        else{
            if(isset($matches)){
                return view('video')->with('matches', $matches)->with('conference',$conference->name)->with('home',$home);
            }else {
                return view('video');
            }
        }

    }
    public function videoLanding()
    {
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","domingo");
        $random = rand(0,1);
        $home = Home::where('id',3)->first();
        $matches = Matches::all();
        $teams = Teams::all();
        $conference = Conferences::where('id','>',0)->first();
        if(isset($home)){
            foreach($home->questions_asigned as $question){
                $logo = Logos::find($question->logo);
                $question->logo = $logo->logo;
            }
        }

        foreach($matches as $match){
            foreach($teams as $team){
                if($match->team_1_id == $team->id){
                    $match->name_team_1 = $team->name;
                    $match->logo_team_1 = $team->logo;
                }
                if($match->team_2_id == $team->id){
                    $match->name_team_2 = $team->name;
                    $match->logo_team_2 = $team->logo;
                }
            }
            $fecha = Carbon::parse($match->date);
            $mes = $meses[($fecha->format('n')) - 1];
            $numero_dia=date('w', strtotime($fecha));
            $dia = $dias[($numero_dia)- 1];
            $match->date = $dia. ' ' .$fecha->format('d') . ' de ' . $mes;
        }

        if(isset($matches)){
            return view('video')->with('matches', $matches)->with('conference',$conference->name)->with('home',$home);
        }else {
            return view('video');
        }

    }
    public function infografiaLanding()
    {
        $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
        $dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado","domingo");
        $random = rand(0,1);
        $home = Home::where('id',3)->first();
        $matches = Matches::all();
        $teams = Teams::all();
        $conference = Conferences::where('id','>',0)->first();
        if(isset($home)){
            foreach($home->questions_asigned as $question){
                $logo = Logos::find($question->logo);
                $question->logo = $logo->logo;
            }
        }

        foreach($matches as $match){
            foreach($teams as $team){
                if($match->team_1_id == $team->id){
                    $match->name_team_1 = $team->name;
                    $match->logo_team_1 = $team->logo;
                }
                if($match->team_2_id == $team->id){
                    $match->name_team_2 = $team->name;
                    $match->logo_team_2 = $team->logo;
                }
            }
            $fecha = Carbon::parse($match->date);
            $mes = $meses[($fecha->format('n')) - 1];
            $numero_dia=date('w', strtotime($fecha));
            $dia = $dias[($numero_dia)- 1];
            $match->date = $dia. ' ' .$fecha->format('d') . ' de ' . $mes;
        }
        if(isset($matches)){
            return view('infografia')->with('matches', $matches)->with('conference',$conference->name)->with('home',$home);
        }else{
            return view('infografia');
        }
    }
}
