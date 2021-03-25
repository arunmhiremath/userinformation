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
        <div class="form-body on-top">            
            <div class="form-holder">
                <div class="form-content">
                    <div>
                        <form method="GET" action="{{ action('ProfileController@update') }}" accept-charset="UTF-8">
                                <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    
                                    <input type="text" name="comp_name" class="form-control" placeholder="Name der Firma" required 
                                    value="{{empty(auth()->user()->comp_name)? auth()->user()->comp_name : decrypt(auth()->user()->comp_name) }}"
                                
                                    required>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="firstname" 
                                    value="{{empty(auth()->user()->firstname)? auth()->user()->firstname : decrypt(auth()->user()->firstname) }}" 
                                    placeholder="Vorname" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="lastname" 
                                    value="{{empty(auth()->user()->lastname)? auth()->user()->lastname : decrypt(auth()->user()->lastname) }}" 
                                    placeholder="Nachname">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-4">
                                    <input type="text" class="form-control" name="add_str" 
                                    value="{{empty(auth()->user()->add_str)? auth()->user()->add_str : decrypt(auth()->user()->add_str) }}"
                                
                                    placeholder="Straße" required>
                                </div>
                                <div class="col-12 col-sm-2">
                                    <input type="text" class="form-control" name="add_hno" 
                                    value="{{empty(auth()->user()->add_hno)? auth()->user()->add_hno : decrypt(auth()->user()->add_hno) }}"
                                    
                                    placeholder="Hausnummer" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="add_extra" 
                                    value="{{empty(auth()->user()->add_extra)? auth()->user()->add_extra : decrypt(auth()->user()->add_extra) }}"
                                    placeholder="">
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-2">
                                    <input type="text" class="form-control" name="add_pin" 
                                    value="{{empty(auth()->user()->add_pin)? auth()->user()->add_pin : decrypt(auth()->user()->add_pin) }}"                         
                                    placeholder="PLZ" required>
                                </div>
                                <div class="col-12 col-sm-4">
                                   <input type="text" class="form-control" name="add_city"                                    
                                    value="{{empty(auth()->user()->add_city)? auth()->user()->add_city : decrypt(auth()->user()->add_city) }}"                                
                                   placeholder="Ort" required>
                                </div>
                                
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control" name="tel_number" 
                                    value="{{empty(auth()->user()->tel_number)? auth()->user()->tel_number : decrypt(auth()->user()->tel_number) }}"
                                    placeholder="Telefonnummer" required>
                                </div>
                            </div>
                            
                            
                            
                            <div class="row top-padding">
                                <div class="col-12 col-sm-6">
                                    <input type="checkbox" name="privacy_policy" id="privacy_policy" required><label for="privacy_policy">
                                        ich stimme der <a href="#">datenschutzerklärung</a> zu</label>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-button text-right">
                                        <button id="submit" type="submit" class="ibtn less-padding">Weiter</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        
    </div>




        

			
		
        
        
        
        
    </div>
    


</div>
@endsection
