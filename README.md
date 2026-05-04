Oil Change Checker (Laravel): 
A simple laravel application that determines whether a car is due for an oil change based on mileage and time.

Requirements:
1. PHP 8.2+
2. Composer
3. SQLite

Features: 
1. Form input for:
    Current odometer
    Previous odometer
    Data of last oil change
2. Validation:
    All fields are required
    Current odometer must be >= to previous odometer
    Date must be in the past
3. Business logic:
    Oil change is required if
        More than 5000 km driven
        More that 6 months have passed

4. Saves each submission in database
5. Unique result page per submission

Setup Instructions
1.  Clone the repository
```bash
   git clone
   cd
```
2. Install dependencies
```bash
   composer install
```
3. Set up environment
```bash
   cp .env.example .env
   php artisan key:generate
```
4. Configure SQLite
In your '.env' file, ensure that database is set to SQLite:
    DB_CONNECTION=sqlite
Then create the database file:
```bash
   touch database/database.sqlite
```
5. Run Migrations
```bash
   php artisan migrate
```
6. Start the app
```bash
   php artisan serve
```

Visit [http://localhost:8000](http://localhost:8000)

Rules:
A car is required an oil change if:
1. Driven more than 5000 km since last oil change 
OR
2. More than 6 months since last oil change

Results are saved to the database and accessible via a unique URL, so they persist on page refresh
