<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blogs()
    {
        $blogs = DB::table('blogs')->get();
        return view('blogs', compact('blogs'));
    }
    function abouts()
    {
        $name = 'Tanawat';
        $date = '6 กรกฏาคม 2026';

        return view('abouts', compact('name', 'date'));
    }
    function create()
    {
        return view('form');
    }
    function insert(Request $request)
    {
        $request->validate([
            'title' => 'required|max:50',
            'content' => 'required',
        ],[
            'title.required' => 'กรุณากรอกชื่อบทความ',
            'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
            'content.required' => 'กรุณากรอกเนื้อหา',
        ]);
        $data =[
            'title' => $request->title,
            'content' => $request->content,
        ];
           DB::table("blogs")->insert($data);
return redirect('/blog');
    }
    function delete($id){
        (DB::table('blogs')->where('id',$id)->delete());
        return redirect('/blogs');
    }

}
