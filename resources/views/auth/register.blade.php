@extends('layout')

@section('title', 'Sign Up for an Account')

@section('content')
<div class="container">
    <div class="auth-pages">
        <div>
            @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
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
            <h2>Account Erstellen</h2>
            <div class="spacer"></div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name" required autofocus>

                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>

                <input id="password" type="password" class="form-control" name="password" placeholder="Password" placeholder="Passwort" required>

                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Passwort Bestätigen"
                    required>

                <div class="login-container">
                    <button type="submit" class="auth-button">Account Erstellen</button>
                    <div class="already-have-container">
                        <p><strong>Besitzen Sie einen Account ?</strong></p>
                        <a href="{{ route('login') }}">Anmelden</a>
                    </div>
                </div>

            </form>
        </div>

        <div class="auth-right">
            <h2>Neuer Kunde</h2>
            <div class="spacer"></div>
            <p><strong>Sparen Sie jetzt Zeit.</strong></p>
            <p>Wenn Sie einen Account erstellen, dann ermöglicht das Ihnen in Zujunft schneller den Bezahlvorgang abzuschließen und ihre Erfahrung in unserem Shop ganz nach Ihren Wünschen zu gestalten.</p>

            &nbsp;
            <div class="spacer"></div>
            <p><strong>Loyalty Program</strong></p>
            <p>Stammkunden bekommen regelmäßig Rabatte und Gutscheine per Email zugesendet und können somit viel Geld sparen.</p>
        </div>
    </div> <!-- end auth-pages -->
</div>
@endsection