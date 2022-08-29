<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
        display:flex;
        align-items:center;
        justify-content: center;
        background-color: rgb(247, 56, 104);
        height:70vh;
     }
      .box{
        display:flex;
        align-items:center;
        width:200px;
        height:150px;
        background-color:rgb(59, 104, 250);
        color:white;
        border-width: 80vh;
        font-family:cursive;
        transition-property: background-color;
        /* transition-duration: 5s ;
        transition-timing-function: ease-in-out; */
        transition: all  1s ease-in-out;
      }
      .box:hover{
        /* transform:translateX(100px) translateY(100px); */
        transform: scale(1.2);
        background-color:rgb(182, 47, 244); 
        border-radius: 1vh;
        border-style: solid;
  border-width: 2px;
        border-color:rgb(161, 13, 230) ;
        font-size: 4vh;
      }
      .box:active{
        background-color:rgb(165, 23, 80); 
        color:rgb(255, 132, 75);
        font-size: 2vh;
      }
      .box2{
        display:flex;
        align-items:center;
        width:130px;
        height:150px;
        background-color:rgb(16, 224, 127);
        color:white;
        margin-left: 10vh;
        font-family:cursive;
        transition-property: background-color,width;
        /* transition-duration: 5s ;
        transition-timing-function: ease-in-out; */
        transition: all  1s ease-in-out;
      }
      .box2:hover{
        /* transform:translateX(100px) translateY(100px); */
        width:300px;
        background-color:rgb(0, 218, 204); 
      }
    </style>
</head>
<body>
    <div class="container">
    <div class="box"><h2> Welcome </h2></div>
    <div class="box2"><h2> To my Website </h2></div>
</div>
</body>
</html>