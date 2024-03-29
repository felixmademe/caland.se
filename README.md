# caland.se

Website refresh for Caland AB. 

## Installation 

Fetch the project to your machine, either using the GitHub GUI or the command below.

```
git clone https://github.com/felixmademe/caland.se.git
```

Locate the project on your machine via the terminal and follow the steps below.

Install all composer dependencies:

```
composer install
```

Install all NPM dependencies:

```
npm install
```

Copy and generate application key:

```
cp .env.example .env
php artisan key:generate
```

If running Windows:

```
copy .env.example .env
php artisan key:generate
```

Run this to generate CSS and JS files using Vite:

```
npm run dev
```

Run the local development server:

```
php artisan serve
```
