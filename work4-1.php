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

$sql = 'SELECT dp001_review_sn COUNT(*) AS COUNT FROM edu_bigdata_imp1 GROUP BY dp001_review_sn ORDER BY COUNT DESC LIMIT 1';
$stmt = $connection->prepare($sql);
$stmt -> execute();
$r = $stmt -> fetchAll(PDD::FETCH_ASSOC);
echo $r;
?>