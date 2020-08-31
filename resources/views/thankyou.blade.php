@extends('layout')

@section('title', 'Thank You')

@section('extra-css')

@endsection

@section('body-class', 'sticky-footer')

@section('content')

   <div class="thank-you-section">
       <h1>Vielen Dank für <br> Ihre Bestellung!</h1>
       <p>Eine Bestätigungs Email wurde versendet.</p>
       <div class="spacer"></div>
       <div>
           <a href="{{ url('/') }}" class="button">Startseite</a>
       </div>
   </div>




@endsection
