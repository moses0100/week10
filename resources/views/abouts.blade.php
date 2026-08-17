@extends('layout')
@section('title', 'เกี่ยวกับเรา')

@section('content')
    <h2>เกี่ยวกับเรา</h2>
    <hr>
    <p>
        ผู้พัฒนาระบบ : {{ $name }}
    </p>
    <p>วันที่ก่อตั้ง : {{ $date }}</p>
    <hr>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio doloribus tempore pariatur earum voluptate
        consectetur exercitationem tempora, dolores molestiae, repudiandae placeat? Facere nesciunt consectetur ullam
        numquam molestias excepturi vero quidem.
    </p>
@endsection
