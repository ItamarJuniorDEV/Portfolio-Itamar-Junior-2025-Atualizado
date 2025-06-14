<?php

$socialLinks = [
    ['href' => 'https://github.com/ItamarJuniorDEV', 'icon' => 'fab fa-github', 'color' => 'hover:text-gray-300'],
    ['href' => 'https://www.linkedin.com/in/itamar-junior-b24006237/', 'icon' => 'fab fa-linkedin', 'color' => 'hover:text-blue-400'],
    ['href' => 'mailto:seu-email@exemplo.com', 'icon' => 'fas fa-envelope', 'color' => 'hover:text-lime-400']
];

$techStack = ['PHP', 'Laravel', 'Node.js', 'MySQL', 'PostgreSQL', 'Docker', 'Git'];

?>

<div class="grid lg:grid-cols-12 gap-6 lg:gap-12 items-center w-full">

    <!-- Conteúdo -->
    <div class="lg:col-span-7 space-y-3 md:space-y-4 lg:space-y-6 animate-on-scroll order-2 lg:order-1">
        <div class="inline-flex items-center space-x-2 bg-lime-500/10 border border-lime-500/30 rounded-full px-4 py-2">
            <span class="w-2 h-2 bg-lime-400 rounded-full animate-pulse"></span>
            <span class="text-sm text-lime-400">Desenvolvedor Backend</span>
        </div>

        <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-bold leading-tight">
            Olá, eu sou <br>
            <span class="gradient-text">Itamar Junior</span>
        </h1>

        <div class="text-base sm:text-lg md:text-xl lg:text-2xl text-gray-300 font-light">
            Desenvolvedor Backend
            <span class="inline-block w-1 h-4 sm:h-5 md:h-6 lg:h-8 bg-lime-500 ml-2 animate-pulse"></span>
        </div>

        <p class="text-sm sm:text-base md:text-lg text-gray-400 leading-relaxed max-w-3xl">
            Apaixonado por
            <span class="text-lime-400 font-semibold">PHP</span>,
            <span class="text-green-400 font-semibold">Laravel</span> e
            <span class="text-yellow-400 font-semibold">Node.js</span>.
            Código limpo e aprendizado constante, minha rotina.
        </p>

        <!-- Tech Pills -->
        <div class="flex flex-wrap gap-2 py-2">
            <?php foreach ($techStack as $tech): ?>
                <span class="tech-badge bg-slate-800 border border-slate-700 text-gray-300 px-2 py-1 rounded-lg text-xs sm:text-sm">
                    <?= $tech ?>
                </span>
            <?php endforeach; ?>
        </div>

        <!-- CTAs -->
        <div class="flex flex-col gap-3 items-stretch pt-2">
            <a href="#contato"
                class="bg-lime-600 hover:bg-lime-700 text-black font-semibold px-6 py-3 rounded-lg transition-all hover:scale-105 hover:shadow-lg hover:shadow-lime-500/25 text-center text-sm sm:text-base">
                <i class="fas fa-paper-plane mr-2"></i>
                Entre em Contato
            </a>

            <a href="/cv-itamar-junior.pdf"
                download
                class="border-2 border-lime-500 text-lime-400 hover:bg-lime-500 hover:text-black font-semibold px-6 py-3 rounded-lg transition-all hover:scale-105 text-center text-sm sm:text-base">
                <i class="fas fa-download mr-2"></i>
                Download CV
            </a>
        </div>

        <!-- Social Links -->
        <div class="flex items-center justify-center space-x-6 pt-2 pb-4">
            <?php foreach ($socialLinks as $link): ?>
                <a href="<?= $link['href'] ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="text-gray-400 <?= $link['color'] ?> transition-all hover:scale-125 transform">
                    <i class="<?= $link['icon'] ?> text-xl sm:text-2xl"></i>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- Imagem -->
    <div class="lg:col-span-5 relative animate-on-scroll order-1 lg:order-2 flex justify-center lg:justify-end mb-6 lg:mb-0">
        <div class="relative z-10 max-w-[200px] sm:max-w-[250px] md:max-w-[300px] lg:max-w-[400px] w-full">
            <!-- Container da imagem -->
            <div class="relative bg-gradient-to-br from-lime-500/20 to-green-600/20 rounded-2xl p-1 overflow-hidden">
                <img src="/img/profile.png"
                    alt="Itamar Junior - Desenvolvedor Backend"
                    class="w-full h-auto rounded-2xl shadow-2xl hover:scale-[1.02] transition-transform duration-300">

                <!-- Elementos decorativos DENTRO da imagem -->
                <div class="absolute top-2 right-2 sm:top-4 sm:right-4 w-8 h-8 sm:w-12 sm:h-12 bg-lime-500 rounded-full opacity-30 animate-pulse"></div>
                <div class="absolute bottom-4 left-2 sm:bottom-6 sm:left-4 w-12 h-12 sm:w-16 sm:h-16 bg-green-500 rounded-full opacity-25 animate-pulse delay-75"></div>
            </div>

            <!-- Badge profissional -->
            <div class="absolute -bottom-2 -right-2 sm:-bottom-4 sm:-right-4 bg-slate-800/90 backdrop-blur-sm border border-lime-500/30 rounded-lg p-2 sm:p-3 float-animation">
                <div class="flex items-center space-x-1 sm:space-x-2">
                    <div class="w-1.5 h-1.5 sm:w-2 sm:h-2 bg-lime-400 rounded-full animate-pulse"></div>
                    <span class="text-xs font-medium text-lime-400">Backend Dev</span>
                </div>
            </div>
        </div>
    </div>

</div>