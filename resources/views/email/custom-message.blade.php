<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ $subject }} | {{ config('app.name') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=display-width, initial-scale=1.0, maximum-scale=1.0," />
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700,600italic,700italic,800,800italic'
        rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i"
        rel="stylesheet" type='text/css' />

    <style type="text/css">
        html {
            width: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            -webkit-text-size-adjust: none;
            -ms-text-size-adjust: none;
        }

        img {
            display: block !important;
            border: 0;
            -ms-interpolation-mode: bicubic;
        }
    </style>

</head>

<body>
    <!--[if mso]>
   <style >
    .MsoNormal{font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    .Heading {font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    .display-button td, .display-button a, a {font-family: Arial, Helvetica Neue, Helvetica, sans-serif !important;}
    body table, body table td, table[width=800] { padding:0 !important; margin:0 !important; border:0 !important; border-collapse:collapse !important; mso-table-lspace:0pt !important; mso-table-rspace:0pt !important; outline:0 !important; }
   </style>
  <![endif]-->

    {!! $content !!}
</body>

</html>
