<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function index()
    {

        $product = Product::with('product_categories:id,categorieName')->get();  
      
        
        return view('product.index', compact('product'));
    }



        public function create ()
        {


             return view('product.create' , ['product_categroies' => ProductsCategories::all()]);
        }

        public function store()
        {
            
        Product::create([

                'productcat_id'    => request()->productcat_id,
                'productName'      => request()->productName,
                'productQuantity'  => request()->productQuantity,
                'productPrice'     => request()->productPrice,
                'unitPrice'        => request()->productPrice / request()->productQuantity

            ]);
            
              
               return redirect()->to(route('product.index'));

        }

        public function edit (Product $Product)
        {

            $lol =  ProductsCategories::all();
            return view('product.edit', compact('Product' ,'lol'));
           
        }


        public function update(Product $Product)
        {       

                $attributes = request()->validate([

                    'productcat_id'    => ['required',  'max:255'],
                    'productName'      => ['required',  'max:255'],
                    'productName'      => ['required',  'max:255'],
                    'productName'      => ['required',  'max:255'],
                    'productName'      => ['required',  'max:255'],
                    'productQuantity'  => ['required',  'max:255'],
                    'productPrice'     => ['required',  'max:255'],
                ]);
                $Product->update($attributes);
              
                return redirect()->to(route('product.index'));
        }

        public function delete(Product $Product)
        {
            $Product->delete();
    
    
            return redirect()->to(route('product.index'));
        }
}
