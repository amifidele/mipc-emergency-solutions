<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Inquiry;

class PagesController extends Controller
{
    public function success(){
        return view('success');
    }

    public function administration(){
        $inquiries = Inquiry::orderBy('created_at', 'desc')->get();
        
        $i = 1;

        return view('administration')->with([
            'inquiries' => $inquiries,
            'i' => $i
        ]);
    }
}
