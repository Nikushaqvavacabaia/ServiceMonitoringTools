<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <title>Monitoring ISP/Cell</title>
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
        <button class="slot" >Slot(Casino, Sport)</button>
        </a>
        <a href="/isp">
        <button class="isp" style="background-color: #85CF9B; color: #152340;">ISP/Cell</button>
        </a>
        <a href="/fbn">
        <button class="fbn">Front/Back/Network</button>
        </a>
        
    </div><br><br><br>
    <div class="productBody">
        <div class="product1">
            <a class="provider_link" href="/silknet">
                <h1 class="product1Header">Silknet - Issues in HH/MM: {{$sumsilknetnow}}</h1>
            </a>
            <div class="graph">
            <a href="/silknet1" class="silknet1a">
            <button class="box" id="silknet1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $silknet1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#silknet1{
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
                    echo "<style>#silknet1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet1count>=0.10 && $silknet1count<=0.20){
                    echo "<style>#silknet1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet1count>0.20){
                    echo "<style>#silknet1{
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
            <a href="/silknet2" class="silknet2a">
            <button class="box" id="silknet2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $silknet2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#silknet2{
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
                    echo "<style>#silknet2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet2count>=0.10 && $silknet2count<=0.20){
                    echo "<style>#silknet2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet2count>0.20){
                    echo "<style>#silknet2{
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
            <a href="/silknet3" class="silknet3a">
            <button class="box" id="silknet3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $silknet3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#silknet3{
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
                    echo "<style>#silknet3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet3count>=0.10 && $silknet3count<=0.20){
                    echo "<style>#silknet3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet3count>0.20){
                    echo "<style>#silknet3{
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
            <a href="/silknet4" class="silknet4a">
            <button class="box" id="silknet4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $silknet4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#silknet4{
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
                    echo "<style>#silknet4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet4count>=0.10 && $silknet4count<=0.20){
                    echo "<style>#silknet4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet4count>0.20){
                    echo "<style>#silknet4{
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
            <a href="/silknet5" class="silknet5a">
            <button class="box" id="silknet5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $silknet5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#silknet5{
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
                    echo "<style>#silknet5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet5count>=0.10 && $silknet5count<=0.20){
                    echo "<style>#silknet5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet5count>0.20){
                    echo "<style>#silknet5{
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
            <a href="/silknet6" class="silknet6a">
            <button class="box" id="silknet6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $silknet6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#silknet6{
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
                    echo "<style>#silknet6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet6count>=0.10 && $silknet6count<=0.20){
                    echo "<style>#silknet6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet6count>0.20){
                    echo "<style>#silknet6{
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
            <a href="/silknet7" class="silknet7a">
            <button class="box" id="silknet7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $silknet7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#silknet7{
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
                    echo "<style>#silknet7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet7count>=0.10 && $silknet7count<=0.20){
                    echo "<style>#silknet7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet7count>0.20){
                    echo "<style>#silknet7{
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
            <a href="/silknet8" class="silknet8a">
            <button class="box" id="silknet8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $silknet8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#silknet8{
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
                    echo "<style>#silknet8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet8count>=0.10 && $silknet8count<=0.20){
                    echo "<style>#silknet8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet8count>0.20){
                    echo "<style>#silknet8{
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
            <a href="/silknet9" class="silknet9a">
            <button class="box" id="silknet9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $silknet9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#silknet9{
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
                    echo "<style>#silknet9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet9count>=0.10 && $silknet9count<=0.20){
                    echo "<style>#silknet9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet9count>0.20){
                    echo "<style>#silknet9{
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
            <a href="/silknet10" class="silknet10a">
            <button class="box" id="silknet10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $silknet10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#silknet10{
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
                    echo "<style>#silknet10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet10count>=0.10 && $silknet10count<=0.20){
                    echo "<style>#silknet10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet10count>0.20){
                    echo "<style>#silknet10{
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
            <a href="/silknet11" class="silknet11a">
            <button class="box" id="silknet11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $silknet11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#silknet11{
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
                    echo "<style>#silknet11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet11count>=0.10 && $silknet11count<=0.20){
                    echo "<style>#silknet11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet11count>0.20){
                    echo "<style>#silknet11{
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
            <a href="/silknet12" class="silknet12a">
            <button class="box" id="silknet12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $silknet12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#silknet12{
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
                    echo "<style>#silknet12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet12count>=0.10 && $silknet12count<=0.20){
                    echo "<style>#silknet12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet12count>0.20){
                    echo "<style>#silknet12{
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
            <a href="/silknet13" class="silknet13a">
            <button class="box" id="silknet13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $silknet13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#silknet13{
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
                    echo "<style>#silknet13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet13count>=0.10 && $silknet13count<=0.20){
                    echo "<style>#silknet13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet13count>0.20){
                    echo "<style>#silknet13{
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
            <a href="/silknet14" class="silknet14a">
            <button class="box" id="silknet14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $silknet14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#silknet14{
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
                    echo "<style>#silknet14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet14count>=0.10 && $silknet14count<=0.20){
                    echo "<style>#silknet14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet14count>0.20){
                    echo "<style>#silknet14{
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
            <a href="/silknet15" class="silknet15a">
            <button class="box" id="silknet15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $silknet15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#silknet15{
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
                    echo "<style>#silknet15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet15count>=0.10 && $silknet15count<=0.20){
                    echo "<style>#silknet15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet15count>0.20){
                    echo "<style>#silknet15{
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
            <a href="/silknet16" class="silknet16a">
            <button class="box" id="silknet16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $silknet16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#silknet16{
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
                    echo "<style>#silknet16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet16count>=0.10 && $silknet16count<=0.20){
                    echo "<style>#silknet16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet16count>0.20){
                    echo "<style>#silknet16{
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
            <a href="/silknet17" class="silknet17a">
            <button class="box" id="silknet17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $silknet17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#silknet17{
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
                    echo "<style>#silknet17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet17count>=0.10 && $silknet17count<=0.20){
                    echo "<style>#silknet17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet17count>0.20){
                    echo "<style>#silknet17{
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
            <a href="/silknet18" class="silknet18a">
            <button class="box" id="silknet18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $silknet18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#silknet18{
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
                    echo "<style>#silknet18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet18count>=0.10 && $silknet18count<=0.20){
                    echo "<style>#silknet18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet18count>0.20){
                    echo "<style>#silknet18{
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
            <a href="/silknet19" class="silknet19a">
            <button class="box" id="silknet19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $silknet19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#silknet19{
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
                    echo "<style>#silknet19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                            
                if ($silknet19count>=0.10 && $silknet19count<=0.20){
                    echo "<style>#silknet19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet19count>0.20){
                    echo "<style>#silknet19{
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
            <a href="/silknet20" class="silknet20a">
            <button class="box" id="silknet20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $silknet20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#silknet20{
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
                    echo "<style>#silknet20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet20count>=0.10 && $silknet20count<=0.20){
                    echo "<style>#silknet20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet20count>0.20){
                    echo "<style>#silknet20{
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
            <a href="/silknet21" class="silknet21a">
            <button class="box" id="silknet21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $silknet21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#silknet21{
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
                    echo "<style>#silknet21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet21count>=0.10 && $silknet21count<=0.20){
                    echo "<style>#silknet21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet21count>0.20){
                    echo "<style>#silknet21{
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
            <a href="/silknet22" class="silknet22a">
            <button class="box" id="silknet22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $silknet22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#silknet22{
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
                    echo "<style>#silknet22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet22count>=0.10 && $silknet22count<=0.20){
                    echo "<style>#silknet22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet22count>0.20){
                    echo "<style>#silknet22{
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
            <a href="/silknet23" class="silknet23a">
            <button class="box" id="silknet23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $silknet23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#silknet23{
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
                    echo "<style>#silknet23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet23count>=0.10 && $silknet23count<=0.20){
                    echo "<style>#silknet23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet23count>0.20){
                    echo "<style>#silknet23{
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
            <a href="/silknet24" class="silknet24a">
            <button class="box" id="silknet24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $silknet24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#silknet24{
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
                    echo "<style>#silknet24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet24count>=0.10 && $silknet24count<=0.20){
                    echo "<style>#silknet24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet24count>0.20){
                    echo "<style>#silknet24{
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
            <a href="/silknet25" class="silknet25a">
            <button class="box" id="silknet25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $silknet25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#silknet25{
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
                    echo "<style>#silknet25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet25count>=0.10 && $silknet25count<=0.20){
                    echo "<style>#silknet25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet25count>0.20){
                    echo "<style>#silknet25{
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
            <a href="/silknet26" class="silknet26a">
            <button class="box" id="silknet26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $silknet26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#silknet26{
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
                    echo "<style>#silknet26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet26count>=0.10 && $silknet26count<=0.20){
                    echo "<style>#silknet26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet26count>0.20){
                    echo "<style>#silknet26{
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
            <a href="/silknet27" class="silknet27a">
            <button class="box" id="silknet27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $silknet27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#silknet27{
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
                    echo "<style>#silknet27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet27count>=0.10 && $silknet27count<=0.20){
                    echo "<style>#silknet27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet27count>0.20){
                    echo "<style>#silknet27{
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
            <a href="/silknet28" class="silknet28a">
            <button class="box" id="silknet28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $silknet28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#silknet28{
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
                    echo "<style>#silknet28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet28count>=0.10 && $silknet28count<=0.20){
                    echo "<style>#silknet28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet28count>0.20){
                    echo "<style>#silknet28{
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
            <a href="/silknet29" class="silknet29a">
            <button class="box" id="silknet29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $silknet29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#silknet29{
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
                    echo "<style>#silknet29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet29count>=0.10 && $silknet29count<=0.20){
                    echo "<style>#silknet29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet29count>0.20){
                    echo "<style>#silknet29{
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
            <a href="/silknet30" class="silknet30a">
            <button class="box" id="silknet30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $silknet30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#silknet30{
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
                    echo "<style>#silknet30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet30count>=0.10 && $silknet30count<=0.20){
                    echo "<style>#silknet30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet30count>0.20){
                    echo "<style>#silknet30{
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
            <a href="/silknet31" class="silknet31a">
            <button class="box" id="silknet31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $silknet31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#silknet31{
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
                    echo "<style>#silknet31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .silknet31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#silknet31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($silknet31count>=0.10 && $silknet31count<=0.20){
                    echo "<style>#silknet31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($silknet31count>0.20){
                    echo "<style>#silknet31{
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
            <a href="/expsilknet">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofsilknetprov=($silknet1count + $silknet2count + $silknet3count + $silknet4count + $silknet5count + $silknet6count + $silknet7count + $silknet8count + $silknet9count + $silknet10count + $silknet11count + $silknet12count + $silknet13count + $silknet14count + $silknet15count +  $silknet16count + $silknet17count + $silknet18count + $silknet19count + $silknet20count + $silknet21count + $silknet22count + $silknet23count + $silknet24count + $silknet25count + $silknet26count+ $silknet27count+ $silknet28count+ $silknet29count+ $silknet30count + $silknet31count);
            $sofsilknete = ($sumofsilknetprov);
            if($sofsilknete == 0){
                $sofsilknete = 1;
            }


            $percofsilknetprov = round(($sumofsilknetprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofsilknetprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofsilknetprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/silknetjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/silknetfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/silknetmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/silknetapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/silknetmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/silknetjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/silknetjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/silknetaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/silknetsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/silknetoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/silknetnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/silknetdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                
            <br>
            <hr>
            <a class="provider_link" href="/magti">
                <h1 class="productHeader">Magti - Issues in HH/MM: {{$summagtinow}}</h1>
            </a>
            <div class="graph">
            <a href="/magti1" class="magti1a">
            <button class="box" id="magti1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $magti1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#magti1{
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
                    echo "<style>#magti1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti1count>=0.10 && $magti1count<=0.20){
                    echo "<style>#magti1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti1count>0.20){
                    echo "<style>#magti1{
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
            <a href="/magti2" class="magti2a">
            <button class="box" id="magti2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $magti2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#magti2{
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
                    echo "<style>#magti2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti2count>=0.10 && $magti2count<=0.20){
                    echo "<style>#magti2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti2count>0.20){
                    echo "<style>#magti2{
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
            <a href="/magti3" class="magti3a">
            <button class="box" id="magti3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $magti3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#magti3{
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
                    echo "<style>#magti3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti3count>=0.10 && $magti3count<=0.20){
                    echo "<style>#magti3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti3count>0.20){
                    echo "<style>#magti3{
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
            <a href="/magti4" class="magti4a">
            <button class="box" id="magti4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $magti4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#magti4{
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
                    echo "<style>#magti4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti4count>=0.10 && $magti4count<=0.20){
                    echo "<style>#magti4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti4count>0.20){
                    echo "<style>#magti4{
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
            <a href="/magti5" class="magti5a">
            <button class="box" id="magti5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $magti5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#magti5{
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
                    echo "<style>#magti5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti5count>=0.10 && $magti5count<=0.20){
                    echo "<style>#magti5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti5count>0.20){
                    echo "<style>#magti5{
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
            <a href="/magti6" class="magti6a">
            <button class="box" id="magti6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $magti6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#magti6{
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
                    echo "<style>#magti6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti6count>=0.10 && $magti6count<=0.20){
                    echo "<style>#magti6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti6count>0.20){
                    echo "<style>#magti6{
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
            <a href="/magti7" class="magti7a">
            <button class="box" id="magti7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $magti7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#magti7{
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
                    echo "<style>#magti7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti7count>=0.10 && $magti7count<=0.20){
                    echo "<style>#magti7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti7count>0.20){
                    echo "<style>#magti7{
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
            <a href="/magti8" class="magti8a">
            <button class="box" id="magti8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $magti8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#magti8{
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
                    echo "<style>#magti8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti8count>=0.10 && $magti8count<=0.20){
                    echo "<style>#magti8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti8count>0.20){
                    echo "<style>#magti8{
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
            <a href="/magti9" class="magti9a">
            <button class="box" id="magti9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $magti9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#magti9{
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
                    echo "<style>#magti9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti9count>=0.10 && $magti9count<=0.20){
                    echo "<style>#magti9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti9count>0.20){
                    echo "<style>#magti9{
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
            <a href="/magti10" class="magti10a">
            <button class="box" id="magti10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $magti10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#magti10{
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
                    echo "<style>#magti10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti10count>=0.10 && $magti10count<=0.20){
                    echo "<style>#magti10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti10count>0.20){
                    echo "<style>#magti10{
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
            <a href="/magti11" class="magti11a">
            <button class="box" id="magti11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $magti11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#magti11{
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
                    echo "<style>#magti11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti11count>=0.10 && $magti11count<=0.20){
                    echo "<style>#magti11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti11count>0.20){
                    echo "<style>#magti11{
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
            <a href="/magti12" class="magti12a">
            <button class="box" id="magti12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $magti12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#magti12{
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
                    echo "<style>#magti12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti12count>=0.10 && $magti12count<=0.20){
                    echo "<style>#magti12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti12count>0.20){
                    echo "<style>#magti12{
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
            <a href="/magti13" class="magti13a">
            <button class="box" id="magti13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $magti13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#magti13{
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
                    echo "<style>#magti13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti13count>=0.10 && $magti13count<=0.20){
                    echo "<style>#magti13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti13count>0.20){
                    echo "<style>#magti13{
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
            <a href="/magti14" class="magti14a">
            <button class="box" id="magti14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $magti14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#magti14{
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
                    echo "<style>#magti14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti14count>=0.10 && $magti14count<=0.20){
                    echo "<style>#magti14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti14count>0.20){
                    echo "<style>#magti14{
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
            <a href="/magti15" class="magti15a">
            <button class="box" id="magti15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $magti15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#magti15{
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
                    echo "<style>#magti15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti15count>=0.10 && $magti15count<=0.20){
                    echo "<style>#magti15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti15count>0.20){
                    echo "<style>#magti15{
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
            <a href="/magti16" class="magti16a">
            <button class="box" id="magti16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $magti16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#magti16{
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
                    echo "<style>#magti16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti16count>=0.10 && $magti16count<=0.20){
                    echo "<style>#magti16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti16count>0.20){
                    echo "<style>#magti16{
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
            <a href="/magti17" class="magti17a">
            <button class="box" id="magti17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $magti17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#magti17{
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
                    echo "<style>#magti17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti17count>=0.10 && $magti17count<=0.20){
                    echo "<style>#magti17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti17count>0.20){
                    echo "<style>#magti17{
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
            <a href="/magti18" class="magti18a">
            <button class="box" id="magti18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $magti18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#magti18{
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
                    echo "<style>#magti18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti18count>=0.10 && $magti18count<=0.20){
                    echo "<style>#magti18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti18count>0.20){
                    echo "<style>#magti18{
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
            <a href="/magti19" class="magti19a">
            <button class="box" id="magti19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $magti19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#magti19{
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
                    echo "<style>#magti19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti19count>=0.10 && $magti19count<=0.20){
                    echo "<style>#magti19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti19count>0.20){
                    echo "<style>#magti19{
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
            <a href="/magti20" class="magti20a">
            <button class="box" id="magti20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $magti20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#magti20{
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
                    echo "<style>#magti20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti20count>=0.10 && $magti20count<=0.20){
                    echo "<style>#magti20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti20count>0.20){
                    echo "<style>#magti20{
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
            <a href="/magti21" class="magti21a">
            <button class="box" id="magti21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $magti21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#magti21{
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
                    echo "<style>#magti21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti21count>=0.10 && $magti21count<=0.20){
                    echo "<style>#magti21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti21count>0.20){
                    echo "<style>#magti21{
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
            <a href="/magti22" class="magti22a">
            <button class="box" id="magti22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $magti22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#magti22{
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
                    echo "<style>#magti22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti22count>=0.10 && $magti22count<=0.20){
                    echo "<style>#magti22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti22count>0.20){
                    echo "<style>#magti22{
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
            <a href="/magti23" class="magti23a">
            <button class="box" id="magti23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $magti23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#magti23{
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
                    echo "<style>#magti23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti23count>=0.10 && $magti23count<=0.20){
                    echo "<style>#magti23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti23count>0.20){
                    echo "<style>#magti23{
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
            <a href="/magti24" class="magti24a">
            <button class="box" id="magti24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $magti24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#magti24{
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
                    echo "<style>#magti24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti24count>=0.10 && $magti24count<=0.20){
                    echo "<style>#magti24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti24count>0.20){
                    echo "<style>#magti24{
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
            <a href="/magti25" class="magti25a">
            <button class="box" id="magti25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $magti25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#magti25{
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
                    echo "<style>#magti25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti25count>=0.10 && $magti25count<=0.20){
                    echo "<style>#magti25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti25count>0.20){
                    echo "<style>#magti25{
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
            <a href="/magti26" class="magti26a">
            <button class="box" id="magti26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $magti26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#magti26{
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
                    echo "<style>#magti26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti26count>=0.10 && $magti26count<=0.20){
                    echo "<style>#magti26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti26count>0.20){
                    echo "<style>#magti26{
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
            <a href="/magti27" class="magti27a">
            <button class="box" id="magti27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $magti27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#magti27{
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
                    echo "<style>#magti27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti27count>=0.10 && $magti27count<=0.20){
                    echo "<style>#magti27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti27count>0.20){
                    echo "<style>#magti27{
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
            <a href="/magti28" class="magti28a">
            <button class="box" id="magti28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $magti28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#magti28{
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
                    echo "<style>#magti28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti28count>=0.10 && $magti28count<=0.20){
                    echo "<style>#magti28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti28count>0.20){
                    echo "<style>#magti28{
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
            <a href="/magti29" class="magti29a">
            <button class="box" id="magti29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $magti29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#magti29{
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
                    echo "<style>#magti29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti29count>=0.10 && $magti29count<=0.20){
                    echo "<style>#magti29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti29count>0.20){
                    echo "<style>#magti29{
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
            <a href="/magti30" class="magti30a">
            <button class="box" id="magti30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $magti30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#magti30{
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
                    echo "<style>#magti30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti30count>=0.10 && $magti30count<=0.20){
                    echo "<style>#magti30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti30count>0.20){
                    echo "<style>#magti30{
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
            <a href="/magti31" class="magti31a">
            <button class="box" id="magti31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $magti31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#magti31{
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
                    echo "<style>#magti31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .magti31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#magti31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($magti31count>=0.10 && $magti31count<=0.20){
                    echo "<style>#magti31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($magti31count>0.20){
                    echo "<style>#magti31{
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
            <a href="/expmagti">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofmagtiprov=($magti1count + $magti2count + $magti3count + $magti4count + $magti5count + $magti6count + $magti7count + $magti8count + $magti9count + $magti10count + $magti11count + $magti12count + $magti13count + $magti14count + $magti15count +  $magti16count + $magti17count + $magti18count + $magti19count + $magti20count + $magti21count + $magti22count + $magti23count + $magti24count + $magti25count + $magti26count+ $magti27count+ $magti28count+ $magti29count+ $magti30count + $magti31count);
            $sofmagtie = ($sumofmagtiprov);
            if($sofmagtie == 0){
                $sofmagtie = 1;
            }


            $percofmagtiprov = round(($sumofmagtiprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofmagtiprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofmagtiprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/magtijan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/magtifeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/magtimar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/magtiapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/magtimay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/magtijun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/magtijul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/magtiaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/magtisep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/magtioct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/magtinov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/magtidec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                    
                <br>
                <hr>
            <a class="provider_link" href="/globalcell"> 
                <h1 class="productHeader">GlobalCell - Issues in HH/MM: {{$sumglobalcellnow}}</h1>
            </a>
            <div class="graph">
            <a href="/globalcell1" class="globalcell1a">
            <button class="box" id="globalcell1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $globalcell1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#globalcell1{
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
                    echo "<style>#globalcell1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell1count>=0.10 && $globalcell1count<=0.20){
                    echo "<style>#globalcell1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell1count>0.20){
                    echo "<style>#globalcell1{
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
            <a href="/globalcell2" class="globalcell2a">
            <button class="box" id="globalcell2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $globalcell2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#globalcell2{
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
                    echo "<style>#globalcell2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell2count>=0.10 && $globalcell2count<=0.20){
                    echo "<style>#globalcell2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell2count>0.20){
                    echo "<style>#globalcell2{
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
            <a href="/globalcell3" class="globalcell3a">
            <button class="box" id="globalcell3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $globalcell3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#globalcell3{
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
                    echo "<style>#globalcell3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell3count>=0.10 && $globalcell3count<=0.20){
                    echo "<style>#globalcell3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell3count>0.20){
                    echo "<style>#globalcell3{
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
            <a href="/globalcell4" class="globalcell4a">
            <button class="box" id="globalcell4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $globalcell4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#globalcell4{
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
                    echo "<style>#globalcell4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell4count>=0.10 && $globalcell4count<=0.20){
                    echo "<style>#globalcell4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell4count>0.20){
                    echo "<style>#globalcell4{
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
            <a href="/globalcell5" class="globalcell5a">
            <button class="box" id="globalcell5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $globalcell5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#globalcell5{
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
                    echo "<style>#globalcell5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell5count>=0.10 && $globalcell5count<=0.20){
                    echo "<style>#globalcell5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell5count>0.20){
                    echo "<style>#globalcell5{
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
            <a href="/globalcell6" class="globalcell6a">
            <button class="box" id="globalcell6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $globalcell6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#globalcell6{
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
                    echo "<style>#globalcell6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell6count>=0.10 && $globalcell6count<=0.20){
                    echo "<style>#globalcell6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell6count>0.20){
                    echo "<style>#globalcell6{
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
            <a href="/globalcell7" class="globalcell7a">
            <button class="box" id="globalcell7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $globalcell7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#globalcell7{
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
                    echo "<style>#globalcell7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell7count>=0.10 && $globalcell7count<=0.20){
                    echo "<style>#globalcell7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell7count>0.20){
                    echo "<style>#globalcell7{
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
            <a href="/globalcell8" class="globalcell8a">
            <button class="box" id="globalcell8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $globalcell8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#globalcell8{
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
                    echo "<style>#globalcell8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell8count>=0.10 && $globalcell8count<=0.20){
                    echo "<style>#globalcell8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell8count>0.20){
                    echo "<style>#globalcell8{
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
            <a href="/globalcell9" class="globalcell9a">
            <button class="box" id="globalcell9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $globalcell9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#globalcell9{
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
                    echo "<style>#globalcell9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell9count>=0.10 && $globalcell9count<=0.20){
                    echo "<style>#globalcell9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell9count>0.20){
                    echo "<style>#globalcell9{
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
            <a href="/globalcell10" class="globalcell10a">
            <button class="box" id="globalcell10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $globalcell10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#globalcell10{
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
                    echo "<style>#globalcell10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell10count>=0.10 && $globalcell10count<=0.20){
                    echo "<style>#globalcell10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell10count>0.20){
                    echo "<style>#globalcell10{
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
            <a href="/globalcell11" class="globalcell11a">
            <button class="box" id="globalcell11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $globalcell11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#globalcell11{
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
                    echo "<style>#globalcell11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell11count>=0.10 && $globalcell11count<=0.20){
                    echo "<style>#globalcell11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell11count>0.20){
                    echo "<style>#globalcell11{
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
            <a href="/globalcell12" class="globalcell12a">
            <button class="box" id="globalcell12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $globalcell12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#globalcell12{
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
                    echo "<style>#globalcell12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell12count>=0.10 && $globalcell12count<=0.20){
                    echo "<style>#globalcell12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell12count>0.20){
                    echo "<style>#globalcell12{
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
            <a href="/globalcell13" class="globalcell13a">
            <button class="box" id="globalcell13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $globalcell13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#globalcell13{
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
                    echo "<style>#globalcell13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell13count>=0.10 && $globalcell13count<=0.20){
                    echo "<style>#globalcell13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell13count>0.20){
                    echo "<style>#globalcell13{
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
            <a href="/globalcell14" class="globalcell14a">
            <button class="box" id="globalcell14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $globalcell14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#globalcell14{
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
                    echo "<style>#globalcell14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell14count>=0.10 && $globalcell14count<=0.20){
                    echo "<style>#globalcell14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell14count>0.20){
                    echo "<style>#globalcell14{
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
            <a href="/globalcell15" class="globalcell15a">
            <button class="box" id="globalcell15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $globalcell15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#globalcell15{
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
                    echo "<style>#globalcell15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell15count>=0.10 && $globalcell15count<=0.20){
                    echo "<style>#globalcell15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell15count>0.20){
                    echo "<style>#globalcell15{
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
            <a href="/globalcell16" class="globalcell16a">
            <button class="box" id="globalcell16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $globalcell16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#globalcell16{
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
                    echo "<style>#globalcell16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell16count>=0.10 && $globalcell16count<=0.20){
                    echo "<style>#globalcell16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell16count>0.20){
                    echo "<style>#globalcell16{
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
            <a href="/globalcell17" class="globalcell17a">
            <button class="box" id="globalcell17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $globalcell17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#globalcell17{
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
                    echo "<style>#globalcell17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell17count>=0.10 && $globalcell17count<=0.20){
                    echo "<style>#globalcell17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell17count>0.20){
                    echo "<style>#globalcell17{
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
            <a href="/globalcell18" class="globalcell18a">
            <button class="box" id="globalcell18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $globalcell18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#globalcell18{
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
                    echo "<style>#globalcell18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell18count>=0.10 && $globalcell18count<=0.20){
                    echo "<style>#globalcell18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell18count>0.20){
                    echo "<style>#globalcell18{
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
            <a href="/globalcell19" class="globalcell19a">
            <button class="box" id="globalcell19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $globalcell19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#globalcell19{
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
                    echo "<style>#globalcell19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell19count>=0.10 && $globalcell19count<=0.20){
                    echo "<style>#globalcell19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell19count>0.20){
                    echo "<style>#globalcell19{
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
            <a href="/globalcell20" class="globalcell20a">
            <button class="box" id="globalcell20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $globalcell20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#globalcell20{
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
                    echo "<style>#globalcell20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell20count>=0.10 && $globalcell20count<=0.20){
                    echo "<style>#globalcell20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell20count>0.20){
                    echo "<style>#globalcell20{
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
            <a href="/globalcell21" class="globalcell21a">
            <button class="box" id="globalcell21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $globalcell21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#globalcell21{
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
                    echo "<style>#globalcell21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell21count>=0.10 && $globalcell21count<=0.20){
                    echo "<style>#globalcell21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell21count>0.20){
                    echo "<style>#globalcell21{
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
            <a href="/globalcell22" class="globalcell22a">
            <button class="box" id="globalcell22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $globalcell22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#globalcell22{
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
                    echo "<style>#globalcell22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell22count>=0.10 && $globalcell22count<=0.20){
                    echo "<style>#globalcell22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell22count>0.20){
                    echo "<style>#globalcell22{
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
            <a href="/globalcell23" class="globalcell23a">
            <button class="box" id="globalcell23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $globalcell23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#globalcell23{
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
                    echo "<style>#globalcell23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell23count>=0.10 && $globalcell23count<=0.20){
                    echo "<style>#globalcell23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell23count>0.20){
                    echo "<style>#globalcell23{
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
            <a href="/globalcell24" class="globalcell24a">
            <button class="box" id="globalcell24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $globalcell24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#globalcell24{
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
                    echo "<style>#globalcell24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell24count>=0.10 && $globalcell24count<=0.20){
                    echo "<style>#globalcell24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell24count>0.20){
                    echo "<style>#globalcell24{
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
            <a href="/globalcell25" class="globalcell25a">
            <button class="box" id="globalcell25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $globalcell25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#globalcell25{
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
                    echo "<style>#globalcell25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell25count>=0.10 && $globalcell25count<=0.20){
                    echo "<style>#globalcell25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell25count>0.20){
                    echo "<style>#globalcell25{
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
            <a href="/globalcell26" class="globalcell26a">
            <button class="box" id="globalcell26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $globalcell26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#globalcell26{
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
                    echo "<style>#globalcell26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell26count>=0.10 && $globalcell26count<=0.20){
                    echo "<style>#globalcell26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell26count>0.20){
                    echo "<style>#globalcell26{
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
            <a href="/globalcell27" class="globalcell27a">
            <button class="box" id="globalcell27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $globalcell27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#globalcell27{
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
                    echo "<style>#globalcell27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell27count>=0.10 && $globalcell27count<=0.20){
                    echo "<style>#globalcell27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell27count>0.20){
                    echo "<style>#globalcell27{
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
            <a href="/globalcell28" class="globalcell28a">
            <button class="box" id="globalcell28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $globalcell28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#globalcell28{
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
                    echo "<style>#globalcell28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell28count>=0.10 && $globalcell28count<=0.20){
                    echo "<style>#globalcell28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell28count>0.20){
                    echo "<style>#globalcell28{
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
            <a href="/globalcell29" class="globalcell29a">
            <button class="box" id="globalcell29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $globalcell29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#globalcell29{
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
                    echo "<style>#globalcell29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell29count>=0.10 && $globalcell29count<=0.20){
                    echo "<style>#globalcell29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell29count>0.20){
                    echo "<style>#globalcell29{
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
            <a href="/globalcell30" class="globalcell30a">
            <button class="box" id="globalcell30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $globalcell30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#globalcell30{
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
                    echo "<style>#globalcell30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell30count>=0.10 && $globalcell30count<=0.20){
                    echo "<style>#globalcell30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell30count>0.20){
                    echo "<style>#globalcell30{
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
            <a href="/globalcell31" class="globalcell31a">
            <button class="box" id="globalcell31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $globalcell31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#globalcell31{
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
                    echo "<style>#globalcell31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .globalcell31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#globalcell31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($globalcell31count>=0.10 && $globalcell31count<=0.20){
                    echo "<style>#globalcell31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($globalcell31count>0.20){
                    echo "<style>#globalcell31{
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
            <a href="/expglobalcell">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofglobalcellprov=($globalcell1count + $globalcell2count + $globalcell3count + $globalcell4count + $globalcell5count + $globalcell6count + $globalcell7count + $globalcell8count + $globalcell9count + $globalcell10count + $globalcell11count + $globalcell12count + $globalcell13count + $globalcell14count + $globalcell15count +  $globalcell16count + $globalcell17count + $globalcell18count + $globalcell19count + $globalcell20count + $globalcell21count + $globalcell22count + $globalcell23count + $globalcell24count + $globalcell25count + $globalcell26count+ $globalcell27count+ $globalcell28count+ $globalcell29count+ $globalcell30count + $globalcell31count);
            $sofglobalcelle = ($sumofglobalcellprov);
            if($sofglobalcelle == 0){
                $sofglobalcelle = 1;
            }


            $percofglobalcellprov = round(($sumofglobalcellprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofglobalcellprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofglobalcellprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/globalcelljan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/globalcellfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/globalcellmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/globalcellapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/globalcellmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/globalcelljun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/globalcelljul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/globalcellaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/globalcellsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/globalcelloct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/globalcellnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/globalcelldec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                   
                <br>
                <hr>
            <a class="provider_link" href="/caucasus"> 
                <h1 class="productHeader">Caucasus - Issues in HH/MM: {{$sumcaucasusnow}}</h1>
            </a> 
            <div class="graph">
            <a href="/caucasus1" class="caucasus1a">
            <button class="box" id="caucasus1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $caucasus1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#caucasus1{
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
                    echo "<style>#caucasus1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus1count>=0.10 && $caucasus1count<=0.20){
                    echo "<style>#caucasus1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus1count>0.20){
                    echo "<style>#caucasus1{
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
            <a href="/caucasus2" class="caucasus2a">
            <button class="box" id="caucasus2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $caucasus2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#caucasus2{
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
                    echo "<style>#caucasus2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus2count>=0.10 && $caucasus2count<=0.20){
                    echo "<style>#caucasus2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus2count>0.20){
                    echo "<style>#caucasus2{
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
            <a href="/caucasus3" class="caucasus3a">
            <button class="box" id="caucasus3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">  {{$lst}}-03 Problem in HH/MM: {{ $caucasus3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#caucasus3{
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
                    echo "<style>#caucasus3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus3count>=0.10 && $caucasus3count<=0.20){
                    echo "<style>#caucasus3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus3count>0.20){
                    echo "<style>#caucasus3{
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
            <a href="/caucasus4" class="caucasus4a">
            <button class="box" id="caucasus4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $caucasus4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#caucasus4{
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
                    echo "<style>#caucasus4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus4count>=0.10 && $caucasus4count<=0.20){
                    echo "<style>#caucasus4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus4count>0.20){
                    echo "<style>#caucasus4{
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
            <a href="/caucasus5" class="caucasus5a">
            <button class="box" id="caucasus5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $caucasus5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#caucasus5{
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
                    echo "<style>#caucasus5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus5count>=0.10 && $caucasus5count<=0.20){
                    echo "<style>#caucasus5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus5count>0.20){
                    echo "<style>#caucasus5{
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
            <a href="/caucasus6" class="caucasus6a">
            <button class="box" id="caucasus6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $caucasus6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#caucasus6{
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
                    echo "<style>#caucasus6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus6count>=0.10 && $caucasus6count<=0.20){
                    echo "<style>#caucasus6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus6count>0.20){
                    echo "<style>#caucasus6{
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
            <a href="/caucasus7" class="caucasus7a">
            <button class="box" id="caucasus7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $caucasus7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#caucasus7{
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
                    echo "<style>#caucasus7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus7count>=0.10 && $caucasus7count<=0.20){
                    echo "<style>#caucasus7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus7count>0.20){
                    echo "<style>#caucasus7{
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
            <a href="/caucasus8" class="caucasus8a">
            <button class="box" id="caucasus8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $caucasus8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#caucasus8{
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
                    echo "<style>#caucasus8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus8count>=0.10 && $caucasus8count<=0.20){
                    echo "<style>#caucasus8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus8count>0.20){
                    echo "<style>#caucasus8{
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
            <a href="/caucasus9" class="caucasus9a">
            <button class="box" id="caucasus9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $caucasus9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#caucasus9{
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
                    echo "<style>#caucasus9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus9count>=0.10 && $caucasus9count<=0.20){
                    echo "<style>#caucasus9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus9count>0.20){
                    echo "<style>#caucasus9{
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
            <a href="/caucasus10" class="caucasus10a">
            <button class="box" id="caucasus10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $caucasus10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#caucasus10{
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
                    echo "<style>#caucasus10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus10count>=0.10 && $caucasus10count<=0.20){
                    echo "<style>#caucasus10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus10count>0.20){
                    echo "<style>#caucasus10{
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
            <a href="/caucasus11" class="caucasus11a">
            <button class="box" id="caucasus11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $caucasus11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#caucasus11{
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
                    echo "<style>#caucasus11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus11count>=0.10 && $caucasus11count<=0.20){
                    echo "<style>#caucasus11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus11count>0.20){
                    echo "<style>#caucasus11{
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
            <a href="/caucasus12" class="caucasus12a">
            <button class="box" id="caucasus12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $caucasus12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#caucasus12{
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
                    echo "<style>#caucasus12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus12count>=0.10 && $caucasus12count<=0.20){
                    echo "<style>#caucasus12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus12count>0.20){
                    echo "<style>#caucasus12{
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
            <a href="/caucasus13" class="caucasus13a">
            <button class="box" id="caucasus13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $caucasus13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#caucasus13{
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
                    echo "<style>#caucasus13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus13count>=0.10 && $caucasus13count<=0.20){
                    echo "<style>#caucasus13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus13count>0.20){
                    echo "<style>#caucasus13{
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
            <a href="/caucasus14" class="caucasus14a">
            <button class="box" id="caucasus14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $caucasus14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#caucasus14{
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
                    echo "<style>#caucasus14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus14count>=0.10 && $caucasus14count<=0.20){
                    echo "<style>#caucasus14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus14count>0.20){
                    echo "<style>#caucasus14{
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
            <a href="/caucasus15" class="caucasus15a">
            <button class="box" id="caucasus15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $caucasus15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#caucasus15{
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
                    echo "<style>#caucasus15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus15count>=0.10 && $caucasus15count<=0.20){
                    echo "<style>#caucasus15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus15count>0.20){
                    echo "<style>#caucasus15{
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
            <a href="/caucasus16" class="caucasus16a">
            <button class="box" id="caucasus16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $caucasus16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#caucasus16{
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
                    echo "<style>#caucasus16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus16count>=0.10 && $caucasus16count<=0.20){
                    echo "<style>#caucasus16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus16count>0.20){
                    echo "<style>#caucasus16{
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
            <a href="/caucasus17" class="caucasus17a">
            <button class="box" id="caucasus17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $caucasus17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#caucasus17{
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
                    echo "<style>#caucasus17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus17count>=0.10 && $caucasus17count<=0.20){
                    echo "<style>#caucasus17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus17count>0.20){
                    echo "<style>#caucasus17{
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
            <a href="/caucasus18" class="caucasus18a">
            <button class="box" id="caucasus18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $caucasus18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#caucasus18{
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
                    echo "<style>#caucasus18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus18count>=0.10 && $caucasus18count<=0.20){
                    echo "<style>#caucasus18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus18count>0.20){
                    echo "<style>#caucasus18{
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
            <a href="/caucasus19" class="caucasus19a">
            <button class="box" id="caucasus19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $caucasus19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#caucasus19{
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
                    echo "<style>#caucasus19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus19count>=0.10 && $caucasus19count<=0.20){
                    echo "<style>#caucasus19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus19count>0.20){
                    echo "<style>#caucasus19{
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
            <a href="/caucasus20" class="caucasus20a">
            <button class="box" id="caucasus20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $caucasus20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#caucasus20{
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
                    echo "<style>#caucasus20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus20count>=0.10 && $caucasus20count<=0.20){
                    echo "<style>#caucasus20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus20count>0.20){
                    echo "<style>#caucasus20{
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
            <a href="/caucasus21" class="caucasus21a">
            <button class="box" id="caucasus21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $caucasus21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#caucasus21{
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
                    echo "<style>#caucasus21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus21count>=0.10 && $caucasus21count<=0.20){
                    echo "<style>#caucasus21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus21count>0.20){
                    echo "<style>#caucasus21{
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
            <a href="/caucasus22" class="caucasus22a">
            <button class="box" id="caucasus22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $caucasus22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#caucasus22{
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
                    echo "<style>#caucasus22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus22count>=0.10 && $caucasus22count<=0.20){
                    echo "<style>#caucasus22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus22count>0.20){
                    echo "<style>#caucasus22{
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
            <a href="/caucasus23" class="caucasus23a">
            <button class="box" id="caucasus23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $caucasus23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#caucasus23{
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
                    echo "<style>#caucasus23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus23count>=0.10 && $caucasus23count<=0.20){
                    echo "<style>#caucasus23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus23count>0.20){
                    echo "<style>#caucasus23{
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
            <a href="/caucasus24" class="caucasus24a">
            <button class="box" id="caucasus24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $caucasus24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#caucasus24{
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
                    echo "<style>#caucasus24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus24count>=0.10 && $caucasus24count<=0.20){
                    echo "<style>#caucasus24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus24count>0.20){
                    echo "<style>#caucasus24{
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
            <a href="/caucasus25" class="caucasus25a">
            <button class="box" id="caucasus25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $caucasus25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#caucasus25{
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
                    echo "<style>#caucasus25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus25count>=0.10 && $caucasus25count<=0.20){
                    echo "<style>#caucasus25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus25count>0.20){
                    echo "<style>#caucasus25{
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
            <a href="/caucasus26" class="caucasus26a">
            <button class="box" id="caucasus26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $caucasus26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#caucasus26{
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
                    echo "<style>#caucasus26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus26count>=0.10 && $caucasus26count<=0.20){
                    echo "<style>#caucasus26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus26count>0.20){
                    echo "<style>#caucasus26{
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
            <a href="/caucasus27" class="caucasus27a">
            <button class="box" id="caucasus27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $caucasus27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#caucasus27{
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
                    echo "<style>#caucasus27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus27count>=0.10 && $caucasus27count<=0.20){
                    echo "<style>#caucasus27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus27count>0.20){
                    echo "<style>#caucasus27{
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
            <a href="/caucasus28" class="caucasus28a">
            <button class="box" id="caucasus28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $caucasus28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#caucasus28{
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
                    echo "<style>#caucasus28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus28count>=0.10 && $caucasus28count<=0.20){
                    echo "<style>#caucasus28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus28count>0.20){
                    echo "<style>#caucasus28{
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
            <a href="/caucasus29" class="caucasus29a">
            <button class="box" id="caucasus29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $caucasus29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#caucasus29{
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
                    echo "<style>#caucasus29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus29count>=0.10 && $caucasus29count<=0.20){
                    echo "<style>#caucasus29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus29count>0.20){
                    echo "<style>#caucasus29{
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
            <a href="/caucasus30" class="caucasus30a">
            <button class="box" id="caucasus30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $caucasus30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#caucasus30{
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
                    echo "<style>#caucasus30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus30count>=0.10 && $caucasus30count<=0.20){
                    echo "<style>#caucasus30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus30count>0.20){
                    echo "<style>#caucasus30{
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
            <a href="/caucasus31" class="caucasus31a">
            <button class="box" id="caucasus31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $caucasus31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#caucasus31{
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
                    echo "<style>#caucasus31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .caucasus31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#caucasus31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($caucasus31count>=0.10 && $caucasus31count<=0.20){
                    echo "<style>#caucasus31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($caucasus31count>0.20){
                    echo "<style>#caucasus31{
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
            <a href="/expcaucasus">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofcaucasusprov=($caucasus1count + $caucasus2count + $caucasus3count + $caucasus4count + $caucasus5count + $caucasus6count + $caucasus7count + $caucasus8count + $caucasus9count + $caucasus10count + $caucasus11count + $caucasus12count + $caucasus13count + $caucasus14count + $caucasus15count +  $caucasus16count + $caucasus17count + $caucasus18count + $caucasus19count + $caucasus20count + $caucasus21count + $caucasus22count + $caucasus23count + $caucasus24count + $caucasus25count + $caucasus26count+ $caucasus27count+ $caucasus28count+ $caucasus29count+ $caucasus30count + $caucasus31count);
            $sofcaucasuse = ($sumofcaucasusprov);
            if($sofcaucasuse == 0){
                $sofcaucasuse = 1;
            }


            $percofcaucasusprov = round(($sumofcaucasusprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofcaucasusprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofcaucasusprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/caucasusjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/caucasusfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/caucasusmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/caucasusapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/caucasusmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/caucasusjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/caucasusjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/caucasusaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/caucasussep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/caucasusoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/caucasusnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/caucasusdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                    
                <br>
                <hr>
            <a class="provider_link" href="/livecaller"> 
                <h1 class="productHeader">Live Caller - Issues in HH/MM: {{$sumlivecallernow}}</h1>
            </a>
            <div class="graph">
            <a href="/livecaller1" class="livecaller1a">
            <button class="box" id="livecaller1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $livecaller1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#livecaller1{
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
                    echo "<style>#livecaller1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller1count>=0.10 && $livecaller1count<=0.20){
                    echo "<style>#livecaller1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller1count>0.20){
                    echo "<style>#livecaller1{
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
            <a href="/livecaller2" class="livecaller2a">
            <button class="box" id="livecaller2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $livecaller2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#livecaller2{
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
                    echo "<style>#livecaller2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller2count>=0.10 && $livecaller2count<=0.20){
                    echo "<style>#livecaller2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller2count>0.20){
                    echo "<style>#livecaller2{
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
            <a href="/livecaller3" class="livecaller3a">
            <button class="box" id="livecaller3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $livecaller3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#livecaller3{
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
                    echo "<style>#livecaller3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller3count>=0.10 && $livecaller3count<=0.20){
                    echo "<style>#livecaller3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller3count>0.20){
                    echo "<style>#livecaller3{
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
            <a href="/livecaller4" class="livecaller4a">
            <button class="box" id="livecaller4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $livecaller4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#livecaller4{
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
                    echo "<style>#livecaller4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller4count>=0.10 && $livecaller4count<=0.20){
                    echo "<style>#livecaller4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller4count>0.20){
                    echo "<style>#livecaller4{
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
            <a href="/livecaller5" class="livecaller5a">
            <button class="box" id="livecaller5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $livecaller5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#livecaller5{
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
                    echo "<style>#livecaller5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller5count>=0.10 && $livecaller5count<=0.20){
                    echo "<style>#livecaller5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller5count>0.20){
                    echo "<style>#livecaller5{
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
            <a href="/livecaller6" class="livecaller6a">
            <button class="box" id="livecaller6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $livecaller6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#livecaller6{
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
                    echo "<style>#livecaller6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller6count>=0.10 && $livecaller6count<=0.20){
                    echo "<style>#livecaller6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller6count>0.20){
                    echo "<style>#livecaller6{
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
            <a href="/livecaller7" class="livecaller7a">
            <button class="box" id="livecaller7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $livecaller7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#livecaller7{
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
                    echo "<style>#livecaller7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller7count>=0.10 && $livecaller7count<=0.20){
                    echo "<style>#livecaller7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller7count>0.20){
                    echo "<style>#livecaller7{
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
            <a href="/livecaller8" class="livecaller8a">
            <button class="box" id="livecaller8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $livecaller8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#livecaller8{
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
                    echo "<style>#livecaller8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller8count>=0.10 && $livecaller8count<=0.20){
                    echo "<style>#livecaller8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller8count>0.20){
                    echo "<style>#livecaller8{
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
            <a href="/livecaller9" class="livecaller9a">
            <button class="box" id="livecaller9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $livecaller9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#livecaller9{
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
                    echo "<style>#livecaller9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller9count>=0.10 && $livecaller9count<=0.20){
                    echo "<style>#livecaller9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller9count>0.20){
                    echo "<style>#livecaller9{
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
            <a href="/livecaller10" class="livecaller10a">
            <button class="box" id="livecaller10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $livecaller10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#livecaller10{
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
                    echo "<style>#livecaller10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller10count>=0.10 && $livecaller10count<=0.20){
                    echo "<style>#livecaller10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller10count>0.20){
                    echo "<style>#livecaller10{
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
            <a href="/livecaller11" class="livecaller11a">
            <button class="box" id="livecaller11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $livecaller11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#livecaller11{
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
                    echo "<style>#livecaller11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller11count>=0.10 && $livecaller11count<=0.20){
                    echo "<style>#livecaller11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller11count>0.20){
                    echo "<style>#livecaller11{
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
            <a href="/livecaller12" class="livecaller12a">
            <button class="box" id="livecaller12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $livecaller12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#livecaller12{
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
                    echo "<style>#livecaller12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller12count>=0.10 && $livecaller12count<=0.20){
                    echo "<style>#livecaller12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller12count>0.20){
                    echo "<style>#livecaller12{
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
            <a href="/livecaller13" class="livecaller13a">
            <button class="box" id="livecaller13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $livecaller13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#livecaller13{
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
                    echo "<style>#livecaller13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller13count>=0.10 && $livecaller13count<=0.20){
                    echo "<style>#livecaller13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller13count>0.20){
                    echo "<style>#livecaller13{
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
            <a href="/livecaller14" class="livecaller14a">
            <button class="box" id="livecaller14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $livecaller14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#livecaller14{
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
                    echo "<style>#livecaller14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller14count>=0.10 && $livecaller14count<=0.20){
                    echo "<style>#livecaller14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller14count>0.20){
                    echo "<style>#livecaller14{
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
            <a href="/livecaller15" class="livecaller15a">
            <button class="box" id="livecaller15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $livecaller15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#livecaller15{
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
                    echo "<style>#livecaller15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller15count>=0.10 && $livecaller15count<=0.20){
                    echo "<style>#livecaller15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller15count>0.20){
                    echo "<style>#livecaller15{
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
            <a href="/livecaller16" class="livecaller16a">
            <button class="box" id="livecaller16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $livecaller16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#livecaller16{
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
                    echo "<style>#livecaller16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller16count>=0.10 && $livecaller16count<=0.20){
                    echo "<style>#livecaller16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller16count>0.20){
                    echo "<style>#livecaller16{
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
            <a href="/livecaller17" class="livecaller17a">
            <button class="box" id="livecaller17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $livecaller17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#livecaller17{
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
                    echo "<style>#livecaller17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller17count>=0.10 && $livecaller17count<=0.20){
                    echo "<style>#livecaller17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller17count>0.20){
                    echo "<style>#livecaller17{
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
            <a href="/livecaller18" class="livecaller18a">
            <button class="box" id="livecaller18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $livecaller18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#livecaller18{
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
                    echo "<style>#livecaller18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller18count>=0.10 && $livecaller18count<=0.20){
                    echo "<style>#livecaller18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller18count>0.20){
                    echo "<style>#livecaller18{
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
            <a href="/livecaller19" class="livecaller19a">
            <button class="box" id="livecaller19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $livecaller19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#livecaller19{
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
                    echo "<style>#livecaller19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller19count>=0.10 && $livecaller19count<=0.20){
                    echo "<style>#livecaller19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller19count>0.20){
                    echo "<style>#livecaller19{
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
            <a href="/livecaller20" class="livecaller20a">
            <button class="box" id="livecaller20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $livecaller20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#livecaller20{
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
                    echo "<style>#livecaller20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller20count>=0.10 && $livecaller20count<=0.20){
                    echo "<style>#livecaller20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller20count>0.20){
                    echo "<style>#livecaller20{
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
            <a href="/livecaller21" class="livecaller21a">
            <button class="box" id="livecaller21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $livecaller21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#livecaller21{
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
                    echo "<style>#livecaller21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller21count>=0.10 && $livecaller21count<=0.20){
                    echo "<style>#livecaller21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller21count>0.20){
                    echo "<style>#livecaller21{
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
            <a href="/livecaller22" class="livecaller22a">
            <button class="box" id="livecaller22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $livecaller22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#livecaller22{
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
                    echo "<style>#livecaller22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller22count>=0.10 && $livecaller22count<=0.20){
                    echo "<style>#livecaller22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller22count>0.20){
                    echo "<style>#livecaller22{
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
            <a href="/livecaller23" class="livecaller23a">
            <button class="box" id="livecaller23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $livecaller23count }} </span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#livecaller23{
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
                    echo "<style>#livecaller23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller23count>=0.10 && $livecaller23count<=0.20){
                    echo "<style>#livecaller23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller23count>0.20){
                    echo "<style>#livecaller23{
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
            <a href="/livecaller24" class="livecaller24a">
            <button class="box" id="livecaller24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $livecaller24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#livecaller24{
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
                    echo "<style>#livecaller24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller24count>=0.10 && $livecaller24count<=0.20){
                    echo "<style>#livecaller24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller24count>0.20){
                    echo "<style>#livecaller24{
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
            <a href="/livecaller25" class="livecaller25a">
            <button class="box" id="livecaller25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $livecaller25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#livecaller25{
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
                    echo "<style>#livecaller25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller25count>=0.10 && $livecaller25count<=0.20){
                    echo "<style>#livecaller25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller25count>0.20){
                    echo "<style>#livecaller25{
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
            <a href="/livecaller26" class="livecaller26a">
            <button class="box" id="livecaller26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $livecaller26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#livecaller26{
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
                    echo "<style>#livecaller26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller26count>=0.10 && $livecaller26count<=0.20){
                    echo "<style>#livecaller26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller26count>0.20){
                    echo "<style>#livecaller26{
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
            <a href="/livecaller27" class="livecaller27a">
            <button class="box" id="livecaller27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $livecaller27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#livecaller27{
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
                    echo "<style>#livecaller27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller27count>=0.10 && $livecaller27count<=0.20){
                    echo "<style>#livecaller27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller27count>0.20){
                    echo "<style>#livecaller27{
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
            <a href="/livecaller28" class="livecaller28a">
            <button class="box" id="livecaller28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $livecaller28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#livecaller28{
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
                    echo "<style>#livecaller28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller28count>=0.10 && $livecaller28count<=0.20){
                    echo "<style>#livecaller28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller28count>0.20){
                    echo "<style>#livecaller28{
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
            <a href="/livecaller29" class="livecaller29a">
            <button class="box" id="livecaller29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $livecaller29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#livecaller29{
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
                    echo "<style>#livecaller29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller29count>=0.10 && $livecaller29count<=0.20){
                    echo "<style>#livecaller29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller29count>0.20){
                    echo "<style>#livecaller29{
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
            <a href="/livecaller30" class="livecaller30a">
            <button class="box" id="livecaller30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $livecaller30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#livecaller30{
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
                    echo "<style>#livecaller30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller30count>=0.10 && $livecaller30count<=0.20){
                    echo "<style>#livecaller30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller30count>0.20){
                    echo "<style>#livecaller30{
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
            <a href="/livecaller31" class="livecaller31a">
            <button class="box" id="livecaller31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $livecaller31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#livecaller31{
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
                    echo "<style>#livecaller31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .livecaller31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#livecaller31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($livecaller31count>=0.10 && $livecaller31count<=0.20){
                    echo "<style>#livecaller31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($livecaller31count>0.20){
                    echo "<style>#livecaller31{
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
            <a href="/explivecaller">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumoflivecallerprov=($livecaller1count + $livecaller2count + $livecaller3count + $livecaller4count + $livecaller5count + $livecaller6count + $livecaller7count + $livecaller8count + $livecaller9count + $livecaller10count + $livecaller11count + $livecaller12count + $livecaller13count + $livecaller14count + $livecaller15count +  $livecaller16count + $livecaller17count + $livecaller18count + $livecaller19count + $livecaller20count + $livecaller21count + $livecaller22count + $livecaller23count + $livecaller24count + $livecaller25count + $livecaller26count+ $livecaller27count+ $livecaller28count+ $livecaller29count+ $livecaller30count + $livecaller31count);
            $soflivecallere = ($sumoflivecallerprov);
            if($soflivecallere == 0){
                $soflivecallere = 1;
            }


            $percoflivecallerprov = round(($sumoflivecallerprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percoflivecallerprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percoflivecallerprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/livecallerjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/livecallerfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/livecallermar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/livecallerapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/livecallermay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/livecallerjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/livecallerjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/livecalleraug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/livecallersep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/livecalleroct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/livecallernov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/livecallerdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                    
                <br>
                <hr>
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
