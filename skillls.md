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
        
     
   
