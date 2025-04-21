<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
</head>

<?php
function url($path = '')
{
    return '/blog/public/' . ltrim($path, '/');
}
?>

<body>
    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.logotypes101.com/logos/203/272663FA02DE2DAA2BBAE2FC39F14783/php.png" alt="" width="200px" height="200px">
        <h1 class="display-5 fw-bold text-body-emphasis">PHP Core Blog</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Seja bem vindo ao PHP Core Blog, um blog personalizado feito em PHP puro para estudos aos conceitos bases da linguagem sem uso de frameworks.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <!-- <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Crie um artigo</button> -->
                <a href='<?= url('escreva') ?>' class="btn btn-primary btn-lg px-4 gap-3">Crie um artigo</a>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Últimos artigos</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>