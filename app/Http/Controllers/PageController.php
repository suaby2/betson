<?php

namespace App\Http\Controllers;

use App\GameTypes;
use App\Page;
use App\Prediction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $page = new Page;
        $categories = GameTypes::all();
        return view('dashboard.pages.create', compact('page', 'categories'));
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
            'title' => 'required',
            'description' => 'required',
            'date' => 'required'
        ]);
        $page = new Page;
        $page->title = $request->input('title').' '.$request->input('date');
        $page->date = $request->input('date');
        $page->description = $request->input('description');
        $page->slug = str_slug($request->input('title').' '.$request->input('date'));
        $page->published = $request->input('published');

        if( $request->hasFile('page_thumbnail') ) {
            $thumbnail = $request->file('page_thumbnail');
            $filename = time().'.'.$thumbnail->getClientOriginalExtension();
            $destPath = public_path($request->input('date'));
            $thumbnail->move($destPath, $filename);
            $page->page_thumbnail = $filename;

        }
        $page->save();

        return redirect('/dashboard/pages')->with('success', 'Pages added');
//        return redirect()->route('pages.show', $page->date);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {

        $page = Page::where('slug', $slug)->first();
//        dd($page);
        $predictions = Prediction::where('event_start_date', $page->date)->get();
        return view('pages.predictionPage.index', compact('page', 'predictions'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::findOrFail($id);

        $categories = GameTypes::all();

        return view('dashboard.pages.edit', compact('page', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::findOrFail($id);

        $page->update($request->all());

        return redirect()->route('pages.index')->with('success', 'Strona zaktualizowana poprawnie.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }


    public function slug()
    {
        return str_slug($this->date);
    }

    public function getUrl()
    {
        return action('PostController@show', [$this->id, $this->slug()]) ;
    }
}
