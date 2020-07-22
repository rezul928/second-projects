<?php

class Db{

    const host = "1.2.36";
    public $table;
    public static $table2;
    public static $prefix;

    public function find($id , $columns=null){
        // ? -> if the function is True code has been written  after ? will be run else : ;

        $columns = !is_null($columns) ? implode("," , $columns) : "*" ;

        echo "SELECT {$columns} FROM {$this->table} WHERE id={$id}";
    }

    public function all(){
        $table = static::$table2;
        return "SELECT * FROM {$table}";
    }

    public function delete($id){
        return "DELETE FROM {$this->table} WHERE id={$id}";
    }

    private function sort(){
        self::$prefix;
        static::$prefix;
    }

    public static function export(){
        self::host;
    }
}

new finalClass();
function __autoloader($className){
    var_dump($className);
}
//
//$connection = new Db();
//$connection->find(56);
//
//Db::export();