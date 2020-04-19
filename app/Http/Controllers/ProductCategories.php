<?php

namespace App\Http\Controllers;

use App\ProductsCategories;
use Illuminate\Http\Request;

class ProductCategories extends Controller
{

    public function index()
    {
            $ProductCat = ProductsCategories::all();

         return view('productcat.index' , compact('ProductCat'));
    }


    public function create()
    {
        return view('productcat.create');
    }



    public function store(Request $request)
    {

        ProductsCategories::create($request->all());

        return redirect()->to(route('productcat'));
    }


    public function edit(ProductsCategories $Products_Categories)
    {

       return view('productcat.edit', compact('Products_Categories'));
    }

    public function update(ProductsCategories $Products_Categories)
    {

      $attr =    request()->validate([

            'categorieName' => ['string', 'required','max:255', 'alpha_dash']
        ]);


        $Products_Categories->update($attr);

        return redirect()->to(route('productcat'));

    }

    public function delete(ProductsCategories $Products_Categories)
    {
        $Products_Categories->delete();


        return redirect()->to(route('productcat'));
    }
}
