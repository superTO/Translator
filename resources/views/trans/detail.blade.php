@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/trans') }}">My Account</a></li>
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
                <p> @if($document->translation_type==0)
                                  Initial state
                    @elseif($document->translator_type==1)
                                   First proofreading
                    @elseif($document->translator_type==2)
                                   Second proofreading
                    @elseif($document->translator_type==3)
                                    third proofreading
                    @elseif($document->translator_type==4)
                                    Finished
                    @endif
                 </p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('trans.Article_type')</label>
                <p>  @if($document->document_type==0)
                          Academic
                     @elseif($document->document_type==1)
                           Law 
                     @elseif($document->document_type==2)
                           Sports
                     @else
                           others
                     @endif


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
               <p> @if($document->translator1)
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
                    @endif
              </p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group  ">
            <div>
                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                <a href="{{$document->id}}/Original_Download"><button type="button" class="btn btn-link">@lang('trans.Download_Original_File')</button></a>
            </div>
            <div>
                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                <a href="{{$document->id}}/Current_Download"><button type="button" class="btn btn-link">@lang('trans.Download_Current-updated_File')</button></a>
            </div>
            </div>
            <div class="form-group  ">
                <a href="/trans/detail/edit/{{$document->id}}"><button type="button" class="btn btn-primary btn-lg btn-block">@lang('trans.Edit_the_file')</button></a>
                <small id="fileHelp" class="form-text text-muted">
                    @lang('trans.Notice')
                </small>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
