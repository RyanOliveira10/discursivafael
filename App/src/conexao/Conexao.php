<?php
class Conexao {
   
   public static $instance;

   private function __construct() {
       //
   }

   public static function getConexao() {
       if (!isset(self::$instance)) {
           self::$instance = new PDO('mysql:host=sql812.main-hosting.eu;dbname=u635830876_ryletech', 'u635830876_ryanoliveira', '9SbLxTb?^', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
           self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
       }

       return self::$instance;
   }

}