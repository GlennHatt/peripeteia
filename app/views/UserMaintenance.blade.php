/**
 * Created by PhpStorm.
 * User: Glenn Hatt
 * Date: 11/15/2014
 * Time: 6:18 PM
 */
<html lang="en" ng-app>
  <head>
    <meta charset="UTF-8">
    <title>User Maintenance</title>
  </head>

  <body>
   {{ Form::open(['route' => 'user.store']) }}
      <div>
         {{ Form::label('firstName', 'First Name:' ) }}
         {{ Form::text('firstName') }}
      </div>
      <div>
         {{ Form::label('lastName', 'Last Name:' ) }}
         {{ Form::text('lastName') }}
      </div>
      <div>
         {{ Form::label('email', 'Email:' ) }}
         {{ Form::text('email') }}
      </div>
      <div>
         {{ Form::label('password', 'Password:' ) }}
         {{ Form::password('password') }}
      </div>
      <div>
         {{ Form::label('office', 'Office:' ) }}
         {{ Form::text('office') }}
      </div>
      <div>
         {{ Form::label('officeHours', 'Office Hours:' ) }}
         {{ Form::text('officeHours') }}
      </div>
      <div>
         {{ Form::submit('Sign Up') }}
      </div>
    {{ Form::close() }}
  </body>
</html>