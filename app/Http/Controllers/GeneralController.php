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

        
        //$pedido->save();

        /* $path = $request->file('archivo')->storeAs('public/imagenes',$pedido->id.'.'.$request->file('archivo')->getClientOriginalExtension());
        $pedido->imagen=$pedido->id.'.'.$request->file('archivo')->getClientOriginalExtension(); */

        // dd($path);

        $food->save();

        //Auth::attempt(['email' => $email, 'password' => $password])

        return redirect("/registerfood");
    }

    public function deleteFood($id){
        $comida = Food::find($id);
        $comida->delete();
        return redirect("/registerfood");
    }
}
