@extends('bootstrapTemplate')
@section('title')
    Add event
@endsection
@section('body')
    <div class="main-login main-center">
        <h5>{{$event->title}}</h5>

            <div class="form-group">
                <p class="cols-sm-2 control-label">Location:{{$event->location}}</p>
            </div>

            <div class="form-group">
                <p class="cols-sm-2 control-label">Start's at: {{$event->start}}</p>
            </div>

        <div class="form-group">
            <p class="cols-sm-2 control-label">End's at: {{$event->end}}</p>
        </div>

            <div class="form-group ">
                <a href="/"  class="btn btn-primary btn-lg btn-block login-button">Back</a>
                <a href="/edit-event/{{$event->id}}"  class="btn btn-primary btn-lg btn-block login-button">Update</a>
                <a href="/delete-event/{{$event->id}}"  class="btn btn-primary btn-lg btn-block login-button">Delete</a>
            </div>
    </div>
@endsection