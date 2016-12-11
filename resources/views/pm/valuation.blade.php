@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">My Account</a></li>
    <li><a href="{{ url('/') }}">Logout</a></li>
@endsection

@section('content')

    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <form>
            <div class=" form-group ">
                <legend><h2>Accept/Reject this case?</h2></legend>
                <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                    <button type="button" class="btn btn-default">Accept</button>
                    <button type="button" class="btn btn-default">Reject</button>
                </div>
            </div>
            <div class=" form-group">
                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                <div class="input-group">
                    <div class="input-group-addon">$</div>
                    <input type="text" class="form-control" id="exampleInputAmount" placeholder="Amount">
                    <div class="input-group-addon"></div>
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <div class="col-lg-4"></div>
@endsection