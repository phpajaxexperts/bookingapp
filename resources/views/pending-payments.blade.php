@foreach($pending_payments as $pending_payment)
<div class="requestBookingBox">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5 requestStatusContainer">
                <span class="requestStatus">{{$pending_payment->status_name}}</span><br>
                <span class="requestTime">{{date('h:i a, d/m/Y',strtotime($pending_payment->date))}}</span>
            </div>
            <div class="col-md-6 float-right requestStatusContainerViewer">
                <img src="{{ asset('images/Component9–1.png') }}">
            </div>
        </div>
    </div>
    <br>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="col-md-6 requestStatusContainer">
                <img src="{{ asset('images/'.$pending_payment->profile_image) }}" align="left">
                <span class="requestBy">{{$pending_payment->customer_name}}</span><br>
                <span class="requestCity">{{$pending_payment->city}}</span>
            </div>
            <div class="col-md-6 float-right requestStatusContainerViewer">
                <img src="{{ asset('images/component_clipart_deals.png')  }}" align="left">
                <span class="dealsHad">You two had 12 deals before</span>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <span class="requestTime">Service is complete, please confirm payment amount:</span>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-1 requestStatusContainerClock">
                <img src="{{ asset('images/component_clipart_time.png')  }}">
            </div>
            <div class="col-md-7 requestStatusContainer">
                <span class="requestTime">Invoice item</span><br>
                <span class="requestTime">Session Price</span>
            </div>
            <div class="col-md-4 float-right requestStatusContainerViewer">
                <span class="money">${{ number_format($pending_payment->price,2) }}</span>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-1 requestStatusContainerClock">
                <img src="{{ asset('images/component_clipart_location.png')  }}">
            </div>
            <div class="col-md-11 requestStatusContainer">
                <span class="requestAddress">{{$pending_payment->address}}</span>
            </div>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-5">
                <img src="{{ asset('images/resendinvoice.png')  }}">
            </div>
            <div class="col-md-5 reschedule">
                <img src="{{ asset('images/startaChat.png')  }}">
            </div>
            <div class="col-md-2 float-right requestStatusMore">
                <img src="{{ asset('images/Tab_more_normal.png')  }}"><br>
                <span class="requestMore">More</span>
            </div>
        </div>
    </div>
    <br><br>
    <div class="clearfix"></div>
</div>
    <br>
@endforeach
