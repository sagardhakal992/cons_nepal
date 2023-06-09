<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>Arctic Imigration</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.png" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
<link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/global.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/elpath.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
<link href="{{asset('assets/css/service.css')}}" rel="stylesheet">
<link href="{{asset('assets/css/blog.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
<style>
    tr,td,th{
        border: 1px solid gray;
        text-align: center
    }
    td{
        width: 400px;
        padding: 5px;
        text-align: center
    }
</style>
</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        {{-- <div class="loader-wrap" id="proper_wrpa">
            <div class="preloader">
                <div class="preloader-close">x</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="A" class="letters-loading">
                                A
                            </span>
                            <span data-text-preloader="R" class="letters-loading">
                                R
                            </span>
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                            <span data-text-preloader="T" class="letters-loading">
                                T
                            </span>
                            <span data-text-preloader="I" class="letters-loading">
                                I
                            </span>
                            <span data-text-preloader="C" class="letters-loading">
                                C
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- preloader end -->


        @include("element.header")

        @include("element.phone-number")

        @yield('content')

       @include("element.footer")


        <!--Scroll to top-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="fal fa-long-arrow-up"></span>
        </button>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
    <script>
      function openBookingModal() {
        Swal.fire({
          html: document.getElementById('bookingModal').innerHTML,
          showCancelButton: false,
          showConfirmButton: false,
          confirmButtonText: 'Submit',
          cancelButtonText: 'Close',
          didOpen: () => {
        // Retrieve previous form data (if available)
        var previousFormData = getPreviousFormData();

        // Populate form fields with previous values
        document.getElementById('name').value = previousFormData.name;
        document.getElementById('email').value = previousFormData.email;
        document.getElementById('subject').value = previousFormData.subject;
        document.getElementById('description').value = previousFormData.description;
        document.getElementById('meetingDate').value = previousFormData.meetingDate;
      },
          preConfirm: function () {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var subject = document.getElementById('subject').value;
            var description = document.getElementById('description').value;
            var meetingDate = document.getElementById('meetingDate').value;
            meetingDate=getFormattedDateTime(meetingDate);
            var data = {
                name: name,
                email: email,
                subject: subject,
                description: description,
                meetingDate: meetingDate
                };
                console.log(data)
                fetch('/api/booking/', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(result => {
                    Swal.fire('Success', 'Booking submitted successfully!', 'success');
                })
                .catch(error => {
                    Swal.fire('Error', 'Booking Failed.Try Again Later.', 'error');
                });
          }
        });
      }

      function getFormattedDateTime(dateTimeString) {
    var dateTime = new Date(dateTimeString);
    var year = dateTime.getFullYear();
    var month = ("0" + (dateTime.getMonth() + 1)).slice(-2);
    var day = ("0" + dateTime.getDate()).slice(-2);
    var hours = ("0" + dateTime.getHours()).slice(-2);
    var minutes = ("0" + dateTime.getMinutes()).slice(-2);
    var ampm = hours >= 12 ? 'PM' : 'AM';

    return year + "-" + month + "-" + day + " " + hours + ":" + minutes + " " + ampm;
  }
    </script>
    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

    @yield("js")
</body><!-- End of .page_wrapper -->
</html>
