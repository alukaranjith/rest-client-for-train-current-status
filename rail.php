<?php
if(isset($_GET))
{
 $trainno=$_GET['train_no'];
 $doj=$_GET['doj'];
if($trainno<>"" && $doj<>"")
{
 $api_url="http://api.railwayapi.com/live/train/".$trainno."/doj/".$doj."/apikey/dk2mf9em/";

 $rail_enq=file_get_contents($api_url);
 $json=json_decode($rail_enq,TRUE);

 $error=$json['error'];
$startdate=$json['start_date'];
$train_number=$json['train_number'];
$position=$json['position'];

 echo "<strong> error:</strong>".$error."<br/>";
 echo "<strong> start date:</strong>".$startdate."<br/>";
 echo "<strong> Train no:</strong>".$train_number."<br/>";
 echo "<strong> position:</strong>".$position."<br/>";
}
}
?>