<?php

Class Router{
    public static function _info($name){
		$d = ORM::for_table('tbl_routers')->where('name',$name)->find_one();
        return $d;
    }
}