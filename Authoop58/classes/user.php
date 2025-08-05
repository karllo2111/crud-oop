<?php
include("DB.php");

class User extends DB{
   
    public function getAll()
    {
        return $this->connect()->query("SELECT * FROM users")->fetch_all(MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        return $this->connect()->query("SELECT * FROM users WHERE id='$id'")->fetch_assoc();
    }

    public function create($data)
    {
        $name = $data['name'];
        $username = $data['username'];
        $password = $data['password'];

        return $this->connect()->query("INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')");
    }

    public function update($id, $data)
    {
        $name = $data['name'];
        $username = $data['username'];
        $password = $data['password'];

        return $this->connect()->query("UPDATE users SET name='$name', username='$username', password='$password' WHERE id='$id'");
    }

    public function delete($id)
    {
        return $this->connect()->query("DELETE FROM users WHERE id='$id'");
    }
}



?>