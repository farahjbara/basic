
@extends('layouts.app')

@section('content')
<h1 style="text-align: center ;">ANATOMIE-PATHOLOGIE</h1>



<p> <a  role="button" href="\" >
<img src="\assets\logout.png" class="card-img-top"  style="opacity: 0.7; width:3em ; height:3em; " >
</a>
</p>


<div class="animated fadeIn">
  <div class="card">
    
    
  </div>
  
  
  
  <div class="row">
    <div class="col-md-4">
      <div class="card"  style="background-image: linear-gradient(to left ,#43587c,#6e809e ,#7289af,#6e809e ,#7289af) ">
        
        <div class="card-body">
         

          <a href="/citys/Anatomi-path_Tunis"   class="btn btn-secondary btn-lg btn-block " role="button">tunis</a>
          <a href="/citys/anatomi-path_sousse" class="btn btn-secondary btn-lg btn-block" role="button">Sousse</a>

          <a href="/citys/anatomi-path_ariana" class="btn btn-secondary btn-lg btn-block" role="button"  >Ariana</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Ben Arous</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Manouba</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Nabeul</a>

          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Zaghouan</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Béja</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Jendouba</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Kef</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Siliana</a>
          <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Monastir</a>





        </div>
      </div>
    </div><!--/.col-->
            <div class="col-md-4">
              <div class="card"  style="background-image: linear-gradient(to left ,#43587c,#6e809e ,#7289af,#6e809e ,#7289af) ">
                
                <div class="card-body">
                <a href="/citys/anatomi-path_gabes" class="btn btn-secondary btn-lg btn-block" role="button">Gabès</a>
               
                <a href="/citys/anatomi-path_sfax" class="btn btn-secondary btn-lg btn-block" role="button">Sfax</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Kairouan</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Kasserine</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Mahdia</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Mednine</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Sidi Bouzid</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Tataouine</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Gafsa</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled"  role="button">Tozeur</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">Kebili</a>
                <a href="#" class="btn btn-secondary btn-lg btn-block disabled" role="button">benzart</a>

        </div>
      </div>
    </div><!--/.col-->
    <div class="col-md-4">
      <div class="card"  style="background-image: linear-gradient(to left ,#43587c,#6e809e ,#7289af,#6e809e ,#7289af) ">
       
        <div class="card-body" >
          <img src="\assets\tunis.png" width="400erm" height="600erm">

        </div>
      </div>
    </div><!--/.col-->
  </div><!--/.row-->
</div>
@endsection