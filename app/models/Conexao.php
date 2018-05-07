<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

class Conexao
{

    const HOST = "localhost";
    const NOMEBANCO = "TripWus";
    const USUARIO = "root";
    const SENHA = "";

    public static function getConexao()
    {
        //Conexão com o banco de dados usando o objeto PDO
        $conexao = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NOMEBANCO, self::USUARIO, self::SENHA);
        return $conexao;


    }



}