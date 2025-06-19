<?php

namespace App\Http\Controllers;

use App\Models\FontPage;
use Illuminate\Http\Request;

class FontPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("about");
    }
    public function pricing()
    {
        return view("pricing");
    }
    public function contact()
    {
        return view("contact");
    }
    public function login()
    {
        return view("login");
    }
    public function blog()
    {
        return view("blog");
    }
    public function post_blog()
    {
        return view("post_blog");
    }

    public function terms()
    {
        return view("terms");
    }
    public function refund()
    {
        return view("refund");
    }
    public function privacy()
    {
        return view("privacy");
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
    public function show(FontPage $fontPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FontPage $fontPage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FontPage $fontPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FontPage $fontPage)
    {
        //
    }
}
