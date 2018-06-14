<?php 


 /**
  *    Fonction  propre de  php 
  */

       /**
        *  strlen : longueur d'une chaine 
        */

        $phrase = " Bonjour les zero, je suis une phase ! ";

        $longueur= strlen($phrase);

        echo " La phrase ci dessous comporte un nombre de caractere de :  " .$longueur. "</br>".$phrase."</br>";

       
       /**
        *  str_replace : rechercher et remplacer  
        */

        $ma_variable = str_replace('b','p', 'bim bam bom bem');
        echo $ma_variable."</br>";


        /**
         *   str_shuffle : melanger 
         */

         $chaine="cette phrase va etre melanger";
         $chaine=str_shuffle($chaine);
         echo $chaine ."</br>";


        /**
         *   strlower : ecrire en miniscule  
         */

         $mini = "MINISCULE";
         $mini= strtolower($mini);
         echo $mini ."</br>";

        

        /**
         *   date  : recuperer une date  
         */

         $heure= date('H');
         $minute=date('i');
         $jour =date('d');
         $mois = date('m');
         $annee  = date('Y');
         $date = date('d/m/Y :h/i/s');

         echo  " Nous sommes  a l'an : " .$annee."</br>"."du mois de : ". $mois ."</br>"." le jour : " .$jour."</br>"." Heure :  ".$heure."</br>". " Miniute : ".$minute ."</br>";

         echo "La date est : ".$date ."</br>";



 /**
  *    Creer ses  propre fonction en  php 
  */

       function direBonjour($nom){
            
         echo "Bonjour monsieur : " .$nom."</br>"; 

       }


       direBonjour("kocko");



       function volumePyramide($rayon,$hauteur){

                $volume =(1/3)*(3.14)*($rayon)^2*($hauteur); 
                echo " Volume : ".$volume. " Hauteur : ".$hauteur." Rayon : ".$rayon; 
       }

         
       volumePyramide(3,7);
        
?>

