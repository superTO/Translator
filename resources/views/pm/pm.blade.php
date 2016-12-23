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
                    <th>@lang('pm.Number')</th>
                    <th>@lang('pm.Name')</th>
                    <th>@lang('pm.Status')</th>
                    <th>@lang('pm.Expected Day')</th>
                    <th>@lang('pm.Owner')</th>
                    <th>@lang('pm.Details')</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>Non-processing</td>
                    <td>dolor</td>
                    <td>dolor</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>Un-paid</td>
                    <td>adipiscing</td>
                    <td>adipiscing</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>Integer</td>
                    <td>Translating</td>
                    <td>odio</td>
                    <td>odio</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>libero</td>
                    <td>1st-Proofreading</td>
                    <td>cursus</td>
                    <td>cursus</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>
                <tr>
                    <td>1,004</td>
                    <td>dapibus</td>
                    <td>2nd-Proofreading</td>
                    <td>Sed</td>
                    <td>Sed</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>3rd-Proofreading</td>
                    <td>sem</td>
                    <td>sem</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>Finish</td>
                    <td>sem</td>
                    <td>sem</td>
                    <td><a href="/pmdetail">Details</a></td>
                </tr>


                </tbody>
            </table>
        </div>

    </div>

    <div class="col-lg-2"></div>

    </body>
    </html>
@endsection