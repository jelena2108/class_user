<?php
class User
{
     public $user;
     public $first_name;
     public $last_name;
     public $age;
    
    public function __construct($user,$first_name,$last_name,$age){
       $this->user=$user;
       $this->first_name=$first_name;  
       $this->last_name=$last_name;
       $this->age=$age;
        
    }
    public function name(){
       return $this->first_name . " ".$this->last_name . "<br>";
    }
    public function age(){
        if($this->age >=18){
         return "Korisnik je punoletan.";
    }else{
        return "Korisnik je maloletan.";
    }
    }
}
$person=new User("luka","Luka","Marković",34);

?>
<html lang="sr">
    <head>
        <title>Klasa Korisnik</title>
        <meta charset="UTF-8">
        <link href="style.class.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="wrapper">
            <main>
              <h1><?php echo $person->name(); ?></h1>
              <h2><?php echo $person->age(); ?></h2> 
            </main>
        </div>
    </body>
</html>