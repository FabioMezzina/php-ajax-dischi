<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-ajax-dischi</title>
  <!-- Style -->
  <link rel="stylesheet" href="./dist/css/main.css">
</head>
<body>
  <div id="app" class="flex fd-col">

    <!-- HEADER -->
    <header class="flex ai-center">
      <div class="container">
        <div class="logo">
          <a href="./">
            <img src="./img/logo.png" alt="Spotify">
          </a>
        </div>
      </div>
    </header>
  
    <!-- MAIN CONTENT -->
    <main>
      <!-- Filter section -->
      <section class="filter-section">
        <select name="author" id="author" v-model="authorToFilter" @change="filterAuthor">
          <option value="All">All</option>
          <option v-for="author in authorList" :value="author">{{ author }}</option>
        </select>
      </section>

      <!-- CDs section -->
      <section class="container flex jc-center f-wrap">
          <div class="cd-wrapper" v-for="cd in database">
            <div class="cd-img-wrapper">
              <img :src="cd.poster" :alt="cd.title">
            </div>
            <h2>{{ cd.title }}</h2>
            <span>{{ cd.author }}</span>
            <p>{{ cd.year }}</p>
            <span>{{ cd.genre }}</span>
          </div>
      </section>
    </main>
  </div>

  <!-- JS -->
  <script src="./dist/js/main.js"></script>
</body>
</html>