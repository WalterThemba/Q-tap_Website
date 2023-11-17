<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Coordinator Availability</title>
	<link rel="stylesheet" href="css\style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: url("css\img.png") no-repeat center center fixed;
            background-size: cover;
			background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .container {
            background: #f0f0f0;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
			margin-top: 100px
        }

        h3 {
            color: #851616;
            text-align: center;
            font-size: 30px;
            font-style: italic;
            font-weight: bold;
            background: #E663E4F4;
            padding: 50px;
            border-radius: 10px;
        }

        table a:link {
	color: #666;
	font-weight: bold;
	text-decoration: none;
}

table a:visited {
	color: #999999;
	font-weight: bold;
	text-decoration: none;
}

table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration: underline;
}

table {
	width: 1200px;
	margin:10px auto;
	box-shadow: none;
	border:1px solid #E6E6E6;
	padding:0;
	background-color:#FFFFFF;
	box-sizing: border-box;
	display: table;
}

table th {
	text-align:center;
	background: #34495e;
	color:#FFF;
	text-shadow:0px 01px 0px #000;
	font-size:15px;
	height: 42px;
	border-radius: 0 !important;
	border-left: 1px solid whitesmoke;
	box-sizing:border-box;
}

table th:first-child {
	border-left: 0;
}


table tr {
	text-align: center;
}

table td:first-child {
	box-sizing: border-box;
	border-left: 0;
}

table td {
	padding: 9px;
	border-top: 1px solid #ffffff;
	border-bottom: 1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
	background: white;
}

table tr:nth-child(odd) td {
	background: #fcfaf5;
}

table tr:last-child td {
	border-bottom: 0;
}

table tr:hover td {
	background: #fffcf5;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
    </style>
</head>
<body>
<div class="container">
    <h1>PROGRAM COORDINATORS AVAILABILITY</h1>
    <table>
        <caption>Availability Schedule</caption>
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>COURSE</th>
            <th>DAY</th>
            <th>TIME</th>
            <th>VENUE</th>
        </tr>
        </thead>
        <tr>
            <td>MR RHULANI</td>
            <td class="email">rkobe@iie.edu.za</td>
            <td>ICT</td>
            <td>Tuesday, Friday</td>
            <td>12:00 - 14:30</td>
            <td>L2-16</td>
        </tr>
        <tr>
            <td>MRS LEBELO</td>
            <td class="email">lebelo@iie.edu.za</td>
            <td>EDUCATION</td>
            <td>Monday, Wednesday, Thursday</td>
            <td>10:00 - 13:00</td>
            <td>L4-10</td>
        </tr>
    </table>
</div>
</body>
</html>
