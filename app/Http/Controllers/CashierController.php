<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cashier;
use App\User;
use App\Models\Products;

class CashierController extends Controller
{
    public function first($id = 1){
        $cashiers = Cashier::find($id);
        $products = Products::all();
        return view('interface', ['name' => $cashiers],)->with('products', $products);
    }
    
}
