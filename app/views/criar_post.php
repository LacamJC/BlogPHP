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
    <form class="container mx-auto mt-5" method="POST" action="<?= url('post') ?>">
        <div class="row w-100">
            <div class="col col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Autor</label>
                    <input type="text" class="form-control" id="autor" name="autor">
                    <div id="emailHelp" class="form-text">Coloque o nome que nossos visitantes irão conhecer você</div>
                </div>
            </div>
            <div class="col col-6">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Data</label>
                    <input type="date" class="form-control" id="data" name="data" readonly>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo do artigo</label>
            <input type="text" name="titulo" id="titulo" class="form-control">
        </div>
        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Escreva seu artigo aqui" id="artigo" name="artigo" style="min-height: 300px"></textarea>
            <label for="floatingTextarea2">Escreva seu artigo aqui</label>
        </div>
        <button type="submit" class="btn btn-primary">Postar artigo</button>
    </form>

    <script>
        // Função para formatar a data no formato AAAA-MM-DD (o formato esperado pelo input type="date")
        function formatarData(data) {
            const ano = data.getFullYear();
            const mes = String(data.getMonth() + 1).padStart(2, '0'); // Adiciona um zero à esquerda se o mês for menor que 10
            const dia = String(data.getDate()).padStart(2, '0'); // Adiciona um zero à esquerda se o dia for menor que 10
            return `${ano}-${mes}-${dia}`;
        }

        // Obtém a data atual
        const hoje = new Date();

        // Formata a data para o formato do input date
        const dataFormatada = formatarData(hoje);

        // Define o valor do input com a data atual formatada
        document.getElementById("data").value = dataFormatada;
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>

</html>