##Greeklish

A simple laravel package that turns greek text to greeklish.
This is for usage mainly on creating slugs.

###Installation:

Add to your composer.json:
```php
"ffy/greeklish": "dev-master"
```
Execute on your console:        
```php
composer update
```

Append to your config/app.php aliases array:
```php
'Greek' => ffy\greeklish\GreeklishFacade::class,
```
    
###usage:
```php
Greek::convert('Ήρθε μια γριά από την πόλη και έφερε τον Χάση-χάση, παναγίτσα μου να χάσει!')
```

more to come...