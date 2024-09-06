<?php

class Modelo{
    protected $id;
    protected $table;
    protected $db;

    public function __construct($id, $table, PDO $connection)
    {
        $this -> id = $id;
        $this -> table = $table;
        $this -> db = $connection;
    }

    public function getAll(){
        $stm = $this->db->prepare("select * from {$this->table}");
        $stm->execute();
        return $stm->fetchAll();
    }

    public function getById($id){
        $stm = $this->db->prepare("select * from {$this->table} where id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
        return $stm->fetch();
    }

    public function store($data){
        var_dump($data);
        echo "<br>";

        $sql = "insert into {$this->table}(";

        foreach ($data as $key => $value) {
            $sql .= "{$key},";     
        }

        $sql = trim($sql, ',');
        $sql .= ") VALUES (";

        foreach ($data as $key => $value) {
            $sql .= ":{$key},";       
        }

        $sql = trim($sql, ',');
        $sql .= ")";

        $stm = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);      
        }

        $stm->execute();
    }

    public function update($id, $data){
        $sql = "update {$this->table} set ";

        foreach ($data as $key => $value) {
            $sql .= "{$key} = :{$key},";     
        }

        $sql = trim($sql, ',');
        $sql .= " WHERE id = :id";

        $stm = $this->db->prepare($sql);
        foreach ($data as $key => $value) {
            $stm->bindValue(":{$key}", $value);      
        }

        $stm->bindValue(":id", $id);
        $stm->execute();

        echo $sql;
    }

    public function delete($id){
        $stm = $this->db->prepare("delete from {$this->table} where id = :id");
        $stm->bindValue(":id", $id);
        $stm->execute();
    }
}