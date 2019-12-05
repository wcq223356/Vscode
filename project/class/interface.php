<?php


//数据库接口类
interface Conn
{
    public function add($data);
    public function table($table);
    public function fields($fields);
    public function where($where);
    public function save($data);
    public function  delete();
    public function find();
    public function select();
    public function order($order);
    public function limit($limit);
    public function group($groupBy);
    public function join($join);
    public function clear();
    public function  createSql();
    public function beginTransaction();


}
