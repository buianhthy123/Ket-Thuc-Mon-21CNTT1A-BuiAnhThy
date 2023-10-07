<?php

namespace App\Http\Controllers;

use App\Models\Lienhe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Session;

class LienheController extends Controller
{
    //
    public function getLienheList(){
        $lienhes=Lienhe::orderBy('created_at', 'desc')->get();
        return view('admin.lienhes.danhsach',compact('lienhes'));
    }
    public function getLienheAdd(){
        $lienhes=Lienhe::all();
        return view('lienhe.lienhe',compact('lienhes'));
    }
    public function postLienheAdd(Request $request){

        $lienhes = new Lienhe();
         $this->validate($request,[
                'name' => 'required',
                'mota' => 'required',
                'phone_number' => 'required',
                'email' => 'required',
            ],[
                'name.required' => 'Bạn chưa nhập tên',
                'mota.required' => 'Bạn chưa nhập mô tả',
                'phone_number.required' => 'Bạn chưa nhập số điện thoại',
                'email.required' => 'Bạn chưa email',
            ]);
    
        $lienhes->name = $request->name;
        $lienhes->mota = $request->mota;
        $lienhes->phone_number = $request->phone_number;
        $lienhes->email = $request->email;
        $lienhes->save();

        
    
        return view('lienhe.lienhe')->with('success', 'Cảm ơn bạn đã liên hệ!');
    }
    public function getLienheDelete(string $id){
        $lienhes = Lienhe::find($id);
        $lienhes->delete();
        return redirect()->route('admin.getLienheList')->with('success','Bạn đã xóa thành công!');
    }
    public function lienhe()
    {
        return view('lienhe');
    }
    public function postContact(Request $req)
    {
        // Xác thực dữ liệu từ form nếu cần

        // Lấy dữ liệu từ form
        $sentData = [
        'name' => $req->input('name'),
        'email' => $req->input('email'),
        'phone_number' => $req->input('phone_number'),
        'mota' => $req->input('mota'),
    ];
        // Gửi email cho bạn
        Mail::to('buianhthy123@gmail.com')->send(new ContactMail($sentData));
        
        //
        

        $lienhe = new Lienhe();
        $lienhe->name = $req->name;
        $lienhe->email = $req->email;
        $lienhe->phone_number = $req->phone_number;
        $lienhe->mota = $req->mota;
        $lienhe->save();


        // Chuyển hướng hoặc hiển thị thông báo thành công
        return redirect()->route('lienhe')->with('message', 'Gửi email thành công!');

    }

}
