Install all the dependencies :
=> composer install

To run the project :

Go to the project folder and run the command in commandline:

=> php artisan serve


Create database namely testdb.

To run all  outstanding migrations, execute the migrate Artisan command:

=>php artisan migrate

To add the data when the database is empty : 

=> php artisan db:seed --class=SamplesTableSeeder

For unit test, run the following command.

=> Composer test 

Commands used in the project : 

1) Model creation:

=>php artisan make:model Item -m

2) Controller creation

=>php artisan make:controller ItemController


3) Test the project by unit test from commandline(Optional)
=> .\vendor\bin\phpunit

4) Create the Test file for Unit testing:

=> php artisan make:test Feature/FirstTest

5) Create Faker for Data insertion:

=> php artisan make:seeder CategoryTableSeeder



File created or modified.
=================================
=> All Migration Files
=>.env file for database name change.
=> routes/api.php

Model Files

=> Item.php
=>Category.php
=>Bid.php

Controller Files

=>ItemController.php
=>CategoryController.php
=>BidController.php

Test cases
=>FirstTest.php
=>Testcase.php

Seeder Files

=>SampleFactory.php
=>SamplesTableSeeder.php

Postman collection added to the root folder.We can just import the API's and run the web service.(File name : api_collection)