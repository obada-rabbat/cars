@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><h4>Add Origin_Country</h4></center></div>     
                </div>
                <p></p>
                <form action="{{route('store_OriginCountry')}}" method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="origin_country">Add origin_country</label>
                        <input type="name" class="form-control" placeholder="Enter email" id="email">
                      </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
