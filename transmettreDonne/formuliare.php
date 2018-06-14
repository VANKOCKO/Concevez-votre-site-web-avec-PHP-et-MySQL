
 <!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title>Formulaire</title>
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="">
     </head>
     <body>
         <!--[if lt IE 7]>
             <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
         <![endif]-->
         

         <!-- Form  -->
         <form action="cible.php" method="post">     
                 <p> 
                     <label for="">Prenom</label>
                       <!-- input text  -->
                     <input type="text" name="prenom" id="">
                 </p>
                 <p>
                     <label for="">description</label>
                      <!-- Textarea  -->
                     <textarea name="description" id="" cols="30" rows="10"></textarea>
                 </p>

                 <p>

                   <!-- selet option -->
                   
                   <select name="choix" id="">
                        <option value="choix1">choix1</option>
                        <option value="choix2">choix2</option>
                        <option value="choix3">choix3</option>
                   </select>
                    
                 </p>
                 <p>
                     <!-- input submit -->                     
                   <input type="submit" value="Valider">
                 </p>

                  <!-- input file -->
         </form>

         <script src="" async defer></script>
     </body>
 </html>