<?php

namespace App\Http\Controllers;

use App\Models\director;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class directorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $directors = director::all();
        return view('admin.directors.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.directors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        director::create($request->all());
        return redirect()->route('directors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\director  $director
     * @return Response
     */
    public function show(director $director)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\director  $director
     * @return Response
     */
    public function edit(director $director)
    {
        return view('admin.directors.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\director  $director
     * @return Response
     */
    public function update(Request $request, director $director)
    {
        $director->update($request->all());
        return redirect()->route('directors.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\director  $director
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(director $director)
    {
        $director->delete();
        return redirect()->route('directors.index');
    }
}
