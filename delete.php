<?php
   include('db.php');
   require_once('includes/messages.php');

   if(isset($_POST['btnSubmit'])){
       $id = $_POST['btnSubmit'];
       $query = "DELETE FROM task WHERE id = $id";
       $result = mysqli_query($conn,$query);

       mysqli_close($conn);

       if(!$result){
            setMessage('Error al eliminar tarea', 'danger');
            redirect('index.php');
        }
        else{
            setMessage('Tarea eliminada exitosamente', 'success');
            redirect('index.php');
        }
   }

    function redirect($url){
       header("Location: " . $url);
        exit();
    }


