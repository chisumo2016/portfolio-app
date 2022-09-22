<template>
    <h1>Welcome to admin overview dashboard</h1>
    <div>
        <router-link to="/">Home Page</router-link>
    </div>
    <br>
    <button @click="logout">Log Out</button>
</template>

<script setup>
import { useRouter} from "vue-router";

const  router = useRouter();

/** method */
const logout = ()=>{
     localStorage.removeItem('token');
     router.push('/');
 }
</script>
