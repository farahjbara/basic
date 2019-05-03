@extends('layouts.app')

@section('content')



<html>
  <head>
    
       <meta name="viewport" content="width-device-width,initial-scale=1" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
    </script>
    <style>
    .modal-dialog {
 
 width: 60rem;

}
    </style>
</head>

<body>

    <h1 style="text-align :centre; text-decoration-color: cornflowerblue ">  <p class="text-center"> <span class="text-primary "> STOMATOLOGIE <br> Sfax </span>  </p> </h1>
  <br>
  <br>
  <br>
  
  <div class="container" >  <!-- si class="container"les composant bootstrap  reste au milieu ne s'atir pas au coté-->
    <div class="row">
      <table>
        <tr>
          <td>
              <table> 

                  <tr>
                      <td aligne="left" valign="top"><img src="images/6.jpg" width="200" height="253" alt="enfant à Ngor (Sénégal)"> </td>
                     
                <td>
              <div id="blocki" class="">
        
                    <div class="card">
                            <div class="card-header">
                            
                              <b> Dr CHEIKHROUHOU RAMI
                                  <br>
                                Chirurgien Maxillo Facial Stomatologue </b>
                                <br>
                            </div>
        
                     </div>
                   <!--*********************-->
              <div id="blockii"  class="">
                   <div
                   class="list-group-item " > <span  class="glyphicon glyphicon-home"  ><b>Etablissement :</b> CABINET MEDICAL INDIVIDUEL</span>
                 <br>
                 <br>
                   </div>
                   <div
                   class="list-group-item " > <span class="glyphicon glyphicon-globe"  >
                    <b>Siteweb:</b></span> www.chirurgieesthetiqueentunisie.blogspot.com
                   <br> 
                    <br>         
                   </div>
                   
        <!--*********************************************************************************-->
        <div id="blockiii"  class="" >
        <div  class="list-group-item " >
               
                    <a  href="#" class="btn btn-info btn-lg"   data-toggle="modal" data-target="#monModal1"> Plus d'informations</a> </a>
                    
                    <div  class="modal fade" id="monModal1">
                      <div class="modal-dialog" style="margin-top:15rem; " >

                        
                         <div class="modal-content"  style="background-color:#eae2c9;">
                          
                                <div class="modal-header">
                                <h2 class="modal-title"> Dr CHEIKHROUHOU RAMI</h2>
                                <button type="button" class="close" data-dismiss="modal" >x</button>
                                 </div>
                              <div class="modal-body">
                                <mark class="text-danger"   style="background-color:#eae2c9;" >
                                <h4>
                                Spécialités : </h4>
                              </mark> 
                                   
                                   <h5>
                                   Chirurgien Maxille Facial Stomatologue
                                   Chirurgien Esthétique</h5>
                                    
                                    
                                   <mark class="text-danger"   style="background-color:#eae2c9;">
                                    <h4> Diplômes et formations:
                                    </h4>
                                    </mark>
                                  
                                    
                                    <h5>
                                    Chirurgie esthetique en Tunisie :
                                     chirurgien esthetique en Tunisie, interventions de chirurgie esthetique en Tunisie,
                                      clinique de chirurgie esthetique en Tunisie,
                                       sejour de chirurgie esthetique en Tunisie et devis chirurgie esthetique en tunisie
                                    </h5>
                                   
                                    <mark class="text-danger"   style="background-color:#eae2c9;">
                                      <h4> Adresse :
                                      </h4>
                                      </mark>
                                    
                                 
                                    <h5>
                                         AV. DES MARTYRS IMM PALMARIUM 
                                    </h5>
                                    
                                     <mark class="text-danger"   style="background-color:#eae2c9;"> <h4>  delg et code postal :</h4></mark>
                                    
                                   
                                    <h5>
                                    SFAX MEDINA , 3027</h5>
                                   
                                    <mark class="text-danger"   style="background-color:#eae2c9;"> <h4>Telephone fixe : </h4></mark>
                                    
                                  <span class="glyphicon glyphicon-phone-alt">   <h4>74406000</h4> </span>
                                
                                   <mark class="text-danger"   style="background-color:#eae2c9;"> <span><h4> Prix de consultation:</h4></span></mark>
                                   
                                     <span class="glyphicon glyphicon-money"> <h3>50 DT </h3>   </span>
                               
                                </p>
                            </div>
                                  <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"  >fermer </button>
                                  </div>
        
                         </div>
        
        
                       </div>
                    </div>
              </div>
             </div>  
             <!--***********************************************************************-->
             
              <div  class="list-group-item " >
                   <a  href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mon1Modal"       class="list-group-item"    > Itineraire </a>
                   <div  class="modal fade" id="mon1Modal"   >
        
                     <div class="modal-dialog" style="margin-top:15rem;"  >
                           <div class="modal-header">
                                   <button type="button" class="close" data-dismiss="modal" >x</button>
                           </div>
                           <div class="modal-body">
                                   <div class="mapouter">
                                   <div class="gmap_canvas">
                                          <iframe width="510" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=AV.%20DES%20MARTYRS%20IMM%20PALMARIUM%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                        </iframe><a href="https://www.emojilib.com">emojilib.com</a>
                                  </div><style>.mapouter{position:relative;text-align:right;height:300px;width:400px;}.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:400px;}</style></div>
                            </div>   
                                       <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"  >fermer </button>
                                         </div>      
                          </div>
                      </div>       
                   </div>  
                  </div>  
                </div>
