<?php

namespace App\Http\Controllers;

use App\Packages;
use App\Product;
use App\Sales;
use App\SalesInvoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = SalesInvoices::with('Sales')->get();
        $total = 0;
      

         
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'invoices.create', [
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
   



         return redirect('/Invoices');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(SalesInvoices $SalesInvoices)
    {
        return view('invoices.show', compact('SalesInvoices'));
    }


    public function editproduct (SalesInvoices $SalesInvoices)
    {


         foreach($SalesInvoices->Sales as $SaleItems)
         {
           $countProduct = $SaleItems->Product->productQuantity - $SaleItems->Qunitiy;
           $CountPackages =  $SaleItems->Packages->Qunitiy - 1;
          
            $SaleItems->Product->update(['productQuantity' => $countProduct]);
            $SaleItems->Packages->update(['Qunitiy' => $CountPackages]);
         }

         return redirect('/Invoices');
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(SalesInvoices $SalesInvoices)
    {
            $SalesInvoices->delete();
            return redirect('/Invoices');
    }
}
