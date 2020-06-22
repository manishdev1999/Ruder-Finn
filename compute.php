<?php
$con= mysqli_connect("localhost", "root", "babusudha", "import_csv");

// run query
$query = mysqli_query($con,"SELECT facebook FROM users");
$query1 = mysqli_query($con,"SELECT youtube FROM users");
$query2 = mysqli_query($con,"SELECT potentialreach FROM users");

// set array
$array = array();
$array1 = array();
$array2 = array();
// look through query
while($row = mysqli_fetch_assoc($query)){

  // add each row returned into an array
  $array[] = $row;

  // OR just echo the data:
}

while($row = mysqli_fetch_assoc($query1)){

  // add each row returned into an array
  $array1[] = $row;

  // OR just echo the data:
}

while($row = mysqli_fetch_assoc($query2)){

  // add each row returned into an array
  $array2[] = $row;

  // OR just echo the data:
}
$a = 0;
$length = count($array);
for ($x = 0; $x < $length; $x++) {

  // $a = $array[$x]['facebook'];
  // echo $a;
  $result = 0.33 * $array[$x]['facebook'] + 0.33 * $array1[$x]['youtube'] + 0.33 * $array2[$x]['potentialreach'];
  $query ="UPDATE users SET mvalue = '$result' WHERE id = '$x'";
  mysqli_query($con, $query);

}
$res = mysqli_query($con,"SELECT * FROM users");
echo "<table>
<thead>
<tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
             <th>Phone</th>
             <th>Twitter</th>
             <th>LinkedIn</th>
             <th>Title</th>
             <th>Source</th>
             <th>Beats</th>
             <th>Street</th>
             <th>City</th>
             <th>State</th>
             <th>Zip</th>
             <th>Country</th>
             <th>okstatus</th>
             <th>youtube</th>
             <th>facebook</th>
             <th>potentialreach</th>
             <th>mvalue</th>
</tr>
</thead>";
echo "<tbody>";
while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['phone'] . "</td>";
echo "<td>" . $row['twitter'] . "</td>";
echo "<td>" . $row['linkedin'] . "</td>";
echo "<td>" . $row['title'] . "</td>";
echo "<td>" . $row['sources'] . "</td>";
echo "<td>" . $row['beats'] . "</td>";
echo "<td>" . $row['street'] . "</td>";
echo "<td>" . $row['city'] . "</td>";
echo "<td>" . $row['state'] . "</td>";
echo "<td>" . $row['zip'] . "</td>";
echo "<td>" . $row['country'] . "</td>";
echo "<td>" . $row['okstatus'] . "</td>";
echo "<td>" . $row['youtube'] . "</td>";
echo "<td>" . $row['facebook'] . "</td>";
echo "<td>" . $row['potentialreach'] . "</td>";
echo "<td>" . $row['mvalue'] . "</td>";



echo "</tr>";
}
echo "</tbody></table>";
echo "</table>";

mysqli_close($con);
?>  
