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
               @foreach($documents as $docu)
                  <tr>
                        <td> {{$docu->id}} </td>
                        <td> {{$docu->document_name}} </td>
                        <td> {{$docu->translation_type}} </td>
                        <td> {{$docu->due_date}} </td>
                        <td> {{$docu->translator1_id }} </td>
                        <td><a href="trans/detail/{{$docu->id}}">Edit</a></td>
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