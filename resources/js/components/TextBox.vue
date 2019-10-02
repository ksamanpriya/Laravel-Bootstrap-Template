<template>
    <div>
        <input v-value="value" type="text"/>
    </div>
</template>

<script>

    export default {
        mounted()
        {
          axios.post('api/vue',{})
              .then(response => {
                  this.value = response.data;
              })
        },
        data:function(){
            return {
                value:null,
            }
        },
        name: "TextBox"
    }
</script>

<style scoped>

</style>
