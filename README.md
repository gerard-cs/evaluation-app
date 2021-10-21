## Evaluation App

Evaluation App is an evaluation system that consists of 10 multiple-choice questions, of which only one is correct.

The system was developed with Laravel 8 and the information is stored in a MySQL database. 

You can test the app [here](https://phplaravel-676291-2222514.cloudwaysapps.com/). 

User is required to use the app. You can register [right here](https://phplaravel-676291-2222514.cloudwaysapps.com/register).



## Getting started

- Clone the app `git clone git@github.com:gerard-cs/evaluation-app.git`.

- Execute `./vendor/bin/sail up` in order to create the required Docker containers.

- Copy `.env.example` file to `.env`.

- Edit `.env` according to your own database credentials.

- Run Migrations with `./vendor/bin/sail artisan migrate --seed`.

- Open your browser in `http://localhost/`.

### Flow chart

![image](https://user-images.githubusercontent.com/4725659/138207358-baeb8f0f-5fc8-42a7-a572-646a466b73c9.png)