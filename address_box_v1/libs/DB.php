<?php

    class DB{

        private $host = DB_HOST;
        private $username = DB_USER;
        private $password = DB_PASSWORD;
        private $schema = DB_SCHEMA;


        private $dbh;
        private $stmt;
        private $error;

        public function __construct(){

            //Set DSN
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->schema;

            //Set options
            $options = array(

                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

            );

            //Create a new PDO instance
            try{

                $this->dbh = new PDO($dsn, $this->username, $this->password, $options);

            }catch (PDOException $pdo_e){

             //Catch any errors
                $this->error = $pdo_e->getMessage();
            }

        }

        public function query($query){

            $this->stmt = $this->dbh->prepare($query);

        }


        public function bind($params, $value, $type = null){

            if (is_null($type)){

                switch (true){

                    case is_int($value):

                        $type = PDO::PARAM_INT;
                        break;

                    case is_bool($value):

                        $type = PDO::PARAM_BOOL;
                        break;

                    case is_null($value):

                        $type = PDO::PARAM_NULL;
                        break;

                    default:
                        $type = PDO::PARAM_STR;
                        break;

                }

            }

            $this->stmt->bindValue($params, $value, $type);

        }


        public function execute(){

            return $this->stmt->execute();

        }


        public function resultset(){

            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_OBJ);

        }

        public function single(){

            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_OBJ);

        }


        public function rowCount(){

            return $this->stmt->rowCount();

        }


        public function lastInsertedId(){

            return $this->dbh->lastInsertedId();

        }


        public function beginTransaction(){

            return $this->dbh->beginTransaction();

        }

        public function endTransaction(){

            return $this->dbh->commit();

        }


    }