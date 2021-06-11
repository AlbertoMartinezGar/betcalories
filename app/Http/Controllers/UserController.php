<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\User;
use App\Day;
use App\FoodTo;
use App\Food;
use PDF;


class UserController extends Controller
{
    public function addFood($date){
        $food = Food::all();
        return view('addfood')->with('foods', $food)->with('date', $date);
    }

    public function search($date){
        $palabra = request("busqueda");
        $id = request("id");
        $user = User::find($id);

        if(!is_null($palabra) && $palabra != ""){
            $food = Food::where('name', 'Like', '%'.$palabra.'%')->get();
        }
        else{
            $food = Food::all();
        }

        return view('addfood')->with('foods', $food)->with('date', $date);
    }

    public function searchRegisteredFoods($date){
        $palabra = request("busqueda");

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

        return view('recuento')->with('foods', $foods)->with('date', $date);
    }

    public function getDailyCalories($date){

        //$date = date('Y-m-d');
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
        return view('recuento')->with('foods', $foods)->with('date', $date);
    }

    public function saveFood($id){
        $date = request("fecha");
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

        //return view('home');
        return redirect("/mycalories/$date")->with('foods', $foods);
    }

    public function deleteFood($id){
        $date = request("fecha");
        $food = FoodTo::find($id);
        //dd($date);
        $food->delete();
        return redirect("/mycalories/$date");
    }

    public function downloadReport(){
        $days = Day::where('user_id', '=', Auth::user()->id)->orderBy('date', 'DESC')->take(3)->get();


        $food1 = FoodTo::where('day_id', '=', $days[0]->id)
                                ->join('food', 'foodcount.food_id', '=', 'food.idFood')->get();
        
        $food2 = FoodTo::where('day_id', '=', $days[1]->id)
                                ->join('food', 'foodcount.food_id', '=', 'food.idFood')->get();
        
        $food3 = FoodTo::where('day_id', '=', $days[2]->id)
                                ->join('food', 'foodcount.food_id', '=', 'food.idFood')->get();

        $pdf = PDF::loadView('report', compact('food1', 'food2', 'food3'));
        return $pdf->download('reporte.pdf');
    }
}
