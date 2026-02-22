<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Appointment Slip</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        .container { padding: 20px; }
        .title { font-size: 22px; font-weight: bold; margin-bottom: 10px; }
        .section { margin-top: 20px; }
        .label { font-weight: bold; }
        .box { border: 1px solid #ddd; padding: 15px; border-radius: 6px; }
    </style>
</head>
<body>

<div class="container">
    <div class="title">Appointment Confirmation</div>

    <div class="box">
        <p><span class="label">Patient ID:</span> {{ $appointment->id }}</p>
        <p><span class="label">Patient Name:</span> {{ $appointment->name }}</p>
        <p><span class="label">Email:</span> {{ $appointment->email }}</p>
        <p><span class="label">Mobile:</span> {{ $appointment->contact_mobile }}</p>
        <p><span class="label">Gender:</span> {{ $appointment->gender }}</p>
        <p><span class="label">Date of Birth:</span> {{ $appointment->dob }}</p>
    </div>

    <div class="section box">
        <p><span class="label">Appointment Date:</span> {{ $appointment->appointment_date }}</p>
        <p><span class="label">Appointment Time:</span> {{ $appointment->appointment_time }}</p>
        <p><span class="label">Type:</span> {{ $appointment->appointment_type }}</p>
        <p><span class="label">Reason:</span> {{ $appointment->visit_reason }}</p>
    </div>

    <div class="section">
        <p>Please arrive 10 minutes before your scheduled time.</p>
    </div>
</div>

</body>
</html>