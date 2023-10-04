<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nhacc;

class NhaccController extends Controller
{
    //
    public function getNhaccList(){
        $nhaccs=Nhacc::orderBy('created_at', 'desc')->get();
        return view('admin.nhaccs.danhsach',compact('nhaccs'));
    }
    public function getNhaccAdd(){
        $nhaccs=Nhacc::all();
        return view('admin.nhaccs.them',compact('nhaccs'));
    }
    public function postNhaccAdd(Request $request){

        $nhaccs = new Nhacc();
         $this->validate($request,[
                'name' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
            ],[
                'name.required' => 'Bạn chưa nhập tên',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'phone_number.required' => 'Bạn chưa nhập số điện thoại',
            ]);
    
        $nhaccs->name = $request->name;
        $nhaccs->address = $request->address;
        $nhaccs->phone_number = $request->phone_number;
        $nhaccs->save();
    
        return redirect()->route('admin.getNhaccList')->with('success', 'Bạn đã thêm thành công!');
    }
    public function getNhaccDelete(string $id){
        $nhaccs = Nhacc::find($id);
        $nhaccs->delete();
        return redirect()->route('admin.getNhaccList')->with('success','Bạn đã xóa thành công!');
    }
    public function getNhaccEdit(string $id){
        $nhaccs=Nhacc::where('id',$id)->get();
        $nhaccs=Nhacc::all();
        return view('admin.nhaccs.sua',array('sanphams'=>$nhaccs),compact('nhaccs'));
    }
    public function postNhaccEdit(Request $request, string $id){
        
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên',
            'address.required' => 'Bạn chưa nhập địa chỉ',
            'phone_number.required' => 'Bạn chưa nhập số điện thoại',
        ]);
        
        $nhaccs=Nhacc::find($id);
        $nhaccs->name=$request->name;
        $nhaccs->address=$request->address;
        $nhaccs->phone_number=$request->phone_number;
        $nhaccs->save();
        return redirect()->route('admin.getNhaccList')->with('success','Bạn đã sửa thành công!');  
    }
}
