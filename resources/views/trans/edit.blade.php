@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/trans/index') }}">My Account</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <div class="col-lg-6">
            <div class="form-group ">
                <label for="disabledTextInput">@lang('trans.File_Name')</label>
                <p>{{$document->document_name}}</p>
            </div>
            <div class="form-group ">
                <label for="disabledTextInput">@lang('trans.Status')</label>
                <p>@if($document->translation_type==0)
                        Initial state
                    @elseif($document->translation_type==1)
                        1st-proofreading
                    @elseif($document->translation_type==2)
                        2nd-proofreading
                    @elseif($document->translation_type==3)
                        3rd-proofreading
                    @elseif($document->translation_type==4)
                        Finished
                    @endif
                </p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('trans.Article_type')</label>
                <p>
                    {{$document -> remark}}
                </p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">@lang('trans.Expected_Date')</label>
                <p>{{$document->due_date}}</p>
            </div>

            <div class="form-group">
                <label for="disabledTextInput">@lang('trans.Original_Language')</label>
                <p>{{$document->original_language}}</p>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">@lang('trans.Translated_Language')</label>
                <p>{{$document->translated_language}}</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">@lang('trans.Responsor')</label>
                <p>@if($document->translator1)
                        {{ $document->translator1->name }}
                    @endif
                    @if ($document->translator2)
                        {{$document->translator2->name}}
                    @endif
                    @if ($document->translator3)
                        {{$document->translator3->name}}
                    @endif
                    @if ($document->translator4)
                        {{$document->translator4->name}}
                    @endif</p>
            </div>
        </div>

        <div class="col-lg-6">

            <form method="POST" action="/trans/upload/{{$document->id}}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset class="form-group">
                    <legend>@lang('trans.Modify_file_status')</legend>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios"
                                   value="0" >
                            @lang('trans.Translating')
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios"
                                   value="1">
                            @lang('trans.1st-Proofreading')
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios"
                                   value="2" >
                            @lang('trans.2nd-Proofreading')
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios"
                                   value="3" >
                           @lang('trans.3rd-Proofreading')
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios"
                                   value="4" >
                            @lang('trans.Finish')
                        </label>
                    </div>
                </fieldset>

                <div class="form-group">
                    <legend>@lang('trans.File_Upload')</legend>

                    <input type="file" class="form-control-file" name="documents" id="exampleInputFile"
                           aria-describedby="fileHelp">
                    <button type="submit">@lang('trans.Submit')</button>
                    <small id="fileHelp" class="form-text text-muted">
                        @lang('trans.Notice_e')
                    </small>

                    @if(count($errors))
                        <span class="help-block">
                        <strong style="color: #9A0000">
                            {{ $errors->first() }}
                        </strong>
                        </span>
                    @endif
                </div>
            </form>

        </div>

    </div>
    <div class="col-lg-3"></div>

@endsection
