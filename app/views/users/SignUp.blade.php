@extends('...layout.main')

@section('page-title')
  <title>User Maintenance</title>
@stop

@section('extra-css')
  <style>
    .center.row {
      height: 300px;
      margin-left: auto;
      margin-right: auto;
      margin-top: 5%;
      max-width: 500px;
    }

    .signup-panel {
      padding: 15px;
    }

    .signup-panel i {
      font-size: 30px;
      line-height: 50px;
      color: #999;
    }

    .signup-panel form input, .signup-panel form span {
      height: 50px;
    }

    .signup-panel .welcome {
      font-size: 26px;
      text-align: center;
      margin-left: 0;
    }

    .signup-panel .button {
      margin-left: 35%;
    }

    section.active {
      padding-top: 75px !important;
    }

    p.title {
      border-bottom: 1px solid #cccccc !important;
    }

    .content{
      height: 450px;
    }
 </style>
@stop

@section('content')
  <div class="center row">
    <p>
      <div class="row">
        <div class="large-12 columns">
            {{ Form::open(['route' => 'user.store']) }}
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('first_name', 'First Name:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::text('first_name') }}
                    {{ $errors->first('first_name', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('last_name', 'Last Name:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::text('last_name') }}
                    {{ $errors->first('last_name', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('email', 'Email:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::text('email') }}
                    {{ $errors->first('email', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('office', 'Office:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::text('office') }}
                    {{ $errors->first('office', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('office_hours', 'Office Hours:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::text('office_hours') }}
                    {{ $errors->first('office_hours', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('password', 'Password:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::password('password') }}
                    {{ $errors->first('password', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                <div class="small-2  columns">
                  <span class="prefix">{{ Form::label('password_confirmation', 'Confirm:') }}</span>
                </div>
                <div class="small-10  columns">
                  {{ Form::password('password_confirmation') }}
                    {{ $errors->first('password_confirmation', '<span class=error>:message</span>') }}
                </div>
              </div>
              <div class="row collapse">
                 <div>
                    {{ Form::submit('Sign Up') }}
                 </div>
              </div>
            {{ Form::close() }}
          </div>
      </div>
    </p>
   </div>
@Stop