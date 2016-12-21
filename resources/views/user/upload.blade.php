@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/user') }}">My Account</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <form>
            <div class="form-group " >
                <label>File Name</label>
                <input type="text" class="form-control" placeholder="Enter filename" value="123456">
            </div>
            <div class="form-group  ">
                <label>Artical type</label>
                <select class="form-control" id="exampleSelect1">
                    <option>announcement</option>
                    <option>Regulations</option>
                    <option>Academic</option>
                    <option>Other</option>
                </select>
            </div>

            <div class="form-group  ">
                <label>Expected Date</label>
                <div>
                    <input class="form-control" type="date" value="2016-12-11" id="example-date-input">
                </div>
            </div>

            <div class="form-group col-lg-6">
                <label>Original Language</label>
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
            <div class="form-group col-lg-6">
                <label>Translated Language</label>
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


            <div class="form-group">
                <label>File input</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

                <small id="fileHelp" class="form-text text-muted">Notice : The file's type should be doc or docx. ; The size should be smaller than 25MB.
                </small>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                    I agree the terms of service
                </label>
            </div>
            <!--<button type="submit" class="btn btn-primary">Submit</button>-->
            <a href="{{action('MailController@uploadmail')}}" type="submit" class="btn btn-primary">Submit</a>
        </form>
    </div>
    <div class="col-lg-3"></div>

    {{--<div class="container">
        <div class="col-lg-2"></div>

        <div class="col-lg-8">
            <form>

                <div class="input-group">
                    <span class="input-group-addon" id="sizing-addon2">File Name</span>
                    <input type="text" class="form-control" placeholder="Filename" aria-describedby="sizing-addon2">
                </div>
                <div class="container">
                    <select class="custom-select">
                        <option selected>origin</option>
                        <option value="1">English</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <select class="custom-select">
                        <option selected>change</option>
                        <option value="1">English</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                </br>
                <div class="container">
                    <select class="custom-select">
                        <option selected>type</option>
                        <option value="1">English</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                </br>

                <div class="form-group row">
                    <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>
                    <div class="col-xs-10">
                        <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div>
                </div>

                <label class="custom-file">
                    <input type="file" id="file" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>

                <input type="submit" value="submit">

            </form>
        </div>

        <div class="col-lg-2"></div>
    </div>--}}
@endsection