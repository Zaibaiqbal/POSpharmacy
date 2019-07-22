<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
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
        $suppliers= Supplier::all();
        return view('pages.supplier-list', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages/addsupplier');
    }

    public function showSupplierForDropdown() {
        $query = 'select * from tbl_supplier order by supplier_name asc';
        $stmt = $this->dbObj->select($query);
        return $stmt;
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
    public function save(Request $request)
    {
    $created= Supplier::create([
        'supplier_id' => $request->supplier_id,
        'supplier_name' => $request->supplier_name,
        'address' => $request->address,
        'city' => $request->city,
        'postal_code' => $request->postal_code,
        'tel_no' => $request->tel_no,
        'product_id' => $request->product_id,
        'email' => $request->email
        ]);
        
        if($created){
            return redirect('/addsupplier')->with ('message','Supplier added successfully');
        }


    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
         $supplier = Supplier::find($supplier->id);
         return view('pages.supplierprofile', compact('supplier'));
    }
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        


        $suppliers = Supplier::findOrFail($id);
        
         return view('pages.editsupplier' , compact('suppliers'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
        $id=$request->post("id");

            $suppliers = Supplier::findOrFail($id);
        
            $input = $request->all();
        
            $suppliers->fill($input)->save();
        
          //  Session::flash('flash_message', 'Product successfully updated!');
        
          return redirect('/pages/supplier-list')->with ('message','Supplier updated successfully');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier_id = Supplier::find($id);
        $deleted = $supplier_id->delete();
        if($deleted) {
        return redirect('/pages/supplier-list')->with('message' , 'Supplier deleted Successfully!');
    }
}
}