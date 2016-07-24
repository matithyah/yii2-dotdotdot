yii2-dotdotdot
==============

JQuery DotDotDot extension for Yii 2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist modernkernel/yii2-dotdotdot "*"
```

or add

```json
"modernkernel/yii2-dotdotdot": "*"
```

to the `require` section of your composer.json.

Usage
-----
Once the extension is installed, simply use it in your code by :

```
<?=
    \modernkernel\dotdotdot\Dotdotdot::widget([
        'tag'=>'p', // content tag
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', // your full content here
        'options'=>['style'=>'height: 50px; width: 200px'], // tag options
        'clientOptions'=>[] // dotdotdot configuration options, see http://dotdotdot.frebsite.nl/
    ])
?>
```
