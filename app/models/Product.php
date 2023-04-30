    <?php 
    class Product
    {
        private $db;

        public function __construct()
        {
            $this->db = new Database(DB_NAME);
        }

        public function getAll()
        {
            $this->db->query('SELECT * FROM products limit 9');
            return $this->db->resultSet();
        }

        public function getById($id)
        {
            $this->db->query('SELECT * FROM products WHERE id = :id');
            $this->db->bind(':id', $id);
            return $this->db->single();
        }
    }

?>