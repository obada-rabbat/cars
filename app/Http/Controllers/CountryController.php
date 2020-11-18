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
    	return redirect('/origin_country/all');
    }
     public function all()
    {   
        $origin_country=Origin_Country::all();
        return view('admin.origin_country.all',compact('origin_country'));
    }
    public function update($id)
    {   
        $origin_country=Origin_Country::where('id','=',$id)->first();
        return view('admin.origin_country.update',compact('origin_country'));
    }
}
