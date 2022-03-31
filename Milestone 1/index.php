<?php
  include 'lista.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <div id="app">
    <header class="nav">
      <figure class="nav-header">
        <img src="../assets/Spotify_icon-icons.com_66783.svg" alt="" />
      </figure>
      <div class="container-select">
        <label for="cars">Che genere ascolti:</label>
        <select v-model="SelezioneGenere" @change="$emit('changeGenere', SelezioneGenere)" name="cars" id="cars">
          <option value="all">All</option>
          <option value="metal">Metal</option>
          <option value="jazz">Jazz</option>
          <option value="pop">Pop</option>
          <option value="rock">Rock</option>
        </select>
      </div>
    </header>

    <!-- card -->
    <main class="container-Music">

      <ul class="container">
        <?php
        foreach ($dics as $value) {
        ?>
          <li class="characters">
            <figure class="img-container">
              <img src="<?php echo $value['poster']; ?>" alt="" />
            </figure>
            <h5 class="titolo"><?php echo $value['title']; ?></h5>
            <p class="autore"><?php echo $value['author']; ?></p>
            <span class="anno"><?php echo $value['year']; ?></span>
          </li>
        <?php
        };
        ?>
      </ul>
    </main>
  </div>

  <script src="script.js"></script>
</body>

</html>