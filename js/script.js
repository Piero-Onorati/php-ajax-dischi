const app = new Vue(
    {
        el: '#app',
        data:{
            url: window.location.href + '/../api/api-records.php',
            records:[]
        },

        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    console.log(response.data);
                    this.records = response.data
                })
                .catch(error=>{
                    console.log(error);
                });
        }
    }
);