@extends('layouts.app')

@section('title', 'เกี่ยวกับเรา')

@section('content')
<!-- About Section -->
<section class="relative pt-20 pb-24 overflow-hidden">
    <!-- Background Glow Blobs -->
    <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-float pointer-events-none"></div>
    <div class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 w-96 h-96 bg-purple-500/10 rounded-full blur-3xl animate-float-delayed pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Title Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-semibold text-cyan-400 uppercase tracking-widest bg-cyan-950/40 border border-cyan-500/30 px-3 py-1 rounded-full">ทำความรู้จักเรา</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white mt-4 mb-6">
                เกี่ยวกับเรา
            </h1>
            <p class="text-lg text-slate-400 leading-relaxed">
                เรามุ่งมั่นที่จะพัฒนาเว็บแอปพลิเคชันที่มีความรวดเร็ว ปลอดภัย และนำเสนอการใช้งานที่เป็นมิตรกับผู้ใช้ เพื่อยกระดับมาตรฐานทางด้านดิจิทัลในยุคใหม่
            </p>
        </div>

        <!-- Vision and Values Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-20">
            <!-- Card 1: Our Mission -->
            <div class="group relative rounded-2xl border border-slate-900 bg-slate-950/80 p-8 hover:border-slate-800/80 transition-all duration-300">
                <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/5 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-10 h-10 rounded-lg bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-4">พันธกิจของเรา (Our Mission)</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        พัฒนาซอฟต์แวร์ด้วยเทคโนโลยีที่ทันสมัย ส่งมอบผลงานที่ตอบโจทย์ความต้องการทางธุรกิจของผู้ใช้งานอย่างสมบูรณ์แบบ ทั้งความมีเสถียรภาพ ประสิทธิภาพ และความง่ายต่อการพัฒนาต่อยอด
                    </p>
                </div>
            </div>

            <!-- Card 2: Our Vision -->
            <div class="group relative rounded-2xl border border-slate-900 bg-slate-950/80 p-8 hover:border-slate-800/80 transition-all duration-300">
                <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/5 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="w-10 h-10 rounded-lg bg-indigo-500/10 flex items-center justify-center text-indigo-400 mb-6">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-4">วิสัยทัศน์ของเรา (Our Vision)</h2>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        เป็นผู้นำด้านการสร้างสรรค์ประสบการณ์ทางเว็บไซต์ที่ดีเยี่ยม เชื่อมโยงเทคโนโลยีกับธุรกิจให้ทำงานสอดประสานกันได้อย่างราบรื่นที่สุด เพื่อขับเคลื่อนธุรกิจสู่ความสำเร็จในยุคดิจิทัล
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Structure Section -->
        <div class="rounded-2xl border border-slate-900 bg-slate-950/30 p-8 md:p-12 relative overflow-hidden">
            <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-cyan-500/5 rounded-full blur-2xl"></div>
            
            <div class="relative z-10 max-w-2xl">
                <h2 class="text-3xl font-extrabold text-white mb-6">ผู้พัฒนาและสถาปนิกออกแบบระบบ</h2>
                <p class="text-slate-400 text-base leading-relaxed mb-6">
                    ระบบนี้ได้รับการออกแบบและพัฒนาอย่างพิถีพิถันโดยทีมงาน Tanawat เพื่อแสดงศักยภาพสูงสุดของระบบควบคุมเส้นทาง Route และเทมเพลต Blade ยุคใหม่ ภายใต้แนวคิด Clean Architecture 
                </p>
                <div class="flex flex-wrap gap-3">
                    <span class="px-4 py-1.5 rounded-full bg-slate-900 border border-slate-800 text-xs font-semibold text-cyan-400">Laravel v11</span>
                    <span class="px-4 py-1.5 rounded-full bg-slate-900 border border-slate-800 text-xs font-semibold text-indigo-400">Tailwind CSS v4</span>
                    <span class="px-4 py-1.5 rounded-full bg-slate-900 border border-slate-800 text-xs font-semibold text-purple-400">Vite Compiler</span>
                    <span class="px-4 py-1.5 rounded-full bg-slate-900 border border-slate-800 text-xs font-semibold text-pink-400">MySQL Database</span>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
