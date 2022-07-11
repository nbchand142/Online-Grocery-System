<?php

namespace App\Http\Controllers;
use App\Models\customer_list;
use Illuminate\Http\Request;

class customer_listController extends Controller
{
   function all(){
      $all_listing = customer::all();
      return view('home',['data'=>$all_listing]);
  }
  function single_listing($id){
      $all_listing = customer::find($id);
      return view('single_listing',['data'=>$all_listing]);}
   function customer(Request $request){ 
    $all =  new customer_list();
    $all->name = $request->name;
    $all->contact = $request->contact;
    $all->address = $request->address;
    $all->save();


    

   } 
   
}
