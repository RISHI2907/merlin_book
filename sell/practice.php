<center><h2>USING SESSIONS</h2></center>
<center><h5><u>A Pagevisit Counter</u></h5></center>
<hr/>
<?php
session_start();
if(isset($_SESSION['visits']))
{
$_SESSION['visits']=$_SESSION['visits']+1;
if($_SESSION['visits']>20)
{
session_destroy();
exit();
}
}
else
$_SESSION['visits']=1;
echo "<center><h3>Total visits=". $_SESSION['visits']."</h3></center>";
?> 
