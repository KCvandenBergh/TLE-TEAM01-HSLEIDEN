<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function regensession() {
        session()->invalidate();
        session()->regenerate();

        return back();
    }
}
