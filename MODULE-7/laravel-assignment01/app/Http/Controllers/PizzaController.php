<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class PizzaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }
    public function menu(){
        return view('menu');
    }

    public function services(){
        return view('services');
    }

    public function blog(){
        return view('blog');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
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
        $getUser = DB::select(
            'call GetUserInfo(?)',array("6")
        );
        return $getUser;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
