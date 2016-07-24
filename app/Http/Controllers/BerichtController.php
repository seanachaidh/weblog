<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BerichtController extends Controller
{

	public function __construct() {
		$this->middleware('auth');
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	//TODO Dit moet getest worden
        $res = Bericht::all();
        return response()->json($res);
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
        $tmp = new Bericht;
        $tmp->title = $request->input("title");
        $tmp->text = $request->input("text");
        $tmp->date = $request->input("date");
        $tmp->next_id = $request->input("next");
        $tmp->previous_id = $request->input("previous");
        
        $tmp->save();
        
        //TODO Hier een gepaste waarde teruggeven
        return response()->json(["created" => TRUE]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $res = Bericht::find($id);
        return response()->json($res);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bericht = Bericht::find($id);
        if($request->has('name')) {
	  $bericht->name = $request->name;
	}
	if($request->has('title')) {
	  $bericht->title = $request->title;
	}
        if($request->has('date')) {
	  $bericht->date = $request->date;
	}
        if($request->has('next')) {
	  $bericht->next_id = $request->next;
	}
        if($request->has('previous')) {
	  $bericht->pevious_id = $request->prevous;
	}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $b = Bericht::find($id);
        $b->delete();
    }
}
