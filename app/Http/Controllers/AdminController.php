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
        $blog = [
            [
                'title' => $request->title,
                'content' => $request->content,
                'status' => $request->status,
            ]
        ];

        return view('blog', compact('blog'));
    }

    function form()
    {
        return view('form');
    }
}