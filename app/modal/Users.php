<?php

namespace App\modal;
use App\database\Database;

class Users{
    
    private $db;
    public $title;
    public $updtitle;
    public $descript;
    public $upddescript;
    public $idEdit;
    public $idDel;

    
    public function __construct(Database $database){
        $this->db = $database;
    }

    public function create($title, $descript){
        $this->title = $title;
        $this->descript = $descript;
        $sql = "INSERT INTO notes (title, descript, tstamp) VALUES ('$title', '$descript', current_timestamp())";
        return $this->db->query($sql); 
    }

    public function read(){
        $sql = "SELECT * FROM `notes` ";
        return $this->db->query($sql);
    }

    public function update($id,$title,$descript){
        $this->idEdit = $id;
        $this->updtitle = $title;
        $this->upddescript = $descript;
        $sql = "UPDATE notes SET title='$this->updtitle', descript='$this->upddescript' WHERE id='$this->idEdit'";
        return $this->db->query($sql);
    }

    public function delete($id){
        $this->idDel = $id;
        $sql = "DELETE FROM notes WHERE id=$this->idDel";
        return $this->db->query($sql);
    }

}
?>