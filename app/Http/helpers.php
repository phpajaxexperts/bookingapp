<?php


function getServices(){
    return \App\services::where('services.active','=',1)->get();
}

function getBookingRequests(){
    return \App\booking::select('booking.*','core_booking_status.name as status_name')
        ->join('core_booking_status','core_booking_status.ID','=','booking.status')
        ->where('booking.status','=',1)
        ->get();
}

function getUpcomingService(){
    return \App\booking::select('booking.*','core_booking_status.name as status_name')
        ->join('core_booking_status','core_booking_status.ID','=','booking.status')
        ->where('booking.status','=',2)
        ->get();
}

function getPendingPayment(){
    return \App\booking::select('booking.*','core_booking_status.name as status_name','services.price')
        ->join('core_booking_status','core_booking_status.ID','=','booking.status')
        ->join('services','services.ID','=','booking.service')
        ->where('booking.status','=',3)
        ->get();
}