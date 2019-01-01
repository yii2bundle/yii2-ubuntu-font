Установка
===

Устанавливаем зависимость:

```
composer require yii2lab/yii2-ubuntu-font
```

Объявляем зависимость в Asset:

```php
class AppAsset extends AssetBundle
{
	...
	public $depends = [
		...
		'yii2lab\ubuntu_font\assets\UbuntuAsset',
		...
	];
	...
}
```