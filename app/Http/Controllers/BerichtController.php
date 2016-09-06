<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Bericht;

//Facades
use DB;
use Auth;

class BerichtController extends Controller
{

	public function __construct() {
	}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
		//Misschien kan ik dit ook nog omdraaien.
		
		if($request->has('first') && $request->first == 'true') {
			//zoek de eerste. Dit wil zeggen er is geen vorige, gezien de eerste altijd aan kop staat.
			$first = DB::table('berichten')->whereNull('previous_id')->get();
			return response()->json($first);
		} else if ($request->has('last') && $request->last == 'true') {
			$last = DB::table('berichten')->whereNull('next_id')->get();
			return response()->json($last);
		} else {
			//Geeft ze allemaal
			$res = Bericht::all();
			return response()->json($res);
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Hier misschien nog een response geven
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		
		//Eerst inloggen
		if(!Auth::check()) {
			return response('Unauthorized', 401);
		}
		
        $tmp = new Bericht;
        if($request->has('title')) {
			$tmp->title = $request->input('title');
		}
        if($request->has('text')) {
			$tmp->text = $request->input('text');
		}
        if($request->has('date')) {
			$tmp->date = $request->input('date');
		}
		
		$last = DB::table('berichten')->whereNull('next_id');
		
		//Gelinkte lijst opstellen
		$tmp->previous_id = $last->id;
		$tmp->next_id = NULL;
		
        $retval = $tmp->save();
        
        //Blijkbaar past Laravel onmiddellijk het id aan.
        $last->next_id = $tmp->id;
        
        $last->save();
        
        //TODO Hier een gepaste waarde teruggeven
        return response()->json(["created" => var_export($retval, TRUE)]);
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
		
		//Eerst inloggen
		if(!Auth::check()) {
			return response('Unauthorized', 401);
		}
		
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
		
		$retval = $bericht->save();
		return response()->json(['updated' => $retval]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
		//Eerst inloggen
		if(!Auth::check()) {
			return response('Unauthorized', 401);
		}
		
        $b = Bericht::find($id);
        $b->delete();
    }
}
