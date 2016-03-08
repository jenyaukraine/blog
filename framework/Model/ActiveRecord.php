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
		$db = Service::get('pdo');
		$sql = "SELECT * FROM posts";
		if(is_numeric($id))
  		 $sql .= " WHERE id = ".$id;

		$res = $db->query($sql);
		if($res->rowCount() > '1')
		{
			while($row = $res->fetch(\PDO::FETCH_ASSOC))
						$result[] = (object) $row;
		}
		else 	$result = $res->fetch(\PDO::FETCH_ASSOC);

		return (object) $result;
	}

	public function save(){
		print_r("Email: ". $this->email. "\n Password:". $this->password. "\n Role:". $this->role);
	}
}
?>
