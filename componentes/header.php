<?php

$menuItems = [
    ['href' => '#sobre', 'texto' => 'Sobre', 'icon' => 'fa-user'],
    ['href' => '#habilidades', 'texto' => 'Habilidades', 'icon' => 'fa-code'],
    ['href' => '#projetos', 'texto' => 'Projetos', 'icon' => 'fa-folder-open'],
    ['href' => '#contato', 'texto' => 'Contato', 'icon' => 'fa-envelope']
];

$socialLinks = [
    ['href' => 'https://github.com/ItamarJuniorDEV', 'icon' => 'fab fa-github', 'label' => 'GitHub'],
    ['href' => 'https://www.linkedin.com/in/itamar-junior-b24006237/', 'icon' => 'fab fa-linkedin', 'label' => 'LinkedIn']
];

?>

<header class="fixed top-0 left-0 right-0 z-50 bg-black/90 backdrop-blur-sm border-b border-gray-800">
    <nav class="mx-auto max-w-screen-xl px-6 py-4">
        <div class="flex items-center justify-between">

            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 group">
                <div class="w-10 h-10 gradient-lime rounded-lg flex items-center justify-center group-hover:shadow-lg group-hover:shadow-lime-500/25 transition-all">
                    <i class="fas fa-code text-black"></i>
                </div>
                <span class="font-bold text-xl text-white group-hover:text-lime-500 transition-colors">
                    IJ<span class="text-lime-500">.</span>Dev
                </span>
            </a>

            <!-- Menu Desktop -->
            <div class="hidden md:flex items-center space-x-8">
                <ul class="flex items-center space-x-6">
                    <?php foreach ($menuItems as $item): ?>
                        <li>
                            <a href="<?= $item['href'] ?>"
                                class="flex items-center space-x-2 text-gray-300 hover:text-lime-500 transition-colors group">
                                <i class="fas <?= $item['icon'] ?> text-sm group-hover:scale-110 transition-transform"></i>
                                <span><?= $item['texto'] ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <!-- Social Links -->
                <div class="flex items-center space-x-4 ml-8 pl-8 border-l border-gray-800">
                    <?php foreach ($socialLinks as $social): ?>
                        <a href="<?= $social['href'] ?>"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="text-gray-400 hover:text-white transition-colors hover:scale-110 transform"
                            title="<?= $social['label'] ?>">
                            <i class="<?= $social['icon'] ?> text-xl"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Menu Mobile -->
            <button class="md:hidden text-gray-300 hover:text-white" onclick="toggleMobileMenu()">
                <i class="fas fa-bars text-2xl"></i>
            </button>
        </div>

        <!-- Menu Mobile Dropdown -->
        <div id="mobileMenu" class="hidden md:hidden mt-4 pb-4">
            <ul class="space-y-3">
                <?php foreach ($menuItems as $item): ?>
                    <li>
                        <a href="<?= $item['href'] ?>"
                            class="flex items-center space-x-2 text-gray-300 hover:text-lime-500 transition-colors">
                            <i class="fas <?= $item['icon'] ?>"></i>
                            <span><?= $item['texto'] ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="pt-3 border-t border-gray-800">
                    <div class="flex space-x-4">
                        <?php foreach ($socialLinks as $social): ?>
                            <a href="<?= $social['href'] ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="text-gray-400 hover:text-white transition-colors">
                                <i class="<?= $social['icon'] ?> text-xl"></i>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

<script>
    function toggleMobileMenu() {
        const menu = document.getElementById('mobileMenu');
        menu.classList.toggle('hidden');
    }
</script>