@extends('layouts.for_user')

@section('bar_element')
    <li><a href="user/upload/{{ $id->id }}">@lang('user.Upload')</a></li>
@endsection

@section('content')
    <body>

    <div class="col-lg-2"></div>
    <div class="col-lg-8">

        <div class="container">
            <div class="col-lg-4">
                <legend><h1><a href="/user/index">@lang('user.Filelist')</a></h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>@lang('user.Searchfile')</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <form  action="/user/index_" method="get" class="search-form" role="search" >
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
                    <th>@lang('user.Number')</th>
                    <th>@lang('user.Name')</th>
                    <th>@lang('user.Status')</th>
                    <th>@lang('user.Expected Date')</th>
                    <th>@lang('user.Owner')</th>
                    <th>@lang('user.Details')</th>
                </tr>
                </thead>
                <tbody>
                @foreach($documents as $docu)
                    @if($docu->upload_user_id==$id->id)
                        <tr>
                            <td> {{$docu->id}} </td>
                            <td> {{$docu->document_name}} </td>
                            <td> @if($docu->translation_type==0)
                                    Initial state
                                @elseif($docu->translator_type==1)
                                    First proofreading
                                @elseif($docu->translator_type==2)
                                    Second proofreading
                                @elseif($docu->translator_type==3)
                                    third proofreading
                                @elseif($docu->translator_type==4)
                                    Finished
                                @endif


                            </td>
                            <td> {{$docu->due_date}} </td>
                            <td>    @if($docu->translator1)
                                    <li>{{ $docu->translator1->name }}</li>
                                @endif

                                @if ($docu->translator2)

                                    <li>{{$docu->translator2->name}}</li>

                                @endif
                                @if ($docu->translator3)

                                    <li>{{$docu->translator3->name}}</li>
                                @endif
                                @if ($docu->translator4)

                                    <li>{{$docu->translator4->name}}</li>
                                @endif

                            </td>
                            <td>@lang('user.Edit')</td>
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