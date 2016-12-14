##Greeklish

A simple laravel package that turns greek text to greeklish.
This is for usage mainly on creating slugs.

####Installation:

1. add this to your composer.json

       "ffy/greeklish": "dev-master"              
2. execute a 
        
       composer update
3. add this line to your config/app.php aliases array:

       'Greek' => ffy\greeklish\GreeklishFacade::class,
    
####usage:
    Greek::convert('Ήρθε μια γριά από την πόλη και έφερε τον Χάση-χάση, παναγίτσα μου να χάσει!')        