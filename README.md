# Scaffold Code Challenge 2024 - Tom Dalgleish

Task: Your task is to create a Laravel project from scratch that implements a simple
e-commerce-like application. You are required to set up the project and implement
the specified features using Laravel best practices.

## Project Plan

- Setup project on latest Laravel version 11 ✅
- Ensure git repository is created and connected ✅
- Set up Laravel Sail to enable project to be served through portable Docker containers ✅
- Install Laravel Backpack  ✅
- Create migrations:
- Products (Id, name, slug, price, description, category_id) ✅
- Categories (Id, name, slug, parent_id) ✅
- Create Models and relationships ✅
- Create seeding / factories with Mock ✅
- Create product index page (ProductController_index) ✅
- Create product individual view (ProductController_show) ✅
- Create category filters ✅
- Create subcategory filters ✅
- Sort by name/price ascending/descending - preferably AJAX ✅
- Search bar ✅
- Add images to products ✅
- Responsiveness ✅


## Getting started

<ol>
    <li>Clone the project</li>
    <li>Go to the folder application in termial</li>
    <li>Run composer install</li>
    <li>Copy .env.example file to .env on the root folder</li>
    <li>Run php artisan key:generate</li>
    <li>Start containers -  ./vendor/bin/sail up</li>
    <li>Access container in another terminal -  ./vendor/bin/sail shell</li>
    <li>Within container terminal:</li>
    <ul>
        <li>Run php artisan migrate --seed</li>
        <li>Run npm install</li>
        <li>Run npm run dev</li>
    </ul>
    <li>Finally, go to localhost/admin, create an account to perform CRUD on products and categories</li>
</ol>

## Technology Justification

### Laravel Sail

Laravel Sail leverages Docker to provide a containerised project, making compatibility issues less likely. As this project will be handed over to Scaffold, it made sense to run it using container technology.

### Laravel Backpack

I have chosen to use Laravel Backpack in this project as it will provide a user friendly way of controlling products and categories from an admin panel.

Also, this comes with in-built authentication out the box, which will be used for an administrator account, and could be used for creating customer accounts in the future.

### Vite + Sass

Vite is the preferred method of asset compilation for Laravel in 2024, a modern framework that is faster than it's predecessor Laravel Mix.

Sass is Vite's preffered styling framework - something I have worked with in the past and the most natural coupling with Vite.













