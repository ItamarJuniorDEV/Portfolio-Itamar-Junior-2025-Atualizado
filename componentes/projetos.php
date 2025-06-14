<?php

$projetos = [
    [
        "titulo" => "Portfolio Pessoal - PHP & Tailwind",
        "finalizado" => false,
        "ano" => 2025,
        "descricao" => "Portfolio profissional desenvolvido com PHP puro e Tailwind CSS, seguindo boas práticas de desenvolvimento.",
        "stack" => ["PHP", "Tailwind CSS", "JavaScript", "HTML5"],
        "img" => "/img/portfolio.png",
        "github" => "https://github.com/ItamarJuniorDEV/php-studies-rocketseat-base",
        "demo" => "#",
        "destaque" => true
    ]
    // Adicione seus outros projetos aqui seguindo o mesmo padrão
];

// Função para obter cor do badge baseado na tecnologia
function getStackColor($tech)
{
    $colors = [
        'PHP' => 'bg-purple-500/20 text-purple-400 border-purple-500/30',
        'Laravel' => 'bg-red-500/20 text-red-400 border-red-500/30',
        'Node.js' => 'bg-green-500/20 text-green-400 border-green-500/30',
        'MySQL' => 'bg-blue-500/20 text-blue-400 border-blue-500/30',
        'PostgreSQL' => 'bg-cyan-500/20 text-cyan-400 border-cyan-500/30',
        'MongoDB' => 'bg-emerald-500/20 text-emerald-400 border-emerald-500/30',
        'Docker' => 'bg-sky-500/20 text-sky-400 border-sky-500/30',
        'React' => 'bg-blue-400/20 text-blue-300 border-blue-400/30',
        'Vue.js' => 'bg-teal-500/20 text-teal-400 border-teal-500/30',
        'JavaScript' => 'bg-yellow-500/20 text-yellow-400 border-yellow-500/30',
        'Tailwind CSS' => 'bg-lime-500/20 text-lime-400 border-lime-500/30',
        'HTML5' => 'bg-orange-500/20 text-orange-400 border-orange-500/30',
        'CSS3' => 'bg-blue-500/20 text-blue-400 border-blue-500/30',
        'Git' => 'bg-red-500/20 text-red-400 border-red-500/30'
    ];

    return isset($colors[$tech]) ? $colors[$tech] : 'bg-gray-500/20 text-gray-400 border-gray-500/30';
}

?>

<div class="grid gap-8">
    <?php foreach ($projetos as $projeto): ?>
        <div class="group relative bg-black/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-gray-800 hover:border-lime-500/50 card-hover animate-on-scroll <?= isset($projeto['destaque']) && $projeto['destaque'] ? 'ring-2 ring-lime-500/50' : '' ?>">

            <div class="grid md:grid-cols-5 gap-6 p-6">

                <!-- Imagem do Projeto -->
                <div class="md:col-span-2 relative overflow-hidden rounded-lg">
                    <div class="aspect-video bg-slate-700 flex items-center justify-center">
                        <div class="flex flex-col items-center justify-center h-full text-slate-500">
                            <i class="fas fa-code text-4xl mb-2"></i>
                            <span class="text-sm">Preview em breve</span>
                        </div>
                    </div>
                </div>

                <!-- Informações do Projeto -->
                <div class="md:col-span-3 space-y-4">

                    <!-- Cabeçalho com badge de destaque -->
                    <div class="flex flex-wrap items-start justify-between gap-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <h3 class="text-2xl font-bold text-white group-hover:text-lime-500 transition-colors">
                                    <?= $projeto['titulo'] ?>
                                </h3>
                                <?php if (isset($projeto['destaque']) && $projeto['destaque']): ?>
                                    <span class="bg-lime-500 text-black text-xs font-bold px-3 py-1 rounded-full">
                                        <i class="fas fa-star mr-1"></i> Destaque
                                    </span>
                                <?php endif; ?>
                            </div>
                            <p class="text-sm text-gray-400">
                                <?php if ($projeto['finalizado']): ?>
                                    <i class="fas fa-check-circle text-green-400 mr-1"></i>
                                    Concluído em <?= $projeto['ano'] ?>
                                <?php else: ?>
                                    <i class="fas fa-clock text-yellow-400 mr-1"></i>
                                    Em desenvolvimento
                                <?php endif; ?>
                            </p>
                        </div>

                        <!-- Links do Projeto -->
                        <div class="flex gap-3">
                            <?php if ($projeto['github'] !== '#'): ?>
                                <a href="<?= $projeto['github'] ?>"
                                    target="_blank"
                                    class="text-gray-400 hover:text-white transition-colors hover:scale-110 transform"
                                    title="Ver código no GitHub">
                                    <i class="fab fa-github text-2xl"></i>
                                </a>
                            <?php endif; ?>

                            <?php if (isset($projeto['demo']) && $projeto['demo'] !== '#'): ?>
                                <a href="<?= $projeto['demo'] ?>"
                                    target="_blank"
                                    class="text-gray-400 hover:text-lime-500 transition-colors hover:scale-110 transform"
                                    title="Ver demonstração">
                                    <i class="fas fa-external-link-alt text-2xl"></i>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Descrição -->
                    <p class="text-gray-300 leading-relaxed">
                        <?= $projeto['descricao'] ?>
                    </p>

                    <!-- Stack -->
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($projeto['stack'] as $tech): ?>
                            <span class="px-3 py-1 text-xs font-medium rounded-lg border tech-badge <?= getStackColor($tech) ?>">
                                <?= $tech ?>
                            </span>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php if (count($projetos) === 1): ?>
        <div class="text-center py-12 bg-black/30 rounded-2xl border border-gray-800 animate-on-scroll">
            <i class="fas fa-rocket text-4xl text-lime-500 mb-4"></i>
            <h3 class="text-xl font-semibold mb-2">Mais projetos em breve!</h3>
            <p class="text-gray-400 mb-6">Estou sempre trabalhando em novas ideias e aprendendo novas tecnologias.</p>
            <a href="https://github.com/ItamarJuniorDEV"
                target="_blank"
                class="inline-flex items-center gap-2 text-lime-500 hover:text-lime-400 transition-colors">
                <i class="fab fa-github"></i>
                Acompanhe meu GitHub para novidades
            </a>
        </div>
    <?php endif; ?>
</div>