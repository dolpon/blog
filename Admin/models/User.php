<?php

class UserModel extends BaseModel
{

    public function __construct()
    {
        parent::__construct();
//        $this->getColumn('user');
    }

    public function getOneUser($whereArr=[], $column='')
    {
        $where = ' where 1=1 ';
        foreach($whereArr as $k=>$v){
             $where .= ' and '.$k .'="' .addslashes($v).'"';
        }
        $queryBuilder = $this->link->query('select ' . $column . ' from do_user' . $where);
        if(empty($queryBuilder)){
            return [];
        }
        $result = $queryBuilder->fetchAll();

        return empty($result) ? [] : $result[0];
    }

}