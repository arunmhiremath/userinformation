@extends('layouts.app')

@section('content')

<div class="visible-print text-center">
    <h1>Ich Bin Da App</h1>
    <br>

    <h2>Scan QR Code von Ich Bin Da App</h2>

    {!! QrCode::size(350)->generate('www.ichbinda-app.de') !!}
     
    {{-- {!! QrCode::size(350)->generate(auth()->user()->id); !!} --}}
     
    <p>--</p>
</div>

@endsection