@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">My Account</a></li>
    <li><a href="{{ url('/') }}">Logout</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <div class="col-lg-6">
            <div class="form-group ">
                <label for="disabledTextInput">File Name</label>
                <p>12377777456</p>
            </div>
            <div class="form-group ">
                <label for="disabledTextInput">Status</label>
                <p>123456</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">Artical type</label>
                <p>123456</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">Expected Date</label>
                <p>123456</p>
            </div>

            <div class="form-group">
                <label for="disabledTextInput">Original Language</label>
                <p>123456</p>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Translated Language</label>
                <p>123456</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">Responsor</label>
                <p>123456</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group  ">
                <div>
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    <button type="button" class="btn btn-link">Download Original File</button>
                </div>
            </div>
            @if ($branch===1)
            <div class="form-group  ">
                <a href="/valuation"><button type="button" class="btn btn-primary btn-lg btn-block">Valuation</button></a>
                <small id="fileHelp" class="form-text text-muted">Notice : If you are not responsor of this status, DON'T EDIT IT!!!
                </small>
            </div>
            @elseif($branch===2)
                <div class="form-group  ">
                    <a href="/assign"><button type="button" class="btn btn-primary btn-lg btn-block">assign</button></a>
                    <small id="fileHelp" class="form-text text-muted">Notice : If you are not responsor of this status, DON'T EDIT IT!!!
                    </small>
                </div>

            @else
                <div>
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    <button type="button" class="btn btn-link">Download Current-updated File</button>
                </div>
            @endif


        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
