@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/trans') }}">My Account</a></li>
    <li><a href="{{ url('/') }}">Logout</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <div class="col-lg-6">
            <div class="form-group ">
                <label for="disabledTextInput">File Name</label>
                <p>{{$document->document_name}}</p>
            </div>
            <div class="form-group ">
                <label for="disabledTextInput">Status</label>
                <p>{{$document->translation_type}}</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">Article type</label>
                <p>{{$document->document_type}}</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">Expected Date</label>
                <p>{{$document->due_date}}</p>
            </div>

            <div class="form-group">
                <label for="disabledTextInput">Original Language</label>
                <p>{{$document->original_language}}</p>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">Translated Language</label>
                <p>{{$document->translated_language}}</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">Responsor</label>
                <p>{{$document->translator1_id}}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group  ">
            <div>
                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                <a href="{{$document->id}}/Original_Download"><button type="button" class="btn btn-link">Download Original File</button></a>
            </div>
            <div>
                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                <a href="{{$document->id}}/Current_Download"><button type="button" class="btn btn-link">Download Current-updated File</button></a>
            </div>
            </div>
            <div class="form-group  ">
                <a href="/trans/detail/edit/{{$document->id}}"><button type="button" class="btn btn-primary btn-lg btn-block">Edit the file</button></a>
                <small id="fileHelp" class="form-text text-muted">Notice : If you are not responsor of this status, DON'T EDIT IT!!!
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
