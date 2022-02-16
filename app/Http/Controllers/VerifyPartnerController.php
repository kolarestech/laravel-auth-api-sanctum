<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyPartnerController extends Controller
{
    public function verify(Request $request)
    {
        // -- lógica

        // -- acessar o arquivo

        // -- verificar se o cara é parceiro


        // -- return
        return response()->json([
            "cpf_cnpj" => $request->input('cpf_cnpj'),
            "is_partner" => true
        ]);
    }
}
