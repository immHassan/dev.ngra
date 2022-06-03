//Default Toastr Notification Settings
$(document).ready(function() {
      
    toastr.options = {
          'closeButton': true,
          'debug': false,
          'newestOnTop': true,
          'progressBar': false,
          'positionClass': 'toast-top-right',
          'preventDuplicates': false,
          'showDuration': '1000',
          'hideDuration': '1000',
          'timeOut': '5000',
          'extendedTimeOut': '1000',
          'showEasing': 'swing',
          'hideEasing': 'linear',
          'showMethod': 'fadeIn',
          'hideMethod': 'fadeOut',
      }

});






//Button Click Event
$('#btnSuccess').click(function(event) {

toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
toastr.success('You clicked Success toast.You clicked Success toast.You clicked Success toast','Success Message');
// alert("Success!");

});


$('#btnInfo').click(function(event) {
toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
toastr.info('You clicked Info toast','Info Message');
//alert("Info!");

});


$('#btnWarning').click(function(event) {

toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
toastr.warning('You clicked Warning toast','Warning Message');
// alert("Warning!");

});


$('#btnError').click(function(event) {


toastr.options.closeHtml = '<button class="closebtn"><i class="bi bi-x"></i></button>';
toastr.error('You clicked Error toast','Error Message');
//alert("Error!");

});