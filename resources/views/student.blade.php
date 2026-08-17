@extends('layouts.app')

@section('title', 'ประวัตินักศึกษา')

@section('content')
    <!-- Student Profile Section -->
    <section class="relative pt-20 pb-24 overflow-hidden">
        <!-- Background Glow Blobs -->
        <div
            class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl animate-float pointer-events-none">
        </div>
        <div
            class="absolute bottom-1/4 right-1/4 translate-x-1/2 translate-y-1/2 w-96 h-96 bg-indigo-500/10 rounded-full blur-3xl animate-float-delayed pointer-events-none">
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <!-- Title Header -->
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span
                    class="text-xs font-semibold text-cyan-400 uppercase tracking-widest bg-cyan-950/40 border border-cyan-500/30 px-3 py-1 rounded-full">Workshop
                    3</span>
                <h1 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-white mt-4">
                    ระบบข้อมูลประวัตินักศึกษา
                </h1>
            </div>

            <!-- Glassmorphic Profile Card -->
            <div class="relative max-w-xl mx-auto">
                <!-- Glow Outline -->
                <div
                    class="absolute -inset-0.5 rounded-3xl bg-gradient-to-r from-cyan-500 via-indigo-500 to-purple-600 opacity-20 blur-lg">
                </div>

                <div
                    class="relative rounded-3xl border border-slate-800 bg-slate-900/60 backdrop-blur-xl p-8 md:p-10 shadow-2xl text-center">
                    <!-- Avatar Circle -->
                    <div
                        class="mx-auto w-24 h-24 rounded-2xl bg-gradient-to-tr from-cyan-500 to-indigo-600 flex items-center justify-center shadow-lg shadow-cyan-500/20 mb-6">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="1.5"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z">
                            </path>
                        </svg>
                    </div>

                    <!-- Student ID Badge -->
                    <div
                        class="inline-block px-3 py-1 rounded-lg bg-slate-950 border border-slate-800 text-xs font-mono text-cyan-400 mb-2">
                        ID: {{ $id }}
                    </div>

                    <!-- Student Name & Title -->
                    <h2 class="text-2xl font-bold text-white mb-6">นายธนวัฒน์ ญาติจันทึก</h2>

                    <!-- Information Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-left border-t border-slate-800/80 pt-6 mb-8">
                        <div class="bg-slate-950/40 p-4 rounded-xl border border-slate-900">
                            <span class="text-xs text-slate-500 block mb-1">คณะ / Faculty</span>
                            <span class="text-sm font-semibold text-slate-200">บริหารธุรกิจ</span>
                        </div>
                        <div class="bg-slate-950/40 p-4 rounded-xl border border-slate-900">
                            <span class="text-xs text-slate-500 block mb-1">สาขาวิชา / Major</span>
                            <span class="text-sm font-semibold text-slate-200">ระบบสารสนเทศ</span>
                        </div>
                        <div class="bg-slate-950/40 p-4 rounded-xl border border-slate-900 col-span-1 sm:col-span-2">
                            <span class="text-xs text-slate-500 block mb-1">อาจารย์ผู้บรรยาย / Lecturer</span>
                            <span class="text-sm font-semibold text-slate-200 font-sans">อาจารย์ผู้บรรยาย: ศุภมิตร จันทร์โทวงศ์</span>
                        </div>
                        <div class="bg-slate-950/40 p-4 rounded-xl border border-slate-900">
                            <span class="text-xs text-slate-500 block mb-1">สถานะนักศึกษา / Status</span>
                            <span class="text-sm font-semibold text-emerald-400 flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                กำลังศึกษาอยู่ (Active)
                            </span>
                        </div>
                        <div class="bg-slate-950/40 p-4 rounded-xl border border-slate-900">
                            <span class="text-xs text-slate-500 block mb-1">เกรดเฉลี่ยสะสม / Cumulative GPA</span>
                            <span class="text-sm font-semibold text-cyan-400">3.85 / 4.00</span>
                        </div>
                    </div>

                    <!-- Back button -->
                    <div class="flex gap-4">
                        <a href="/"
                            class="flex-1 py-3 px-6 rounded-xl border border-slate-800 bg-slate-950 hover:bg-slate-900 text-sm font-semibold text-slate-300 transition-colors">
                            กลับหน้าหลัก
                        </a>
                        <a href="/blog"
                            class="flex-1 py-3 px-6 rounded-xl bg-gradient-to-r from-cyan-500 to-indigo-600 text-sm font-semibold text-white shadow-lg shadow-cyan-500/10 hover:shadow-cyan-500/20 transition-all">
                            ดูบทความทั้งหมด
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
