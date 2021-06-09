<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
use App\User;
use App\Breakfast;
use App\Lunch;
use App\Dinner;
use App\Food;


class UserController extends Controller
{
    public function createDay($id){

        $day = new Day();
        $day->day = date('Y-m-d');

        //Creacion de la tabla Breakfast para Day
        $breakfast = new Breakfast();
        $breakfast->save();
        $idBreakfast = $breakfast->id;
        $day->breakfast_id = $idBreakfast;
        

        //Creacion de la tabla Lunch para Day
        $lunch = new Lunch();
        $lunch->save();
        $idLunch = $lunch->id;
        $day->lunch_id = $idBreakfast;
        
        
        //Creacion de la tabla Dinner para Day
        $dinner = new Dinner();
        $dinner->save();
        $idDinner = $dinner->id;
        $day->dinner_id = $idDinner;
        

        $day->save();

        //Se le asigna el dia al usuario
        $user = User::find($id);
        $user->day_id = $day->id;
        $user->save();

        $food = Food::all();
        return view('addfood')->with('foods', $food)->with('user', $user);
    }

    public function addFood($id){
        $user = User::find($id);
        $food = Food::all();
        return view('addfood')->with('foods', $food)->with('user', $user);
    }

    public function search(){
        $palabra = request("busqueda");
        $id = request("id");
        $user = User::find($id);

        if(!is_null($palabra) && $palabra != ""){
            $food = Food::where('name', 'Like', '%'.$palabra.'%')->get();
        }
        else{
            $food = Food::all();
        }

        return view('addfood')->with('foods', $food)->with('user', $user);
    }
}
