<?php

namespace App\Http\Controllers;
use App\Guest;
use Illuminate\Http\Request;

class Guest_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function dangNhap() 
    {
        return view('dang-nhap');
    }
    public function xuLyDangNhap(DangNhapRequest $request)
    {
        $credentials = [
            'ten_dang_nhap' => $request->ten_dang_nhap,
            'password'      => $request->mat_khau
        ];

        #Chứng thực
        if(!auth('web')->attempt($credentials)) {
            #Sai tên đăng nhập hoặc mật khẩu
            Alert::error('Đăng nhập thất bại!', 'Vui lòng kiểm tra lại thông tin tài khoản!');
            return redirect()->back();
        }

        #Chứng thực thành công
        Alert::success('Đăng nhập thành công!', 'Nhấn OK để tiếp tục!');
        return redirect()->route('trang-chu');
    }

    public function layThongTin() {
        return auth('web')->user();
    }

    public function dangXuat() {
        auth('web')->logout();
        Alert::success('Đăng xuất thành công!','');
        return redirect()->route('dang-nhap');
    }

     public function register(Request $request)
    {
        $guest = new Guest;
        $guest -> email_guest = $request->email_guest;
        $guest -> fullname_guest = $request->fullname_guest;
        $guest -> password_guest = $request->password_guest;
        $guest -> save();
    }
     public function home()
    {
        return view('register');
    }

}
