<?php 
    class Blog
    {
        private $db;

        public function __construct()
        {
           
            $this->db = new Database(DB_NAME);
        }

        public function getAll()
        {
            $this->db->query('SELECT * FROM content  group by name limit 12');
            return $this->db->resultSet();
        }

        public function getByTitleName($name)
        {
            $this->db->query('SELECT id,name,ep FROM content WHERE name = :name  group by id,name ,ep ');
            $this->db->bind(':name', $name);
            return $this->db->resultSet();
        }


        public function getById($id)
        {
            $this->db->query('SELECT * FROM content WHERE id = :id ');
            $this->db->bind(':id', $id);
            return $this->db->resultSet();
        }

       
    }

?>