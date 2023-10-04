<?php

namespace App\Http\Controllers;

use App\Models\Lienhe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LienheMail;
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
     public function getInputLienhe(){
        return view('lienhe.lienhe');
    }

    public function postInputLienhe(Request $req){
        $name=$req->name;
        $mota=$req->mota;
        $phone_number=$req->phone_number;
        $email=$req->email;
        $lienhes = new Lienhe();

        //validate

        // kiểm tra có user có email như vậy không
        //dd($user);
        if($mota != '' && $phone_number != '' && $email != '' && $name != ''){
            //gửi mật khẩu reset tới email
        //   dd($mota != '' && $phone_number != '' && $email != '');
            $lienheData = [
                'name' => $name,
                'email' => $email,
                'phone_number' => $phone_number,
                'mota' => $mota,
            ];
           
            Mail::to('buianhthy123@gmail.com')->send(new LienheMail($lienheData));
            Session::flash('message', 'Cảm ơn bạn đã liên hệ !');
                //
            $this->validate(
                $req,
                [ 'name' => 'required',
                'mota' => 'required',
                'phone_number' => 'required',
                'email' => 'required',
                ],[
                        'name.required' => 'Bạn chưa nhập tên',
                        'mota.required' => 'Bạn chưa nhập mô tả',
                        'phone_number.required' => 'Bạn chưa nhập số điện thoại',
                        'email.required' => 'Bạn chưa email',
                ]);
                    
                $lienhes->name = $req->name;
                $lienhes->mota = $req->mota;
                $lienhes->phone_number = $req->phone_number;
                $lienhes->email = $req->email;
                $lienhes->save();

                return view('lienhe.ttlienhe');  //về lại trang đăng nhập của khách
        }
        else {
        //    dd($mota != '' && $phone_number != '' && $email != '');
              return redirect()->route('getInputEmail')->with('message','Your email is not right');
        }
        
    }//hết postInputEmail

}
