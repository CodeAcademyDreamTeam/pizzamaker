<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseAPIController extends Controller
{


    public function apiIndex()
    {
        return response()->json(['succes' => false, 'message' => 'Method not implemented']);
    }

    public function apiStore()
    {
        return response()->json(['succes' => false, 'message' => 'Method not implemented']);
    }

    public function apiShow()
    {
        return response()->json(['succes' => false, 'message' => 'Method not implemented']);
    }

    public function apiUpdate()
    {
        return response()->json(['succes' => false, 'message' => 'Method not implemented']);
    }

    public function apiDestroy()
    {
        return response()->json(['succes' => false, 'message' => 'Method not implemented']);
    }
}
