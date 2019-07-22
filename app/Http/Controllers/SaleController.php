<?php

namespace App\Http\Controllers;
use App\Product;
use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // return view('pages.sales_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

         $created=Sale::create([

            'product_id'=> $request->product_id ,
            'product_name'=>$request->product_name, 
            'trans_date'=>$request->trans_date , 
            'transaction_id'=>$request->transaction_id, 
            'sell_price'=>$request->sell_price ,
             'quantity'=>$request->quantity , 
             'subtotal'=>$request->subtotal 
             
        ]);

        if($created){
            return redirect('pages/sales_form')->with ('message' , 'Sales Added successfully');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }

  public function search(Request $request){

       

         $productName= $request['productName'];
        $products= Product::where('product_name', 'LIKE' , '%' .$productName. '%')->get();
        return view('pages.sales_form' , compact('products'));

           
   
    }


}



