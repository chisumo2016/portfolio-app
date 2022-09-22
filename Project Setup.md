    ### Project Setup
      - Create a project
      - Databad connnection
     
      B: INSTALL VUE-LOADER
            npm install vue-loader@next vue@next  vue-router@next
    
      B: INSTALL VITE JS
            npm install @vitejs/plugin-vue --force --save-dev
            Import vite in vite.config.js file
                import vue from '@vitejs/plugin-vue';
                  plugins: [
                    laravel({
                        input: ['resources/css/app.css', 'resources/js/app.js'],
                        refresh: true,
                    }),
                    vue(),
                ],
     C: CREATE A COMPONENTS DIRECTORY IN THE JS FOLDER
            resources/js/components
            create a file resources/js/component/app.vue
            In the app.js you cann instantiatee the object
