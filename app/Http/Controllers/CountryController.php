<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\origin_country
class CountryController extends Controller
{
    public function add()
    {
    	return view('admin.origin_country.add');
    }
    public function store(Request $req)
    {
    	$or=new Origin_Country;
    	$or->name=$req->name;
    	$or->save();
    	return back();
    }
}
