<main class="mainArticle">
<?php
$data = array_reverse($data);
foreach ($data as $key){ ?>
    <h2><?php echo $key->id .'. ' . $key->title ?></h2>
    <p class="mainContent"><?php echo $key->article?></p>
    <?php
}
?>
</main>
