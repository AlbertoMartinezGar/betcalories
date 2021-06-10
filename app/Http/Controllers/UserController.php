<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Day;
use App\FoodTo;
use App\Food;


class UserController extends Controller
{
    public function addFood(){
        $food = Food::all();
        return view('addfood')->with('foods', $food);
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

    public function searchRegisteredFoods(){
        $palabra = request("busqueda");

        $date = date('Y-m-d');
        $day = Day::where('user_id', '=',  Auth::user()->id )
                                ->where('date', '=', $date  )->first();

        if(!is_null($palabra) && $palabra != ""){
            $foods = FoodTo::where('day_id', '=', $day->id)
                            ->join('food', 'foodcount.food_id', '=', 'food.idFood')
                            ->where('food.name', 'Like', '%'.$palabra.'%')->get();;
        }
        else{
            $foods = FoodTo::where('day_id', '=', $day->id)
                            ->join('food', 'foodcount.food_id', '=', 'food.idFood')->get();
        }

        return view('recuento')->with('foods', $foods);
    }

    public function getDailyCalories(){

        $date = date('Y-m-d');
        $day = Day::where('user_id', '=',  Auth::user()->id )
                                ->where('date', '=', $date  )->first();

        //dd($day);
        if(!$day){
            $day = new Day();
            $day->user_id = Auth::user()->id;
            $day->date = $date;
            $day->save();
        }

        $foods = FoodTo::where('day_id', '=', $day->id)
                            ->join('food', 'foodcount.food_id', '=', 'food.idFood')->get();
        return view('recuento')->with('foods', $foods);
    }

    public function saveFood($id){
        $date = date('Y-m-d');
        $day = Day::where('user_id', '=', Auth::user()->id)
                            ->where('date', '=', $date)->first();

        //dd($day);

        $foodCount = new FoodTo();
        $foodCount->day_id = $day->id;
        $foodCount->food_id = $id;
        $foodCount->quantity = request("cantidad");
        $foodCount->save();

        $foods = FoodTo::where('day_id', '=', "'" . $day->id . "'")
                            ->join('food', 'foodcount.food_id', '=', 'food.idFood')->get();

        return view('home');
        //return view('recuento')->with('foods', $foods);
    }

    public function deleteFood($id){
        $food = FoodTo::find($id);
        $food->delete();
        return redirect("/home");
    }
}
