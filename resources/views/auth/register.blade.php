@extends('layouts.app')

@section('content')
  <div class="container login-box" id="login-box">
    <h1>Registreren</h1>
    <form role="form" method="POST" action="{{ url('/register') }}">
      
      <div class="form-group{{ $errors->has('voornaam') ? ' has-error' : '' }}">
        <label>Naam</label>


        <input type="text" class="form-control" name="voornaam" value="{{ old('voornaam') }}" placeholder="Type hier je voornaam">

        @if ($errors->has('voornaam'))
          <span class="help-block">
            <strong>{{ $errors->first('voornaam') }}</strong>
          </span>
        @endif

      </div>

      <div class="form-group{{ $errors->has('achternaam') ? ' has-error' : '' }}">
        <label>Achternaam</label>

        <input type="text" class="form-control" name="achternaam" value="{{ old('achternaam') }}" placeholder="Type hier je achternaam">

        @if ($errors->has('voornaam'))
          <span class="help-block">
            <strong>{{ $errors->first('achternaam') }}</strong>
          </span>
        @endif

      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label>E-Mail Address</label>
        <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Type hier je E-mail">
        @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label>Wachtwoord</label>
        <input type="password" class="form-control" name="password" placeholder="Type je wachtwoord">

        @if ($errors->has('password'))
          <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        <label>Bevestig Wachtwoord</label>
        <input type="password" class="form-control" name="password_confirmation" placeholder="Type je wachtwoord opnieuw">

        @if ($errors->has('password_confirmation'))
          <span class="help-block">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </span>
        @endif

      </div>

      <div class="form-group">
          <input type="submit" value="registreer" class="btn btn-primary btn-block"/>
      </div>
      <div class="form-group">
        <a href="{{ url('/login') }}">Al een account? login hier</a>
      </div>
    </form>
  </div>
@endsection
