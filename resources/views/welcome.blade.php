@extends('layouts.app')

@section('title', 'ยินดีต้อนรับเข้าสู่เว็บไซต์ของเรา')

@section('content')
<!-- Hero Section -->
<section class="relative pt-20 pb-24 md:pt-32 md:pb-36 overflow-hidden">
    <!-- Background Glow Blobs -->
    <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-float pointer-events-none"></div>
    <div class="absolute top-1/3 right-1/4 translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl animate-float-delayed pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-cyan-500/30 bg-cyan-950/30 text-cyan-400 text-xs font-semibold tracking-wide mb-6 animate-pulse-slow">
            <span class="w-1.5 h-1.5 rounded-full bg-cyan-400 animate-ping"></span>
            ยินดีต้อนรับเข้าสู่เทคโนโลยีแห่งอนาคต
        </div>

        <!-- Main Heading -->
        <h1 class="text-4xl sm:text-6xl lg:text-7xl font-extrabold tracking-tight mb-8 leading-tight">
            สร้างสรรค์ผลงานด้วย <br>
            <span class="text-gradient">Laravel & Tailwind CSS</span>
        </h1>

        <!-- Subtitle -->
        <p class="max-w-2xl mx-auto text-lg sm:text-xl text-slate-400 mb-10 leading-relaxed">
            ยกระดับประสบการณ์การพัฒนาเว็บไซต์ให้รวดเร็ว ปลอดภัย และมีความพรีเมียมด้วยโครงสร้างเว็บที่ทันสมัย ตอบโจทย์ทุกการใช้งานได้อย่างเต็มประสิทธิภาพ
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="/blog" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-600 text-white font-semibold shadow-lg shadow-cyan-500/25 hover:shadow-cyan-500/40 hover:-translate-y-0.5 transition-all duration-300">
                เริ่มต้นสำรวจบทความ
            </a>
            <a href="/student/68152310076-1" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-gradient-to-r from-cyan-500 to-emerald-500 hover:from-cyan-400 hover:to-emerald-400 text-slate-950 font-bold shadow-lg shadow-cyan-500/20 hover:shadow-cyan-500/35 hover:-translate-y-0.5 transition-all duration-300">
                ดูประวัตินักศึกษา
            </a>
            <a href="/about" class="w-full sm:w-auto px-8 py-4 rounded-xl border border-slate-700 bg-slate-900/50 hover:bg-slate-900 hover:border-slate-600 text-slate-200 font-semibold transition-all duration-300">
                ทำความรู้จักกับเรา
            </a>
        </div>

        <!-- Hero Graphic Mockup -->
        <div class="mt-16 md:mt-20 relative mx-auto max-w-5xl rounded-2xl border border-slate-800 bg-slate-900/30 p-2 backdrop-blur-sm shadow-2xl">
            <div class="rounded-xl border border-slate-800/80 bg-slate-950/80 overflow-hidden shadow-inner aspect-video flex flex-col justify-between">
                <!-- Mockup Header -->
                <div class="flex items-center justify-between px-4 py-3 bg-slate-900/80 border-b border-slate-800">
                    <div class="flex space-x-1.5">
                        <span class="w-3 h-3 rounded-full bg-rose-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-amber-500/80"></span>
                        <span class="w-3 h-3 rounded-full bg-emerald-500/80"></span>
                    </div>
                    <div class="text-xs text-slate-500 font-mono">my-app/resources/views/welcome.blade.php</div>
                    <div class="w-12"></div>
                </div>
                <!-- Mockup Content -->
                <div class="flex-grow flex flex-col items-center justify-center p-8 text-center relative overflow-hidden">
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-purple-500/10 rounded-full blur-2xl animate-pulse-slow"></div>
                    <div class="absolute -left-10 -top-10 w-40 h-40 bg-cyan-500/10 rounded-full blur-2xl animate-pulse-slow"></div>
                    
                    <h3 class="text-2xl font-bold text-slate-200 mb-2">หน้าแรกพร้อมสำหรับแอปพลิเคชันของคุณ</h3>
                    <p class="text-slate-500 text-sm max-w-md">ระบบกำลังทำงานอยู่บน Laravel Development Server ด้วยความเร็วระดับสุดยอด</p>
                    
                    <div class="mt-6 flex gap-3">
                        <span class="px-3 py-1 rounded bg-slate-900 border border-slate-800 text-xs text-cyan-400 font-mono">PHP v8.x</span>
                        <span class="px-3 py-1 rounded bg-slate-900 border border-slate-800 text-xs text-indigo-400 font-mono">Laravel v11.x</span>
                        <span class="px-3 py-1 rounded bg-slate-900 border border-slate-800 text-xs text-purple-400 font-mono">Tailwind v4.0</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="border-y border-slate-900 bg-slate-950/50 py-12 relative z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-6">
                <div class="text-4xl font-extrabold text-white mb-2">100%</div>
                <div class="text-sm font-semibold text-slate-400 uppercase tracking-wider">โหลดหน้าเว็บรวดเร็ว</div>
            </div>
            <div class="p-6 border-y md:border-y-0 md:border-x border-slate-900">
                <div class="text-4xl font-extrabold text-cyan-400 mb-2">Secure</div>
                <div class="text-sm font-semibold text-slate-400 uppercase tracking-wider">ระบบความปลอดภัยชั้นยอด</div>
            </div>
            <div class="p-6">
                <div class="text-4xl font-extrabold text-white mb-2">24/7</div>
                <div class="text-sm font-semibold text-slate-400 uppercase tracking-wider">พร้อมรองรับการใช้งานเสมอ</div>
            </div>
        </div>
    </div>
