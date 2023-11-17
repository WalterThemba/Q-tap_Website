<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodge Complaint</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E6E6E6;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            width: 600px;
            background-color: #ffffff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #7C2CFB;
            font-size: 40px;
            font-weight: bold;
        }

        label {
            color: #FFA500;
            font-size: 30px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            background-color: #EDEDED;
            border: none;
        }

        button {
            width: 100%;
            height: 40px;
            margin-top: 10px;
            background-color: #7C2CFB;
            color: #ffffff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            font-size: 15px;
            font-weight: bold;
        }

        button.status-button {
            background-color: #E49C45;
        }
    </style>
</head>
<body>
 <div class="container">
        <div class="form-container">
            <h1>LODGE COMPLAINT</h1>
            <label for="StudentNo">Student No</label>
            <input type="text" id="StudentNo">

            <label for="Subject">Subject matter</label>
            <input type="text" id="Subject">

            <label for="Complaint">Complaint/Explanation</label>
            <textarea id="Complaint" rows="4"></textarea>

            <button id="ComplainButton" onclick="LodgeComplain()">LODGE COMPLAIN</button>
            <button id="StatusButton" class="status-button" onclick="status()">COMPLAINT STATUS</button>
        </div>
    </div>

<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.10.1/firebase-database.js"></script>

<script src="Index\Index.js"></script>
<script> 
function status(){
	window.location.href = "Status.php";
}

</script>
</body>
</html>
