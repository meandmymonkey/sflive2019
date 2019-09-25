Symfony Upgrade Workshop
========================

The "Symfony Demo Application" is a reference application created to show how
to develop Symfony applications following the recommended best practices.
We will step through the update path and learn how to upgrade this application step by step from Symfony 2.X to Symfony 4.X


Requirements
------------

Choose one:

#### PHP Setup on your computer

  * PHP 7.x or higher;
  * PDO-SQLite PHP extension enabled;
  * and the [usual Symfony application requirements](http://symfony.com/doc/current/reference/requirements.html).
  * composer (any version)

#### Alternative Docker Setup

  * latest version of docker and docker compose

Getting this app started 
------------

There are two different ways to get this app started, depending on what setup you are working on: 

  1. PHP Installation on your computer as mentioned in `Requirements`
  2. Docker-Setup

Follow these steps and you should see a working app when you browse `http://localhost:5000`.

#### PHP Setup on your computer

  0. Go to the root directory of this project
  1. `composer install` (If there are errors, fix them or ask the trainer for help) 
  2. `php -S localhost:5000 -t web/`

#### Docker Setup

  0. Go to the root directory of this project 
  1. `docker-compose up -d`
  2. `docker-compose exec php bash`
  3. `composer install`
  4. `php -S 0.0.0.0:5000 -t web/`
 
Troubleshooting
-----
Note:

The setup is tested on macOS and Linux/Unix.
If you have a Windows PC you should consider using a virtual mashine for this workshop with a standard Debian or Ubuntu.
I will try to provide some help as far as I can, but I have confidence in your problem solving skills too. 
Maybe your mates around you can help as well. :)

##### My PHP on my computer corrupted in any way. What should I do?

You should consider the docker setup or uninstall php from your computer completely and start again.
You may get outdated packages depending on which OS you are working on. 
Type `php --version` to check the current version of your php installation.
Type `php -m` to check your installed extensions/modules.

##### My docker setup won't mount my files into the container! What should I do?

First, check if you have the latest version of docker. 
Second, if you work on macOS, there are specific folders that are available for mounting.
Your home directory is a standard directory for docker. You may move your project to your home directory.




