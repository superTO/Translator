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
                <p>{{$show_indexs[0]->translation_type }}</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Artical type')</label>
                <p>{{$show_indexs[0]->document_type  }}</p>
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
                <p>{{$show_indexs[0]->account  }}</p>
            </div>
            <div class="form-group  ">
                <label for="disabledTextInput">@lang('pm.Money')</label>
                <p>{{$show_indexs[0]->payment_type  }}</p>
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
                        <a href="/valuation/{{$show_indexs[0]->d_id}}"><button type="button" class="btn btn-primary btn-lg btn-block">Valuation</button></a>
                    </div>
            </div>


        </div>
    </div>
    <div class="col-lg-3"></div>

@endsection
