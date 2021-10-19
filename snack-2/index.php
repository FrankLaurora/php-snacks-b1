<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
if(!empty($_GET['name']) && !empty($_GET['age']) && !empty($_GET['email'])) {
    $name = $_GET['name'];
    
    $age = $_GET['age'];
    
    $email = $_GET['email'];
    
    if(strlen($name) > 3 && strpos($email, '@') && strpos($email, '.') && is_numeric($age) == "integer"){
        echo 'Accesso riuscito.';
    } else {
        echo 'Accesso negato.';
    }
} else {
    echo "Devi inserire i parametri name, age e email nell'URL.";
};
?>