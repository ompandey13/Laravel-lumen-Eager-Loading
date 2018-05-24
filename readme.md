# Lumen PHP Framework

# Laravel-lumen-Eager-Loading
Laravel-lumen-Eager-Loading

## Introduction ##
Laravel uses Eloquent ORM for database operations.
One can use DB Raw queries if familiar with.
If you are working on the small data set, Eloquent ORM is very helpfull tool. Eloquent ORM gives important features which are important for building applications
> * Readability
> * Maintainability

Also using an ORM means you are also much more secure by default (you don't need to worry about escaping user input.etc. as it's already taken care of).
But you should be worrying about performance issues in respect to ORMs if and when you encounter them.

By default ORM's `lazy` load data as they don't know your intension of task. Actually Nobody wants to use related models data after quering the model.

The Eloquent ORM interacts with a database using Active Record implementation.

In this project I am digging into eloquent ORM, how it works `eager loading` and `lazy loading` internally.

