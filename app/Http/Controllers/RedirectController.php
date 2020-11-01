<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function forumlogin(Request $request)
    {
        $request->session()->put('redirect_key' , '/forum');
        return redirect('login');
    }
}
