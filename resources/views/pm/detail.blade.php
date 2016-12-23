@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">My Account</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <div class="col-lg-6">
            <div class="form-group ">
                <label for="disabledTextInput">@lang('pm.Filename')</label>
                <p>12377777456</p>
            </div>
            <div class="form-group ">
                <label for="disabledTextInput">@lang('pm.Status')</label>
                <p>123456</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Artical type')</label>
                <p>123456</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Expected Day')</label>
                <p>123456</p>
            </div>

            <div class="form-group">
                <label for="disabledTextInput">@lang('pm.Ori-lang')</label>
                <p>123456</p>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">@lang('pm.Trans-lang')</label>
                <p>123456</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Owner')</label>
                <p>123456</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group  ">
                <div>
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    <button type="button" class="btn btn-link">@lang('pm.Download')</button>
                </div>
            </div>
            @if ($branch===1)
            <div class="form-group  ">
                <a href="/valuation"><button type="button" class="btn btn-primary btn-lg btn-block">@lang('pm.Valuation')</button></a>
                <small id="fileHelp" class="form-text text-muted">@lang('pm.Notice')
                </small>
            </div>
            @elseif($branch===2)
                <div class="form-group  ">
                    <a href="/assign"><button type="button" class="btn btn-primary btn-lg btn-block">@lang('pm.assign')</button></a>
                    <small id="fileHelp" class="form-text text-muted">@lang('pm.Notice')
                    </small>
                </div>

            @else
                <div>
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    <button type="button" class="btn btn-link">@lang('pm.Download')</button>
                </div>
            @endif


        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
