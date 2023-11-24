<?php include "top.php"; ?>
<!--
    <div class="alert alert-success">¡Ejemplo mensaje de éxito!</div>
    <div class="alert alert-error">¡Ejemplo mensaje de error!</div>
    -->
<nav>
  <p><a href="film.php">Volver</a></p>
</nav>
<section id="films">
  <h2>Categorías de la pelicula: <?= $_GET['title'] ?></h2>
  <form action="category_film.php?title=<?= $_GET['title'] ?>" action="post">
    <ul>
      <?php
      $sql = "SELECT name FROM category";
      $result = $link->query($sql);
      $category = $result->fetch_assoc();
      while ($category != null) {
        $name = $category['name'];
      ?>
        <li>
          <label>
            <input type="checkbox" name="" id=""><?= $name ?>
          </label>
        </li>
      <?php
        $category = $result->fetch_assoc();
      }
      $result->close();
      ?>
      <li>
        <label>
          <input type="checkbox" name="" id="">
          Acción
        </label>
      </li>
      <li>
        <label>
          <input type="checkbox" name="" id="">
          Comedia
        </label>
      </li>
      <li>
        <label>
          <input type="checkbox" name="" id="">
          Misterio
        </label>
      </li>
    </ul>
    <p>
      <input type="submit" value="Actualizar">
    </p>
  </form>
  <section>
    <?php include "bottom.php"; ?>