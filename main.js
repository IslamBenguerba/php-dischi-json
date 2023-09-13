

const { createApp } = Vue

createApp({
    data() {
        return {
            message: 'Hello Vue!',
            list: [],
        }
    },
    methods: {
        console() {
            console.log('ciao')
        },
        fetchData() {
            axios.get('./api/api.php').then((response) => {
                const Value = response.data
                this.list = response.data
                console.log(Value)
            })
        },
        removealbum(album) {
            const idAlbum = album['id'];
            axios.get('./api/delete.php',{
                params:{
                    "id": idAlbum
                }
            }).then((response) => {
                    console.log(response.data)
                })
        }
    },
    mounted() {
        console.log('ciao')
        this.fetchData()
    }
}).mount('#app')
