# Voyager Admin | Voyager Frontend | Voyager Theme

### References

- [Voyager Admin](https://docs.laravelvoyager.com/getting-started/installation).
- [Voyager Frontend](https://github.com/pvtl/voyager-frontend).
- [Voyager Frontend](https://github.com/thedevdojo/voyager-themes).

### Prerequisites

- PHP >= 7.1.3
- Node & NPM
- Composer
- [Laravel Requirements](https://laravel.com/docs/installation)

## 1. Install Laravel + Voyager Admin

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
    
## 2. Install Voyager Frontend

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
    
## 3. Install Voyager Theme

__3.1 Install larapack/hooks__

    composer require larapack/hooks
    
    config/app.php
    'providers' => [
        ...
        Larapack\Hooks\HooksServiceProvider::class,
        ...
    ]
    
__3.2 Install voyager-themes hook__
    
    php artisan hook:install voyager-themes
    
    config/app.php
    'providers' => [
        ... 
        VoyagerThemes\VoyagerThemesServiceProvider::class,
        ...
    ],

__3.3 Comment [user/api] route__

    routes/api.php
    /*Route::middleware('auth:api')->get('/user', function (Request $request) {
        return $request->user();
    });*/
  
__3.4 Change VoyagerThemesServiceProvider.php file__
   
   line 106 in vendor/voyager-themes/src/VoyagerThemesServiceProvider.php 
    
    $router->get('themes/options', $namespacePrefix.'ThemesController@index');
    
    // $router->get('themes/options', function () {
    //      return redirect(route('voyager.theme.index'));
    // });
   
__3.5 Change helpers.php file__
   
   line 17 in vendor/voyager-themes/src/helpers.php 
    
    $dataTypeContent = (object)["id" => 0, $key => $content]; 
    
    // $dataTypeContent = (object)[$key => $content];
    
__3.6 Publish a config__

    php artisan vendor:publish
