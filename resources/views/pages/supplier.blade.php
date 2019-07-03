<!DOCTYPE html>
<html lang="en">
@extends('master')
<head>
@section('title' ,'Supplier')
</head>
<body style="background-color: #d3d3d3; color: rgb(4, 8, 12);">
@section('content')
  <header id="main-header " style="height: 50px; font-size: 30px;" class="py-2 bg-secondary text-info pb-1">
    <div class=" container">
        <div class="row">
                <div class="col-md-6">
                        <p> <i class="fa fa-cog"></i> Add new Supplier<p>
                </div>
        </div>
    </div>
                </header>

<div class="row">
  <div class="col-md-6">
    <form class="supplier-form" action="{{url('/supplier')}}" method="POST" >
    @if(session('message'))

<p class="alert alert-success"> {{session('message')}} </p>
@endif
{{csrf_field()}}
      <div class="row">
        <div class="col-md-12"><h3> Details </h3></div>
      </div>
      <div class="row">
        <div class="col-md-12">&nbsp;</div>
      </div>
      
      <div class="row">
        <div class="col-md-3 mb-2"> <label>Supplier id: </label> </div>
        <div class="col-md-5 mb-2"><input type="text" name="supplier_id" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-2" ><label> Name: </label> </div>
        <div class="col-md-5 mb-2"><input type="text" name="supplier_name" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-3"> <label> Address:</label> </div>
        <div class="col-md-5 mb-2"><textarea name="address" id="address" rows="5" cols="30"></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-2" > <label> City: </label> </div>
        <div class="col-md-5 mb-2"><input type="text" name="city" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-2"> <label> Pin:</label> </div>
        <div class="col-md-5 mb-2"><input type="number" name="pin" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-2"> <label> Tel no: </label> </div>
        <div class="col-md-5 mb-2"><input type="number" name="tel_no" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-2" > <label> Fax no: </label> </div>
        <div class="col-md-5 mb-2"><input type="number" name="fax_no" >
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 mb-2"> <label>Email: </label> </div>
        <div class="col-md-5 mb-2"><input type="email" name="email" >
        </div>
      </div>  
    </form>
  </div>
 
  <div class="col-md-6">
      <div class="right_box" style="width:50%; height:30%; ">
    <div class="row">
        <button class="form-control btn btn-primary col-md-5 mb-2" >Submit</button>
        <button class="form-control btn btn-info col-md-5 mb-2" >Save</button>
    </div>
    <div class="row">
        <button class="form-control btn btn-success col-md-5 mb-2" >Cancle</button>
        <button class="form-control btn btn-danger col-md-5 mb-2" >Clear</button>
    </div>
   

  </div>

</div>
</div>
  
@endsection   
</body>
</html>