# Quaxar Php with Laravel Chanllenge

Welcome!

In this test, you will have to prove your full stack skills' worth, by building a CRUD and an API which has to meet certain criteria.

Read carefully the instructions, as they contain all the details regarding this evaluation.

- PHP >= 7.2.5
- Laravel 7.xx

## Your challenge

You need create a login for the CRUD and consume the API, this means your main page is a login page. For create the authentication you can use  **Auth method of Laravel**. You can set by console the users for authenticate but if you create seeders It's gonna be a extra credit. 

### CRUD

You need consume and Marvel's API [here](https://developer.marvel.com/) for some information of the users like favorite character and favorite comic.

The user should have the next information:

- Id
- Name
- Last Name
- Gender
- Age
- Created date
- Updated date

And personal information like:

- City
- State
- Country
- Favorite Marvel character
- Favorite Marvel comic
- Created date
- Updated date

The user data should be normalize in two tables and you should create the route, migrations and model for both.

You need show a basic interface but not the default interface provided, you need to use a look and feel library like Bootstrap, Tailwind or other you prefer.

You have to use **snake_case** notation.

### API

For the API you'll need replicate the actions of the CRUD (create, read, update and delete) and the response should be in JSON. 

You need create exceptions each case (errors, not match, etc)

### HTTP Request

For consume the Marvel's API you can use **Guzzle HTTP Client** 
The documentation for Guzzle can be found [here](https://docs.guzzlephp.org/en/stable/)

## Extra Credit

If you create a Dockerfile for emule the project this will be a extra credit.

## Settings

For this to work you need to install MySQL or MariaDB database in your computer and start a server.

You'll need PHP >= 7.2.5 and Laravel 7.xx

Clone the project, and create your own project in Github, this should be public. Use any name you'd like. We recommend you using something like `{name}_laravel_solution`. For evaluation you'll share your repository to **fmartinez@quaxar.com** with copy to **cmijangos@quaxar.com and eovalle@quaxar.com**

You have **24 hours** to finish this task. Good luck, and may the force be with you.

If you come up with ANY doubts, do NOT hesitate to ask, as you have limited time to finish. As soon as you don't understand somethig, please just ask.
