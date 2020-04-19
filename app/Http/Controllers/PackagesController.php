<?php

namespace App\Http\Controllers;

use App\Packages;
use Illuminate\Http\Request;

class PackagesController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('packages.index', ['Packeges' => Packages::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      //  dd($request);
           Packages::create([


            'name'             => request()->name,
            'size'             => request()->size,
            'Qunitiy'          => request()->Qunitiy,
            'price'            => request()->price,
            'Unit_Price'       => request()->price / request()->Qunitiy 
           ]);


           return redirect()->to(route('Packages.index'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Packages $Packages)
    {
        
        return view('packages.edit' , compact('Packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Packages $Packages)
    {
        $attributes = request()->validate([

            'name'             => ['required',  'max:255'],
            'size'             => ['required',  'max:255'],
            'Qunitiy'          => ['required',  'max:255'],
            'price'            => ['required',  'max:255'],
            'Unit_Price'       => ['required',  'max:255'],
           
        ]);
            $Packages->update($attributes);
            return redirect()->to(route('Packages.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Packages $Packages)
    {
        $Packages->delete();
        return redirect()->to(route('Packages.index'));
    }
}
