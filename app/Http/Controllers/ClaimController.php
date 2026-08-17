<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Claim;

class ClaimController extends Controller
{
    public function create()
    {
        return view('claim');
    }

    public function store(Request $request)
    {
        $request->validate([
            'serial_number' => 'required|alpha_num|min:5',
            'email'         => 'required|email',
            'symptoms'      => 'required|min:10',
            'urgency'       => 'required|in:low,medium,high',
        ], [
            'serial_number.required'  => 'กรุณากรอกรหัสสินค้า',
            'serial_number.alpha_num' => 'รหัสสินค้าต้องเป็นตัวอักษรหรือตัวเลขเท่านั้น',
            'serial_number.min'       => 'รหัสสินค้าต้องมีความยาวไม่ต่ำกว่า 5 ตัวอักษร',
            'email.required'          => 'กรุณากรอกอีเมลผู้ติดต่อ',
            'email.email'             => 'รูปแบบอีเมลไม่ถูกต้อง',
            'symptoms.required'       => 'กรุณากรอกอาการชำรุด',
            'symptoms.min'            => 'อาการชำรุดต้องมีความยาวอย่างน้อย 10 ตัวอักษร',
            'urgency.required'        => 'กรุณาเลือกระดับความเร่งด่วน',
            'urgency.in'              => 'ระดับความเร่งด่วนไม่ถูกต้อง',
        ]);

        Claim::create([
            'serial_number' => $request->input('serial_number'),
            'email'         => $request->input('email'),
            'symptoms'      => $request->input('symptoms'),
            'urgency'       => $request->input('urgency'),
        ]);

        return redirect()->back()->with('success', 'ส่งข้อมูลแจ้งเคลมสินค้าชำรุดเรียบร้อยแล้ว!');
    }
}
