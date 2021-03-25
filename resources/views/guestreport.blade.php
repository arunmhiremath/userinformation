@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>

                
            </div> --}}
        </div>
    </div>


    <div>
        @if (!$guestdata)
        No Data available
        @else
        <table class="table" style="width:100%">
            <tr style="background-color: #FFF176">
              <th width="3%" > <strong>Nr.</strong> </th>  
              <th width="10%" > <strong>Datum</strong> </th>
              <th width="10%"><strong>UhrZeit</strong></th>
              <th width="30%"><strong>Name</strong></th>
              <th width="30%"><strong>Anschrift</strong></th>
              <th width="15%"><strong>Telefonnummer</strong></th>
            </tr>
            @foreach ($guestdata as $guest)
            <tr>
                <td>{{$slno++}}</td>
                <td>{{ date('d.m.Y', strtotime($guest->guest_visit_date)) }}</td>
                <td>{{$guest->guest_visit_time}}</td>
                <td>{{ucfirst($guest->guest_firstname)}} {{ucfirst($guest->guest_lastname)}}</td>
                <td>{{ucfirst($guest->guest_add_str)}} {{$guest->guest_add_hno}}, <br> 
                    {{$guest->guest_add_pin}} {{ucfirst($guest->guest_add_city)}}</td>
                <td>{{$guest->guest_tel_number}}</td>
            </tr>
            @endforeach
          </table>
                
        @endif
        
    </div>

</div>
@endsection
