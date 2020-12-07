<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shop;

use App\Bill;
use Auth;
use Image;
use Carbon\Carbon;
use App\About;

class AdminController extends Controller
{

  public function __construct(){
    $this->middleware('auth:admin');
  }
  public function index(){
  	return view('backend.home.index');
  }


   public function createshop(){
  	return view('backend.shopdetails.create');
  }

  //shopdetails insertion
public function insertshop(Request $request){
  	
$shopinsert=Shop::insertGetId([

'shopid'=>'Shop-'.$request->shopid,
'shopName'=>$request->shopName,
'floorNo'=>$request->floorNo,
'blockNo'=>$request->blockNo,
'area'=>$request->area,
'address'=>$request->address,
'image'=>'',
'price'=>$request->price,
'created_at'=>Carbon::now()->toDateTimeString(),
]);

if($request->hasfile('image')){
  $image=$request->file('image');

$imagename='shop'.'-'.time().'.'.$image->getClientOriginalExtension();
Image::make($image)->resize(400,400)->save('uploads/'.$imagename);

Shop::where('id',$shopinsert)->update([

'image'=>$imagename,






]);




}



if($shopinsert){
          $notification=array(
                        'messege'=>' shop details Insert Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>' shop details Insert failed',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

 
}

//all shop details view
public function show(){

	$allshow=Shop::OrderBy('id','DESC')->get();

	return view('backend.shopdetails.all',compact('allshow'));
}

//edit shop
public function editshop($id){
	$data=Shop::Where('id',$id)->first();
	return view ('backend.shopdetails.edit',compact('data'));
}
//update shop

public function updateshop(Request $request){
	$data=$request->id;
  $update=Shop::Where('id',$data)->update([
'shopid'=>$request->shopid,
'shopName'=>$request->shopName,
'floorNo'=>$request->floorNo,
'blockNo'=>$request->blockNo,
'area'=>$request->area,
'address'=>$request->address,
'image'=>'',
'price'=>$request->price,

  ]);
  if($update){
          $notification=array(
                        'messege'=>'shop details updated Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>'failed to update',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

}

//delete shop details
public function deleteshop($id){
  $delete=shop::Where('id',$id)->delete();
  if($delete){
          $notification=array(
                        'messege'=>' shop details deleted Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>'Insertion failed',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

}






//bill details
public function createbill(){
    return view('backend.bill.create');
  }
//insertion

  public function insertbill(Request $request){
    //return $request;
    
$billinsert=Bill::insert([

'paymentid'=>$request->paymentid,
'electricitybill'=>$request->electricitybill,
'utilitybill'=>$request->utilitybill,
'shopWiseRent'=>$request->shopWiseRent,
]);

 if($billinsert){
          $notification=array(
                        'messege'=>' bill details Delete Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>'failed to insert',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

 

}

//show bills
public function showbill(){

  $allbillshow=Bill::OrderBy('id','DESC')->get();

  return view('backend.bill.all',compact('allbillshow'));
}


//edit bill
public function editbill($id){
  $data=Bill::Where('id',$id)->first();
  return view ('backend.bill.edit',compact('data'));
}
//update bill

public function updatebill(Request $request){
  $data=$request->id;
  $updatebill=Bill::Where('id',$data)->update([

'paymentid'=>$request->paymentid,
'electricitybill'=>$request->electricitybill,
'utilitybill'=>$request->utilitybill,
'shopWiseRent'=>$request->shopWiseRent,

  ]);
  if($updatebill){
          $notification=array(
                        'messege'=>' bill updated Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>' failed to update',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

}
//delete bill details
public function deletebill($id){
  $deletebill=Bill::Where('id',$id)->delete();
  if($deletebill){
          $notification=array(
                        'messege'=>' bill deleted Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>'failed to delete',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

}
public function logout(){
  Auth::logout();
  return redirect()->route('admin.login');

}

//website about us page

public function compose(){

  $data=About::first();
  return view('backend.about.aboutcreate',compact('data'));
}




  public function updatetinfo(Request $request){
      $id=$request->id;
      $update=About::where('id',$id)->update([
      'compose'=>$request->compose,



      ]);
 
      if($update){
          $notification=array(
                        'messege'=>'About updated Successfully',
                        'alert-type'=>'success'
                         );
                     return redirect()->back()->with($notification);
         }else{
          $notification=array(
                    'messege'=>'failed to update',
                    'alert-type'=>'error'
                     );
                 return redirect()->back()->with($notification);
      }

  }





}