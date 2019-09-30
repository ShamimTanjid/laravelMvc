<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ContactController extends Controller
{
    public function ContactInfo(){
    	$contact=DB::table('contacts')->get();
    	return view('contactDetails')->with('ShowContact',$contact);
    }

    public function InsertData(){
    	return view('insertinfo');
    }
     public function InsertDataContact(Request $request){

     $data=array();
     $data['name']=$request->name;
     $data['email']=$request->email;
     $data['phone']=$request->phone;
     $data['description']=$request->description;
    


     $insert=DB::table('contacts')->insert($data);
      return Redirect()->route('contactpage');
     
    } 
    public function  DeLATEData($id){

    	$delete=DB::table('contacts')->where('id',$id)->delete();
    	return Redirect()->route('contactpage');
    }
    public function EditdataData($id){
      $edit=DB::table('contacts')->where('id',$id)->first();
         return view('editcontact',compact('edit'));

    }
    public function updatetDataContact(Request  $request,$id){

     $data=array();
     $data['name']=$request->name;
     $data['email']=$request->email;
     $data['phone']=$request->phone;
     $data['description']=$request->description;

     $update=DB::table('contacts')->where('id',$id)->update($data);
         return Redirect()->route('contactpage');
    }
  public function viewData($id){
  	$vview=DB::table('contacts')->where('id',$id)->first();
  	 return view('viewcontact')->with('view',$vview);
  }
}
