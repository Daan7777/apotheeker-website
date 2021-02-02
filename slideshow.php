<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .fling-minislide {width:350px; height:300px; overflow:hidden; position:relative; }
.fling-minislide img{ position:absolute; animation:fling-minislide 20s infinite; opacity:0; width: 100%; height: auto;}

@keyframes fling-minislide {25%{opacity:1;} 40%{opacity:0;}}
.fling-minislide img:nth-child(4){animation-delay:0s;}
.fling-minislide img:nth-child(3){animation-delay:5s;}
.fling-minislide img:nth-child(2){animation-delay:10s;}
.fling-minislide img:nth-child(1){animation-delay:15s;}
</style>
</head>
<body>
    <div class="fling-minislide">
        <img src="pictures/slideshowfoto1.jpg" alt="Slide 4" />
        <img src="pictures/slideshowfoto2.png" alt="Slide 3" />
      
        <img src="pictures/slideshowfoto3.jpg" alt="Slide 2" />
      
        <img src="pictures/slideshowfoto4.jpg" alt="Slide 1" />
      </div>
</body>
</html>