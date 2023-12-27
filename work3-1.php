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

$sql = 'SELECT COUNT(dp001_prac_score_rate) AS result FROM edu_bigdata_imp1 WHERE dp001_prac_score_rate=:VAL AND Pesudo=: ID';
$stmt = $connection->prepare($sql);
$stmt -> binValue(':ID',74);
$stmt -> binValue(':VAL','paused');
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;
?>