<?php
//Inheritance.php

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
        public $screne       = "LCD";



    //Methods
    public function changeSpecification($ram , $inch , $space ,$color ,$price )
    {
        $this->ram    = $ram ;
        $this->inch   = $inch ;
        $this->space  = $space ;
        $this->color  = $color ;
        $this->price  = $price ; 
            
    }
 


}


class Sony extends AppleDevice {
    
    //Properties  : Visibility Markers of Property [public , private , protected]
        public $camera       = "32MB";


    //Methods
    public function changeSpecification1($ram , $inch , $space ,$color ,$price , $camera )
    {
        $this->ram    = $ram ;
        $this->inch   = $inch ;
        $this->space  = $space ;
        $this->color  = $color ;
        $this->price  = $price ; 
        $this->camera = $camera;
            
    }    



}



$iphone6plus = new AppleDevice();
$iphone6plus->changeSpecification("4GB" ,"5 inch", "32GB", "Gold" ,1000);
echo "<pre>" . print_r($iphone6plus ,true) . "</pre>";


$sony1 = new Sony();
$sony1->changeSpecification1("6GB" ,"6 inch", "30GB", "Red" ,900 ,"25MB");
echo "<pre>" . print_r($sony1 ,true) . "</pre>";
