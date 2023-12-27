<?PHP
require_once 'DBConnectionHandler.php';

$serverName = "140.127.74.201:9901";
$userName   = "root";
$password   = "root";
$db         = 'bigdata';

DBConnectionHandler::setConnection(
		$serverName,
		$userName,
		$password,  
		$db  
);
$connection = DBConnectionHandler::getConnection();

$sql = 'SELECT DISTINCT DATE(dp001_review_start_time),DATE(dp001_review_end_time) FROM edu_bigdata_imp1 WHERE PesudoID=:ID GROUP BY dp001_review_start_time,dp001_review_end_time';
$stmt = $connection->prepare($sql);
$stmt -> binValue(':ID',74);
$stmt -> binValue(':VAL','paused');
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;
?>