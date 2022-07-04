<!DOCTYPE html>
<html>
<head>
	<title>music player</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" type="text/css" href="../css/playerstyle.css">
</head>

<body>
<?php include('../php/navigation.php');?>
<br><br><br><br><br><br>
  <div class="main"><br><br><br><br><br><br><br><br><br><br><br><br>
  	<p id="logo"><i class="fa fa-music"></i>Zik Music</p>
    
    <!--- left part --->
     <div class="left">

      <!--- song img --->
      <img id="track_image">
         <div class="volume">
            <p id="volume_show">90</p>
            <i class="fa fa-volume-up" aria-hidden="true" onclick="mute_sound()" id="volume_icon"></i>
            <input type="range" min="0" max="100" value="90" onchange="volume_change()" id="volume">  
         </div>

     </div>
 

     <!--- right part --->
  	 <div class="right">

        <div class="show_song_no">
          <p id="present">1</p>
          <p>/</p>
          <p id="total">5</p>
        </div>

       <!--- song title & artist name --->
      <p id="title">title.mp3</p>
      <p id="artist">Artist name</p>

      <!--- middle part --->
  	 	<div class="middle">
  	       <button onclick="previous_song()" id="pre"><i class="fa fa-step-backward" aria-hidden="true"></i></button>
      	   <button onclick="justplay()" id="play"><i class="fa fa-play" aria-hidden="true"></i></button>
  	       <button onclick="next_song()" id="next"><i class="fa fa-step-forward" aria-hidden="true"></i></button>
  	   </div>

       <!--- song duration part --->
        <div class="duration">
           <input type="range" min="0" max="100" value="0" id="duration_slider" onchange="change_duration()">
        </div>
           <button id="auto" onclick="autoplay_switch()">Auto play <i class="fa fa-circle-o-notch" aria-hidden="true"></i></button>
  	</div>


  </div>
   
  <!--- Add javascript file --->
  <script src="../js/playerscript.js"></script>

</body>
</html>