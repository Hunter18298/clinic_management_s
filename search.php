        <?php
// Connect to database
include('connection.php');

// Get search query
$query = $_POST["query"];

// Prepare SQL statement
$sql = "SELECT * FROM patients WHERE patient_name LIKE '%$query%'";

// Execute SQL statement
$result = $con->query($sql);

// Generate HTML output
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<table class='tables'>

  <tr>
    <th>Images</th>
    <th>Name</th>
    <th>Birth-Date</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Status</th>
    <th>Actions</th>
  </tr>
 
  <tr >
    <td><div class='up-banner'>
          <img class='image' width='100%' src='" .$row['patient_image']. "' alt='profile image'  >
        </div></td>
    <td>".$row['patient_name']. "</td>
    <td>April 28, 1999</td>
    <td>07504453750</td>
    <td>aliomer@gmail.com</td>
    <td><button  class='table-status btn btn-primary '>Active</button></td>
     <td><a href='delete_patient.php?id=".$row['patient_id']."'><button class='actions btn btn-danger'><i class='fa-sharp fa-solid fa-trash '></i></button></a><a href='edit_patients.php?id=" .$row['patient_id']."'><button  class='actions btn btn-danger'><i class='fa-solid fa-pen-to-square'></i></button></a></td>
  </tr>
  <?php
  }
}
?>
 </table>";
  }
} else {
  echo "No results found.";
}

// Close database connection
$con->close();
?>