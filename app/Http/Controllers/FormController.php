<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function ClientSideFormValidation()
    {
        return view('client_validation');
    }
    public function ClientStore(Request $request)
    {
        return $request;
    }

    public function ServerSideLaravelValidation()
    {
        return view('laravel_validation');
    }


}
