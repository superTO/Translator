@extends('layouts.for_user')

@section('bar_element')
    <li><a href="{{ url('/admin/index') }}">My Account</a></li>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">@lang('admin.information')</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/admin/finish/{{ $user->id }}">
                            {{ csrf_field() }} {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                                <label for="role" class="col-md-4 control-label">@lang('admin.permission')</label>

                                <div class="col-md-6">
                                    <select name="role" class="form-control">
                                        @for($i = 1; $i<4; $i++)
                                            @if($user->role === $i)
                                                @if($i === 1)
                                                    <option value=1 selected>@lang('admin.user')</option>
                                                @elseif($i === 2)
                                                    <option value=2 selected>@lang('admin.pm')</option>
                                                @elseif($i === 3)
                                                    <option value=3 selected>@lang('admin.translator')</option>
                                                @endif
                                            @else
                                                @if($i === 1)
                                                    <option value=1>@lang('admin.user')</option>
                                                @elseif($i === 2)
                                                    <option value=2>@lang('admin.pm')</option>
                                                @elseif($i === 3)
                                                    <option value=3>@lang('admin.translator')</option>
                                                @endif
                                            @endif
                                        @endfor
                                    </select>

                                    @if ($errors->has('role'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">@lang('admin.name_companyName')</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" readonly required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('account') ? ' has-error' : '' }}">
                                <label for="account" class="col-md-4 control-label">@lang('admin.account')</label>

                                <div class="col-md-6">
                                    <input id="account" type="text" class="form-control" name="account" value="{{ $user->account }}" readonly required>

                                    @if ($errors->has('account'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('account') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">@lang('admin.password')</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" value="{{ $user->password }}" readonly required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('id_number') ? ' has-error' : '' }}">
                                <label for="id_number" class="col-md-4 control-label">@lang('admin.id_uniform')</label>

                                <div class="col-md-6">
                                    <input id="id_number" type="id_number" class="form-control" name="id_number" value="{{ $user->ssn }}" readonly required>

                                    @if ($errors->has('id_number'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('id_number') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">@lang('admin.phone number')</label>

                                <div class="col-md-6">
                                    <input id="phone" type="phone" class="form-control" name="phone" value="{{ $user->phone_number }}" readonly required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">@lang('admin.email address')</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" readonly required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        @lang('admin.submit')
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
