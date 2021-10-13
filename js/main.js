Vue.config.devtools = true;

const app = new Vue ({
    el: "#root",
    data: {
        dischi: [],
        listGenre: [],
        filterDisc: "",
    },
    created() {
        axios
            .get("api/server.php")
            .then(res => {
                this.dischi = res.data;
                // console.log(res.data);

                this.dischi.forEach((disc) => {
                    if (this.listGenre.includes(disc.genre) == false) 
                    {
                        this.listGenre.push(disc.genre);
                    }
                });
            });
    },
    computed: {
        filteredAlbumList() {
            if (this.filterDisc === "all") {
                return this.dischi;
            }
    
            let filteredList = this.dischi.filter( item => {
                return item.genre.includes(this.filterDisc);
            })
    
            return filteredList;
        }
    }
});