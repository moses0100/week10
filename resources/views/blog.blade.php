@extends('layouts.app')

@section('title', 'บทความทั้งหมด')

@section('content')
<!-- Blog Section -->
<section class="relative pt-20 pb-24 overflow-hidden">
    <!-- Background Glow Blobs -->
    <div class="absolute top-1/3 right-1/4 translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-float pointer-events-none"></div>
    <div class="absolute bottom-1/3 left-1/4 -translate-x-1/2 translate-y-1/2 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl animate-float-delayed pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Title Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-xs font-semibold text-cyan-400 uppercase tracking-widest bg-cyan-950/40 border border-cyan-500/30 px-3 py-1 rounded-full">คลังความรู้</span>
            <h1 class="text-4xl sm:text-5xl font-extrabold tracking-tight text-white mt-4 mb-6">
                บทความล่าสุด
            </h1>
            <p class="text-lg text-slate-400 leading-relaxed">
                ติดตามข่าวสาร อัปเดต และคู่มือการเขียนโค้ดเพื่อพัฒนาทักษะด้านเว็บเทคโนโลยีไปพร้อมกับเรา
            </p>
        </div>

        <!-- Blog Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="group relative rounded-2xl border border-slate-900 bg-slate-950 p-6 flex flex-col justify-between hover:border-slate-800 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-b from-cyan-500/5 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-cyan-500/10 text-cyan-400">Technology</span>
                            <span class="text-xs text-slate-500">5 นาทีในการอ่าน</span>
                        </div>
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-cyan-400 transition-colors duration-200">
                            เริ่มต้นเขียน Laravel ในปี 2026 ด้วยฟีเจอร์ใหม่สุดเจ๋ง
                        </h2>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">
                            สรุปประเด็นหลักและจุดเด่นของเทคโนโลยีเว็บฟรอนต์เอนด์ รวมไปถึงแนวทางการจัดแต่ง CSS แบบใหม่ที่ช่วยย่นระยะเวลาการทำโปรเจกต์ให้ไวขึ้นเท่าตัว...
                        </p>
                    </div>
                    <div class="flex items-center justify-between border-t border-slate-900 pt-4">
                        <span class="text-xs text-slate-500 font-mono">29 มิ.ย. 2026</span>
                        <a href="#" class="inline-flex items-center gap-1.5 text-xs font-bold text-cyan-400 group-hover:text-cyan-300">
                            อ่านต่อ
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="group relative rounded-2xl border border-slate-900 bg-slate-950 p-6 flex flex-col justify-between hover:border-slate-800 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-b from-indigo-500/5 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-indigo-500/10 text-indigo-400">Framework</span>
                            <span class="text-xs text-slate-500">8 นาทีในการอ่าน</span>
                        </div>
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-indigo-400 transition-colors duration-200">
                            วิธีใช้งาน Tailwind CSS v4 สำหรับโปรเจกต์ขนาดใหญ่
                        </h2>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">
                            เจาะลึกระบบใหม่ล่าสุดของ Tailwind CSS v4 ตั้งแต่การจัดการ `@theme` แบบใหม่ ไปจนถึงวิธีการลดขนาดไฟล์ CSS ให้เหมาะสมกับการทำ Production...
                        </p>
                    </div>
                    <div class="flex items-center justify-between border-t border-slate-900 pt-4">
                        <span class="text-xs text-slate-500 font-mono">27 มิ.ย. 2026</span>
                        <a href="#" class="inline-flex items-center gap-1.5 text-xs font-bold text-indigo-400 group-hover:text-indigo-300">
                            อ่านต่อ
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="group relative rounded-2xl border border-slate-900 bg-slate-950 p-6 flex flex-col justify-between hover:border-slate-800 transition-all duration-300 hover:-translate-y-1">
                <div class="absolute inset-0 bg-gradient-to-b from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 rounded-2xl transition-opacity duration-300"></div>
                <div class="relative z-10 flex flex-col h-full justify-between">
                    <div>
                        <div class="flex items-center gap-2 mb-4">
                            <span class="px-2.5 py-0.5 rounded-full text-xs font-semibold bg-purple-500/10 text-purple-400">Database</span>
                            <span class="text-xs text-slate-500">6 นาทีในการอ่าน</span>
                        </div>
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-purple-400 transition-colors duration-200">
                            การทำ Database Indexing ใน Laravel ให้ค้นหาข้อมูลเร็วขึ้น 10 เท่า
                        </h2>
                        <p class="text-slate-400 text-sm leading-relaxed mb-6">
                            เรียนรู้การใช้ Query Builder ร่วมกับคำสั่ง Indexing และการปรับปรุง Eloquent Relationships เพื่อหลีกเลี่ยงปัญหา N+1 Query อันแสนคลาสสิก...
                        </p>
                    </div>
                    <div class="flex items-center justify-between border-t border-slate-900 pt-4">
                        <span class="text-xs text-slate-500 font-mono">25 มิ.ย. 2026</span>
                        <a href="#" class="inline-flex items-center gap-1.5 text-xs font-bold text-purple-400 group-hover:text-purple-300">
                            อ่านต่อ
                            <svg class="w-3.5 h-3.5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
