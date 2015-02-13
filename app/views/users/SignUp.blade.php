@extends('...layout.main')

@section('page-title')
  <title>Sign Up</title>
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
 </style>
@stop

@section('content')
  <div class="center row">
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
  </div>
@Stop