<?php

$habilidades = [
  [
    'categoria' => 'Backend',
    'icon' => 'fa-server',
    'color' => 'from-lime-500 to-green-500',
    'techs' => [
      ['nome' => 'PHP', 'nivel' => 90, 'icon' => 'fab fa-php'],
      ['nome' => 'Laravel', 'nivel' => 85, 'icon' => 'fab fa-laravel'],
      ['nome' => 'Node.js', 'nivel' => 80, 'icon' => 'fab fa-node-js'],
      ['nome' => 'Express.js', 'nivel' => 75, 'icon' => 'fas fa-code']
    ]
  ],
  [
    'categoria' => 'Banco de Dados',
    'icon' => 'fa-database',
    'color' => 'from-green-500 to-emerald-500',
    'techs' => [
      ['nome' => 'MySQL', 'nivel' => 90, 'icon' => 'fas fa-database'],
      ['nome' => 'PostgreSQL', 'nivel' => 80, 'icon' => 'fas fa-database'],
      ['nome' => 'MongoDB', 'nivel' => 70, 'icon' => 'fas fa-leaf'],
      ['nome' => 'Redis', 'nivel' => 65, 'icon' => 'fas fa-bolt']
    ]
  ],
  [
    'categoria' => 'DevOps & Tools',
    'icon' => 'fa-cogs',
    'color' => 'from-lime-400 to-yellow-500',
    'techs' => [
      ['nome' => 'Docker', 'nivel' => 75, 'icon' => 'fab fa-docker'],
      ['nome' => 'Git', 'nivel' => 90, 'icon' => 'fab fa-git-alt'],
      ['nome' => 'Linux', 'nivel' => 70, 'icon' => 'fab fa-linux'],
      ['nome' => 'CI/CD', 'nivel' => 70, 'icon' => 'fas fa-infinity']
    ]
  ]
];

?>

<div class="max-w-full">
  <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 md:mb-12 text-center">
    <span class="gradient-text">Habilidades Técnicas</span>
  </h2>

  <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
    <?php foreach ($habilidades as $categoria): ?>
      <div class="bg-black/50 backdrop-blur-sm rounded-2xl p-6 border border-gray-800 hover:border-lime-500/50 card-hover animate-on-scroll">
        <div class="flex items-center mb-6">
          <div class="w-12 h-12 bg-gradient-to-br <?= $categoria['color'] ?> rounded-lg flex items-center justify-center mr-4">
            <i class="fas <?= $categoria['icon'] ?> text-white text-xl"></i>
          </div>
          <h3 class="text-lg md:text-xl font-semibold"><?= $categoria['categoria'] ?></h3>
        </div>

        <div class="space-y-4">
          <?php foreach ($categoria['techs'] as $tech): ?>
            <div class="space-y-2">
              <div class="flex justify-between items-center">
                <div class="flex items-center space-x-2">
                  <i class="<?= $tech['icon'] ?> text-gray-400"></i>
                  <span class="text-sm font-medium"><?= $tech['nome'] ?></span>
                </div>
                <span class="text-xs text-gray-400"><?= $tech['nivel'] ?>%</span>
              </div>
              <div class="w-full bg-gray-900 rounded-full h-2">
                <div class="bg-gradient-to-r <?= $categoria['color'] ?> h-2 rounded-full transition-all duration-1000 ease-out"
                  style="width: 0%;"
                  data-width="<?= $tech['nivel'] ?>%">
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- Outras habilidades -->
  <div class="mt-8 md:mt-12 text-center animate-on-scroll">
    <h3 class="text-lg md:text-xl font-semibold mb-6 text-gray-300">Outras Competências</h3>
    <div class="flex flex-wrap justify-center gap-3 md:gap-4 max-w-4xl mx-auto">
      <?php
      $outrasHabilidades = [
        'REST API',
        'Microserviços',
        'Integração com APIs externas',
        'Web Services',
        'Agile/XP',
        'Agile/Scrum',
        'Segurança'
      ];
      foreach ($outrasHabilidades as $habilidade):
      ?>
        <span class="bg-black border border-gray-800 hover:border-lime-500 text-gray-300 px-4 md:px-5 py-2 md:py-3 rounded-lg text-sm md:text-base tech-badge">
          <?= $habilidade ?>
        </span>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<script>
  // Animar barras de progresso quando aparecerem na tela
  const progressBars = document.querySelectorAll('[data-width]');
  const progressObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const width = entry.target.getAttribute('data-width');
        setTimeout(() => {
          entry.target.style.width = width;
        }, 100);
      }
    });
  }, {
    threshold: 0.5
  });

  progressBars.forEach(bar => progressObserver.observe(bar));
</script>