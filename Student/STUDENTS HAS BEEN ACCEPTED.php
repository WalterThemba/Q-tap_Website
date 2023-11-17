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
        }

        .message {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .accepted-label {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            margin-bottom: 20px;
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
        <div class="accepted-label">Accepted</div>
        <div class="message" id="message"></div>
    </div>
    <button class="done-button" id="doneButton">Done</button>

    <script>
        const messageDiv = document.getElementById("message");
        const doneButton = document.getElementById("doneButton");

        // Sample data (replace this with actual data from the server)
        let isBookingAccepted = true; // Change this variable based on the booking status

        function updateMessage() {
            if (isBookingAccepted) {
                messageDiv.innerText = "Congratulations! Your booking has been accepted. Please attend the session as scheduled.";
            } else {
                messageDiv.innerText = "We regret to inform you that your booking has been rejected by the lecturer.";
            }
        }

        updateMessage();

        doneButton.addEventListener("click", function() {
            // Implement your logic for completing the process
            // For example, redirect to another page or show a confirmation message
            alert("Booking process completed.");
            doneButton.disabled = true;
        });
    </script>
</body>

</html>
