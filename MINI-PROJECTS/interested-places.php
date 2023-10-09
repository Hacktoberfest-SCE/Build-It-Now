<script src="js/jssor.slider-28.0.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideshowTransitions = [
              {$Duration:500,$Delay:12,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:2049,$Easing:$Jease$.$OutQuad},
              {$Duration:500,$Delay:40,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$SlideOut:true,$Easing:$Jease$.$OutQuad},
              {$Duration:1000,x:-0.2,$Delay:20,$Cols:16,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Assembly:260,$Easing:{$Left:$Jease$.$InOutExpo,$Opacity:$Jease$.$InOutQuad},$Opacity:2,$Outside:true,$Round:{$Top:0.5}},
              {$Duration:1600,y:-1,$Delay:40,$Cols:24,$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraight,$Easing:$Jease$.$OutJump,$Round:{$Top:1.5}},
              {$Duration:1200,x:0.2,y:-0.1,$Delay:16,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.3,0.7],$Top:[0.3,0.7]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InWave,$Top:$Jease$.$InWave,$Clip:$Jease$.$OutQuad},$Round:{$Left:1.3,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.2,0.8],$Top:[0.2,0.8]},$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}},
              {$Duration:1500,x:0.3,y:-0.3,$Delay:20,$Cols:10,$Rows:5,$Opacity:2,$Clip:15,$During:{$Left:[0.1,0.9],$Top:[0.1,0.9]},$SlideOut:true,$Formation:$JssorSlideshowFormations$.$FormationStraightStairs,$Assembly:260,$Easing:{$Left:$Jease$.$InJump,$Top:$Jease$.$InJump,$Clip:$Jease$.$OutQuad},$Round:{$Left:0.8,$Top:2.5}}
            ];
            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            var MAX_WIDTH = 1200;
            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        };
    </script>
    <style>
    	.bgrnd{height:450px;margin-top: 10px; background-image: url("bg/Airplane-bg"); background-repeat: no-repeat;background-size: cover; background-position: center;background-attachment: fixed;}
    	#jssor_1{transition: 8s; transition-timing-function: ease-in-out;}
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }
        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .jssorb053 .i {position:absolute;cursor:pointer;}
        .jssorb053 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb053 .i:hover .b {fill-opacity:.7;}
        .jssorb053 .iav .b {fill-opacity: 1;}
        .jssorb053 .i.idn {opacity:.3;}
        .jssora093 {display:block;position:absolute;cursor:pointer;}
        .jssora093 .c {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093 .a {fill:none;stroke:#fff;stroke-width:400;stroke-miterlimit:10;}
        .jssora093:hover {opacity:.8;}
        .jssora093.jssora093dn {opacity:.6;}
        .jssora093.jssora093ds {opacity:.3;pointer-events:none;}
    </style>
<div class="bgrnd">
    <div id="jssor_1" style="position:relative;margin:0 auto;top:-120px;left:0px;width:980px;height:300px;overflow:hidden;visibility:hidden; border:none;border-radius: 20px;" >
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
            <div>
                <img data-u="image" src="slider-img/img1.png" />
            </div>
            <div>
                <img data-u="image" src="slider-img/img2.jpg" />
            </div>
            <div>
                <img data-u="image" src="slider-img/img3.jpg" />
            </div>
            <div>
                <img data-u="image" src="slider-img/img4.jpg" />
            </div>
            <div>
                <img data-u="image" src="slider-img/img5.jpg" />
            </div>
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
            <div data-u="prototype" class="i" style="width:16px;height:16px;">
                <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    <path class="b" d="M11400,13800H4600c-1320,0-2400-1080-2400-2400V4600c0-1320,1080-2400,2400-2400h6800 c1320,0,2400,1080,2400,2400v6800C13800,12720,12720,13800,11400,13800z"></path>
                </svg>
            </div>
        </div>
        <!-- Arrow Navigator -->
        <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="7777.8,6080 5857.8,8000 7777.8,9920 "></polyline>
                <line class="a" x1="10142.2" y1="8000" x2="5857.8" y2="8000"></line>
            </svg>
        </div>
        <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="c" cx="8000" cy="8000" r="5920"></circle>
                <polyline class="a" points="8222.2,6080 10142.2,8000 8222.2,9920 "></polyline>
                <line class="a" x1="5857.8" y1="8000" x2="10142.2" y2="8000"></line>
            </svg>
        </div>
    </div>
</div>
    <script type="text/javascript">jssor_1_slider_init();
    </script>





<?php
$pune="Pune";
$mumbai="Mumbai";
$goa="Goa";
$delhi="Delhi";
$kolkatta="Kolkatta";
$Hyderabad="Hyderabad";
?>
<style type="text/css">
	.bodyy{animation: fadeee ease 15s;animation-iteration-count: 1; transition: 2s;
            width: 80%;margin-left:10%;margin-top: -200px;background: white;outline: none;border-radius: 10px;}
    @keyframes fadeee{
            0%{margin-left: -10%; opacity: 0}
            50%{opacity: 0.5}
            100%{margin-left: 10%; opacity: 1}
        }
        .bodyy:hover{transform: scale(1.2); transform-style: flat;}
	.flight-opt-cont{width: 95%;margin-left: 2.5%;margin-bottom: 15px;}
	.fl-a{float: left;}
	.flight-opt{ float: left;  margin-left: 5%;margin-top: 20px; width: 25%;}
	.fl-a h1{transition: 0.5s;font-size:20px; margin-left: 5px;margin-top: -5px; margin-top:7px;}
	.fl-a a{text-decoration: none; cursor: pointer;font-weight: bold;color: black;}
</style>
<body>
<div class="bodyy">
	<div class="flight-opt-cont" style="margin-top: 40px;">
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/pune.jfif"></div>
			<div class="fl-a"><h1>PUNE FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$pune; ?> ">Aurangabad, Mumbai, Goa</a></p></div>
		</div>
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/mumbai.jfif"></div>
			<div class="fl-a"><h1>Mumbai FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$mumbai; ?> ">Aurangabad, Hyderabad, Pune</a></p></div>
		</div>
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/Goa.jfif"></div>
			<div class="fl-a"><h1>Goa FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$goa; ?> ">Bengaluru, Hyderabad, Pune</a></p></div>
		</div><br clear="all">
	</div>
	<div class="flight-opt-cont">
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/delhi.jfif"></div>
			<div class="fl-a"><h1>Delhi FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$delhi; ?> ">Pune, Mumbai, Goa</a></p></div>
		</div>
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/kolkata.jfif"></div>
			<div class="fl-a"><h1>Kolkata FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$kolkata; ?> ">Aurangabad, Hyderabad, Pune</a></p></div>
		</div>
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/Hyderabad.png"></div>
			<div class="fl-a"><h1>Hyderabad FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$Hyderabad; ?> ">Bengaluru, Hyderabad, Pune</a></p></div>
		</div><br clear="all">
	</div>
	<div class="flight-opt-cont">
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/pune.jfif"></div>
			<div class="fl-a"><h1>PUNE FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$pune; ?> ">Aurangabad, Mumbai, Goa</a></p></div>
		</div>
		<div class="flight-opt">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/mumbai.jfif"></div>
			<div class="fl-a"><h1>Mumbai FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$mumbai; ?> ">Aurangabad, Hyderabad, Pune</a></p></div>
		</div>
		<div class="flight-opt" style="margin-bottom: 20px;">
			<div style="float: left;"><img style="border-radius: 50%;" src="bg/Goa.jfif"></div>
			<div class="fl-a"><h1>Goa FLIGHTS</h1> <p style="font-size:15px;font-family: roboto; margin-left: 5px;margin-top: -15px;">Via :- <a href="result.php<?php echo"?flight=".$goa; ?> ">Bengaluru, Hyderabad, Pune</a></p></div>
		</div><br clear="all">
	</div>		
</div>
</body>
</html>