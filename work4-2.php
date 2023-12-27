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

$sql = 'SELECT dp002_extensions_alignment FROM edu_bigdata_imp2 WHERE dp002_extensions_alignment = 十二年國民基本教育類 and
dp002_extensions_alignment != :VAL';
$stmt = $connection->prepare($sql);
$stmt -> binValue(':VAL','NA');
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;
?>