@extends('layouts.app')

@section('content')

<div class="container">
    <div class="add-owner">
        <h1 class="text-center">Add Owner</h1>
        <form action="{{route('store-owner')}}" method="POST">
            @csrf
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" placeholder="Enter Nameame" id="name" name="name">
            </div>
            
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
</div>

@endsection