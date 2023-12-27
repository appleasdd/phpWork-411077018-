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

$sql = 'SELECT COUNT(DISTINCT dp001_review_sn) AS result FROM edu_bigdata_imp1 WHERE PresudoID=:ID';
$stmt = $connection->prepare($sql);
$stmt -> binValue(':ID',39);
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;
?>