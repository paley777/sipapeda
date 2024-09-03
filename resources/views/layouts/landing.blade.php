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
        font-size: 14px; /* Default 'em' will now be based on 14px */
        height: 100%;
        margin: 0;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 1em;
        height: 100%;
        margin: 0;
        background-color: #f3f4f6; /* Set background color to light gray */
    }

    h1, h2, h3, h4, h5, h6 {
        font-weight: normal; /* Default font weight for headings */
    }

    h1 {
        font-size: 2em; /* 28px based on a font-size of 14px */
    }

    h2 {
        font-size: 1.5em; /* 21px based on a font-size of 14px */
    }

    h3 {
        font-size: 1.17em; /* 16.38px based on a font-size of 14px */
    }

    h4 {
        font-size: 1em; /* 14px based on a font-size of 14px */
    }

    h5 {
        font-size: 0.83em; /* 11.62px based on a font-size of 14px */
    }

    h6 {
        font-size: 0.67em; /* 9.38px based on a font-size of 14px */
    }

    .container {
        min-height: 100%; /* Make sure .container takes at least the full height of the viewport */
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* This ensures that the footer pushes to the bottom */
    }

    footer {
        position: sticky;
        top: 100vh; /* This ensures the footer sticks to the bottom of the viewport */
        width: 100%;
    }

    #scrollTopBtn {
        display: none; /* Hidden by default */
        position: fixed; /* Fixed/sticky position */
        bottom: 30px; /* Place the button at the bottom of the page */
        right: 30px; /* Place the button 30px from the right */
        z-index: 99; /* Make sure it does not overlap */
        border: none; /* Remove borders */
        outline: none; /* Remove outline */
        background-color: #3b82f6; /* Set a background color */
        color: white; /* Text color */
        cursor: pointer; /* Add a mouse pointer on hover */
        padding: 12px 15px 10px 15px; /* Some padding */
        border-radius: 10px; /* Rounded corners */
        font-size: 18px; /* Increase font size */
    }

    #scrollTopBtn:hover {
        background-color: #555; /* Add a dark-grey background on hover */
    }
</style>


<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    @include('partials.footer')
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
