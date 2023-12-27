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

$sql = 'SELECT dp002_verb_display_zh_TW COUNT(*) AS COUNT FROM edu_bigdata_imp2 WHERE and
dp002_extensions_alignment != :VAL GROUP BY dp002_verb_display_zh_TW ORDER BY COUNT DESC LIMIT 3';
$stmt = $connection->prepare($sql);
$stmt -> binValue(':VAL','NA');
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;
?>