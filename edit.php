<?php

// inclusion des instenses utiles

include("config.php") ;

include ("Common/db.php") ;

//var_dump($_GET) ;
//var_dump($_POST) ;

switch ($_GET['mod']) { // gestion du mode d'arriver en GET


    case 'add':     //ajouter une tache en base 

// création de ma requete sql d'insertion
$sql = "INSERT INTO tasks (task , etat ) VALUES('".$_POST['task']."' ,'n')" ;
// éxécution de ma requete
$mysqli->query($sql) ;

        break;
    case "del" :    // supprimer une tache en base

        $sql = 'DELETE FROM tasks WHERE id='.$_GET['id'] ;
        // Éxécuter la requete
        $mysqli->query($sql) ;
        
    break ;
    case "upd" :    // modifier l'état d'une tache

        // met a jour la colonne dans la table taches quand l'id = id

        $sql = "UPDATE tasks SET etat='o'WHERE id=".$_GET['id'] ;
        // Éxécuter la requete
        $mysqli->query($sql) ;
        break ;
    default:
        # code...
        break;
}

header("Location: index.php") ;


?>