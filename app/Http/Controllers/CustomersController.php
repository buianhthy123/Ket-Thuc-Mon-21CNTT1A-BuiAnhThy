<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    //
    public function getCustomersList(){
        $customers =Customer::orderBy('created_at', 'desc')->get();
        return view('admin.customers.danhsach',compact('customers'));
    }
    public function getCustomersEdit(string $id){
        $customers=Customer::where('id',$id)->get();
        return view('admin.customers.sua',array('customers'=>$customers),compact('customers'));
    }
    public function postCustomersEdit(Request $request, string $id){
        $name='';     
        $this->validate($request,[
            'name'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone_number'=>'required',
        ],[
            'name.required'=>'Bạn chưa nhập tên  ',
            'gender.required'=>'Bạn chưa nhập giới tính',
            'email.required'=>'Bạn chưa nhập email',
            'address.required'=>'Bạn chưa nhập địa chỉ',
            'phone_number.required'=>'Bạn chưa nhập số điện thoại',
        ]);
        
        $customers=Customer::find($id);
        $customers->name=$request->name;
        $customers->gender=$request->gender;
        $customers->email=$request->email;
        $customers->address=$request->address;
        $customers->phone_number=$request->phone_number;
        $customers->save();
        return redirect()->route('admin.getCustomersList')->with('success','Bạn đã sửa thành công!');  
    }
}
