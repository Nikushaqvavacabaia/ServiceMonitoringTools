<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    
    <title>Monitoring Slot(Casino, Sport)</title>
    <script>
function getQueryStringValue (key) {  
    return unescape(window.location.search.replace(new RegExp("^(?:.*[&\\?]" + escape(key).replace(/[\.\+\*]/g, "\\$&") + "(?:\\=([^&]*))?)?.*$", "i"), "$1"));  
}
</script>
    <style>
            .b-skills:last-child { margin-bottom: -30px; }

.b-skills h2 { margin-bottom: 50px; font-weight: 900; text-transform: uppercase;}

.skill-item
{
	position: relative;
	max-width: 250px;
	width: 100%;
	margin-bottom: 30px;
	color: #555;
}

.chart-container
{
	position: relative;
	width: 100%;
	height: 0;
	padding-top: 100%;
	margin-bottom: 27px;
}

.skill-item .chart,
.skill-item .chart canvas
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100% !important;
	height: 100% !important;
}

.skill-item .chart:before
{
	content: "";
	width: 0;
	height: 100%;
}

.skill-item .chart:before,
.skill-item .percent
{
	display: inline-block;
	vertical-align: middle;
}

.skill-item .percent
{
	position: relative;
	line-height: 1;
	font-size: 40px;
	font-weight: 900;
	z-index: 2;
}

.skill-item  .percent:after
{
	content: attr(data-after);
	font-size: 20px;
}
       
       .graphp{
           font-weight: 900;
       }
    .section1{
        position: absolute;
        width: 200px;
        top: -37px;
        margin-left: -100px;
    }
    
    .b-skills
    {
        margin-top: -120px;
        width: 120px;
    }
    .container{
        width: 120px;
    }
    .animationloader {
  padding:0;
  margin:0;
  animation-duration: 3s;
  top:0;
  left:0;
  z-index: 50;
  width: 100%;
  height: 100%;
  height:100vh;
  width:100%;
	display: flex;
	align-items: center;
	position: fixed;
	background: linear-gradient(to bottom right, #070630 0%,#060454 100%);
  animation: cssAnimation 0s 3s forwards;
}
@keyframes cssAnimation {
  to   { visibility: hidden; }
}
.animation-container {
  display: block;
  position: relative;
  width: 800px;
  max-width: 100%;
  margin: 0 auto;
}

.animation-container .lightning-container {
  position: absolute;
  top: 50%;
  left: 0;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
}

.animation-container .lightning-container .lightning {
  position: absolute;
  display: block;
  height: 12px;
  width: 12px;
  border-radius: 12px;
  -webkit-transform-origin: 6px 6px;
          transform-origin: 6px 6px;
  -webkit-animation-name: woosh;
          animation-name: woosh;
  -webkit-animation-duration: 1.5s;
          animation-duration: 1.5s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  -webkit-animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
          animation-timing-function: cubic-bezier(0.445, 0.05, 0.55, 0.95);
  -webkit-animation-direction: alternate;
          animation-direction: alternate;
}

.animation-container .lightning-container .lightning.white {
  background-color: rgb(33, 117, 30);
  -webkit-box-shadow: 0px 50px 50px 0px rgba(255, 255, 255, 0.3);
          box-shadow: 0px 50px 50px 0px rgba(255, 255, 255, 0.3);
}

.animation-container .lightning-container .lightning.red {
  background-color: #ffffff;
  -webkit-box-shadow: 0px 50px 50px 0px rgba(252, 113, 113, 0.3);
          box-shadow: 0px 50px 50px 0px rgba(252, 113, 113, 0.3);
  -webkit-animation-delay: 0.2s;
          animation-delay: 0.2s;
}

.animation-container .boom-container {
  position: absolute;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 80px;
  height: 80px;
  text-align: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  -webkit-transform: translateY(-50%);
          transform: translateY(-50%);
  left: 200px;
  top: -145px;
}

.animation-container .boom-container .shape {
  display: inline-block;
  position: relative;
  opacity: 0;
  -webkit-transform-origin: center center;
          transform-origin: center center;
}

.animation-container .boom-container .shape.triangle {
  width: 0;
  height: 0;
  border-style: solid;
  -webkit-transform-origin: 50% 80%;
          transform-origin: 50% 80%;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  margin-left: -15px;
  border-width: 0 2.5px 5px 2.5px;
  border-color: transparent transparent #ffffff transparent;
  -webkit-animation-name: boom-triangle;
          animation-name: boom-triangle;
}

.animation-container .boom-container .shape.triangle.big {
  margin-left: -25px;
  border-width: 0 5px 10px 5px;
  border-color: transparent transparent #21f74f transparent;
  -webkit-animation-name: boom-triangle-big;
          animation-name: boom-triangle-big;
}

.animation-container .boom-container .shape.disc {
  width: 8px;
  height: 8px;
  border-radius: 100%;
  background-color: #5ff478;
  -webkit-animation-name: boom-disc;
          animation-name: boom-disc;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
}

.animation-container .boom-container .shape.circle {
  width: 20px;
  height: 20px;
  -webkit-animation-name: boom-circle;
          animation-name: boom-circle;
  -webkit-animation-duration: 1s;
          animation-duration: 1s;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  border-radius: 100%;
  margin-left: -30px;
}

.animation-container .boom-container .shape.circle.white {
  border: 1px solid white;
}

.animation-container .boom-container .shape.circle.big {
  width: 40px;
  height: 40px;
  margin-left: 0px;
}

.animation-container .boom-container .shape.circle.big.white {
  border: 2px solid white;
}

.animation-container .boom-container .shape:after {
  background-color: rgba(178, 215, 232, 0.2);
}

.animation-container .boom-container .shape.triangle, .animation-container .boom-container .shape.circle, .animation-container .boom-container .shape.circle.big, .animation-container .boom-container .shape.disc {
  -webkit-animation-delay: .38s;
          animation-delay: .38s;
  -webkit-animation-duration: 3s;
          animation-duration: 3s;
}

.animation-container .boom-container .shape.circle {
  -webkit-animation-delay: 0.6s;
          animation-delay: 0.6s;
}

.animation-container .boom-container.second {
  left: 485px;
  top: 155px;
}

.animation-container .boom-container.second .shape.triangle, .animation-container .boom-container.second .shape.circle, .animation-container .boom-container.second .shape.circle.big, .animation-container .boom-container.second .shape.disc {
  -webkit-animation-delay: 1.9s;
          animation-delay: 1.9s;
}

.animation-container .boom-container.second .shape.circle {
  -webkit-animation-delay: 2.15s;
          animation-delay: 2.15s;
}

@-webkit-keyframes woosh {
  0% {
    width: 12px;
    -webkit-transform: translate(0px, 0px) rotate(-35deg);
            transform: translate(0px, 0px) rotate(-35deg);
  }
  15% {
    width: 50px;
  }
  30% {
    width: 12px;
    -webkit-transform: translate(214px, -150px) rotate(-35deg);
            transform: translate(214px, -150px) rotate(-35deg);
  }
  30.1% {
    -webkit-transform: translate(214px, -150px) rotate(46deg);
            transform: translate(214px, -150px) rotate(46deg);
  }
  50% {
    width: 110px;
  }
  70% {
    width: 12px;
    -webkit-transform: translate(500px, 150px) rotate(46deg);
            transform: translate(500px, 150px) rotate(46deg);
  }
  70.1% {
    -webkit-transform: translate(500px, 150px) rotate(-37deg);
            transform: translate(500px, 150px) rotate(-37deg);
  }
  85% {
    width: 50px;
  }
  100% {
    width: 12px;
    -webkit-transform: translate(700px, 0) rotate(-37deg);
            transform: translate(700px, 0) rotate(-37deg);
  }
}

@keyframes woosh {
  0% {
    width: 12px;
    -webkit-transform: translate(0px, 0px) rotate(-35deg);
            transform: translate(0px, 0px) rotate(-35deg);
  }
  15% {
    width: 50px;
  }
  30% {
    width: 12px;
    -webkit-transform: translate(214px, -150px) rotate(-35deg);
            transform: translate(214px, -150px) rotate(-35deg);
  }
  30.1% {
    -webkit-transform: translate(214px, -150px) rotate(46deg);
            transform: translate(214px, -150px) rotate(46deg);
  }
  50% {
    width: 110px;
  }
  70% {
    width: 12px;
    -webkit-transform: translate(500px, 150px) rotate(46deg);
            transform: translate(500px, 150px) rotate(46deg);
  }
  70.1% {
    -webkit-transform: translate(500px, 150px) rotate(-37deg);
            transform: translate(500px, 150px) rotate(-37deg);
  }
  85% {
    width: 50px;
  }
  100% {
    width: 12px;
    -webkit-transform: translate(700px, 0) rotate(-37deg);
            transform: translate(700px, 0) rotate(-37deg);
  }
}

@-webkit-keyframes boom-circle {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  30% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3);
  }
  100% {
  }
}

@keyframes boom-circle {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  30% {
    opacity: 0;
    -webkit-transform: scale(3);
            transform: scale(3);
  }
  100% {
  }
}

@-webkit-keyframes boom-triangle-big {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    -webkit-transform: scale(2.5) translate(50px, -50px) rotate(360deg);
            transform: scale(2.5) translate(50px, -50px) rotate(360deg);
  }
  100% {
  }
}

@keyframes boom-triangle-big {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    -webkit-transform: scale(2.5) translate(50px, -50px) rotate(360deg);
            transform: scale(2.5) translate(50px, -50px) rotate(360deg);
  }
  100% {
  }
}

@-webkit-keyframes boom-triangle {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  30% {
    opacity: 0;
    -webkit-transform: scale(3) translate(20px, 40px) rotate(360deg);
            transform: scale(3) translate(20px, 40px) rotate(360deg);
  }
  100% {
  }
}

@keyframes boom-triangle {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  30% {
    opacity: 0;
    -webkit-transform: scale(3) translate(20px, 40px) rotate(360deg);
            transform: scale(3) translate(20px, 40px) rotate(360deg);
  }
  100% {
  }
}

@-webkit-keyframes boom-disc {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    -webkit-transform: scale(2) translate(-70px, -30px);
            transform: scale(2) translate(-70px, -30px);
  }
  100% {
  }
}

@keyframes boom-disc {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    -webkit-transform: scale(2) translate(-70px, -30px);
            transform: scale(2) translate(-70px, -30px);
  }
  100% {
  }
}

