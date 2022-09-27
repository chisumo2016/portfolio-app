 ###  Integrating the Admin Panel
    Create a folder within the admin components called layouts
        - create a file called base.vue
                resources/js/components/admin/layouts/base.vue
                resources/js/components/admin/layouts/base.css
                resources/js/components/admin/layouts/header.vue
                resources/js/components/admin/layouts/sidebar.vue
                 
        

 ### CREATE AND UPDATE ABOUT SECTION
    To create a About migration and Model 
         php artisan make:model About -m
         php artisan migrate
    To create a About Controllert
          php artisan make:controller API/AboutController
     Add the attribute in the migration
            data modelling
     Add the url routes in api file
     Add the function edit_about in the AboutController
    Add the css to display the about page in base.vue  resources/js/components/admin/layouts/base.css
     create a About UI component in resources/js/components/admin/about/index.vue
     Register the url in router file    path: '/admin/about', and impoort
     To link  the url on the sidebar <router-link class="nav_link " to="/admin/about"></router-link>
     To import the Base from layouts/base.vue on the resources/js/components/admin/about/index.vue
        <Base/> and add the UI
     Implement some logic  on the about page
            import  the {onMounted ,ref}
            declare  the propertiess object of the form
                    let form = ref({
                        name: '',
                    });
     declare the onMounted(async () =>{
            getAbout()
        })
     create the const to getAbout() and it's logic
     use the v-model on input to bind the data to all input .
            v-model="form.name"
     Add the method getPhoto in the <img :src="getPhoto()"/> to bind the image 
     Implmement the function of getPhoto in scripts
    Add the method changePhoto in the about page   @change="changePhoto"
    Implement the logic in the script @change="changePhoto"
     install sweetalert npm
                npm install sweetalert2  
        Configure sweetalert in  resources/js/app.js
        let us use in the changePhoto()
     Add the @click.prevent="updateAbout"  in the UI
     Implement the logic of updateAbout method in script
     Implement the logic of uploadCv method in script

      composer require intervention/image  
