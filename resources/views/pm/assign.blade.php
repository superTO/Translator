@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">@lang('pm.My account')</a></li>
@endsection

@section('content')
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <legend><h1>@lang('pm.Assign worker')</h1></legend>
        <form>

            <div class="form-group ">
                <label>@lang('pm.Trans')</label>
                <select class="form-control" id="exampleSelect1">
                    @foreach($user as $users)
                        <option>{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.1st-proof')</label>
                <select class="form-control" id="exampleSelect1">
                    @foreach($user as $users)
                        <option>{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.2st-proof')</label>
                <select class="form-control" id="exampleSelect1">
                    @foreach($user as $users)
                        <option>{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.3st-proof')</label>
                <select class="form-control" id="exampleSelect1">
                    @foreach($user as $users)
                        <option>{{$users -> account}}</option>
                    @endforeach
                </select>
            </div>
            <div>
            <!--<a href="{{action('PMcontroller@upload')}}" type="submit" class="btn btn-primary">Submit</a>-->
                <button type="submit" class="btn btn-primary">@lang('pm.Submit')</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
@endsection