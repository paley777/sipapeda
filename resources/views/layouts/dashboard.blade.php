<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPAPEDA')</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.5.1/uicons-solid-rounded/css/uicons-solid-rounded.css'>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.4/js/dataTables.jqueryui.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.jqueryui.min.css">
</head>
<style>
    html {
        font-size: 14px;
        /* Default 'em' will now be based on 14px */
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 1em;
    }

    h1 {
        font-size: 2em;
        /* 28px berdasarkan font-size 14px */

    }

    h2 {
        font-size: 1.5em;
        /* 21px berdasarkan font-size 14px */

    }

    h3 {
        font-size: 1.17em;
        /* 16.38px berdasarkan font-size 14px */

    }

    h4 {
        font-size: 1em;
        /* 14px berdasarkan font-size 14px */

    }

    h5 {
        font-size: 0.83em;
        /* 11.62px berdasarkan font-size 14px */

    }

    h6 {
        font-size: 0.67em;
        /* 9.38px berdasarkan font-size 14px */

    }

    #scrollTopBtn {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Fixed/sticky position */
        bottom: 30px;
        /* Place the button at the bottom of the page */
        right: 30px;
        /* Place the button 30px from the right */
        z-index: 99;
        /* Make sure it does not overlap */
        border: none;
        /* Remove borders */
        outline: none;
        /* Remove outline */
        background-color: #3b82f6;
        /* Set a background color */
        color: white;
        /* Text color */
        cursor: pointer;
        /* Add a mouse pointer on hover */
        padding: 12px 15px 10px 15px;
        /* Some padding */
        border-radius: 10px;
        /* Rounded corners */
        font-size: 18px;
        /* Increase font size */
    }

    #scrollTopBtn:hover {
        background-color: #555;
        /* Add a dark-grey background on hover */
    }
</style>

<body>
    <div class="flex min-h-screen">
        @include('partials.sidebar')
        @yield('content')
    </div>
    <!-- Scroll to Top Button -->
    <button onclick="topFunction()" id="scrollTopBtn" title="Go to top"><i class="fi fi-rr-angle-small-up"></i></button>
</body>

</html>
<script>
    //Get the button
    var mybutton = document.getElementById("scrollTopBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document smoothly
    function topFunction() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth' // Smooth scrolling
        });
    }
</script>
