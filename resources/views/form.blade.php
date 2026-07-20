@extends('layout')

@section('title', 'เขียนบทความ')

@section('content')
    <h2>เขียนบทความใหม่</h2>
    <hr>
    <form  method="POST" action="/insert">
        @csrf
        <fieldset>
            <div class="mb-3">
                <label for="title" class="form-label">ชื่อบทความ</label>
                <input type="text" id="title" class="form-control" placeholder="ชื่อบทความ" required>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <div class="mb-3">
                <label for="content" class="form-label">เนื้อหา</label>
                <textarea id="content" class="form-control" placeholder="เนื้อหาบทความ" rows="3" required></textarea>
            </div>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <button type="submit" class="btn btn-success">เผยแพร่</button>
            <button type="submit" class="btn btn-warning">บันทึกฉบับร่าง</button>
            <a class="btn btn-danger" href="{{ route('blog') }}">ยกเลิก</a>
        </fieldset>
    </form>
@endsection
