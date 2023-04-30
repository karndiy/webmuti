<?php
class Admin {
  private $db;

  function __construct() {
    $this->db = new Database(DB_NAME);
  }

  function getUsers() {
    $result = $this->db->query('SELECT * FROM users');
    return $this->db->resultSet();
  }

  function getUserById($id) {
    $this->db->query('SELECT * FROM users WHERE id=:id');
    $this->db->bind(':id', $id);   
    return $this->db->single();    
  }

  function getUserByUsername($username){

    $this->db->query('SELECT * FROM users WHERE username=:username');
    $this->db->bind(':username', $username);   
    return $this->db->single();    

  }

  function updateUser($id, $name, $email) {
    $this->db->query('UPDATE users SET name=:name, email=:email WHERE id=:id');
    $this->db->execute(array(':id' => $id, ':name' => $name, ':email' => $email));
  }
}
