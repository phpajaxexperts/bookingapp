<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">


        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="{{ asset('css/style.css')  }}" rel="stylesheet">
        <link href="{{ asset('css/flexslider.css')  }}" rel="stylesheet">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="flex-center wrapper">
                <div class="header">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-md-2 topicons">
                                    <img src="{{ asset('images/menu.jpg')  }}">
                                </div>
                                <div class="col-md-2 topicons">
                                    <img src="{{ asset('images/header_search_normal.png')  }}">
                                </div>
                                <div class="col-md-4 text-center">
                                    <img src="{{ asset('images/trova_logo.png')  }}">
                                </div>
                                <div class="col-md-2  text-right topicons">
                                    <img src="{{ asset('images/header_chat_normal.png')  }}">
                                </div>
                                <div class="col-md-2 text-right topicons">
                                    <img src="{{ asset('images/menu_notification_normal.png')  }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section id="home-process">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 nopadding">
                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-heading">
                                        <ul class="nav nav-tabs list-inline">
                                            <li>
                                                <a class="center-block nav-ttl" href="#" data-toggle="tab">
                                                    <i class="seach"></i>
                                                    <span><img src="{{ asset('images/tab_back_white.png') }}"> </span>
                                                </a>
                                            </li>
                                            <li class="active">
                                                <a class="center-block nav-ttl" href="#tab1default" data-toggle="tab">
                                                    <i class="seach"></i>
                                                    <span>Requests</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-ttl" href="#tab2default" data-toggle="tab">
                                                    <i class="seach"></i>
                                                    <span>Services</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="nav-ttl" href="#tab3default" data-toggle="tab">
                                                    <i class="seach"></i>
                                                    <span>Payments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>


                                    <div class="slider">
                                        <br>
                                        <div class="flexslider">
                                            @php
                                                $services = getServices();
                                            @endphp
                                            <ul class="slides">
                                                @foreach($services as $service)
                                                <li>
                                                    <img src="{{ asset('images/'.$service->image) }}" align="left" />
                                                    <h1 class="sliderh1">{{$service->title}}</h1>
                                                    <h2 class="sliderh2">{{$service->caption}}</h2>
                                                    <span class="serviceTxt">{{$service->description}}...</span>
                                                    <div>
                                                        <span class="session">{{$service->session_type}}</span> <span class="money">${{ number_format($service->price,2) }}</span>
                                                    </div>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="custom-navigation">
                                            <div class="custom-controls-container"></div>
                                        </div>
                                    </div>

                                    <div class="serviceRequest">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="tab1default" >
                                                @php
                                                    $pending_requests = getBookingRequests();
                                                @endphp
                                                <div ID="pending_request">
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
                                                </div>

                                                <div class="row text-center noMoreRequest">
                                                    No more service requests
                                                </div>
                                                <br><br>

                                            </div>

                                            <div class="tab-pane fade" id="tab2default">
                                                <div class="panel-content">
                                                    <div class="upcomingServiceMsg">
                                                        These are your upcoming services. You could scan
                                                        your customer’s QR Code before service to check-in,
                                                        or scan QR Code to generate invoice for payments.
                                                    </div>
                                                    @php
                                                        $upcoming_services = getUpcomingService();
                                                    @endphp
                                                    <div id="upcoming_services">
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
                                                    @endforeach
                                                        </div>
                                                    <br>
                                                    <div class="row text-center noMoreRequest">
                                                        No more service requests
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="tab3default">
                                                <div class="panel-content" id="pending_payment">
                                                    @php
                                                        $pending_payments = getPendingPayment();
                                                    @endphp
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
                                                        <br>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    @endforeach
                                                    <div class="row text-center noMoreRequest">
                                                        No more service requests
                                                    </div>
                                                    <br><br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


        </div>
        </div>

        </div>
    </body>
    <script type="text/javascript">
        var baseurl = "{{ url('/') }}";
    </script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/modernizr.js')   }}"></script>

    <script src="{{ asset('js/jquery.flexslider.js')   }}"></script>
    <script src="{{ asset('js/jquery.easing.js')   }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script src="{{ asset('js/custom.js')   }}"></script>
    <script type="text/javascript">
        $(window).load(function(){
            $('.flexslider').flexslider({
                animation: "slide",
                controlsContainer: $(".custom-controls-container"),
                customDirectionNav: $(".custom-navigation a"),
                start: function(slider){
                    $('body').removeClass('loading');
                }
            });
        });
    </script>

</html>
