<?php
$key=$_GET["key"];
$s="localhost";
$u="sakil";
$p="sakil";
$d="airlinedb";
$conn=mysqli_connect($s,$u,$p,$d);
$query="SELECT * FROM users WHERE uname LIKE '%$key%'";
$rs=mysqli_query($conn,$query);
mysqli_close($conn);
while($row=mysqli_fetch_assoc($rs))
{
    echo "<tr>";
    echo "<td>".$row['fname']."</td>";
    //echo '<td><a href="product.php?id='.$row["id"].'">'.$row["name"]. '</a></td>';
    echo "</tr>";
}

?>