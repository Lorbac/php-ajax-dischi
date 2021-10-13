Vue.config.devtools = true;

const app = new Vue ({
    el: "#root",
    data: {
        dischi: [],
    },
    created() {
        axios
            .get("api/server.php")
            .then(res => {
                this.dischi = res.data;
                console.log(res.data);
            });
    }
});