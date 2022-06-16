<?php

namespace App\Http\Controllers;

use App\Models\Form;
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

    public function ServerStore(Request $request)
    {
       $request->validate([
            'name'              =>'required',
            'email'             =>'required|email|unique:forms',
            'phone'             =>'required',
            'designation'       =>'required',
            'password'          =>'required',
            'company_name'      =>'required',
            'company_website'   =>'required',
            'company_portfolio' =>'required|mimes:application/pdf, application/x-pdf,application/acrobat, applications/vnd.pdf, text/pdf, text/x-pdf|max:10000',
            'company_address'   =>'required',
            'photo'             =>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',  
       ]);

       $formData = new Form;
       $formData->name                 =  $request->name;
       $formData->email                =  $request->email;
       $formData->phone                =  $request->phone;
       $formData->designation          =  $request->designation;
       $formData->password             =  $request->password;
       $formData->company_name         =  $request->company_name;
       $formData->company_website      =  $request->company_website;
       $formData->company_portfolio    =  $request->company_portfolio;
       $formData->company_address      =  $request->company_address;
       $formData->photo                =  $request->photo;
       $formData->save();
    }


}
