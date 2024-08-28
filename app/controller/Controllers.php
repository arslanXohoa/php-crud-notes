<?php

namespace App\controller;
use App\database\Database;
use App\modal\Users;

class Controllers {

    public $insert = false;
    public $edit = false;
    public $delete = false;
    public $users;
    protected $modal;

    public function __construct() {
        $database = new Database();
        $this->modal = new Users($database);
        $this->users = $this->modal->read();  // Initialize users here
    }

    public function is_set() {
        if (isset($_POST['create'])) {
            $title = $_POST['title'];
            $descript = $_POST['descript'];
            if ($this->modal->create($title, $descript)) {
                $this->insert = true;
            } else {
                echo "Failed to create user.";
            }
        }

        if (isset($_POST['update'])) {
            $id = $_POST['idEdit'];
            $title = $_POST['updTitle'];
            $descript = $_POST['updDesc'];
            if ($this->modal->update($id, $title, $descript)) {
                $this->edit = true;
            } else {
                echo "Failed to update user.";
            }
        }

        if (isset($_GET['delete'])) {
            $del = $_GET['delete'];
            if ($this->modal->delete($del)) {
                $this->delete = true;
            } else {
                echo "Failed to delete user.";
            }
        }

        $this->users = $this->modal->read(); // Update users after operations
    }
}

