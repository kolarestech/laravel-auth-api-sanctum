<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyPartnerController extends Controller
{
    public function verify(Request $request)
    {
        return response()->json([
            "is_partner" => true
        ]);
    }
}
