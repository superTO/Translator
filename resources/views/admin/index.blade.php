@extends('layouts.for_user')

@section('bar_element')
@endsection

@section('content')

    <body>

    <div class="col-lg-2"></div>
    <div class="col-lg-8">

        <div class="container">
            <div class="col-lg-4">
                <legend><h1><a href="/admin/index">@lang('admin.Account_List')</a></h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>@lang('admin.search_user')</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <form action="/admin_" method="get" class="search-form" role="search">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">@lang('admin.search')</label>
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
                    <th>@lang('admin.id')</th>
                    <th>@lang('admin.name')</th>
                    <th>@lang('admin.role')</th>
                    <select name="role" class="form-control" onchange="javascript:location.href=this.value;">
                        <option>@lang('admin.choose_a_role')</option>
                        <option value="index_Users">@lang('admin.users')</option>
                        <option value="index_PM">@lang('admin.pm')</option>
                        <option value="index_Translators">@lang('admin.translators')</option>
                    </select>
                    <th>@lang('admin.account')</th>
                    <th>@lang('admin.phone number')</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($ids as $ID)
                        <tr>
                            @if($ID->role != 0)
                                <td> {{$ID->id}} </td>
                                <td> {{$ID->name}} </td>
                                @if ($ID->role === 0)
                                    <td> Administrator </td>
                                @elseif ($ID->role === 1)
                                    <td> @lang('admin.user') </td>
                                @elseif ($ID->role === 2)
                                    <td> @lang('admin.pm') </td>
                                @elseif ($ID->role === 3)
                                    <td> @lang('admin.translator') </td>
                                @elseif ($ID->role >= 10)
                                    <td> @lang('admin.disable') </td>
                                @endif
                                <td> {{$ID->account}} </td>
                                <td> {{$ID->phone_number}} </td>
                                <td><a href="/admin/more/{{$ID->id}}">@lang('admin.more')</a></td>
                                @if ($ID->role >= 10)
                                    <td> <a href="/admin/enable/{{$ID->id}}">@lang('admin.enable')</a> </td>
                                @else
                                    <td> <a href="/admin/disable/{{$ID->id}}">@lang('admin.disable')</a> </td>
                                @endif
                            @endif
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