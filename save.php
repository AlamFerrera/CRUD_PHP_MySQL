<?php
include('db.php');
require_once('includes/messages.php');

if($_POST['save']){
    $titulo = $_POST['title']; 
    $descripcion = $_POST['descripcion'];

    $query = "INSERT INTO task(titulo, descripcion) VALUES ('$titulo','$descripcion')";
    $result = mysqli_query($conn,$query);
    
    mysqli_close($conn);
    
    if(!$result){
        echo "Error al guardar";
    }
    else{
        setMessage('Tarea guardada exitosamente', 'success');
        redirect('index.php');
    }
    
}

function redirect($url){
    header("Location: " . $url);
    exit();
}



