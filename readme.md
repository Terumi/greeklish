##Greeklish

A simple laravel package that turns greek text to greeklish.
This is for usage mainly on creating slugs.

####Installation:

1. On your terminal write composer require ffy/greeklish.
2. do a composer install
3. add this line to your config/app.php aliases array:

       'Greeklish' => ffy\greeklish\GreeklishFacade::class,
    
####usage:
    Greeklish::convert('Ήρθε μια γριά από την πόλη και έφερε τον Χάση-χάση, παναγίτσα μου να χάσει!')
    
    