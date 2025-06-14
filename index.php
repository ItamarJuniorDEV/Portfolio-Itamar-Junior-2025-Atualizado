<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itamar Junior - Desenvolvedor Backend</title>
    <meta name="description" content="Desenvolvedor Backend especializado em PHP, Laravel e Node.js. Confira meus projetos e experiências.">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(135deg, #84cc16 0%, #bef264 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient-lime {
            background: linear-gradient(135deg, #84cc16 0%, #bef264 100%);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(132, 204, 22, 0.15);
        }

        .tech-badge {
            transition: all 0.2s ease;
        }

        .tech-badge:hover {
            transform: scale(1.05);
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .float-animation {
            animation: float 6s ease-in-out infinite;
        }

        /* Customizações de cores verde limão */
        .bg-lime-glow {
            background: rgba(132, 204, 22, 0.1);
            border: 1px solid rgba(132, 204, 22, 0.3);
        }

        .text-lime-500 {
            color: #84cc16;
        }

        .border-lime-500 {
            border-color: #84cc16;
        }

        /* Compensar altura do header fixo */
        .header-offset {
            padding-top: 80px;
        }

        @media (min-width: 768px) {
            .header-offset {
                padding-top: 100px;
            }
        }
    </style>
</head>

<body class="bg-black text-gray-200 overflow-x-hidden">

    <?php include('./componentes/header.php') ?>

    <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 xl:px-12">

        <!-- Hero Section -->
        <section class="header-offset pb-8 md:pb-12">
            <?php include('./componentes/hero.php'); ?>
        </section>

        <!-- Sobre Mim -->
        <section class="py-8 md:py-12" id="sobre">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 text-center">
                    <span class="gradient-text">Sobre Mim</span>
                </h2>
                <div class="bg-black/50 backdrop-blur-sm rounded-2xl p-6 md:p-8 lg:p-10 border border-gray-800 animate-on-scroll">
                    <p class="text-base md:text-lg leading-relaxed text-gray-300 mb-6">
                        Eu sou desenvolvedor backend porque gosto de fazer as coisas funcionarem de verdade. Trabalho com PHP, Laravel e Node.js, sempre focando em código limpo que roda rápido e sem erro.
                        Acredito que tecnologia é pra facilitar a vida das pessoas. Por isso, busco sempre aprender e encarar desafios que tragam resultado de verdade, não só linhas de código.
                    </p>
                    <p class="text-base md:text-lg leading-relaxed text-gray-300">
                        Gosto de usar tecnologia pra resolver problemas de verdade.
                        Tô sempre atrás de projetos que me desafiem, me façam aprender e onde eu possa realmente somar com o que sei.
                    </p>
                </div>
            </div>
        </section>

        <!-- Habilidades -->
        <section class="py-8 md:py-12" id="habilidades">
            <?php include('./componentes/habilidades.php'); ?>
        </section>

        <!-- Projetos -->
        <section class="py-8 md:py-12" id="projetos">
            <div>
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 md:mb-12 text-center">
                    <span class="gradient-text">Projetos em Destaque</span>
                </h2>
                <?php include('./componentes/projetos.php'); ?>
            </div>
        </section>

        <!-- Contato -->
        <section class="py-8 md:py-12" id="contato">
            <?php include('./componentes/contato.php'); ?>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-800 py-6 md:py-8">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 text-center">
            <p class="text-gray-400 text-sm md:text-base">
                © <?= date('Y') ?> Itamar Junior. Desenvolvido com <span class="text-lime-500">❤️</span> e PHP
            </p>
        </div>
    </footer>

    <!-- Script para animações ao scroll -->
    <script>
        // Smooth scroll para links internos com offset para header fixo
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const headerHeight = 80;
                    const targetPosition = target.offsetTop - headerHeight;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animação ao aparecer na tela
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('opacity-100', 'translate-y-0');
                    entry.target.classList.remove('opacity-0', 'translate-y-10');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => {
            el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
            observer.observe(el);
        });
    </script>

</body>

</html>