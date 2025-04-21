<?php 
use App\Services\Helper;

?>

<h1 class="text-center mb-5">Leia alguns dos artigos de nossos visitantes !</h1>

<?php if (empty($posts)): ?>
    <p class="alert alert-warning">Sem posts para exibir
    <p>
    <?php else: ?>
       
        <div class="d-flex justify-content-start gap-4">
            <?php foreach ($posts as $post): ?>
                <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title"><?= $post->titulo ?></h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">Artigo por <?=$post->autor?></h6>
                <p class="card-text text-truncate"><?= $post->conteudo ?></p>
                <a href="<?= Helper::url("post/{$post->id}") ?>" class="card-link">Ver artigo</a>
            
            </div>
                </div>
            <?php endforeach; ?>
        </div>
<?php endif; ?>