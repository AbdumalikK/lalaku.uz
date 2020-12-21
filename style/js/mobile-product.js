$(document).ready(function() {
    // Check width on page load
    if ( $(window).width() < 991) {
        $('.container-fluid').hide();
        $('#section-mobile').show();
    } else {
        $('.container-fluid').show();
        $('#section-mobile').hide();
    }

    $(window).resize(function() {
        // if the browser resized, check with again
        if ( $(window).width() < 991) {
            $('.container-fluid').hide();
            $('#section-mobile').show();
        } else {
            $('.container-fluid').show();
            $('#section-mobile').hide();
        }
    });
});

// setInterval(ajaxCall, 3000);

// function ajaxCall() {
//    $.ajax({url:url,
//            type:'html',
//            success:function(result){
//              if(result==0)
//                $('#content').hide();
//               else
//                 $('#content').html(result).show();  

//             }
//         });
//  }