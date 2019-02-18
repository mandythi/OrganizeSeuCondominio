<?php

    namespace app\models;

    abstract class Model
    {
        protected $connection;

        public function __construct()
        {
            $this->connection = Connection::connect();
        }

        public function all()
        {
            $sql = "SELECT * FROM {$this->table}";
            $all = $this->connection->prepare($sql);
            $all->execute();

            return $all->fetchAll();
        }

        public function find($field, $value)
        {
            $sql = "SELECT * FROM {$this->table} WHERE {$field} = ?";
            $find = $this->connection->prepare($sql);
            
            $find->bindValue(1, $value);
            $find->execute();

            return $find->fetch();
        }

    }