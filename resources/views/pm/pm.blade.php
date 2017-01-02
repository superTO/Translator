@extends('layouts.for_user')

@section('bar_element')
@endsection

@section('content')
    <body>

    <div class="col-lg-2"></div>
    <div class="col-lg-8">

        <div class="container">
            <div class="col-lg-4">
                <legend><h1>@lang('pm.Filelist')</h1> </legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>@lang('pm.Search file')</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <form action="" class="search-form">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">@lang('pm.Search')</label>
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
                    <th>@lang('pm.Name')</th>
                    <th>@lang('pm.Status')</th>
                    <th>@lang('pm.Expected Day')</th>
                    <th>@lang('pm.Owner')</th>
                    <th>@lang('pm.Details')</th>
                    <th>assign</th>
                </tr>
                </thead>

                <tbody>
                @foreach($show_indexs as $show_index)
                    <tr>
                    <td>{{$show_index -> document_name}}</td>
                    <td>{{$show_index -> translation_type}}</td>
                    <td>{{$show_index -> due_date}}</td>
                    <td>{{$show_index -> account}}</td>
                    <td><a href = "detail/{{$show_index ->d_id}}"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a></td>
                    <td><a href = "assign/{{$show_index ->d_id}}"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></a></td>
                    </tr>
                @endforeach

                </tbody>

            </table>
        </div>




    </div>

    <div class="col-lg-2"></div>

    </body>
    </html>
@endsection