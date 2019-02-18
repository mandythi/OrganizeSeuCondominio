<?php

    namespace app\models;

    class User extends Model
    {
        protected $table = "users";

        public function create($nome, $email)
        {
            $sql = "INSERT INTO {$this->table}(nome, email) VALUES (:nome, :email)";

            $create = $this->connection->prepare($sql);
            $create->bindValue(':nome', $nome);
            $create->bindValue(':email', $email);
            $create->execute();

            return $this->connection->lastInsertId();
        }

        public function buscar($name)
        {
            $sql = "SELECT * FROM {$this->table} WHERE nome LIKE :name ORDER BY id DESC";

            $buscar = $this->connection->prepare($sql);
            //$buscar->bindValue(1,'%'.$name.'%');
            $buscar->bindValue(':name', $name);
            $buscar->execute();

            return $buscar->fetchAll();
        }
    }