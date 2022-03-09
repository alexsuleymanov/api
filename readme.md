<h3>ASweb Api</h3>

<div>

<p> Очень простой класс для GET и POST запросов к API</p>

## О библиотеке <a name = "about"></a>

Библиотека для Фреймворка ASCommerce. Может быть использована отдельно

## Установка и начало работы <a name = "getting_started"></a>


### Установка

Рекомендуется установка через Composer:

```
composer require alexsuleymanov/api
```

- Imageresizer совместим с PHP 8.0 to 8.1
- Imageresizer совместим с PHP 7.0 до 7.4
- Imageresizer совместим с PHP 5.4 до 5.6


### Использование

Выполнение GET запросов
```
$result = Api::get($addr);
if ($result) {
    /* Если $result не null, то работаем с ответом */
}
```

<br>

Выполнение POST запросов
```
$params = ["param1" => "value1", "param2" => "value2"];
$result = Api::post($addr, $params);
if ($result) {
    /* Если $result не null, то работаем с ответом */
}
```

## Авторы <a name = "authors"></a>

- [@alexsuleymanov](https://github.com/alexsuleymanov) - Alex Suleymanov
