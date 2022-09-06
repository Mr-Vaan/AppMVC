<?php 

class Mahasiswa_model {
    private $table = 'mahasiswa';
    private $db;

    public function __construct() 
    {
        $this->db = new Database;
    }

    
    public function getAllMahasiswa ()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        // Kembalikan hasilnya :
        // Artinya, Tampilin semua datanya resultSet();
        return $this->db->resultSet();

    }

    public function getMahasiswaById($id)
    {
        // WHERE id=:id <- nah ini, Untuk menyimpan data yang akan kita binding. Dan juga untuk menghindari SQL INJECTIONS.
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        // Idnya baru kita masukin disini, kita binding
        $this->db->bind('id', $id); // isinya paramnya 'id', valuenya $id.
        // kalau isinya satu, memakai single(). isinya satu itu dari masing-masing id.
        return $this->db->single();

    }

    public function tambahDataMahasiswa($data)
    {
        // Baru Selanjutnya Melakukan Query Insert Data nya, disini :
        // '' -> String Kosong ini untuk Id nya(AUTO_INCREMENT).
        // Memakai teknik Binding ->  :nama, :nrp 
        $query = "INSERT INTO mahasiswa 
                    VALUES
                    ('', :nama, :nrp, :email, :jurusan)";
        
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('jurusan', $data['jurusan']);

        $this->db->execute();

        // Kalau Berhasil,Ini Menghasilkan Angka 1 :
        return $this->db->rowCount();


    }

    public function hapusDataMahasiswa($id)
    {  
        // Memakai binding untuk idnya
        $query = "DELETE FROM mahasiswa WHERE id = :id";
        // Jalankan Querynya :
        $this->db->query($query);
        $this->db->bind('id', $id); // Artinya, Ini 'id' ambil dari bindingnya :id. dan ambil datanya dari parameter $id.
        
        // Baru Kita Eksekusi : 
        $this->db->execute();

        // Artinya, Jika Berhasil di hapus, Maka Ini akan menghasilkan angka 1. Jika ini menghasilkan angka 1, maka if yang berada di Mahasiswa.php akan bernilai True.
        return $this->db->rowCount();
    }


}


?>





















