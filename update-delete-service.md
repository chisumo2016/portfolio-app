### UPDATE AND DELETE THE SERVICES
    On the UI we have two button Edit and Update
    Add thee click event on UI  @click="editModal(service)"
    In thee script write a  method to editModal
        - showModal
    Add this on the  v-show="editModal == false ">Add Service</h3>
    Add this on the  v-show="editModal == true ">Add Service</h3>
    Add  inn the button
        <button class="btn btn-secondary " v-show="editModal === false">Save</button>
        <button class="btn btn-secondary " v-show="editModal === true">Update</button>
    Add the editMode/EditModel on the form
        <form action="" @submit.prevent="editModal.value ? ServiceCreate() : ServiceUpdate() ">

    Add the functionality to update the service (ServiceUpdate()) in the script
    Add the funnction of update inn the controller
    Add the route in api file

## Delete
    Add the click event to the button

             <button class="btn-icon danger"  @click="deleteService(service)"></button>
    
    Create a method deleteService in scriipt 
    create the uri api route  file  passing the id
    Add the delete method in the servicecontroller plus functionality
