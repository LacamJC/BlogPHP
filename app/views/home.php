<?php
use App\Services\Helper;
?>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://www.logotypes101.com/logos/203/272663FA02DE2DAA2BBAE2FC39F14783/php.png" alt="" width="200px" height="200px">
        <h1 class="display-5 fw-bold text-body-emphasis">PHP Core Blog</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Seja bem vindo ao PHP Core Blog, um blog personalizado feito em PHP puro para estudos aos conceitos bases da linguagem sem uso de frameworks.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
     
                <a href='<?= Helper::url('escreva') ?>' class="btn btn-primary btn-lg px-4 gap-3">Crie um artigo</a>
              
                <a href='<?= Helper::url('artigos') ?>' class="btn btn-outline-secondary btn-lg px-4">Últimos artigos</a>
            </div>
        </div>
    </div>
