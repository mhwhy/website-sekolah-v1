<?php

namespace App\Http\Controllers;

use App\Models\Loker;
use Illuminate\Http\Request;

class DashboardLokerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data loker
        $loker = Loker::all();

        //mengirim data student ke view loker
        return view('Dashboard.loker.index', ['loker' => $loker]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function show(Loker $loker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function edit(Loker $loker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loker $loker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loker  $loker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loker $loker)
    {
        //
    }
}
