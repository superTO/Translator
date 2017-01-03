@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">@lang('pm.My account')</a></li>
@endsection

@section('content')

    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form method="post" action="/valuation/work/{{$document->id}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class=" form-group ">
                <legend><h2>@lang('pm.Accept?')</h2></legend>
                <div>
                    accept
                    <input type="radio" name="decision" value="Accept" class="btn btn-default">
                </div>
                <div>
                    reject
                    <input type="radio" name="decision" value="Reject" class="btn btn-default">
                </div>

            </div>
            <div class=" form-group">
                <label class="sr-only" for="exampleInputAmount">@lang('pm.Amount')</label>
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="text" class="form-control" id="exampleInputAmount" name="money" placeholder="Amount">
                    <div class="input-group-addon"></div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">@lang('pm.Submit')</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
@endsection