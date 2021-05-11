<template>
    <div class="Container">
        <div class="heading">
            <h2 id="title">List Document</h2>
            <nav-component />
            <add-document />
        </div>

        <list-document/>

        <router-view />

    </div>
</template>

<script>
import NavComponent from '../components/NavComponent'
//import addDocoment from './addDocument'
import AddDocument from './addDocument'
import listDocument from './listDocument'
export default {
    components:{
        NavComponent,
        listDocument,
        AddDocument
    }
}
</script>
    NavComponent
<style scoped>
.heading {
    /*    background: #e6e6e6; */
    padding: 10px;
}
#title {
    text-align:center
}
</style>