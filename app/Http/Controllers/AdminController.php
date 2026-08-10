<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blog2()
    {
        $blog2 = DB::table("blogs")->get();
        return view("blog2", compact('blog2'));
    }

    function about2()
    {
        $name = 'Jakkaphan Nitinattanan';
        $id = '68152310337-7';
        $date = '6 กรกฎาคม 2569';
        return view('abouts', compact('id', 'name', 'date'));
    }

    function create()
    {
        return view('form');
    }

    function insert(Request $req)
    {   
        $req->validate([
            'title'=> 'required|max:50',
            'content' => 'required',
            'name' => 'required|min:3',
            'email' => 'required|email'
        ],
        [
        'title.required' => 'กรุณาใส่ชื่อบทความ',
        'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
        'content.required' => 'กรุณาใส่เนื้อหาบทความ',
        'name.required' => 'กรุณาใส่ชื่อ-นามสกุล',
        'name.min' => 'ชื่อ-นามสกุลต้องไม่ต่ำกว่า 3 ตัวอักษร',
        'email.required' => 'กรุณาใส่อีเมล',
        'email.email' => 'กรุณาใส่อีเมลให้ถูกต้อง'
        ]);


        $newProducts = [
            [
                'title' => $req->input('title'),
                'content' => $req->input('content')
            ]
        ]; 
        return view('product', compact('products', 'newProducts'));
    }
    function delete($id){
        DB::table("blogs")->where('id',$id)->delete();
        return redirect()->route('blog2');

    }
    



}
