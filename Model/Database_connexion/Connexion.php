<?php
/**
 * Created by PhpStorm.
 * User: marcelinsakou
 * Date: 20/05/2016
 * Time: 12:55
 */

class Connexion {


   public static function affiche(){
       $date = new DateTime();
       echo $date->format('d/m/Y');
   }

}

echo "bonjour storm"."<br>";

Connexion::affiche();

echo "          bonjour storm2";
