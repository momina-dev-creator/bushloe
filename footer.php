    </main>

    <!-- Footer Section -->
    <footer class="bg-slate-900 text-slate-300 border-t-4 border-brand-accent pt-12 pb-6">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Col 1: About and Address -->
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <?php if (file_exists(__DIR__ . '/logo.png')): ?>
                        <img src="logo.png" alt="Bushloe Healthcare Centre Logo" class="h-10 w-auto object-contain bg-white p-1 rounded">
                    <?php endif; ?>
                    <div>
                        <span class="text-base font-bold text-white block leading-tight">BUSHLOE</span>
                        <span class="text-xs font-semibold tracking-wider text-brand-accent uppercase block leading-none">HEALTHCARE CENTRE</span>
                    </div>
                </div>
                <p class="text-sm text-slate-400 mb-4 leading-relaxed">
                    Bushloe Healthcare Centre provides dedicated, flexible, and premium clinical spaces for healthcare practitioners and organizations in Wigston, Leicester.
                </p>
                <address class="not-italic text-sm text-slate-400">
                    📍 48 Bushloe, Wigston, Leicester, LE18 2BA
                </address>
            </div>

            <!-- Col 2: Quick Links -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4">QUICK LINKS</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="index.php?page=home" class="hover:text-brand-accent transition">Home</a></li>
                    <li><a href="index.php?page=rooms" class="hover:text-brand-accent transition">Clinical Rooms to Rent</a></li>
                    <li><a href="index.php?page=circumcision" class="hover:text-brand-accent transition">Circumcision Clinic</a></li>
                    <li><a href="index.php?page=facilities" class="hover:text-brand-accent transition">Facilities & CQC</a></li>
                    <li><a href="index.php?page=contact" class="hover:text-brand-accent transition">Book a Viewing</a></li>
                </ul>
            </div>

            <!-- Col 3: Contact & Enquiries -->
            <div>
                <h3 class="text-white font-bold text-lg mb-4">CONTACT & ENQUIRIES</h3>
                <ul class="space-y-3 text-sm">
                    <li class="flex items-center gap-2">
                        <span class="text-brand-accent">📞</span>
                        <a href="tel:07448441690" class="hover:text-white transition font-medium">07448 441690</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="text-brand-accent">💬</span>
                        <a href="https://wa.me/447448441690" target="_blank" class="hover:text-white transition">WhatsApp Chat</a>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-brand-accent mt-0.5">ℹ️</span>
                        <span>Available for viewings, room bookings, and general healthcare spacing enquiries.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container mx-auto px-4 mt-8 pt-6 border-t border-slate-800 text-center text-xs text-slate-500 flex flex-col sm:flex-row justify-between items-center gap-4">
            <p>&copy; <?php echo date('Y'); ?> Bushloe Healthcare Centre. All rights reserved.</p>
            <p>Designed with Class E healthcare commercial compliance.</p>
        </div>
    </footer>

    <!-- Mobile Menu script -->
    <script>
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
                
                // Toggle between hamburger icon and X icon
                if (mobileMenu.classList.contains('hidden')) {
                    menuIcon.setAttribute('d', 'M4 6h16M4 12h16M4 18h16');
                } else {
                    menuIcon.setAttribute('d', 'M6 18L18 6M6 6l12 12');
                }
            });
        }
    </script>
</body>
</html>
