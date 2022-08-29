<!DOCTYPE.html>
<html>
    <head>
        <title>My WEBpage</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('data/css/bootstrap.min.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="{{ asset('data/js/bootstrap.bundle.min.js')}}"></script>
        <style>
            .div1{
                width:100%;
                height:80px;
                background-color:#394b4b;
                padding-top: 30px;
                padding-bottom: 30px;
                padding-left: 350px;
            }
            .div2{
                width:100%;
                height:500px;
                background-image: url("{{ asset('data/images/girl with camera.jpg') }}") ;
                opacity: 1;
                background-repeat: no-repeat;
                background-size: 100% 500px;
                padding-top: 100px;
                padding-bottom: 100px;
                padding-left: 350px;
                color: white;
                background-color: black;
            }
            button.butt:hover{
                        background-color:rgb(243, 108, 108);
                        font-size: 20px;
                        color:rgb(68, 60, 60);
            }
            button.butt:active {
                        background-color: rgb(234, 241, 103);
                        color:rgb(235, 192, 254);
            }
            .butt{
                padding-left:25px;
                 padding-top: 10px;
                 padding-bottom: 10px;
                  padding-right:25px ;
                  background-color: rgb(75, 212, 130) ;
                  color:white;
                   border:none;
            }
            .div3{
                width:100%;
                height:500px;
                background-color:#394b4b;   
            }
            .container{
                background-color:#394b4b;
                width:50%;
            }
            #container-fluid{
                width:100%;
                height:500px;
                background-color: white;
            }
            .container-fluid1{
                width:90%;
            }
           
        </style>
    </head>
<body>
    <div class="div1">
      <h4>  <a style="color:white" href="HOME"> HOME </a>&emsp;
            <a style="color:white" href="ABOUT ">ABOUT </a>&emsp;
            <a style="color:white" href="SERVICE">SERVICE</a>&emsp;
            <a style="color:white" href="WORK">WORK</a>&emsp;
            <a style="color:white" href="CONTACT">CONTACT</a>    </h4>
    </div>
    <div class="div2" >
        <h1> AMET CONSE</h1> 
        <h4> Ipsum is simply dummy text of the printing<br> and typesetting industry. </h4>
        <button class="butt" >
        <strong> LOREM IPSUM DLO</strong>  
        </button> 
    </div>
    <div class="div3" >
<br><br><h3 class="text-center"><span style="color:#01ca9b" > SED EGESTAS ETVIU </span></h3>
    <p class="text-center"><span style="color:#0b95bf" >Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> __________</span></p>
       <br> <div class="container" >
            <div class="row" bg-primary>
                <div class="col-md-4" >
                    <img src="{{ asset('data/images/guy.jpg') }}" class="rounded-circle " width="200"height="200" / >
                    <h6 class="text-center"><span style="color:#1cab71" >JOHN DOE</span>  </h6>
                    <p class="text-center"><span style="color:#0b95bf" ><small>Your Designation</small> </span></p>
                </div>
                <div class="col-md-4" >
                    <img src="{{ asset('data/images/osetta.jpg') }}" class="rounded-circle" width="200"height="200" / >
                    <h6 class="text-center"><span style="color:#1cab71" >ROSETTA</span>  </h6>
                    <p class="text-center"><span style="color:#0b95bf" ><small>Your Designation</small></span></p>
                </div>
                <div class="col-md-4" >
                    <img src="{{ asset('data/images/img.jpg') }}" class="rounded-circle" width="200"height="200" / >
                    <h6 class="text-center"><span style="color:#1cab71" >KEVIN DOE</span></h6>
                    <p class="text-center"><span style="color:#0b95bf" ><small>Your Designation</small></span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
      <br><div class="row" >
        <div class="col-md-4" >
            <div class="container-fluid1">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('data/images/flag.jpg') }}" width="50" height="50">
                    </div>
                    <div class="col-md-10">
                        <h5 style="color:#0f6985">Fusce pellente<br><small>From the fame and memory of him</small></h5>
                    </div>
                </div>
            </div>
