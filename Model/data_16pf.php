<?
header('Access-Control-Allow-Origin: *');   
header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');


	include("ConnectDatabase.php");
    //$sql = "SELECT `q_16pf_id`, `question`, `choice1`, `choice2`, `choice3`, `pers_type`, `Positive`, `negative` FROM `question_16pf`";

    $sql_sert = "SELECT * FROM `question_16pf`";
                $resource = $dbconnect->query($sql_sert);
//$resource = mysql_query($sql);
$count_row = mysql_num_rows($resource);

if($count_row > 0) {
	while($result = mysql_fetch_assoc($resource)){
		$rows[]=$result;
	}

	$data = json_encode($rows);
	$totaldata = sizeof($rows);
	$results = '{"results":'.$data.'}';

}else{
	$results = '{"results":null}';
}

echo $results;
?>