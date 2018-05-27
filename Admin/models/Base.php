<?php

class BaseModel
{
    protected $link;

    protected $database;

    public function __construct()
    {
        $db_config = [];
        if(empty($db_config)) {
            $db_config = Yaf\Application::app()->getConfig()->db;
        }
        $this->database = $db_config['database'];
        $this->link = $this->connection($db_config['host'],$db_config['database'], $db_config['username'], $db_config['password']);
        return $this->link;
    }

    protected function connection($host='', $database='', $username='', $password='')
    {
        try{
            if(is_null($this->link)) {
                $this->link = new PDO("mysql:dbname=$database;host=$host", $username, $password);
            }
            return $this->link;
        }catch(\Exception $e){
            echo $e->getMessage();exit;
        }

    }

    public function getColumn($tableName='')
    {
        $sql = "SELECT * FROM information_schema.columns WHERE table_schema='".$this->database."' AND table_name='".$tableName."';";
        $result = $this->link->query($sql);
        var_dump($result);exit;
        return $result;
    }





}