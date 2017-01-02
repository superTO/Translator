@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">@lang('pm.My account')</a></li>
@endsection

@section('content')
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <legend><h1>@lang('pm.Assign worker')</h1></legend>
        <form method="POST" action="/assign/work/{{$document->id}}">
            {{ csrf_field() }}

            <div class="form-group ">
                <label>@lang('pm.Trans')</label>
                <select class="form-control" id="exampleSelect1" name="translator1_id">
                    @foreach($user as $users)
                        <option value="{{$users -> id}}">{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.1st-proof')</label>
                <select class="form-control" id="exampleSelect1" name="translator2_id">
                    @foreach($user as $users)
                        <option value="{{$users -> id}}">{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.2st-proof')</label>
                <select class="form-control" id="exampleSelect1" name="translator3_id">
                    @foreach($user as $users)
                        <option value="{{$users -> id}}">{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.3st-proof')</label>
                <select class="form-control" id="exampleSelect1" name="translator4_id">
                    @foreach($user as $users)
                        <option value="{{$users -> id}}">{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>
            <div>

                <button type="submit" class="btn btn-primary">@lang('pm.Submit')</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
@endsection