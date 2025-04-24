<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JustTestController extends Controller
{
    public function index()
    {
        $latestLab = DB::table('app_certi_labs')
        ->orderBy('created_at', 'desc') // หรือ orderBy('id', 'desc') ถ้าไม่มี created_at
        ->first();

    dd($latestLab);
        return view('welcome');
    }
}
