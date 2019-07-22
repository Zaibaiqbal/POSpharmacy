<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function dashboard(){
        return view('pages.index');
    }

    public function staffregister(){
return view('pages.staff-registration');

    }
    public function admin(){
        return view('pages.admin');
        
            }
    public function sales_item(){
    $products=[];
     return view('pages.sales_form', compact('products'));
                
                    }
     public function addproduct(){
       return view('pages.addproduct');
                                   
                                       }

       public function addsupplier(){
       return view('pages.addsupplier');
                                                                    
                           }
                           
      
 

}