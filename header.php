<!DOCTYPE html>
<html lang="en-GB">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
        $titles = [
            'home' => 'Clinical Rooms to Rent Leicester | Bushloe Healthcare Centre, Wigston',
            'rooms' => 'Clinical Rooms Available to Rent | Bushloe Healthcare Centre',
            'circumcision' => 'Specialist Circumcision Service | Bushloe Circumcision Clinic',
            'facilities' => 'Our Facilities & CQC Compliance | Bushloe Healthcare Centre',
            'contact' => 'Arrange a Viewing & Contact Us | Bushloe Healthcare Centre'
        ];
        echo isset($titles[$page]) ? $titles[$page] : 'Bushloe Healthcare Centre';
    ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0f7fa',
                            100: '#e0f0f5',
                            500: '#0f4761', // The elegant medical dark blue from medigold-health
                            600: '#0b364a',
                            700: '#156082',
                            accent: '#a3924f' // The elegant gold color from medigold-health
                        }
                    },
                    fontFamily: {
                        sans: ['Lato', 'sans-serif'],
                        display: ['Play', 'serif']
                    }
                }
            }
        }
    </script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900|Play:400,700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Lato', sans-serif;
        }
        h1, h2, h3, .font-display {
            font-family: 'Play', serif;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 flex flex-col min-h-screen">

    <!-- Top Info Bar -->
    <div class="bg-brand-500 text-white text-xs py-2 px-4">
        <div class="container mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
            <div class="flex items-center gap-4">
                <span>📍 48 Bushloe, Wigston, Leicester, LE18 2BA</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="tel:07448441690" class="hover:text-brand-accent transition">📞 07448 441690</a>
                <a href="https://wa.me/447448441690" target="_blank" class="hover:text-brand-accent transition">💬 WhatsApp</a>
            </div>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="bg-white border-b border-slate-200 sticky top-0 z-50 shadow-sm">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <!-- Logo Section -->
            <a href="index.php?page=home" class="flex items-center gap-3">
                <?php if (file_exists(__DIR__ . '/logo.png')): ?>
                    <img src="logo.png" alt="Bushloe Healthcare Centre Logo" class="h-12 w-auto object-contain">
                <?php endif; ?>
                <div class="flex flex-col">
                    <span class="text-lg font-bold tracking-tight text-brand-500 leading-tight">BUSHLOE</span>
                    <span class="text-xs font-semibold tracking-wider text-brand-accent uppercase leading-none">HEALTHCARE CENTRE</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <nav class="hidden lg:flex items-center gap-8 font-medium">
                <a href="index.php?page=home" class="<?php echo $page === 'home' ? 'text-brand-accent border-b-2 border-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-1 transition">HOME</a>
                <a href="index.php?page=rooms" class="<?php echo $page === 'rooms' ? 'text-brand-accent border-b-2 border-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-1 transition">CLINICAL ROOMS</a>
                <a href="index.php?page=circumcision" class="<?php echo $page === 'circumcision' ? 'text-brand-accent border-b-2 border-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-1 transition">CIRCUMCISION CLINIC</a>
                <a href="index.php?page=facilities" class="<?php echo $page === 'facilities' ? 'text-brand-accent border-b-2 border-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-1 transition">FACILITIES</a>
                <a href="index.php?page=contact" class="<?php echo $page === 'contact' ? 'text-brand-accent border-b-2 border-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-1 transition">CONTACT</a>
            </nav>

            <!-- CTA Header Button -->
            <div class="hidden sm:flex items-center gap-4">
                <a href="index.php?page=contact" class="bg-brand-500 text-white px-4 py-2 rounded font-semibold text-sm hover:bg-brand-600 transition shadow-sm">BOOK A VIEWING</a>
            </div>

            <!-- Mobile Hamburger Menu Button -->
            <button id="menu-btn" class="lg:hidden text-slate-600 hover:text-brand-500 focus:outline-none" aria-label="Toggle Menu">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Mobile Menu dropdown -->
        <div id="mobile-menu" class="hidden lg:hidden border-t border-slate-100 bg-white">
            <div class="px-4 py-3 flex flex-col gap-3 font-medium shadow-inner">
                <a href="index.php?page=home" class="<?php echo $page === 'home' ? 'text-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-2 transition">HOME</a>
                <a href="index.php?page=rooms" class="<?php echo $page === 'rooms' ? 'text-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-2 transition">CLINICAL ROOMS</a>
                <a href="index.php?page=circumcision" class="<?php echo $page === 'circumcision' ? 'text-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-2 transition">CIRCUMCISION CLINIC</a>
                <a href="index.php?page=facilities" class="<?php echo $page === 'facilities' ? 'text-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-2 transition">FACILITIES</a>
                <a href="index.php?page=contact" class="<?php echo $page === 'contact' ? 'text-brand-accent' : 'text-slate-600 hover:text-brand-500'; ?> py-2 transition">CONTACT</a>
                <a href="index.php?page=contact" class="bg-brand-500 text-white text-center py-2 rounded font-semibold text-sm hover:bg-brand-600 transition mt-2">BOOK A VIEWING</a>
            </div>
        </div>
    </header>

    <main class="flex-grow">
