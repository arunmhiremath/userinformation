@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4 text-center" >
            <div class="card" style="padding: 30px; background-color: #FFEB3B; height: 500px">
                <h6 class="text-uppercase">All in One</h6>
                <div class="pricing-bottom-list">
                    <h2>€ 0,00<span>/Mo</span></h2>
                    <ul>
                        <li>QR Code Erstellen</li>
                        <li>unbegrenzte Gastregistrierung</li>
                        <li>90 Tage Gästedaten verfügbar</li>
                        <li>Gästebericht</li>
                        <li>Mönatiche kündbar</li>

                    </ul>
                <a href="{{route('payment')}}" class="btn btn-primary">Auswählen</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 text-center">
            <div class="card" style="padding: 30px; background-color: #FFEB3B">
                <h6 class="text-uppercase">All in One</h6>
                <div class="pricing-bottom-list">
                    <h2>€ 4,99<span>/Mo</span></h2>
                    <ul>
                        <li>QR Code Erstellen</li>
                        <li>unbegrenzte Gastregistrierung</li>
                        <li>90 Tage Gästedaten verfügbar</li>
                        <li>Gästebericht</li>
                        <li>Mönatiche kündbar</li>

                    </ul>
                <a href="{{route('payment')}}" class="btn btn-primary">Auswählen</a>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection