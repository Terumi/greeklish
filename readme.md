##Greeklish

A simple laravel package that turns greek text to greeklish.
This is for usage mainly on creating slugs.

####Installation:

1. add "ffy/greeklish": "dev-master" to your composer.json
2. do a composer update
3. add this line to your config/app.php aliases array:

       'Greek' => ffy\greeklish\GreeklishFacade::class,
    
####usage:
    Greek::convert('Ήρθε μια γριά από την πόλη και έφερε τον Χάση-χάση, παναγίτσα μου να χάσει!')
    
    