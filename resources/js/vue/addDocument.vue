<template>
    <div class="addDocument">
        <div class="form-group">
            <label for="document-name">Add New Document</label>
            <input type="text" id="document-name" class="form-control" v-model="document.name" />
        </div>        
        <button class="btn btn-success" @click="addItem()" >Save</button>
    </div>
</template>

<script>
//import { defineComponent } from '@vue/composition-api'

export default ({
    data() {
        return{
            document: {
                name:""
            }
        }
    },

    methods: {
        addItem() {
            axios.post("api/document/store", {
                document:this.document
            })
            .then(response => {
                if(response.status == 201) {
                    this.document.name="";
                }
            })
            .catch(error=>{
                console.log(error);
            })
        }
    }
})
</script>
