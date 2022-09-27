### TO DISPLAY ALL AND CREATE NEW SERVICES 
    Create a model and migration for services
        php artisan make:model Service -m
    Declare the data moduling in migration
    Migrate the migration into database
         php artisan migrate   
    Create the Service Factory
            php artisan make:factory ServiceFactory     
             php artisan db:seed 
    Add the Mass Assigments on Service Class
    create a folder service inside admiin components  ->index.vue
        resources/js/components/admin/service/index.vue
    extend the layout of main div
    Import the Base   from layout
        import  Base from "../layouts/base"
    create the routes inn router/js file 
            {
                path: '/admin/services',
                name: 'adminService',
                component: adminServiceIndex,
                meta:{
                    requiresAuth :true
                }
            },
        
    Update the links in the sidebar using router-link
    Test to access thee admin panel OK
    Attach the UI design for Service from the them in the <main></main>
    Check the CSSS 
    Create the api service controller
         php artisan make:controller API/ServiceController 
    In the ServiceController the the first method to get/diisplay all service
    Link the route file in api file
    Implement the logic to display the services w/c return json
    We need to implement the logic to display the service in service componnent file
        -import the onMounted,ref
                import {onMounted, ref} from "vue";
        -declare the properties in the form of api composition
              let services  = ref({

                })
        write the method onMounted to get all services
                 onMounted(async () => {
                getServices()
            })

        we write the method to get all services from database using axios 
        Display the data onn the UI to show the services using v-for and v-if
             v-for="service in services "
                {{ service.name}}
        We need to show the Modal 
            let showModal = ref(false)
            let hideModal = ref(true)
        write a logic to dispay both
        Implement  the logic to  to show modal  in ui 
        declare the properties   of the form
        To bind the form data on the UI v-model="form.description" 
        add   @submit.prevent="ServiceCreate()"> on the form
       Write the method to create a  the data
       Add the url on api  file
       Add the create() in Service Controller , implement the logic
       
      
