@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/pm') }}">My Account</a></li>
@endsection

@section('content')    
{!!Form::open(array('action'=>array('PMcontroller@Updatedatabase')))!!}
<div class="form-group">
{!!Form::label('translator_id','Select a translator')!!}
{!!Form::slect('translator_id',$translator,null,['class'=>'form-control']!!)}
</div>
{!!Form::close()!!}   
@endsection


@section('content')
    <div class="col-lg-4"></div>
    <div class="col-lg-4">
        <legend><h1>Assign the worker</h1></legend>
    <form>

    <div class="form-group ">
        <label>Translator</label>
        <select class="form-control" id="exampleSelect1">
            <option>English</option>
            <option>Traditional Chinese</option>
            <option>Chinese</option>
            <option>Japanese</option>
            <option>Korean</option>
            <option>German</option>
            <option>Spanish</option>
            <option>French</option>
        </select>
    </div>

        <div class="form-group ">
            <label>1st-Proofreader</label>
            <select class="form-control" id="exampleSelect1">
                <option>English</option>
                <option>Traditional Chinese</option>
                <option>Chinese</option>
                <option>Japanese</option>
                <option>Korean</option>
                <option>German</option>
                <option>Spanish</option>
                <option>French</option>
            </select>
        </div>

        <div class="form-group ">
            <label>2nd-Proofreader</label>
            <select class="form-control" id="exampleSelect1">
                <option>English</option>
                <option>Traditional Chinese</option>
                <option>Chinese</option>
                <option>Japanese</option>
                <option>Korean</option>
                <option>German</option>
                <option>Spanish</option>
                <option>French</option>
            </select>
        </div>

        <div class="form-group ">
            <label>3rd-Proofreader</label>
            <select class="form-control" id="exampleSelect1">
                <option>English</option>
                <option>Traditional Chinese</option>
                <option>Chinese</option>
                <option>Japanese</option>
                <option>Korean</option>
                <option>German</option>
                <option>Spanish</option>
                <option>French</option>
            </select>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
    <div class="col-lg-4"></div>
@endsection