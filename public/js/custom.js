/**
 * Created by Veera on 02-05-2021.
 */

function acceptRequest(ID){
    jQuery.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseurl + '/accept-request',
        data: 'ID=' + ID,
        success: function (msg) {
            if(msg.status=='success'){
                getPendingRequests();
                getUpcomingServices();
                swal({
                    title: "Success!",
                    text: msg.msg,
                    icon: "success",
                });
            }else{
                swal({
                    title: "failure!",
                    text: msg.msg,
                    icon: "failure",
                });
            }
        }
    });
}


function generateInvoice(ID){
    jQuery.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseurl + '/generate-invoice',
        data: 'ID=' + ID,
        success: function (msg) {
            if(msg.status=='success'){
                getUpcomingServices();
                getPendingPayments()
                swal({
                    title: "Success!",
                    text: msg.msg,
                    icon: "success",
                });
            }else{
                swal({
                    title: "failure!",
                    text: msg.msg,
                    icon: "failure",
                });
            }
        }
    });
}



function getPendingRequests(){
    jQuery.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseurl + '/get-pending-requests',
        data: '',
        success: function (msg) {
            $('#pending_request').html(msg)
        }
    });
}

function getUpcomingServices(){
    jQuery.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseurl + '/get-upcoming-services',
        data: '',
        success: function (msg) {
            $('#upcoming_services').html(msg)
        }
    });
}

function getPendingPayments(){
    jQuery.ajax({
        type: "POST",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: baseurl + '/get-pending-payments',
        data: '',
        success: function (msg) {
            $('#pending_payment').html(msg)
        }
    });
}
