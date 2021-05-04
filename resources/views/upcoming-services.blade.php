    @foreach($upcoming_services as $upcoming_service)

    <div class="requestBookingBox">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 requestStatusContainer">
                    <span class="requestStatus">{{$upcoming_service->status_name}}</span><br>
                    <span class="requestTime">{{date('h:i a, d/m/Y',strtotime($upcoming_service->date))}}</span>
                </div>
                <div class="col-md-6 float-right requestStatusContainerViewer">
                    <img src="{{ asset('images/Component5–1.png') }}">
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="col-md-6 requestStatusContainer">
                    <img src="{{ asset('images/'.$upcoming_service->profile_image) }}" align="left">
                    <span class="requestBy">{{$upcoming_service->customer_name}}</span><br>
                    <span class="requestCity">{{$upcoming_service->city}}</span>
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
                <span class="requestTime">Check in here or scan customer’s QR Code to check in when the service is about to start</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1 requestStatusContainerClock">
                    <img src="{{ asset('images/component_clipart_time.png')  }}">
                </div>
                <div class="col-md-10 requestStatusContainer">
                    <span class="requestTime">{{date('l, F, d, Y',strtotime($upcoming_service->available_date))}}</span>
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
                    <span class="requestAddress">{{$upcoming_service->address}}</span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <a href="javascript:void(0);">
                    <img src="{{ asset('images/checkin.png')  }}">
                    </a>
                </div>
                <div class="col-md-5 reschedule">
                    <a href="javascript:void(0);" onclick="generateInvoice('{{$upcoming_service->ID}}');">
                    <img src="{{ asset('images/generateInvoice.png')  }}">
                    </a>
                </div>
                <div class="col-md-2 float-right requestStatusMore">
                    <img src="{{ asset('images/Tab_more_normal.png')  }}"><br>
                    <span class="requestMore">More</span>
                </div>
            </div>
        </div>
        <br>
        <div class="clearfix"></div>
    </div>
    <br>
    @endforeach
