<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function show(Company $company)
    {
        return view('company', compact('company'));
    }
}
