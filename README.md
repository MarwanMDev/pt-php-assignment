# Dynamic Multi-level Category Select Box in Laravel & Ajax

![app preview](/public/preview.png)

## Introduction

A dynamic multi-level category select box is a type of select box that allows users to select a category from a hierarchical list of categories. The select box is populated with data from a database.

## Example

-   Category A
-   Sub A1
    -   Sub Sub A1-1
        -   Sub Sub Sub A1-1-1
    -   Sub Sub A1-2
        -   Sub Sub Sub A1-2-1
-   Sub A2
    -   Sub Sub A2-1
        -   Sub Sub Sub A2-1-1
    -   Sub Sub A2-2
        -   Sub Sub Sub A2-2-1
-   Category B
-   Sub B1
    -   Sub Sub B1-1
        -   Sub Sub Sub B1-1-1
    -   Sub Sub B1-2
        -   Sub Sub Sub B1-2-1
-   Sub B2
    -   Sub Sub B2-1
        -   Sub Sub Sub B2-1-1
    -   Sub Sub B2-2
        -   Sub Sub Sub B2-2-1
-   Category C
-   Sub C1
    -   Sub Sub C1-1
        -   Sub Sub Sub C1-1-1
    -   Sub Sub C1-2
        -   Sub Sub Sub C1-2-1
-   Sub C2
    -   Sub Sub C2-1
        -   Sub Sub Sub C2-1-1
    -   Sub Sub C2-2
        -   Sub Sub Sub C2-2-1

## Database Table Design

| id  |   title    | parent_id |
| --- | :--------: | --------: |
| 1   | Category A |      NULL |
| 2   | Category B |      NULL |
| 3   | Category C |      NULL |
| 4   |   Sub A1   |         1 |
| 5   |   Sub A2   |         1 |
| 6   |   Sub B1   |         2 |

## Dependencies

-   tailwindcss 3.3.3
-   jquery 3.7.1

## Requirements

-   Laravel 10
-   php 8.0

## Installation

1. Clone the repository:

> git clone https://github.com/MarwanMDev/pt-php-assignment.git

2. Install the dependencies:

> composer install

3. Create a database and configure the database connection in .env file.

4. Run the migrations:

> php artisan migrate

5. Seed the database with some data:

> php artisan db:seed

## Usage

1. Go to the http://127.0.0.1:8000/ route.
2. Select a category by clicking on it to expand the different levels of the select box.

## Author

This project was created by Marwan Mostafa
