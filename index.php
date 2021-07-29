<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
    <!-- Axios CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue CDN -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Records</title>
</head>
<body>

    <div id="app">

        <header>
            <div class="container header-container">
                <a href="#" class="img-box">
                    <img src="img/spotify-logo.png" alt="logo">
                </a>
                <div class="select">
                <select v-model="selected">
                    <option >All</option>
                    <option v-for="genre in genres">{{genre}}</option>
                </select>
                </div>
            </div>
        </header>

        <main>

        <div class="container main-container" >
    
            <div class="card" v-for="record in filterRecords" v-if="!loading">

                <!-- card img-box -->
                <div class="card_img">
                    <img :src="record.poster" :alt="record.title">
                </div>

                <!-- card-text -->
                <div class="card_text">
                    <h3>{{record.title}}</h3>
                    <h4>{{record.author}}</h4> 
                    <span>{{record.year}}</span>     
                </div>
    
            </div>
        </div>

    </main>

    </div>

    <script src="js/script.js"></script>
    
</body>
</html>