<?php

namespace App\Http\Controllers;

use App\Packages;
use App\Product;
use App\Sales;
use App\SalesInvoices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
     
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
            
        $Sales = Sales::all();
    
         return view('invoices.sales.index' , compact('Sales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      

      
        return view(
            'sales.create', [
             'Packges' => Packages::all(),
             'Product' => Product::all(),
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    // dd($request->product_id);   
        $SaleInvoicesObj =  SalesInvoices::create();
        for($i=0; $i < count($request->Product_id); $i++){
            Sales::create([
           'sales_invoices_id' => $SaleInvoicesObj->id,
            'Qunitiy' =>  $request->Qunitiy[$i],
            'Product_id' => $request->Product_id[$i],
            'packages_id' => $request->packages_id[$i],
            'price'   => $request->price[$i]

            ]);
        }
   



         return redirect('/Sales/Invoices');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sales $Sales)
    {
        $Sales->delete();

        return redirect('/Sales');

    }
}
