<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function index() {
    	if(request()->date && request()->price) {
		$tours = DB::select('select * from tours');
		//dd($table);
			return view('search', ['tours' => $tours]);
		}
		return back();
    }

    public function simpleTourList() {
    	return 'hello';
    }
}
