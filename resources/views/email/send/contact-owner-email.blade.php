<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .header {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 20px 0;
            border-radius: 8px 8px 0 0;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            padding: 20px;
        }
        .content p {
            margin: 10px 0;
        }
        .footer {
            text-align: center;
            padding: 20px;
            background-color: #f1f1f1;
            border-radius: 0 0 8px 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Form Submission</h1>
        </div>
        <div class="content">
            <p><strong>Name:</strong> {{ $formData['name'] }}</p>
            <p><strong>Email:</strong> {{ $formData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $formData['phone'] }}</p>
            <p><strong>Company:</strong> {{ $formData['company'] }}</p>
            <p><strong>Website:</strong> {{ $formData['website'] }}</p>
            <p><strong>Services:</strong> {{ $formData['service'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $formData['message'] }}</p>
        </div>
        <div class="footer">
            <p>This is an automatic notification of a new contact form submission.</p>
            <p><strong>Submitted on:</strong> {{ now()->toDayDateTimeString() }}</p>
        </div>
    </div>
</body>
</html>
