<?php
/*$file="ab.pdf";
$filename="./ab.pdf";
header('Content-type:application/pdf');
header('Content-Disposition:inline; filename="'.$filename.'"');
header('')*/
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>docs</title>
<style type="text/css">
		.container{
			padding: 30px;
		}
	</style>
</head>
<body>
<?php
// Database Connection 
//$conn = new mysqli('hostname', 'username', 'password', 'database');
$conn = mysqli_connect('localhost','root');
 mysqli_select_db($conn,'register');
//Check for connection error
$select = "SELECT * FROM `articles` where aid=4";
$result = $conn->query($select);
while($row = $result->fetch_object()){
  $pdf = $row->aid;
  $path = $row->title;
  $date = $row->data;
}

echo '<h1>Here is the information PDF</h1>';
echo '<strong>article id : </strong>'.$pdf .'<br>';
echo '<strong>title : </strong>'.$path .'<br>';
?>
<br/><br/>
<iframe src="<?php echo $row['data']; ?>" type="application/pdf" width="100%" height="700px">
</iframe>
</body>
</html>