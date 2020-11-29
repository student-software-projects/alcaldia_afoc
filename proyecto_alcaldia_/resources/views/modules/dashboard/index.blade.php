@extends('layouts.admin.app')

@section('content')
    <h1>Estas en el index | {{ session('USER')->names }}</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur cumque, delectus deleniti doloremque earum et fugiat hic in ipsa, laboriosam nesciunt optio reiciendis repellendus repudiandae ullam veritatis. Et, vero!</p>
@endsection
