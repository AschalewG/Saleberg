<?php
require_once(LIB_PATH.DS.'database.php');

class Shop {
	
	protected static $table_name="shops";
        protected static $db_fields = array('shop_id', 'business_name', 'sector', 'email', 'username', 'password' , 'confirmed',  'confirmed_code', 'website' , 'phone', 'profile');
	
	public $shop_id;
	public $business_name;
	public $sector;
	public $email;
	public $username;
	public $password;
	public $website;
	public $phone;
	public $profile;
	public $confirmed;
	public $confirmed_code;


	
	
	
	
    public static function authenticate($email="", $password="") {
    global $database;
    $email = $database->escape_value($email);
    $password = $database->escape_value($password);

    $sql  = "SELECT * FROM shops ";
    $sql .= "WHERE email = '{$email}' ";
    $sql .= "AND password = '{$password}' ";
    $sql .= "LIMIT 1";
    $result_array = self::find_by_sql($sql);
		return !empty($result_array) ? array_shift($result_array) : false;
	}
	
	
	
	//this function used to select all the offer iin the shopping mall.
	
	public static function show_shop($shopping_mall){
		
		global $database;
		
		$sql = "SELECT offer  FROM ". self::$table_name;
		$sql .= "WHERE shopping_mall = {$shopping_mall}";
		$sql .= "LIMIT 1";
		
		$result_set = $database->query($sql);
		
		$ressult = $database->fetch_array($result_set);
		
		return $result;
		
	}
		
		
              public static function confirm_reg($email, $passs) {
                global $database;
     $result = $database->query("SELECT confirmed FROM ".self::$table_name." WHERE email='{$email}' AND password='{$passs}' LIMIT 1");
    
      return $result;
    
      }

	

	// Common Database Methods
	public static function find_all() {
		return self::find_by_sql("SELECT * FROM ".self::$table_name);
  }
	
	
  
  public static function find_by_id($id=0) {
    $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE shop_id={$id} LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
  }
  
  
  
  public static function find_by_uname($name) {
    $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE username='{$name}' LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
  }
  
  //email insted of username
  public static function find_by_email($email) {
  
    $result_array = self::find_by_sql("SELECT * FROM ".self::$table_name." WHERE email='{$email}'  LIMIT 1");
		return !empty($result_array) ? array_shift($result_array) : false;
  }
   //email insted of username

  
   public static function confirm($email, $passs) {
     global $database;
     $result = $database->query("SELECT * FROM ".self::$table_name." WHERE email='{$email}' AND password='{$passs}' LIMIT 1");
    
      return $result;
    
      }
  
  
  
  public static function find_by_sname($name) {
  	
	global $database;
    $result = $database->query("SELECT shop_id FROM ".self::$table_name." WHERE business_name ='{$name}' LIMIT 1");
	return $result;
	
	      }
  
  public static function find_by($id) {
  	
	global $database;
    $result = $database->query("SELECT * FROM ".self::$table_name." WHERE shop_id ='{$id}' LIMIT 1");
	return $result;
	
	      }
  
  public static function find_by_sql($sql="") {
    global $database;
    $result_set = $database->query($sql);
    $object_array = array();
    while ($row = $database->fetch_array($result_set)) {
      $object_array[] = self::instantiate($row);
    }
    return $object_array;
  }

	public static function count_all() {
	  global $database;
	  $sql = "SELECT COUNT(*) FROM ".self::$table_name;
    $result_set = $database->query($sql);
	  $row = $database->fetch_array($result_set);
    return array_shift($row);
	}

	private static function instantiate($record) {
    $object = new self;
			foreach($record as $attribute=>$value){
		  if($object->has_attribute($attribute)) {
		    $object->$attribute = $value;
		  }
		}
		return $object;
	}
	
	private function has_attribute($attribute) {
	  
	  return array_key_exists($attribute, $this->attributes());
	}

	protected function attributes() { 
	  $attributes = array();
	  foreach(self::$db_fields as $field) {
	    if(property_exists($this, $field)) {
	      $attributes[$field] = $this->$field;
	    }
	  }
	  return $attributes;
	}
	
	protected function sanitized_attributes() {
	  global $database;
	  $clean_attributes = array();
	  
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $database->escape_value($value);
	  }
	  return $clean_attributes;
	}
	
	public function save() {
	  return isset($this->id) ? $this->update() : $this->create();
	}
	
	public function create() {
		global $database;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
	  $sql = "INSERT INTO ".self::$table_name." (";
		$sql .= join(", ", array_keys($attributes));
	  $sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	  if($database->query($sql)) {
	    $this->id = $database->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

	public function update() {
	  global $database;
		
		$attributes = $this->sanitized_attributes();
		$attribute_pairs = array();
		foreach($attributes as $key => $value) {
		  $attribute_pairs[] = "{$key}='{$value}'";
		}
		$sql = "UPDATE ".self::$table_name." SET ";
		$sql .= join(", ", $attribute_pairs);
		$sql .= " WHERE id=". $database->escape_value($this->id);
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
	}

	public function delete() {
		global $database;
		
	  $sql = "DELETE FROM ".self::$table_name;
	  $sql .= " WHERE id=". $database->escape_value($this->id);
	  $sql .= " LIMIT 1";
	  $database->query($sql);
	  return ($database->affected_rows() == 1) ? true : false;
	
		
	}

}

?>