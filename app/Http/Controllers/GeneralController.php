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
        $food->carbs = request("txtCarbos");
        $food->proteins = request("txtProte");
        $food->fats = request("txtGrasas");

        $food->save();

        return redirect("/registerfood");
    }

    public function deleteFood($id){
        $comida = Food::find($id);
        $comida->delete();
        return redirect("/registerfood");
    }

    public function getFood($id){
        $comida = Food::find($id);
        return view('editFood')->with('food', $comida);
    }

    public function saveEditFood(Request $request){
        $id = request("txtID");
        $food = Food::find($id);
        $food->name = request("txtAlimento");
        $food->carbs = request("txtCarbos");
        $food->proteins = request("txtProte");
        $food->fats = request("txtGrasas");

        $food->save();

        return redirect("/registerfood");
    }
}
