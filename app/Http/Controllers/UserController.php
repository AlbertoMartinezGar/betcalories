<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Day;
use App\User;
use App\Breakfast;
use App\Lunch;
use App\Dinner;
use App\Food;
use App\BreakfastTo;
use App\DinnerTo;
use App\LunchTo;


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

    public function saveFood($id){
        $userID = request("userID");
        $cantidad = request("cantidad");
        $table = request("comida");

        //Busca al usuario al cual se le agregará el alimento
        $user = User::find($userID);
        
        //Busca el alimento a agregar
        $food = Food::find($id);

        //Busca el día
        $day = Day::find($user->day_id);

        //Switch para saber el que comida se insertará el alimento
        switch($table){
            //Caso 1: Desayuno
            case 1:
                $foodtobreakfast = new BreakfastTo();
                $foodtobreakfast->quantity = $cantidad;
                $foodtobreakfast->food_id = $id;
                $foodtobreakfast->save();
                $breakfast = Breakfast::find($day->breakfast_id);
                
                $breakfast->foodto_id = $foodtobreakfast->id;

                $breakfast->save();

                break;
            //Caso 2: Comida
            case 2:
                $foodtolunch = new LunchTo();
                $foodtolunch->quantity = $cantidad;
                $foodtolunch->food_id = $id;
                $foodtolunch->save();
                $lunch = Lunch::find($day->lunch_id);

                $lunch->foodto_id = $foodtolunch->id;

                $lunch->save();
                
                break;
            //Caso 3: Cena
            case 3:
                $foodtodinner = new DinnerTo();
                $foodtodinner->quantity = $cantidad;
                $foodtodinner->food_id = $id;
                $foodtodinner->save();
                $dinner = Dinner::find($day->dinner_id);

                $dinner->foodto_id = $foodtobreakfast->id;

                $dinner->save();
                
                break;
        }

        return view('/home');
        
    }
}
