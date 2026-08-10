@extends('layout')

@section('title', 'เพิ่มสินค้าใหม่')

@section('content')

    <h2>เพิ่มสินค้าใหม่</h2>
    <hr>
    <form method="POST" action="/insert">
        @csrf
        <div class="form-group mb-3">
            <label for="title">เพิ่มสินค้าใหม่</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        @error('title')
            <div class="my-2">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror

        <div class="form-group mb-3">
            <label for="content">กรอกข้อมูลเพื่อบันทึกรายการสินค้า</label>
            <textarea class="form-control" cols = "30" rows="6" id="content" name="content"></textarea>
        </div>
        @error('content')
            <div class="my-2">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror

        <div class="form-group mb-3">
            <label for="content">ชื่อ-นามสกุล</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        @error('name')
            <div class="my-2">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror

        <div class="form-group mb-3">
            <label for="content">Email</label>
            <input type="text" class="form-control" id="email" name="email">
        </div>
        @error('email')
            <div class="my-2">
                <p class="text-danger">{{ $message }}</p>
            </div>
        @enderror


        <input type="submit" value="บันทึก" class="btn btn-success my-3">
    </form>

@endsection
