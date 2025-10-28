<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/welcome');
});

Route::get('/dangnhap', function () {
    return view('layouts/dangnhap');
});
Route::get('/dangky', function () {
    return view('layouts/dangky');
});

Route::post('/dangnhap', function () {
    // Xử lý đăng nhập ở đây (nếu cần)
})->name('dangnhap');

Route::post('/dangky', function () {
    // Xử lý đăng nhập ở đây (nếu cần)
})->name('dangky');

Route::get('/', function () {
    return view('page.trangchu');
});

Route::get('/chuyenkhoa', function () {
    return view('layouts.chuyenkhoa');
});

Route::get('/nhakhoa', function () {
    return view('chuyenkhoa.nhakhoa');
});

Route::get('/dalieu', function () {
    return view('chuyenkhoa.dalieu');
});

Route::get('/ranghammat', function () {
    return view('chuyenkhoa.ranghammat');
});

Route::get('/thammyvien', function () {
    return view('chuyenkhoa.thammyvien');
});

Route::get('/coxuongkhop', function () {
    return view('chuyenkhoa.coxuongkhop');
});

Route::get('/hohap', function () {
    return view('chuyenkhoa.hohap');
});

Route::get('/ngoaikhoa', function () {
    return view('chuyenkhoa.ngoaikhoa');
});

Route::get('/nhikhoa', function () {
    return view('chuyenkhoa.nhikhoa');
});

Route::get('/noikhoa', function () {
    return view('chuyenkhoa.noikhoa');
});

Route::get('/phuchoichucnang', function () {
    return view('chuyenkhoa.phuchoichucnang');
});

Route::get('/sanphukhoa', function () {
    return view('chuyenkhoa.sanphukhoa');
});

Route::get('/taimuihong', function () {
    return view('chuyenkhoa.taimuihong');
});

Route::get('/timmach', function () {
    return view('chuyenkhoa.timmach');
});

Route::get('/xetnghiemykhoa', function () {
    return view('chuyenkhoa.xetnghiemykhoa');
});

Route::get('/yhoccotruyen', function () {
    return view('chuyenkhoa.yhoccotruyen');
});


Route::get('/duocqtam', function () {
    return view('layouts.duocqtam');
});

Route::get('/duocquantam', function () {
    return view('page.duocquantam');
});

Route::get('/yteganban', function () {
    return view('dichvu.yteganban');
});

Route::get('/baitestsuckhoe', function () {
    return view('dichvu.baitestsuckhoe');
});

Route::get('/songkhoetieuduong', function () {
    return view('dichvu.songkhoetieuduong');
});

Route::get('/goiphauthuat', function () {
    return view('dichvu.goiphauthuat');
});

Route::get('/khamnhakhoa', function () {
    return view('dichvu.khamnhakhoa');
});

Route::get('/xetnghiemyhoc', function () {
    return view('dichvu.xetnghiemyhoc');
});

Route::get('/suckhoetinhthan', function () {
    return view('dichvu.suckhoetinhthan');
});

Route::get('/khamchuyenkhoa', function () {
    return view('dichvu.khamchuyenkhoa');
});

Route::get('/khamtongquat', function () {
    return view('dichvu.khamtongquat');
});

Route::get('/khamtuxa', function () {
    return view('dichvu.khamtuxa');
});

Route::get('/bacsigioi', function () {
    return view('page.bacsigioi');
});

Route::get('/blog', function () {
    return view('page.blog');
});

Route::get('/tintuc', function () {
    return view('Blog.tintuc');
});

Route::get('/thongbao', function () {
    return view('Blog.thongbao');
});

Route::get('/huongdan', function () {
    return view('page.huongdan');
});

Route::get('/hdtaotaikhoan', function () {
    return view('page.hdtaotaikhoan');
});

Route::get('/hddangtin', function () {
    return view('page.hddangtin');
});

Route::get('/quanlytin', function () {
    return view('page.quanlytin');
});

Route::get('/dangtin', function () {
    return view('page.dangtin');
});

Route::get('/lienhe', function () {
    return view('page.lienhe');
});

Route::get('/ttbacsi', function () {
    return view('blog.ttbacsi');
});


