<?php

class Board 
{
    protected $table = 'boards';
    private $db;


    public function __construct()
        {
            $this->db = new Database(DB_NAME);
        }

    public function getAll()
    {
        $query = "SELECT * FROM {$this->table}";
        $this->db->query($query);
        return $this->db->resultSet();      
    }

    public function getById($id)
    {      
        $this->db->query("SELECT * FROM {$this->table} WHERE id = :id");
        $this->db->bind(':id', $id);
        return $this->db->resultSet();      
    }

    public function create($title, $description)
    {
        $query = "INSERT INTO {$this->table} (title, description) VALUES (?, ?)";
        $this->db->query($query);
        $this->db->bind('ss', $title, $description);
        $stmt = $this->db->execute();

        return $stmt->insert_id;
    }

    public function update($id, $title, $description)
    {
        $query = "UPDATE {$this->table} SET title = ?, description = ? WHERE id = ?";
        $this->db->query($query);
        $this->db->bind('ssi', $title, $description, $id);
        $stmt = $this->db->execute();

        return $stmt->affected_rows > 0;
    }

    public function delete($id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";
        $this->db->query($query);
        $this->db->bind('i', $id);
        $stmt= $this->db->execute();

        return $stmt->affected_rows > 0;
    }
}