</style>
</head>
<body>
<div class="animationloader">
        <div class="animation-container">
            <div class="lightning-container">
                <div class="lightning white"></div>
                <div class="lightning red"></div>
            </div>
            <div class="boom-container">
                <div class="shape circle big white"></div>
                <div class="shape circle white"></div>
                <div class="shape triangle big yellow"></div>
                <div class="shape disc white"></div>
                <div class="shape triangle blue"></div>
            </div>
            <div class="boom-container second">
                <div class="shape circle big white"></div>
                <div class="shape circle white"></div>
                <div class="shape disc white"></div>
                <div class="shape triangle blue"></div>
            </div>
        </div>
    </div>
    <form action="/admin/login" method="POST">
    @csrf
        <button class="register_button">Login/Regiser</button>
    </form>
    <div class="navbar">
        <a href="/index">
            <img class="logo" src="/IMG/logo.png">
        </a>
    </div>
    <div class="search">
        <form action="{{ route('monitoring.all') }} ">
            @csrf
            <img src="/IMG/search.png" style="width:30px; margin-top: 2px; position: absolute;">
            <input class="form-control" type="text" name="provider" placeholder="Enter the provider">
            <input class="form-control" type="text" name="product" placeholder="Enter the product">
            <button class="search_button" type="register_button">Submit</button>
        </form>
        <form action="{{ route('graph.all') }} ">
            <button class="statistic_button" style="margin: -32px 240px;40px;width: 40px"><img src="/IMG/statistic.svg" style="width: 30px;"/></button>
        </form>
    </div>
    <div class="buttons">
        <a href="/index">
            <button class="banksEcommerce">Banks/Ecommerce</button>
        </a>
        <a href="/slot">
        <button class="slot" style="background-color: #85CF9B; color: #152340;">Slot(Casino, Sport)</button>
        </a>
        <a href="/isp">
        <button class="isp">ISP/Cell</button>
        </a>
        <a href="/fbn">
        <button class="fbn">Front/Back/Network</button>
        </a>
        
    </div><br><br><br>
    <div class="productBody">
        <div class="product1">
            <a class="provider_link" href="/egt">
                <h1 class="product1Header">EGT - Issues in HH/MM: {{$sumegtnow}}</h1>
            </a>
            <div class="graph">
            <a href="/egt1" class="egt1a">
            <button class="box" id="egt1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $egt1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#egt1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#egt1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt1count>=0.10 && $egt1count<=0.20){
                    echo "<style>#egt1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt1count>0.20){
                    echo "<style>#egt1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt2" class="egt2a">
            <button class="box" id="egt2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $egt2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#egt2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#egt2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt2count>=0.10 && $egt2count<=0.20){
                    echo "<style>#egt2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt2count>0.20){
                    echo "<style>#egt2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt3" class="egt3a">
            <button class="box" id="egt3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $egt3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#egt3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#egt3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt3count>=0.10 && $egt3count<=0.20){
                    echo "<style>#egt3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt3count>0.20){
                    echo "<style>#egt3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt4" class="egt4a">
            <button class="box" id="egt4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $egt4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#egt4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#egt4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt4count>=0.10 && $egt4count<=0.20){
                    echo "<style>#egt4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt4count>0.20){
                    echo "<style>#egt4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt5" class="egt5a">
            <button class="box" id="egt5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $egt5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#egt5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#egt5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt5count>=0.10 && $egt5count<=0.20){
                    echo "<style>#egt5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt5count>0.20){
                    echo "<style>#egt5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt6" class="egt6a">
            <button class="box" id="egt6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $egt6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#egt6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#egt6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt6count>=0.10 && $egt6count<=0.20){
                    echo "<style>#egt6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt6count>0.20){
                    echo "<style>#egt6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt7" class="egt7a">
            <button class="box" id="egt7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $egt7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#egt7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#egt7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt7count>=0.10 && $egt7count<=0.20){
                    echo "<style>#egt7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt7count>0.20){
                    echo "<style>#egt7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt8" class="egt8a">
            <button class="box" id="egt8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $egt8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#egt8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#egt8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt8count>=0.10 && $egt8count<=0.20){
                    echo "<style>#egt8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt8count>0.20){
                    echo "<style>#egt8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt9" class="egt9a">
            <button class="box" id="egt9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $egt9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#egt9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#egt9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt9count>=0.10 && $egt9count<=0.20){
                    echo "<style>#egt9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt9count>0.20){
                    echo "<style>#egt9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt10" class="egt10a">
            <button class="box" id="egt10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $egt10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#egt10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#egt10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt10count>=0.10 && $egt10count<=0.20){
                    echo "<style>#egt10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt10count>0.20){
                    echo "<style>#egt10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt11" class="egt11a">
            <button class="box" id="egt11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $egt11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#egt11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#egt11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt11count>=0.10 && $egt11count<=0.20){
                    echo "<style>#egt11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt11count>0.20){
                    echo "<style>#egt11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt12" class="egt12a">
            <button class="box" id="egt12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $egt12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#egt12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#egt12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt12count>=0.10 && $egt12count<=0.20){
                    echo "<style>#egt12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt12count>0.20){
                    echo "<style>#egt12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt13" class="egt13a">
            <button class="box" id="egt13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $egt13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#egt13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#egt13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt13count>=0.10 && $egt13count<=0.20){
                    echo "<style>#egt13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt13count>0.20){
                    echo "<style>#egt13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt14" class="egt14a">
            <button class="box" id="egt14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $egt14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#egt14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#egt14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt14count>=0.10 && $egt14count<=0.20){
                    echo "<style>#egt14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt14count>0.20){
                    echo "<style>#egt14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt15" class="egt15a">
            <button class="box" id="egt15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $egt15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#egt15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#egt15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt15count>=0.10 && $egt15count<=0.20){
                    echo "<style>#egt15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt15count>0.20){
                    echo "<style>#egt15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt16" class="egt16a">
            <button class="box" id="egt16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $egt16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#egt16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#egt16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt16count>=0.10 && $egt16count<=0.20){
                    echo "<style>#egt16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt16count>0.20){
                    echo "<style>#egt16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt17" class="egt17a">
            <button class="box" id="egt17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $egt17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#egt17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#egt17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt17count>=0.10 && $egt17count<=0.20){
                    echo "<style>#egt17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt17count>0.20){
                    echo "<style>#egt17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt18" class="egt18a">
            <button class="box" id="egt18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $egt18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#egt18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#egt18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt18count>=0.10 && $egt18count<=0.20){
                    echo "<style>#egt18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt18count>0.20){
                    echo "<style>#egt18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt19" class="egt19a">
            <button class="box" id="egt19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $egt19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#egt19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#egt19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt19count>=0.10 && $egt19count<=0.20){
                    echo "<style>#egt19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt19count>0.20){
                    echo "<style>#egt19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt20" class="egt20a">
            <button class="box" id="egt20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $egt20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#egt20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#egt20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt20count>=0.10 && $egt20count<=0.20){
                    echo "<style>#egt20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt20count>0.20){
                    echo "<style>#egt20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt21" class="egt21a">
            <button class="box" id="egt21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $egt21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#egt21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#egt21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt21count>=0.10 && $egt21count<=0.20){
                    echo "<style>#egt21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt21count>0.20){
                    echo "<style>#egt21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt22" class="egt22a">
            <button class="box" id="egt22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $egt22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#egt22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#egt22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt22count>=0.10 && $egt22count<=0.20){
                    echo "<style>#egt22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt22count>0.20){
                    echo "<style>#egt22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt23" class="egt23a">
            <button class="box" id="egt23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $egt23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#egt23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#egt23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt23count>=0.10 && $egt23count<=0.20){
                    echo "<style>#egt23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt23count>0.20){
                    echo "<style>#egt23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt24" class="egt24a">
            <button class="box" id="egt24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $egt24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#egt24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#egt24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt24count>=0.10 && $egt24count<=0.20){
                    echo "<style>#egt24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt24count>0.20){
                    echo "<style>#egt24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt25" class="egt25a">
            <button class="box" id="egt25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $egt25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#egt25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#egt25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt25count>=0.10 && $egt25count<=0.20){
                    echo "<style>#egt25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt25count>0.20){
                    echo "<style>#egt25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt26" class="egt26a">
            <button class="box" id="egt26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $egt26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#egt26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#egt26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt26count>=0.10 && $egt26count<=0.20){
                    echo "<style>#egt26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt26count>0.20){
                    echo "<style>#egt26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt27" class="egt27a">
            <button class="box" id="egt27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $egt27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#egt27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#egt27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt27count>=0.10 && $egt27count<=0.20){
                    echo "<style>#egt27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt27count>0.20){
                    echo "<style>#egt27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt28" class="egt28a">
            <button class="box" id="egt28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $egt28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#egt28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#egt28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt28count>=0.10 && $egt28count<=0.20){
                    echo "<style>#egt28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt28count>0.20){
                    echo "<style>#egt28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt29" class="egt29a">
            <button class="box" id="egt29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $egt29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#egt29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#egt29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt29count>=0.10 && $egt29count<=0.20){
                    echo "<style>#egt29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt29count>0.20){
                    echo "<style>#egt29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt30" class="egt30a">
            <button class="box" id="egt30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $egt30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#egt30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#egt30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt30count>=0.10 && $egt30count<=0.20){
                    echo "<style>#egt30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt30count>0.20){
                    echo "<style>#egt30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/egt31" class="egt31a">
            <button class="box" id="egt31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $egt31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#egt31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#egt31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .egt31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#egt31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($egt31count>=0.10 && $egt31count<=0.20){
                    echo "<style>#egt31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($egt31count>0.20){
                    echo "<style>#egt31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expegt">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofegtprov=($egt1count + $egt2count + $egt3count + $egt4count + $egt5count + $egt6count + $egt7count + $egt8count + $egt9count + $egt10count + $egt11count + $egt12count + $egt13count + $egt14count + $egt15count +  $egt16count + $egt17count + $egt18count + $egt19count + $egt20count + $egt21count + $egt22count + $egt23count + $egt24count + $egt25count + $egt26count+ $egt27count+ $egt28count+ $egt29count+ $egt30count + $egt31count);
            $sofegte = ($sumofegtprov);
            if($sofegte == 0){
                $sofegte = 1;
            }


            $percofegtprov = round(($sumofegtprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofegtprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofegtprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/egtjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/egtfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/egtmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/egtapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/egtmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/egtjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/egtjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/egtaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/egtsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/egtoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/egtnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/egtdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/everymatrix">
                <h1 class="productHeader">Every matrix - Issues in HH/MM: {{$sumeverymatrixnow}}</h1>
            </a>
            <div class="graph">
            <a href="/everymatrix1" class="everymatrix1a">
            <button class="box" id="everymatrix1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $everymatrix1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#everymatrix1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#everymatrix1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix1count>=0.10 && $everymatrix1count<=0.20){
                    echo "<style>#everymatrix1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix1count>0.20){
                    echo "<style>#everymatrix1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix2" class="everymatrix2a">
            <button class="box" id="everymatrix2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 </span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#everymatrix2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#everymatrix2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix2count>=0.10 && $everymatrix2count<=0.20){
                    echo "<style>#everymatrix2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix2count>0.20){
                    echo "<style>#everymatrix2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix3" class="everymatrix3a">
            <button class="box" id="everymatrix3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $everymatrix3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#everymatrix3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#everymatrix3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix3count>=0.10 && $everymatrix3count<=0.20){
                    echo "<style>#everymatrix3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix3count>0.20){
                    echo "<style>#everymatrix3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix4" class="everymatrix4a">
            <button class="box" id="everymatrix4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $everymatrix4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#everymatrix4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#everymatrix4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix4count>=0.10 && $everymatrix4count<=0.20){
                    echo "<style>#everymatrix4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix4count>0.20){
                    echo "<style>#everymatrix4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix5" class="everymatrix5a">
            <button class="box" id="everymatrix5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $everymatrix5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#everymatrix5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#everymatrix5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix5count>=0.10 && $everymatrix5count<=0.20){
                    echo "<style>#everymatrix5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix5count>0.20){
                    echo "<style>#everymatrix5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix6" class="everymatrix6a">
            <button class="box" id="everymatrix6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $everymatrix6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#everymatrix6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#everymatrix6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix6count>=0.10 && $everymatrix6count<=0.20){
                    echo "<style>#everymatrix6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix6count>0.20){
                    echo "<style>#everymatrix6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix7" class="everymatrix7a">
            <button class="box" id="everymatrix7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $everymatrix7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#everymatrix7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#everymatrix7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix7count>=0.10 && $everymatrix7count<=0.20){
                    echo "<style>#everymatrix7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix7count>0.20){
                    echo "<style>#everymatrix7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix8" class="everymatrix8a">
            <button class="box" id="everymatrix8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $everymatrix8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#everymatrix8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#everymatrix8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix8count>=0.10 && $everymatrix8count<=0.20){
                    echo "<style>#everymatrix8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix8count>0.20){
                    echo "<style>#everymatrix8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix9" class="everymatrix9a">
            <button class="box" id="everymatrix9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $everymatrix9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#everymatrix9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#everymatrix9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix9count>=0.10 && $everymatrix9count<=0.20){
                    echo "<style>#everymatrix9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix9count>0.20){
                    echo "<style>#everymatrix9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix10" class="everymatrix10a">
            <button class="box" id="everymatrix10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $everymatrix10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#everymatrix10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#everymatrix10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix10count>=0.10 && $everymatrix10count<=0.20){
                    echo "<style>#everymatrix10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix10count>0.20){
                    echo "<style>#everymatrix10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix11" class="everymatrix11a">
            <button class="box" id="everymatrix11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $everymatrix11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#everymatrix11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#everymatrix11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix11count>=0.10 && $everymatrix11count<=0.20){
                    echo "<style>#everymatrix11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix11count>0.20){
                    echo "<style>#everymatrix11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix12" class="everymatrix12a">
            <button class="box" id="everymatrix12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $everymatrix12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#everymatrix12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#everymatrix12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix12count>=0.10 && $everymatrix12count<=0.20){
                    echo "<style>#everymatrix12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix12count>0.20){
                    echo "<style>#everymatrix12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix13" class="everymatrix13a">
            <button class="box" id="everymatrix13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $everymatrix13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#everymatrix13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#everymatrix13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix13count>=0.10 && $everymatrix13count<=0.20){
                    echo "<style>#everymatrix13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix13count>0.20){
                    echo "<style>#everymatrix13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix14" class="everymatrix14a">
            <button class="box" id="everymatrix14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $everymatrix14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#everymatrix14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#everymatrix14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix14count>=0.10 && $everymatrix14count<=0.20){
                    echo "<style>#everymatrix14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix14count>0.20){
                    echo "<style>#everymatrix14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix15" class="everymatrix15a">
            <button class="box" id="everymatrix15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $everymatrix15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#everymatrix15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#everymatrix15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix15count>=0.10 && $everymatrix15count<=0.20){
                    echo "<style>#everymatrix15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix15count>0.20){
                    echo "<style>#everymatrix15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix16" class="everymatrix16a">
            <button class="box" id="everymatrix16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $everymatrix16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#everymatrix16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#everymatrix16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix16count>=0.10 && $everymatrix16count<=0.20){
                    echo "<style>#everymatrix16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix16count>0.20){
                    echo "<style>#everymatrix16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix17" class="everymatrix17a">
            <button class="box" id="everymatrix17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $everymatrix17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#everymatrix17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#everymatrix17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix17count>=0.10 && $everymatrix17count<=0.20){
                    echo "<style>#everymatrix17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix17count>0.20){
                    echo "<style>#everymatrix17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix18" class="everymatrix18a">
            <button class="box" id="everymatrix18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $everymatrix18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#everymatrix18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#everymatrix18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix18count>=0.10 && $everymatrix18count<=0.20){
                    echo "<style>#everymatrix18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix18count>0.20){
                    echo "<style>#everymatrix18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix19" class="everymatrix19a">
            <button class="box" id="everymatrix19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $everymatrix19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#everymatrix19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#everymatrix19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix19count>=0.10 && $everymatrix19count<=0.20){
                    echo "<style>#everymatrix19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix19count>0.20){
                    echo "<style>#everymatrix19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix20" class="everymatrix20a">
            <button class="box" id="everymatrix20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $everymatrix20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#everymatrix20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#everymatrix20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix20count>=0.10 && $everymatrix20count<=0.20){
                    echo "<style>#everymatrix20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix20count>0.20){
                    echo "<style>#everymatrix20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix21" class="everymatrix21a">
            <button class="box" id="everymatrix21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $everymatrix21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#everymatrix21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#everymatrix21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix21count>=0.10 && $everymatrix21count<=0.20){
                    echo "<style>#everymatrix21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix21count>0.20){
                    echo "<style>#everymatrix21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix22" class="everymatrix22a">
            <button class="box" id="everymatrix22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $everymatrix22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#everymatrix22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#everymatrix22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix22count>=0.10 && $everymatrix22count<=0.20){
                    echo "<style>#everymatrix22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix22count>0.20){
                    echo "<style>#everymatrix22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix23" class="everymatrix23a">
            <button class="box" id="everymatrix23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $everymatrix23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#everymatrix23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#everymatrix23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix23count>=0.10 && $everymatrix23count<=0.20){
                    echo "<style>#everymatrix23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix23count>0.20){
                    echo "<style>#everymatrix23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix24" class="everymatrix24a">
            <button class="box" id="everymatrix24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $everymatrix24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#everymatrix24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#everymatrix24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix24count>=0.10 && $everymatrix24count<=0.20){
                    echo "<style>#everymatrix24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix24count>0.20){
                    echo "<style>#everymatrix24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix25" class="everymatrix25a">
            <button class="box" id="everymatrix25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $everymatrix25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#everymatrix25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#everymatrix25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix25count>=0.10 && $everymatrix25count<=0.20){
                    echo "<style>#everymatrix25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix25count>0.20){
                    echo "<style>#everymatrix25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix26" class="everymatrix26a">
            <button class="box" id="everymatrix26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $everymatrix26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#everymatrix26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#everymatrix26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix26count>=0.10 && $everymatrix26count<=0.20){
                    echo "<style>#everymatrix26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix26count>0.20){
                    echo "<style>#everymatrix26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix27" class="everymatrix27a">
            <button class="box" id="everymatrix27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $everymatrix27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#everymatrix27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#everymatrix27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix27count>=0.10 && $everymatrix27count<=0.20){
                    echo "<style>#everymatrix27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix27count>0.20){
                    echo "<style>#everymatrix27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix28" class="everymatrix28a">
            <button class="box" id="everymatrix28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $everymatrix28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#everymatrix28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#everymatrix28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix28count>=0.10 && $everymatrix28count<=0.20){
                    echo "<style>#everymatrix28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix28count>0.20){
                    echo "<style>#everymatrix28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix29" class="everymatrix29a">
            <button class="box" id="everymatrix29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $everymatrix29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#everymatrix29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#everymatrix29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix29count>=0.10 && $everymatrix29count<=0.20){
                    echo "<style>#everymatrix29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix29count>0.20){
                    echo "<style>#everymatrix29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix30" class="everymatrix30a">
            <button class="box" id="everymatrix30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $everymatrix30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#everymatrix30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#everymatrix30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix30count>=0.10 && $everymatrix30count<=0.20){
                    echo "<style>#everymatrix30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix30count>0.20){
                    echo "<style>#everymatrix30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/everymatrix31" class="everymatrix31a">
            <button class="box" id="everymatrix31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $everymatrix31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#everymatrix31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#everymatrix31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .everymatrix31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#everymatrix31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($everymatrix31count>=0.10 && $everymatrix31count<=0.20){
                    echo "<style>#everymatrix31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($everymatrix31count>0.20){
                    echo "<style>#everymatrix31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expeverymatrix">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofeverymatrixprov=($everymatrix1count + $everymatrix2count + $everymatrix3count + $everymatrix4count + $everymatrix5count + $everymatrix6count + $everymatrix7count + $everymatrix8count + $everymatrix9count + $everymatrix10count + $everymatrix11count + $everymatrix12count + $everymatrix13count + $everymatrix14count + $everymatrix15count +  $everymatrix16count + $everymatrix17count + $everymatrix18count + $everymatrix19count + $everymatrix20count + $everymatrix21count + $everymatrix22count + $everymatrix23count + $everymatrix24count + $everymatrix25count + $everymatrix26count+ $everymatrix27count+ $everymatrix28count+ $everymatrix29count+ $everymatrix30count + $everymatrix31count);
            $sofeverymatrixe = ($sumofeverymatrixprov);
            if($sofeverymatrixe == 0){
                $sofeverymatrixe = 1;
            }


            $percofeverymatrixprov = round(($sumofeverymatrixprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofeverymatrixprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofeverymatrixprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/everymatrixjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/everymatrixfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/everymatrixmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/everymatrixapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/everymatrixmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/everymatrixjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/everymatrixjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/everymatrixaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/everymatrixsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/everymatrixoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/everymatrixnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/everymatrixdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/betconstruct"> 
                <h1 class="productHeader">Betconstruct - Issues in HH/MM: {{$sumbetconstructnow}}</h1>
            </a>
            <div class="graph">
            <a href="/betconstruct1" class="betconstruct1a">
            <button class="box" id="betconstruct1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $betconstruct1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#betconstruct1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#betconstruct1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct1count>=0.10 && $betconstruct1count<=0.20){
                    echo "<style>#betconstruct1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct1count>0.20){
                    echo "<style>#betconstruct1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct2" class="betconstruct2a">
            <button class="box" id="betconstruct2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $betconstruct2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#betconstruct2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#betconstruct2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct2count>=0.10 && $betconstruct2count<=0.20){
                    echo "<style>#betconstruct2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct2count>0.20){
                    echo "<style>#betconstruct2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct3" class="betconstruct3a">
            <button class="box" id="betconstruct3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $betconstruct3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#betconstruct3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#betconstruct3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct3count>=0.10 && $betconstruct3count<=0.20){
                    echo "<style>#betconstruct3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct3count>0.20){
                    echo "<style>#betconstruct3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct4" class="betconstruct4a">
            <button class="box" id="betconstruct4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $betconstruct4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#betconstruct4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#betconstruct4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct4count>=0.10 && $betconstruct4count<=0.20){
                    echo "<style>#betconstruct4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct4count>0.20){
                    echo "<style>#betconstruct4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct5" class="betconstruct5a">
            <button class="box" id="betconstruct5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $betconstruct5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#betconstruct5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#betconstruct5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct5count>=0.10 && $betconstruct5count<=0.20){
                    echo "<style>#betconstruct5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct5count>0.20){
                    echo "<style>#betconstruct5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct6" class="betconstruct6a">
            <button class="box" id="betconstruct6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $betconstruct6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#betconstruct6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#betconstruct6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct6count>=0.10 && $betconstruct6count<=0.20){
                    echo "<style>#betconstruct6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct6count>0.20){
                    echo "<style>#betconstruct6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct7" class="betconstruct7a">
            <button class="box" id="betconstruct7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $betconstruct7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#betconstruct7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#betconstruct7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct7count>=0.10 && $betconstruct7count<=0.20){
                    echo "<style>#betconstruct7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct7count>0.20){
                    echo "<style>#betconstruct7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct8" class="betconstruct8a">
            <button class="box" id="betconstruct8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $betconstruct8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#betconstruct8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#betconstruct8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct8count>=0.10 && $betconstruct8count<=0.20){
                    echo "<style>#betconstruct8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct8count>0.20){
                    echo "<style>#betconstruct8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct9" class="betconstruct9a">
            <button class="box" id="betconstruct9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $betconstruct9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#betconstruct9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#betconstruct9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct9count>=0.10 && $betconstruct9count<=0.20){
                    echo "<style>#betconstruct9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct9count>0.20){
                    echo "<style>#betconstruct9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct10" class="betconstruct10a">
            <button class="box" id="betconstruct10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $betconstruct10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#betconstruct10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#betconstruct10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct10count>=0.10 && $betconstruct10count<=0.20){
                    echo "<style>#betconstruct10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct10count>0.20){
                    echo "<style>#betconstruct10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct11" class="betconstruct11a">
            <button class="box" id="betconstruct11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $betconstruct11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#betconstruct11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#betconstruct11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct11count>=0.10 && $betconstruct11count<=0.20){
                    echo "<style>#betconstruct11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct11count>0.20){
                    echo "<style>#betconstruct11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct12" class="betconstruct12a">
            <button class="box" id="betconstruct12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $betconstruct12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#betconstruct12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#betconstruct12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct12count>=0.10 && $betconstruct12count<=0.20){
                    echo "<style>#betconstruct12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct12count>0.20){
                    echo "<style>#betconstruct12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct13" class="betconstruct13a">
            <button class="box" id="betconstruct13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $betconstruct13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#betconstruct13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#betconstruct13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct13count>=0.10 && $betconstruct13count<=0.20){
                    echo "<style>#betconstruct13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct13count>0.20){
                    echo "<style>#betconstruct13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct14" class="betconstruct14a">
            <button class="box" id="betconstruct14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $betconstruct14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#betconstruct14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#betconstruct14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct14count>=0.10 && $betconstruct14count<=0.20){
                    echo "<style>#betconstruct14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct14count>0.20){
                    echo "<style>#betconstruct14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct15" class="betconstruct15a">
            <button class="box" id="betconstruct15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $betconstruct15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#betconstruct15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#betconstruct15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct15count>=0.10 && $betconstruct15count<=0.20){
                    echo "<style>#betconstruct15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct15count>0.20){
                    echo "<style>#betconstruct15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct16" class="betconstruct16a">
            <button class="box" id="betconstruct16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $betconstruct16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#betconstruct16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#betconstruct16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct16count>=0.10 && $betconstruct16count<=0.20){
                    echo "<style>#betconstruct16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct16count>0.20){
                    echo "<style>#betconstruct16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct17" class="betconstruct17a">
            <button class="box" id="betconstruct17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $betconstruct17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#betconstruct17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#betconstruct17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct17count>=0.10 && $betconstruct17count<=0.20){
                    echo "<style>#betconstruct17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct17count>0.20){
                    echo "<style>#betconstruct17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct18" class="betconstruct18a">
            <button class="box" id="betconstruct18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $betconstruct18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#betconstruct18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#betconstruct18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct18count>=0.10 && $betconstruct18count<=0.20){
                    echo "<style>#betconstruct18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct18count>0.20){
                    echo "<style>#betconstruct18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct19" class="betconstruct19a">
            <button class="box" id="betconstruct19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $betconstruct19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#betconstruct19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#betconstruct19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct19count>=0.10 && $betconstruct19count<=0.20){
                    echo "<style>#betconstruct19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct19count>0.20){
                    echo "<style>#betconstruct19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct20" class="betconstruct20a">
            <button class="box" id="betconstruct20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $betconstruct20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#betconstruct20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#betconstruct20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct20count>=0.10 && $betconstruct20count<=0.20){
                    echo "<style>#betconstruct20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct20count>0.20){
                    echo "<style>#betconstruct20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct21" class="betconstruct21a">
            <button class="box" id="betconstruct21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $betconstruct21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#betconstruct21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#betconstruct21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct21count>=0.10 && $betconstruct21count<=0.20){
                    echo "<style>#betconstruct21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct21count>0.20){
                    echo "<style>#betconstruct21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 

                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct22" class="betconstruct22a">
            <button class="box" id="betconstruct22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $betconstruct22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#betconstruct22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#betconstruct22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct22count>=0.10 && $betconstruct22count<=0.20){
                    echo "<style>#betconstruct22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct22count>0.20){
                    echo "<style>#betconstruct22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct23" class="betconstruct23a">
            <button class="box" id="betconstruct23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $betconstruct23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#betconstruct23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#betconstruct23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct23count>=0.10 && $betconstruct23count<=0.20){
                    echo "<style>#betconstruct23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct23count>0.20){
                    echo "<style>#betconstruct23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct24" class="betconstruct24a">
            <button class="box" id="betconstruct24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $betconstruct24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#betconstruct24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#betconstruct24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct24count>=0.10 && $betconstruct24count<=0.20){
                    echo "<style>#betconstruct24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct24count>0.20){
                    echo "<style>#betconstruct24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct25" class="betconstruct25a">
            <button class="box" id="betconstruct25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $betconstruct25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#betconstruct25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#betconstruct25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct25count>=0.10 && $betconstruct25count<=0.20){
                    echo "<style>#betconstruct25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct25count>0.20){
                    echo "<style>#betconstruct25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct26" class="betconstruct26a">
            <button class="box" id="betconstruct26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $betconstruct26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#betconstruct26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#betconstruct26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct26count>=0.10 && $betconstruct26count<=0.20){
                    echo "<style>#betconstruct26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct26count>0.20){
                    echo "<style>#betconstruct26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct27" class="betconstruct27a">
            <button class="box" id="betconstruct27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $betconstruct27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#betconstruct27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#betconstruct27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct27count>=0.10 && $betconstruct27count<=0.20){
                    echo "<style>#betconstruct27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct27count>0.20){
                    echo "<style>#betconstruct27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct28" class="betconstruct28a">
            <button class="box" id="betconstruct28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $betconstruct28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#betconstruct28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#betconstruct28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct28count>=0.10 && $betconstruct28count<=0.20){
                    echo "<style>#betconstruct28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct28count>0.20){
                    echo "<style>#betconstruct28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct29" class="betconstruct29a">
            <button class="box" id="betconstruct29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $betconstruct29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#betconstruct29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#betconstruct29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct29count>=0.10 && $betconstruct29count<=0.20){
                    echo "<style>#betconstruct29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct29count>0.20){
                    echo "<style>#betconstruct29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct30" class="betconstruct30a">
            <button class="box" id="betconstruct30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $betconstruct30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#betconstruct30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#betconstruct30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct30count>=0.10 && $betconstruct30count<=0.20){
                    echo "<style>#betconstruct30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct30count>0.20){
                    echo "<style>#betconstruct30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betconstruct31" class="betconstruct31a">
            <button class="box" id="betconstruct31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $betconstruct31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#betconstruct31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#betconstruct31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betconstruct31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betconstruct31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betconstruct31count>=0.10 && $betconstruct31count<=0.20){
                    echo "<style>#betconstruct31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betconstruct31count>0.20){
                    echo "<style>#betconstruct31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expbetconstruct">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofbetconstructprov=($betconstruct1count + $betconstruct2count + $betconstruct3count + $betconstruct4count + $betconstruct5count + $betconstruct6count + $betconstruct7count + $betconstruct8count + $betconstruct9count + $betconstruct10count + $betconstruct11count + $betconstruct12count + $betconstruct13count + $betconstruct14count + $betconstruct15count +  $betconstruct16count + $betconstruct17count + $betconstruct18count + $betconstruct19count + $betconstruct20count + $betconstruct21count + $betconstruct22count + $betconstruct23count + $betconstruct24count + $betconstruct25count + $betconstruct26count+ $betconstruct27count+ $betconstruct28count+ $betconstruct29count+ $betconstruct30count + $betconstruct31count);
            $sofbetconstructe = ($sumofbetconstructprov);
            if($sofbetconstructe == 0){
                $sofbetconstructe = 1;
            }


            $percofbetconstructprov = round(($sumofbetconstructprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofbetconstructprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofbetconstructprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/betconstructjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/betconstructfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/betconstructmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/betconstructapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/betconstructmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/betconstructjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/betconstructjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/betconstructaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/betconstructsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/betconstructoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/betconstructnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/betconstructdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/betradar"> 
                <h1 class="productHeader">Betradar - Issues in HH/MM: {{$sumbetradarnow}}</h1>
            </a> 
            <div class="graph">
            <a href="/betradar1" class="betradar1a">
            <button class="box" id="betradar1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $betradar1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#betradar1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#betradar1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar1count>=0.10 && $betradar1count<=0.20){
                    echo "<style>#betradar1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar1count>0.20){
                    echo "<style>#betradar1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar2" class="betradar2a">
            <button class="box" id="betradar2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $betradar2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#betradar2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#betradar2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar2count>=0.10 && $betradar2count<=0.20){
                    echo "<style>#betradar2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar2count>0.20){
                    echo "<style>#betradar2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar3" class="betradar3a">
            <button class="box" id="betradar3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $betradar3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#betradar3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#betradar3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar3count>=0.10 && $betradar3count<=0.20){
                    echo "<style>#betradar3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar3count>0.20){
                    echo "<style>#betradar3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar4" class="betradar4a">
            <button class="box" id="betradar4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $betradar4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#betradar4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#betradar4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar4count>=0.10 && $betradar4count<=0.20){
                    echo "<style>#betradar4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar4count>0.20){
                    echo "<style>#betradar4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar5" class="betradar5a">
            <button class="box" id="betradar5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $betradar5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#betradar5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#betradar5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar5count>=0.10 && $betradar5count<=0.20){
                    echo "<style>#betradar5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar5count>0.20){
                    echo "<style>#betradar5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar6" class="betradar6a">
            <button class="box" id="betradar6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $betradar6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#betradar6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#betradar6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar6count>=0.10 && $betradar6count<=0.20){
                    echo "<style>#betradar6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar6count>0.20){
                    echo "<style>#betradar6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar7" class="betradar7a">
            <button class="box" id="betradar7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $betradar7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#betradar7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#betradar7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar7count>=0.10 && $betradar7count<=0.20){
                    echo "<style>#betradar7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar7count>0.20){
                    echo "<style>#betradar7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar8" class="betradar8a">
            <button class="box" id="betradar8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $betradar8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#betradar8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#betradar8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar8count>=0.10 && $betradar8count<=0.20){
                    echo "<style>#betradar8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar8count>0.20){
                    echo "<style>#betradar8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar9" class="betradar9a">
            <button class="box" id="betradar9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $betradar9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#betradar9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#betradar9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar9count>=0.10 && $betradar9count<=0.20){
                    echo "<style>#betradar9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar9count>0.20){
                    echo "<style>#betradar9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar10" class="betradar10a">
            <button class="box" id="betradar10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $betradar10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#betradar10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#betradar10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar10count>=0.10 && $betradar10count<=0.20){
                    echo "<style>#betradar10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar10count>0.20){
                    echo "<style>#betradar10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar11" class="betradar11a">
            <button class="box" id="betradar11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $betradar11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#betradar11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#betradar11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar11count>=0.10 && $betradar11count<=0.20){
                    echo "<style>#betradar11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar11count>0.20){
                    echo "<style>#betradar11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar12" class="betradar12a">
            <button class="box" id="betradar12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $betradar12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#betradar12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#betradar12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar12count>=0.10 && $betradar12count<=0.20){
                    echo "<style>#betradar12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar12count>0.20){
                    echo "<style>#betradar12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar13" class="betradar13a">
            <button class="box" id="betradar13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $betradar13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#betradar13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#betradar13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar13count>=0.10 && $betradar13count<=0.20){
                    echo "<style>#betradar13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar13count>0.20){
                    echo "<style>#betradar13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar14" class="betradar14a">
            <button class="box" id="betradar14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $betradar14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#betradar14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#betradar14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar14count>=0.10 && $betradar14count<=0.20){
                    echo "<style>#betradar14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar14count>0.20){
                    echo "<style>#betradar14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar15" class="betradar15a">
            <button class="box" id="betradar15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $betradar15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#betradar15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#betradar15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar15count>=0.10 && $betradar15count<=0.20){
                    echo "<style>#betradar15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar15count>0.20){
                    echo "<style>#betradar15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar16" class="betradar16a">
            <button class="box" id="betradar16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $betradar16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#betradar16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#betradar16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar16count>=0.10 && $betradar16count<=0.20){
                    echo "<style>#betradar16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar16count>0.20){
                    echo "<style>#betradar16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar17" class="betradar17a">
            <button class="box" id="betradar17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $betradar17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#betradar17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#betradar17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar17count>=0.10 && $betradar17count<=0.20){
                    echo "<style>#betradar17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar17count>0.20){
                    echo "<style>#betradar17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar18" class="betradar18a">
            <button class="box" id="betradar18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $betradar18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#betradar18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#betradar18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar18count>=0.10 && $betradar18count<=0.20){
                    echo "<style>#betradar18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar18count>0.20){
                    echo "<style>#betradar18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar19" class="betradar19a">
            <button class="box" id="betradar19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $betradar19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#betradar19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#betradar19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar19count>=0.10 && $betradar19count<=0.20){
                    echo "<style>#betradar19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar19count>0.20){
                    echo "<style>#betradar19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar20" class="betradar20a">
            <button class="box" id="betradar20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $betradar20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#betradar20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#betradar20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar20count>=0.10 && $betradar20count<=0.20){
                    echo "<style>#betradar20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar20count>0.20){
                    echo "<style>#betradar20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar21" class="betradar21a">
            <button class="box" id="betradar21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $betradar21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#betradar21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#betradar21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar21count>=0.10 && $betradar21count<=0.20){
                    echo "<style>#betradar21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar21count>0.20){
                    echo "<style>#betradar21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar22" class="betradar22a">
            <button class="box" id="betradar22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $betradar22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#betradar22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#betradar22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar22count>=0.10 && $betradar22count<=0.20){
                    echo "<style>#betradar22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar22count>0.20){
                    echo "<style>#betradar22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar23" class="betradar23a">
            <button class="box" id="betradar23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $betradar23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#betradar23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#betradar23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar23count>=0.10 && $betradar23count<=0.20){
                    echo "<style>#betradar23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar23count>0.20){
                    echo "<style>#betradar23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar24" class="betradar24a">
            <button class="box" id="betradar24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $betradar24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#betradar24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#betradar24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar24count>=0.10 && $betradar24count<=0.20){
                    echo "<style>#betradar24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar24count>0.20){
                    echo "<style>#betradar24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar25" class="betradar25a">
            <button class="box" id="betradar25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $betradar25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#betradar25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#betradar25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar25count>=0.10 && $betradar25count<=0.20){
                    echo "<style>#betradar25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar25count>0.20){
                    echo "<style>#betradar25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar26" class="betradar26a">
            <button class="box" id="betradar26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $betradar26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#betradar26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#betradar26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar26count>=0.10 && $betradar26count<=0.20){
                    echo "<style>#betradar26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar26count>0.20){
                    echo "<style>#betradar26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar27" class="betradar27a">
            <button class="box" id="betradar27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $betradar27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#betradar27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#betradar27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar27count>=0.10 && $betradar27count<=0.20){
                    echo "<style>#betradar27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar27count>0.20){
                    echo "<style>#betradar27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar28" class="betradar28a">
            <button class="box" id="betradar28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $betradar28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#betradar28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#betradar28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar28count>=0.10 && $betradar28count<=0.20){
                    echo "<style>#betradar28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar28count>0.20){
                    echo "<style>#betradar28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar29" class="betradar29a">
            <button class="box" id="betradar29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $betradar29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#betradar29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#betradar29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar29count>=0.10 && $betradar29count<=0.20){
                    echo "<style>#betradar29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar29count>0.20){
                    echo "<style>#betradar29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar30" class="betradar30a">
            <button class="box" id="betradar30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $betradar30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#betradar30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#betradar30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar30count>=0.10 && $betradar30count<=0.20){
                    echo "<style>#betradar30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar30count>0.20){
                    echo "<style>#betradar30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/betradar31" class="betradar31a">
            <button class="box" id="betradar31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $betradar31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#betradar31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#betradar31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .betradar31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#betradar31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($betradar31count>=0.10 && $betradar31count<=0.20){
                    echo "<style>#betradar31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($betradar31count>0.20){
                    echo "<style>#betradar31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expbetradar">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofbetradarprov=($betradar1count + $betradar2count + $betradar3count + $betradar4count + $betradar5count + $betradar6count + $betradar7count + $betradar8count + $betradar9count + $betradar10count + $betradar11count + $betradar12count + $betradar13count + $betradar14count + $betradar15count +  $betradar16count + $betradar17count + $betradar18count + $betradar19count + $betradar20count + $betradar21count + $betradar22count + $betradar23count + $betradar24count + $betradar25count + $betradar26count+ $betradar27count+ $betradar28count+ $betradar29count+ $betradar30count + $betradar31count);
            $sofbetradare = ($sumofbetradarprov);
            if($sofbetradare == 0){
                $sofbetradare = 1;
            }


            $percofbetradarprov = round(($sumofbetradarprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofbetradarprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofbetradarprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
                        <br>
                <a href="/betradarjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/betradarfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/betradarmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/betradarapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/betradarmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/betradarjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/betradarjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/betradaraug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/betradarsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/betradaroct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/betradarnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/betradardec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/goldenrace"> 
                <h1 class="productHeader">Golden Race - Issues in HH/MM: {{$sumgoldenracenow}}</h1>
            </a>
            <div class="graph">
            <a href="/goldenrace1" class="goldenrace1a">
            <button class="box" id="goldenrace1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $goldenrace1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#goldenrace1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#goldenrace1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace1count>=0.10 && $goldenrace1count<=0.20){
                    echo "<style>#goldenrace1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace1count>0.20){
                    echo "<style>#goldenrace1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace2" class="goldenrace2a">
            <button class="box" id="goldenrace2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $goldenrace2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#goldenrace2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#goldenrace2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace2count>=0.10 && $goldenrace2count<=0.20){
                    echo "<style>#goldenrace2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace2count>0.20){
                    echo "<style>#goldenrace2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace3" class="goldenrace3a">
            <button class="box" id="goldenrace3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $goldenrace3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#goldenrace3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#goldenrace3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace3count>=0.10 && $goldenrace3count<=0.20){
                    echo "<style>#goldenrace3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace3count>0.20){
                    echo "<style>#goldenrace3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace4" class="goldenrace4a">
            <button class="box" id="goldenrace4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $goldenrace4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#goldenrace4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#goldenrace4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace4count>=0.10 && $goldenrace4count<=0.20){
                    echo "<style>#goldenrace4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace4count>0.20){
                    echo "<style>#goldenrace4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace5" class="goldenrace5a">
            <button class="box" id="goldenrace5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $goldenrace5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#goldenrace5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#goldenrace5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace5count>=0.10 && $goldenrace5count<=0.20){
                    echo "<style>#goldenrace5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace5count>0.20){
                    echo "<style>#goldenrace5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace6" class="goldenrace6a">
            <button class="box" id="goldenrace6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $goldenrace6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#goldenrace6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#goldenrace6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace6count>=0.10 && $goldenrace6count<=0.20){
                    echo "<style>#goldenrace6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace6count>0.20){
                    echo "<style>#goldenrace6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace7" class="goldenrace7a">
            <button class="box" id="goldenrace7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $goldenrace7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#goldenrace7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#goldenrace7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace7count>=0.10 && $goldenrace7count<=0.20){
                    echo "<style>#goldenrace7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace7count>0.20){
                    echo "<style>#goldenrace7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace8" class="goldenrace8a">
            <button class="box" id="goldenrace8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $goldenrace8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#goldenrace8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#goldenrace8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace8count>=0.10 && $goldenrace8count<=0.20){
                    echo "<style>#goldenrace8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace8count>0.20){
                    echo "<style>#goldenrace8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace9" class="goldenrace9a">
            <button class="box" id="goldenrace9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $goldenrace9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#goldenrace9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#goldenrace9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace9count>=0.10 && $goldenrace9count<=0.20){
                    echo "<style>#goldenrace9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace9count>0.20){
                    echo "<style>#goldenrace9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace10" class="goldenrace10a">
            <button class="box" id="goldenrace10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $goldenrace10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#goldenrace10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#goldenrace10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace10count>=0.10 && $goldenrace10count<=0.20){
                    echo "<style>#goldenrace10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace10count>0.20){
                    echo "<style>#goldenrace10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace11" class="goldenrace11a">
            <button class="box" id="goldenrace11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $goldenrace11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#goldenrace11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#goldenrace11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace11count>=0.10 && $goldenrace11count<=0.20){
                    echo "<style>#goldenrace11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace11count>0.20){
                    echo "<style>#goldenrace11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace12" class="goldenrace12a">
            <button class="box" id="goldenrace12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $goldenrace12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#goldenrace12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#goldenrace12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace12count>=0.10 && $goldenrace12count<=0.20){
                    echo "<style>#goldenrace12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace12count>0.20){
                    echo "<style>#goldenrace12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace13" class="goldenrace13a">
            <button class="box" id="goldenrace13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $goldenrace13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#goldenrace13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#goldenrace13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace13count>=0.10 && $goldenrace13count<=0.20){
                    echo "<style>#goldenrace13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace13count>0.20){
                    echo "<style>#goldenrace13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace14" class="goldenrace14a">
            <button class="box" id="goldenrace14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $goldenrace14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#goldenrace14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#goldenrace14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace14count>=0.10 && $goldenrace14count<=0.20){
                    echo "<style>#goldenrace14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace14count>0.20){
                    echo "<style>#goldenrace14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace15" class="goldenrace15a">
            <button class="box" id="goldenrace15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $goldenrace15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#goldenrace15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#goldenrace15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace15count>=0.10 && $goldenrace15count<=0.20){
                    echo "<style>#goldenrace15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace15count>0.20){
                    echo "<style>#goldenrace15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace16" class="goldenrace16a">
            <button class="box" id="goldenrace16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $goldenrace16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#goldenrace16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#goldenrace16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace16count>=0.10 && $goldenrace16count<=0.20){
                    echo "<style>#goldenrace16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace16count>0.20){
                    echo "<style>#goldenrace16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace17" class="goldenrace17a">
            <button class="box" id="goldenrace17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $goldenrace17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#goldenrace17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#goldenrace17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace17count>=0.10 && $goldenrace17count<=0.20){
                    echo "<style>#goldenrace17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace17count>0.20){
                    echo "<style>#goldenrace17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace18" class="goldenrace18a">
            <button class="box" id="goldenrace18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $goldenrace18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#goldenrace18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#goldenrace18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace18count>=0.10 && $goldenrace18count<=0.20){
                    echo "<style>#goldenrace18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace18count>0.20){
                    echo "<style>#goldenrace18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace19" class="goldenrace19a">
            <button class="box" id="goldenrace19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $goldenrace19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#goldenrace19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#goldenrace19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace19count>=0.10 && $goldenrace19count<=0.20){
                    echo "<style>#goldenrace19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace19count>0.20){
                    echo "<style>#goldenrace19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace20" class="goldenrace20a">
            <button class="box" id="goldenrace20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $goldenrace20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#goldenrace20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#goldenrace20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace20count>=0.10 && $goldenrace20count<=0.20){
                    echo "<style>#goldenrace20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace20count>0.20){
                    echo "<style>#goldenrace20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace21" class="goldenrace21a">
            <button class="box" id="goldenrace21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $goldenrace21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#goldenrace21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#goldenrace21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace21count>=0.10 && $goldenrace21count<=0.20){
                    echo "<style>#goldenrace21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace21count>0.20){
                    echo "<style>#goldenrace21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace22" class="goldenrace22a">
            <button class="box" id="goldenrace22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $goldenrace22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#goldenrace22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#goldenrace22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace22count>=0.10 && $goldenrace22count<=0.20){
                    echo "<style>#goldenrace22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace22count>0.20){
                    echo "<style>#goldenrace22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace23" class="goldenrace23a">
            <button class="box" id="goldenrace23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $goldenrace23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#goldenrace23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#goldenrace23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace23count>=0.10 && $goldenrace23count<=0.20){
                    echo "<style>#goldenrace23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace23count>0.20){
                    echo "<style>#goldenrace23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace24" class="goldenrace24a">
            <button class="box" id="goldenrace24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $goldenrace24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#goldenrace24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#goldenrace24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace24count>=0.10 && $goldenrace24count<=0.20){
                    echo "<style>#goldenrace24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace24count>0.20){
                    echo "<style>#goldenrace24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace25" class="goldenrace25a">
            <button class="box" id="goldenrace25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $goldenrace25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#goldenrace25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#goldenrace25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace25count>=0.10 && $goldenrace25count<=0.20){
                    echo "<style>#goldenrace25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace25count>0.20){
                    echo "<style>#goldenrace25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace26" class="goldenrace26a">
            <button class="box" id="goldenrace26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $goldenrace26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#goldenrace26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#goldenrace26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace26count>=0.10 && $goldenrace26count<=0.20){
                    echo "<style>#goldenrace26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace26count>0.20){
                    echo "<style>#goldenrace26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace27" class="goldenrace27a">
            <button class="box" id="goldenrace27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $goldenrace27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#goldenrace27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#goldenrace27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace27count>=0.10 && $goldenrace27count<=0.20){
                    echo "<style>#goldenrace27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace27count>0.20){
                    echo "<style>#goldenrace27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace28" class="goldenrace28a">
            <button class="box" id="goldenrace28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $goldenrace28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#goldenrace28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#goldenrace28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace28count>=0.10 && $goldenrace28count<=0.20){
                    echo "<style>#goldenrace28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace28count>0.20){
                    echo "<style>#goldenrace28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace29" class="goldenrace29a">
            <button class="box" id="goldenrace29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $goldenrace29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#goldenrace29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#goldenrace29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace29count>=0.10 && $goldenrace29count<=0.20){
                    echo "<style>#goldenrace29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace29count>0.20){
                    echo "<style>#goldenrace29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace30" class="goldenrace30a">
            <button class="box" id="goldenrace30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $goldenrace30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#goldenrace30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#goldenrace30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace30count>=0.10 && $goldenrace30count<=0.20){
                    echo "<style>#goldenrace30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace30count>0.20){
                    echo "<style>#goldenrace30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/goldenrace31" class="goldenrace31a">
            <button class="box" id="goldenrace31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $goldenrace31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#goldenrace31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#goldenrace31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .goldenrace31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#goldenrace31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($goldenrace31count>=0.10 && $goldenrace31count<=0.20){
                    echo "<style>#goldenrace31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($goldenrace31count>0.20){
                    echo "<style>#goldenrace31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expgoldenrace">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofgoldenraceprov=($goldenrace1count + $goldenrace2count + $goldenrace3count + $goldenrace4count + $goldenrace5count + $goldenrace6count + $goldenrace7count + $goldenrace8count + $goldenrace9count + $goldenrace10count + $goldenrace11count + $goldenrace12count + $goldenrace13count + $goldenrace14count + $goldenrace15count +  $goldenrace16count + $goldenrace17count + $goldenrace18count + $goldenrace19count + $goldenrace20count + $goldenrace21count + $goldenrace22count + $goldenrace23count + $goldenrace24count + $goldenrace25count + $goldenrace26count+ $goldenrace27count+ $goldenrace28count+ $goldenrace29count+ $goldenrace30count + $goldenrace31count);
            $sofgoldenracee = ($sumofgoldenraceprov);
            if($sofgoldenracee == 0){
                $sofgoldenracee = 1;
            }


            $percofgoldenraceprov = round(($sumofgoldenraceprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofgoldenraceprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofgoldenraceprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
                        <br>
                <a href="/goldenracejan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/goldenracefeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/goldenracemar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/goldenraceapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/goldenracemay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/goldenracejun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/goldenracejul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/goldenraceaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/goldenracesep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/goldenraceoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/goldenracenov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/goldenracedec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/evolutiongaming"> 
                <h1 class="productHeader">Evolution Gaming - Issues in HH/MM: {{$sumevolutiongamingnow}}</h1>
            </a>
            <div class="graph">
            <a href="/evolutiongaming1" class="evolutiongaming1a">
            <button class="box" id="evolutiongaming1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $evolutiongaming1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#evolutiongaming1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#evolutiongaming1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming1count>=0.10 && $evolutiongaming1count<=0.20){
                    echo "<style>#evolutiongaming1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming1count>0.20){
                    echo "<style>#evolutiongaming1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming2" class="evolutiongaming2a">
            <button class="box" id="evolutiongaming2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $evolutiongaming2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#evolutiongaming2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#evolutiongaming2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming2count>=0.10 && $evolutiongaming2count<=0.20){
                    echo "<style>#evolutiongaming2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming2count>0.20){
                    echo "<style>#evolutiongaming2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming3" class="evolutiongaming3a">
            <button class="box" id="evolutiongaming3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $evolutiongaming3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#evolutiongaming3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#evolutiongaming3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming3count>=0.10 && $evolutiongaming3count<=0.20){
                    echo "<style>#evolutiongaming3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming3count>0.20){
                    echo "<style>#evolutiongaming3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming4" class="evolutiongaming4a">
            <button class="box" id="evolutiongaming4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $evolutiongaming4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#evolutiongaming4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#evolutiongaming4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming4count>=0.10 && $evolutiongaming4count<=0.20){
                    echo "<style>#evolutiongaming4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming4count>0.20){
                    echo "<style>#evolutiongaming4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming5" class="evolutiongaming5a">
            <button class="box" id="evolutiongaming5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $evolutiongaming5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#evolutiongaming5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#evolutiongaming5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming5count>=0.10 && $evolutiongaming5count<=0.20){
                    echo "<style>#evolutiongaming5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming5count>0.20){
                    echo "<style>#evolutiongaming5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming6" class="evolutiongaming6a">
            <button class="box" id="evolutiongaming6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $evolutiongaming6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#evolutiongaming6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#evolutiongaming6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming6count>=0.10 && $evolutiongaming6count<=0.20){
                    echo "<style>#evolutiongaming6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming6count>0.20){
                    echo "<style>#evolutiongaming6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming7" class="evolutiongaming7a">
            <button class="box" id="evolutiongaming7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $evolutiongaming7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#evolutiongaming7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#evolutiongaming7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming7count>=0.10 && $evolutiongaming7count<=0.20){
                    echo "<style>#evolutiongaming7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming7count>0.20){
                    echo "<style>#evolutiongaming7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming8" class="evolutiongaming8a">
            <button class="box" id="evolutiongaming8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $evolutiongaming8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#evolutiongaming8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#evolutiongaming8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming8count>=0.10 && $evolutiongaming8count<=0.20){
                    echo "<style>#evolutiongaming8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming8count>0.20){
                    echo "<style>#evolutiongaming8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming9" class="evolutiongaming9a">
            <button class="box" id="evolutiongaming9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $evolutiongaming9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#evolutiongaming9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#evolutiongaming9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming9count>=0.10 && $evolutiongaming9count<=0.20){
                    echo "<style>#evolutiongaming9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming9count>0.20){
                    echo "<style>#evolutiongaming9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming10" class="evolutiongaming10a">
            <button class="box" id="evolutiongaming10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $evolutiongaming10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#evolutiongaming10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#evolutiongaming10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming10count>=0.10 && $evolutiongaming10count<=0.20){
                    echo "<style>#evolutiongaming10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming10count>0.20){
                    echo "<style>#evolutiongaming10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming11" class="evolutiongaming11a">
            <button class="box" id="evolutiongaming11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $evolutiongaming11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#evolutiongaming11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#evolutiongaming11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming11count>=0.10 && $evolutiongaming11count<=0.20){
                    echo "<style>#evolutiongaming11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming11count>0.20){
                    echo "<style>#evolutiongaming11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming12" class="evolutiongaming12a">
            <button class="box" id="evolutiongaming12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $evolutiongaming12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#evolutiongaming12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#evolutiongaming12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming12count>=0.10 && $evolutiongaming12count<=0.20){
                    echo "<style>#evolutiongaming12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming12count>0.20){
                    echo "<style>#evolutiongaming12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming13" class="evolutiongaming13a">
            <button class="box" id="evolutiongaming13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $evolutiongaming13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#evolutiongaming13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#evolutiongaming13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming13count>=0.10 && $evolutiongaming13count<=0.20){
                    echo "<style>#evolutiongaming13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming13count>0.20){
                    echo "<style>#evolutiongaming13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming14" class="evolutiongaming14a">
            <button class="box" id="evolutiongaming14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $evolutiongaming14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#evolutiongaming14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#evolutiongaming14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming14count>=0.10 && $evolutiongaming14count<=0.20){
                    echo "<style>#evolutiongaming14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming14count>0.20){
                    echo "<style>#evolutiongaming14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming15" class="evolutiongaming15a">
            <button class="box" id="evolutiongaming15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $evolutiongaming15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#evolutiongaming15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#evolutiongaming15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming15count>=0.10 && $evolutiongaming15count<=0.20){
                    echo "<style>#evolutiongaming15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming15count>0.20){
                    echo "<style>#evolutiongaming15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming16" class="evolutiongaming16a">
            <button class="box" id="evolutiongaming16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $evolutiongaming16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#evolutiongaming16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#evolutiongaming16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming16count>=0.10 && $evolutiongaming16count<=0.20){
                    echo "<style>#evolutiongaming16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming16count>0.20){
                    echo "<style>#evolutiongaming16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming17" class="evolutiongaming17a">
            <button class="box" id="evolutiongaming17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $evolutiongaming17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#evolutiongaming17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#evolutiongaming17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming17count>=0.10 && $evolutiongaming17count<=0.20){
                    echo "<style>#evolutiongaming17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming17count>0.20){
                    echo "<style>#evolutiongaming17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming18" class="evolutiongaming18a">
            <button class="box" id="evolutiongaming18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $evolutiongaming18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#evolutiongaming18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#evolutiongaming18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming18count>=0.10 && $evolutiongaming18count<=0.20){
                    echo "<style>#evolutiongaming18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming18count>0.20){
                    echo "<style>#evolutiongaming18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming19" class="evolutiongaming19a">
            <button class="box" id="evolutiongaming19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $evolutiongaming19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#evolutiongaming19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#evolutiongaming19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming19count>=0.10 && $evolutiongaming19count<=0.20){
                    echo "<style>#evolutiongaming19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming19count>0.20){
                    echo "<style>#evolutiongaming19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming20" class="evolutiongaming20a">
            <button class="box" id="evolutiongaming20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $evolutiongaming20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#evolutiongaming20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#evolutiongaming20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming20count>=0.10 && $evolutiongaming20count<=0.20){
                    echo "<style>#evolutiongaming20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming20count>0.20){
                    echo "<style>#evolutiongaming20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming21" class="evolutiongaming21a">
            <button class="box" id="evolutiongaming21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $evolutiongaming21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#evolutiongaming21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#evolutiongaming21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming21count>=0.10 && $evolutiongaming21count<=0.20){
                    echo "<style>#evolutiongaming21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming21count>0.20){
                    echo "<style>#evolutiongaming21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming22" class="evolutiongaming22a">
            <button class="box" id="evolutiongaming22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $evolutiongaming22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#evolutiongaming22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#evolutiongaming22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming22count>=0.10 && $evolutiongaming22count<=0.20){
                    echo "<style>#evolutiongaming22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming22count>0.20){
                    echo "<style>#evolutiongaming22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming23" class="evolutiongaming23a">
            <button class="box" id="evolutiongaming23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $evolutiongaming23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#evolutiongaming23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#evolutiongaming23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming23count>=0.10 && $evolutiongaming23count<=0.20){
                    echo "<style>#evolutiongaming23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming23count>0.20){
                    echo "<style>#evolutiongaming23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming24" class="evolutiongaming24a">
            <button class="box" id="evolutiongaming24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $evolutiongaming24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#evolutiongaming24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#evolutiongaming24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming24count>=0.10 && $evolutiongaming24count<=0.20){
                    echo "<style>#evolutiongaming24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming24count>0.20){
                    echo "<style>#evolutiongaming24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming25" class="evolutiongaming25a">
            <button class="box" id="evolutiongaming25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $evolutiongaming25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#evolutiongaming25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#evolutiongaming25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming25count>=0.10 && $evolutiongaming25count<=0.20){
                    echo "<style>#evolutiongaming25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming25count>0.20){
                    echo "<style>#evolutiongaming25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming26" class="evolutiongaming26a">
            <button class="box" id="evolutiongaming26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $evolutiongaming26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#evolutiongaming26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#evolutiongaming26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming26count>=0.10 && $evolutiongaming26count<=0.20){
                    echo "<style>#evolutiongaming26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming26count>0.20){
                    echo "<style>#evolutiongaming26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming27" class="evolutiongaming27a">
            <button class="box" id="evolutiongaming27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $evolutiongaming27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#evolutiongaming27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#evolutiongaming27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming27count>=0.10 && $evolutiongaming27count<=0.20){
                    echo "<style>#evolutiongaming27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming27count>0.20){
                    echo "<style>#evolutiongaming27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming28" class="evolutiongaming28a">
            <button class="box" id="evolutiongaming28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $evolutiongaming28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#evolutiongaming28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#evolutiongaming28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming28count>=0.10 && $evolutiongaming28count<=0.20){
                    echo "<style>#evolutiongaming28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming28count>0.20){
                    echo "<style>#evolutiongaming28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming29" class="evolutiongaming29a">
            <button class="box" id="evolutiongaming29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $evolutiongaming29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#evolutiongaming29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#evolutiongaming29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming29count>=0.10 && $evolutiongaming29count<=0.20){
                    echo "<style>#evolutiongaming29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming29count>0.20){
                    echo "<style>#evolutiongaming29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming30" class="evolutiongaming30a">
            <button class="box" id="evolutiongaming30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $evolutiongaming30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#evolutiongaming30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#evolutiongaming30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming30count>=0.10 && $evolutiongaming30count<=0.20){
                    echo "<style>#evolutiongaming30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming30count>0.20){
                    echo "<style>#evolutiongaming30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/evolutiongaming31" class="evolutiongaming31a">
            <button class="box" id="evolutiongaming31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $evolutiongaming31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#evolutiongaming31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#evolutiongaming31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .evolutiongaming31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#evolutiongaming31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($evolutiongaming31count>=0.10 && $evolutiongaming31count<=0.20){
                    echo "<style>#evolutiongaming31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($evolutiongaming31count>0.20){
                    echo "<style>#evolutiongaming31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expevolutiongaming">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofevolutiongamingprov=($evolutiongaming1count + $evolutiongaming2count + $evolutiongaming3count + $evolutiongaming4count + $evolutiongaming5count + $evolutiongaming6count + $evolutiongaming7count + $evolutiongaming8count + $evolutiongaming9count + $evolutiongaming10count + $evolutiongaming11count + $evolutiongaming12count + $evolutiongaming13count + $evolutiongaming14count + $evolutiongaming15count +  $evolutiongaming16count + $evolutiongaming17count + $evolutiongaming18count + $evolutiongaming19count + $evolutiongaming20count + $evolutiongaming21count + $evolutiongaming22count + $evolutiongaming23count + $evolutiongaming24count + $evolutiongaming25count + $evolutiongaming26count+ $evolutiongaming27count+ $evolutiongaming28count+ $evolutiongaming29count+ $evolutiongaming30count + $evolutiongaming31count);
            $sofevolutiongaminge = ($sumofevolutiongamingprov);
            if($sofevolutiongaminge == 0){
                $sofevolutiongaminge = 1;
            }


            $percofevolutiongamingprov = round(($sumofevolutiongamingprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofevolutiongamingprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofevolutiongamingprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
                        <br>
                <a href="/evolutiongamingjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/evolutiongamingfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/evolutiongamingdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/lambda"> 
                <h1 class="productHeader">Lambda - Issues in HH/MM: {{$sumlambdanow}}</h1>
            </a>
            <div class="graph">
            <a href="/lambda1" class="lambda1a">
            <button class="box" id="lambda1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $lambda1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#lambda1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#lambda1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda1count>=0.10 && $lambda1count<=0.20){
                    echo "<style>#lambda1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda1count>0.20){
                    echo "<style>#lambda1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda2" class="lambda2a">
            <button class="box" id="lambda2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $lambda2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#lambda2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#lambda2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda2count>=0.10 && $lambda2count<=0.20){
                    echo "<style>#lambda2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda2count>0.20){
                    echo "<style>#lambda2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda3" class="lambda3a">
            <button class="box" id="lambda3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $lambda3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#lambda3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#lambda3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda3count>=0.10 && $lambda3count<=0.20){
                    echo "<style>#lambda3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda3count>0.20){
                    echo "<style>#lambda3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda4" class="lambda4a">
            <button class="box" id="lambda4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $lambda4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#lambda4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#lambda4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda4count>=0.10 && $lambda4count<=0.20){
                    echo "<style>#lambda4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda4count>0.20){
                    echo "<style>#lambda4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda5" class="lambda5a">
            <button class="box" id="lambda5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $lambda5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#lambda5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#lambda5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda5count>=0.10 && $lambda5count<=0.20){
                    echo "<style>#lambda5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda5count>0.20){
                    echo "<style>#lambda5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda6" class="lambda6a">
            <button class="box" id="lambda6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $lambda6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#lambda6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#lambda6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda6count>=0.10 && $lambda6count<=0.20){
                    echo "<style>#lambda6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda6count>0.20){
                    echo "<style>#lambda6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda7" class="lambda7a">
            <button class="box" id="lambda7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $lambda7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#lambda7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#lambda7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda7count>=0.10 && $lambda7count<=0.20){
                    echo "<style>#lambda7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda7count>0.20){
                    echo "<style>#lambda7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda8" class="lambda8a">
            <button class="box" id="lambda8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $lambda8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#lambda8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#lambda8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda8count>=0.10 && $lambda8count<=0.20){
                    echo "<style>#lambda8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda8count>0.20){
                    echo "<style>#lambda8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda9" class="lambda9a">
            <button class="box" id="lambda9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $lambda9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#lambda9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#lambda9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda9count>=0.10 && $lambda9count<=0.20){
                    echo "<style>#lambda9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda9count>0.20){
                    echo "<style>#lambda9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda10" class="lambda10a">
            <button class="box" id="lambda10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $lambda10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#lambda10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#lambda10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda10count>=0.10 && $lambda10count<=0.20){
                    echo "<style>#lambda10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda10count>0.20){
                    echo "<style>#lambda10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda11" class="lambda11a">
            <button class="box" id="lambda11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $lambda11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#lambda11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#lambda11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda11count>=0.10 && $lambda11count<=0.20){
                    echo "<style>#lambda11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda11count>0.20){
                    echo "<style>#lambda11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda12" class="lambda12a">
            <button class="box" id="lambda12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $lambda12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#lambda12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#lambda12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda12count>=0.10 && $lambda12count<=0.20){
                    echo "<style>#lambda12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda12count>0.20){
                    echo "<style>#lambda12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda13" class="lambda13a">
            <button class="box" id="lambda13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $lambda13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#lambda13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#lambda13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda13count>=0.10 && $lambda13count<=0.20){
                    echo "<style>#lambda13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda13count>0.20){
                    echo "<style>#lambda13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda14" class="lambda14a">
            <button class="box" id="lambda14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $lambda14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#lambda14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#lambda14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda14count>=0.10 && $lambda14count<=0.20){
                    echo "<style>#lambda14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda14count>0.20){
                    echo "<style>#lambda14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda15" class="lambda15a">
            <button class="box" id="lambda15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $lambda15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#lambda15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#lambda15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda15count>=0.10 && $lambda15count<=0.20){
                    echo "<style>#lambda15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda15count>0.20){
                    echo "<style>#lambda15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda16" class="lambda16a">
            <button class="box" id="lambda16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $lambda16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#lambda16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#lambda16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda16count>=0.10 && $lambda16count<=0.20){
                    echo "<style>#lambda16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda16count>0.20){
                    echo "<style>#lambda16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda17" class="lambda17a">
            <button class="box" id="lambda17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $lambda17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#lambda17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#lambda17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda17count>=0.10 && $lambda17count<=0.20){
                    echo "<style>#lambda17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda17count>0.20){
                    echo "<style>#lambda17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda18" class="lambda18a">
            <button class="box" id="lambda18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $lambda18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#lambda18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#lambda18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda18count>=0.10 && $lambda18count<=0.20){
                    echo "<style>#lambda18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda18count>0.20){
                    echo "<style>#lambda18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda19" class="lambda19a">
            <button class="box" id="lambda19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $lambda19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#lambda19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#lambda19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda19count>=0.10 && $lambda19count<=0.20){
                    echo "<style>#lambda19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda19count>0.20){
                    echo "<style>#lambda19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda20" class="lambda20a">
            <button class="box" id="lambda20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $lambda20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#lambda20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#lambda20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda20count>=0.10 && $lambda20count<=0.20){
                    echo "<style>#lambda20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda20count>0.20){
                    echo "<style>#lambda20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda21" class="lambda21a">
            <button class="box" id="lambda21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $lambda21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#lambda21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#lambda21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda21count>=0.10 && $lambda21count<=0.20){
                    echo "<style>#lambda21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda21count>0.20){
                    echo "<style>#lambda21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda22" class="lambda22a">
            <button class="box" id="lambda22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $lambda22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#lambda22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#lambda22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda22count>=0.10 && $lambda22count<=0.20){
                    echo "<style>#lambda22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda22count>0.20){
                    echo "<style>#lambda22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda23" class="lambda23a">
            <button class="box" id="lambda23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $lambda23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#lambda23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#lambda23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda23count>=0.10 && $lambda23count<=0.20){
                    echo "<style>#lambda23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda23count>0.20){
                    echo "<style>#lambda23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda24" class="lambda24a">
            <button class="box" id="lambda24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $lambda24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#lambda24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#lambda24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda24count>=0.10 && $lambda24count<=0.20){
                    echo "<style>#lambda24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda24count>0.20){
                    echo "<style>#lambda24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda25" class="lambda25a">
            <button class="box" id="lambda25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $lambda25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#lambda25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#lambda25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda25count>=0.10 && $lambda25count<=0.20){
                    echo "<style>#lambda25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda25count>0.20){
                    echo "<style>#lambda25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda26" class="lambda26a">
            <button class="box" id="lambda26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $lambda26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#lambda26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#lambda26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda26count>=0.10 && $lambda26count<=0.20){
                    echo "<style>#lambda26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda26count>0.20){
                    echo "<style>#lambda26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda27" class="lambda27a">
            <button class="box" id="lambda27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $lambda27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#lambda27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#lambda27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda27count>=0.10 && $lambda27count<=0.20){
                    echo "<style>#lambda27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda27count>0.20){
                    echo "<style>#lambda27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda28" class="lambda28a">
            <button class="box" id="lambda28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $lambda28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#lambda28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#lambda28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda28count>=0.10 && $lambda28count<=0.20){
                    echo "<style>#lambda28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda28count>0.20){
                    echo "<style>#lambda28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda29" class="lambda29a">
            <button class="box" id="lambda29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $lambda29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#lambda29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#lambda29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda29count>=0.10 && $lambda29count<=0.20){
                    echo "<style>#lambda29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda29count>0.20){
                    echo "<style>#lambda29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda30" class="lambda30a">
            <button class="box" id="lambda30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $lambda30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#lambda30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#lambda30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda30count>=0.10 && $lambda30count<=0.20){
                    echo "<style>#lambda30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda30count>0.20){
                    echo "<style>#lambda30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/lambda31" class="lambda31a">
            <button class="box" id="lambda31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $lambda31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#lambda31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#lambda31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .lambda31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#lambda31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($lambda31count>=0.10 && $lambda31count<=0.20){
                    echo "<style>#lambda31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($lambda31count>0.20){
                    echo "<style>#lambda31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/explambda">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumoflambdaprov=($lambda1count + $lambda2count + $lambda3count + $lambda4count + $lambda5count + $lambda6count + $lambda7count + $lambda8count + $lambda9count + $lambda10count + $lambda11count + $lambda12count + $lambda13count + $lambda14count + $lambda15count +  $lambda16count + $lambda17count + $lambda18count + $lambda19count + $lambda20count + $lambda21count + $lambda22count + $lambda23count + $lambda24count + $lambda25count + $lambda26count+ $lambda27count+ $lambda28count+ $lambda29count+ $lambda30count + $lambda31count);
            $soflambdae = ($sumoflambdaprov);
            if($soflambdae == 0){
                $soflambdae = 1;
            }


            $percoflambdaprov = round(($sumoflambdaprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percoflambdaprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percoflambdaprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
                        <br>
                <a href="/lambdajan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/lambdafeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/lambdamar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/lambdaapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/lambdamay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/lambdajun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/lambdajul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/lambdaaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/lambdasep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/lambdaoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/lambdanov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/lambdadec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/igrosoft"> 
                <h1 class="productHeader">Igrosoft - Issues in HH/MM: {{$sumigrosoftnow}}</h1>
            </a>
            <div class="graph">
            <a href="/igrosoft1" class="igrosoft1a">
            <button class="box" id="igrosoft1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $igrosoft1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#igrosoft1{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-01" > date("Y-M-d")){
                    echo "<style>#igrosoft1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft1count>=0.10 && $igrosoft1count<=0.20){
                    echo "<style>#igrosoft1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft1count>0.20){
                    echo "<style>#igrosoft1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft2" class="igrosoft2a">
            <button class="box" id="igrosoft2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $igrosoft2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#igrosoft2{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-02" > date("Y-M-d")){
                    echo "<style>#igrosoft2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft2count>=0.10 && $igrosoft2count<=0.20){
                    echo "<style>#igrosoft2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft2count>0.20){
                    echo "<style>#igrosoft2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft3" class="igrosoft3a">
            <button class="box" id="igrosoft3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $igrosoft3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#igrosoft3{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-03" > date("Y-M-d")){
                    echo "<style>#igrosoft3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft3count>=0.10 && $igrosoft3count<=0.20){
                    echo "<style>#igrosoft3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft3count>0.20){
                    echo "<style>#igrosoft3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft4" class="igrosoft4a">
            <button class="box" id="igrosoft4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $igrosoft4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#igrosoft4{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-04" > date("Y-M-d")){
                    echo "<style>#igrosoft4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft4count>=0.10 && $igrosoft4count<=0.20){
                    echo "<style>#igrosoft4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft4count>0.20){
                    echo "<style>#igrosoft4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft5" class="igrosoft5a">
            <button class="box" id="igrosoft5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $igrosoft5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#igrosoft5{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-05" > date("Y-M-d")){
                    echo "<style>#igrosoft5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft5count>=0.10 && $igrosoft5count<=0.20){
                    echo "<style>#igrosoft5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft5count>0.20){
                    echo "<style>#igrosoft5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft6" class="igrosoft6a">
            <button class="box" id="igrosoft6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $igrosoft6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#igrosoft6{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-06" > date("Y-M-d")){
                    echo "<style>#igrosoft6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft6count>=0.10 && $igrosoft6count<=0.20){
                    echo "<style>#igrosoft6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft6count>0.20){
                    echo "<style>#igrosoft6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft7" class="igrosoft7a">
            <button class="box" id="igrosoft7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $igrosoft7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#igrosoft7{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-07" > date("Y-M-d")){
                    echo "<style>#igrosoft7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft7count>=0.10 && $igrosoft7count<=0.20){
                    echo "<style>#igrosoft7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft7count>0.20){
                    echo "<style>#igrosoft7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft8" class="igrosoft8a">
            <button class="box" id="igrosoft8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $igrosoft8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#igrosoft8{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-08" > date("Y-M-d")){
                    echo "<style>#igrosoft8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft8count>=0.10 && $igrosoft8count<=0.20){
                    echo "<style>#igrosoft8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft8count>0.20){
                    echo "<style>#igrosoft8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft9" class="igrosoft9a">
            <button class="box" id="igrosoft9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $igrosoft9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#igrosoft9{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-09" > date("Y-M-d")){
                    echo "<style>#igrosoft9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft9count>=0.10 && $igrosoft9count<=0.20){
                    echo "<style>#igrosoft9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft9count>0.20){
                    echo "<style>#igrosoft9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft10" class="igrosoft10a">
            <button class="box" id="igrosoft10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $igrosoft10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#igrosoft10{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-10" > date("Y-M-d")){
                    echo "<style>#igrosoft10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft10count>=0.10 && $igrosoft10count<=0.20){
                    echo "<style>#igrosoft10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft10count>0.20){
                    echo "<style>#igrosoft10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft11" class="igrosoft11a">
            <button class="box" id="igrosoft11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $igrosoft11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#igrosoft11{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-11" > date("Y-M-d")){
                    echo "<style>#igrosoft11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft11count>=0.10 && $igrosoft11count<=0.20){
                    echo "<style>#igrosoft11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft11count>0.20){
                    echo "<style>#igrosoft11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft12" class="igrosoft12a">
            <button class="box" id="igrosoft12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $igrosoft12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#igrosoft12{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-12" > date("Y-M-d")){
                    echo "<style>#igrosoft12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft12count>=0.10 && $igrosoft12count<=0.20){
                    echo "<style>#igrosoft12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft12count>0.20){
                    echo "<style>#igrosoft12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft13" class="igrosoft13a">
            <button class="box" id="igrosoft13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $igrosoft13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#igrosoft13{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-13" > date("Y-M-d")){
                    echo "<style>#igrosoft13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft13count>=0.10 && $igrosoft13count<=0.20){
                    echo "<style>#igrosoft13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft13count>0.20){
                    echo "<style>#igrosoft13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft14" class="igrosoft14a">
            <button class="box" id="igrosoft14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $igrosoft14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#igrosoft14{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-14" > date("Y-M-d")){
                    echo "<style>#igrosoft14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft14count>=0.10 && $igrosoft14count<=0.20){
                    echo "<style>#igrosoft14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft14count>0.20){
                    echo "<style>#igrosoft14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft15" class="igrosoft15a">
            <button class="box" id="igrosoft15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $igrosoft15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#igrosoft15{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-15" > date("Y-M-d")){
                    echo "<style>#igrosoft15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft15count>=0.10 && $igrosoft15count<=0.20){
                    echo "<style>#igrosoft15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft15count>0.20){
                    echo "<style>#igrosoft15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft16" class="igrosoft16a">
            <button class="box" id="igrosoft16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $igrosoft16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#igrosoft16{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-16" > date("Y-M-d")){
                    echo "<style>#igrosoft16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft16count>=0.10 && $igrosoft16count<=0.20){
                    echo "<style>#igrosoft16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft16count>0.20){
                    echo "<style>#igrosoft16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft17" class="igrosoft17a">
            <button class="box" id="igrosoft17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $igrosoft17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#igrosoft17{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-17" > date("Y-M-d")){
                    echo "<style>#igrosoft17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft17count>=0.10 && $igrosoft17count<=0.20){
                    echo "<style>#igrosoft17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft17count>0.20){
                    echo "<style>#igrosoft17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft18" class="igrosoft18a">
            <button class="box" id="igrosoft18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $igrosoft18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#igrosoft18{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-18" > date("Y-M-d")){
                    echo "<style>#igrosoft18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft18count>=0.10 && $igrosoft18count<=0.20){
                    echo "<style>#igrosoft18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft18count>0.20){
                    echo "<style>#igrosoft18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft19" class="igrosoft19a">
            <button class="box" id="igrosoft19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $igrosoft19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#igrosoft19{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-19" > date("Y-M-d")){
                    echo "<style>#igrosoft19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft19count>=0.10 && $igrosoft19count<=0.20){
                    echo "<style>#igrosoft19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft19count>0.20){
                    echo "<style>#igrosoft19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft20" class="igrosoft20a">
            <button class="box" id="igrosoft20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $igrosoft20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#igrosoft20{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-20" > date("Y-M-d")){
                    echo "<style>#igrosoft20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft20count>=0.10 && $igrosoft20count<=0.20){
                    echo "<style>#igrosoft20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft20count>0.20){
                    echo "<style>#igrosoft20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft21" class="igrosoft21a">
            <button class="box" id="igrosoft21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $igrosoft21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#igrosoft21{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-21" > date("Y-M-d")){
                    echo "<style>#igrosoft21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft21count>=0.10 && $igrosoft21count<=0.20){
                    echo "<style>#igrosoft21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft21count>0.20){
                    echo "<style>#igrosoft21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft22" class="igrosoft22a">
            <button class="box" id="igrosoft22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $igrosoft22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#igrosoft22{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-22" > date("Y-M-d")){
                    echo "<style>#igrosoft22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft22count>=0.10 && $igrosoft22count<=0.20){
                    echo "<style>#igrosoft22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft22count>0.20){
                    echo "<style>#igrosoft22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft23" class="igrosoft23a">
            <button class="box" id="igrosoft23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $igrosoft23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#igrosoft23{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-23" > date("Y-M-d")){
                    echo "<style>#igrosoft23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft23count>=0.10 && $igrosoft23count<=0.20){
                    echo "<style>#igrosoft23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft23count>0.20){
                    echo "<style>#igrosoft23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft24" class="igrosoft24a">
            <button class="box" id="igrosoft24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $igrosoft24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#igrosoft24{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-24" > date("Y-M-d")){
                    echo "<style>#igrosoft24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft24count>=0.10 && $igrosoft24count<=0.20){
                    echo "<style>#igrosoft24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft24count>0.20){
                    echo "<style>#igrosoft24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft25" class="igrosoft25a">
            <button class="box" id="igrosoft25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $igrosoft25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#igrosoft25{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-25" > date("Y-M-d")){
                    echo "<style>#igrosoft25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft25count>=0.10 && $igrosoft25count<=0.20){
                    echo "<style>#igrosoft25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft25count>0.20){
                    echo "<style>#igrosoft25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft26" class="igrosoft26a">
            <button class="box" id="igrosoft26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $igrosoft26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#igrosoft26{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-26" > date("Y-M-d")){
                    echo "<style>#igrosoft26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft26count>=0.10 && $igrosoft26count<=0.20){
                    echo "<style>#igrosoft26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft26count>0.20){
                    echo "<style>#igrosoft26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft27" class="igrosoft27a">
            <button class="box" id="igrosoft27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $igrosoft27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#igrosoft27{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-27" > date("Y-M-d")){
                    echo "<style>#igrosoft27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft27count>=0.10 && $igrosoft27count<=0.20){
                    echo "<style>#igrosoft27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft27count>0.20){
                    echo "<style>#igrosoft27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft28" class="igrosoft28a">
            <button class="box" id="igrosoft28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $igrosoft28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#igrosoft28{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-28" > date("Y-M-d")){
                    echo "<style>#igrosoft28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft28count>=0.10 && $igrosoft28count<=0.20){
                    echo "<style>#igrosoft28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft28count>0.20){
                    echo "<style>#igrosoft28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft29" class="igrosoft29a">
            <button class="box" id="igrosoft29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $igrosoft29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#igrosoft29{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-29" > date("Y-M-d")){
                    echo "<style>#igrosoft29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft29count>=0.10 && $igrosoft29count<=0.20){
                    echo "<style>#igrosoft29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft29count>0.20){
                    echo "<style>#igrosoft29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft30" class="igrosoft30a">
            <button class="box" id="igrosoft30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $igrosoft30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#igrosoft30{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-30" > date("Y-M-d")){
                    echo "<style>#igrosoft30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft30count>=0.10 && $igrosoft30count<=0.20){
                    echo "<style>#igrosoft30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft30count>0.20){
                    echo "<style>#igrosoft30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/igrosoft31" class="igrosoft31a">
            <button class="box" id="igrosoft31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $igrosoft31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#igrosoft31{
                                    background-color: darkgreen;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";
                }
                else if ("$lst-31" > date("Y-M-d")){
                    echo "<style>#igrosoft31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .igrosoft31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#igrosoft31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($igrosoft31count>=0.10 && $igrosoft31count<=0.20){
                    echo "<style>#igrosoft31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($igrosoft31count>0.20){
                    echo "<style>#igrosoft31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                } 
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expigrosoft">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofigrosoftprov=($igrosoft1count + $igrosoft2count + $igrosoft3count + $igrosoft4count + $igrosoft5count + $igrosoft6count + $igrosoft7count + $igrosoft8count + $igrosoft9count + $igrosoft10count + $igrosoft11count + $igrosoft12count + $igrosoft13count + $igrosoft14count + $igrosoft15count +  $igrosoft16count + $igrosoft17count + $igrosoft18count + $igrosoft19count + $igrosoft20count + $igrosoft21count + $igrosoft22count + $igrosoft23count + $igrosoft24count + $igrosoft25count + $igrosoft26count+ $igrosoft27count+ $igrosoft28count+ $igrosoft29count+ $igrosoft30count + $igrosoft31count);
            $sofigrosofte = ($sumofigrosoftprov);
            if($sofigrosofte == 0){
                $sofigrosofte = 1;
            }


            $percofigrosoftprov = round(($sumofigrosoftprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofigrosoftprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofigrosoftprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
                        <br>
                <a href="/igrosoftjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/igrosoftfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/igrosoftmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/igrosoftapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/igrosoftmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/igrosoftjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/igrosoftjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/igrosoftaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/igrosoftsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/igrosoftoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/igrosoftnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/igrosoftdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
        </div>
    </div>
      
 <script src="js/jquery-2.2.4.min.js"></script>
 <script src="js/jquery.appear.min.js"></script>
 <script src="js/jquery.easypiechart.min.js"></script> 
 <script>
    'use strict';

var $window = $(window);

function run()
{
	var fName = arguments[0],
		aArgs = Array.prototype.slice.call(arguments, 1);
	try {
		fName.apply(window, aArgs);
	} catch(err) {
		 
	}
};
 
/* chart
================================================== */
function _chart ()
{
	$('.b-skills').appear(function() {
		setTimeout(function() {
			$('.chart').easyPieChart({
				easing: 'easeOutElastic',
				delay: 3000,
				barColor: '#369670',
				trackColor: '#fff',
				scaleColor: false,
				lineWidth: 21,
				trackWidth: 21,
				size: 250,
				lineCap: 'round',
				onStep: function(from, to, percent) {
					this.el.children[0].innerHTML = percent;
				}
			});
		}, 150);
	});
};
 

$(document).ready(function() {
  
	run(_chart);
  
    
});


    
    </script>
</body>
<footer>
    <a href="/index">
        <img class="lightlogo" src="/IMG/light logo.png"/>
    </a>
    <div class="line">
        
    </div>
    <p class="footerHeader">© 2021 Monitor.crocobet.com is created by Nikolozi23, NikushaK</p>
</footer>
</html>
