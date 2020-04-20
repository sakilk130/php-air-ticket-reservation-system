<?php
$key=$_GET["key"];
$s="localhost";
$u="sakil";
$p="sakil";
$d="airlinedb";
$conn=mysqli_connect($s,$u,$p,$d);
$query="SELECT * FROM users WHERE utype='admin' AND uname LIKE '%$key%'";
$rs=mysqli_query($conn,$query);
mysqli_close($conn);
while($row=mysqli_fetch_assoc($rs))
{
    $name=$row['fname'].$row['lname'];

    echo "<tr>";
    echo '<td class="search-table">'.$name.'</td>';
	echo '<td class="search-table">'.$row['uname'].'</td>';
	echo '<td class="search-table">'.$row['email'].'</td>';
    echo '<td class="search-table">'.$row['phone'].'</td>';
    echo '<td class="search-table">'.$row['bdate'].'</td>';
    echo '<td class="search-table"><a href="update.php?id='.$row['userid'].'" class="btn btn-success">Edit</a></td>';
    echo "</tr>";
}
?>
        