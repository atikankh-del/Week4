<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    function blog()
    {
        $blog = [
            [
                'title' => 'Laravel',
                'content' => 'เรียนรู้ Laravel',
                'status' => 'เผยแพร่',
            ],
            [
                'title' => 'PHP',
                'content' => 'เรียนรู้ PHP',
                'status' => 'ฉบับร่าง',
            ],
            [
                'title' => 'HTML',
                'content' => 'เรียนรู้ HTML',
                'status' => 'เผยแพร่',
            ],
        ];

        return view('blog', compact('blog'));
    }

    function about()
    {
        $data = [
            'name' => 'Atikan Khotmongkol',
            'city' => 'Ubon Ratchathani',
        ];

        return view('about', $data);
    }

    function insert(Request $request)
    {
        $request->validate(
            [
                'title' => 'required|max:50',
                'content' => 'required',
                'status' => 'required',
            ],
            [
                'title.required' => 'กรุณากรอกชื่อบทความ',
                'title.max' => 'ชื่อบทความต้องไม่เกิน 50 ตัวอักษร',
                'content.required' => 'กรุณากรอกเนื้อหาบทความ',
                'status.required' => 'กรุณากรอกสถานะบทความ',
            ],
        );
        return view('blog', compact('blog'));
    }

    function form()
    {
        return view('form');
    }
}
