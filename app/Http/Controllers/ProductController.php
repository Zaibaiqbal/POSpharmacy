<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{


    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::paginate(3);
        return view('pages.product_list', compact('products'))->with('no', 1);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.addproduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
         $product = Product::find($product->id);
         return view('pages.show', compact('product'));
    }

public function save(Request $request)
    {
      $created= Product::create([
        'product_id' => $request->product_id,
        'product_name' => $request->product_name,
        'type' => $request->type,
        'cost_price' => $request->cost_price,
        'sell_price' => $request->sell_price,
        'exp_date' => $request->exp_date,
        'quantity' => $request->quantity,
        'invoice_id' => $request->invoice_id,
        'product_desc' => $request->product_desc
        ]);
        
        if($created){
            return redirect('/addproduct')->with ('message','Product added successfully');
        }
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */


     public function edit($id) //Product $product
     {
       
       $products = Product::findOrFail($id);
        
         return view('pages.editproduct' , compact('products'));
    }
/**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

    
        $id=$request->post("id");

            $products = Product::findOrFail($id);
        
            $input = $request->all();
        
            $products->fill($input)->save();
        
          //  Session::flash('flash_message', 'Product successfully updated!');
        
          return redirect('/pages/product_list')->with ('message','Product updated successfully');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product_id = Product::find($id);
        $deleted = $product_id->delete();
        if($deleted) {
        return redirect('/pages/product_list')->with('message' , 'Product deleted Successfully!');

        }

    }
    //  public function search(Request $request){

       

    //     $productName= $request['productName'];
    //       $products= Product::where('product_name', 'LIKE' , '%' .$productName. '%')->get();
    //      return view('pages.sales_form' , compact('products'));

            
    
    //  }
 }

