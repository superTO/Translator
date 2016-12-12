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
            <form>
                <fieldset class="form-group">
                    <legend>Radio buttons</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Translating
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                            1st-Proofreading
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                            2nd-Proofreading
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            3rd-Proofreading
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                            Finish
                        </label>
                    </div>
                </fieldset>

                <div class="form-group">
                    <legend>File Upload</legend>
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

                    <small id="fileHelp" class="form-text text-muted">Notice : The file's type should be doc or docx. ; The size should be smaller than 25MB.
                    </small>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
