## Voyager Admin | Voyager Frontend | Voyager Theme


- [Voyager Admin](https://docs.laravelvoyager.com/getting-started/installation).
- [Voyager Frontend](https://github.com/pvtl/voyager-frontend).
- [Voyager Frontend](https://github.com/thedevdojo/voyager-themes).

### Prerequisites

- PHP >= 7.1.3
- Node & NPM
- Composer
- [Laravel Requirements](https://laravel.com/docs/installation)

### 1. Install Laravel + Voyager Admin

__1.1 Install Laravel__

    composer create-project --prefer-dist laravel/laravel PROJECT_NAME
    
__1.2 Require Voyager__
    
    composer require tcg/voyager
    
__1.3 Copy .env.example to .env and update the DB & App URL config__

- Copy .env file   

    ```bash
    cp .env.example .env 
    ``` 
      
- Setting URL and Database 

     ```bash
    APP_URL=http://localhost
    
    DB_HOST=localhost
    
    DB_DATABASE=homestead
    
    DB_USERNAME=homestead
    
    DB_PASSWORD=secret  
    ```
       
__1.4 Install Voyager__

- Install Voyager without dummy

    ```bash
    php artisan voyager:install
    ```
 
 - Install Voyager with dummy
 
    ```bash
    php artisan voyager:install --with-dummy
    ```
    
    Finally, we can install Voyager. You can choose to install Voyager with dummy data or without the dummy data. The dummy data will include 1 admin account (if no users already exist), 1 demo page, 4 demo posts, 2 categories and 7 settings.
 
        credentials:
           
        email: admin@admin.com
     
        password: password
    
###2. Install Voyager Frontend

__2.1 Require Voyager Frontend__

    composer require pvtl/voyager-frontend
 
__2.2 Install Npm packages__
 
    npm install
        
__2.3 Build the front-end theme assets__

    npm run dev
    
__2.4 Installer Voyager Frontend__

    composer dump-autoload && php artisan voyager-frontend:install

__2.5 Set the Laravel search driver in your .env__

    echo "SCOUT_DRIVER=tntsearch" >> .env
