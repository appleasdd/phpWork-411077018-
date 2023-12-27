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

$sql = 'SELECT dp002_extensions_alignment AS result FROM edu_bigdata_imp2 WHERE dp002_extensions_alignment = 校園職業安全 AND dp001_question_sn != :VAL';
$stmt = $connection->prepare($sql);
$stmt -> binValue(':VAL','NA');
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;

?>