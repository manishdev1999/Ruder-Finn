<?php  
$connect = mysqli_connect("localhost", "root", "babusudha", "import_csv");
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
  <?php 
  $connect = mysqli_connect("localhost", "root", "babusudha", "import_csv");
     $qu = "SELECT * FROM users ORDER BY id asc";
     $re = mysqli_query($connect,$qu);
     $user_arr = array();
     while($row = mysqli_fetch_array($re)){
      $id = $row['id'];
      $fname = $row['firstname'];
      $lname = $row['lastname'];
      $email = $row['email'];
      $phone = $row['phone'];
      $twitter = $row['twitter'];
      $linkedin = $row['linkedin'];
      $title = $row['title'];
      $sources = $row['sources'];
      $beats = $row['beats'];
      $street = $row['street'];
      $city = $row['city'];
      $state = $row['state'];
      $zip = $row['zip'];
      $country = $row['country'];
      $okstatus = $row['okstatus'];
      $youtube = $row['youtube'];
      $facebook = $row['facebook'];
      $potentialreach = $row['potentialreach'];
      $mvalue = $row['mvalue'];

      $user_arr[] = array($id,$fname,$lname,$email,$phone,$twitter,$linkedin,$title,$sources,$beats,$street,$city,$state,$zip,$country,$okstatus,$youtube,$facebook,$potentialreach,$mvalue);
     
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
  <h3 align="center">Export Data</h3><br />
  <!-- <form method="post" enctype="multipart/form-data">
   <div align="center">  
    <label>Select CSV File:</label>
    <center>
    <input type="file" name="file" />
    <br />
    </center>
    <input type="submit" name="submit" value="Import" class="btn btn-info" />
   </div>
  </form> -->
  <center>
  <form method='post' action='download.php'>
  
  <input type='submit' value='Export' name='Export' class="btn btn-info">
  <?php 
    $serialize_user_arr = serialize($user_arr);
   ?>
  <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
 </form>
 </center><br><br>
<?php include("compute.php");?>
 </body>  
</html>


