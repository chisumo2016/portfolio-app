### DISPLAY ALL EXPERIENCE
        - Create the education model and migration on the terminal
                php artisan make:model Experience -m
        - Add the migration fields 
        - Migrate migration into the database
             php artisan migrate
        - Add the mass assigment on thee model
        - Populate the data via factory
            php artisan make:factory ExperienceFactory
        - Add the fields in the ExperienceFactory
        - Add the class education  to create one record in database seeder
        - Seed the data
            php artisan db:seed
        - Create a Education Controller via artisan
            php artisan make:controller API/ExperienceController
        -Inside the controller writee index method to display all experience  + logic

        -Create a folder called  experience inside the components of admin
        -Create the index.vue inside the experience folder
        -Add the main section to display the view
        -Import the Base inside the script
                import  Base from "../layouts/Base.vue";
        -To create the education router inside the router/js file
                     {
                        path: '/admin/experiences',
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
        - Add the index method in EExperienceController to dispaly all experiences
        -Import the onMounted and ref inorder to display data
            import { onMounted, ref} from "vue";
            let experiences  = ref([])
        -create the onMoounted life cycle hoook
                onMounted(async () => {
                        getExperience()
                    
                    })
        - Write the async getEducations to display all educations
                
        -Add the url in api to display all the educations
            Route::get('display_all_education','index');
        -To display all educations in UI we use v-for=
             v-for="experience in experiences" :key="experience.id" v-if="experiences.length > 0">
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
        - Test Pass
        
        =======================UPDATE AND DELETE THE RECORD FROM DATABASE===================

       - Declare the properties editMode 
            let editMode   = ref(false)
       - Write thee function editModal  and its logic
       - After finishing  add the method editModal() in button of edit
                 @click="editModal(education)"
       - add the editMode  in the education modal seection and bind it 
            <h3 class="modal__title" v-show="editMode == false">Add Education</h3>
            <h3 class="modal__title" v-show="editMode == true">Update Education</h3>
            
       - Add the v-show on the button to show the update  
            <button class="btn btn-secondary" v-show="editMode == false">Save</button>
            <button class="btn btn-secondary" v-show="editMode == true">Update</button>
       - add the attribute form.value = ({}) in theee closeModal method
            form.value =({})
            editMode.value  = false
       -Add the method to update the education in the form tag
              <form action="" @submit.prevent="editMode  ? updateEducation() : createEducation()">
       - Create the updateMethod() inside the script  and write the logic to update the education module
       - Add the Url in api file Route::post('update_education','update');
       - Write the logic to update the record in the EducationController
       -test the function OK
       
       - To delete the education, add the click event on   @click="deleteEducation(education.id)" on button
       - Write the logic to deleteEducatin in the script
       - Add the api route delete_education/{id}
       - 
       -



















