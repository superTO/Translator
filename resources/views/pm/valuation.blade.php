@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">@lang('pm.My account')</a></li>
@endsection

@section('content')

    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form action="/pmdetail">
            <div class=" form-group ">
                <legend><h2>@lang('pm.Accept?')</h2></legend>
                <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                    <button type="button" class="btn btn-default">@lang('pm.Accept')</button>
                    <button type="button" class="btn btn-default">@lang('pm.Reject')</button>
                </div>
            </div>
            <div class=" form-group">
                <label class="sr-only" for="exampleInputAmount">@lang('pm.Amount')</label>
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                    <div class="input-group-addon"></div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">@lang('pm.Submit')</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
@endsection