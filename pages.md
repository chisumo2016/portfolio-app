 ### SETUP PAGES IN COMPONENTS FOLDER
            https://www.youtube.com/watch?v=8vBTYUr6bGQ&t=1247s
        create a pages folder inside components
            pages->home->index.vue file 
            pages->admin->index.vue file 
            components->noFound.vue file 

  ### CREATE A ROUTER FOLDER IN JS FOLDEER
            configured the routes file in Router/index.js file
            attache the pathMatch in web file

   ### REGISTER  THE ROUTER VIEW IN APP.VUE FILE AND IMPORT IN APP.JS
         import the router file in app.vue
            <router-view/>
          add the router-link inn both file 

  ### Login And Register Sanctum Auth With Vuejs 3
        php artisan migrate
        laravel/sactum comes with installation    composer.json
        laravel/sactum comes with installation    composer.json
        Uncoment the sanctum in Kernel file
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
        In the api  file in routes folder the api sanctum is there 
            routes/api.php
        Make the API/AuthController
        Add to method on authcontroller  register and login
        Add  the api route for both register and login
        Add the functionality inside the method (register and login)
        Testing the api via postman
            POST: http://portfolio-app.test/api/register
            POST: http://portfolio-app.test/api/login
       Access the user via api authorization via token
            GET: http://portfolio-app.test/api/user
                    Make sure you copy the token from login user .

      Create the auth folder inside the components
           resources/js/components/auth/login.vue
           resources/js/components/auth/register.vue
     Add the router in index.js
            path: '/'
     Design the login page with css
     Use the composition API script in login.vue
        declare the properties
        bind the data using v-model directives in the form input
                v-model=form.email  as example   
        Add the @submit.prevent="login"  in form
        Add the method to login
        [Vue warn]: Unhandled error during execution of native event handler 
        at <Login onVnodeUnmounted=fn<onVnodeUnmounted> ref=Ref< Proxy > >
        at <RouterView>
        at <App.vue>
            bugs in axios
        Logout functionality using composition api
            resources/js/components/admin/home/index.vue
            
  
