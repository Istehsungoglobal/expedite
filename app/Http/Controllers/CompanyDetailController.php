<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyDetailController extends Controller
{
    public function companyinfo()
    {
        return view("pages.company.companyinfo");
    }
    public function registered()
    {
        return view("pages.company.registered");
    }
    public function orderhistory()
    {
        return view("pages.company.orderhistory");
    }
    public function compliance()
    {
        return view("pages.company.compliance");
    }
}
