@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><h4>Edit Origin_Country</h4></center></div>     
                </div>
                <p></p>

                <form action="/origin_country/update/{{$origin_country->id}}" method="POST">
                    @csrf
                      <div class="form-group">
                        <label for="origin_country">Edit origin_country</label>
                        <input type="text" class="form-control" placeholder="Enter email" id="name" name="name" value="{{ $origin_country->name }}">
                      </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
