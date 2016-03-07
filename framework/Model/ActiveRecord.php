<?php
/*
model.php
*/
namespace Framework\Model;

//Use SDI
use Framework\DI\Service;

class ActiveRecord {

	public static function find($id = 'all')
	{
		// TODO: improve
		$db = new \PDO(Service::get('pdo')['dns'],Service::get('pdo')['user'],Service::get('pdo')['password']);
		if(!is_numeric($id))
		{
					$res = $db->query("SELECT * FROM posts");
					while($row = $res->fetch(\PDO::FETCH_ASSOC))
					{
							$row['name'] = '?';
							$result[] = (object) $row;
					}
		} else {
				$res = $db->query("SELECT * FROM posts WHERE id = ".$id);
				$result = $res->fetch(\PDO::FETCH_ASSOC);
				$result['name'] = '?';
		}

		return (object) $result;
	}

	public function save(){}
}
?>
