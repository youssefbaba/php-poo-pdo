<?php
//index.php

/* Class and Object 
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


self   Vs $this  
    self :
    -Refer To Current Class
    -Access Static Members
    -Not Use ($) Because Its Not  Represent Variable But Present Class Construction 


    $this :
    -Refer To Current Object 
    -Access Not Static Members 
    -Use ($)  Because It Represent a Variable 







*/

class AppleDevice {
    
       //Properties  : Visibility Markers of Property [public , private , protected]
       public $ram = "8GB";
       public $inch = "6 inch";
       public $space = "40GB";
       public $color = "Blue";
       public $price = 1100;
       public $ownerName = "Bob" ;

       //Constants
       const OWERNAME =  5 ;


       //Methods
        public function getSpecification()
            {
                echo "This Iphone Ram is  " . $this->ram ." And Inch is ".$this->inch. " And Space  is ".$this->space ." And Color is ".$this->color ." And Price is ".$this->price ."</br>" ;
            }      

    //    public function setOwnerName($owner)
    //    {
    //        if (strlen($owner) <br 3) {

    //         echo " Owner Name Cant Be Less Than 3 Chars " ;
               
    //        }else{
    //            echo "Your Name Has Been Set";
    //        }
           
    //    }

        public function setOwnerName()
            {
                if (strlen($this->ownerName) < self::OWERNAME) { //To Get A Constant Inside A Class
 
                    echo " Owner Name Cant Be Less Than ".self::OWERNAME." Chars </br> " ;
                    
                }else{
                    echo "Your Name Has Been Set </br>";
                }
                
            }


     
}

$iphone6plus = new AppleDevice();
$iphone6plus->ram = "4GB";
$iphone6plus->inch = "5 inch";
$iphone6plus->space = "32GB";
$iphone6plus->color = "Gold";
$iphone6plus->price = 1000;
$iphone6plus->ownerName = "Lo";
$iphone6plus->getSpecification();
$iphone6plus->setOwnerName();
echo AppleDevice::OWERNAME . "<br/>" ; // To Get A Constant Outside A Class
echo $iphone6plus::OWERNAME; // To Get A Constant Outside A Class
echo "<pre>";
var_dump($iphone6plus);
echo "</pre>";



$iphone7plus = new AppleDevice();
$iphone7plus->ram = "6GB";
$iphone7plus->inch = "5,5 inch";
$iphone7plus->space= "64GB";
$iphone7plus->color = "Red";
$iphone7plus->price = 1200;
$iphone7plus->ownerName = "Alyse";
$iphone7plus->getSpecification();
$iphone7plus->setOwnerName();
echo "<pre>";
var_dump($iphone7plus);
echo "</pre>";


$iphone = new AppleDevice();
$iphone->getSpecification();
$iphone->setOwnerName();
echo "<pre>";
var_dump($iphone);
echo "</pre>";
