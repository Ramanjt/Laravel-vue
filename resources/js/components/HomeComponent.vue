<template>
    <div class="Container">
        <div class="heading">           
            <h2 id="title">Document List</h2>

            <b-table striped hover :items="items"   ></b-table>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            fileds:["id", "name"],
            items:[],
           // categories:[],
            //key:""
        }
    },
    
    methods:{
        fetchDocuments() {
             axios.get("api/documents")
            .then(response => {
                this.items=response.data
                console.log(response.data);
            })
            .catch(error => {
                console.log(error);
            })
        },
    },

    created() {
        // this.fetchCategories();
        this.fetchDocuments();
    },

    mounted() {

    }
}
</script>