I.XAMPP configuration in Windows for local server.

1. Set Config in httpd-vhost.conf


    <VirtualHost *:80>
        ServerAdmin webmaster@task_shablon.loc
        DocumentRoot "D:/xampp/htdocs/task_shablon/public"
        ServerName task_shablon.loc
        ErrorLog "logs/task_shablon.loc-error.log"
        CustomLog "logs/task_shablon.loc-access.log" common
    </VirtualHost>

2.Config ..\ect\hosts :

    127.0.0.1 task_shablon.loc

II.After clone repository use `composer install` command to install all the dependencies needed for the project.

III.Create console command for create new user, login and generate token(here used Passport Package) when it login

3.For create new user use 

    php artisan user:create {name} {email} {password}

command. Where `name` is user name, `email` is valid email addres and `password` is any six-digit password.
All fields are required.

4.For login and generate token must used

    php artisan user:login {email} {password}

command.Where `email` is an existing email, `password` matches the password of the current email.

IV. Create `GET` and `POST` requests at the same time and return `JSON` object. The entry point is on `http://ask_shablon.loc/api/backend/information` page.

