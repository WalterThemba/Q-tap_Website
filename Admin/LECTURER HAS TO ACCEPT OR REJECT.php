<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer's Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        #calendar {
            max-width: 400px;
            margin-bottom: 20px;
        }

        .session {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
            width: 300px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .accept-button, .reject-button {
            cursor: pointer;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .accept-button {
            background-color: #28a745;
            color: white;
        }

        .reject-button {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>

<body>
    <div id="calendar"></div>
    <div class="session">
        <div>
            <div><strong>Student:</strong> John Doe</div>
            <div><strong>Module:</strong> Math</div>
            <div><strong>Date:</strong> 2023-12-01</div>
            <div><strong>Time:</strong> 10:00 AM</div>
        </div>
        <div>
            <button class="accept-button">Accept</button>
            <button class="reject-button">Reject</button>
        </div>
    </div>

    <script>
        // Sample data (replace with actual data from the server)
        const bookedSessions = [{
            title: 'One-on-One Session',
            start: '2023-12-01T10:00:00',
            end: '2023-12-01T11:00:00'
        }];

        // Initialize FullCalendar
        $('#calendar').fullCalendar({
            defaultView: 'month',
            events: bookedSessions
        });

        // Event listeners for accept and reject buttons
        $('.accept-button').on('click', function() {
            // Handle accept logic here
            alert('Session accepted.');
        });

        $('.reject-button').on('click', function() {
            // Handle reject logic here
            alert('Session rejected.');
        });
    </script>
</body>

</html>
