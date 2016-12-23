@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/user') }}">My Account</a></li>
@endsection

@section('content')

    <div class="col-lg-3"></div>
    <div class="container col-lg-6">
        <form method="POST" action="/testmail" enctype="multipart/form-data" >
            {{ csrf_field() }}
            
            <div class="form-group " >
                <label>@lang('user.Filename')</label>
                <input type="text" class="form-control" name="filename" placeholder="Enter filename" value="123456">
            </div>
            <div class="form-group  ">
                <label>@lang('user.Artical type')</label>
                <input type="text" class="form-control" name="artical type" placeholder="remark" value="123456">
            </div>

            <div class="form-group  ">
                <label>@lang('user.Expected Day')</label>
                <div>
                    <input class="form-control" type="date" name="data" value="2016-12-11" id="example-date-input">
                </div>
            </div>

            <div class="form-group col-lg-6">
                <label>@lang('user.Ori-lang')</label>
                <select name="ori_language" class="form-control" id="exampleSelect1">
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
                <label>@lang('user.Trans-lang')</label>
                <select name="trans_language" class="form-control" id="exampleSelect1">
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
                <label>@lang('user.Fileinput')</label>
                <input name="file_input" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

                <small id="fileHelp" class="form-text text-muted">@lang('user.Notice')
                </small>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input name="check" type="checkbox" class="form-check-input">
                    @lang('user.Serve')
                </label>
            </div>
            
            <!--<a href="{{action('MailController@uploadmail')}}" type="submit" class="btn btn-primary">Submit</a>-->
            <button type="submit" class="btn btn-primary">@lang('user.Submit')</button>
        </form>
    </div>
    <div class="col-lg-3"></div>






    <!--{{--<div class="container">-->
    <!--    <div class="col-lg-2"></div>-->

    <!--    <div class="col-lg-8">-->
    <!--        <form>-->

    <!--            <div class="input-group">-->
    <!--                <span class="input-group-addon" id="sizing-addon2">File Name</span>-->
    <!--                <input type="text" class="form-control" placeholder="Filename" aria-describedby="sizing-addon2">-->
    <!--            </div>-->
    <!--            <div class="container">-->
    <!--                <select class="custom-select">-->
    <!--                    <option selected>origin</option>-->
    <!--                    <option value="1">English</option>-->
    <!--                    <option value="2">Two</option>-->
    <!--                    <option value="3">Three</option>-->
    <!--                </select>-->

    <!--                <select class="custom-select">-->
    <!--                    <option selected>change</option>-->
    <!--                    <option value="1">English</option>-->
    <!--                    <option value="2">Two</option>-->
    <!--                    <option value="3">Three</option>-->
    <!--                </select>-->
    <!--            </div>-->
    <!--            </br>-->
    <!--            <div class="container">-->
    <!--                <select class="custom-select">-->
    <!--                    <option selected>type</option>-->
    <!--                    <option value="1">English</option>-->
    <!--                    <option value="2">Two</option>-->
    <!--                    <option value="3">Three</option>-->
    <!--                </select>-->
    <!--            </div>-->
    <!--            </br>-->

    <!--            <div class="form-group row">-->
    <!--                <label for="example-date-input" class="col-xs-2 col-form-label">Date</label>-->
    <!--                <div class="col-xs-10">-->
    <!--                    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">-->
    <!--                </div>-->
    <!--            </div>-->

    <!--            <label class="custom-file">-->
    <!--                <input type="file" id="file" class="custom-file-input">-->
    <!--                <span class="custom-file-control"></span>-->
    <!--            </label>-->

    <!--            <input type="submit" value="submit">-->

    <!--        </form>-->
    <!--    </div>-->

    <!--    <div class="col-lg-2"></div>-->
    <!--</div>--}}-->
@endsection