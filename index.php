<?php
// Simple PHP Logic for Form Submission
$messageSent = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // In a real scenario, you would process the email here.
    // For this landing page, we simulate a successful submission.
    $email = htmlspecialchars($_POST['email'] ?? '');
    if (!empty($email)) {
        $messageSent = true;
    }
}
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NexusPOS - Modern Point of Sale System</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            500: '#0ea5e9', // Sky 500
                            600: '#0284c7', // Sky 600
                            900: '#0c4a6e', // Sky 900
                        }
                    }
                }
            }
        }
    </script>
    <style>
        /* Custom animations not in default Tailwind */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
            opacity: 0;
            transform: translateY(20px);
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, #f8fafc 0%, #eff6ff 100%);
        }

        /* Added for TC-34: Subtle Grid Pattern */
        .hero-pattern {
            background-image: radial-gradient(#cbd5e1 1px, transparent 1px);
            background-size: 40px 40px;
        }
    </style>
</head>
<body class="font-sans text-slate-800 antialiased overflow-x-hidden">

    <!-- Notification Toast (PHP Triggered) -->
    <?php if ($messageSent): ?>
    <div id="toast" class="fixed top-5 right-5 z-50 bg-green-500 text-white px-6 py-4 rounded-lg shadow-xl flex items-center space-x-3 animate-bounce">
        <i data-lucide="check-circle" class="w-6 h-6"></i>
        <span>Thanks! We'll be in touch shortly.</span>
        <button onclick="document.getElementById('toast').remove()" class="ml-4 hover:text-green-100"><i data-lucide="x" class="w-4 h-4"></i></button>
    </div>
    <?php endif; ?>

    <!-- Navigation -->
    <nav class="fixed w-full z-40 bg-white/90 backdrop-blur-md border-b border-slate-100 transition-all duration-300" id="navbar">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0 flex items-center gap-2 cursor-pointer" onclick="window.scrollTo(0,0)">
                    <div class="w-10 h-10 bg-brand-600 rounded-lg flex items-center justify-center text-white shadow-lg shadow-brand-500/20">
                        <i data-lucide="layers" class="w-6 h-6"></i>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-slate-900">Nexus<span class="text-brand-600">POS</span></span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#features" class="text-slate-600 hover:text-brand-600 font-medium transition">Features</a>
                    <a href="#solutions" class="text-slate-600 hover:text-brand-600 font-medium transition">Solutions</a>
                    <a href="#pricing" class="text-slate-600 hover:text-brand-600 font-medium transition">Pricing</a>
                    <a href="#contact" class="px-5 py-2.5 bg-brand-600 hover:bg-brand-700 text-white font-medium rounded-full transition shadow-lg shadow-brand-500/30 hover:shadow-brand-500/50">Get Started</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-brand-600 focus:outline-none">
                        <i data-lucide="menu" class="w-8 h-8"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Panel -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-slate-100 absolute w-full">
            <div class="px-4 pt-2 pb-6 space-y-2 shadow-lg">
                <a href="#features" class="block px-3 py-3 text-slate-600 font-medium hover:bg-slate-50 rounded-md">Features</a>
                <a href="#solutions" class="block px-3 py-3 text-slate-600 font-medium hover:bg-slate-50 rounded-md">Solutions</a>
                <a href="#pricing" class="block px-3 py-3 text-slate-600 font-medium hover:bg-slate-50 rounded-md">Pricing</a>
                <a href="#contact" class="block px-3 py-3 text-brand-600 font-bold hover:bg-slate-50 rounded-md">Get Started</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section (Updated for TC-34) -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 overflow-hidden hero-gradient hero-pattern">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-brand-100 blur-3xl opacity-60"></div>
        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-purple-100 blur-3xl opacity-60"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 lg:gap-8 items-center">
                <!-- Text Content -->
                <div class="text-center lg:text-left fade-in-up" style="animation-delay: 0.1s;">
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-white border border-brand-100 text-brand-600 text-sm font-semibold mb-6 shadow-sm">
                        <span class="flex h-2 w-2 rounded-full bg-brand-600 mr-2 animate-pulse"></span>
                        New Version 2.0 Released
                    </div>
                    <h1 class="text-5xl lg:text-6xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                        Sell smarter with <br>
                        <!-- Gradient Text Added for TC-34 -->
                        <span class="bg-clip-text text-transparent bg-gradient-to-r from-brand-600 to-purple-600">Nexus Intelligence</span>
                    </h1>
                    <p class="text-lg text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        The all-in-one POS system designed to streamline operations, manage inventory in real-time, and boost customer retention.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#contact" class="px-8 py-4 bg-brand-600 hover:bg-brand-700 text-white font-bold rounded-xl shadow-xl shadow-brand-500/30 transition transform hover:-translate-y-1 hover:shadow-brand-500/50 flex items-center justify-center gap-2 ring-offset-2 focus:ring-2 ring-brand-500">
                            Start Free Trial
                            <i data-lucide="arrow-right" class="w-5 h-5"></i>
                        </a>
                        <a href="#features" class="px-8 py-4 bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 font-bold rounded-xl shadow-sm hover:shadow-md transition transform hover:-translate-y-1 flex items-center justify-center gap-2">
                            <i data-lucide="play-circle" class="w-5 h-5 text-slate-400"></i>
                            Watch Demo
                        </a>
                    </div>
                    <div class="mt-8 flex items-center justify-center lg:justify-start gap-6 text-slate-500 text-sm font-medium">
                        <div class="flex items-center gap-1"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> No credit card required</div>
                        <div class="flex items-center gap-1"><i data-lucide="check" class="w-4 h-4 text-green-500"></i> 14-day free trial</div>
                    </div>
                </div>

                <!-- POS Mockup Image Section (Preserved from TC-33) -->
                <div class="relative lg:h-[600px] w-full flex items-center justify-center fade-in-up" style="animation-delay: 0.3s;">
                    <div class="relative w-full max-w-lg z-20">
                        <img 
                            src="https://images.unsplash.com/photo-1556740758-90de374c12ad?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80" 
                            alt="NexusPOS Dashboard Interface" 
                            class="rounded-2xl shadow-2xl border border-slate-100 transform rotate-y-12 hover:rotate-0 transition duration-700 ease-out w-full ring-1 ring-slate-900/5"
                        >
                        
                        <!-- Floating Badge 1 -->
                        <div class="absolute top-10 -right-4 md:-right-10 z-30 bg-white/90 backdrop-blur-sm p-3 rounded-xl shadow-lg border border-slate-100 flex items-center gap-3 animate-bounce" style="animation-duration: 3s;">
                            <div class="bg-green-100 p-2 rounded-lg text-green-600"><i data-lucide="shopping-bag" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs text-slate-500">New Order</p>
                                <p class="font-bold text-slate-800 text-sm">+$124.00</p>
                            </div>
                        </div>

                        <!-- Floating Badge 2 -->
                        <div class="absolute -bottom-6 -left-4 md:-left-10 z-30 bg-white/90 backdrop-blur-sm p-3 rounded-xl shadow-lg border border-slate-100 flex items-center gap-3 animate-bounce" style="animation-duration: 4s;">
                            <div class="bg-orange-100 p-2 rounded-lg text-orange-600"><i data-lucide="users" class="w-5 h-5"></i></div>
                            <div>
                                <p class="text-xs text-slate-500">New Customer</p>
                                <p class="font-bold text-slate-800 text-sm">Sarah J.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Grid -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-brand-600 font-semibold tracking-wide uppercase text-sm mb-2">Powerful Features</h2>
                <h3 class="text-3xl font-bold text-slate-900 sm:text-4xl">Everything you need to run your store</h3>
                <p class="mt-4 text-slate-600 text-lg">From inventory tracking to customer loyalty programs, NexusPOS gives you the tools to grow.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="box" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Inventory Management</h4>
                    <p class="text-slate-600 leading-relaxed">Track stock in real-time across multiple locations. Get low-stock alerts automatically.</p>
                </div>

                <!-- Feature 2 -->
                <div class="group p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-purple-100 text-purple-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="bar-chart-2" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Sales Analytics</h4>
                    <p class="text-slate-600 leading-relaxed">Visual reports on sales, best-selling items, and employee performance to make data-driven decisions.</p>
                </div>

                <!-- Feature 3 -->
                <div class="group p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-green-100 text-green-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="wifi-off" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Offline Mode</h4>
                    <p class="text-slate-600 leading-relaxed">Keep selling even when the internet goes down. Data syncs automatically when you're back online.</p>
                </div>

                <!-- Feature 4 -->
                <div class="group p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-orange-100 text-orange-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Customer CRM</h4>
                    <p class="text-slate-600 leading-relaxed">Build profiles, track purchase history, and create loyalty programs to keep customers coming back.</p>
                </div>

                <!-- Feature 5 -->
                <div class="group p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-red-100 text-red-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="smartphone" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Mobile POS</h4>
                    <p class="text-slate-600 leading-relaxed">Turn any tablet or smartphone into a checkout station. Line-busting made easy.</p>
                </div>

                <!-- Feature 6 -->
                <div class="group p-8 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-xl transition duration-300">
                    <div class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition">
                        <i data-lucide="shield-check" class="w-6 h-6"></i>
                    </div>
                    <h4 class="text-xl font-bold text-slate-900 mb-3">Secure Payments</h4>
                    <p class="text-slate-600 leading-relaxed">End-to-end encryption for all transactions. Compatible with all major card readers.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Visual Divider / CTA -->
    <section class="py-20 bg-brand-900 text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to upgrade your checkout experience?</h2>
            <p class="text-brand-100 text-lg mb-8 max-w-2xl mx-auto">Join 10,000+ retailers using NexusPOS to process over $1B in transactions annually.</p>
            <a href="#contact" class="inline-block bg-white text-brand-900 font-bold py-4 px-8 rounded-full hover:bg-brand-50 transition shadow-lg">Get Started Now</a>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-slate-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-slate-900">Simple, Transparent Pricing</h2>
                <p class="mt-4 text-slate-600">No hidden fees. Change plans anytime.</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-8 items-center max-w-5xl mx-auto">
                <!-- Starter Plan -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition relative">
                    <h3 class="text-xl font-bold text-slate-900">Starter</h3>
                    <p class="text-slate-500 text-sm mt-2">For pop-ups and small shops.</p>
                    <div class="my-6">
                        <span class="text-4xl font-bold text-slate-900">$29</span><span class="text-slate-500">/mo</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> 1 Register</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Basic Inventory</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Email Receipts</li>
                        <li class="flex items-center text-slate-400"><i data-lucide="x" class="w-5 h-5 mr-2"></i> No Analytics</li>
                    </ul>
                    <a href="#contact" class="block w-full py-3 px-4 bg-slate-100 text-slate-700 font-semibold rounded-lg text-center hover:bg-slate-200 transition">Choose Starter</a>
                </div>

                <!-- Pro Plan (Popular) -->
                <div class="bg-white p-8 rounded-2xl shadow-xl border-2 border-brand-500 relative transform scale-105 z-10">
                    <div class="absolute top-0 right-0 bg-brand-500 text-white text-xs font-bold px-3 py-1 rounded-bl-xl rounded-tr-lg uppercase tracking-wide">Most Popular</div>
                    <h3 class="text-xl font-bold text-slate-900">Professional</h3>
                    <p class="text-slate-500 text-sm mt-2">For growing businesses.</p>
                    <div class="my-6">
                        <span class="text-4xl font-bold text-slate-900">$79</span><span class="text-slate-500">/mo</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> 3 Registers</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Advanced Inventory</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Sales Analytics</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Employee Management</li>
                    </ul>
                    <a href="#contact" class="block w-full py-3 px-4 bg-brand-600 text-white font-semibold rounded-lg text-center hover:bg-brand-700 transition shadow-lg shadow-brand-500/30">Choose Pro</a>
                </div>

                <!-- Enterprise Plan -->
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-200 hover:shadow-md transition relative">
                    <h3 class="text-xl font-bold text-slate-900">Enterprise</h3>
                    <p class="text-slate-500 text-sm mt-2">For multi-store franchises.</p>
                    <div class="my-6">
                        <span class="text-4xl font-bold text-slate-900">$199</span><span class="text-slate-500">/mo</span>
                    </div>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Unlimited Registers</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> Multi-store Sync</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> API Access</li>
                        <li class="flex items-center text-slate-600"><i data-lucide="check" class="w-5 h-5 text-brand-600 mr-2"></i> 24/7 Dedicated Support</li>
                    </ul>
                    <a href="#contact" class="block w-full py-3 px-4 bg-slate-100 text-slate-700 font-semibold rounded-lg text-center hover:bg-slate-200 transition">Contact Sales</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact / Lead Gen Form -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-brand-50 rounded-3xl p-8 md:p-12 border border-brand-100 shadow-inner">
                <div class="grid md:grid-cols-2 gap-12">
                    <div>
                        <h2 class="text-3xl font-bold text-slate-900 mb-4">Book a Free Demo</h2>
                        <p class="text-slate-600 mb-6">See how NexusPOS can transform your business. Fill out the form and our team will get back to you within 24 hours.</p>
                        
                        <div class="space-y-4 mt-8">
                            <div class="flex items-start gap-3">
                                <div class="bg-white p-2 rounded-full text-brand-600 shadow-sm"><i data-lucide="mail" class="w-5 h-5"></i></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Email Us</p>
                                    <p class="text-sm text-slate-600">hello@nexuspos.com</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-3">
                                <div class="bg-white p-2 rounded-full text-brand-600 shadow-sm"><i data-lucide="phone" class="w-5 h-5"></i></div>
                                <div>
                                    <p class="text-sm font-semibold text-slate-900">Call Us</p>
                                    <p class="text-sm text-slate-600">+1 (555) 123-4567</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact" class="bg-white p-6 rounded-2xl shadow-lg border border-slate-100">
                        <div class="space-y-4">
                            <div>
                                <label for="name" class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
                                <input type="text" id="name" name="name" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition" placeholder="John Doe">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-slate-700 mb-1">Business Email</label>
                                <input type="email" id="email" name="email" required class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition" placeholder="john@company.com">
                            </div>
                            <div>
                                <label for="type" class="block text-sm font-medium text-slate-700 mb-1">Business Type</label>
                                <select id="type" name="type" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-brand-500 focus:border-brand-500 outline-none transition bg-white">
                                    <option>Retail</option>
                                    <option>Restaurant</option>
                                    <option>Service</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <button type="submit" class="w-full bg-brand-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-brand-700 transition flex justify-center items-center gap-2">
                                Request Demo <i data-lucide="send" class="w-4 h-4"></i>
                            </button>
                            <p class="text-xs text-slate-400 text-center mt-2">By submitting, you agree to our Terms of Service.</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-12 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-1 md:col-span-1">
                    <div class="flex items-center gap-2 mb-4 text-white">
                        <i data-lucide="layers" class="w-6 h-6 text-brand-500"></i>
                        <span class="font-bold text-xl">NexusPOS</span>
                    </div>
                    <p class="text-sm">Empowering modern retailers with technology that simplifies, scales, and succeeds.</p>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-brand-400 transition">Features</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition">Hardware</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition">Pricing</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition">API Docs</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-white font-semibold mb-4">Company</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="hover:text-brand-400 transition">About Us</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition">Careers</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition">Blog</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition">Contact</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-white font-semibold mb-4">Stay Updated</h4>
                    <form class="flex gap-2">
                        <input type="email" placeholder="Email" class="bg-slate-800 border-none rounded-lg px-3 py-2 text-sm text-white w-full focus:ring-1 focus:ring-brand-500 outline-none">
                        <button class="bg-brand-600 hover:bg-brand-700 text-white rounded-lg px-3 py-2 transition"><i data-lucide="arrow-right" class="w-4 h-4"></i></button>
                    </form>
                </div>
            </div>
            
            <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm">&copy; <?php echo date("Y"); ?> NexusPOS Inc. All rights reserved.</p>
                <div class="flex space-x-4">
                    <a href="#" class="hover:text-white transition"><i data-lucide="twitter" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-white transition"><i data-lucide="facebook" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-white transition"><i data-lucide="linkedin" class="w-5 h-5"></i></a>
                    <a href="#" class="hover:text-white transition"><i data-lucide="instagram" class="w-5 h-5"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Initialize Icons & Scripts -->
    <script>
        lucide.createIcons();

        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 10) {
                navbar.classList.add('shadow-md', 'bg-white/95');
                navbar.classList.remove('bg-white/90');
            } else {
                navbar.classList.remove('shadow-md', 'bg-white/95');
                navbar.classList.add('bg-white/90');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>