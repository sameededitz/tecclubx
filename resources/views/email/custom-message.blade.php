<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TecClub - IT Service & Technology HTML5 Template">
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer">
    <meta name="author" content="Sameed">
    <title>{{ $subject }} | {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;700&display=swap");

        body {
            font-family: "Space Grotesk", sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .email-container {
            background-color: #fff;
            max-width: 600px;
            margin: 20px auto;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            padding: 30px;
            position: relative;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .nav-link:hover {
            text-decoration: none;
            color: #007bff !important;
        }

        .footer {
            text-align: center;
            color: #6c757d;
            font-size: 12px;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
        }

        /* Triangle Shape at Bottom Right */
        .triangle {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 0;
            height: 0;
            transform: rotate(90deg);
            border-left: 150px solid transparent;
            /* Adjust size as needed */
            border-top: 150px solid #007bff;
            /* Blue triangle color */
        }

        .content {
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Header -->
        <div class="header">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="{{ isset($options['web_logo']) ? $options['web_logo']->getFirstMediaUrl('info_img') : null }}"
                            alt="TecClub Logo">
                        <span
                            style="font-size: 23px; font-weight:500; color: black;">{{ isset($options['name']) ? $options['name']->value : config('app.name') }}</span>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('contact') }}">Contact</a>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Main Content -->
        <div class="content">
            {!! $content !!}
        </div>
        <!-- Call to Action -->
        <div class="text-center mt-4">
            <a href="{{ route('contact') }}" class="btn btn-primary">Let’s Start!</a>
        </div>
        <!-- Footer -->
        <div class="footer mt-4">
            <hr>
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
        </div>
        <!-- Triangle -->
        <div class="triangle"></div>
    </div>
</body>

</html>