<!--***********************************************************************************************--> 
</div>


</div>
</div>
</td>

</tr> 
</table>
</td>
</tr>
<br>
<br>
<br>







































<tr>
<td>
    <table>
       <tr>
        <td aligne="left" valign="top"><img src="images/m2.jpg" width="200" height="253" alt="enfant à Ngor (Sénégal)"> </td>
    
    <td>
<div id="block1" class="">
<img src="" class="rounded" style="width:95px " >
</div>

<div id="block1" class="">

<div class="card">
        <div class="card-header">
        
          <b>  Dr MOHAMED SEDKI CHARFI
              <br>
            Chirurgien Maxillo Facial Stomatologue </b>
            <br>
        </div>

 </div>
<!--*********************-->
<div id="block2"  class="">
<div
class="list-group-item " > <span  class="glyphicon glyphicon-home"  ><b>Etablissement : </b>  CENTRE MEDICAL DAR EL TABIB                  </span>
<br>
<br>
</div>
<div
class="list-group-item " > 
<span class="glyphicon glyphicon-envelope"  >
  <b>E-mail:</b></span>  charfisedki1@gmail.com
<br> 
<br>         
</div>

<!--*********************************************************************************-->
<div id="block3"  class="" >
<div  class="list-group-item " >

<a  href="#" class="btn btn-info btn-lg"   data-toggle="modal" data-target="#monModal2"> Plus d'informations</a> </a>
<div  class="modal fade" id="monModal2" >
  <div class="modal-dialog" >
     <div class="modal-content">
            <div class="modal-header">
            <h4 class="modal-title"></h4>
            <button type="button" class="close" data-dismiss="modal" >x</button>
             </div>
          <div class="modal-body">
           <p> <mark class="text-danger" >Spécialités : </mark> 
               <br>
               Chirurgien Maxille Facial Stomatologue
               Chirurgien Esthétique
                <br>
              
                <mark class="text-danger"> Adresse :</mark><style font-familly="verdana, sans-serif;"  >  
                    </style>  
                
                <br>
                AV. 7 NOVEMBRE IMM. IBN KHALDOUN 
                
                 <br> 
                 <mark class="text-danger">  delg et code postal :</mark><style font-familly="verdana, sans-serif;"  >  
                    </style>  
                
                <br>  
                SFAX MEDINA , 3027
                <br>
                <mark class="text-danger"> Telephone fixe : </mark><style font-familly="verdana, sans-serif;"  >  
                    </style>  
                <br>
              <span class="glyphicon glyphicon-phone-alt">   74220591 </span>
               <br>
               <mark class="text-danger"> Gsm : </mark><style font-familly="verdana, sans-serif;"  >  
                </style>  
            <br>
          <span class="glyphicon glyphicon-phone-alt"> 98241933 </span>
           <br>
               <mark class="text-danger"> <span class="">Prix de consultation:</span></mark><style font-familly="verdana, sans-serif;"  >  
                </style>  
                <br>
                 <span class="glyphicon glyphicon-money"> 50 DT    </span>
             <br>
            </p>
        </div>
              <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"  >fermer </button>
              </div>

     </div>


   </div>
