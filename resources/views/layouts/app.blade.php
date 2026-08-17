<!DOCTYPE html>
<html lang="th" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'ยินดีต้อนรับเข้าสู่เว็บไซต์ของเรา') | Tanawat</title>
    <!-- Fonts / Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-950 text-slate-100 font-sans antialiased bg-mesh-pattern min-h-screen selection:bg-cyan-500 selection:text-slate-950 overflow-x-hidden">
    <!-- Navbar -->
    <nav class="sticky top-0 z-50 w-full border-b border-slate-800/80 bg-slate-950/80 backdrop-blur-md transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="flex items-center gap-2 group">
                        <div class="w-9 h-9 rounded-xl bg-gradient-to-tr from-cyan-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-cyan-500/20 group-hover:rotate-6 transition-transform duration-300">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="font-extrabold text-xl tracking-tight text-white group-hover:text-cyan-400 transition-colors duration-300">Tanawat<span class="text-cyan-400">.</span></span>
                    </a>
                </div>

                <!-- Navigation Links (Desktop) -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-sm font-semibold transition-colors duration-200 {{ request()->is('/') ? 'text-cyan-400' : 'text-slate-300 hover:text-cyan-400' }}">หน้าแรก</a>
                    <a href="/about" class="text-sm font-semibold transition-colors duration-200 {{ request()->is('about') ? 'text-cyan-400' : 'text-slate-300 hover:text-cyan-400' }}">เกี่ยวกับเรา</a>
                    <a href="/blog" class="text-sm font-semibold transition-colors duration-200 {{ request()->is('blog') || request()->is('blog/*') ? 'text-cyan-400' : 'text-slate-300 hover:text-cyan-400' }}">บทความ</a>
                    <a href="/student/68152310076-1" class="text-sm font-semibold transition-colors duration-200 {{ request()->is('student/*') ? 'text-cyan-400' : 'text-slate-300 hover:text-cyan-400' }}">ประวัตินักศึกษา</a>
                </div>

                <!-- Action Button -->
                <div class="hidden md:block">
                    <a href="/blog" class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-slate-100 rounded-xl group bg-gradient-to-br from-cyan-500 to-indigo-500 group-hover:from-cyan-500 group-hover:to-indigo-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-cyan-800 transition-all duration-300">
                        <span class="relative px-5 py-2 transition-all ease-in duration-75 bg-slate-900 rounded-xl group-hover:bg-opacity-0">
                            สำรวจบทความ
                        </span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="flex md:hidden">
                    <button id="mobile-menu-btn" type="button" class="text-slate-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-slate-800 rounded-lg p-2 transition-colors">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden border-b border-slate-800 bg-slate-950/95 backdrop-blur-lg px-4 pt-2 pb-4 space-y-2">
            <a href="/" class="block px-3 py-2 rounded-lg text-base font-medium transition-all {{ request()->is('/') ? 'text-cyan-400 bg-slate-900/50' : 'text-slate-300 hover:text-cyan-400 hover:bg-slate-900/30' }}">หน้าแรก</a>
            <a href="/about" class="block px-3 py-2 rounded-lg text-base font-medium transition-all {{ request()->is('about') ? 'text-cyan-400 bg-slate-900/50' : 'text-slate-300 hover:text-cyan-400 hover:bg-slate-900/30' }}">เกี่ยวกับเรา</a>
            <a href="/blog" class="block px-3 py-2 rounded-lg text-base font-medium transition-all {{ request()->is('blog') ? 'text-cyan-400 bg-slate-900/50' : 'text-slate-300 hover:text-cyan-400 hover:bg-slate-900/30' }}">บทความ</a>
            <a href="/student/68152310076-1" class="block px-3 py-2 rounded-lg text-base font-medium transition-all {{ request()->is('student/*') ? 'text-cyan-400 bg-slate-900/50' : 'text-slate-300 hover:text-cyan-400 hover:bg-slate-900/30' }}">ประวัตินักศึกษา</a>
            <div class="pt-2 border-t border-slate-800">
                <a href="/blog" class="block w-full text-center px-4 py-2.5 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-600 font-semibold text-white shadow-lg shadow-cyan-500/20">สำรวจบทความ</a>
            </div>
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="relative">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-950 border-t border-slate-900 py-12 text-slate-500 text-sm relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div class="space-y-4 col-span-1 md:col-span-2">
                    <div class="flex items-center gap-2">
                        <div class="w-8 h-8 rounded-lg bg-gradient-to-tr from-cyan-500 to-indigo-600 flex items-center justify-center shadow">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="font-bold text-white text-lg">Tanawat.</span>
                    </div>
                    <p class="max-w-xs text-slate-500">เว็บไซต์ตัวอย่างสำหรับแสดงความรู้และการเขียนโครงสร้างด้วย Laravel Framework และเครื่องมือพัฒนาอันล้ำสมัย</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">ลิงก์ภายใน</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="hover:text-cyan-400 transition-colors">หน้าแรก</a></li>
                        <li><a href="/about" class="hover:text-cyan-400 transition-colors">เกี่ยวกับเรา</a></li>
                        <li><a href="/blog" class="hover:text-cyan-400 transition-colors">บทความ</a></li>
                        <li><a href="/student/68152310076-1" class="hover:text-cyan-400 transition-colors">ประวัตินักศึกษา</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">ติดต่อเรา</h4>
                    <ul class="space-y-2">
                        <li class="flex items-center gap-2 text-slate-400">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            <span>contact@example.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-slate-900 pt-8 flex flex-col sm:flex-row items-center justify-between gap-4">
                <p>&copy; 2026 Tanawat. All rights reserved.</p>
                <div class="flex gap-4">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Simple Script for Mobile Menu Toggle -->
    <script>
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
            });
        }
    </script>
</body>

</html>
