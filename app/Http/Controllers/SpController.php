<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Loaisp;
use App\Models\User;
use App\Models\Bill;
use App\Models\Bill_detail;
use App\Models\Customer;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;



class SpController extends Controller
{
    //
    public function index(){
        $sanphams=Sanpham::all();
        $loaisp = Loaisp::all();   
        return view('index', compact('sanphams'));   
    }
    public function getLoaisp(){
        $sanphams=Sanpham::all();
        $loaisp = Loaisp::all();   
        return view('sanpham',compact('sanphams'));   
    }
    public function show($id)
    {
        //
        $sanphams = DB::table('sanphams') ->where('id',$id)->get();
       //dd($products); 
        
        return view('chitietsp',array('sanphams' => $sanphams)); 
    }
    
    public function cart()
    {

        $cart = Session::get('cart');
        //dd($cart);
        return view('giohang', compact('cart'));
    }


    public function addToCart(Request $request,$id){
        $product=Sanpham::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect()->back();
    }

    //thêm 1 sản phẩm có số lượng >1 có id cụ thể vào model cart rồi lưu dữ liệu của model cart vào 1 session có tên cart (session được truy cập bằng thực thể Request)
    public function addManyToCart(Request $request,$id){
        $product=Sanpham::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->addMany($product,$id,$request->qty);
        $request->session()->put('cart',$cart);
       
        return redirect()->back();
    }


    public function delCartItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('cart')->with('success', 'Xóa sản phẩm khỏi giỏ hàng thành công');
    }
    public function getCheckout()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart'); // Lấy giỏ hàng từ Session

        // Tạo một mảng chứa danh sách sản phẩm và giá tiền
        $cartItems = [];

        // Duyệt qua các sản phẩm trong giỏ hàng và thêm vào mảng
        foreach ($cart->items as $id => $product) {
            $cartItems[] = [
                'name' => $product['name'], // Tên sản phẩm
                'price' => $product['price'] // Giá tiền
            ];
        }
       
        // Tính tổng tiền
        $totalPrice = $cart->totalPrice;
        return view('checkout', compact('cartItems', 'totalPrice'));
    } else {
        // Xử lý khi Session giỏ hàng không tồn tại
        return redirect()->route('trangchu.trangchu')->with('success', 'Đặt hàng thành công');
    }
    }
    public function postCheckout(Request $request)
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->gender = $request->input('gender');
        $customer->email = $request->input('email');
        $customer->address = $request->input('address');
        $customer->phone_number = $request->input('phone_number');
        $customer->note = $request->input('note');
        $customer->trangthai = "Chưa xử lý"; // Cung cấp giá trị cho trường 'trangthai'
        $customer->save();

        $bill = new Bill();
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->note = $request->input('note');
        $bill->status = "Đang chuẩn bị sản phẩm";
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new Bill_detail();
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_sp = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = $value['price'] / $value['qty'];
            $bill_detail->save();
        }

        
        Session::forget('cart');
        return redirect()->back()->with('success', 'Đặt hàng thành công');
    }  else {
        // Giỏ hàng trống, hiển thị thông báo lỗi trực tiếp trên trang hiện tại
        return redirect()->route('trangchu.trangchu')->with('success', 'Đặt hàng thành công');
    }


    }


    public function getSignin(){
       
        return view('dangky');
    }

    public function postSignin(Request $req){
        $this->validate($req,
        ['email'=>'required|email|unique:users,email',
            'password'=>'required|min:6|max:20',
            'name'=>'required',
            'repassword'=>'required|same:password'
        ], 
        ['email.required'=>'Vui lòng nhập email',
        'email.email'=>'Không đúng định dạng email',
        'email.unique'=>'Email đã có người sử  dụng',
        'password.required'=>'Vui lòng nhập mật khẩu',
        'repassword.same'=>'Mật khẩu không giống nhau',
        'password.min'=>'Mật khẩu ít nhất 6 ký tự'
        ]);

        $user=new User();
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->address=$req->address;
        $user->phone_number=$req->phone_number;
        $user->level=3;  //level=1: admin; level=2:kỹ thuật; level=3: khách hàng
        $user->save();
        return redirect()->back()->with('success','Tạo tài khoản thành công');
    }
    public function search(Request $request)
    {
        $query = $request->input('q'); // Lấy dữ liệu từ trường tìm kiếm

        // Thực hiện tìm kiếm dựa trên $query, ví dụ:
        $results = Sanpham::where('name', 'like', "%$query%")
            // ->orWhere('tieude', 'like', "%$query%")
            ->get();

        return view('index', compact('results'));
    }

}
