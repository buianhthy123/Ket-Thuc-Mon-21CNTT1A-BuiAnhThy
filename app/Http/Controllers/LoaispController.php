<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Loaisp;

class LoaispController extends Controller
{
    //
    public function getLoaispList(){
        $loaisps=Loaisp::orderBy('created_at', 'desc')->get();
        return view('admin.loaisps.danhsach',compact('loaisps'));
    }
    public function getLoaispAdd(){
        $loaisps=Loaisp::all();
        return view('admin.loaisps.them',compact('loaisps'));
    }
    public function postLoaispAdd(Request $request){
        // Khởi tạo đối tượng $loaisps
        $loaisps = new Loaisp();
    
        $name = '';
    
        if($request->hasfile('image')){
            $this->validate($request,[
                'image' => 'mimes:jpg,png,gif,jpeg|max:2048',
                'name' => 'required',
                'mota' => 'required',
            ],[
                'image.mimes' => 'Chỉ chấp nhận file hình ảnh',
                'image.max' => 'Chỉ chấp nhận hình ảnh dưới 2Mb',
                'name.required' => 'Bạn chưa nhập tên',
                'mota.required' => 'Bạn chưa nhập mô tả',
            ]);
    
            $file = $request->file('image');
            $name = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('/source/image/sanpham');
            $file->move($destinationPath, $name);
        } else {
            $this->validate($request,[
                'name' => 'required',
                'mota' => 'required',
            ],[
                'name.required' => 'Bạn chưa nhập tên',
                'mota.required' => 'Bạn chưa nhập mô tả',
            ]);
        }
    
        // Gán giá trị cho thuộc tính của đối tượng $loaisps
        $loaisps->name = $request->name;
        $loaisps->mota = $request->mota;
        $loaisps->image = $name;
        $loaisps->save();
    
        return redirect()->route('admin.getLoaispList')->with('success', 'Bạn đã thêm thành công!');
    }
    public function getLoaispDelete(string $id){
        $loaisps = Loaisp::find($id);
        $loaisps->delete();
        return redirect()->route('admin.getLoaispList')->with('success','Bạn đã xóa thành công!');
    }
    public function getLoaispEdit(string $id){
        $loaisps=Loaisp::where('id',$id)->get();
        $loaisps=Loaisp::all();
        return view('admin.loaisps.sua',array('sanphams'=>$loaisps),compact('loaisps'));
    }
    public function postLoaispEdit(Request $request, string $id){
        $name='';
        if($request->hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048',
                'name'=>'required',
                'mota'=>'required',
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
                'name.required'=>'Bạn chưa nhập mô tả',
                'mota.required'=>'Bạn chưa nhập mô tả',

            ]);
            $file = $request->file('image');
            $name=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('/source/image/sanpham'); //project\public\car, public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/car
        }
        else{
        $this->validate($request,[
            'name'=>'required',
            'mota'=>'required',
        ],[
            'name.required'=>'Bạn chưa nhập mô tả',
            'mota.required'=>'Bạn chưa nhập mô tả',
        ]);
        }
        $loaisps=Loaisp::find($id);
        $loaisps->name=$request->name;
        $loaisps->mota=$request->mota;
        if($name=='')
        {
            $name=$loaisps->image;
        }
        $loaisps->image=$name;
        
        $loaisps->save();
        return redirect()->route('admin.getLoaispList')->with('success','Bạn đã sửa thành công!');  
    }

}
