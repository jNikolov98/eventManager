@extends('bootstrapTemplate')
@section('title')
    Add event
@endsection
@section('body')
    <div class="main-login main-center">
        <h5>Add event</h5>
        <form class="" method="post" action="\save-event">
            {{csrf_field()}}

            <div class="form-group">
                <label for="title" class="cols-sm-2 control-label">Title of event</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="title" id="title" value="{{old('title')}}"  placeholder="Enter title"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="location" class="cols-sm-2 control-label">Location of event</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" name="location" id="location" value="{{old('location')}}"  placeholder="Enter location"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="start" class="cols-sm-2 control-label">Start of event</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="datetime-local" class="form-control" name="start_date" value="{{$date}}" id="start"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="end" class="cols-sm-2 control-label">End of event</label>
                <div class="cols-sm-10">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                        <input type="datetime-local" class="form-control" name="end_date" value="{{$date}}" id="end"/>
                    </div>
                </div>
            </div>

            <div class="form-group">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <div class="form-group ">
                <input type="submit" class="btn btn-primary btn-lg btn-block login-button" value="save event">
            </div>

        </form>
    </div>
@endsection