##Greeklish

A simple laravel package that turns greek text to greeklish.
This is for usage mainly on creating slugs

####Installation:
composer require('ffy/greeklish')
and then add this line to your config/app.php aliases array:

    'Greeklish' => ffy\greeklish\GreeklishFacade::class,
    
####usage:
    Greeklish::convert('Ήρθε μια γριά από την πόλη και έφερε τον Χάση-χάση, παναγίτσα μου να χάσει!')
    
    