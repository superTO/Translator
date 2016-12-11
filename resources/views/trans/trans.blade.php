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
                <legend><h1>File List</h1> </legend>
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
                    <th>Number</th>
                    <th>Name</th>
                    <th>status</th>
                    <th>Expected Date</th>
                    <th>Responsor</th>
                    <th>Details</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1,001</td>
                    <td>Lorem</td>
                    <td>Non-processing</td>
                    <td>dolor</td>
                    <td>dolor</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1,002</td>
                    <td>amet</td>
                    <td>Un-paid</td>
                    <td>adipiscing</td>
                    <td>adipiscing</td>
                    <td></td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>Integer</td>
                    <td>Translating</td>
                    <td>odio</td>
                    <td>odio</td>
                    <td><a href="/detail">Details</a></td>
                </tr>
                <tr>
                    <td>1,003</td>
                    <td>libero</td>
                    <td>1st-Proofreading</td>
                    <td>cursus</td>
                    <td>cursus</td>
                    <td><a href="/detail">Details</a></td>
                </tr>
                <tr>
                    <td>1,004</td>
                    <td>dapibus</td>
                    <td>2nd-Proofreading</td>
                    <td>Sed</td>
                    <td>Sed</td>
                    <td><a href="/detail">Details</a></td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>3rd-Proofreading</td>
                    <td>sem</td>
                    <td>sem</td>
                    <td><a href="/detail">Details</a></td>
                </tr>
                <tr>
                    <td>1,005</td>
                    <td>Nulla</td>
                    <td>Finish</td>
                    <td>sem</td>
                    <td>sem</td>
                    <td><a href="/detail">Details</a></td>
                </tr>


                </tbody>
            </table>
        </div>

    </div>

    <div class="col-lg-2"></div>

    </body>
    </html>
@endsection