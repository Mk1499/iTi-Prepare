<?php
session_start() ;
/* $dbname = 'iti';
$host ='127.0.0.1'  ;
$dbuser= 'root';
$dbpass = ''; 
$dbname = 'mailock';
$host ='db4free.net'  ;
$dbuser= 'mkhaled';
$dbpass = '22823910mk14'; */
$dbname = 'mohamedkhaled14';
$host ='mysql.aba.ae'  ;
$dbuser= 'MK14';
$dbpass = '2282391021mK14';
$conn = new mysqli($host , $dbuser , $dbpass , $dbname ) ; 
if ($conn->connect_error) {
    die("Connecti0n failed: " . $conn->connect_error);
} 

$sql1 = " CREATE TABLE if not exists Questions (
  
ID int NOT NULL AUTO_INCREMENT ,  
Question varchar(255) NOT NULL , 
PRIMARY KEY (ID)
    
)" ;

    $conn->query($sql1) ;

    $sql2 = " CREATE TABLE if not exists IqAnswers (
  
         
        Question varchar(255) NOT NULL ,
        Name varchar(255) NOT NULL , 
        Answer varchar(255) NOT NULL 
            
        )" ;
        
            $conn->query($sql2) ;
    
?>
