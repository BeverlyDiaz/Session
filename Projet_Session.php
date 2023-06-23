    <?php 
        session_start();
     // VERIFIER LE PSEUDO

        if (!empty($_POST['pseudo'])) { 

            $pseudo = $_POST['pseudo'];

            $_SESSION['pseudo'] = $pseudo;

        }
    ?>

   <!DOCTYPE html>
   <html lang="fr">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Projet_Session</title>

   </head>
   <body>

     <!--FORMULAIRE-->

       <h1>Entrez votre pseudo</h1>

           <form method="post" action="Projet_Session.php">
               <table>
                   <tr>
                       <td>Pseudo</td>
                       <td><input type="text" name="pseudo" id="pseudo"></td> 
                   </tr>
               </table>
                       <button type="submit">Se connecter</button>
            </form>
   </body>
   </html>
    <?php

        if(!empty($_SESSION['pseudo'])) {

            echo '<h2> Bienvenue '.htmlspecialchars($_SESSION['pseudo']).'<h2>';

        }
    ?>