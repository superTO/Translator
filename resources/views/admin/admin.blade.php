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
                <legend><h1>File List </h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>Search File</h4>
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
                    <th>Permissions</th>
                    <th>Account</th>
                    <th>Password</th>
                    <th>Phone Number</th>
                    <th>E-mail</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="text" class="form-control" placeholder="Enter filename" value="123456"></td>
                    <td><input type="text" class="form-control" placeholder="Enter filename" value="123456"></td>
                    <td><input type="text" class="form-control" placeholder="Enter filename" value="123456"></td>
                    <td><input type="text" class="form-control" placeholder="Enter filename" value="123456"></td>
                    <td><input type="text" class="form-control" placeholder="Enter filename" value="123456"></td>
                </tr>



                </tbody>
            </table>
        </div>

    </div>

    <div class="col-lg-2"></div>

    </body>
    </html>

@endsection