</section>

<!-- Features Bento Grid Section -->
<section class="py-24 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold tracking-tight text-white mb-4">บริการและจุดเด่นของระบบ</h2>
            <p class="max-w-xl mx-auto text-slate-400 text-base">เราคัดสรรเทคโนโลยีที่ดีที่สุดเพื่อส่งต่อเว็บไซต์ที่มีคุณภาพและประสิทธิภาพสูงสุดให้กับคุณ</p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="group relative rounded-2xl border border-slate-900 bg-slate-950 p-8 hover:border-slate-800 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/10 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 rounded-xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Responsive Design</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">รองรับการแสดงผลหน้าจอมือถือ แท็บเล็ต และคอมพิวเตอร์อย่างสวยงามและสมบูรณ์แบบในทุกมิติ</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="group relative rounded-2xl border border-slate-900 bg-slate-950 p-8 hover:border-slate-800 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/10 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 rounded-xl bg-indigo-500/10 flex items-center justify-center text-indigo-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Vite Compilation</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">การทำงานร่วมกับ Vite ทำให้สามารถโหลดหน้าเว็บได้อย่างรวดเร็วและอัปเดตแบบเรียลไทม์ขณะแก้ไขโค้ด</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="group relative rounded-2xl border border-slate-900 bg-slate-950 p-8 hover:border-slate-800 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-b from-purple-500/10 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-12 h-12 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">Modern Security</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">ใช้ฟังก์ชันความปลอดภัยในตัวของ Laravel เพื่อปกป้องข้อมูลสำคัญและการโจมตีในรูปแบบต่างๆ</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Preview About & Blog Section -->
<section class="py-20 border-t border-slate-900 bg-slate-950/20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            
            <!-- Left: About Preview -->
            <div class="space-y-6">
                <div class="text-sm font-semibold text-cyan-400 uppercase tracking-widest">ทำความรู้จักกับเรา</div>
                <h2 class="text-3xl sm:text-4xl font-bold text-white">เราพร้อมสร้างสรรค์ประสบการณ์ดิจิทัลที่ดียิ่งขึ้น</h2>
                <p class="text-slate-400 leading-relaxed">
                    เราคือผู้พัฒนาระบบที่มีความมุ่งมั่นในการเขียนโค้ดที่สะอาด สวยงาม และสามารถใช้งานได้จริง หน้าเว็บไซต์นี้สร้างขึ้นเพื่อทดสอบและจัดแสดงประสิทธิภาพของ Laravel Framework ยุคใหม่ร่วมกับ Tailwind CSS v4
                </p>
                <div class="pt-2">
                    <a href="/about" class="inline-flex items-center gap-2 text-sm font-bold text-cyan-400 hover:text-cyan-300 transition-colors group">
                        อ่านข้อมูลเกี่ยวกับเราเพิ่มเติม
                        <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </a>
                </div>
            </div>

            <!-- Right: Blog Preview Card -->
            <div class="relative">
                <!-- Glow effect -->
                <div class="absolute -inset-1 rounded-2xl bg-gradient-to-r from-cyan-500 to-indigo-500 opacity-20 blur-xl"></div>
                
                <div class="relative rounded-2xl border border-slate-800 bg-slate-900 p-8 shadow-xl">
                    <div class="flex items-center justify-between mb-6">
                        <span class="px-3 py-1 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-400">บทความล่าสุด</span>
                        <span class="text-xs text-slate-500">29 มิถุนายน 2026</span>
                    </div>
                    <h3 class="text-xl font-bold text-white mb-3">เริ่มต้นเขียน Laravel ในปี 2026 ด้วยฟีเจอร์ใหม่สุดเจ๋ง</h3>
                    <p class="text-slate-400 text-sm mb-6 leading-relaxed">
                        สรุปประเด็นหลักและจุดเด่นของเทคโนโลยีเว็บฟรอนต์เอนด์ รวมไปถึงแนวทางการจัดแต่ง CSS แบบใหม่ที่ช่วยย่นระยะเวลาการทำโปรเจกต์ให้ไวขึ้นเท่าตัว...
                    </p>
                    <a href="/blog" class="block text-center w-full py-3 rounded-xl bg-slate-950 border border-slate-800 text-sm font-bold text-white hover:bg-slate-900 hover:border-slate-700 transition-all duration-300">
                        อ่านบทความทั้งหมด
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Newsletter CTA -->
<section class="py-24 relative overflow-hidden border-t border-slate-900">
    <div class="max-w-4xl mx-auto text-center px-4 relative z-10">
        <h2 class="text-3xl font-extrabold text-white mb-4">ไม่พลาดข่าวสารและอัปเดตใหม่ๆ</h2>
        <p class="text-slate-400 mb-8 max-w-md mx-auto">กรอกอีเมลเพื่อติดตามการอัปเดตระบบ บทความความรู้ และฟีเจอร์ใหม่ๆ จากเรา</p>
        <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="event.preventDefault(); alert('ขอบคุณที่ติดตามข่าวสารของเรา!');">
            <input type="email" required placeholder="อีเมลของคุณ..." class="flex-grow px-4 py-3 rounded-xl bg-slate-900 border border-slate-800 text-white placeholder-slate-500 focus:outline-none focus:ring-2 focus:ring-cyan-500 transition-all">
            <button type="submit" class="px-6 py-3 rounded-xl bg-cyan-500 hover:bg-cyan-600 text-slate-950 font-bold transition-all">
                ติดตามข่าวสาร
            </button>
        </form>
    </div>
</section>
@endsection
