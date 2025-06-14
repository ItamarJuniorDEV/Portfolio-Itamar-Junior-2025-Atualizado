<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>

<body>

    <?php
    // =====================================
    // 🏁 PASSO 1: DEFINIR VARIÁVEIS BÁSICAS
    // =====================================
    $nome        = "Junior";
    $saudacao    = "Oi";
    $titulo      = $saudacao . ", Portfólio do " . $nome;
    $subtitulo   = "Seja bem-vindo ao meu portfólio!";
    $ano  = 2020; // renomeado p/ indicar base do cálculo

    // =====================================
    // 📋 PASSO 2: CRIAR LISTA DE PROJETOS
    // =====================================
    $projetos = [
        [
            "titulo"     => "Meu Portfólio",
            "finalizado" => false,
            "ano"       => 2021,
            "descricao"  => "Meu primeiro portfólio. Escrito em PHP e HTML."
        ],
        [
            "titulo"     => "Lista de Tarefas",
            "finalizado" => true,
            "ano"       => 2025,
            "descricao"  => "Lista de tarefas. Escrito em PHP e HTML."
        ],
        [
            "titulo"     => "Controle de Leitura de Livros",
            "finalizado" => true,
            "ano"       => 2025,
            "descricao"  => "Lista de livros. Escrito em PHP e HTML."
        ],
        [
            "titulo"     => "Mais um projeto",
            "finalizado" => false,
            "ano"       => 2020,
            "descricao"  => "Projeto secreto em andamento. Escrito em PHP e HTML."
        ],
    ];

    // =====================================
    // 🛠️ PASSO 3: CRIAR FUNÇÕES AUXILIARES
    // =====================================

    // FUNÇÃO 1: Mostrar se projeto está finalizado ou não
    function verificarSeEstaFinalizado($projeto)
    {
        if ($projeto['finalizado']) {
            return '<span style="color: green">Finalizado ✅</span>';
        }
        return '<span style="color: red">Não finalizado ⛔</span>';
    }

    // FUNÇÃO 2: Filtrar projetos por finalizas e ano (finalizado/não finalizado/todos)
    function filtro($itens, $funcao)
    {
        $filtrados = [];

        foreach ($itens as $item) {
            if ($funcao($item)) {
                $filtrados[] = $item;
            }
        }
        return $filtrados;
    }

    $projetosFiltrados = array_filter(
        $projetos,
        function ($projeto) {
            return $projeto['ano'] >= 2024;
        }
    );


    ?>

    <!-- ===================================== -->
    <!-- 🖥️ PASSO 4: MOSTRAR CABEÇALHO NA TELA -->
    <!-- ===================================== -->
    <h1><?= $titulo ?></h1>
    <p><?= $subtitulo ?></p>
    <p><?= $ano ?></p>

    <hr />

    <!-- ===================================== -->
    <!-- 📊 PASSO 5: MOSTRAR PROJETOS NA TELA  -->
    <!-- ===================================== -->
    <ul>
        <?php
        // AQUI É ONDE A MÁGICA ACONTECE:
        // 1. $projetosFiltrados já tem só projetos finalizados
        // 2. foreach = percorre cada projeto filtrado
        // 3. mostra cada projeto na tela
        ?>
        <?php foreach ($projetosFiltrados as $projeto): ?>

            <li
                <?php // Condição: se tem mais de 2 anos, muda cor de fundo 
                ?>
                <?php if ((2024 - $ano) > 2): ?>
                style="background-color: burlywood;"
                <?php endif; ?>


                <!-- MOSTRAR DADOS DO PROJETO -->
                <h2><?= $projeto['titulo'] ?></h2>
                <p><?= $projeto['descricao'] ?></p>

                <div>
                    <div>Ano: <?= $projeto['ano'] ?></div>
                    <div>
                        Projeto: <?= verificarSeEstaFinalizado($projeto); ?>
                    </div>
                </div>

            </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>