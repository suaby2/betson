<?php

namespace App\Http\Controllers;

use App\Bookmaker;
use App\Page;
use App\Prediction;
use App\User;
use App\GameTypes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PredictionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $predictions = Prediction::where('user_id', "=", Auth::user()->id)->get();
        return view('dashboard.predictions.index', compact('predictions', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $prediction = new Prediction;
        $bookmakers = Bookmaker::all();
        $gameTypes = GameTypes::all();
//        dd($gameTypes);
        return view('dashboard.predictions.create', compact('prediction', 'gameTypes', 'bookmakers'));
    }

    /**$types = ['Tenis', 'Piłka Nożna', 'Hokej', 'Siatkówka', 'Koszykówka', 'Esport'];
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'first_team' => 'required',
            'second_team' => 'required',
            'winner' => 'required',
            'type' => 'required',
            'description' => 'required',
            'event_start_date' => 'required',
            'event_start_hour' => 'required|date_format:"H:i"'
        ]);
//        dd($request->all());
        $prediction = new Prediction;
        $prediction->first_team = $request->input('first_team');
        $prediction->second_team = $request->input('second_team');
        $prediction->winner = $request->input('winner');
        $prediction->type = $request->input('type');
        $prediction->description = $request->input('description');
        $prediction->event_start_date = $request->input('event_start_date');
        $prediction->event_start_hour = $request->input('event_start_hour');
        $prediction->user_id = Auth::user()->id;
        $prediction->bookmaker_id = $request->input('bookmaker');
        $prediction->save();

        return redirect('/dashboard/predictions')->with('success', 'Prediction added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prediction  $prediction
     * @return \Illuminate\Http\Response
     */
    public function show(Prediction $prediction)
    {
//        dd($prediction->bookmaker);
        $prediction = Prediction::find($prediction->id);
        $winner = $this->getMatchPrediction($prediction);
        $userRoleName = Auth::user()->roles->first()->name;
        return view('dashboard.predictions.show', compact('prediction', 'winner', 'userRoleName'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prediction  $prediction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prediction = Prediction::findOrFail($id);
        $types = ['Tenis', 'Piłka Nożna', 'Hokej', 'Siatkówka', 'Koszykówka', 'Esport']; // Zbudowanie tabbeli ze sportami i ich idkami
        return view('dashboard.predictions.edit', compact('prediction', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Prediction  $prediction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prediction = Prediction::findOrFail($id);
        $prediction->update($request->all());
        return redirect()->route('predictions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prediction  $prediction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prediction $prediction)
    {
        Prediction::find($prediction->id)->delete();
        return redirect()->route('predictions.index')->with('success', 'Usuwanie predykcji zakończone sukcesem');   ;
    }

    public function getMatchPrediction($prediction) {
        if($prediction->winner == 1) {
            return $prediction->first_team;
        } else if($prediction->winner == 0) {
            return "Remis";
        } else {
            return $prediction->second_team;
        }
    }
}
