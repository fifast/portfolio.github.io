<!DOCTYPE html>
<html>
<head>
     <title> 6th task </title>
           <style>
                  h1,h3{color:steelblue;}
                  body{ background-color : darkseagreen;}
           </style>
</head>
       <body> 
              <h1> About Victoria Kirst </h1>
                 <p> My name is Victoria and I am Jolly, clumsy, and four eyed. </p><hr>
              <h3> My classes this quarter </h3>
          <ul style="list-style-type:disc;">
             <li> CSE 451 - Operating System </li>
             <li> CSE 471 - Computer design and Organisation </li>
             <li> PHYS 121 - Physics - Mechanism </li>
             <li> CSE 498 - Research w/prof.Luis Ceze </li> 
          </ul>
              <h3> My favorite Movies </h3>
                 <p> (I actually don't watch too many movies,so ....... here goes) </p>
          <ol>
            <li> The last 30 minutes of Forrest gump <a href="https://www.imdb.com/list/ls044810333/" > (IMBD) </a> </li>
            <li> Star Trek episode V with Zazu <a href="https://www.imdb.com/list/ls044810333/" > (IMBD) </a> </li>
            <li> Fight Club (not really, but I have seen like 3 movies total so this is my 3rd fave by technicality) 
                 <a href="https://www.imdb.com/list/ls044810333/" > (IMBD) </a> </li>
          </ol>
               <h3> My Moods </h3>
      <p> Happy:<img src= "{{ asset('data/images/happy.jpeg') }}" height="200" >
          Sad: <img src="{{ asset('data/images/sad dog pic.png') }}" height="200" >  </p>
             <h3> Fun facts about my neighbours </h3>
         <ul style="list-style-type:disc;">
             <li> Sue Smith: Effervescent is a word that describe her. </li>
             <li> Bill Thonpson: Loves playing Yu-Gi-Oh. </li>  
          </ul>
</body>
</html>