<?php
    namespace Models;
    use mysqli;
    class Conexion extends mysqli {
        
        public $query;

        function __construct($host = 'localhost', $user = 'root', $passdb = NULL,
                            $db = 'mydb',$port = 3306) {

            parent::__construct($host, $user, $passdb, $db, $port);

        }
       
        public function select($field = []) 
        {  

            $fieldsRaw = '';

            foreach ($field as $key => $value) {

                if ($key == 0) {
                    $fieldsRaw = "$value";
                } else {
                    $fieldsRaw .= ',' . "$value";

                }
            }
            
            $this->query;
            
            $this->query  = "SELECT $fieldsRaw "; 
            return $this;
        }

        public function delete($table) 
        {

            $this->query = "DELETE FROM $table ";
            return $this;

        }

        public function insert($table) 
        {

            $this->query = "INSERT INTO $table ";
            return $this;

        }

        public function values($field1, $field2, $field3, $field4, $field5) 
        {

            $this->query = "VALUES $field1, $field2, $field3, $field4, $field5";
            return $this;

        }

        public function update($table, $field=[]) 
        {

            $fieldsRaw = '';

            foreach ($field as $key => $value) {

                if ($key == 0) {
                    $fieldsRaw = " $value";
                } else {
                    $fieldsRaw .= ',' . " $value";

                }
            }

            $this->query;
            
            $this->query  = "UPDATE $table SET $fieldsRaw  "; 
            return $this;

        }

        public function from($table) 
        {

            $this->query .= "FROM $table ";
            return $this;

        }

        public function where($field, $operator, $field2) 
        {  

            $this->query .= "WHERE $field $operator '$field2'";

            return $this;
        }

        public function join($table, $equal, $operator, $equal2) 
        {

           $this->query.= "INNER JOIN $table ON $equal $operator $equal2 ";
            return $this;

        }

        public function count($asteric,$asname) 
        {

            $this->query .= ", count($asteric) AS $asname ";
            return $this;

        }

        // ONLY SELECT COUNT

        public function O_count($asteric,$asname) 
        {

            $this->query .= " count($asteric) AS $asname ";
            return $this;

        }
      
        public function groupBy($field) 
        {

            $this->query .= "GROUP BY $field ";
            return $this;

        }
      
        public function orderBy($field) 
        {

            $this->query .= "ORDER BY $field ";
            return $this;

        }
      
        public function limit($number) 
        {

            $this->query .= "LIMIT $number ";
            return $this;

        }
      
        public function __toString() 
        {

            return $this->query;
        }
        
        public function eject_query($query) 
        {

            return $this->query($query);

        }
    
        
    }









 