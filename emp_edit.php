<?php

require_once 'data/_data.php';
$emp_id = 102; // Employ� "par d�faut"
// TODO: Lire et mettre � jour l'id de l'employ� en Query string
if(array_key_exists(PARAM_EMP_ID, $_GET)) {
    $emp_id = $_GET[PARAM_EMP_ID];
}
$liste_employes = get_employes(); // Liste des noms de tous les employ�s
$emp_data = $liste_employes[$emp_id];
$agenda = get_agenda($emp_id);
//var_dump($agenda);
?>
<html>
<head>
    <meta charset = "UTF-8" />
    <title>Agenda Cabinet M�dical</title>
</head>
<body>
<?php require_once('view_bloc/_view_header.php') ?>
<h2>Activit� de l'employ� <?php echo $emp_data['emp_name'] ?> </h2>
<div id="agenda">
    <table>
        <tr><th>Heure</th><th>Activit�</th></tr>
        <?php
        // TODO: Afficher l'agenda de l'employ�


        foreach ($agenda as $heure => $activit� ) {
            echo '<tr><th>',$heure ,'</th><th>' , $activit� , '</th></tr>';
            //var_dump($heure);
            //var_dump($activit�);
        }

        ?>
    </table>
</div>
<?php require_once('view_bloc/_view_footer.php') ?>
</body>
</html>