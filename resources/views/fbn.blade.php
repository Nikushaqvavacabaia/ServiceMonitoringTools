
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <title>Monitoring Front/Back/Network</title>
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
        <button class="isp">ISP/Cell</button>
        </a>
        <a href="/fbn">
        <button class="fbn" style="background-color: #85CF9B; color: #152340;">Front/Back/Network</button>
        </a>
        
    </div><br><br><br>
    <div class="productBody">
        <div class="product1">
            <a class="provider_link" href="/front">
                <h1 class="product1Header">Front - Issues in HH/MM: {{$sumfrontnow}}</h1>
            </a>
            <div class="graph">
            <a href="/front1" class="front1a">
            <button class="box" id="front1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $front1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#front1{
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
                    echo "<style>#front1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front1count>=0.10 && $front1count<=0.20){
                    echo "<style>#front1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front1count>0.20){
                    echo "<style>#front1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front2" class="front2a">
            <button class="box" id="front2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $front2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#front2{
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
                    echo "<style>#front2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front2count>=0.10 && $front2count<=0.20){
                    echo "<style>#front2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front2count>0.20){
                    echo "<style>#front2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front3" class="front3a">
            <button class="box" id="front3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $front3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#front3{
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
                    echo "<style>#front3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front3count>=0.10 && $front3count<=0.20){
                    echo "<style>#front3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front3count>0.20){
                    echo "<style>#front3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front4" class="front4a">
            <button class="box" id="front4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $front4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#front4{
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
                    echo "<style>#front4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front4count>=0.10 && $front4count<=0.20){
                    echo "<style>#front4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front4count>0.20){
                    echo "<style>#front4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front5" class="front5a">
            <button class="box" id="front5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $front5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#front5{
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
                    echo "<style>#front5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front5count>=0.10 && $front5count<=0.20){
                    echo "<style>#front5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front5count>0.20){
                    echo "<style>#front5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front6" class="front6a">
            <button class="box" id="front6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $front6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#front6{
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
                    echo "<style>#front6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front6count>=0.10 && $front6count<=0.20){
                    echo "<style>#front6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front6count>0.20){
                    echo "<style>#front6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front7" class="front7a">
            <button class="box" id="front7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $front7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#front7{
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
                    echo "<style>#front7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front7count>=0.10 && $front7count<=0.20){
                    echo "<style>#front7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front7count>0.20){
                    echo "<style>#front7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front8" class="front8a">
            <button class="box" id="front8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $front8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#front8{
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
                    echo "<style>#front8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front8count>=0.10 && $front8count<=0.20){
                    echo "<style>#front8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front8count>0.20){
                    echo "<style>#front8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front9" class="front9a">
            <button class="box" id="front9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $front9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#front9{
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
                    echo "<style>#front9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front9count>=0.10 && $front9count<=0.20){
                    echo "<style>#front9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front9count>0.20){
                    echo "<style>#front9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front10" class="front10a">
            <button class="box" id="front10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $front10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#front10{
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
                    echo "<style>#front10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front10count>=0.10 && $front10count<=0.20){
                    echo "<style>#front10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front10count>0.20){
                    echo "<style>#front10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front11" class="front11a">
            <button class="box" id="front11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $front11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#front11{
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
                    echo "<style>#front11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front11count>=0.10 && $front11count<=0.20){
                    echo "<style>#front11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front11count>0.20){
                    echo "<style>#front11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front12" class="front12a">
            <button class="box" id="front12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $front12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#front12{
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
                    echo "<style>#front12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front12count>=0.10 && $front12count<=0.20){
                    echo "<style>#front12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front12count>0.20){
                    echo "<style>#front12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front13" class="front13a">
            <button class="box" id="front13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $front13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#front13{
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
                    echo "<style>#front13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front13count>=0.10 && $front13count<=0.20){
                    echo "<style>#front13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front13count>0.20){
                    echo "<style>#front13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front14" class="front14a">
            <button class="box" id="front14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $front14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#front14{
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
                    echo "<style>#front14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front14count>=0.10 && $front14count<=0.20){
                    echo "<style>#front14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front14count>0.20){
                    echo "<style>#front14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front15" class="front15a">
            <button class="box" id="front15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $front15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#front15{
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
                    echo "<style>#front15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front15count>=0.10 && $front15count<=0.20){
                    echo "<style>#front15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front15count>0.20){
                    echo "<style>#front15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front16" class="front16a">
            <button class="box" id="front16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $front16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#front16{
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
                    echo "<style>#front16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front16count>=0.10 && $front16count<=0.20){
                    echo "<style>#front16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front16count>0.20){
                    echo "<style>#front16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front17" class="front17a">
            <button class="box" id="front17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $front17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#front17{
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
                    echo "<style>#front17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front17count>=0.10 && $front17count<=0.20){
                    echo "<style>#front17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front17count>0.20){
                    echo "<style>#front17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front18" class="front18a">
            <button class="box" id="front18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $front18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#front18{
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
                    echo "<style>#front18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front18count>=0.10 && $front18count<=0.20){
                    echo "<style>#front18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front18count>0.20){
                    echo "<style>#front18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front19" class="front19a">
            <button class="box" id="front19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $front19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#front19{
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
                    echo "<style>#front19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front19count>=0.10 && $front19count<=0.20){
                    echo "<style>#front19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front19count>0.20){
                    echo "<style>#front19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front20" class="front20a">
            <button class="box" id="front20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $front20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#front20{
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
                    echo "<style>#front20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front20count>=0.10 && $front20count<=0.20){
                    echo "<style>#front20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front20count>0.20){
                    echo "<style>#front20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front21" class="front21a">
            <button class="box" id="front21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $front21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#front21{
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
                    echo "<style>#front21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front21count>=0.10 && $front21count<=0.20){
                    echo "<style>#front21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front21count>0.20){
                    echo "<style>#front21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front22" class="front22a">
            <button class="box" id="front22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $front22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#front22{
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
                    echo "<style>#front22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front22count>=0.10 && $front22count<=0.20){
                    echo "<style>#front22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front22count>0.20){
                    echo "<style>#front22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front23" class="front23a">
            <button class="box" id="front23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $front23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#front23{
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
                    echo "<style>#front23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                 
                if ($front23count>=0.10 && $front23count<=0.20){
                    echo "<style>#front23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front23count>0.20){
                    echo "<style>#front23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front24" class="front24a">
            <button class="box" id="front24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $front24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#front24{
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
                    echo "<style>#front24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front24count>=0.10 && $front24count<=0.20){
                    echo "<style>#front24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front24count>0.20){
                    echo "<style>#front24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front25" class="front25a">
            <button class="box" id="front25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $front25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#front25{
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
                    echo "<style>#front25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front25count>=0.10 && $front25count<=0.20){
                    echo "<style>#front25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front25count>0.20){
                    echo "<style>#front25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front26" class="front26a">
            <button class="box" id="front26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $front26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#front26{
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
                    echo "<style>#front26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front26count>=0.10 && $front26count<=0.20){
                    echo "<style>#front26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front26count>0.20){
                    echo "<style>#front26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front27" class="front27a">
            <button class="box" id="front27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $front27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#front27{
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
                    echo "<style>#front27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front27count>=0.10 && $front27count<=0.20){
                    echo "<style>#front27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front27count>0.20){
                    echo "<style>#front27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front28" class="front28a">
            <button class="box" id="front28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $front28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#front28{
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
                    echo "<style>#front28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front28count>=0.10 && $front28count<=0.20){
                    echo "<style>#front28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front28count>0.20){
                    echo "<style>#front28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front29" class="front29a">
            <button class="box" id="front29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $front29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#front29{
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
                    echo "<style>#front29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front29count>=0.10 && $front29count<=0.20){
                    echo "<style>#front29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front29count>0.20){
                    echo "<style>#front29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front30" class="front30a">
            <button class="box" id="front30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $front30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#front30{
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
                    echo "<style>#front30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front30count>=0.10 && $front30count<=0.20){
                    echo "<style>#front30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front30count>0.20){
                    echo "<style>#front30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/front31" class="front31a">
            <button class="box" id="front31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $front31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#front31{
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
                    echo "<style>#front31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .front31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#front31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($front31count>=0.10 && $front31count<=0.20){
                    echo "<style>#front31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($front31count>0.20){
                    echo "<style>#front31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expfront">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumoffrontprov=($front1count + $front2count + $front3count + $front4count + $front5count + $front6count + $front7count + $front8count + $front9count + $front10count + $front11count + $front12count + $front13count + $front14count + $front15count +  $front16count + $front17count + $front18count + $front19count + $front20count + $front21count + $front22count + $front23count + $front24count + $front25count + $front26count+ $front27count+ $front28count+ $front29count+ $front30count + $front31count);
            $soffronte = ($sumoffrontprov);
            if($soffronte == 0){
                $soffronte = 1;
            }


            $percoffrontprov = round(($sumoffrontprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percoffrontprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percoffrontprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/frontjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/frontfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/frontmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/frontapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/frontmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/frontjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/frontjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/frontaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/frontsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/frontoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/frontnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/frontdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/sbbetting">
                <h1 class="productHeader">SB Betting - Issues in HH/MM: {{$sumsbbettingnow}}</h1>
            </a>
            <div class="graph">
            <a href="/sbbetting1" class="sbbetting1a">
            <button class="box" id="sbbetting1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $sbbetting1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#sbbetting1{
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
                    echo "<style>#sbbetting1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting1count>=0.10 && $sbbetting1count<=0.20){
                    echo "<style>#sbbetting1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting1count>0.20){
                    echo "<style>#sbbetting1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting2" class="sbbetting2a">
            <button class="box" id="sbbetting2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $sbbetting2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#sbbetting2{
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
                    echo "<style>#sbbetting2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting2count>=0.10 && $sbbetting2count<=0.20){
                    echo "<style>#sbbetting2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting2count>0.20){
                    echo "<style>#sbbetting2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting3" class="sbbetting3a">
            <button class="box" id="sbbetting3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $sbbetting3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#sbbetting3{
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
                    echo "<style>#sbbetting3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting3count>=0.10 && $sbbetting3count<=0.20){
                    echo "<style>#sbbetting3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting3count>0.20){
                    echo "<style>#sbbetting3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting4" class="sbbetting4a">
            <button class="box" id="sbbetting4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $sbbetting4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#sbbetting4{
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
                    echo "<style>#sbbetting4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting4count>=0.10 && $sbbetting4count<=0.20){
                    echo "<style>#sbbetting4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting4count>0.20){
                    echo "<style>#sbbetting4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting5" class="sbbetting5a">
            <button class="box" id="sbbetting5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $sbbetting5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#sbbetting5{
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
                    echo "<style>#sbbetting5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting5count>=0.10 && $sbbetting5count<=0.20){
                    echo "<style>#sbbetting5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting5count>0.20){
                    echo "<style>#sbbetting5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting6" class="sbbetting6a">
            <button class="box" id="sbbetting6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $sbbetting6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#sbbetting6{
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
                    echo "<style>#sbbetting6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting6count>=0.10 && $sbbetting6count<=0.20){
                    echo "<style>#sbbetting6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting6count>0.20){
                    echo "<style>#sbbetting6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting7" class="sbbetting7a">
            <button class="box" id="sbbetting7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $sbbetting7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#sbbetting7{
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
                    echo "<style>#sbbetting7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting7count>=0.10 && $sbbetting7count<=0.20){
                    echo "<style>#sbbetting7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting7count>0.20){
                    echo "<style>#sbbetting7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting8" class="sbbetting8a">
            <button class="box" id="sbbetting8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $sbbetting8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#sbbetting8{
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
                    echo "<style>#sbbetting8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting8count>=0.10 && $sbbetting8count<=0.20){
                    echo "<style>#sbbetting8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting8count>0.20){
                    echo "<style>#sbbetting8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting9" class="sbbetting9a">
            <button class="box" id="sbbetting9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $sbbetting9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#sbbetting9{
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
                    echo "<style>#sbbetting9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting9count>=0.10 && $sbbetting9count<=0.20){
                    echo "<style>#sbbetting9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting9count>0.20){
                    echo "<style>#sbbetting9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting10" class="sbbetting10a">
            <button class="box" id="sbbetting10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $sbbetting10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#sbbetting10{
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
                    echo "<style>#sbbetting10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting10count>=0.10 && $sbbetting10count<=0.20){
                    echo "<style>#sbbetting10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting10count>0.20){
                    echo "<style>#sbbetting10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting11" class="sbbetting11a">
            <button class="box" id="sbbetting11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $sbbetting11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#sbbetting11{
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
                    echo "<style>#sbbetting11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting11count>=0.10 && $sbbetting11count<=0.20){
                    echo "<style>#sbbetting11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting11count>0.20){
                    echo "<style>#sbbetting11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting12" class="sbbetting12a">
            <button class="box" id="sbbetting12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $sbbetting12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#sbbetting12{
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
                    echo "<style>#sbbetting12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting12count>=0.10 && $sbbetting12count<=0.20){
                    echo "<style>#sbbetting12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting12count>0.20){
                    echo "<style>#sbbetting12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting13" class="sbbetting13a">
            <button class="box" id="sbbetting13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $sbbetting13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#sbbetting13{
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
                    echo "<style>#sbbetting13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting13count>=0.10 && $sbbetting13count<=0.20){
                    echo "<style>#sbbetting13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting13count>0.20){
                    echo "<style>#sbbetting13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting14" class="sbbetting14a">
            <button class="box" id="sbbetting14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $sbbetting14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#sbbetting14{
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
                    echo "<style>#sbbetting14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting14count>=0.10 && $sbbetting14count<=0.20){
                    echo "<style>#sbbetting14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting14count>0.20){
                    echo "<style>#sbbetting14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting15" class="sbbetting15a">
            <button class="box" id="sbbetting15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $sbbetting15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#sbbetting15{
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
                    echo "<style>#sbbetting15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting15count>=0.10 && $sbbetting15count<=0.20){
                    echo "<style>#sbbetting15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting15count>0.20){
                    echo "<style>#sbbetting15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting16" class="sbbetting16a">
            <button class="box" id="sbbetting16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $sbbetting16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#sbbetting16{
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
                    echo "<style>#sbbetting16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting16count>=0.10 && $sbbetting16count<=0.20){
                    echo "<style>#sbbetting16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting16count>0.20){
                    echo "<style>#sbbetting16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting17" class="sbbetting17a">
            <button class="box" id="sbbetting17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $sbbetting17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#sbbetting17{
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
                    echo "<style>#sbbetting17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting17count>=0.10 && $sbbetting17count<=0.20){
                    echo "<style>#sbbetting17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting17count>0.20){
                    echo "<style>#sbbetting17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting18" class="sbbetting18a">
            <button class="box" id="sbbetting18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $sbbetting18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#sbbetting18{
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
                    echo "<style>#sbbetting18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting18count>=0.10 && $sbbetting18count<=0.20){
                    echo "<style>#sbbetting18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting18count>0.20){
                    echo "<style>#sbbetting18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting19" class="sbbetting19a">
            <button class="box" id="sbbetting19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $sbbetting19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#sbbetting19{
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
                    echo "<style>#sbbetting19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting19count>=0.10 && $sbbetting19count<=0.20){
                    echo "<style>#sbbetting19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting19count>0.20){
                    echo "<style>#sbbetting19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting20" class="sbbetting20a">
            <button class="box" id="sbbetting20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $sbbetting20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#sbbetting20{
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
                    echo "<style>#sbbetting20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting20count>=0.10 && $sbbetting20count<=0.20){
                    echo "<style>#sbbetting20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting20count>0.20){
                    echo "<style>#sbbetting20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting21" class="sbbetting21a">
            <button class="box" id="sbbetting21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $sbbetting21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#sbbetting21{
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
                    echo "<style>#sbbetting21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting21count>=0.10 && $sbbetting21count<=0.20){
                    echo "<style>#sbbetting21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting21count>0.20){
                    echo "<style>#sbbetting21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting22" class="sbbetting22a">
            <button class="box" id="sbbetting22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $sbbetting22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#sbbetting22{
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
                    echo "<style>#sbbetting22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting22count>=0.10 && $sbbetting22count<=0.20){
                    echo "<style>#sbbetting22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting22count>0.20){
                    echo "<style>#sbbetting22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting23" class="sbbetting23a">
            <button class="box" id="sbbetting23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $sbbetting23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#sbbetting23{
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
                    echo "<style>#sbbetting23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting23count>=0.10 && $sbbetting23count<=0.20){
                    echo "<style>#sbbetting23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting23count>0.20){
                    echo "<style>#sbbetting23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting24" class="sbbetting24a">
            <button class="box" id="sbbetting24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $sbbetting24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#sbbetting24{
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
                    echo "<style>#sbbetting24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting24count>=0.10 && $sbbetting24count<=0.20){
                    echo "<style>#sbbetting24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting24count>0.20){
                    echo "<style>#sbbetting24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting25" class="sbbetting25a">
            <button class="box" id="sbbetting25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $sbbetting25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#sbbetting25{
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
                    echo "<style>#sbbetting25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting25count>=0.10 && $sbbetting25count<=0.20){
                    echo "<style>#sbbetting25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting25count>0.20){
                    echo "<style>#sbbetting25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting26" class="sbbetting26a">
            <button class="box" id="sbbetting26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $sbbetting26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#sbbetting26{
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
                    echo "<style>#sbbetting26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting26count>=0.10 && $sbbetting26count<=0.20){
                    echo "<style>#sbbetting26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting26count>0.20){
                    echo "<style>#sbbetting26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting27" class="sbbetting27a">
            <button class="box" id="sbbetting27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $sbbetting27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#sbbetting27{
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
                    echo "<style>#sbbetting27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting27count>=0.10 && $sbbetting27count<=0.20){
                    echo "<style>#sbbetting27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting27count>0.20){
                    echo "<style>#sbbetting27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting28" class="sbbetting28a">
            <button class="box" id="sbbetting28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $sbbetting28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#sbbetting28{
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
                    echo "<style>#sbbetting28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting28count>=0.10 && $sbbetting28count<=0.20){
                    echo "<style>#sbbetting28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting28count>0.20){
                    echo "<style>#sbbetting28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting29" class="sbbetting29a">
            <button class="box" id="sbbetting29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $sbbetting29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#sbbetting29{
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
                    echo "<style>#sbbetting29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting29count>=0.10 && $sbbetting29count<=0.20){
                    echo "<style>#sbbetting29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting29count>0.20){
                    echo "<style>#sbbetting29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting30" class="sbbetting30a">
            <button class="box" id="sbbetting30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $sbbetting30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#sbbetting30{
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
                    echo "<style>#sbbetting30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting30count>=0.10 && $sbbetting30count<=0.20){
                    echo "<style>#sbbetting30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting30count>0.20){
                    echo "<style>#sbbetting30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/sbbetting31" class="sbbetting31a">
            <button class="box" id="sbbetting31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $sbbetting31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#sbbetting31{
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
                    echo "<style>#sbbetting31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .sbbetting31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#sbbetting31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($sbbetting31count>=0.10 && $sbbetting31count<=0.20){
                    echo "<style>#sbbetting31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($sbbetting31count>0.20){
                    echo "<style>#sbbetting31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expsbbetting">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofsbbettingprov=($sbbetting1count + $sbbetting2count + $sbbetting3count + $sbbetting4count + $sbbetting5count + $sbbetting6count + $sbbetting7count + $sbbetting8count + $sbbetting9count + $sbbetting10count + $sbbetting11count + $sbbetting12count + $sbbetting13count + $sbbetting14count + $sbbetting15count +  $sbbetting16count + $sbbetting17count + $sbbetting18count + $sbbetting19count + $sbbetting20count + $sbbetting21count + $sbbetting22count + $sbbetting23count + $sbbetting24count + $sbbetting25count + $sbbetting26count+ $sbbetting27count+ $sbbetting28count+ $sbbetting29count+ $sbbetting30count + $sbbetting31count);
            $sofsbbettinge = ($sumofsbbettingprov);
            if($sofsbbettinge == 0){
                $sofsbbettinge = 1;
            }


            $percofsbbettingprov = round(($sumofsbbettingprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofsbbettingprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofsbbettingprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/sbbettingjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/sbbettingfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/sbbettingmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/sbbettingapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/sbbettingmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/sbbettingjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/sbbettingjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/sbbettingaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/sbbettingsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/sbbettingoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/sbbettingnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/sbbettingdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/itsupport"> 
                <h1 class="productHeader">IT + Support - Issues in HH/MM: {{$sumitsupportnow}}</h1>
            </a>
            <div class="graph">
            <a href="/itsupport1" class="itsupport1a">
            <button class="box" id="itsupport1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $itsupport1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#itsupport1{
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
                    echo "<style>#itsupport1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport1count>=0.10 && $itsupport1count<=0.20){
                    echo "<style>#itsupport1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport1count>0.20){
                    echo "<style>#itsupport1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport2" class="itsupport2a">
            <button class="box" id="itsupport2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $itsupport2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#itsupport2{
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
                    echo "<style>#itsupport2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport2count>=0.10 && $itsupport2count<=0.20){
                    echo "<style>#itsupport2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport2count>0.20){
                    echo "<style>#itsupport2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport3" class="itsupport3a">
            <button class="box" id="itsupport3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $itsupport3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#itsupport3{
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
                    echo "<style>#itsupport3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport3count>=0.10 && $itsupport3count<=0.20){
                    echo "<style>#itsupport3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport3count>0.20){
                    echo "<style>#itsupport3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport4" class="itsupport4a">
            <button class="box" id="itsupport4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $itsupport4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#itsupport4{
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
                    echo "<style>#itsupport4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport4count>=0.10 && $itsupport4count<=0.20){
                    echo "<style>#itsupport4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport4count>0.20){
                    echo "<style>#itsupport4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport5" class="itsupport5a">
            <button class="box" id="itsupport5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $itsupport5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#itsupport5{
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
                    echo "<style>#itsupport5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport5count>=0.10 && $itsupport5count<=0.20){
                    echo "<style>#itsupport5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport5count>0.20){
                    echo "<style>#itsupport5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport6" class="itsupport6a">
            <button class="box" id="itsupport6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $itsupport6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#itsupport6{
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
                    echo "<style>#itsupport6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport6count>=0.10 && $itsupport6count<=0.20){
                    echo "<style>#itsupport6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport6count>0.20){
                    echo "<style>#itsupport6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport7" class="itsupport7a">
            <button class="box" id="itsupport7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $itsupport7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#itsupport7{
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
                    echo "<style>#itsupport7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport7count>=0.10 && $itsupport7count<=0.20){
                    echo "<style>#itsupport7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport7count>0.20){
                    echo "<style>#itsupport7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport8" class="itsupport8a">
            <button class="box" id="itsupport8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $itsupport8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#itsupport8{
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
                    echo "<style>#itsupport8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport8count>=0.10 && $itsupport8count<=0.20){
                    echo "<style>#itsupport8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport8count>0.20){
                    echo "<style>#itsupport8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport9" class="itsupport9a">
            <button class="box" id="itsupport9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $itsupport9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#itsupport9{
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
                    echo "<style>#itsupport9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport9count>=0.10 && $itsupport9count<=0.20){
                    echo "<style>#itsupport9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport9count>0.20){
                    echo "<style>#itsupport9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport10" class="itsupport10a">
            <button class="box" id="itsupport10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $itsupport10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#itsupport10{
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
                    echo "<style>#itsupport10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport10count>=0.10 && $itsupport10count<=0.20){
                    echo "<style>#itsupport10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport10count>0.20){
                    echo "<style>#itsupport10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport11" class="itsupport11a">
            <button class="box" id="itsupport11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $itsupport11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#itsupport11{
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
                    echo "<style>#itsupport11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport11count>=0.10 && $itsupport11count<=0.20){
                    echo "<style>#itsupport11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport11count>0.20){
                    echo "<style>#itsupport11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport12" class="itsupport12a">
            <button class="box" id="itsupport12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $itsupport12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#itsupport12{
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
                    echo "<style>#itsupport12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport12count>=0.10 && $itsupport12count<=0.20){
                    echo "<style>#itsupport12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport12count>0.20){
                    echo "<style>#itsupport12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport13" class="itsupport13a">
            <button class="box" id="itsupport13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $itsupport13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#itsupport13{
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
                    echo "<style>#itsupport13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport13count>=0.10 && $itsupport13count<=0.20){
                    echo "<style>#itsupport13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport13count>0.20){
                    echo "<style>#itsupport13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport14" class="itsupport14a">
            <button class="box" id="itsupport14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $itsupport14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#itsupport14{
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
                    echo "<style>#itsupport14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport14count>=0.10 && $itsupport14count<=0.20){
                    echo "<style>#itsupport14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport14count>0.20){
                    echo "<style>#itsupport14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport15" class="itsupport15a">
            <button class="box" id="itsupport15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $itsupport15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#itsupport15{
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
                    echo "<style>#itsupport15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport15count>=0.10 && $itsupport15count<=0.20){
                    echo "<style>#itsupport15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport15count>0.20){
                    echo "<style>#itsupport15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport16" class="itsupport16a">
            <button class="box" id="itsupport16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $itsupport16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#itsupport16{
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
                    echo "<style>#itsupport16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport16count>=0.10 && $itsupport16count<=0.20){
                    echo "<style>#itsupport16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport16count>0.20){
                    echo "<style>#itsupport16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport17" class="itsupport17a">
            <button class="box" id="itsupport17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $itsupport17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#itsupport17{
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
                    echo "<style>#itsupport17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport17count>=0.10 && $itsupport17count<=0.20){
                    echo "<style>#itsupport17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport17count>0.20){
                    echo "<style>#itsupport17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport18" class="itsupport18a">
            <button class="box" id="itsupport18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $itsupport18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#itsupport18{
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
                    echo "<style>#itsupport18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport18count>=0.10 && $itsupport18count<=0.20){
                    echo "<style>#itsupport18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport18count>0.20){
                    echo "<style>#itsupport18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport19" class="itsupport19a">
            <button class="box" id="itsupport19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $itsupport19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#itsupport19{
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
                    echo "<style>#itsupport19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport19count>=0.10 && $itsupport19count<=0.20){
                    echo "<style>#itsupport19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport19count>0.20){
                    echo "<style>#itsupport19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport20" class="itsupport20a">
            <button class="box" id="itsupport20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $itsupport20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#itsupport20{
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
                    echo "<style>#itsupport20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport20count>=0.10 && $itsupport20count<=0.20){
                    echo "<style>#itsupport20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport20count>0.20){
                    echo "<style>#itsupport20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport21" class="itsupport21a">
            <button class="box" id="itsupport21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $itsupport21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#itsupport21{
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
                    echo "<style>#itsupport21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport21count>=0.10 && $itsupport21count<=0.20){
                    echo "<style>#itsupport21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport21count>0.20){
                    echo "<style>#itsupport21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport22" class="itsupport22a">
            <button class="box" id="itsupport22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $itsupport22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#itsupport22{
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
                    echo "<style>#itsupport22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport22count>=0.10 && $itsupport22count<=0.20){
                    echo "<style>#itsupport22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport22count>0.20){
                    echo "<style>#itsupport22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport23" class="itsupport23a">
            <button class="box" id="itsupport23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $itsupport23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#itsupport23{
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
                    echo "<style>#itsupport23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport23count>=0.10 && $itsupport23count<=0.20){
                    echo "<style>#itsupport23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport23count>0.20){
                    echo "<style>#itsupport23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport24" class="itsupport24a">
            <button class="box" id="itsupport24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $itsupport24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#itsupport24{
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
                    echo "<style>#itsupport24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport24count>=0.10 && $itsupport24count<=0.20){
                    echo "<style>#itsupport24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport24count>0.20){
                    echo "<style>#itsupport24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport25" class="itsupport25a">
            <button class="box" id="itsupport25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $itsupport25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#itsupport25{
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
                    echo "<style>#itsupport25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport25count>=0.10 && $itsupport25count<=0.20){
                    echo "<style>#itsupport25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport25count>0.20){
                    echo "<style>#itsupport25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport26" class="itsupport26a">
            <button class="box" id="itsupport26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $itsupport26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#itsupport26{
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
                    echo "<style>#itsupport26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport26count>=0.10 && $itsupport26count<=0.20){
                    echo "<style>#itsupport26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport26count>0.20){
                    echo "<style>#itsupport26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport27" class="itsupport27a">
            <button class="box" id="itsupport27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $itsupport27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#itsupport27{
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
                    echo "<style>#itsupport27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport27count>=0.10 && $itsupport27count<=0.20){
                    echo "<style>#itsupport27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport27count>0.20){
                    echo "<style>#itsupport27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport28" class="itsupport28a">
            <button class="box" id="itsupport28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $itsupport28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#itsupport28{
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
                    echo "<style>#itsupport28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport28count>=0.10 && $itsupport28count<=0.20){
                    echo "<style>#itsupport28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport28count>0.20){
                    echo "<style>#itsupport28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport29" class="itsupport29a">
            <button class="box" id="itsupport29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $itsupport29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#itsupport29{
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
                    echo "<style>#itsupport29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport29count>=0.10 && $itsupport29count<=0.20){
                    echo "<style>#itsupport29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport29count>0.20){
                    echo "<style>#itsupport29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport30" class="itsupport30a">
            <button class="box" id="itsupport30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $itsupport30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#itsupport30{
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
                    echo "<style>#itsupport30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport30count>=0.10 && $itsupport30count<=0.20){
                    echo "<style>#itsupport30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport30count>0.20){
                    echo "<style>#itsupport30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/itsupport31" class="itsupport31a">
            <button class="box" id="itsupport31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $itsupport31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#itsupport31{
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
                    echo "<style>#itsupport31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .itsupport31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#itsupport31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($itsupport31count>=0.10 && $itsupport31count<=0.20){
                    echo "<style>#itsupport31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($itsupport31count>0.20){
                    echo "<style>#itsupport31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expitsupport">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofitsupportprov=($itsupport1count + $itsupport2count + $itsupport3count + $itsupport4count + $itsupport5count + $itsupport6count + $itsupport7count + $itsupport8count + $itsupport9count + $itsupport10count + $itsupport11count + $itsupport12count + $itsupport13count + $itsupport14count + $itsupport15count +  $itsupport16count + $itsupport17count + $itsupport18count + $itsupport19count + $itsupport20count + $itsupport21count + $itsupport22count + $itsupport23count + $itsupport24count + $itsupport25count + $itsupport26count+ $itsupport27count+ $itsupport28count+ $itsupport29count+ $itsupport30count + $itsupport31count);
            $sofitsupporte = ($sumofitsupportprov);
            if($sofitsupporte == 0){
                $sofitsupporte = 1;
            }


            $percofitsupportprov = round(($sumofitsupportprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofitsupportprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofitsupportprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/itsupportjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/itsupportfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/itsupportmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/itsupportapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/itsupportmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/itsupportjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/itsupportjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/itsupportaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/itsupportsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/itsupportoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/itsupportnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/itsupportdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/middle"> 
                <h1 class="productHeader">Middle - Issues in HH/MM: {{$summiddlenow}}</h1>
            </a> 
            <div class="graph">
            <a href="/middle1" class="middle1a">
            <button class="box" id="middle1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $middle1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#middle1{
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
                    echo "<style>#middle1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle1count>=0.10 && $middle1count<=0.20){
                    echo "<style>#middle1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle1count>0.20){
                    echo "<style>#middle1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle2" class="middle2a">
            <button class="box" id="middle2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $middle2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#middle2{
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
                    echo "<style>#middle2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle2count>=0.10 && $middle2count<=0.20){
                    echo "<style>#middle2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle2count>0.20){
                    echo "<style>#middle2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle3" class="middle3a">
            <button class="box" id="middle3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $middle3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#middle3{
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
                    echo "<style>#middle3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle3count>=0.10 && $middle3count<=0.20){
                    echo "<style>#middle3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle3count>0.20){
                    echo "<style>#middle3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle4" class="middle4a">
            <button class="box" id="middle4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $middle4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#middle4{
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
                    echo "<style>#middle4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle4count>=0.10 && $middle4count<=0.20){
                    echo "<style>#middle4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle4count>0.20){
                    echo "<style>#middle4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle5" class="middle5a">
            <button class="box" id="middle5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $middle5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#middle5{
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
                    echo "<style>#middle5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle5count>=0.10 && $middle5count<=0.20){
                    echo "<style>#middle5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle5count>0.20){
                    echo "<style>#middle5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle6" class="middle6a">
            <button class="box" id="middle6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $middle6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#middle6{
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
                    echo "<style>#middle6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle6count>=0.10 && $middle6count<=0.20){
                    echo "<style>#middle6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle6count>0.20){
                    echo "<style>#middle6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle7" class="middle7a">
            <button class="box" id="middle7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-07 Problem in HH/MM: {{ $middle7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#middle7{
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
                    echo "<style>#middle7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle7count>=0.10 && $middle7count<=0.20){
                    echo "<style>#middle7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle7count>0.20){
                    echo "<style>#middle7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle8" class="middle8a">
            <button class="box" id="middle8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $middle8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#middle8{
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
                    echo "<style>#middle8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle8count>=0.10 && $middle8count<=0.20){
                    echo "<style>#middle8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle8count>0.20){
                    echo "<style>#middle8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle9" class="middle9a">
            <button class="box" id="middle9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $middle9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#middle9{
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
                    echo "<style>#middle9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle9count>=0.10 && $middle9count<=0.20){
                    echo "<style>#middle9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle9count>0.20){
                    echo "<style>#middle9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle10" class="middle10a">
            <button class="box" id="middle10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $middle10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#middle10{
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
                    echo "<style>#middle10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle10count>=0.10 && $middle10count<=0.20){
                    echo "<style>#middle10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle10count>0.20){
                    echo "<style>#middle10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle11" class="middle11a">
            <button class="box" id="middle11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $middle11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#middle11{
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
                    echo "<style>#middle11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle11count>=0.10 && $middle11count<=0.20){
                    echo "<style>#middle11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle11count>0.20){
                    echo "<style>#middle11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle12" class="middle12a">
            <button class="box" id="middle12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $middle12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#middle12{
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
                    echo "<style>#middle12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle12count>=0.10 && $middle12count<=0.20){
                    echo "<style>#middle12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle12count>0.20){
                    echo "<style>#middle12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle13" class="middle13a">
            <button class="box" id="middle13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $middle13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#middle13{
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
                    echo "<style>#middle13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle13count>=0.10 && $middle13count<=0.20){
                    echo "<style>#middle13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle13count>0.20){
                    echo "<style>#middle13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle14" class="middle14a">
            <button class="box" id="middle14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $middle14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#middle14{
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
                    echo "<style>#middle14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle14count>=0.10 && $middle14count<=0.20){
                    echo "<style>#middle14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle14count>0.20){
                    echo "<style>#middle14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle15" class="middle15a">
            <button class="box" id="middle15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $middle15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#middle15{
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
                    echo "<style>#middle15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle15count>=0.10 && $middle15count<=0.20){
                    echo "<style>#middle15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle15count>0.20){
                    echo "<style>#middle15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle16" class="middle16a">
            <button class="box" id="middle16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $middle16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#middle16{
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
                    echo "<style>#middle16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle16count>=0.10 && $middle16count<=0.20){
                    echo "<style>#middle16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle16count>0.20){
                    echo "<style>#middle16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle17" class="middle17a">
            <button class="box" id="middle17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $middle17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#middle17{
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
                    echo "<style>#middle17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle17count>=0.10 && $middle17count<=0.20){
                    echo "<style>#middle17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle17count>0.20){
                    echo "<style>#middle17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle18" class="middle18a">
            <button class="box" id="middle18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $middle18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#middle18{
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
                    echo "<style>#middle18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle18count>=0.10 && $middle18count<=0.20){
                    echo "<style>#middle18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle18count>0.20){
                    echo "<style>#middle18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle19" class="middle19a">
            <button class="box" id="middle19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $middle19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#middle19{
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
                    echo "<style>#middle19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle19count>=0.10 && $middle19count<=0.20){
                    echo "<style>#middle19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle19count>0.20){
                    echo "<style>#middle19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle20" class="middle20a">
            <button class="box" id="middle20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $middle20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#middle20{
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
                    echo "<style>#middle20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle20count>=0.10 && $middle20count<=0.20){
                    echo "<style>#middle20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle20count>0.20){
                    echo "<style>#middle20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle21" class="middle21a">
            <button class="box" id="middle21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $middle21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#middle21{
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
                    echo "<style>#middle21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle21count>=0.10 && $middle21count<=0.20){
                    echo "<style>#middle21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle21count>0.20){
                    echo "<style>#middle21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle22" class="middle22a">
            <button class="box" id="middle22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $middle22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#middle22{
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
                    echo "<style>#middle22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle22count>=0.10 && $middle22count<=0.20){
                    echo "<style>#middle22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle22count>0.20){
                    echo "<style>#middle22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle23" class="middle23a">
            <button class="box" id="middle23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $middle23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#middle23{
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
                    echo "<style>#middle23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle23count>=0.10 && $middle23count<=0.20){
                    echo "<style>#middle23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle23count>0.20){
                    echo "<style>#middle23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle24" class="middle24a">
            <button class="box" id="middle24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $middle24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#middle24{
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
                    echo "<style>#middle24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle24count>=0.10 && $middle24count<=0.20){
                    echo "<style>#middle24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle24count>0.20){
                    echo "<style>#middle24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle25" class="middle25a">
            <button class="box" id="middle25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $middle25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#middle25{
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
                    echo "<style>#middle25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle25count>=0.10 && $middle25count<=0.20){
                    echo "<style>#middle25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle25count>0.20){
                    echo "<style>#middle25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle26" class="middle26a">
            <button class="box" id="middle26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $middle26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#middle26{
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
                    echo "<style>#middle26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle26count>=0.10 && $middle26count<=0.20){
                    echo "<style>#middle26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle26count>0.20){
                    echo "<style>#middle26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle27" class="middle27a">
            <button class="box" id="middle27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $middle27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#middle27{
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
                    echo "<style>#middle27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle27count>=0.10 && $middle27count<=0.20){
                    echo "<style>#middle27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle27count>0.20){
                    echo "<style>#middle27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle28" class="middle28a">
            <button class="box" id="middle28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $middle28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#middle28{
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
                    echo "<style>#middle28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle28count>=0.10 && $middle28count<=0.20){
                    echo "<style>#middle28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle28count>0.20){
                    echo "<style>#middle28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle29" class="middle29a">
            <button class="box" id="middle29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $middle29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#middle29{
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
                    echo "<style>#middle29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle29count>=0.10 && $middle29count<=0.20){
                    echo "<style>#middle29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle29count>0.20){
                    echo "<style>#middle29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle30" class="middle30a">
            <button class="box" id="middle30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $middle30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#middle30{
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
                    echo "<style>#middle30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle30count>=0.10 && $middle30count<=0.20){
                    echo "<style>#middle30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle30count>0.20){
                    echo "<style>#middle30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/middle31" class="middle31a">
            <button class="box" id="middle31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $middle31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#middle31{
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
                    echo "<style>#middle31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .middle31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#middle31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($middle31count>=0.10 && $middle31count<=0.20){
                    echo "<style>#middle31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($middle31count>0.20){
                    echo "<style>#middle31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expmiddle">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofmiddleprov=($middle1count + $middle2count + $middle3count + $middle4count + $middle5count + $middle6count + $middle7count + $middle8count + $middle9count + $middle10count + $middle11count + $middle12count + $middle13count + $middle14count + $middle15count +  $middle16count + $middle17count + $middle18count + $middle19count + $middle20count + $middle21count + $middle22count + $middle23count + $middle24count + $middle25count + $middle26count+ $middle27count+ $middle28count+ $middle29count+ $middle30count + $middle31count);
            $sofmiddlee = ($sumofmiddleprov);
            if($sofmiddlee == 0){
                $sofmiddlee = 1;
            }


            $percofmiddleprov = round(($sumofmiddleprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofmiddleprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofmiddleprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/middlejan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/middlefeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/middlemar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/middleapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/middlemay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/middlejun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/middlejul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/middleaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/middlesep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/middleoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/middlenov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/middledec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/mostof"> 
                <h1 class="productHeader">Most of - Issues in HH/MM: {{$summostofnow}}</h1>
            </a>
            <div class="graph">
            <a href="/mostof1" class="mostof1a">
            <button class="box" id="mostof1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $mostof1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#mostof1{
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
                    echo "<style>#mostof1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof1count>=0.10 && $mostof1count<=0.20){
                    echo "<style>#mostof1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof1count>0.20){
                    echo "<style>#mostof1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof2" class="mostof2a">
            <button class="box" id="mostof2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-02 Problem in HH/MM: {{ $mostof2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#mostof2{
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
                    echo "<style>#mostof2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof2count>=0.10 && $mostof2count<=0.20){
                    echo "<style>#mostof2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof2count>0.20){
                    echo "<style>#mostof2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof3" class="mostof3a">
            <button class="box" id="mostof3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-03 Problem in HH/MM: {{ $mostof3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#mostof3{
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
                    echo "<style>#mostof3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof3count>=0.10 && $mostof3count<=0.20){
                    echo "<style>#mostof3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof3count>0.20){
                    echo "<style>#mostof3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof4" class="mostof4a">
            <button class="box" id="mostof4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-04 Problem in HH/MM: {{ $mostof4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#mostof4{
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
                    echo "<style>#mostof4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof4count>=0.10 && $mostof4count<=0.20){
                    echo "<style>#mostof4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof4count>0.20){
                    echo "<style>#mostof4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof5" class="mostof5a">
            <button class="box" id="mostof5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-05 Problem in HH/MM: {{ $mostof5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#mostof5{
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
                    echo "<style>#mostof5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof5count>=0.10 && $mostof5count<=0.20){
                    echo "<style>#mostof5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof5count>0.20){
                    echo "<style>#mostof5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof6" class="mostof6a">
            <button class="box" id="mostof6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-06 Problem in HH/MM: {{ $mostof6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#mostof6{
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
                    echo "<style>#mostof6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof6count>=0.10 && $mostof6count<=0.20){
                    echo "<style>#mostof6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof6count>0.20){
                    echo "<style>#mostof6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof7" class="mostof7a">
            <button class="box" id="mostof7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">  {{$lst}}-07 Problem in HH/MM: {{ $mostof7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#mostof7{
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
                    echo "<style>#mostof7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof7count>=0.10 && $mostof7count<=0.20){
                    echo "<style>#mostof7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof7count>0.20){
                    echo "<style>#mostof7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof8" class="mostof8a">
            <button class="box" id="mostof8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-08 Problem in HH/MM: {{ $mostof8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#mostof8{
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
                    echo "<style>#mostof8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof8count>=0.10 && $mostof8count<=0.20){
                    echo "<style>#mostof8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof8count>0.20){
                    echo "<style>#mostof8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof9" class="mostof9a">
            <button class="box" id="mostof9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-09 Problem in HH/MM: {{ $mostof9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#mostof9{
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
                    echo "<style>#mostof9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof9count>=0.10 && $mostof9count<=0.20){
                    echo "<style>#mostof9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof9count>0.20){
                    echo "<style>#mostof9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof10" class="mostof10a">
            <button class="box" id="mostof10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-10 Problem in HH/MM: {{ $mostof10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#mostof10{
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
                    echo "<style>#mostof10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof10count>=0.10 && $mostof10count<=0.20){
                    echo "<style>#mostof10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof10count>0.20){
                    echo "<style>#mostof10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof11" class="mostof11a">
            <button class="box" id="mostof11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-11 Problem in HH/MM: {{ $mostof11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#mostof11{
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
                    echo "<style>#mostof11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof11count>=0.10 && $mostof11count<=0.20){
                    echo "<style>#mostof11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof11count>0.20){
                    echo "<style>#mostof11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof12" class="mostof12a">
            <button class="box" id="mostof12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-12 Problem in HH/MM: {{ $mostof12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#mostof12{
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
                    echo "<style>#mostof12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof12count>=0.10 && $mostof12count<=0.20){
                    echo "<style>#mostof12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof12count>0.20){
                    echo "<style>#mostof12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof13" class="mostof13a">
            <button class="box" id="mostof13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-13 Problem in HH/MM: {{ $mostof13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#mostof13{
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
                    echo "<style>#mostof13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof13count>=0.10 && $mostof13count<=0.20){
                    echo "<style>#mostof13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof13count>0.20){
                    echo "<style>#mostof13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof14" class="mostof14a">
            <button class="box" id="mostof14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-14 Problem in HH/MM: {{ $mostof14count }} </span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#mostof14{
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
                    echo "<style>#mostof14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof14count>=0.10 && $mostof14count<=0.20){
                    echo "<style>#mostof14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof14count>0.20){
                    echo "<style>#mostof14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof15" class="mostof15a">
            <button class="box" id="mostof15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-15 Problem in HH/MM: {{ $mostof15count }} </span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#mostof15{
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
                    echo "<style>#mostof15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof15count>=0.10 && $mostof15count<=0.20){
                    echo "<style>#mostof15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof15count>0.20){
                    echo "<style>#mostof15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof16" class="mostof16a">
            <button class="box" id="mostof16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-16 Problem in HH/MM: {{ $mostof16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#mostof16{
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
                    echo "<style>#mostof16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof16count>=0.10 && $mostof16count<=0.20){
                    echo "<style>#mostof16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof16count>0.20){
                    echo "<style>#mostof16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof17" class="mostof17a">
            <button class="box" id="mostof17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-17 Problem in HH/MM: {{ $mostof17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#mostof17{
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
                    echo "<style>#mostof17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof17count>=0.10 && $mostof17count<=0.20){
                    echo "<style>#mostof17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof17count>0.20){
                    echo "<style>#mostof17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof18" class="mostof18a">
            <button class="box" id="mostof18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-18 Problem in HH/MM: {{ $mostof18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#mostof18{
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
                    echo "<style>#mostof18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof18count>=0.10 && $mostof18count<=0.20){
                    echo "<style>#mostof18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof18count>0.20){
                    echo "<style>#mostof18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof19" class="mostof19a">
            <button class="box" id="mostof19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-19 Problem in HH/MM: {{ $mostof19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#mostof19{
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
                    echo "<style>#mostof19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof19count>=0.10 && $mostof19count<=0.20){
                    echo "<style>#mostof19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof19count>0.20){
                    echo "<style>#mostof19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof20" class="mostof20a">
            <button class="box" id="mostof20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-20 Problem in HH/MM: {{ $mostof20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#mostof20{
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
                    echo "<style>#mostof20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof20count>=0.10 && $mostof20count<=0.20){
                    echo "<style>#mostof20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof20count>0.20){
                    echo "<style>#mostof20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof21" class="mostof21a">
            <button class="box" id="mostof21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-21 Problem in HH/MM: {{ $mostof21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#mostof21{
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
                    echo "<style>#mostof21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof21count>=0.10 && $mostof21count<=0.20){
                    echo "<style>#mostof21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof21count>0.20){
                    echo "<style>#mostof21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof22" class="mostof22a">
            <button class="box" id="mostof22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-22 Problem in HH/MM: {{ $mostof22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#mostof22{
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
                    echo "<style>#mostof22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof22count>=0.10 && $mostof22count<=0.20){
                    echo "<style>#mostof22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof22count>0.20){
                    echo "<style>#mostof22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof23" class="mostof23a">
            <button class="box" id="mostof23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-23 Problem in HH/MM: {{ $mostof23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#mostof23{
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
                    echo "<style>#mostof23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof23count>=0.10 && $mostof23count<=0.20){
                    echo "<style>#mostof23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof23count>0.20){
                    echo "<style>#mostof23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof24" class="mostof24a">
            <button class="box" id="mostof24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-24 Problem in HH/MM: {{ $mostof24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#mostof24{
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
                    echo "<style>#mostof24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof24count>=0.10 && $mostof24count<=0.20){
                    echo "<style>#mostof24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof24count>0.20){
                    echo "<style>#mostof24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof25" class="mostof25a">
            <button class="box" id="mostof25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-25 Problem in HH/MM: {{ $mostof25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#mostof25{
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
                    echo "<style>#mostof25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof25count>=0.10 && $mostof25count<=0.20){
                    echo "<style>#mostof25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof25count>0.20){
                    echo "<style>#mostof25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof26" class="mostof26a">
            <button class="box" id="mostof26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-26 Problem in HH/MM: {{ $mostof26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#mostof26{
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
                    echo "<style>#mostof26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof26count>=0.10 && $mostof26count<=0.20){
                    echo "<style>#mostof26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof26count>0.20){
                    echo "<style>#mostof26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof27" class="mostof27a">
            <button class="box" id="mostof27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-27 Problem in HH/MM: {{ $mostof27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#mostof27{
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
                    echo "<style>#mostof27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof27count>=0.10 && $mostof27count<=0.20){
                    echo "<style>#mostof27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof27count>0.20){
                    echo "<style>#mostof27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof28" class="mostof28a">
            <button class="box" id="mostof28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-28 Problem in HH/MM: {{ $mostof28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#mostof28{
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
                    echo "<style>#mostof28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof28count>=0.10 && $mostof28count<=0.20){
                    echo "<style>#mostof28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof28count>0.20){
                    echo "<style>#mostof28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof29" class="mostof29a">
            <button class="box" id="mostof29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-29 Problem in HH/MM: {{ $mostof29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#mostof29{
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
                    echo "<style>#mostof29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof29count>=0.10 && $mostof29count<=0.20){
                    echo "<style>#mostof29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof29count>0.20){
                    echo "<style>#mostof29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof30" class="mostof30a">
            <button class="box" id="mostof30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-30 Problem in HH/MM: {{ $mostof30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#mostof30{
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
                    echo "<style>#mostof30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof30count>=0.10 && $mostof30count<=0.20){
                    echo "<style>#mostof30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof30count>0.20){
                    echo "<style>#mostof30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/mostof31" class="mostof31a">
            <button class="box" id="mostof31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-31 Problem in HH/MM: {{ $mostof31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#mostof31{
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
                    echo "<style>#mostof31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .mostof31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#mostof31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($mostof31count>=0.10 && $mostof31count<=0.20){
                    echo "<style>#mostof31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($mostof31count>0.20){
                    echo "<style>#mostof31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }   
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expmostof">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofmostofprov=($mostof1count + $mostof2count + $mostof3count + $mostof4count + $mostof5count + $mostof6count + $mostof7count + $mostof8count + $mostof9count + $mostof10count + $mostof11count + $mostof12count + $mostof13count + $mostof14count + $mostof15count +  $mostof16count + $mostof17count + $mostof18count + $mostof19count + $mostof20count + $mostof21count + $mostof22count + $mostof23count + $mostof24count + $mostof25count + $mostof26count+ $mostof27count+ $mostof28count+ $mostof29count+ $mostof30count + $mostof31count);
            $sofmostofe = ($sumofmostofprov);
            if($sofmostofe == 0){
                $sofmostofe = 1;
            }


            $percofmostofprov = round(($sumofmostofprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofmostofprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofmostofprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                <a href="/mostofjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/mostoffeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/mostofmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/mostofapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/mostofmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/mostofjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/mostofjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/mostofaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/mostofsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/mostofoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/mostofnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/mostofdec">
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
