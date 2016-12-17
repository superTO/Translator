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
                <legend><h1>Account List </h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>Search Account</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                        <form action="" class="search-form">
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
                    <th>Role</th>
                    <th>Name</th>
                    <th>Account</th>
                    <th>Phone Number</th>
                    <th>E-mail</th>

                </tr>
                </thead>
                <tbody>
                    @foreach($ids as $ID)
                        <tr>
                            <td> {{$ID->id}} </td>
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
                            <td> {{$ID->name}} </td>
                            <td> {{$ID->account}} </td>
                            <td> {{$ID->phone_number}} </td>
                            <td> {{$ID->email}} </td>
                            @if ($ID->role > 10)
                                <td> <a href="/admin/enable/{{$ID->id}}">Enable</a> </td>
                            @else
                                <td> <a href="/admin/disable/{{$ID->id}}">Disable</a> </td>
                            @endif
                            <td><a href="/admin/edit/{{$ID->id}}">Edit</a></td>
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