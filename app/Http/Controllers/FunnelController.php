<?php

namespace App\Http\Controllers;

use App\Models\Funnel;
use App\Models\Category;
use App\Models\StateFee;

use Illuminate\Http\Request;

class FunnelController extends Controller
{
    public function primarypart(){
        return view("funnel.primarypart");
    }

     public function secondarypart(){
        return view("funnel.secondarypart");
    }
     public function payment_failed(){
        return view("funnel.payment_failed");
    }
     public function checkout(){
        return view("funnel.checkout");
    }
     public function invoice(){
        return view("funnel.invoice");
    }
     public function thanks(){
        return view("funnel.thanks");
    }
     public function showPrimaryPart()
    {
        $categories =  $categories = Category::orderBy('id')->get();
        $states = StateFee::orderBy('id')->get();// Get all category data
        return view('funnel.primarypart', compact('categories', 'states'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Funnel $funnel)
    {
        //
    }



}
