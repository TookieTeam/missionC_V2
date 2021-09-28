 <?php
 


 if(!isset($_REQUEST['action']))
 $action = 'accueil';
else
$action = $_REQUEST['action'];

switch($action)
{
case 'accueil':
   {
      $mois = $pdo->getMois();
      include("vues/v_periode.php");
      break;
   }

   case 'valider':
      {
         
         $date = $_REQUEST['date'];
         $etape =$pdo->getEtape($date);
         $km =$pdo->getKm($date);
         $nui =$pdo->getNui($date);
         $rep =$pdo->getRep($date);

         include("vues/v_periode.php");
         break;
      }





}


