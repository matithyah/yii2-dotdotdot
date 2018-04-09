yii2-dotdotdot
==============

JQuery dotdotdot extension for Yii 2

Licensing
---------

Before using this code & corresponding code, check your licensing of dotdotdot at http://dotdotdot.frebsite.nl/
This is a fork of a no-longer listed repository.


Installation
------------

This code is not publically listed via composer's packagist. It's designed to be hooked up as a composer package.

Usage
-----
Once the extension is installed, simply use it in your code by :

```
<?=
    \matithyah\dotdotdot\Dotdotdot::widget([
        'tag'=>'p', // content tag
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', // your full content here
        'options'=>['style'=>'height: 50px; width: 200px'], // tag options
        'clientOptions'=>[] // dotdotdot configuration options, see http://dotdotdot.frebsite.nl/
    ])
?>
```
