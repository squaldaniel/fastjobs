<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddController extends Controller
{
    public function actInputRegistro(Request $request)
        {
            $token = str_replace([".", " "], "", $request->input("_token").microtime());
            $arrColumns = [
                "cep" => ltrim( $request->input("strPersonCep") ),
                "email" => ltrim( $request->input("strPersonEmail") ),
                "nome" => ltrim( $request->input("strPersonNome") ),
                "password" => ltrim( $token )
            ];
            $exist = \App\Models\PersonModel::where("email", ltrim( $request->input("strPersonEmail")))
                ->count();
            if ($exist == 1){
                $error["title"]="site.errorexist";
                $error["message"]="site.errormessage";
                $error["buttons"]=
                    ["action" => [
                        "link"=>"/login",
                        "textlabel" => "Fazer login"
                    ],
                    "alternative" =>[
                        "link"=>"/recovery",
                        "textlabel" => "Recuperar Senha"
                    ]
                ];
                $_SESSION["errorData"]=$error;
                return redirect()->to("error");
            } else {
                $person = \App\Models\PersonModel::create($arrColumns);
                return $person->id;
            }

        }
}
