### DISPLAY ALL SKILLS WITH VUE 3
    Create a folder called skills inside the admin with an index.vue
    Copy the main from other file <main></main> paste inside index.vue
    Add thee setup in the script to initialize api composition
    Import Base vue import  Base from "../layouts/Base.vue" 
    Use it inside the template
    Create the route inside the router /js
            {
            path: '/admin/skills',
            name: 'adminSkill',
            component: adminSkillIndex,
            meta:{
                requiresAuth :true
            }
        },
    Update the links in navbar to display the link of skills     <router-link>
    Copy the code from the Theme and paste innside main on index.vue
    No imoplemetation of logical from vue before creating a model and migration
    To create a model and migration 
    Add data modelling in the migration files
             php artisan make:model Skill -m   
             php artisan migrate
    Create Factory for Skill
             php artisan make:factory SkillFactory  
            add the modeelling of seed
            add to the databaseseeder
            add to the databaseseeder
            php artisan db:seed 
    import the onMounnted,ref to index.vue
        import { onMounted, ref} from "vue";
    Add the onMounnted life cycle hook to retrieve getSkills
            onMounted(async () =>{
            getSkills()
        })

    Write the method to retrieve the information from the database using getSkills
                const  getSkills = async () => {}
    create a SkillController 
            php artisan make:controller API/SkillController  
    Add the routes in the api  files to display all skills
             Route::get('display_all_skill','index');
    In the SkillController add the index method which return  json , 200
    Declare the skills property in script  w/c all an array of skills
            let skills = ref([]);
    We need to hook the skills in getSkills()
             skills.value  = response.data.skills
    To display all the skill we should use v-for= in the UI
            v-for="skill in skills" :key="skill.id"
            v-if="skills.length > 0"
    To dispaly the skill {{service.name}}
    To bind the style
            <span class="table_skills-percentage" style="width: 90%;"></span>
            <span class="table_skills-percentage" :style="{'width':`${skill.proficiency}%`}"></span>

    Add the mass assigment to Skills
    Add the relationship btn service and skills
    Called the service relationship into the index()
    Use the relation to access the service
                 <p >{{ skill.service_id }}</p>
                 <p v-if="skill.service" >{{ skill.service.name}}</p>


    ==========================CREATE A NEW SKILLS ===========
     - Create a const showModal  in script
            let showModal = ref(false)
            let hideModal = ref(true)
     - Create a function to openModal
             showModal.value = !showModal.value
     - Create a function to closeModal
             showModal.value = !hideModal.value
     - Bind the modal class on main modal to show the model
           <div class="modal main__modal " :class="{ show : showModal}">

     -Add the click event to openModel in skills
           <div class="btn" @click="openModal()"> New Skill</div>
     -Add the click event to closeModel in skills
            <span class="modal__close btn__close--modal" @click="closeModal()">×</span>
   

     Deeclare the  form properties and v-model bindig on the form
            let form = ref({
                'name' : '',
                'proficiency': '',
                'service_id': '',
            })
            v-model="form.proficiency"
     First we need to retrieve the data from the service ,write the function to call getServices
            const  getServices =  async () =>{
            let response = await  axios.get('/api/display_all_service')
        }
     Call the getServices() onn OnMounted()
     To declare the property services
        let services = ref([]);
     Implement in the getServices method
                const  getServices =  async () =>{
                let response = await  axios.get('/api/display_all_service')
                services.value = response.data.services
            }
     To display the sservices onn the UI  inorder to select

    NB:update the bags in the service -index.vue
            <form  @submit.prevent="editMode.value ? ServiceUpdate(): ServiceCreate() ">

    Add the form tag and  add the function to create skill
            <form @submit.prevent="createSkill()">
    Write the funnctioo to create skill record 

    Add thee url on api route create_skill
        Route::post('create_skill','create');

    Write the function create inside the Skillcontroller


       =================  UPDATE AND DELETE SKILLS =============

    Create the propertiy ref to editModal
            let editMode   = ref(false)
    Add form.value in closeModal and editModal.value
            const closeModal = () =>{
                showModal.value = !hideModal.value
                form.value = ({})
                editMode.value = false
            }
    create a const  editModal
        const  editModal = (skill) =>{
            editMode.value = true
            showModal.value = !showModal.value
            form.value = skill
        }

    add the event click on the button 
        <button class="btn-icon success" @click="editModal(skill)"></button>
    Test iif it work o clicking edit icoon
    Add two button in service modal
            <h3 class="modal__title" v-show="editMode == false">Add Skill</h3>
            <h3 class="modal__title" v-show="editMode == true">Update Skill</h3>

                        AND
            <button class="btn btn-secondary btn__close--modal " v-show="editMode == false">Save</button>
            <button class="btn btn-secondary btn__close--modal " v-show="editMode == true">Update</button>

    Add the method inside the form tag to update the record
         <form @submit.prevent="editMode ? UpdateSkill(): createSkill()"></form>
    Write the function to updatee the record in scriipt  UpdateSkill()
             const  UpdateSkill = async ()=>{
            await  axios.post('/api/update_skill'+form.value.id, form.value)
            .then(() =>{
                getSkills()
                closeModal()
                toast.fire({
                    icon: 'success',
                    title: 'Skill updated successfully'
                })
            })
        }
    Add the url api to update the skills in api file
            Route::post('update_skill','update');
    Add the fuctionality to update the record in the controller  under update() method
    Add the fuctionality to update the record in the const  UpdateSkill = async ()=>{}

    add the click evennt on the button to delete the skills
             <button class="btn-icon danger" @click="deleteSkill(skill.id)"></button>
    Implement the functionality to delete the record in script of api compoistiion

    add the route api to delete the record
            Route::get('delete_skill/{id}','delete');
        






















    















        
     
   
