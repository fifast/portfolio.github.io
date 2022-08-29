<!DOCTYPE.html>
<html>
    <head>
        <title>web03</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('data/css/bootstrap.min.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="{{ asset('data/js/bootstrap.bundle.min.js')}}"></script>
        <style>
         .div1{
            width: 100%;
            height: 580px;
            background-repeat: no-repeat;
            background-size: 100% 580px;
            background-image: url("{{ asset('data/images/nature.jpg') }}");
            background-color: black;
         }
         button.butt:hover{
                        background-color:rgb(59, 177, 99);
                        font-size: 40px;
                        color:rgb(68, 60, 60);
         }
         .container1{
            width:80%;
         }
         .img{
            width:100%;
            height:320px;
            background:linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://img.freepik.com/premium-photo/male-call-center-operator-using-headset-help-people-giving-telemarketing-assistance-clients-helpline-person-working-customer-support-service-office-offering-advice_482257-41940.jpg?w=2000') ;
            background-color: black;
            background-repeat: no-repeat;
            background-size: 100% 320px;
         }
         .end{
            width:100%;
            background:linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://thumbor.forbes.com/thumbor/fit-in/x/https://www.forbes.com/advisor/wp-content/uploads/2021/03/hardwood_floor-e1615577971284.jpg') ;
            background-repeat: no-repeat;
            background-size: 100% 500px
         }
         .img-thumbnail
         {
            width:250px;
            height:250px;
         }
        </style>
</head>
<body>
    <div class="container-fluid img-fluid" style="background-color: rgb(255, 255, 255);" >
        <div class="row">
            <div class="col-md-8" >&emsp;&emsp;&emsp;&emsp;
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8vQtXB00hl1ALXBHj_h8sNyC4oqTAomRT81hi0k43Andh8mdsOMHrTKzWGR-Lz814sQI&usqp=CAU" height="35px" width="45px">
             <span style="font-size:25px;"><strong>So</strong><span style="color:rgb(0, 180, 42)">lution</span></span>
            </div>
            <div class="col-md-4">
                
                <nav class="navbar navbar-expand-sm">
                    <div class="container-fluid" >
                      <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color:rgb(0, 180, 42)">HOME</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color:black">ABOUT</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#" style="color:black">SERVICE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color:black">WORK</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#" style="color:black">CONTACT</a>
                          </li>
                      </ul>
                    </div>
                  </nav>
              
            </div>
        </div>
    </div>
    <div class="container-fluid img-fluid div1">
       <center style="padding-top:300px;"> <h3 style="color: white;">
            &emsp;SOLUTION COMPANY <br><strong >WE DESIGN & CODE WEBSITE</strong><br>
            &emsp;&emsp;<button class="butt m-3" style="background-color: rgb(21, 118, 159);color: white;border: none;">&emsp;<small>OUR WORK</small>&emsp;</button>
        </h3>  </center>
    </div>
<div class="container-fluid " style="width:100%;background-color:rgb(255, 255, 255);">
    <div class="container" style="margin-top:50px;background-color:rgb(255, 255, 255);width: 100%;">
        <div class="row" >
            <div class="col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://iconape.com/wp-content/png_logo_vector/laptop.png" width="45" height="45">
                        </div>
                        <div class="col-10">
                            <h6 style="border-bottom: 2px solid black;">Fully Responsive</h6>
                        <small> Please check examples to change icons easily
                            Lorem Ipsum is simply dummy text of the printing</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://png.pngtree.com/png-vector/20201116/ourlarge/pngtree-settings-icon-png-png-image_2457816.jpg" width="50" height="50">
                        </div>
                        <div class="col-10">
                            <h6 style="border-bottom: 2px solid black;"><strong>Customize Family</strong></h6>
                        <small>Please check examples to change icons easily
                            Lorem Ipsum is simply dummy text of the printing</small>
                        </div>
                    </div>
                </div>  
            </div>
            <div class="col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTalAdiUcwuT6nfEDK2AVXSFqlHy1XrjEbsU9FJ0f6P3Xwv7jbiuDF1AB2gEdIvJTHahQk&usqp=CAU" width="40" height="40">
                        </div>
                        <div class="col-10">
                            <h6 style="border-bottom: 2px solid black;"><strong>SEO Friendly</strong></h6>
                        <small> Please check examples to change icons easily
                            Lorem Ipsum is simply dummy text of the printing</small>
                        </div>
                    </div>
                </div>  
            </div>
        </div>

        <br>

        <div class="row" >
            <div class="col-md-4" >
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://cdn-icons-png.flaticon.com/512/1216/1216909.png" width="40" height="40">
                        </div>
                        <div class="col-10">
                            <h6 style="border-bottom: 2px solid black;"><strong>HTML5 Website</strong></h6>
                        <small>Please check examples to change icons easily
                            Lorem Ipsum is simply dummy text of the printing</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-message-vector-icon-png-image_3791369.jpg" width="50" height="50">
                        </div>
                        <div class="col-10">
                            <h6 style="border-bottom: 2px solid black;"><strong>Quick Support</strong></h6>
                        <small> Please check examples to change icons easily
                            Lorem Ipsum is simply dummy text of the printing</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                            <img src="https://w7.pngwing.com/pngs/660/1015/png-transparent-check-mark-computer-icons-green-tick-miscellaneous-angle-logo-thumbnail.png" width="40" height="40">
                        </div>
                        <div class="col-10">
                            <h6 style="border-bottom: 2px solid black;"><strong>Up To Date</strong></h6>
                            <small>Please check examples to change icons easily
                            Lorem Ipsum is simply dummy text of the printing</small>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>
<div class="container-fluid img-fluid" style="width:100%;height:300px; background:linear-gradient(to right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://images.unsplash.com/photo-1495107334309-fcf20504a5ab?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDd8fHxlbnwwfHx8fA%3D%3D&w=1000&q=80');
background-size:100% 300px; background-repeat:  no-repeat;">
<div class="row">
    <div class="col-md-12">
   <center><span style="font-size: 45px;color: white;">We provide</span><span style="font-size: 45px;
  color: rgb(0, 212, 57);"> solutions</span></span> <span style="font-size: 30px;color: white;">
    <br> <span style="background-color: white;color: black;">Creative</span> Designer & <span style="background-color: white;color: black;">Talented</span> Developers</span>
    <span style="font-size: 12px;color: white;">
       <br> Please check examples to change icons easily
       Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum is simply dummy text of the printing.<br>
       Lorem Ipsum is simply dummy text of the printing.Lorem Ipsum is simply dummy text of the printing. 
    </span></center>
</div>
</div>
</div>
<div class="container img-fluid" style="width:70%;">
   <div class="row" style="margin-top:150px;">
        <div class="col-md-6">
       <span style="color: rgb(74, 209, 74);font-size: 32px;"><strong>About Solution</strong> </span>
       <br><span style="color: black;font-size: medium;"><strong>Smart, Light and Adaptive </strong></span>
       <span style="font-size:small"><br><br>Lorem Ipsum is simply dummy text of the printing. Lorem Ipsum is simply dummy text of the printing.
        Lorem Ipsum is simply dummy text of the printing.
        Lorem Ipsum is simply dummy text of the printing.<br><br>
        Lorem Ipsum is simply dummy text of the printing.
        Lorem Ipsum is simply dummy text of the printing.</span>
        </div>
        <div class="col-md-6">
         <br><small>Web Design &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;100%</small>
         <div class="progress" style="height:6px">
            <div class="progress-bar"  style="background-color:rgb(74, 209, 74);width:100%;height:6px;">
            </div>
          </div><br>
        <small> Multimedia &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 80%</small>
         <div class="progress" style="height:6px">
            <div class="progress-bar"  style="background-color:rgb(74, 209, 74);width:80%;height: 6px;">
            </div>
          </div><br>
        <small> Search Engine Marketing &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;90% </small>
         <div class="progress" style="height:6px">
            <div class="progress-bar"  style="background-color:rgb(74, 209, 74);width:90%;height:6px;">
            </div>
          </div><br>
         <small>Custom Branding &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; 70%</small>
         <div class="progress" style="height:6px">
            <div class="progress-bar"  style="background-color:rgb(74, 209, 74);width:70%;height:6px;">
            </div>
          </div>
        </div>
    </div>
</div>

<div class="container-fluid " >
    <br><br><h3 class="text-center"><span style="color:#000000" > MEET THE TEAM </span></h3>
           <br> <div class="container" style="width:65%;" >
                <div class="row" >
                    <div class="col-md-4" >
                        <img src="https://media-exp1.licdn.com/dms/image/C4E03AQFG8lR7_4HB1w/profile-displayphoto-shrink_200_200/0/1618464099907?e=2147483647&v=beta&t=hF5WJ14-DZXLf2pOUe2bNZkallYb6HpwDOpQ1V9IgWA"
                         class="img-thumbnail"  >
                     <center> <span style="font-size: 12px;" ><br> <strong>Director</strong> </span>
                        <h6><span style="color:#1cab71" >JULIA</span>  </h6>
                        <p style="font-size: 12px;">Lorem ipsum dolor sit amet,ut labore et dolore magna aliqua.</p>
                        <img src="https://cdn-icons-png.flaticon.com/512/59/59439.png" height="10px" width="10px">
                &emsp;<img src="https://cdn-icons-png.flaticon.com/512/1051/1051331.png?w=360" height="10px" width="10px">
                &emsp;<img src="https://w7.pngwing.com/pngs/865/767/png-transparent-computer-icons-graphy-instagram-rectangle-logo-brand.png" height="13px" width="13px">
                &emsp;<img src="https://cdn.worldvectorlogo.com/logos/pinterest-2.svg" height="10px" width="10px"></center>
                    </div>
                    <div class="col-md-4" >
                        <img src="{{ asset('data/images/pic.jpg') }}" class="img-thumbnail"  >
                        <center> <span style="font-size: 12px;" ><br> <strong>Developer</strong> </span>
                            <h6><span style="color:#1cab71" >MARY</span>  </h6>
                            <p style="font-size: 12px;">Lorem ipsum dolor sit amet,ut labore et dolore magna aliqua.</p>
                            <img src="https://cdn-icons-png.flaticon.com/512/59/59439.png" height="10px" width="10px">
                    &emsp;<img src="https://cdn-icons-png.flaticon.com/512/1051/1051331.png?w=360" height="10px" width="10px">
                    &emsp;<img src="https://w7.pngwing.com/pngs/865/767/png-transparent-computer-icons-graphy-instagram-rectangle-logo-brand.png" height="13px" width="13px">
                    &emsp;<img src="https://cdn.worldvectorlogo.com/logos/pinterest-2.svg" height="10px" width="10px"></center>
                    </div>
                    <div class="col-md-4" >
                        <img src="http://www.goodmorningimagesdownload.com/wp-content/uploads/2020/06/Girls-Wallpaper-24.jpg" class="img-thumbnail"  / >
                        <center> <span style="font-size: 12px;" ><br> <strong>Manager</strong> </span>
                            <h6><span style="color:#1cab71" >LINDA</span>  </h6>
                            <p style="font-size: 12px;">Lorem ipsum dolor sit amet,ut labore et dolore magna aliqua.</p>
                            <img src="https://cdn-icons-png.flaticon.com/512/59/59439.png" height="10px" width="10px">
                    &emsp;<img src="https://cdn-icons-png.flaticon.com/512/1051/1051331.png?w=360" height="10px" width="10px">
                    &emsp;<img src="https://w7.pngwing.com/pngs/865/767/png-transparent-computer-icons-graphy-instagram-rectangle-logo-brand.png" height="13px" width="13px">
                    &emsp;<img src="https://cdn.worldvectorlogo.com/logos/pinterest-2.svg" height="10px" width="10px"></center>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid img-fluid img" >
<center style="padding-top:90px;"><h2 style="color:white;">Get our newsletter!</h2>
<p style="font-size: 12px;color:white;">Lorem ipsum dolor sit amet,ut labore et dolore magna aliqua.</p>
<input type="email" placeholder="Enter your email" style="border:1.5px solid white;background-color:transparent;height: 40px;width: 280px;color:white;">
&emsp;<input type="submit" value="Sign Up" style="height: 40px;width:130px;background-color:rgb(167, 231, 71);border:none;color:white;">
</center>      
 </div><br><br>
 <div class="container" style="width:72.5%;border-bottom: 1px solid rgb(203, 203, 203);">
    <br><br><center><h2><strong>Our Pricing</strong></h2></center>
    <div class="row">
        <div class="col-md-3">
        <div class="card" style="height:400;width:230px;margin-top:50px;">
            <center > <div class="card-body">
             <h2 style="color:#95dc2b;border-bottom: 1px solid rgb(203, 203, 203);">  Basic </h2><br> 
             <p><small>$20 per month<br><br>
                100 GB Storage<br><br>
                1,000 GB transfer<br><br>
                10 BOOTStrap themes<br><br>
                24-hrs support</small>
             </p><br><br>
    <input type="submit" value="SIGN UP" style="width:100px;height:25px;border:none;color:white;font-size:12px;background-color: #95dc2b;">
            </div></center>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="height:400;width:230px;margin-top:70px;">
            <center> <div class="card-body">
             <h2 style="color:#95dc2b;border-bottom: 1px solid rgb(203, 203, 203);">  Basic </h2><br> 
             <p><small>$20 per month<br><br>
                100 GB Storage<br><br>
                1,000 GB transfer<br><br>
                10 BOOTStrap themes<br><br>
                24-hrs support</small>
             </p><br><br>
    <input type="submit" value="SIGN UP" style="width:100px;height:25px;border:none;color:white;font-size:12px;background-color: #95dc2b;">
            </div></center>
        </div> 
    </div>
    <div class="col-md-3">
        <div class="card" style="height:400;width:230px;margin-top:30px;">
            <center> <div class="card-body">
             <h2 style="color:#95dc2b;border-bottom: 1px solid rgb(203, 203, 203);">  Basic </h2><br> 
             <p><small>$20 per month<br><br>
                100 GB Storage<br><br>
                1,000 GB transfer<br><br>
                10 BOOTStrap themes<br><br>
                24-hrs support</small>
             </p><br><br>
    <input type="submit" value="SIGN UP" style="width:100px;height:25px;border:none;color:white;font-size:12px;background-color: #95dc2b;">
            </div></center>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card" style="height:400;width:230px;">
            <center> <div class="card-body">
             <h2 style="color:#95dc2b;border-bottom: 1px solid rgb(203, 203, 203);">  Basic </h2><br> 
             <p><small>$20 per month<br><br>
                100 GB Storage<br><br>
                1,000 GB transfer<br><br>
                10 BOOTStrap themes<br><br>
                24-hrs support</small>
             </p><br><br>
    <input type="submit" value="SIGN UP" style="width:100px;height:25px;border:none;color:white;font-size:12px;background-color: #95dc2b;">
            </div></center>
        </div>
    </div>
    </div>
    </div><br><br>
 <div class="container-fluid">
    <center>   <h2> Recent Project </h2>
        &emsp;<small><button style="border: 1px solid rgb(217, 217, 217);background-color:transparent ;color:rgb(191, 191, 191);width: 50px;">All</button>
        &emsp;<button style="border: 1px solid rgb(217, 217, 217);background-color:transparent ;color:rgb(191, 191, 191);">Graphic</button>
        &emsp;<button style="border: 1px solid rgb(217, 217, 217);background-color:transparent ;color:rgb(191, 191, 191);">Photoshop</button>
        &emsp;<button style="border: 1px solid rgb(217, 217, 217);background-color:transparent ;color:rgb(191, 191, 191);">Wallpaper</button></small> 
    </center><br>
    <div class="container" style="width:65%;">
           <div class="row">
                <div class="col-md-4"   >
               <img src="https://rcpro.pl/data/include/cms/Edifier/G2000/2.jpg" width="230"height="200" / >
        </div>
        <div  class="col-md-4" >
               <img src="https://media.istockphoto.com/photos/workplace-of-the-head-with-a-laptop-and-picture-id509241512?k=20&m=509241512&s=612x612&w=0&h=hoJ8RQgGKznAe1yuNoaggsF0mq8OgMVtIiWEaFnWuxU=" width="230"height="200" / >
        </div>
        <div  class="col-md-4">
               <img src="https://media.istockphoto.com/photos/modern-gadgets-in-interior-of-coworking-office-during-covid19-picture-id1284066336?k=20&m=1284066336&s=612x612&w=0&h=wGvv6yVnqXy3bFx8DQu7-RbxQk2ooMqujTFdGkYEksM=" width="230"height="200" / >
        </div>
        </div>
        <br>
        <div class="row">
        <div class="col-md-4" >
            <img src="{{ asset('data/images/sun.jpg') }}" width="230"height="200" / >
        </div>
        <div class="col-md-4 "    >
               <img src="https://c0.wallpaperflare.com/preview/540/806/404/technology-art-design-tech.jpg" width="230"height="200" / >
        </div>
        <div  class="col-md-4" >
               <img src="{{ asset('data/images/table.jpg') }}" width="230"height="200" / >
               </div>
    </div>
 </div>
 <div class="container-fluid img-fluid end">
<div class="container" style="margin-top:100px;width:80%;">
    <div class="row">
    <div class="col-md-3">
<center style="padding-top:100px"><h3 style="color:white;">Solution Co.</h3>
<p style="color:white;font-size: 13px;">Omnis iste natus error doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi .</p>
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAkFBMVEX///8AgAAAfgAAeAAAfAAAegDF38WgwqDG2sa9271HmkehxaEejR4NiQ01lDUqkSpbo1s6lTpKnEpkp2Rtq211r3Vip2JVoVUXixf4/PhzsXPp9OlTnFMAhACmy6aNv42CuYKXxJfj8ePx9/Gy1LLl8uV+t36u0q7R5tGUwpS/2r/N5c0AbwBGlUa307dbn1vo2swhAAAD+klEQVR4nO3de1PaQBTGYXKDGkXu9wKBKKC17ff/dlWntaDBcpbtvmeX9/dXp8445xkIWWFJajVYk3Jdv9suXrv+U6PRePv39eL3D7/hhjSsXN8t+3kzTZLsXelz7/8vSwr0wKLK+rJ786xI4+jU0gI99OndL/JYYvNMWG7zJJPqPBLOirkR70W4QQ9/QuUmysx4nggXcWrs80G4zpMzfM/CKVrwj7bROQ+gB8LivAdQvXAyPBuoXDgyfwn9K+yjFZ80tABULZzaAGoWrs4/Bl+FPTTkWDvDVZo/wnHowsLKQahYuDtzJbMnHKIt1bVDF9p7CLUKh/aEcRuNqWpm62VGrXAVvLBp6VyoVrizs15TLLT5JI3ir2hORbnFJ6lK4cyiT+eztG7zSapS+GBXqPBZ2rO3oNEpnHRsvtBoFJZzm0CNwnurh6FGYd3mikalcBv8Y2h1zaZSKD8dxlnyUlr5GX/cRYM+tBSeDuO08/C4m03Qc5/eRiZMb73bEjQQCePWDD2wuL5ImF2h55Une5+tiR7XoLZkWar1PftPG0mE2Qo9rkFdiTDx8DCsif54Srw7VdSkwjV6XINuRcehj8KWSOjf+f4ShDei82GJHtcgCi9N6NGfhW+FL2wKgBcgjNHTmkThYehpTaLwwoRz9LQmUXiQj2+18TE8bIye1iQK94tv0NOaROGBsIWe9rPKenWi47B15JfstYMJvzwllUmAUVT9O/b7jhPa3VVyLOD3Dx0JgZ9OuRL+CF5YD12YAl9L3Qhj3KdTjoQR7v1GR0Lg2tyNELmucyQEbtxzI0R+Wd2RcBm6ELmlyJHwLnRhglu0uRLiFm2uhMDtKI5eS4EfEjtateGAboTQtxvdCPPQhdBrRrgRFqELofvA3QgXoQuhO93dCIGLNkdC5B5iN2sa5P5TJ8Jx6MK4g9yd6UT4Ewh0IsReFtKJsAhdiP3ynh1hfLSX2wg8PUKFNnYqzPOPdUejUbvd6w82yy10o/vsqrqxROjlri/R9y0oVBmFFOpPIvRz9yWFFOqPQgr1J7niAIU6o5BC/YmEqr8zcyyR8BY9rUkUUqg/Cv0XSq5mRqHOKKRQfyKhl+tSkbCDntYkCinUH4UU6k9ypWQKdUYhhfqj8ECI/OKWcRRSqD8K/RdK7iTrp1BynxkKdUYhhfoTCfXdvvGEKKRQf+ELJXcHpFBnFFKoP5FwhJ7WJAr9F0ruB0yhziikUH8UHgjb6GlNotB/4TB8YUohhdqj8MKEyMsEGycRpj30tCb1KKRQfRRSqD8KL0wIvYquaf3ghVMKKVQfhRTqj8ID4QA9rUkDCilUH4UU6i984TRJTy7x8oz/2BD0v+9B8guvlWY1Mt3ohAAAAABJRU5ErkJggg==" height="15px" width="15px">
&emsp;<img src="data:image/png;base64,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" height="15px" width="15px">
&emsp;<img src="https://toppng.com/uploads/preview/green-instagram-logo-transparent-115496801724jvrm82huq.png" height="15px" width="15px">
    </center>   
</div>
    <div class="col-md-3">
        <center style="padding-top:100px">
        <h3 style="color:white;">Visit Office </h3>
        <img src="https://w7.pngwing.com/pngs/345/54/png-transparent-green-location-icon-illustration-computer-icons-google-maps-google-map-maker-adress-angle-leaf-grass.png" width="15px" height="20px">
        <span style="font-size:10px;color:white;">123 Walking Street.New York</span><br>
        <img src="https://mpng.subpng.com/20180414/iwq/kisspng-mobile-phones-telephone-call-email-font-awesome-phone-5ad1e017ce8c94.7871493215237038318461.jpg" height="15px" width="15px">
        <span style="font-size:10px;color:white;">010-010-0220</span><br>
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTYqTHvswvtFqezS-AVIB0IggjNMMFWlGyZ-s_XWHGYVcKSn3amPWRk--KpHNDhPiSWn94&usqp=CAU" height="15px" width="15px">
        <span style="font-size:10px;color:white;">hello@company.com</span>
    </center>
    </div>
    <div class="col-md-6">
        <center style="padding-top:100px"></center>
<input type="text" placeholder="Name" style="height:40;">&emsp;&emsp;
<input type="email" placeholder="Email" style="height:40;"><br>
<br><input type="text" placeholder="Message" style="height:140;width:380;">
<br><br>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
<input type="submit" value="Send" style="width:70px;height:40;">
</center>
    </div>
</div>
 </div>
</div>
</body>

</html>