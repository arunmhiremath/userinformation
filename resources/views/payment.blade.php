@extends('layouts.app')

@section('content')


    <div class="form-body">
        
        <div class="row">
            
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3 class="form-title">Zahlungsmethode</h3>


                        <form action="{{ url('charge') }}" method="post">
                            {{-- <input type="text" name="amount" /> --}}
                            {{ csrf_field() }}
                            <input type="submit" name="submit" value="Pay Now">
                        </form>

                        <div id="paypal-button-container"></div>
                        
                        {{-- <ul class="nav nav-tabs" id="stepsTabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="step1-tab" data-toggle="tab" href="#step1" role="tab" aria-controls="step1" aria-selected="true">Step1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="step2-tab" data-toggle="tab" href="#step2" role="tab" aria-controls="step2" aria-selected="false">Step2</a>
                            </li>
                        </ul>
                        <form>
                            <div class="tab-content" id="stepsTabContent">
                                <div class="tab-pane fade show active" id="step1" role="tabpanel" aria-labelledby="step1-tab">
                                    <div class="form-subtitle">1. Choose your billing cycle</div>
                                    <div class="inline-el-holder">
                                        <div class="inline-el">
                                            <div class="rad-with-details">
                                                <input type="radio" id="rad1" name="rad" required checked><label for="rad1">Bill Yearly</label>
                                                <div class="more-info">$99/year</div>
                                            </div>
                                        </div>
                                        <div class="inline-el">
                                            <div class="rad-with-details">
                                                <input type="radio" id="rad2" name="rad" required><label for="rad2">Bill Monthly</label>
                                                <div class="more-info">$109/year</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator"></div>
                                    <div class="form-subtitle">2. Enter payment details</div>
                                    <label>Card number</label>
                                    <div class="input-with-ccicon">
                                        <input type="text" class="form-control input-credit-card" placeholder="1234 1234 1234 1234">
                                        <i id="ccicon"></i>
                                    </div>
                                    <div class="inline-el-holder">
                                        <div class="inline-el">
                                            <label>Expiry date</label>
                                            <input type="text" class="form-control sm-content" placeholder="MM/YY">
                                        </div>
                                        <div class="inline-el">
                                            <label>CVV</label>
                                            <input type="text" class="form-control sm-content" placeholder="123">
                                        </div>
                                    </div>
                                    <div class="inline-el-holder">
                                        <div class="inline-el">
                                            <label>Country</label>
                                            <input type="text" class="form-control" placeholder="Bahrain">
                                        </div>
                                        <div class="inline-el">
                                            <label>Billing ZIP</label>
                                            <input type="text" class="form-control sm-content" placeholder="12345">
                                        </div>
                                    </div>
                                    <div class="form-button text-right">
                                        <button id="btn-next" class="ibtn btn-tab-next">Next</button>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step2" role="tabpanel" aria-labelledby="step2-tab">
                                    <div class="form-subtitle">3. Confirm your personal information</div>
                                    <input type="text" class="form-control" placeholder="Full name">
                                    <input type="text" class="form-control" placeholder="Email address">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <div class="form-button">
                                        <button id="submit" type="submit" class="ibtn">Process payment</button>
                                    </div>
                                </div>
                            </div>
                        </form> --}}



                        <script src="https://www.paypal.com/sdk/js?client-id=AXopn4-_pJ8WbreAuOqs3tWb5MP7FMvAGkhiZqqf77yTh2J5VaRLJ5gWTM_JLVaNW86Bx8o_CjlojteK"></script>
                        <div id="paypal-button-container"></div>

                        <script>
                            paypal.Buttons({
                              createOrder: function(data, actions) {
                                // This function sets up the details of the transaction, including the amount and line item details.
                                return actions.order.create({
                                  purchase_units: [{
                                    amount: {
                                      value: '0.01'
                                    }
                                  }]
                                });
                              },
                              onApprove: function(data) {
                                return fetch('/my-server/capture-paypal-transaction', {
                                    headers: {
                                    'content-type': 'application/json'
                                    },
                                    body: JSON.stringify({
                                    orderID: data.orderID
                                    })
                                }).then(function(res) {
                                    return res.json();
                                }).then(function(details) {
                                    alert('Transaction funds captured from ' + details.payer_given_name);
                                })
                                }
                            }).render('#paypal-button-container');
                            //This function displays Smart Payment Buttons on your web page.
                          </script>
























                    </div>
                </div>
            </div>
        </div>
    </div>




    
@endsection
