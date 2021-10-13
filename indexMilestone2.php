<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi</title>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- CDN VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- CDN AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    
    <div id="root">

        <header>

            <img src="https://loghi-famosi.com/wp-content/uploads/2020/09/Logo-della-Spotify.png" alt="">

            <form>
                <select v-model="filterDisc" name="genre" id="genre">
                    <option value="all">All</option>
                    <option v-for="(genre) in listGenre" :value="genre">{{ genre }}</option>
                </select>
            </form>

        </header>
    
        <main>
    
            <div class="dischi">
                <div v-for="(disco) in filteredAlbumList" class="disco">
                    <img :src="disco.poster" alt=''>
                    <h3>{{ disco.title }}</h3>
                    <p>{{ disco.author }}</p>
                    <p>{{ disco.year }}</p>
                </div>
            </div>
            
        </main>
        
    </div>


    <script src="./js/main.js"></script>
</body>
</html>