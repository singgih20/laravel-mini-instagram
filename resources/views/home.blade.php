@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">

            @foreach($users as $user)
            <div class="card mb-5" style="width: 25rem; height:500px;">
                <div class="card-header">
                    <img src="/storage/avatars/{{$user->avatar}}" class="rounded-circle" width="40px;" height="40px;" style="margin-top:14px; margin-right:10px;"> <span style="font-weight:bold;"> {{$user->name}} </span>
                    <p style="margin-left:56px; margin-top:-16px;">{{$user->post->first()->created_at->diffForHumans()}}</p>
                </div>
                <div class="card-body">
                    <img src="/storage/img/{{$user->post->first()->image}}" width="100%">
                </div>
                <div class="card-header">
                    <h6>{{$user->email}}</h6>
                    <p>{{$user->post->first()->caption}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection 