<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function index() {
        return view('upload');
        return view('upload');
    }
    //
    public function store(Request $request)
    {
        $request->validate([
            'my_file' => 'required|mimes:pdf,jpg,png|max:2048', // محدودیت فرمت و حجم (2MB)
        ]);

        if ($request->hasFile('my_file')) {
            $path = $request->file('my_file')->store('uploads', 'public');
            return back()->with('success', 'فایل با موفقیت در مسیر ' . $path . ' ذخیره شد.');
        }
    }
}
