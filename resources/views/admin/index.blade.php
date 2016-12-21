@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/') }}">Logout</a></li>
@endsection

@section('content')

    <body>

    <div class="col-lg-2"></div>
    <div class="col-lg-8">

        <div class="container">
            <div class="col-lg-4">
                <legend><h1><a href="/admin/index">Account List</a></h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>Search User</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <form action="/admin_" method="get" class="search-form" role="search">
                            <div class="form-group has-feedback">
                                <label for="search" class="sr-only">Search</label>
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
                    <th>ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    <th>Account</th>
                    <th>Phone Number</th>
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
                                    <td> User </td>
                                @elseif ($ID->role === 2)
                                    <td> PM </td>
                                @elseif ($ID->role === 3)
                                    <td> Translator </td>
                                @elseif ($ID->role >= 10)
                                    <td> Disabled Account </td>
                                @endif
                                <td> {{$ID->account}} </td>
                                <td> {{$ID->phone_number}} </td>
                                <td><a href="/admin/more/{{$ID->id}}">More</a></td>
                                @if ($ID->role >= 10)
                                    <td> <a href="/admin/enable/{{$ID->id}}">Enable</a> </td>
                                @else
                                    <td> <a href="/admin/disable/{{$ID->id}}">Disable</a> </td>
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