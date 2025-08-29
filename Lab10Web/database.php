<?php
class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;

    // Konstruktor untuk membuka koneksi
    public function __construct() {
        $this->getConfig(); // Mengambil konfigurasi dari file config.php
        $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
        
        // Mengecek koneksi
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    // Mendapatkan konfigurasi database
    private function getConfig() {
        include_once("config.php");
        $this->host = $config['host'];
        $this->user = $config['username'];
        $this->password = $config['password'];
        $this->db_name = $config['db_name'];
    }

    // Menjalankan query SQL
    public function query($sql) {
        $result = $this->conn->query($sql);
        if (!$result) {
            die("Query Error: " . $this->conn->error);
        }
        return $result;
    }

    // Mendapatkan data dari tabel
    public function get($table, $where = null) {
        $whereClause = $where ? " WHERE " . $where : "";
        $sql = "SELECT * FROM " . $table . $whereClause;
        $result = $this->query($sql);
        return $result->fetch_assoc(); // Mengembalikan satu baris data
    }

    // Menyisipkan data ke tabel
    public function insert($table, $data) {
        if (is_array($data)) {
            $columns = implode(",", array_keys($data));
            $values = implode(",", array_map(function($value) {
                return "'" . $this->conn->real_escape_string($value) . "'"; // Menghindari SQL injection
            }, array_values($data)));
        } else {
            return false;
        }

        $sql = "INSERT INTO " . $table . " (" . $columns . ") VALUES (" . $values . ")";
        return $this->query($sql);
    }

    // Memperbarui data dalam tabel
    public function update($table, $data, $where) {
        $update_value = "";
        if (is_array($data)) {
            $update_value = implode(",", array_map(function($key, $value) {
                return "$key='" . $this->conn->real_escape_string($value) . "'";
            }, array_keys($data), $data));
        } else {
            return false;
        }

        $sql = "UPDATE " . $table . " SET " . $update_value . " WHERE " . $where;
        return $this->query($sql);
    }

    // Menghapus data dari tabel
    public function delete($table, $filter) {
        if (!str_starts_with(trim($filter), "WHERE")) {
            die("Delete operation must include WHERE clause to avoid accidental deletions.");
        }
        $sql = "DELETE FROM " . $table . " " . $filter;
        return $this->query($sql);
    }
}
?>
