<html>
    <head>
        <title>HelloWorld Challenge</title>
        <meta name = "viewport" content = "width=device-width, inital-scale=1.0">
		<link href = "css/bootstrap.min.css" rel = "stylesheet">
		<link href = "css/styles.css" rel = "stylesheet">
        <link href = "css/bootstrapValidator.min.css" rel="stylesheet">
    </head>
    <body>
        <div class = "navbar navbar-inverse navbar-static-top">
			<div class = "container">
				<a href = "#" class = "navbar-brand">Report Sheet</a>
			</div>
		</div>
                <!--Welcome Message-->
        <div class="container">
            <div class="row">
                <img class="featureImg" src="img/eagle.png">
                <h1 class="reportMessage">Registered User Report</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-4">
                    <?php
                        include 'connect.php';
                        $statement = mysqli_query($connect, "SELECT * FROM HelloWorldChallenge ORDER BY date DESC");
                        //Setting table headers and bootstrap compatability
                        echo "<table class='table table-striped'>
                            <thead>
                            <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address1</th>
                            <th>Address2</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Country</th>
                            <th>Date</th>
                            </tr>
                            </thead>
                            <tbody>";
                        //populate the rows of the table
                        while($row = mysqli_fetch_array($statement))
                        {
                            echo "<tr>";
                            echo "<td>" . htmlspecialChars($row['firstName']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['lastName']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['address1']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['address2']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['city']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['state']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['zip']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['country']) . "</td>";
                            echo "<td>" . htmlspecialChars($row['date']) . "</td>";
                            echo "</tr>";
                        }
                        //close the table
                        echo "</tbody>
                              </table>";
                        //close database connection
                        mysqli_close($connect);
                    ?>
                </div>
            </div>
        </div>
        <!--Scripts-->
        <script src = "http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    	<script src = "js/bootstrap.js"></script>
        <script src = "js/bootstrapValidator.js" type="text/javascript"> </script>
    </body>    
</html>