<h1> Area Restrita</h1>

<?php
 
if(isset($_POST['email']) || isset($_POST['senha'])){
    if (strlen($_POST['email']) == 0) {
       echo 'colocar email';
    }else if (strlen($_POST['email']) == 0){
        echo 'colocar senha'; 
    }
}

?>