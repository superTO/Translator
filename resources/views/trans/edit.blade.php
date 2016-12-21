@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/trans') }}">My Account</a></li>
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
                <p>@if($document->translation_type==0)
                                  Initial state
                    @elseif($document->translator_type==1)
                                   First proofreading
                    @elseif($document->translator_type==2)
                                   Second proofreading
                    @elseif($document->translator_type==3)
                                    third proofreading
                    @elseif($document->translator_type==4)
                                    Finished
                    @endif</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">Article type</label>
                <p>@if($document->document_type==0)
                          Academic
                     @elseif($document->document_type==1)
                           Law 
                     @elseif($document->document_type==2)
                           Sports
                     @else
                           others
                     @endif</p>
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
                        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked>
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
                </form>
                <div class="form-group">
                     <legend>File Upload</legend>
                    <form method="POST" action="/trans/upload/{{$document->id}}" enctype="multipart/form-data">
                               {{ csrf_field() }}
                        <input type="file"  class="form-control-file" name="docu" id="exampleInputFile" aria-describedby="fileHelp">
                       <button type="submit">Submit</button>
                        <small  id="fileHelp" class="form-text text-muted">Notice : The file's type should be doc or docx. ; The size should be .smaller than 25MB.</small>
                    </form>
                     @if(count($errors))
                      <ul>
                          @foreach($errors->all() as $error)
                             <li>{{$error}}</li>
                             @endforeach
                    </ul>
                    @endif
                </div>

        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
