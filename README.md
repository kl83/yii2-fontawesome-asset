# Yii2 FontAwesome asset
[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-fontawesome-asset/v/stable)](https://packagist.org/packages/kl83/yii2-fontawesome-asset)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-fontawesome-asset/downloads)](https://packagist.org/packages/kl83/yii2-fontawesome-asset)
[![License](https://poser.pugx.org/kl83/yii2-fontawesome-asset/license)](https://packagist.org/packages/kl83/yii2-fontawesome-asset)

Font Awesome gives you scalable vector icons that can instantly be customized — size, color, drop shadow, and anything that can be done with the power of CSS.

Project home page http://fontawesome.io/.

## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-fontawesome-asset ~1.0.0
~~~
or add
~~~
"kl83/yii2-fontawesome-asset": "~1.0.0"
~~~
to the require section of your composer.json file.

## Usage

### Adding an asset as a dependence on another asset.
~~~ php
class SomeAsset extends \yii\web\AssetBundle
{
...
  public $depends = [
    'kl83\assets\FontawesomeAsset',
  ];
...
}
~~~

### Adding an asset within a view.
~~~ php
kl83\assets\FontawesomeAsset::register($this);
~~~

## License
MIT License