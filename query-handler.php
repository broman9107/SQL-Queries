<?php
        if (isset($_POST['submitQuery'])) {
            // Retrieve the query from the form submission
            $query = $_POST["query"];

            // Connect to the database
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test";
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Execute the query
            $result = $conn->query($query);

            if ($result === false) {
                echo "Error executing the query: " . $conn->error;
            } else {
                // Display the query results in a table
                echo ('<a href="index.php"><button>Home</button></a><br><br>');
                echo("Rows Returned " . "($result->num_rows)" . "<br><br>");
                while ($row = $result->fetch_assoc()) {
                    foreach ($row as $value) {
                        echo($value . "\n");
                    }
                    echo("<br>");
                    }  
                }
           // Free up the result set
                $result->free_result();

            // Close the database connection
            $conn->close();
        }