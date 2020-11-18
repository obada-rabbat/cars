<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Owner;

class OwnerController extends Controller
{
    public function add()
    {
    	return view('admin.owner.add');
    }

    public function store(Request $req)
    {
    	$owner = new Owner;
    	$owner->name = $req->name;
    	$owner->save();

    	return back();
    }



}
