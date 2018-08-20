# Hacker News With Laravel 5.5

Trabalho realizado para a FluxoTI como requisito para a posição de Programador PHP Full Stack. Esse projeto é o Backend do sistema, uma aplicação usando o framework Laravel que consulte a API do <a href="https://github.com/HackerNews/API" target="_blank">HackerNews</a>.

A aplicação implementa a consulta dos recursos: Item, User, Stories [Top, New, Best].

## Como instalar
1 - O primeiro passo é confirmar se o PHP 7.0 ou maior, o cliente git e o <a href="https://getcomposer.org/" target="_blank">composer</a> estão instalados e funcionando no computador.

2 - Clonar este repositório:

\$ git clone https://github.com/saulobr88/hnl5.git

3 - Instalar as dependencias usando o Composer (tenha certeza de que o composer está instalado e que está no PATH do sistema operacional), no exemplo a pasta com o código fonte é hnl5:

\$ cd hnl5

\$ composer install

O composer fará o download e instalação dos pacotes do projeto, que estão indicados no arquivo composer.json

Se tudo der certo, será criada a pasta "vendor" dentro da pasta do projeto.

4 - Criar o arquivo .env e criar a chave para o Laravel:

\$ cp .env.example .env

\$ php artisan key:generate

## Como executar
Se tudo funcionou na fase de instalação agora basta executar o comando:

\$ php artisan serve

Para subir um mini servidor HTTP utilizando o artisan do Laravel, utilizando o servidor imbutido do PHP.

### Testes com o PHPUnit
O Laravel traz o PHPUnit e alguns métodos para realização de testes automatizados, com o Test Driven Development (TDD) em mente, criei alguns pequenos testes HTTP para certificar de que a aplicação está funcionando corretamente.

1 - Para executar os testes:

\$ vendor/bin/phpunit

2 - Para listar os testes disponíveis:

\$ vendor/bin/phpunit --list-tests

3 - Para executar o teste com a saída mais detalhada:

\$ vendor/bin/phpunit --debug

Ou

\$ vendor/bin/phpunit --testdox

4 - Para executar somente um método de teste:

\$ vendor/bin/phpunit --filter test_nome_do_method

Por exemplo:

\$ vendor/bin/phpunit --filter testApiRoot

### Mais informação sobre a instalação e execução
Todos os passos acima estão descritos na <a href="https://laravel.com/docs/5.5/installation" target="_blank">documentação do Laravel</a>, incluindo configurações específicas para sevidores Apache e Nginx, permissões e acesso a pasta public.

<hr>
<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
