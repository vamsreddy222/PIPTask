<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Patient Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
            text-decoration: underline;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        .patient-info {
            margin-bottom: 30px;
        }

        .label {
            font-weight: bold;
        }

        .contact-info {
            margin-top: 20px;
        }

        .prepared-by {
            margin-top: 50px;
            text-align: right;
            font-style: italic;
        }
    </style>
</head>
<body>
    <h1>Patient Details</h1>

    <div class="patient-info">
        <p class="label">Patient No:</p>
        <p><?php echo e($patient->patient_no); ?></p>

        <p class="label">Date:</p>
        <p><?php echo e($patient->date); ?></p>

        <p class="label">Patient Name:</p>
        <p><?php echo e($patient->patient_name); ?></p>

        <p class="label">Age:</p>
        <p><?php echo e($patient->age); ?></p>

        <p class="label">Gender:</p>
        <p><?php echo e($patient->gender); ?></p>

        <p class="label">Bed No:</p>
        <p><?php echo e($patient->bed_no); ?></p>

        <p class="label">Doctor Name:</p>
        <p><?php echo e($patient->doctor_name); ?></p>

        <p class="label">Specialist:</p>
        <p><?php echo e($patient->specialist); ?></p>

        <p class="label">Treatment Details:</p>
        <p><?php echo e($patient->treatment_details); ?></p>
    </div>

    <div class="contact-info">
        <p class="label">Contact No:</p>
        <p><?php echo e($patient->contact_no); ?></p>
    </div>

    <p class="prepared-by">Prepared by: <?php echo e($patient->prepared_by); ?></p>
</body>
</html>
<?php /**PATH /home/vamshidhar/projects/taskproject/resources/views/patient/pdf.blade.php ENDPATH**/ ?>