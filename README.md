persian font asset
==================
persian font asset for yiiframework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require aki/yii2-persian-font-asset:dev-master
```

or add

```
"aki/yii2-persian-font-asset": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \aki\persianfont\BKoodakBoldAsset::register($this); ?>```
```php
<?= \aki\persianfont\YekanAsset::register($this); ?>```
```php
<?= \aki\persianfont\BYekanAsset::register($this); ?>```

