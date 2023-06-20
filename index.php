<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>SQL Queries</title>
</head>
<body>

  <div id="container">
    <div id="inputSubmit">
      <h1>Database Input</h1>
      <form action="form-handler.php" method="POST">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="First Name" Required>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Last Name" Required>
        <label for="state">State:</label>
        <select id="state" name="state" required>
          <option value="" selected disabled>Select a State</option>
          <option value="Alabama">Alabama</option>
          <option value="Alaska">Alaska</option>
          <option value="Arizona">Arizona</option>
          <option value="Arkansas">Arkansas</option>
          <option value="California">California</option>
          <option value="Colorado">Colorado</option>
          <option value="Connecticut">Connecticut</option>
          <option value="Delaware">Delaware</option>
          <option value="Florida">Florida</option>
          <option value="Georgia">Georgia</option>
          <option value="Hawaii">Hawaii</option>
          <option value="Idaho">Idaho</option>
          <option value="Illinois">Illinois</option>
          <option value="Indiana">Indiana</option>
          <option value="Iowa">Iowa</option>
          <option value="Kansas">Kansas</option>
          <option value="Kentucky">Kentucky</option>
          <option value="Louisiana">Louisiana</option>
          <option value="Maine">Maine</option>
          <option value="Maryland">Maryland</option>
          <option value="Massachusetts">Massachusetts</option>
          <option value="Michigan">Michigan</option>
          <option value="Minnesota">Minnesota</option>
          <option value="Mississippi">Mississippi</option>
          <option value="Missouri">Missouri</option>
          <option value="Montana">Montana</option>
          <option value="Nebraska">Nebraska</option>
          <option value="Nevada">Nevada</option>
          <option value="New Hampshire">New Hampshire</option>
          <option value="New Jersey">New Jersey</option>
          <option value="New Mexico">New Mexico</option>
          <option value="New York">New York</option>
          <option value="North Carolina">North Carolina</option>
          <option value="North Dakota">North Dakota</option>
          <option value="Ohio">Ohio</option>
          <option value="Oklahoma">Oklahoma</option>
          <option value="Oregon">Oregon</option>
          <option value="Pennsylvania">Pennsylvania</option>
          <option value="Rhode Island">Rhode Island</option>
          <option value="South Carolina">South Carolina</option>
          <option value="South Dakota">South Dakota</option>
          <option value="Tennessee">Tennessee</option>
          <option value="Texas">Texas</option>
          <option value="Utah">Utah</option>
          <option value="Vermont">Vermont</option>
          <option value="Virginia">Virginia</option>
          <option value="Washington">Washington</option>
          <option value="West Virginia">West Virginia</option>
          <option value="Wisconsin">Wisconsin</option>
          <option value="Wyoming">Wyoming</option>
        </select>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required>
          <option value="" selected disabled>Select a Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
        <input type="submit" value="Submit" name="submitInput">
      </form>
    </div>
    <div id="querySubmit">
        <h1>Database Query</h1>
          <form action='query-handler.php' method='POST'>
            <label for="query">Enter your database query:</label><br>
            <textarea id="query" name="query" rows="5" cols="100" Required></textarea><br>
            <input type="submit" value="Submit" name="submitQuery">   
          </form>
    </div>
  </div>
    <script src="js.js"></script>
</body>
</html>