</div>
</div>
</div>  
<div  class="list-group-item " >
  <a  href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mon2Modal"       class="list-group-item"    > Itineraire </a>
  <div  class="modal fade" id="mon2Modal"   >
 
    <div class="modal-dialog"  >
          <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" >x</button>
          </div>
          <div class="modal-body">
           <div class="mapouter">
             <div class="gmap_canvas">
             <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sfax%20AV.%207%20NOVEMBRE%20IMM.%20IBN%20KHALDOUN&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
             <a href="https://www.emojilib.com"></a></div>
             <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
            </div>
                      <div class="modal-footer">
                           <button type="button" class="btn btn-default" data-dismiss="modal"  >fermer </button>
                        </div>      
         </div>
     </div>       
  </div>  
 </div>  
 </div>
</td>
  </tr>
</table>
</td>
</tr>
<br> 
<br>
<br>














































<tr>
<td>
  <table> 
     <tr>
        <td aligne="left" valign="top"><img src="images/m2.png" width="200" height="253" alt="enfant à Ngor (Sénégal)"> </td>
   <td>
<div id="block11" class="">
    <img src="" class="rounded" style="width:95px " >
  </div>
  
  <div id="blocki" class="">
  
    <div class="card">
            <div class="card-header">
            
              <b>  CHABCHOUB NAOUREZ REABI
                  <br>
                Chirurgien Maxillo Facial Stomatologue </b>
                <br>
            </div>
  
     </div>
   <!--*********************-->
  <div id="block22"  class="">
   <div
   class="list-group-item " > <span   class="glyphicon glyphicon-home"  ><b>Etablissement :</b> CABINET MEDICAL INDIVIDUEL</span>
  <br>
  <br>
   </div>
   <div
   class="list-group-item " > 
   <span class="glyphicon glyphicon-envelope"  >
      <b>E-mail:</b></span>  <b> Naouressreabichabchoub@gmail.com</b>
    <br> 
    <br>         
   </div>
   
  <!--*********************************************************************************-->
  <div id="block33"  class="" >
  <div  class="list-group-item " >
  
    <a  href="#" class="btn btn-info btn-lg"   data-toggle="modal" data-target="#monModal3"> Plus d'informations</a> </a>
    <div  class="modal fade" id="monModal3" >
      <div class="modal-dialog" >
         <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" >x</button>
                 </div>
              <div class="modal-body">
               <p> <mark class="text-danger">Spécialités : </mark> <style font-familly="verdana, sans-serif;"  >  
                    </style> 
                   <br>
                   Chirurgien Maxille Facial Stomatologue
                   Chirurgien Esthétique
                    <br>
                  
                    <mark class="text-danger"> Adresse :</mark><style font-familly="verdana, sans-serif;"  >  
                        </style>  
                    
                    <br>
                    AV. 7 NOVEMBRE IMM. AIDA ETG MEZZA
                    
                     <br> 
                     <mark class="text-danger">  delg et code postal :</mark><style font-familly="verdana, sans-serif;"  >  
                        </style>  
                    
                    <br>  
                    SFAX MEDINA ,	code postal :3000
                    <br>
                    <mark class="text-danger"> Telephone fixe : </mark><style font-familly="verdana, sans-serif;"  >  
                        </style>  
                    <br>
                  <span class="glyphicon glyphicon-phone-alt">   74241511 </span>
                   <br>
                   <mark class="text-danger"> <span class="">Prix de consultation:</span></mark><style font-familly="verdana, sans-serif;"  >  
                    </style>  
                    <br>
                     <span class="glyphicon glyphicon-money"> 50 DT    </span>
                 <br>
                </p>
            </div>
                  <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"  >fermer </button>
                  </div>
  
         </div>
  
  
       </div>
    </div>
  </div>
  </div>  
  
  
  <div  class="list-group-item " >
   <a  href="#" class="btn btn-info btn-lg" data-toggle="modal" data-target="#mon3Modal"       class="list-group-item"    > Itineraire </a>
   <div  class="modal fade" id="mon3Modal"   >
  
     <div class="modal-dialog"  >
           <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" >x</button>
           </div>
           <div class="modal-body">
              <div class="mapouter">
              <div class="gmap_canvas">
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=sfax%20medina%20%20AV.7%20NOVEMBRE&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
              <a href="https://www.emojilib.com">emojilib.com</a></div>
              <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
              </style>
            </div>
            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal"  >fermer </button>
                         </div>      
          </div>
      </div>       
   </div>  
  </div>  
  </div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>

</html>



@endsection