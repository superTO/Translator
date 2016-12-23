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
                    <option>English</option>
                    <option>Traditional Chinese</option>
                    <option>Chinese</option>
                    <option>Japanese</option>
                    <option>Korean</option>
                    <option>German</option>
                    <option>Spanish</option>
                    <option>French</option>
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.1st-proof')</label>
                <select class="form-control" id="exampleSelect1">
                    <option>English</option>
                    <option>Traditional Chinese</option>
                    <option>Chinese</option>
                    <option>Japanese</option>
                    <option>Korean</option>
                    <option>German</option>
                    <option>Spanish</option>
                    <option>French</option>
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.2st-proof')</label>
                <select class="form-control" id="exampleSelect1">
                    <option>English</option>
                    <option>Traditional Chinese</option>
                    <option>Chinese</option>
                    <option>Japanese</option>
                    <option>Korean</option>
                    <option>German</option>
                    <option>Spanish</option>
                    <option>French</option>
                </select>
            </div>

            <div class="form-group ">
                <label>@lang('pm.3st-proof')</label>
                <select class="form-control" id="exampleSelect1">
                    <option>English</option>
                    <option>Traditional Chinese</option>
                    <option>Chinese</option>
                    <option>Japanese</option>
                    <option>Korean</option>
                    <option>German</option>
                    <option>Spanish</option>
                    <option>French</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">@lang('pm.Submit')</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
@endsection