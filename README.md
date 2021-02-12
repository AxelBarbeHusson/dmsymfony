# dmsymfony
Technical Requirements
In order to be able to run the application on your workstation, you must install the following dependencies:

Symfony
PHP 7.1 or higher
Composer
Installation
Symfony
Downdload
PHP (recommended)
Install Mamp for MacOS
Install Wamp for Windows
Install Xampp for Linux
Composer
Downdload
Execution
Open a command prompt at the root of the project
Check if your computer meets all requirements $ symfony check:requirements
php bin/console doctrine:database:create
php bin/console doctrine:migration
php bin/console doctrine:migrations:migrate
Run server $ php bin/console server:start
Open a browser at http://localhost:8000
For detailed explanation on how things work, check out Synfony Docs.
