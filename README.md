# Captcha @iaematt

[![Maintainer](http://img.shields.io/badge/maintainer-@iaematt-blue.svg?style=flat-square)](https://github.com/iaematt)
[![Source Code](http://img.shields.io/badge/source-iaematt/captcha-blue.svg?style=flat-square)](https://github.com/iaematt/captcha)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

##### This component is a simple captcha image generator

Esse componente é um simples gerador de imagem captcha.

# Installation

Captcha is available via Composer:

```bash
"iaematt/captcha": "1.0.*"
```

or run

```bash
composer require iaematt/captcha
```

# Documentation

##### For details on how to use the component, see the sample folder with details in the component directory.

Para mais detalhes sobre como usar o componente, veja a pasta de exemplo com detalhes no diretório do componente.

@generate

```php
$captcha = new \iaematt\Captcha\Generate();
$captcha->render();
```

@verify

```php
$captcha = new iaematt\Captcha\Verify();
$post = $_POST;
if ($captcha->compare($post['captcha'])) {
    echo 'The code is correct';
}
```

@generate using custom font and font size

```php
$captcha = new \iaematt\Captcha\Generate();
$captcha->setFontFamily(__DIR__ . '/fonts/roboto.ttf');
$captcha->setFontSize(35);
$captcha->render();
```

# Contributing

Please see [CONTRIBUTING](https://github.com/iaematt/captcha/blob/master/CONTRIBUTING) for details.

# Support

##### Security: if you discover any security related issues, please e-mail matheusbastos@outlook.com instead of using the issue tracker.

Se você descobrir algum problema relacionado à segurança, envie um e-mail para matheusbastos@outlook.com em vez de usar o rastreador de problemas.

# Credits

-   [Matheus Bastos](https://github.com/iaematt) (Developer)

# License

The MIT License (MIT). Please see [License File](https://github.com/iaematt/captcha/blob/master/LICENSE) for more information.
