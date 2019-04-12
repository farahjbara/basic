<style>
body{
background-image : url(assets/bck1.jpg);
background-size :cover;
}
#logo{
    margin-left : 18rem;
    margin-top: 2rem;
    border-radius: 50% 50% 0% 0% ;
    transform: rotate(-16deg);
    height: 16rem;
    width : 21rem;
}
</style>

@extends('layouts.app')

@section('content')


<body >

<a href="/home" >
<img src="assets/logo.jpg" id="logo" >
</a>

</body>

@endsection