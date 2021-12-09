<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//vjs.zencdn.net/5.11/video-js.min.css" rel="stylesheet">
</head>

<body>
    <!-- <audio controls="controls" preload="metadata" autoplay type="audio/wav">
        <source src="recordings/rec1.wav"/>
    </audio> -->

    <audio width="320" height="240" controls src="recordings/rec1.wav" type="audio/mp3" id="myImageID" autoplay>
        <!-- <source src="movie.ogg" type="video/ogg"> -->
        Your browser does not support the video tag.
    </audio>

    <button id="pp"> Play / Pause


    <div class="result" data-init="0"></div>







    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>




window.counter = 1 ;

$('.result').html( 0);

var intId = setInterval(function(){ 

  
    var initvalue = $('.result').html();
   

    
        audio = document.getElementsByTagName("audio")[0];

        console.log(audio.currentTime);
        console.log(initvalue);
        console.log('=================');
         var at = audio.currentTime ;
        if(audio.currentTime - initvalue >= 3)
        {
            // console.log(audio.currentTime)
            // console.log(initvalue)
            // console.log("Inside if");
            audio = document.getElementsByTagName("audio")[0];
            var at = audio.currentTime  ;
            $("#myImageID").attr("src","recordings/rec1.wav#t="+at);
            $('.result').html(at.toString());

            
        } 
    

    }, 1000);
    </script>

</body>

</html>