<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=display-width, initial-scale=1.0, maximum-scale=1.0," />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TecClub - IT Service & Technology HTML5 Template">
    <meta name="keywords" content="Creative, Digital, multipage, landing, freelancer">
    <meta name="author" content="Sameed">
    <title>{{ $subject }} | {{ config('app.name') }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
</head>

<body style="Margin: 0; padding: 0; background-color: #f9f9f9; font-family: 'Space Grotesk', sans-serif;">

    <!-- Outer Container -->
    <table cellpadding="0" cellspacing="0" width="100%" bgcolor="#f9f9f9">
        <tr>
            <td align="center" valign="top">

                <!-- Email Body -->
                <table cellpadding="0" cellspacing="0" width="600" bgcolor="#ffffff"
                    style="border: 1px solid #e0e0e0; border-radius: 5px; margin: 20px auto;">

                    <!-- Header -->
                    <tr>
                        <td style="padding: 20px; text-align: left;">
                            <table width="100%" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="left">
                                        <img src="{{ isset($options['web_logo']) ? $options['web_logo']->getFirstMediaUrl('info_img') : '' }}"
                                            alt="TecClub Logo" width="40"
                                            style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                        <span style="font-size: 18px; font-weight: bold; color: #333333;">
                                            {{ isset($options['name']) ? $options['name']->value : config('app.name') }}
                                        </span>
                                    </td>
                                    <td align="right" style="font-size: 14px;">
                                        <a href="{{ route('home') }}"
                                            style="color: #007bff; text-decoration: none; margin-right: 10px;">Home</a>
                                        <a href="{{ route('contact') }}"
                                            style="color: #007bff; text-decoration: none;">Contact</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 30px; font-size: 14px; line-height: 1.5; color: #333333;">
                            {!! $content !!}
                        </td>
                    </tr>

                    <!-- Call-to-Action Button -->
                    <tr>
                        <td align="center" style="padding: 20px;">
                            <a href="{{ route('contact') }}"
                                style="background-color: #007bff; color: #ffffff; text-decoration: none; padding: 10px 20px; font-weight: bold; border-radius: 5px; display: inline-block;">
                                Let’s Start!
                            </a>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td
                            style="padding: 10px; text-align: center; font-size: 12px; color: #6c757d; border-top: 3px solid #007bff;">
                            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

</body>

</html>
