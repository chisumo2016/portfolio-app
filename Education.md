### DISPLAY ALL EDUCATIONS
        - Create the education model and migration on the terminal
                php artisan make:model Education -m
        - Add the migration fields 
        - Migrate migration into the database
             php artisan migrate
        - Populate the data via factory
            php artisan make:factory EducationFactory
        - Add the fields iin the EducationFactory
        - Add the class education  to create one record in database seeder
        - Seed the data
            php artisan db:seed
        - Create a Education Controller via artisan
            php artisan make:controller API/EducationController
        -Inside the controller writee index method to display all educations  + logic

        -Create a folder called education inside the components of admin
        -Create the index.vue inside the educatio folder
        -Add the main section to display the view
        -Import the Base inside the script
                import  Base from "../layouts/Base.vue";
        -To create the education router inside the router/js file
                     {
                        path: '/admin/educations',
                        name: 'adminEducation',
                        component: adminEducationIndex,
                        meta:{
                            requiresAuth :true
                        }
                    },

        -Add the router-link in the sidebar to navigate to navigation
                <router-link to="">   </router-link>
        -Add the ui THEME from the github and attach to main and test
        - Add the CSS to display the UI properly inside the base.css
        
        -Import the onMounted and ref inorder to display data
            import { onMounted, ref} from "vue";
        -create the onMoounted life cycle hoook
                onMounted(async () => {
                        getEducations()
                    
                    })
        - Write the async getEducations to display all educations
                
        -Add the url in api to display all the educations
            Route::get('display_all_education','index');
        -To display all educations in UI we use v-for=
             v-for="education in educations" :key="education.id" v-if="educations.length > 0">
        - Attach on the P tag  <p>{{ education.institution }}</p>


       ================== CREATE A RECORD  ===================
        - Declare the property showModal and hideModal
            let  ShowModal = ref(false)
            let  hideModal = ref(true)
        - Declare the method to openModal
        - Take the openModal and attach to the  click even on New Education
                 <div class="btn " @click="openModal()">
                      New Education
                 </div>
        -Will not work untill you add the showModal in Edacation Modal and bind the class
                :class="{ show: showModal}" 
        -Once the modal is open , we need to put the mechanismm to close/ hide it 
                const closeModal  = () => {
                showModal .value  = !hideModal.value
            }
        -Apply the closeModal in the UI
             @click="closeModal()">×</span>

        -Declare the form properties in ordeer to ccreate the record
        - Bind the v-model on the input of the form
                v-model="form.department"
        -Add the div inside the form tag inorder to submit the data
        - Add the method createEducation() inside the form tag
            <form action="" @submit.prevent="createEducation()"></form>
        - Create a method inside of script to createEducation
        - Add the url on the api route file to create eduction
        -Write a create method inside the EducationController and its logic
        - After writing the logic ,you can test on UI to check if  u can create a record
        -
        -
        -
