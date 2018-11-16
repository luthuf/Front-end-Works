<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "employee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name, designation, manager FROM employeedetails";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);
?>
<html>
<head>
	
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "Times New Roman", cursive;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Times New Roman", cursive;
			font-size: 12px;
		}

		h1 {
            color: black;
            font-family: "Sofia", cursive;
            font-size: 10px;
            font-weight: bold;
            font-size: 30px;
            text-align: center;
            margin-bottom: 10px;
        }


		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>DETAILS</h1>
	<table class="data-table">
		
		<thead>
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>DESIGNATION</th>
				<th>MANAGER</th>
                <th></th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                    <td>'.$row['id'].'</td>
					<td>'.$row['name'].'</td>
					<td>'.$row['designation'].'</td>
					<td>'.$row['manager'].'</td>
				</tr>';
    }
} else {
    echo "0 results";
}
?>
		</tbody>
		
	</table>
</body>
</html>