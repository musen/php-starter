<?php

/**
* Singleton class with exactly one instance at all times.
*/
class DB
{
	
	private static $_instace;

	private $_dns,
			$_pdo,
			$_query,
			$_error = false,
			$_results,
			$_count = 0;

	private function __construct()
	{
		try {

			$this->_dns = sprintf('mysql:dbname=%s;host=%s', Config::get('mysql/database'), Config::get('mysql/host'));

			$this->_pdo = new PDO($this->_dns, Config::get('mysql/username'), Config::get('mysql/password'));
		}
		catch (PDOExeption $e) {
			die($e->getMessage());
		}
	}

	public static function get_instance() {
		if(!isset(self::$_instace)) {
			self::$_instace = new DB();
		}
		return self::$_instace;
	}

	/**
	* For selection
	* DB::get_instance("SELECT * FROM users WHERE username = ? AND pasword = ?", arrray('kebede', 'password'));
	* For insertion
	* DB::get_instance("INSERT INTO users VALUES(?, ?)", array('kebede', 'password'));
	*/
	public function query($sql, $params = array()) {
		$this->_error = false;
		if($this->_query = $this->_pdo->prepare($sql)) {
			$x = 1;
			if(count($params)) {
				foreach ($params as $param) {
					$this->_query->bindValue($x, $param);
					$x++;
				}
			}
			if($this->_query->execute()) {
				$this->_results = $this->_query->fetchAll(PDO::FETCH_OBJ);
				$this->_count = $this->_query->rowCount();
			} else {
				$this->_error = true;
			}
		}
		return $this;
	}

	public function error() {
		return $this->_error;
	}
}