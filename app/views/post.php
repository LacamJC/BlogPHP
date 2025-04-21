<?php

use App\Services\Helper;

?>

<?php if (empty($post)): ?>
    <p class="alert alert-warning">
        Erro ao exibir post
    <p>
    <?php else: ?>

    <h1 class="fs-2"><?= $post->titulo ?></h1>
    <p>
        <?= $post->conteudo ?>
    </p>

    <span>
        Autor: <?= $post->autor ?>
    </span>
    <br>
    <span>
        Publicado em: <?= $post->data_publicacao ?>
    </span>

<?php endif; ?>