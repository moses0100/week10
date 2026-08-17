@extends('layout')

@section('title', 'แจ้งเคลมสินค้าชำรุด')

@section('content')
    <h2 class="text-center py-2">ฟอร์มแจ้งเคลมสินค้าชำรุด (Product Claim Form)</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('claims.store') }}">
        @csrf

        <div class="form-group mb-3">
            <label for="serial_number">รหัสสินค้า (Serial Number)</label>
            <input type="text" name="serial_number" id="serial_number" class="form-control"
                value="{{ old('serial_number') }}">
            @error('serial_number')
                <div class="my-1"><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="email">อีเมลผู้ติดต่อ (Contact Email)</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
            @error('email')
                <div class="my-1"><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="symptoms">อาการชำรุด (Damage Symptoms)</label>
            <textarea name="symptoms" id="symptoms" class="form-control" cols="30" rows="5">{{ old('symptoms') }}</textarea>
            @error('symptoms')
                <div class="my-1"><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="urgency">ระดับความเร่งด่วน (Urgency Level)</label>
            <select name="urgency" id="urgency" class="form-control">
                <option value="">-- เลือกระดับความเร่งด่วน --</option>
                <option value="low" {{ old('urgency') == 'low' ? 'selected' : '' }}>ต่ำ (Low)</option>
                <option value="medium" {{ old('urgency') == 'medium' ? 'selected' : '' }}>ปานกลาง (Medium)</option>
                <option value="high" {{ old('urgency') == 'high' ? 'selected' : '' }}>สูง (High)</option>
            </select>
            @error('urgency')
                <div class="my-1"><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>

        <input type="submit" value="ส่งข้อมูลเคลม" class="btn btn-primary my-3">
    </form>
@endsection
