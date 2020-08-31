@extends('layout')

@section('content')
<div class="container">
    <div class="auth-pages">
       <div class="auth-left">
           @if (session()->has('success_message'))
           <div class="alert alert-success">
               {{ sesion()->get('success_message') }}
           </div>
           @endif @if(count($errors) > 0)
           <div class="alert alert-danger">
               <ul>
                   @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                   @endforeach
               </ul>
           </div>
           @endif
            <h2>Bestehender Kunde</h2>
            <div class="spacer"></div>

            <form action="{{ route('login') }}" method="POST">
                @csrf

                <input type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <input type="password" id="password" name="password" value="{{ old('password') }}" placeholder="Password" required autofocus>

                <div class="login-container">
                    <button type="submit" class="auth-button">Login</button>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Angemeldet bleiben
                    </label>
                </div>

                <div class="spacer"></div>

                <a href="{{ route('password.request') }}">Password vergessen</a>

            </form>
       </div>
       <div class="auth-right">
            <h2>Neuer Kunde</h2>
            <div class="spacer"></div>
            <p><strong>Sparen Sie jetzt Zeit.</strong></p>
            <p>Sie benötigen keinen Account um zu bezahlen.</p>
            <div class="spacer"></div>
            <a href="{{ route('guestCheckout.index') }}" class="auth-button-hollow">Weiter als Gast</a>
            <div class="spacer"></div>
            &nbsp;
            <div class="spacer"></div>
            <p><strong>Sparen Sie später Zeit.</strong></p>
            <p>Erstellen Sie einen Account um später schneller zu bezahlen und erhalten Zugang zu einem Kundenkonto.</p>
            <div class="spacer"></div>
            <a href="{{ route('register') }}" class="auth-button-hollow">Account Erstellen</a>
       </div>
    </div>

</div>
@endsection
