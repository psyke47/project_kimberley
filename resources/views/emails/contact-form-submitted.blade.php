<!DOCTYPE html>
<html>
<head>
    <title>New Contact Form - Greycode</title>
</head>
<body>
    <h2>New Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Service:</strong> {{ $data['services'] ?? 'Not specified' }}</p>
    <p><strong>Message:</strong></p>
    <p>{!! nl2br(e($data['message'])) !!}</p>
    
    <hr>
    <p><small>Sent from Greycode website contact form - {{ date('Y-m-d H:i:s') }}</small></p>
</body>
</html>