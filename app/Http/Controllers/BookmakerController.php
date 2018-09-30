<?php

namespace App\Http\Controllers;

use App\Bookmaker;
use Illuminate\Http\Request;

class BookmakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bookmakers = Bookmaker::all();
        return view('dashboard.bookmakers.index', compact('bookmakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bookmaker = new Bookmaker;
        return view('dashboard.bookmakers.create', compact('bookmaker'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'imageUrl' => 'nullable'
        ]);
        $prediction = new Bookmaker;
        $prediction->name = $request->input('name');
        $prediction->imageUrl = $request->input('imageUrl');
        $prediction->save();

        return redirect('/dashboard/bookmakers')->with('success', 'Bookmaker added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bookmaker  $bookmaker
     * @return \Illuminate\Http\Response
     */
    public function show(Bookmaker $bookmaker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bookmaker  $bookmaker
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bookmaker = Bookmaker::findOrFail($id);
        return view('dashboard.bookmakers.edit', compact('bookmaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bookmaker  $bookmaker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bookmaker = Bookmaker::findOrFail($id);
        $bookmaker->update($request->all());
        return redirect()->route('bookmakers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bookmaker  $bookmaker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bookmaker $bookmaker)
    {
        //
    }
}
