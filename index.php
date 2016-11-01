<?php
$user = $_POST[user];
 
$pass = md5($_POST[pass]);
 
$sql = "select pw from php where user='$user'";
$query = mysqli_query($conn,$sql);
if (!$query) {
printf("Error: %s\n", mysqli_error($conn));
exit();
}
$row = mysqli_fetch_array($query);
//echo $row["pw"];
if (($row[pw]) &amp;&amp; (!strcasecmp($pass, $row[pw]))) {
echo "&lt;p&gt;Logged in! Key: ################################ &lt;/p&gt;";
}
else {
echo("&lt;p&gt;Log in failure!&lt;/p&gt;")；
}
}
?>
