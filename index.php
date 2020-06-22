<?php  
$connect = mysqli_connect("localhost", "root", "babusudha", "import_csv");
$user_arr = array();

if(isset($_POST["submit"]))
{
 if($_FILES['file']['name'])
 {
  $filename = explode(".", $_FILES['file']['name']);
  if($filename[1] == 'csv')
  {
   $handle = fopen($_FILES['file']['tmp_name'], "r");
   while($data = fgetcsv($handle))
   {
                $item1 = mysqli_real_escape_string($connect, $data[0]);  
                $item2 = mysqli_real_escape_string($connect, $data[1]);
                $item3 = mysqli_real_escape_string($connect, $data[2]);
                $item4 = mysqli_real_escape_string($connect, $data[3]);
                $item5 = mysqli_real_escape_string($connect, $data[4]);
                $item6 = mysqli_real_escape_string($connect, $data[5]);
                $item7 = mysqli_real_escape_string($connect, $data[6]);
                $item8 = mysqli_real_escape_string($connect, $data[7]);
                $item9 = mysqli_real_escape_string($connect, $data[8]);
                $item10 = mysqli_real_escape_string($connect, $data[9]);
                $item11 = mysqli_real_escape_string($connect, $data[10]);
                $item12 = mysqli_real_escape_string($connect, $data[11]);
                $item13 = mysqli_real_escape_string($connect, $data[12]);
                $item14 = mysqli_real_escape_string($connect, $data[13]);
                $item15 = mysqli_real_escape_string($connect, $data[14]);
                $item16 = mysqli_real_escape_string($connect, $data[15]);
                $item17 = mysqli_real_escape_string($connect, $data[16]);
                $item18 = mysqli_real_escape_string($connect, $data[17]);
                $item19 = mysqli_real_escape_string($connect, $data[18]);
                $item20 = mysqli_real_escape_string($connect, $data[19]);               
                $query = "INSERT into users(id, firstname, lastname, email, phone, twitter, linkedin, title, sources, beats, street, city, state, zip, country, okstatus, youtube, facebook, potentialreach, mvalue) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7','$item8','$item9','$item10','$item11','$item12','$item13','$item14','$item15','$item16','$item17','$item18','$item19','$item20')";
                mysqli_query($connect, $query);

            }
   fclose($handle);
   echo "<script>alert('Import done sucessfully');</script>";
  }
 }
}
?>  
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Ruder Finn</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="CSS/main.css">
 </head>  
 <body>  
  <h3 align="center">Import Data</h3><br />
  <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <a href="financial49.csv" download>Get Sample File</a>
    <center>
    <input type="file" name="file" />
    <br />
    **Make sure you don't have column headings.
    </center>
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="computation.php">
  <input type="button" name="Compute" value="Compute" class="btn btn-info"/>
  </a><br><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="truncate.php">
  <input type="button" name="Clear" value="Clear" class="btn btn-info"/>
  </a><br><br>
  <?php include("header.php"); ?>
 </body>  
</html>


