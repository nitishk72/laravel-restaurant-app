# Laravel Restaurant App

This is Restaurant app build using Laravel as backend framework. This app is using Bootstrap for Styling the webpage. This app has Guest view for Un-Auth users, User View for Customers and admin view to  manage the food items and Orders.

## Get Started

- clone the repo using command `git clone https://github.com/nitishk72/laravel-restaurant-app.git`
- Duplicate the `.env.example` with the name `.env`
- Create a database with name `restaurant`.
- Run the Migration using command `php artisan migrate`

You are now good to go !

## Features

Features could be divided into three section based on the USER ROLE.

#### Guest

- Can View the homepage
- Register
- Login

> Every logged in user is considered as Customer of the website.

#### Customer

- Can view the product(food)
- Add the food to the cart
- Order the food
- can see the Order History
- can see the Order Status

#### Admin

- View the Orders of the customer
- can Cancel the Order of the customer
- can approve the Order of the customer

## Contributing

Please fork this repository and contribute back using
[pull requests](https://github.com/nitshk72/laravel-restaurant-app/pulls).

Any contributions, large or small, major features, bug fixes, are welcomed and appreciated but will be thoroughly reviewed .



## Credit

- [Shubhra Jyoti](https://github.com/Shubhra1028)
- [Nitish Kumar Singh](https://github.com/nitishk72)