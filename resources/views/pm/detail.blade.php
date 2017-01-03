@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">@lang('pm.My account')</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <div class="col-lg-6">
            <div class="form-group ">
                <label for="disabledTextInput">@lang('pm.Filename')</label>
                <p>{{$show_indexs[0]->document_name}}</p>
            </div>
            <div class="form-group ">
                <label for="disabledTextInput">@lang('pm.Status')</label>
                <p>
                    @if($show_indexs[0]->translation_type==0)
                        Initial state
                    @elseif($show_indexs[0]->translation_type==1)
                        1st-proofreading
                    @elseif($show_indexs[0]->translation_type==2)
                        2nd-proofreading
                    @elseif($show_indexs[0]->translation_type==3)
                        3rd-proofreading
                    @elseif($show_indexs[0]->translation_type==4)
                        Finished
                    @endif
                </p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Artical type')</label>
                <p>{{$show_indexs[0]->remark  }}</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Expected Day')</label>
                <p>{{$show_indexs[0]->due_date  }}</p>
            </div>

            <div class="form-group">
                <label for="disabledTextInput">@lang('pm.Ori-lang')</label>
                <p>{{$show_indexs[0]->original_language  }}</p>
            </div>
            <div class="form-group">
                <label for="disabledTextInput">@lang('pm.Trans-lang')</label>
                <p>{{$show_indexs[0]->translated_language  }}</p>
            </div>

            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Owner')</label>
                <p>{{$show_indexs[0]->upload_user->name   }}</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Money')</label>
                <p>{{$show_indexs[0]->money  }}</p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="form-group  ">
                <div>
                    <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span>
                    <a href="download/{{$show_indexs[0] -> text_name }}"><button type="button" class="btn btn-link">@lang('pm.Download')</button></a>
                </div>
            </div>

            <div>
                    <div class="form-group  ">
                        @if($show_indexs[0] -> payment_type == 10)
                            <a href="/valuation/{{$show_indexs[0]->id}}"><button type="button" class="btn btn-primary btn-lg btn-block" disabled>Already have valuation</button></a>
                        @else
                            <a href="/valuation/{{$show_indexs[0]->id}}"><button type="button" class="btn btn-primary btn-lg btn-block" >Valuation</button></a>
                        @endif

                    </div>
            </div>


        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
