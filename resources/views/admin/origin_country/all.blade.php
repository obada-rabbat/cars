
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><center><h4>All Origin_Country</h4></center></div>     
                </div>
                <p></p>
                @if(count($origin_country)!= 0)
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>#ID</th>
                            <th>Name</th>
                            <th>Control</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($origin_country as $country)
                          <tr>
                            <td>{{$country->id}}</td>
                            <td>{{$country->name}}</td>
                            <td> <a href="/origin_country/update/{{$country->id}}" class="btn btn-success">Edit</a> <a href="/origin_country/delete/{{$country->id}}" class="btn btn-danger">Delte</a></td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                      @else
                      <dir class="alert alert-danger"><h3><center>No Data</center></h3></dir>
                      @endif
            </div>
        </div>
    </div>
</div>
@endsection









