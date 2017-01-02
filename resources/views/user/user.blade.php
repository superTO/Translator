@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('user/upload') }}">@lang('user.Upload')</a></li>
@endsection

@section('content')
    <body>

    <div class="col-lg-2"></div>
    <div class="col-lg-8">

        <div class="container">
            <div class="col-lg-4">
                <legend><h1><a href="/user">@lang('user.Filelist')</a></h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>@lang('user.Searchfile')</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <form  action="/user_" method="get" class="search-form" role="search" >
                            <div class="form-group has-feedback">
                                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                                <span class="glyphicon glyphicon-search form-control-feedback"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
                   {{-- <th>@lang('user.Number')</th>--}}
                    <th>@lang('user.Name')</th>
                    <th>@lang('user.Status')</th>
                    <th>@lang('user.Expected Date')</th>
                    <th>@lang('user.Download')</th>
                    <th>@lang('user.Details')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($documents as $docu)
                    @if($docu->upload_user_id==$id->id)
                        <tr>
                           {{-- <td> {{$docu->id}} </td>--}}
                            <td> {{$docu->document_name}} </td>
                            <td>@if($docu->translation_type==0)
                                    @lang('pm.ini_state')
                                @elseif($docu->translation_type==1)
                                    @lang('pm.1st-proof')
                                @elseif($docu->translation_type==2)
                                    @lang('pm.2nd-proof')
                                @elseif($docu->translation_type==3)
                                    @lang('pm.3rd-proof')
                                @elseif($docu->translation_type==4)
                                    @lang('pm.finish_state')
                                @endif
                            </td>
                            <td> {{$docu->due_date}} </td>
                            <td>
                                <a href="/user/download/{{ $docu-> text_name }}">@lang('user.Download')</a>
                            </td>
                            <td><a href="user/cancel/{{ $docu -> text_name  }}">@lang('user.Cancel')</a></td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <div class="col-lg-2"></div>

    </body>
    </html>
@endsection