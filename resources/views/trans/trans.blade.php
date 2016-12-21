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
                <legend><h1><a href="/trans/index">File List</a></h1></legend>
            </div>

            <div class="col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-md-offset-4">
                        <h4>Search File</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-md-offset-3">
                             <form  action="/trans/index" method="get" class="search-form" role="search" > 
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
                  @if(($docu->translator1_id==$id->role) ||($docu->translator2_id==$id->role)||($docu->translator3_id==$id->role)||($docu->translator4_id==$id->role))
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
                        <td><a href="/trans/detail/{{$docu->id}}">Edit</a></td>            
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