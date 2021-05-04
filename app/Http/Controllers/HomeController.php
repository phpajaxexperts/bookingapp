<?php

namespace App\Http\Controllers;

use App\booking;
use App\Http\Middleware\PreventRequestsDuringMaintenance;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Psy\Exception\RuntimeException;

class HomeController extends Controller
{


    public function acceptRequest(Request $request)
    {
        try {
            $ID = $request->ID;
            booking::where('booking.ID','=',$ID)
                ->update([
                    'status' => 2
                ]);

            $response = array(
                'status' => 'success',
                'msg' => 'Request accepted successfully.'
            );
        }catch(Exception $e) {
            $response = array(
                "status" => "failure",
                'mssg' => $e->getMessage()
            );
        }
        return response()->json($response,200);
    }

    public function generateInvoice(Request $request)
    {
        try {
            $ID = $request->ID;
            booking::where('booking.ID','=',$ID)
                ->update([
                    'status' => 3
                ]);

            $response = array(
                'status' => 'success',
                'msg' => 'Invoice generated successfully.'
            );
        }catch(Exception $e) {
            $response = array(
                "status" => "failure",
                'mssg' => $e->getMessage()
            );
        }
        return response()->json($response,200);
    }

    public function getPendingRequests()
    {
        $pending_requests = getBookingRequests();
        return view('booking-requests',compact(
            'pending_requests'
        ));
    }

    public function getUpcomingServices()
    {
        $upcoming_services = getUpcomingService();
        return view('upcoming-services',compact(
            'upcoming_services'
        ));
    }

    public function getPendingPayments()
    {
        $pending_payments = getPendingPayment();
        return view('pending-payments',compact(
            'pending_payments'
        ));
    }

    public function resetStatus(Request $request)
    {
        booking::where('booking.status','!=',1)->update([
                'status' => 1
            ]);
    }

    
}