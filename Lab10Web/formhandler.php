<?php
class FormHandler {
    private $db;

    // Konstruktor untuk membuat objek Database
    public function __construct() {
        $this->db = new Database();
    }

    // Fungsi untuk menyimpan data pengguna
    public function saveUser($name, $email) {
        $data = [
            'name' => $name,
            'email' => $email
        ];
        return $this->db->insert('users', $data); // Menyimpan data ke tabel 'users'
    }

    // Fungsi untuk mengambil data pengguna berdasarkan ID
    public function getUserById($id) {
        return $this->db->get('users', "id = $id"); // Mengambil data berdasarkan ID
    }
}
?>
