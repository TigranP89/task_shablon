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
