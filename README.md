yii2-dotdotdot
==============

JQuery DotDotDot Plugin For Yii 2.x

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist harrytang/yii2-dotdotdot "*"
```

or add

```json
"harrytang/yii2-dotdotdot": "*"
```

to the `require` section of your composer.json.

Quick start
-----------

```
    <div class="dot3" style="height: 50px;">
        The main property of Menu is $items, which specifies the possible items in the menu. A menu item can contain sub-items which specify the sub-menu under that menu item.
        <br /><br />
        Menu checks the current route and request parameters to toggle certain menu items with active state.
        <br /><br />
        Note that Menu only renders the HTML tags about the menu. It does do any styling. You are responsible to provide CSS styles to make it look like a real menu.
    </div>

    <?php
    \harrytang\dotdotdot\DotDotDot::widget();
    ?>
```
or
```
    <?php
    \harrytang\dotdotdot\DotDotDot::widget('selector'=>'dot3, 'options'=>['key'=>'value']);
    ?>
```
