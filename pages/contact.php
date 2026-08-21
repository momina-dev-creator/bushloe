<!-- Header Banner -->
<section class="bg-brand-50 border-b border-slate-200 py-12">
    <div class="container mx-auto px-4 text-center max-w-3xl">
        <h1 class="text-3xl md:text-4xl font-bold text-brand-500 mb-4">Contact & Arrange a Viewing</h1>
        <p class="text-slate-600 text-base max-w-xl mx-auto leading-relaxed">
            Connect with us to check room availability, schedule property tours, or learn more about our medical clinic facilities.
        </p>
    </div>
</section>

<!-- Content Area -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4 max-w-6xl">
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Info Sidebar (4 cols) -->
            <div class="lg:col-span-4 space-y-6">
                <!-- Contact info card -->
                <div class="bg-slate-50 border border-slate-100 p-6 rounded-lg space-y-4">
                    <h3 class="font-bold text-slate-800 text-lg">Bushloe Healthcare Centre</h3>
                    
                    <div class="space-y-3 text-xs text-slate-600">
                        <div>
                            <span class="font-semibold text-slate-700 block">📍 Address:</span>
                            <span class="block mt-0.5">48 Bushloe</span>
                            <span class="block">Wigston, Leicester</span>
                            <span class="block">LE18 2BA</span>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-700 block">📞 Telephone:</span>
                            <a href="tel:07448441690" class="text-brand-500 hover:underline">07448 441690</a>
                        </div>
                        <div>
                            <span class="font-semibold text-slate-700 block">💬 WhatsApp / Text:</span>
                            <a href="https://wa.me/447448441690" target="_blank" class="text-brand-500 hover:underline">Chat on WhatsApp</a>
                        </div>
                    </div>
                </div>

                <!-- Hours card -->
                <div class="bg-slate-50 border border-slate-100 p-6 rounded-lg">
                    <h3 class="font-bold text-slate-800 text-sm mb-3">Enquiries Desk Hours</h3>
                    <ul class="text-xs text-slate-500 space-y-1.5">
                        <li class="flex justify-between"><span>Monday - Friday:</span> <span class="font-medium text-slate-700">9:00 AM - 5:30 PM</span></li>
                        <li class="flex justify-between"><span>Saturday:</span> <span class="font-medium text-slate-700">10:00 AM - 2:00 PM</span></li>
                        <li class="flex justify-between"><span>Sunday:</span> <span class="font-medium text-slate-700">Closed</span></li>
                    </ul>
                </div>
            </div>

            <!-- Right Forms Column (8 cols) -->
            <div class="lg:col-span-8 bg-white border border-slate-200 rounded-lg shadow-sm overflow-hidden">
                <!-- Tab Headers -->
                <div class="flex border-b border-slate-200">
                    <button id="tab-enquire" class="flex-1 py-4 text-center font-bold text-sm bg-slate-50 text-brand-500 border-b-2 border-brand-500 focus:outline-none transition">
                        🏢 ENQUIRE ABOUT A ROOM
                    </button>
                    <button id="tab-viewing" class="flex-1 py-4 text-center font-bold text-sm bg-white text-slate-500 hover:text-brand-500 focus:outline-none border-b-2 border-transparent transition">
                        📅 BOOK A VIEWING
                    </button>
                </div>

                <div class="p-6">
                    
                    <!-- Form 1: Enquire About a Room -->
                    <form id="form-enquire-el" action="submit.php" method="POST" class="space-y-4">
                        <input type="hidden" name="form_type" value="enquiry">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">FULL NAME *</label>
                                <input type="text" name="name" required class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. Dr. John Doe">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">HEALTHCARE PROFESSION / SPECIALTY</label>
                                <input type="text" name="profession" class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. Physiotherapist, Consultant GP">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">EMAIL ADDRESS *</label>
                                <input type="email" name="email" required class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. john@example.com">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">TELEPHONE / WHATSAPP NUMBER *</label>
                                <input type="tel" name="phone" required class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. 07448 441690">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-600 mb-1">YOUR MESSAGE & CLINICAL REQUIREMENTS</label>
                            <textarea name="message" rows="5" class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="Describe details such as number of rooms needed, preferred startup date, specific alterations..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-3 rounded text-xs transition shadow-sm uppercase">
                            Submit Room Enquiry
                        </button>
                    </form>

                    <!-- Form 2: Book a Viewing (Hidden by default) -->
                    <form id="form-viewing-el" action="submit.php" method="POST" class="space-y-4 hidden">
                        <input type="hidden" name="form_type" value="viewing">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">FULL NAME *</label>
                                <input type="text" name="name" required class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. Dr. Jane Smith">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">PROFESSION / ORGANISATION</label>
                                <input type="text" name="profession" class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. Childs Clinic Ltd">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">EMAIL ADDRESS *</label>
                                <input type="email" name="email" required class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. jane@example.com">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">TELEPHONE NUMBER *</label>
                                <input type="tel" name="phone" required class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="e.g. 07448 441690">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">PREFERRED VIEWING DATE</label>
                                <input type="date" name="viewing_date" class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-slate-600 mb-1">PREFERRED TIME OF DAY</label>
                                <select name="viewing_time" class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none">
                                    <option value="morning">Morning (9:00 AM - 12:00 PM)</option>
                                    <option value="midday">Midday (12:00 PM - 2:00 PM)</option>
                                    <option value="afternoon">Afternoon (2:00 PM - 5:00 PM)</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-600 mb-1">ADDITIONAL NOTES / QUESTIONS</label>
                            <textarea name="message" rows="4" class="w-full border border-slate-300 rounded px-3 py-2 text-xs focus:ring-1 focus:ring-brand-500 focus:outline-none" placeholder="Any specific details you'd like to inspect during the viewing..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-brand-500 hover:bg-brand-600 text-white font-bold py-3 rounded text-xs transition shadow-sm uppercase">
                            Book Viewing Appointment
                        </button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- Simple Tab switcher Javascript -->
<script>
    const btnEnquire = document.getElementById('tab-enquire');
    const btnViewing = document.getElementById('tab-viewing');
    
    const formEnquire = document.getElementById('form-enquire-el');
    const formViewing = document.getElementById('form-viewing-el');

    if (btnEnquire && btnViewing && formEnquire && formViewing) {
        btnEnquire.addEventListener('click', () => {
            // Activate Enquire Button
            btnEnquire.classList.add('bg-slate-50', 'text-brand-500', 'border-brand-500');
            btnEnquire.classList.remove('bg-white', 'text-slate-500', 'border-transparent');
            
            // Deactivate Viewing Button
            btnViewing.classList.remove('bg-slate-50', 'text-brand-500', 'border-brand-500');
            btnViewing.classList.add('bg-white', 'text-slate-500', 'border-transparent');

            // Toggle Forms
            formEnquire.classList.remove('hidden');
            formViewing.classList.add('hidden');
        });

        btnViewing.addEventListener('click', () => {
            // Activate Viewing Button
            btnViewing.classList.add('bg-slate-50', 'text-brand-500', 'border-brand-500');
            btnViewing.classList.remove('bg-white', 'text-slate-500', 'border-transparent');
            
            // Deactivate Enquire Button
            btnEnquire.classList.remove('bg-slate-50', 'text-brand-500', 'border-brand-500');
            btnEnquire.classList.add('bg-white', 'text-slate-500', 'border-transparent');

            // Toggle Forms
            formViewing.classList.remove('hidden');
            formEnquire.classList.add('hidden');
        });
    }
</script>
