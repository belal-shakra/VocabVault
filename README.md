# VocabVault

<img src="public/assets/img/VocabVault-poster.png">


**Created By :** Belal Shakra
**Email :**


## Overview

VocabVault is a website that provides the users to add a vocabularies with its meaning in other language, pronunciation, other word that pronuncite like it, and any more details. 

The user can create, update, show, and delete a word. He can display words by its first letter, and search about it.
Also he can save the word to saved word. In addition, he can display the word in google translate with its full details.

certainly the user can edit his profile, and delete it.


### Future Work
1- Give the user an ability to create a workspace for a certain goal (a course for example). And he can creates a categories inside this workspace to categorize his words as he like.



## Installation

To get started, clone this repository.

```
git clone git@github.com:belal-shakra/VocabVault.git
```

Next, configure your Database connection in `.env` file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR-DATABASE-NAME
DB_USERNAME=YOUR-DATABASE-USERNAME
DB_PASSWORD=YOUR-DATABASE-PASSWROD
```

## Run Packages and helpers

You have to all used packages and load helpers as below.

```
composer install
npm install
npm run build
```

## Generate new application key

You have to generate new application key as below.

```
php artisan key:generate
```

## Run Seeders

You have to run seeders as below.

```
php artisan db:seed --class=LetterSeeder
```

## Run Migrations

You have to run all the migration files included with the project and also run seeders as below.

```
php artisan migrate
```
