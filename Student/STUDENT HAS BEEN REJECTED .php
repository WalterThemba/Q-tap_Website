<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer's Response</title>
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

        .container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            text-align: center;
            margin-bottom: 20px;
        }

        .status-label {
            color: #dc3545;
            font-weight: bold;
            font-size: 24px;
            margin-bottom: 20px;
        }

        .availability {
            text-align: left;
            width: 100%;
        }

        .availability h2 {
            margin-bottom: 10px;
        }

        .availability-item {
            margin-bottom: 10px;
        }

        .done-button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
        }

        .done-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Lecturer's Response</h1>
        <div class="status-label">Sorry, your booking has been <span style="color: red;">rejected</span>.</div>
        <div class="availability">
            <h2>Available Dates and Times:</h2>
            <div class="availability-item">Monday, 9:00 AM - 12:00 PM</div>
            <div class="availability-item">Wednesday, 2:00 PM - 5:00 PM</div>
            <!-- Add more availability items as needed -->
        </div>
    </div>
    <button class="done-button" id="doneButton">Done</button>

    <script>
        const doneButton = document.getElementById("doneButton");

        doneButton.addEventListener("click", function() {
            // Implement your logic for completing the process
            // For example, redirect to another page or show a confirmation message
            alert("Booking process completed.");
            doneButton.disabled = true;
        });
    </script>
</body>

</html>
