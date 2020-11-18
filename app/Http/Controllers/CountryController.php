<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Origin_Country;
class CountryController extends Controller
{
    public function add()
    {
    	return view('admin.origin_country.add');
    }
    public function store(Request $req)
    {
    	$origin_country=new Origin_Country;
    	$origin_country->name=$req->name;
    	$origin_country->save();
    	return back();
    }
}
