<template>
    <div>
        <b-navbar>
            <b-collapse is-nav id="nav_dropdown_collapse">
            <b-navbar-nav class="ml-auto">
                
                <b-navbar-brand>Project</b-navbar-brand>
                <b-nav-item href="/">Home</b-nav-item>
                <b-nav-item href="/add">Add Document</b-nav-item>
                             
                <b-nav-item-dropdown text="Category" @change="changeCategory($event)">
                <b-dropdown-item v-for="category in categories" :value="category.id" :key="category.id">
                    {{ category.category }}
                </b-dropdown-item>
                </b-nav-item-dropdown>
            </b-navbar-nav>
            </b-collapse>
        </b-navbar>
       
    </div>
</template> 

<script>
export default {

    data() {
        return {
            categories:[],
            selectedJobTitle: null
        }
    },
    
    methods:{
        fetchCategories() {
             axios.get("api/categories")
            .then(response => {
                this.categories=response.data
                //console.log(response.data);
            })
            .catch(error => {
                console.log(error);
            })
        },

        changeCategory (event) {
            this.selectedJobTitle = event.target.options[event.target.options.selectedIndex].text
        }
    },

    created() {
        this.fetchCategories();
    },

    mounted() {

    }
}
</script>