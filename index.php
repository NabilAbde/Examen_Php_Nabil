<?php //Creation du dispatcher et modification demon fichier person initiale en personne


if (!empty($_GET['action'])) :
    switch ($_GET['action']):

        case 'personne':
            include('views/personne.php');
            break;

        case 'form':
            include('views/form.php');
            break;

        default:
            include('views/404.php');
            break;

    endswitch;
else : include('views/form.php');
endif;
