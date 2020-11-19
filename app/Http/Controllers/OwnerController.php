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

    	return redirect('/owner/all');
    }

    public function all()
    {
    	$owner=Owner::all();
    	return view ('admin.owner.all',compact('owner'));
    }

    public function edit($id)
    {
    	$owner = Owner::where('id','=',$id)->first();
    	return view('admin.owner.edit',compact('owner'));
    }



}
