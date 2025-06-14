<?php

$contatoInfo = [
  [
    'icon' => 'fas fa-envelope',
    'titulo' => 'Email',
    'valor' => 'cdajuniorf@gmail.com',
    'link' => 'mailto:contato@exemplo.com',
    'color' => 'hover:text-lime-500'
  ],
  [
    'icon' => 'fab fa-linkedin',
    'titulo' => 'LinkedIn',
    'valor' => '/in/itamar-junior',
    'link' => 'https://www.linkedin.com/in/itamar-junior-b24006237/',
    'color' => 'hover:text-blue-400'
  ],
  [
    'icon' => 'fab fa-github',
    'titulo' => 'GitHub',
    'valor' => '/ItamarJuniorDEV',
    'link' => 'https://github.com/ItamarJuniorDEV',
    'color' => 'hover:text-gray-300'
  ]
];

?>

<div class="max-w-4xl mx-auto">
  <h2 class="text-3xl md:text-4xl font-bold mb-8 md:mb-12 text-center">
    <span class="gradient-text">Vamos Conversar?</span>
  </h2>

  <div class="grid lg:grid-cols-2 gap-8 md:gap-12">

    <!-- Informações de Contato -->
    <div class="space-y-6 animate-on-scroll">
      <div class="bg-black/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-gray-800">
        <h3 class="text-xl md:text-2xl font-semibold mb-4">Entre em Contato</h3>
        <p class="text-gray-400 mb-6 md:mb-8">
          Interessado em discutir projetos, colaborações ou trocar ideias sobre tecnologia e desenvolvimento.
        </p>

        <div class="space-y-4">
          <?php foreach ($contatoInfo as $info): ?>
            <a href="<?= $info['link'] ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="flex items-center space-x-4 p-4 rounded-lg bg-black/50 border border-gray-800 hover:border-lime-500/50 transition-all group">
              <div class="w-12 h-12 bg-gray-900 rounded-lg flex items-center justify-center group-hover:bg-lime-500/20 transition-colors">
                <i class="<?= $info['icon'] ?> text-xl text-gray-400 group-hover:text-lime-500"></i>
              </div>
              <div>
                <p class="text-sm text-gray-400"><?= $info['titulo'] ?></p>
                <p class="font-medium <?= $info['color'] ?> transition-colors"><?= $info['valor'] ?></p>
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Informação adicional -->
      <div class="bg-gradient-to-r from-lime-500/10 to-green-500/10 rounded-2xl p-6 border border-lime-500/30">
        <div class="flex items-center space-x-3">
          <i class="fas fa-code text-lime-500"></i>
          <span class="font-medium">Desenvolvedor Backend Especializado</span>
        </div>
        <p class="text-sm text-gray-400 mt-2">
          Focado em soluções robustas e escaláveis
        </p>
      </div>
    </div>

    <!-- Formulário de Contato -->
    <div class="animate-on-scroll">
      <form action="/enviar-contato.php" method="POST" class="space-y-6">
        <div>
          <label for="nome" class="block text-sm font-medium mb-2">Nome</label>
          <input type="text"
            id="nome"
            name="nome"
            required
            class="w-full px-4 py-3 bg-black border border-gray-800 rounded-lg focus:border-lime-500 focus:outline-none transition-colors"
            placeholder="Seu nome">
        </div>

        <div>
          <label for="email" class="block text-sm font-medium mb-2">Email</label>
          <input type="email"
            id="email"
            name="email"
            required
            class="w-full px-4 py-3 bg-black border border-gray-800 rounded-lg focus:border-lime-500 focus:outline-none transition-colors"
            placeholder="seu@email.com">
        </div>

        <div>
          <label for="assunto" class="block text-sm font-medium mb-2">Assunto</label>
          <select id="assunto"
            name="assunto"
            class="w-full px-4 py-3 bg-black border border-gray-800 rounded-lg focus:border-lime-500 focus:outline-none transition-colors">
            <option value="">Selecione um assunto</option>
            <option value="projeto">Projeto</option>
            <option value="colaboracao">Colaboração</option>
            <option value="consultoria">Consultoria</option>
            <option value="networking">Networking</option>
            <option value="outro">Outro</option>
          </select>
        </div>

        <div>
          <label for="mensagem" class="block text-sm font-medium mb-2">Mensagem</label>
          <textarea id="mensagem"
            name="mensagem"
            rows="5"
            required
            class="w-full px-4 py-3 bg-black border border-gray-800 rounded-lg focus:border-lime-500 focus:outline-none transition-colors resize-none"
            placeholder="Sua mensagem..."></textarea>
        </div>

        <button type="submit"
          class="w-full gradient-lime text-black font-semibold py-3 px-6 rounded-lg transition-all hover:scale-[1.02] hover:shadow-lg hover:shadow-lime-500/25 flex items-center justify-center space-x-2">
          <i class="fas fa-paper-plane"></i>
          <span>Enviar Mensagem</span>
        </button>
      </form>
    </div>

  </div>
</div>