<?php

namespace App\Http\Controllers;

use App\Expenses;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    public function index()
    {

            $Expenses = Expenses::all();

            return view('expenses.index', compact('Expenses'));
        
    }


    public function create ()
    {
        return view('expenses.create');
    }

    public function store (Request $request)
    {

      
       Expenses::create($request->all());

       return redirect('/Expenses');
    }


    public function edit(Expenses $Expenses)
    {
         
        return view('expenses.edit', compact('Expenses'));
    }


    public function update (Expenses $Expenses)
    {   
        
        $Expenses->update(request()->all());

        return redirect('/Expenses');
    }


    public function delete(Expenses $Expenses)
    {
        $Expenses->delete();
        return redirect('/Expenses');
    }
}
