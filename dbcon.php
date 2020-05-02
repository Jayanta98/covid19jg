<?php
 $server='localhost:8080';
 $psw='';
 $user='root';
 $db='corona db';


$con= mysqli_connect($server,$user,$psw,$db);
if($con)
{

?>
<script>
    alert("Connected!!!");
    </script>
<?php

}
else{
    ?>
<script>
    alert("failed");
    </script>
<?php
}
?>