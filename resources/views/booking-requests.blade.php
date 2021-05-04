    @foreach($pending_requests as $pending_request)
        <div class="requestBookingBox">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5 requestStatusContainer">
                    <span class="requestStatus">{{$pending_request->status_name}} </span><br>
                    <span class="requestTime">{{date('h:i a, d/m/Y',strtotime($pending_request->date))}}</span>
                </div>
                <div class="col-md-6 float-right requestStatusContainerViewer">
                    <img src="{{ asset('images/Group1205.png') }}">
                </div>
            </div>
        </div>
        <br>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="col-md-6 requestStatusContainer">
                    <img src="{{ asset('images/'.$pending_request->profile_image) }}" align="left">
                    <span class="requestBy">{{$pending_request->customer_name}}</span><br>
                    <span class="requestCity">{{$pending_request->city}}</span>
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
                <span class="requestTime">This Customer is available at:</span>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-1 requestStatusContainerClock">
                    <img src="{{ asset('images/component_clipart_time.png')  }}">
                </div>
                <div class="col-md-7 requestStatusContainer">
                    <span class="requestTime">{{date('l, F, d, Y',strtotime($pending_request->available_date))}}</span>
                </div>
                <div class="col-md-4 float-right requestStatusContainerViewer">
                    <span class="requestTime">{{$pending_request->available_time}}</span>
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
                    <span class="requestAddress">{{$pending_request->address}}</span>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-5">
                    <a href="javascript:void(0);" onclick="acceptRequest('{{$pending_request->ID}}')"><img src="{{ asset('images/accept-request.png')  }}"></a>
                </div>
                <div class="col-md-5 reschedule">
                    <a href="javascript:void(0);"><img src="{{ asset('images/reschedule.png')  }}"></a>
                </div>
                <div class="col-md-2 float-right requestStatusMore">
                    <img src="{{ asset('images/Tab_more_normal.png')  }}"><br>
                    <span class="requestMore">More</span>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
        <br>
    @endforeach
