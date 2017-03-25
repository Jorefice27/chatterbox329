{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                    <div>
                        <button class="btn btn-danger">New Forum</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 --}}

@extends('layouts.app')
@section('content')
<h1>{{ $user->name }}</h1>
<div>
    <button class="btn btn-danger">New Forum</button>
</div>
<a href='{user}/friends'>Friends</a>
@endsection
 