<?php
$key=$_GET["key"];
$s="localhost";
$u="sakil";
$p="sakil";
$d="airlinedb";
$conn=mysqli_connect($s,$u,$p,$d);
$query="SELECT * FROM flight WHERE flightid LIKE '%$key%'";
$rs=mysqli_query($conn,$query);
mysqli_close($conn);
while($row=mysqli_fetch_assoc($rs))
{
    echo "<tr>";
	echo '<td class="search-table">'.$row['flightid'].'</td>';
	echo '<td class="search-table">'.$row['ttime'].'</td>';
    echo '<td class="search-table">'.$row['ffrom'].'</td>';
    echo '<td class="search-table">'.$row['tto'].'</td>';
    echo '<td class="search-table">'.$row["seat"].'</td>';
    echo '<td class="search-table">'.$row["seat"].'</td>';
    echo '<td class="search-table">'.$row["fare"].'</td>';
    echo '<td class="search-table"><a href="update.php?id='.$row["fid"].'" class="btn btn-success">Update</a></td>';
    echo "</tr>";
}
?>
        