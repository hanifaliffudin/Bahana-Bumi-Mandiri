<?php
class Karir
{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($posisi, $responsibilities, $requirements, $catatan)
    {
        $data = $this->db->prepare('INSERT INTO karir (name, responsibilities, requirements, notes) VALUES (?, ?, ?, ?)');
        
        $data->bindParam(1, $posisi);
        $data->bindParam(2, $responsibilities);
        $data->bindParam(3, $requirements);
        $data->bindParam(4, $catatan);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM karir");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM karir where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$posisi, $responsibilities, $requirements, $catatan){
        $query = $this->db->prepare('UPDATE karir set name=?,responsibilities=?,requirements=?,notes=? where id=?');
        
        $query->bindParam(1, $posisi);
        $query->bindParam(2, $responsibilities);
        $query->bindParam(3, $requirements);
        $query->bindParam(4, $catatan);
        $query->bindParam(5, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM karir where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function getMinID(){
        $query = $this->db->prepare("SELECT id as ID FROM karir HAVING MIN(id)");

        $query->execute();
        return $query->rowCount();
    }
}

class Proyek{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($gambar, $judul, $deskripsi)
    {
        $data = $this->db->prepare('INSERT INTO proyek (gambar, judul, deskripsi) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $gambar);
        $data->bindParam(2, $judul);
        $data->bindParam(3, $deskripsi);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM proyek");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM proyek where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$gambar, $judul, $deskripsi){
        $query = $this->db->prepare('UPDATE proyek set gambar=?,judul=?,deskripsi=? where id=?');
        
        $query->bindParam(1, $gambar);
        $query->bindParam(2, $judul);
        $query->bindParam(3, $deskripsi);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM proyek where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}

class Manajemen{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($foto, $nama, $deskripsi)
    {
        $data = $this->db->prepare('INSERT INTO manajemen (foto, nama, deskripsi) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $foto);
        $data->bindParam(2, $nama);
        $data->bindParam(3, $deskripsi);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM manajemen");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM manajemen where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$foto, $nama, $deskripsi){
        $query = $this->db->prepare('UPDATE manajemen set foto=?,nama=?,deskripsi=? where id=?');
        
        $query->bindParam(1, $foto);
        $query->bindParam(2, $nama);
        $query->bindParam(3, $deskripsi);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM manajemen where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}

class Aset{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($icon, $nama, $jumlah)
    {
        $data = $this->db->prepare('INSERT INTO aset (icon, nama, jumlah) VALUES (?, ?, ?)');
        
        $data->bindParam(1, $icon);
        $data->bindParam(2, $nama);
        $data->bindParam(3, $jumlah);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM aset");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM aset where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$icon, $nama, $jumlah){
        $query = $this->db->prepare('UPDATE aset set icon=?,nama=?,jumlah=? where id=?');
        
        $query->bindParam(1, $icon);
        $query->bindParam(2, $nama);
        $query->bindParam(3, $jumlah);
        $query->bindParam(4, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM aset where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}

class Misi{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($icon, $misi)
    {
        $data = $this->db->prepare('INSERT INTO misi (icon, misi) VALUES (?, ?)');
        
        $data->bindParam(1, $icon);
        $data->bindParam(2, $misi);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM misi");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM misi where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$icon, $misi){
        $query = $this->db->prepare('UPDATE misi set icon=?,misi=? where id=?');
        
        $query->bindParam(1, $icon);
        $query->bindParam(2, $misi);
        $query->bindParam(3, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM misi where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}

class K3L{
    public function __construct()
    {
        $db_host = "localhost";
        $db_user = "root";
        // $db_user = "u8766973_bbm";
        $db_pass = "";
       // $db_pass = "bbm@BombaGrup2021";
         $db_name = "bbm";
       // $db_name = "u8766973_bbm";
        
        try {    
            //create PDO connection 
            $this->db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        } catch(PDOException $e) {
            //show error
            die("Error: " . $e->getMessage());
        }
    }
    public function add_data($target, $deskripsi)
    {
        $data = $this->db->prepare('INSERT INTO k3l (target, deskripsi) VALUES (?, ?)');
        
        $data->bindParam(1, $target);
        $data->bindParam(2, $deskripsi);

        $data->execute();
        return $data->rowCount();
    }
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM k3l");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($id){
        $query = $this->db->prepare("SELECT * FROM k3l where id=?");
        $query->bindParam(1, $id);
        $query->execute();
        return $query->fetch();
    }

    public function update($id,$target, $deskripsi){
        $query = $this->db->prepare('UPDATE k3l set target=?,deskripsi=? where id=?');
        
        $query->bindParam(1, $target);
        $query->bindParam(2, $deskripsi);
        $query->bindParam(3, $id);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM k3l where id=?");

        $query->bindParam(1, $id);

        $query->execute();
        return $query->rowCount();
    }
}
?>