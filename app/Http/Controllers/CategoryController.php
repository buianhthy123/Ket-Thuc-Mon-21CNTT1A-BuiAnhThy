<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loaisp;
use App\Models\Sanpham;

class CategoryController extends Controller
{
    //
    public function getCateList(){
        $sanphams=Sanpham::orderBy('created_at', 'desc')->get();
        
        return view('admin.category.danhsach',compact('sanphams'));
    }
    public function getCateAdd(){
        $sanphams=Loaisp::all();
        return view('admin.category.them',compact('sanphams'));
    }
    public function postCateAdd(Request $request){
        $name='';
        if($request->hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048',
                'name'=>'required',
                'giatien'=>'required',
                'mota'=>'required',
                'donvi'=>'required',
                'giatien'=>'required|numeric',
                'giamgia'=>'required|numeric',
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
                'name.required'=>'Bạn chưa nhập tên sản phẩm ',
                'mota.required'=>'Bạn chưa nhập mô tả',
                'donvi.required'=>'Bạn chưa nhập đơn vị',
                'giatien.required'=>'Bạn chưa nhập giá tiền',
                'giatien.numeric'=>'Giá tiền phải là kiểu số',
                'giamgia.required'=>'Bạn chưa nhập giá giảm',
                'giamgia.numeric'=>'Giá giảm phải là kiểu số',

            ]);
            $file = $request->file('image');
            $name=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('/source/image/product'); //project\public\car, public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/car
        }
        else{
        $this->validate($request,[
            'name'=>'required',
            'giatien'=>'required',
            'mota'=>'required',
            'donvi'=>'required',
            'giatien'=>'required|numeric',
            'giamgia'=>'required|numeric',
        ],[
            'name.required'=>'Bạn chưa nhập tên sản phẩm ',
            'mota.required'=>'Bạn chưa nhập mô tả',
            'donvi.required'=>'Bạn chưa nhập đơn vị',
            'giatien.required'=>'Bạn chưa nhập giá tiền',
            'giatien.numeric'=>'Giá tiền phải là kiểu số',
            'giamgia.required'=>'Bạn chưa nhập giá giảm',
            'giamgia.numeric'=>'Giá giảm phải là kiểu số',
        ]);
        }
        $sanphams=new Sanpham();
        $sanphams->name=$request->name;
        $sanphams->id_loaisp=$request->id_loaisp;
        $sanphams->mota=$request->mota;
        $sanphams->giatien=$request->giatien;
        $sanphams->giamgia=$request->giamgia;
        $sanphams->image=$name;
        $sanphams->donvi=$request->donvi;
        $sanphams->new = "1";
       
        $sanphams->save();
        return redirect()->route('admin.getCateList')->with('success','Bạn đã thêm thành công!');  
    }
    public function getCateDelete(string $id){
        $sanphams = Sanpham::find($id);
        $sanphams->delete();
        return redirect()->route('admin.getCateList')->with('success','Bạn đã xóa thành công!');
    }
    public function getCateEdit(string $id){
        $sanphams=Sanpham::where('id',$id)->get();
        $loaisp=Loaisp::all();
        return view('admin.category.sua',array('sanphams'=>$sanphams),compact('loaisp'));
    }
    public function postCateEdit(Request $request, string $id){
        $name='';
        if($request->hasfile('image')){
            $this->validate($request,[
                'image'=>'mimes:jpg,png,gif,jpeg|max: 2048',
                'name'=>'required',
                'giatien'=>'required',
                'mota'=>'required',
                'donvi'=>'required',
                'giatien'=>'required|numeric',
                'giamgia'=>'required|numeric',
            ],[
                'image.mimes'=>'Chỉ chấp nhận file hình ảnh',
                'image.max'=>'Chỉ chấp nhận hình ảnh dưới 2Mb',
                'name.required'=>'Bạn chưa nhập tên sản phẩm ',
                'mota.required'=>'Bạn chưa nhập mô tả',
                'donvi.required'=>'Bạn chưa nhập đơn vị',
                'giatien.required'=>'Bạn chưa nhập giá tiền',
                'giatien.numeric'=>'Giá tiền phải là kiểu số',
                'giamgia.required'=>'Bạn chưa nhập giá giảm',
                'giamgia.numeric'=>'Giá giảm phải là kiểu số',

            ]);
            $file = $request->file('image');
            $name=time().'_'.$file->getClientOriginalName();
            $destinationPath=public_path('/source/image/product'); //project\public\car, public_path(): trả về đường dẫn tới thư mục public
            $file->move($destinationPath, $name); //lưu hình ảnh vào thư mục public/car
        }
        else{
        $this->validate($request,[
            'name'=>'required',
            'giatien'=>'required',
            'mota'=>'required',
            'donvi'=>'required',
            'giatien'=>'required|numeric',
            'giamgia'=>'required|numeric',
        ],[
            'name.required'=>'Bạn chưa nhập tên sản phẩm ',
            'mota.required'=>'Bạn chưa nhập mô tả',
            'donvi.required'=>'Bạn chưa nhập đơn vị',
            'giatien.required'=>'Bạn chưa nhập giá tiền',
            'giatien.numeric'=>'Giá tiền phải là kiểu số',
            'giamgia.required'=>'Bạn chưa nhập giá giảm',
            'giamgia.numeric'=>'Giá giảm phải là kiểu số',
        ]);
        }
        $sanphams=Sanpham::find($id);
        $sanphams->name=$request->name;
        $sanphams->id_loaisp=$request->id_loaisp;
        $sanphams->mota=$request->mota;
        $sanphams->giatien=$request->giatien;
        $sanphams->giamgia=$request->giamgia;
        $sanphams->image=$name;
        if($name=='')
        {
            $name=$sanphams->image;
        }
        $sanphams->image=$name;
        $sanphams->donvi=$request->donvi;
        $sanphams->save();
        return redirect()->route('admin.getCateList')->with('success','Bạn đã sửa thành công!');  
    }
}
