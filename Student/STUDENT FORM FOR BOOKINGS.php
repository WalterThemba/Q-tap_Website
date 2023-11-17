<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One-on-One Session Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
        }

        .container {
            text-align: center;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
        }

        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
            display: block;
        }

        input {
            width: calc(100% - 20px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        #confirmation {
            font-weight: bold;
            color: #4caf50;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>One-on-One Session Booking</h1>
        <form id="bookingForm">
            <label for="studentNumber">Student Number:</label>
            <input type="text" id="studentNumber" required><br>

            <label for="date">Date:</label>
            <input type="date" id="date" required><br>

            <label for="time">Time:</label>
            <input type="time" id="time" required><br>

            <label for="module">Module:</label>
            <input type="text" id="module" required><br>

            <button type="submit">Book Session</button>
        </form>
		
            <button id="StatusButton" class="status-button" onclick="status()">COMPLAINT STATUS</button>
        <div id="confirmation"></div>
    </div>


<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>
<script src="Index\Index.js"></script>
<script> 
function status(){
	window.location.href = "Booking_Status.php";
}

</script>
</body>

</html>