<p style="color:#19c57d">From the fame and
    memory of him that begot me I have learned both shamefastness and manlike behaviour. Of my mother I have learned to be religious, 
    and bountiful; and to forbear, not only to do, but to intend any evil; to content myself with a spare diet, and to fly 
    all such excess as is incidental to great wealth.</p>
        </div>
        <div class="col-md-4" >
            <div class="container-fluid1">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('data/images/tool.webp') }}" width="50" height="50" >
                    </div>
                    <div class="col-md-10">
                        <h5 style="color:#0f6985">Fusce pellente <br><small>From the fame and memory of him</small></h5>
                    </div>
                </div>
            </div>
<p style="color:#19c57d">From the fame and
    memory of him that begot me I have learned both shamefastness and manlike behaviour. Of my mother I have learned to be religious, 
    and bountiful; and to forbear, not only to do, but to intend any evil; to content myself with a spare diet, and to fly 
    all such excess as is incidental to great wealth.</p>
        </div> 
        
        <div class="col-md-4" >
            <div class="container-fluid1">
                <div class="row">
                    <div class="col-md-2">
                        <img src="{{ asset('data/images/leaf.jpg') }}" width="50" height="50">
                    </div>
                    <div class="col-md-10">
                        <h5 style="color:#0f6985">NUNC Dignissim <br><small>From the fame and memory of him</small></h5>
                    </div>
                </div>
            </div>
<p style="color:#19c57d">From the fame and
    memory of him that begot me I have learned both shamefastness and manlike behaviour. Of my mother I have learned to be religious, 
    and bountiful; and to forbear, not only to do, but to intend any evil; to content myself with a spare diet, and to fly 
    all such excess as is incidental to great wealth.</p>  
        </div>
      </div>
    </div>
    <div class="container-fluid" style="height:520px;background-color:#394b4b;">
        <div class="row">
            <div class="col-md-7">
                <div class="container-fluid">
                    <br>  <div class="row">
                        <div class="col-md-4">
                           <img src="{{ asset('data/images/girlpic.jpg') }}" width="200" height="200" >
                        </div>
                        <div class="col-md-8">
                            <h5 style="color:#5cabc2">VESTIBULUM AUCTOR <br><small>From the fame and memory of him</small></h5>
                            <br> <p style="color:#19c57d">From the fame and
                                memory of him that begot me I have learned both shamefastness and manlike behaviour. Of my mother I have learned to be religious, 
                                and bountiful; </p>
                             <input type="submit" style="background-color:#19c57d;color:white;border:none;border-radius:3vh;width:100px;height:30px"  value="More ->">
                        </div>
                    </div>
                </div>
                <br><hr><br>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ asset('data/images/girlpic1.jpg') }}" width="200" height="200" >
                        </div>
                        <div class="col-md-8">
                            <h5 style="color:#5cabc2">VESTIBULUM AUCTOR <br><small>From the fame and memory of him</small></h5>
                            <br> <p style="color:#19c57d">From the fame and
                                memory of him that begot me I have learned both shamefastness and manlike behaviour. Of my mother I have learned to be religious, 
                                and bountiful; </p>
                            <input type="submit" style="background-color:#19c57d;color:white;border:none;border-radius:3vh;width:100px;height:30px"  value="More->">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="container-fluid1">
                    <div class="row">
                        <div class="col-md-2">
                            <img src="{{ asset('data/images/pintool.jpg') }}" width="50" height="50" >
                        </div>
                        <div class="col-md-10">
                            <h5 style="color:#5cabc2">VESTIBULUM AUCTOR <br><small>From the fame and memory of him</small></h5>
                        </div>
                    </div>
                </div>
              <center>  <br> <input  type="text" style="background-color:#1c3333;width:300px;"  name="name" placeholder="your name....." > <br> <br>  
                <input type="email" style="background-color:#1c3333;width:300px;"  id="myEmail" placeholder="your email id.." required> <br> <br>  
                <input type="number" style="background-color:#1c3333;width:300px;"   id="myNumber" placeholder="your phone.." required> <br>  <br> 
                <input  type="text" name="address"  style="background-color:#1c3333;width:300px;height:150px"  placeholder="your message..." > </textarea> <br>  <br> 
                <input type="submit" style="background-color:#418e6e;color:white;border:none;border-radius:3vh;width:100px;height:30px"  value="SEND "></center>
            </div>
        </div>
    </div>
</body>
</html>