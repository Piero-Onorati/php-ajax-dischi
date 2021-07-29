const app = new Vue(
    {
        el: '#app',
        data:{
            url: window.location.href + '/../api/api-records.php',
            records:[],
            genres:[],
            selected:'',
            loading:true
        },

        computed:{
            filterRecords(){
                return this.records.filter(element =>{
                    if (this.selected == '' || this.selected == 'All') {
                        return this.records
                    }
                    else{
                        return element.genre == this.selected
                    }
                });
            }
        },

        mounted(){
            axios
                .get(this.url)
                .then(response => {
                    console.log(response.data);
                    this.records = response.data;
                    this.loading = false;

                    response.data.forEach(element => {
                        if (!this.genres.includes(element.genre)) {
                            this.genres.push(element.genre);
                        }
                    });

                    console.log(this.genres);
                })
                .catch(error=>{
                    console.log(error);
                });
        },
    }
);