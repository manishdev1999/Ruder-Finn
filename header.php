<?php
$con= mysqli_connect("localhost", "root", "babusudha", "import_csv");


$result = mysqli_query($con,"SELECT * FROM users");
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
while($row = mysqli_fetch_array($result))
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