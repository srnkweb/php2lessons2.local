<main class="mainNews">
<?php
    $data = array_reverse($data);
    foreach ($data as $key){ ?>
          <h2><a href="http://php2lessons2.local/news/article/<?php echo $key->id ?>">
                  <?php echo $key->id .'. ' . $key->title ?></a></h2>
      <?php
    }
?>
</main>
