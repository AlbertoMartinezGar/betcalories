<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Food;

class GeneralController extends Controller
{
    public function showLogin(){
        return view('login');
    }

    public function registerFood(){
        $food = Food::all();
        return view('registerFood')->with('foods', $food);
    }

    public function savefood(Request $request){
        $food= new Food();
        $food->name = request("txtAlimento");
        $food->totalCalories = request("txtTotalCal");
        $food->carbs = request("txtCarbos");
        $food->proteins = request("txtProte");
        $food->fats = request("txtGrasas");

        $food->save();

        return redirect("/registerfood");
    }

    public function deleteFood($id){
        $comida = Food::where('idFood', '=', $id);
        $comida->delete();
        return redirect("/registerfood");
    }

    public function getFood($id){
        $comida = Food::where('idFood', '=', $id)->first();
        return view('editFood')->with('food', $comida);
    }

    public function saveEditFood(Request $request){
        
        Food::where('idFood', request("txtID"))->update(array(
            'name' => request("txtAlimento"),
            'carbs' => request("txtCarbos"),
            'proteins' => request("txtProte"),
            'fats' => request("txtGrasas"),
            'totalCalories' => request("txtTotalCal")
        ));


        return redirect("/registerfood");
    }

    public function homeadmin(){
        return view('/homeadmin');
    }
}
