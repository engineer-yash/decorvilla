
<?PHP
$server="localhost";
$username="root";
$password="";
$dbn="decorvilla";
$con=new mysqli($server,$username,$password,$dbn);
if($con->connect_error)
{
	die(" not connect with database: ".$con->connect_error);
}
else
{
	echo" connect with database";
}
?>
