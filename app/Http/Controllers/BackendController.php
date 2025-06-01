<?php

namespace App\Http\Controllers;
use App\Models\Backend;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("pages.notification");
    }
    public function recommendations()
    {
        return view("pages.recommendations");
    }
    public function payment()
    {
        return view("payment");
    }
    public function single()
    {
        return view("pages.single");
    }
    public function business()
    {
        return view("pages.business");
    }
    public function orderhistorypay()
    {
        return view("pages.orderhistorypay");
    }
    public function ticket()
    {
        return view("pages.ticket");
    }
    public function affiliate()
    {
        return view("pages.affiliate");
    }
}
