@extends('layouts.badFoxStyle', ['category' => '4','title' => '後台-登入 - Flexolk'])

@section('content')
<div class="fh5co-narrow-content animated fadeInLeft" data-animate-effect="fadeInLeft">
        <h2 class="fh5co-heading">後臺登入</h2>
        <form action="{{url('admin/login')}}" method="POST">
            {{ csrf_field() }}
            <input class="form-control article-form" type="email" placeholder="Email" name="email">
            <input class="form-control article-form" type="password" placeholder="Password" name="password">
            <input class="btn btn-primary" type="submit" value="Login">
        </form>
</div>
@endsection