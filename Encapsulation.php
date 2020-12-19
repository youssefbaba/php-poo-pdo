<?php
//Encapsulation.php

/*
Class and Object 
    -Class is a Design That I can Create Object
    -Object is a member in The Main Application
    -Class Has Properties and Methods
    -Variable Inside Class  = [Property]
    -Variable Outside Class = [Variable]
    -Function Inside Class  = [Method]
    -Function Outside Class = [Function]
    -[ class ] = Class Keyword
    -[ public , private , protected] = Visibility Markers  
    -[ new ] = new  Object Keyword
    -[ -> ] = Object Operator
    -[ $this ] = Pseudo variable [ Ref to Object Properties ]
    -[ :: ] =  Scope  Resolution Operator [ Paamayin Nekudotayin ] = Double Colon

Web Application Registration
    -Class          =Code To Add New Member 
    -Objet          =The Member
    -Application    =Web Application Registration

Blog System 
    -Class          =Code To Add New Post ,News , Article , Information 
    -Object         =Post ,News , Article , Information
    -Application    =Blog System


self Vs $this  
    self :
    -Refer To Current Class
    -Access Static Members
    -Not Use ($) Because Its Not  Represent Variable But Present Class Construction 


    $this :
    -Refer To Current Object 
    -Access Not Static Members 
    -Use ($)  Because It Represent a Variable 


Encapsulation




*/

class AppleDevice {
    
       //Properties  : Visibility Markers of Property [public , private , protected]
       public $ram          = "8GB";
       public $inch         = "6 inch";
       public $space        = "40GB";
       public $color        = "Blue";
       public $price        = 1100;
       private $password     = "youssef12";


       //Methods
       public function changeSpecification($ram , $inch , $space ,$color ,$price )
       {
          $this->ram    = $ram ;
          $this->inch   = $inch ;
          $this->space  = $space ;
          $this->color  = $color ;
          $this->price  = $price ; ;
           
       }
       public function changePassword($password)
       {
           $this->password = sha1($password) ;
       }
       

     
}


$iphone6plus = new AppleDevice();
$iphone6plus->changeSpecification("4GB" ,"5 inch", "32GB", "Gold" ,1000);
$iphone6plus->changePassword("yousssef@4567578");
 //echo $iphone6plus->password;  // error :Cannot access private property $password
// $iphone6plus->password = "youssefbaba124"); //error :Cannot access private property $password
// echo $iphone6plus; //error :Cannot access private property $password


echo "<pre>";
var_dump($iphone6plus);
echo "</pre>";




$iphone7plus = new AppleDevice();
$iphone7plus->changeSpecification("6GB" ,"6 inch" ,"64GB","Red",1200 );


echo "<pre>";
var_dump($iphone7plus);
echo "</pre>";


$iphone = new AppleDevice();
echo "<pre>";
var_dump($iphone);
echo "</pre>";






?>
