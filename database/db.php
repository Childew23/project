<?php

const DB_HOST = 'db.3wa.io';
const DB_PORT = '3304';
const DB_NAME = 'williamduribreux_ProjetFramework';
const DB_USERNAME = 'williamduribreux';
const DB_PASSWORD = '503a2b6cb045bb165556ae9c32a46ae3';

function getConnect():\PDO{

    try{
        return new PDO(
            'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USERNAME, DB_PASSWORD
        );
    } catch (PDOException $e){
        echo 'erreur de connexion à la base de donnée <br>'.$e -> getMessage();
    }
}