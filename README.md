# php-template
Local PHP development environment template (nginx, PHP 7.1, MySql 5.5)

[![creativeprojects/php-fpm docker image](http://dockeri.co/image/creativeprojects/php-fpm)](https://registry.hub.docker.com/u/creativeprojects/php-fpm/)

[![License](https://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

This template is based on these 3 containers:
* Official mysql 5.5 database server
* Official PHP 7.1 with Xdebug and all the most common extensions installed
* Official nginx web server

To start developing in PHP, all you need is:
* a text editor or PHP IDE
* a docker platform
* docker-compose
* a clone (or fork) of this project.

To start from a clone, run these commands in a shell:

```
git clone https://github.com/creativeprojects/php-template.git <your_project_name>
cd <your_project_name>
docker-compose up

```

You should see the logs of three containers spinning up. After a few seconds you can open a web browser to the page http://localhost:8080 and see the output of a sample script (the script will test it has access to the database).

Please note if you use docker via virtual box (for older windows and mac OS) you need to browse using the IP of your virtual machine. If you only have one (default) it's probably using the ip 192.168.99.100

You can get the IP of the virtual machine using this command:

```
docker-machine env
```
It's the IP from DOCKER_HOST
