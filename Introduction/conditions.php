<?php
   

   /**
    *   Les conditions 
    */



         /**
          *  if  
          */


          $age = 8;

          if($age <= 12){
               
             echo "Salut les gamins, Bienvenu sur mon site !" ."</br>";
          }
          else{

              echo "Ceci est une site pour enfants, vous etes trop vieux pour entrer. Aurevoir"."</br>"; 
          }
         
         
         /**
          *   test sur avec des variables de type String
          **/ 

         $autorisation_entrer="Oui";
         
         if( $autorisation_entrer="Oui")
         {
            echo "Vous pouvez entrer !" ."</br>";
         }
         elseif($autorisation_entrer="Non"){


            echo "Vous pouvez pas entrer !" ."</br>";

         }
         else{

             echo "Aucune info  !" ."</br>";

         }
     

         /**
          *   test sur avec des variables de type bolean
          **/ 

          $autorisation_bol=false;
         
          if( $autorisation_bol=true)
          {
             echo "Vous pouvez entrer !" ."</br>";
          }
          elseif($autorisation_bol=false){
 
 
             echo "Vous pouvez pas entrer !" ."</br>";
 
          }
          else{
 
              echo "Aucune info  !" ."</br>";
 
          }


          /**
          *   test sur avec des variables de type int 
          **/ 
          
          $autorisation_int=0;
         
          if( $autorisation_int=0)
          {
             echo "Vous pouvez entrer !" ."</br>";
          }
          elseif($autorisation_int=1){
 
 
             echo "Vous pouvez pas entrer !" ."</br>";
 
          }
          else{
 
              echo "Aucune info  !" ."</br>";
 
          }
      

         /**
          *    different ! 
          * */ 

         $autorisation_diff =true;

         if( !($autorisation_diff)){
               
            echo "Vous ne pouvez pas entrez"."</br>";

         } 


        /**
          *    condition multiple! 
          * */ 

        $age= 7;
        $langue = "anglais";

        if($age <=12 && $langue == "francais"){
                
            echo "Bienvenue sur mon site"."</br>"; 
        }
        else if($age <=12 && $langue == "anglais"){
                 
              echo "Welcome to my website"."</br>";
        }



         /**
          *    Switch 
          * */

          $Ascenceurs = 10;

          switch($Ascenceurs)
          {
             case 0 :
                echo  "Niveau 0";
             break;  
             
             case 1 : 
                echo  "Niveau 1";
             break;   

             case 2 :
                echo  "Niveau 2";
             break;   

             case 3 : 
                echo  "Niveau 3";
             break;  

             case 4 :
                echo  "Niveau 4";
             break;   

          }  




         /**
          *    Les conditions ternaires 

          *    syntaxe : () ? condition1 : condition 2  
          * */

          $ages= 30;

                /**
                 *     ternaire en commentant avec les string 
                 */

                echo  ($age >= 18 ) ? "Il est majeur" : " il est mineur" ."</br>";
                
                /**
                 *     ternaire en commentant avec les  bool 
                 */

                echo  ($age >= 18 ) ? true : false  ;
                
          

?>