Olá professor Rafa, estou deixando essa mensagem para alertar que o código fonte que utilizei exige uma instalação, e os passos estão abaixo. Nota: Eu não consegui fazer a instalação em máquinas que não tinham senha para o usuário root da database. Caso não consiga fazer a instalação, deixei prints de telas em uma pasta no diretório com o que foi feito. Algumas mudanças serão feitas ao front até a entrega do sistema. Peço perdão pelo atraso. Giovanni Zini 3 Info.

my little forum
===============

<a href="https://mylittleforum.net/">my little forum</a> is a simple PHP and MySQL based internet forum that displays the messages in classical threaded view (tree structure). It is Open Source licensed under the GNU General Public License. The main claim of this web forum is simplicity. Furthermore it should be easy to install and run on a standard server configuration with PHP and MySQL.

* <a href="https://github.com/ilosuna/mylittleforum/wiki">More about my little forum</a>
* [Demo and project discussion forum](https://mylittleforum.net/forum/)

System requirements
-------------------

* Webserver with PHP >= 7.3 and MySQL >= 5.5.3

Installation
------------

1. Unzip the script package.
2. Upload the complete folder "forum" to your server.
3. Depending on your server configuration the write permissions of the subdirectory templates_c (CHMOD 770, 775 or 777) and the file config/db_settings.php (CHMOD 666) might need to be changed in order that they are writable by the script.
4. Run the installation script by accessing yourdomain.tld/forum/install/ in your web browser and follow the instructions.
5. Remove the directory "install" from your installation of My Little Forum.
6. Change the write permissions for config/db_settings.php to (CHMOD 440), what prevents reading the files content for unauthorised users
