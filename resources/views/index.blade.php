<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <title>Monitoring Banks/Ecommerce</title>
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
        <button class="register_button">Login/Register</button>
    </form><br>

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
            <button class="banksEcommerce" style="background-color: #85CF9B; color: #152340;">Banks/Ecommerce</button>
        </a>
        <a href="/slot">
        <button class="slot">Slot(Casino, Sport)</button>
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
            <a class="provider_link" href="/bog">
                <h1 class="product1Header">GC (BOG) - Issues in HH/MM : {{$sumbognow}}</h1>
            </a>
            
            <div class="graph">
            <a href="/bog1" class="bog1a">
            <button class="box" id="bog1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $bog1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#bog1{
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
                    echo "<style>#bog1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog1count>=0.10 && $bog1count<=0.20){
                    echo "<style>#bog1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog1count>0.20){
                    echo "<style>#bog1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            
            <a href="/bog2" class="bog2a">
            <button class="box" id="bog2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $bog2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#bog2{
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
                    echo "<style>#bog2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog2a{
                            pointer-events: none;
                        }
                    </style>";
                }

                else{
                    echo "<style>#bog2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                      
                
                if ($bog2count>=0.10 && $bog2count<=0.20){
                    echo "<style>#bog2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog2count>0.20){
                    echo "<style>#bog2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog3" class="bog3a">
            <button class="box" id="bog3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $bog3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#bog3{
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
                    echo "<style>#bog3{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog3count>=0.10 && $bog3count<=0.20){
                    echo "<style>#bog3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog3count>0.20){
                    echo "<style>#bog3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                        
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog4" class="bog4a">
            <button class="box" id="bog4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $bog4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#bog4{
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
                    echo "<style>#bog4{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog4a{
                            pointer-events: none;

                        }
                    </style>";
                }
                else{
                    echo "<style>#bog4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog4count>=0.10 && $bog4count<=0.20){
                    echo "<style>#bog4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog4count>0.20){
                    echo "<style>#bog4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog5" class="bog5a">
            <button class="box" id="bog5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $bog5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#bog5{
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
                    echo "<style>#bog5{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog5count>=0.10 && $bog5count<=0.20){
                    echo "<style>#bog5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog5count>0.20){
                    echo "<style>#bog5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog6" class="bog6a">
            <button class="box" id="bog6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $bog6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#bog6{
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
                    echo "<style>#bog6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog6count>=0.10 && $bog6count<=0.20){
                    echo "<style>#bog6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog6count>0.20){
                    echo "<style>#bog6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog7" class="bog7a">
            <button class="box" id="bog7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $bog7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#bog7{
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
                    echo "<style>#bog7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog7count>=0.10 && $bog7count<=0.20){
                    echo "<style>#bog7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog7count>0.20){
                    echo "<style>#bog7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog8" class="bog8a">
            <button class="box" id="bog8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $bog8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#bog8{
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
                    echo "<style>#bog8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog8count>=0.10 && $bog8count<=0.20){
                    echo "<style>#bog8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog8count>0.20){
                    echo "<style>#bog8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog9" class="bog9a">
            <button class="box" id="bog9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $bog9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#bog9{
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
                    echo "<style>#bog9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog9count>=0.10 && $bog9count<=0.20){
                    echo "<style>#bog9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog9count>0.20){
                    echo "<style>#bog9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog10" class="bog10a">
            <button class="box" id="bog10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $bog10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#bog10{
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
                    echo "<style>#bog10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog10count>=0.10 && $bog10count<=0.20){
                    echo "<style>#bog10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog10count>0.20){
                    echo "<style>#bog10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog11" class="bog11a">
            <button class="box" id="bog11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $bog11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#bog11{
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
                    echo "<style>#bog11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog11count>=0.10 && $bog11count<=0.20){
                    echo "<style>#bog11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog11count>0.20){
                    echo "<style>#bog11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                    
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog12" class="bog12a">
            <button class="box" id="bog12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $bog12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#bog12{
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
                    echo "<style>#bog12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog12count>=0.10 && $bog12count<=0.20){
                    echo "<style>#bog12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog12count>0.20){
                    echo "<style>#bog12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog13" class="bog13a">
            <button class="box" id="bog13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $bog13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#bog13{
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
                    echo "<style>#bog13{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog13count>=0.10 && $bog13count<=0.20){
                    echo "<style>#bog13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog13count>0.20){
                    echo "<style>#bog13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog14" class="bog14a">
            <button class="box" id="bog14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $bog14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#bog14{
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
                    echo "<style>#bog14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog14count>=0.10 && $bog14count<=0.20){
                    echo "<style>#bog14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog14count>0.20){
                    echo "<style>#bog14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog15" class="bog15a">
            <button class="box" id="bog15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $bog15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#bog15{
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
                    echo "<style>#bog15{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog15count>=0.10 && $bog15count<=0.20){
                    echo "<style>#bog15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog15count>0.20){
                    echo "<style>#bog15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog16" class="bog16a">
                <button class="box" id="bog16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $bog16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#bog16{
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
                    echo "<style>#bog16{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog16count>=0.10 && $bog16count<=0.20){
                    echo "<style>#bog16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog16count>0.20){
                    echo "<style>#bog16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog17" class="bog17a">
            <button class="box" id="bog17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $bog17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#bog17{
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
                    echo "<style>#bog17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog17count>=0.10 && $bog17count<=0.20){
                    echo "<style>#bog17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog17count>0.20){
                    echo "<style>#bog17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog18" class="bog18a">
            <button class="box" id="bog18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $bog18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#bog18{
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
                    echo "<style>#bog18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog18count>=0.10 && $bog18count<=0.20){
                    echo "<style>#bog18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog18count>0.20){
                    echo "<style>#bog18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                        
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog19" class="bog19a">
            <button class="box" id="bog19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $bog19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#bog19{
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
                    echo "<style>#bog19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog19count>=0.10 && $bog19count<=0.20){
                    echo "<style>#bog19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog19count>0.20){
                    echo "<style>#bog19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog20" class="bog20a">
            <button class="box" id="bog20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $bog20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#bog20{
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
                    echo "<style>#bog20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
 
                if ($bog20count>=0.10 && $bog20count<=0.20){
                    echo "<style>#bog20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog20count>0.20){
                    echo "<style>#bog20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog21" class="bog21a">
            <button class="box" id="bog21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $bog21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#bog21{
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
                    echo "<style>#bog21{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog21count>=0.10 && $bog21count<=0.20){
                    echo "<style>#bog21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog21count>0.20){
                    echo "<style>#bog21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog22" class="bog22a">
            <button class="box" id="bog22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $bog22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#bog22{
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
                    echo "<style>#bog22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog22count>=0.10 && $bog22count<=0.20){
                    echo "<style>#bog22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog22count>0.20){
                    echo "<style>#bog22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog23" class="bog23a">
            <button class="box" id="bog23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $bog23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#bog23{
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
                    echo "<style>#bog23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog23count>=0.10 && $bog23count<=0.20){
                    echo "<style>#bog23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog23count>0.20){
                    echo "<style>#bog23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog24" class="bog24a">
            <button class="box" id="bog24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $bog24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#bog24{
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
                    echo "<style>#bog24{
                        background-color: gray;
                        pointer-events: none;
                        }
                        .bog24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog24count>=0.10 && $bog24count<=0.20){
                    echo "<style>#bog24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog24count>0.20){
                    echo "<style>#bog24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog25" class="bog25a">
            <button class="box" id="bog25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $bog25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#bog25{
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
                    echo "<style>#bog25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog25count>=0.10 && $bog25count<=0.20){
                    echo "<style>#bog25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog25count>0.20){
                    echo "<style>#bog25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog26" class="bog26a">
            <button class="box" id="bog26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $bog26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#bog26{
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
                    echo "<style>#bog26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog26count>=0.10 && $bog26count<=0.20){
                    echo "<style>#bog26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog26count>0.20){
                    echo "<style>#bog26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog27" class="bog27a">
            <button class="box" id="bog27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $bog27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#bog27{
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
                    echo "<style>#bog27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog27count>=0.10 && $bog27count<=0.20){
                    echo "<style>#bog27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog27count>0.20){
                    echo "<style>#bog27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                         
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog28" class="bog28a">
            <button class="box" id="bog28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $bog28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#bog28{
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
                    echo "<style>#bog28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog28count>=0.10 && $bog28count<=0.20){
                    echo "<style>#bog28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog28count>0.20){
                    echo "<style>#bog28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog29" class="bog29a">
            <button class="box" id="bog29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $bog29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#bog29{
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
                    echo "<style>#bog29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog29count>=0.10 && $bog29count<=0.20){
                    echo "<style>#bog29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog29count>0.20){
                    echo "<style>#bog29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                       
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog30" class="bog30a">
            <button class="box" id="bog30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $bog30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#bog30{
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
                    echo "<style>#bog30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog30count>=0.10 && $bog30count<=0.20){
                    echo "<style>#bog30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog30count>0.20){
                    echo "<style>#bog30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/bog31" class="bog31a">
            <button class="box" id="bog31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $bog31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#bog31{
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
                    echo "<style>#bog31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .bog31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#bog31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($bog31count>=0.10 && $bog31count<=0.20){
                    echo "<style>#bog31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($bog31count>0.20){
                    echo "<style>#bog31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                          
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expbog">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofbogprov=($bog1count + $bog2count + $bog3count + $bog4count + $bog5count + $bog6count + $bog7count + $bog8count + $bog9count + $bog10count + $bog11count + $bog12count + $bog13count + $bog14count + $bog15count +  $bog16count + $bog17count + $bog18count + $bog19count + $bog20count + $bog21count + $bog22count + $bog23count + $bog24count + $bog25count + $bog26count+ $bog27count+ $bog28count+ $bog29count+ $bog30count + $bog31count);
            $sofboge = ($sumofbogprov);
            if($sofboge == 0){
                $sofboge = 1;
            }


            $percofbogprov = round(($sumofbogprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofbogprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofbogprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            
            <br>
                    <a href="/bogjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/bogfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/bogmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/bogapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/bogmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/bogjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/bogjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/bogaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/bogsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/bogoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/bognov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/bogdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>     
                <hr>
            <br>
            <a class="provider_link" href="/tbc">
                <h1 class="productHeader">UFC(TBC) - Issues in HH/MM: {{$sumtbcnow}}</h1>
            </a>
            <div class="graph">
            <a href="/tbc1" class="tbc1a">
            <button class="box" id="tbc1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $tbc1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#tbc1{
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
                    echo "<style>#tbc1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc1count>=0.10 && $tbc1count<=0.20){
                    echo "<style>#tbc1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc1count>0.20){
                    echo "<style>#tbc1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc2" class="tbc2a">
            <button class="box" id="tbc2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $tbc2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#tbc2{
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
                    echo "<style>#tbc2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc2count>=0.10 && $tbc2count<=0.20){
                    echo "<style>#tbc2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc2count>0.20){
                    echo "<style>#tbc2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc3" class="tbc3a">
            <button class="box" id="tbc3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $tbc3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#tbc3{
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
                    echo "<style>#tbc3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc3count>=0.10 && $tbc3count<=0.20){
                    echo "<style>#tbc3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc3count>0.20){
                    echo "<style>#tbc3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc4" class="tbc4a">
            <button class="box" id="tbc4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $tbc4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#tbc4{
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
                    echo "<style>#tbc4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc4count>=0.10 && $tbc4count<=0.20){
                    echo "<style>#tbc4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc4count>0.20){
                    echo "<style>#tbc4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc5" class="tbc5a">
            <button class="box" id="tbc5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $tbc5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#tbc5{
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
                    echo "<style>#tbc5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc5count>=0.10 && $tbc5count<=0.20){
                    echo "<style>#tbc5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc5count>0.20){
                    echo "<style>#tbc5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc6" class="tbc6a">
            <button class="box" id="tbc6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $tbc6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#tbc6{
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
                    echo "<style>#tbc6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc6count>=0.10 && $tbc6count<=0.20){
                    echo "<style>#tbc6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc6count>0.20){
                    echo "<style>#tbc6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc7" class="tbc7a">
            <button class="box" id="tbc7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $tbc7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#tbc7{
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
                    echo "<style>#tbc7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc7count>=0.10 && $tbc7count<=0.20){
                    echo "<style>#tbc7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc7count>0.20){
                    echo "<style>#tbc7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc8" class="tbc8a">
            <button class="box" id="tbc8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $tbc8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#tbc8{
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
                    echo "<style>#tbc8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc8count>=0.10 && $tbc8count<=0.20){
                    echo "<style>#tbc8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc8count>0.20){
                    echo "<style>#tbc8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc9" class="tbc9a">
            <button class="box" id="tbc9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $tbc9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#tbc9{
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
                    echo "<style>#tbc9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc9count>=0.10 && $tbc9count<=0.20){
                    echo "<style>#tbc9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc9count>0.20){
                    echo "<style>#tbc9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc10" class="tbc10a">
            <button class="box" id="tbc10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $tbc10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#tbc10{
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
                    echo "<style>#tbc10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc10count>=0.10 && $tbc10count<=0.20){
                    echo "<style>#tbc10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc10count>0.20){
                    echo "<style>#tbc10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }              
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc11" class="tbc11a">
            <button class="box" id="tbc11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $tbc11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#tbc11{
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
                    echo "<style>#tbc11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc11count>=0.10 && $tbc11count<=0.20){
                    echo "<style>#tbc11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc11count>0.20){
                    echo "<style>#tbc11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc12" class="tbc12a">
            <button class="box" id="tbc12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $tbc12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#tbc12{
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
                    echo "<style>#tbc12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc12count>=0.10 && $tbc12count<=0.20){
                    echo "<style>#tbc12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc12count>0.20){
                    echo "<style>#tbc12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc13" class="tbc13a">
            <button class="box" id="tbc13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $tbc13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#tbc13{
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
                    echo "<style>#tbc13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc13count>=0.10 && $tbc13count<=0.20){
                    echo "<style>#tbc13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc13count>0.20){
                    echo "<style>#tbc13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc14" class="tbc14a">
            <button class="box" id="tbc14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $tbc14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#tbc14{
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
                    echo "<style>#tbc14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc14count>=0.10 && $tbc14count<=0.20){
                    echo "<style>#tbc14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc14count>0.20){
                    echo "<style>#tbc14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc15" class="tbc15a">
            <button class="box" id="tbc15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $tbc15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#tbc15{
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
                    echo "<style>#tbc15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc15count>=0.10 && $tbc15count<=0.20){
                    echo "<style>#tbc15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc15count>0.20){
                    echo "<style>#tbc15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc16" class="tbc16a">
            <button class="box" id="tbc16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $tbc16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#tbc16{
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
                    echo "<style>#tbc16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc16count>=0.10 && $tbc16count<=0.20){
                    echo "<style>#tbc16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc16count>0.20){
                    echo "<style>#tbc16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc17" class="tbc17a">
            <button class="box" id="tbc17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $tbc17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#tbc17{
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
                    echo "<style>#tbc17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc17count>=0.10 && $tbc17count<=0.20){
                    echo "<style>#tbc17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc17count>0.20){
                    echo "<style>#tbc17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc18" class="tbc18a">
            <button class="box" id="tbc18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $tbc18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#tbc18{
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
                    echo "<style>#tbc18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc18count>=0.10 && $tbc18count<=0.20){
                    echo "<style>#tbc18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc18count>0.20){
                    echo "<style>#tbc18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc19" class="tbc19a">
            <button class="box" id="tbc19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $tbc19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#tbc19{
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
                    echo "<style>#tbc19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc19count>=0.10 && $tbc19count<=0.20){
                    echo "<style>#tbc19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc19count>0.20){
                    echo "<style>#tbc19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc20" class="tbc20a">
            <button class="box" id="tbc20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $tbc20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#tbc20{
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
                    echo "<style>#tbc20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc20count>=0.10 && $tbc20count<=0.20){
                    echo "<style>#tbc20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc20count>0.20){
                    echo "<style>#tbc20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc21" class="tbc21a">
            <button class="box" id="tbc21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $tbc21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#tbc21{
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
                    echo "<style>#tbc21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc21count>=0.10 && $tbc21count<=0.20){
                    echo "<style>#tbc21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc21count>0.20){
                    echo "<style>#tbc21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc22" class="tbc22a">
            <button class="box" id="tbc22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $tbc22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#tbc22{
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
                    echo "<style>#tbc22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc22count>=0.10 && $tbc22count<=0.20){
                    echo "<style>#tbc22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc22count>0.20){
                    echo "<style>#tbc22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc23" class="tbc23a">
            <button class="box" id="tbc23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $tbc23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#tbc23{
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
                    echo "<style>#tbc23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc23count>=0.10 && $tbc23count<=0.20){
                    echo "<style>#tbc23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc23count>0.20){
                    echo "<style>#tbc23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc24" class="tbc24a">
            <button class="box" id="tbc24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $tbc24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#tbc24{
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
                    echo "<style>#tbc24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc24count>=0.10 && $tbc24count<=0.20){
                    echo "<style>#tbc24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc24count>0.20){
                    echo "<style>#tbc24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc25" class="tbc25a">
            <button class="box" id="tbc25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $tbc25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#tbc25{
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
                    echo "<style>#tbc25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc25count>=0.10 && $tbc25count<=0.20){
                    echo "<style>#tbc25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc25count>0.20){
                    echo "<style>#tbc25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc26" class="tbc26a">
            <button class="box" id="tbc26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $tbc26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#tbc26{
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
                    echo "<style>#tbc26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc26count>=0.10 && $tbc26count<=0.20){
                    echo "<style>#tbc26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc26count>0.20){
                    echo "<style>#tbc26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc27" class="tbc27a">
            <button class="box" id="tbc27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $tbc27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#tbc27{
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
                    echo "<style>#tbc27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc27count>=0.10 && $tbc27count<=0.20){
                    echo "<style>#tbc27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc27count>0.20){
                    echo "<style>#tbc27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc28" class="tbc28a">
            <button class="box" id="tbc28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $tbc28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#tbc28{
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
                    echo "<style>#tbc28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc28count>=0.10 && $tbc28count<=0.20){
                    echo "<style>#tbc28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc28count>0.20){
                    echo "<style>#tbc28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc29" class="tbc29a">
            <button class="box" id="tbc29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $tbc29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#tbc29{
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
                    echo "<style>#tbc29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc29count>=0.10 && $tbc29count<=0.20){
                    echo "<style>#tbc29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc29count>0.20){
                    echo "<style>#tbc29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc30" class="tbc30a">
            <button class="box" id="tbc30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $tbc30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#tbc30{
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
                    echo "<style>#tbc30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc30count>=0.10 && $tbc30count<=0.20){
                    echo "<style>#tbc30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc30count>0.20){
                    echo "<style>#tbc30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbc31" class="tbc31a">
            <button class="box" id="tbc31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $tbc31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#tbc31{
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
                    echo "<style>#tbc31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbc1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbc31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbc31count>=0.10 && $tbc31count<=0.20){
                    echo "<style>#tbc31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbc31count>0.20){
                    echo "<style>#tbc31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/exptbc">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumoftbcprov=($tbc1count + $tbc2count + $tbc3count + $tbc4count + $tbc5count + $tbc6count + $tbc7count + $tbc8count + $tbc9count + $tbc10count + $tbc11count + $tbc12count + $tbc13count + $tbc14count + $tbc15count +  $tbc16count + $tbc17count + $tbc18count + $tbc19count + $tbc20count + $tbc21count + $tbc22count + $tbc23count + $tbc24count + $tbc25count + $tbc26count+ $tbc27count+ $tbc28count+ $tbc29count+ $tbc30count + $tbc31count);
            $softbce = ($sumoftbcprov);
            if($softbce == 0){
                $softbce = 1;
            }


            $percoftbcprov = round(($sumoftbcprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percoftbcprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percoftbcprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            
            </div>
            <br> 
                    <a href="/tbcjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/tbcfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a>  
                    <a href="/tbcmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a>  
                    <a href="/tbcapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a>  
                    <a href="/tbcmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a>  
                    <a href="/tbcjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a>  
                    <a href="/tbcjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a>  
                    <a href="/tbcaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a>  
                    <a href="/tbcsep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a>  
                    <a href="/tbcoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a>  
                    <a href="/tbcnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a>  
                    <a href="/tbcdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a>  
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/oppa"> 
                <h1 class="productHeader">Nova(Oppa) - Issues in HH/MM: {{$sumoppanow}}</h1>
            </a>
            <div class="graph">
            <a href="/oppa1" class="oppa1a">
            <button class="box" id="oppa1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $oppa1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#oppa1{
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
                    echo "<style>#oppa1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa1count>=0.10 && $oppa1count<=0.20){
                    echo "<style>#oppa1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa1count>0.20){
                    echo "<style>#oppa1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa2" class="oppa2a">
            <button class="box" id="oppa2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $oppa2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#oppa2{
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
                    echo "<style>#oppa2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa2count>=0.10 && $oppa2count<=0.20){
                    echo "<style>#oppa2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa2count>0.20){
                    echo "<style>#oppa2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa3" class="oppa3a">
            <button class="box" id="oppa3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $oppa3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#oppa3{
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
                    echo "<style>#oppa3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa3count>=0.10 && $oppa3count<=0.20){
                    echo "<style>#oppa3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa3count>0.20){
                    echo "<style>#oppa3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa4" class="oppa4a">
            <button class="box" id="oppa4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $oppa4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#oppa4{
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
                    echo "<style>#oppa4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa4count>=0.10 && $oppa4count<=0.20){
                    echo "<style>#oppa4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa4count>0.20){
                    echo "<style>#oppa4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa5" class="oppa5a">
            <button class="box" id="oppa5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $oppa5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#oppa5{
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
                    echo "<style>#oppa5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa5count>=0.10 && $oppa5count<=0.20){
                    echo "<style>#oppa5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa5count>0.20){
                    echo "<style>#oppa5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa6" class="oppa6a">
            <button class="box" id="oppa6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $oppa6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#oppa6{
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
                    echo "<style>#oppa6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa6count>=0.10 && $oppa6count<=0.20){
                    echo "<style>#oppa6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa6count>0.20){
                    echo "<style>#oppa6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa7" class="oppa7a">
            <button class="box" id="oppa7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $oppa7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#oppa7{
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
                    echo "<style>#oppa7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa7count>=0.10 && $oppa7count<=0.20){
                    echo "<style>#oppa7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa7count>0.20){
                    echo "<style>#oppa7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa8" class="oppa8a">
            <button class="box" id="oppa8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $oppa8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#oppa8{
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
                    echo "<style>#oppa8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa8count>=0.10 && $oppa8count<=0.20){
                    echo "<style>#oppa8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa8count>0.20){
                    echo "<style>#oppa8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa9" class="oppa9a">
            <button class="box" id="oppa9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $oppa9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#oppa9{
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
                    echo "<style>#oppa9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa9count>=0.10 && $oppa9count<=0.20){
                    echo "<style>#oppa9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa9count>0.20){
                    echo "<style>#oppa9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa10" class="oppa10a">
            <button class="box" id="oppa10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $oppa10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#oppa10{
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
                    echo "<style>#oppa10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa10count>=0.10 && $oppa10count<=0.20){
                    echo "<style>#oppa10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa10count>0.20){
                    echo "<style>#oppa10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa11" class="oppa11a">
            <button class="box" id="oppa11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $oppa11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#oppa11{
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
                    echo "<style>#oppa11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa11count>=0.10 && $oppa11count<=0.20){
                    echo "<style>#oppa11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa11count>0.20){
                    echo "<style>#oppa11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa12" class="oppa12a">
            <button class="box" id="oppa12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $oppa12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#oppa12{
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
                    echo "<style>#oppa12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa12count>=0.10 && $oppa12count<=0.20){
                    echo "<style>#oppa12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa12count>0.20){
                    echo "<style>#oppa12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa13" class="oppa13a">
            <button class="box" id="oppa13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $oppa13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#oppa13{
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
                    echo "<style>#oppa13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa13count>=0.10 && $oppa13count<=0.20){
                    echo "<style>#oppa13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa13count>0.20){
                    echo "<style>#oppa13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa14" class="oppa14a">
            <button class="box" id="oppa14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $oppa14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#oppa14{
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
                    echo "<style>#oppa14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa14count>=0.10 && $oppa14count<=0.20){
                    echo "<style>#oppa14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa14count>0.20){
                    echo "<style>#oppa14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }                                
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa15" class="oppa15a">
            <button class="box" id="oppa15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $oppa15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#oppa15{
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
                    echo "<style>#oppa15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa15count>=0.10 && $oppa15count<=0.20){
                    echo "<style>#oppa15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa15count>0.20){
                    echo "<style>#oppa15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa16" class="oppa16a"> 
            <button class="box" id="oppa16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $oppa16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#oppa16{
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
                    echo "<style>#oppa16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa16count>=0.10 && $oppa16count<=0.20){
                    echo "<style>#oppa16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa16count>0.20){
                    echo "<style>#oppa16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa17" class="oppa17a">
            <button class="box" id="oppa17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $oppa17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#oppa17{
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
                    echo "<style>#oppa17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa17count>=0.10 && $oppa17count<=0.20){
                    echo "<style>#oppa17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa17count>0.20){
                    echo "<style>#oppa17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa18" class="oppa18a">
            <button class="box" id="oppa18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $oppa18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#oppa18{
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
                    echo "<style>#oppa18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa18count>=0.10 && $oppa18count<=0.20){
                    echo "<style>#oppa18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa18count>0.20){
                    echo "<style>#oppa18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa19" class="oppa19a">
            <button class="box" id="oppa19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $oppa19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#oppa19{
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
                    echo "<style>#oppa19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa19count>=0.10 && $oppa19count<=0.20){
                    echo "<style>#oppa19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa19count>0.20){
                    echo "<style>#oppa19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa20" class="oppa20a">
            <button class="box" id="oppa20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $oppa20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#oppa20{
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
                    echo "<style>#oppa20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa20count>=0.10 && $oppa20count<=0.20){
                    echo "<style>#oppa20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa20count>0.20){
                    echo "<style>#oppa20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa21" class="oppa21a">
            <button class="box" id="oppa21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $oppa21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#oppa21{
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
                    echo "<style>#oppa21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa21count>=0.10 && $oppa21count<=0.20){
                    echo "<style>#oppa21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa21count>0.20){
                    echo "<style>#oppa21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa22" class="oppa22a">
            <button class="box" id="oppa22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $oppa22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#oppa22{
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
                    echo "<style>#oppa22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa22count>=0.10 && $oppa22count<=0.20){
                    echo "<style>#oppa22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa22count>0.20){
                    echo "<style>#oppa22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }        
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa23" class="oppa23a">
            <button class="box" id="oppa23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $oppa23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#oppa23{
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
                    echo "<style>#oppa23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa23count>=0.10 && $oppa23count<=0.20){
                    echo "<style>#oppa23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa23count>0.20){
                    echo "<style>#oppa23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa24" class="oppa24a">
            <button class="box" id="oppa24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $oppa24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#oppa24{
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
                    echo "<style>#oppa24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa24count>=0.10 && $oppa24count<=0.20){
                    echo "<style>#oppa24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa24count>0.20){
                    echo "<style>#oppa24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa25" class="oppa25a">
            <button class="box" id="oppa25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $oppa25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#oppa25{
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
                    echo "<style>#oppa25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa25count>=0.10 && $oppa25count<=0.20){
                    echo "<style>#oppa25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa25count>0.20){
                    echo "<style>#oppa25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa26" class="oppa26a">
            <button class="box" id="oppa26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $oppa26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#oppa26{
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
                    echo "<style>#oppa26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa26count>=0.10 && $oppa26count<=0.20){
                    echo "<style>#oppa26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa26count>0.20){
                    echo "<style>#oppa26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa27" class="oppa27a">
            <button class="box" id="oppa27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $oppa27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#oppa27{
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
                    echo "<style>#oppa27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa27count>=0.10 && $oppa27count<=0.20){
                    echo "<style>#oppa27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa27count>0.20){
                    echo "<style>#oppa27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa28" class="oppa28a">
            <button class="box" id="oppa28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $oppa28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#oppa28{
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
                    echo "<style>#oppa28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa28count>=0.10 && $oppa28count<=0.20){
                    echo "<style>#oppa28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa28count>0.20){
                    echo "<style>#oppa28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa29" class="oppa29a">
            <button class="box" id="oppa29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $oppa29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#oppa29{
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
                    echo "<style>#oppa29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa29count>=0.10 && $oppa29count<=0.20){
                    echo "<style>#oppa29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa29count>0.20){
                    echo "<style>#oppa29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa30" class="oppa30a">
            <button class="box" id="oppa30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $oppa30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#oppa30{
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
                    echo "<style>#oppa30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa30count>=0.10 && $oppa30count<=0.20){
                    echo "<style>#oppa30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa30count>0.20){
                    echo "<style>#oppa30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/oppa31" class="oppa31a">
            <button class="box" id="oppa31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $oppa31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#oppa31{
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
                    echo "<style>#oppa31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .oppa31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#oppa31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($oppa31count>=0.10 && $oppa31count<=0.20){
                    echo "<style>#oppa31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($oppa31count>0.20){
                    echo "<style>#oppa31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expnova">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofoppaprov=($oppa1count + $oppa2count + $oppa3count + $oppa4count + $oppa5count + $oppa6count + $oppa7count + $oppa8count + $oppa9count + $oppa10count + $oppa11count + $oppa12count + $oppa13count + $oppa14count + $oppa15count +  $oppa16count + $oppa17count + $oppa18count + $oppa19count + $oppa20count + $oppa21count + $oppa22count + $oppa23count + $oppa24count + $oppa25count + $oppa26count+ $oppa27count+ $oppa28count+ $oppa29count+ $oppa30count + $oppa31count);
            $sofoppae = ($sumofoppaprov);
            if($sofoppae == 0){
                $sofoppae = 1;
            }


            $percofoppaprov = round(($sumofoppaprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofoppaprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofoppaprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/oppajan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/oppafeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a>  
                    <a href="/oppamar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/oppaapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/oppamay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/oppajun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/oppajul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/oppaaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/oppasep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/oppaoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/oppanov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/oppadec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/ipay"> 
                <h1 class="productHeader">Ipay - Issues in HH/MM: {{$sumipaynow}}</h1>
            </a> 
            <div class="graph">
            <a href="/ipay1" class="ipay1a">
            <button class="box" id="ipay1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $ipay1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#ipay1{
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
                    echo "<style>#ipay1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($ipay1count>=0.10 && $ipay1count<=0.20){
                    echo "<style>#ipay1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay1count>0.20){
                    echo "<style>#ipay1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }    
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay2" class="ipay2a">
            <button class="box" id="ipay2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $ipay2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#ipay2{
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
                    echo "<style>#ipay2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay2count>=0.10 && $ipay2count<=0.20){
                    echo "<style>#ipay2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay2count>0.20){
                    echo "<style>#ipay2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay3" class="ipay3a">
            <button class="box" id="ipay3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $ipay3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#ipay3{
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
                    echo "<style>#ipay3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay3count>=0.10 && $ipay3count<=0.20){
                    echo "<style>#ipay3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay3count>0.20){
                    echo "<style>#ipay3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay4" class="ipay4a">
            <button class="box" id="ipay4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $ipay4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#ipay4{
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
                    echo "<style>#ipay4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay4count>=0.10 && $ipay4count<=0.20){
                    echo "<style>#ipay4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay4count>0.20){
                    echo "<style>#ipay4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay5" class="ipay5a">
            <button class="box" id="ipay5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $ipay5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#ipay5{
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
                    echo "<style>#ipay5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay5count>=0.10 && $ipay5count<=0.20){
                    echo "<style>#ipay5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay5count>0.20){
                    echo "<style>#ipay5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay6" class="ipay6a">
            <button class="box" id="ipay6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $ipay6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#ipay6{
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
                    echo "<style>#ipay6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay6count>=0.10 && $ipay6count<=0.20){
                    echo "<style>#ipay6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay6count>0.20){
                    echo "<style>#ipay6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay7" class="ipay7a">
            <button class="box" id="ipay7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $ipay7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#ipay7{
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
                    echo "<style>#ipay7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay7count>=0.10 && $ipay7count<=0.20){
                    echo "<style>#ipay7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay7count>0.20){
                    echo "<style>#ipay7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay8" class="ipay8a">
            <button class="box" id="ipay8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $ipay8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#ipay8{
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
                    echo "<style>#ipay8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay8count>=0.10 && $ipay8count<=0.20){
                    echo "<style>#ipay8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay8count>0.20){
                    echo "<style>#ipay8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay9" class="ipay9a">
            <button class="box" id="ipay9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $ipay9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#ipay9{
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
                    echo "<style>#ipay9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay9count>=0.10 && $ipay9count<=0.20){
                    echo "<style>#ipay9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay9count>0.20){
                    echo "<style>#ipay9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay10" class="ipay10a">
            <button class="box" id="ipay10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $ipay10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#ipay10{
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
                    echo "<style>#ipay10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay10count>=0.10 && $ipay10count<=0.20){
                    echo "<style>#ipay10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay10count>0.20){
                    echo "<style>#ipay10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay11" class="ipay11a">
            <button class="box" id="ipay11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $ipay11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#ipay11{
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
                    echo "<style>#ipay11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay11count>=0.10 && $ipay11count<=0.20){
                    echo "<style>#ipay11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay11count>0.20){
                    echo "<style>#ipay11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay12" class="ipay12a">
            <button class="box" id="ipay12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $ipay12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#ipay12{
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
                    echo "<style>#ipay12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay12count>=0.10 && $ipay12count<=0.20){
                    echo "<style>#ipay12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay12count>0.20){
                    echo "<style>#ipay12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay13" class="ipay13a">
            <button class="box" id="ipay13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $ipay13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#ipay13{
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
                    echo "<style>#ipay13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay13count>=0.10 && $ipay13count<=0.20){
                    echo "<style>#ipay13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay13count>0.20){
                    echo "<style>#ipay13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay14" class="ipay14a">
            <button class="box" id="ipay14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $ipay14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#ipay14{
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
                    echo "<style>#ipay14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay14count>=0.10 && $ipay14count<=0.20){
                    echo "<style>#ipay14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay14count>0.20){
                    echo "<style>#ipay14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay15" class="ipay15a">
            <button class="box" id="ipay15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $ipay15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#ipay15{
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
                    echo "<style>#ipay15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay15count>=0.10 && $ipay15count<=0.20){
                    echo "<style>#ipay15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay15count>0.20){
                    echo "<style>#ipay15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay16" class="ipay16a">
            <button class="box" id="ipay16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $ipay16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#ipay16{
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
                    echo "<style>#ipay16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay16count>=0.10 && $ipay16count<=0.20){
                    echo "<style>#ipay16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay16count>0.20){
                    echo "<style>#ipay16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay17" class="ipay17a">
            <button class="box" id="ipay17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $ipay17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#ipay17{
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
                    echo "<style>#ipay17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay17count>=0.10 && $ipay17count<=0.20){
                    echo "<style>#ipay17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay17count>0.20){
                    echo "<style>#ipay17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay18" class="ipay18a">
            <button class="box" id="ipay18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $ipay18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#ipay18{
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
                    echo "<style>#ipay18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay18count>=0.10 && $ipay18count<=0.20){
                    echo "<style>#ipay18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay18count>0.20){
                    echo "<style>#ipay18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay19" class="ipay19a">
            <button class="box" id="ipay19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $ipay19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#ipay19{
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
                    echo "<style>#ipay19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay19count>=0.10 && $ipay19count<=0.20){
                    echo "<style>#ipay19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay19count>0.20){
                    echo "<style>#ipay19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay20" class="ipay20a">
            <button class="box" id="ipay20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $ipay20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#ipay20{
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
                    echo "<style>#ipay20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay20count>=0.10 && $ipay20count<=0.20){
                    echo "<style>#ipay20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay20count>0.20){
                    echo "<style>#ipay20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay21" class="ipay21a">
            <button class="box" id="ipay21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $ipay21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#ipay21{
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
                    echo "<style>#ipay21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay21count>=0.10 && $ipay21count<=0.20){
                    echo "<style>#ipay21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay21count>0.20){
                    echo "<style>#ipay21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay22" class="ipay22a">
            <button class="box" id="ipay22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $ipay22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#ipay22{
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
                    echo "<style>#ipay22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay22count>=0.10 && $ipay22count<=0.20){
                    echo "<style>#ipay22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay22count>0.20){
                    echo "<style>#ipay22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay23" class="ipay23a">
            <button class="box" id="ipay23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $ipay23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#ipay23{
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
                    echo "<style>#ipay23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay23count>=0.10 && $ipay23count<=0.20){
                    echo "<style>#ipay23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay23count>0.20){
                    echo "<style>#ipay23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay24" class="ipay24a">
            <button class="box" id="ipay24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $ipay24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#ipay24{
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
                    echo "<style>#ipay24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay24count>=0.10 && $ipay24count<=0.20){
                    echo "<style>#ipay24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay24count>0.20){
                    echo "<style>#ipay24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay25" class="ipay25a">
            <button class="box" id="ipay25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $ipay25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#ipay25{
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
                    echo "<style>#ipay25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay25count>=0.10 && $ipay25count<=0.20){
                    echo "<style>#ipay25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay25count>0.20){
                    echo "<style>#ipay25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay26" class="ipay26a">
            <button class="box" id="ipay26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $ipay26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#ipay26{
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
                    echo "<style>#ipay26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay26count>=0.10 && $ipay26count<=0.20){
                    echo "<style>#ipay26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay26count>0.20){
                    echo "<style>#ipay26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay27" class="ipay27a">
            <button class="box" id="ipay27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $ipay27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#ipay27{
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
                    echo "<style>#ipay27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                            
                if ($ipay27count>=0.10 && $ipay27count<=0.20){
                    echo "<style>#ipay27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay27count>0.20){
                    echo "<style>#ipay27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay28" class="ipay28a">
            <button class="box" id="ipay28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $ipay28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#ipay28{
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
                    echo "<style>#ipay28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay28count>=0.10 && $ipay28count<=0.20){
                    echo "<style>#ipay28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay28count>0.20){
                    echo "<style>#ipay28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay29" class="ipay29a">
            <button class="box" id="ipay29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $ipay29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#ipay29{
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
                    echo "<style>#ipay29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay29count>=0.10 && $ipay29count<=0.20){
                    echo "<style>#ipay29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay29count>0.20){
                    echo "<style>#ipay29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay30" class="ipay30a">
            <button class="box" id="ipay30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $ipay30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#ipay30{
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
                    echo "<style>#ipay30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay30count>=0.10 && $ipay30count<=0.20){
                    echo "<style>#ipay30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay30count>0.20){
                    echo "<style>#ipay30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/ipay31" class="ipay31a">
            <button class="box" id="ipay31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $ipay31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#ipay31{
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
                    echo "<style>#ipay31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .ipay31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#ipay31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($ipay31count>=0.10 && $ipay31count<=0.20){
                    echo "<style>#ipay31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($ipay31count>0.20){
                    echo "<style>#ipay31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expipay">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofipayprov=($ipay1count + $ipay2count + $ipay3count + $ipay4count + $ipay5count + $ipay6count + $ipay7count + $ipay8count + $ipay9count + $ipay10count + $ipay11count + $ipay12count + $ipay13count + $ipay14count + $ipay15count +  $ipay16count + $ipay17count + $ipay18count + $ipay19count + $ipay20count + $ipay21count + $ipay22count + $ipay23count + $ipay24count + $ipay25count + $ipay26count+ $ipay27count+ $ipay28count+ $ipay29count+ $ipay30count + $ipay31count);
            $sofipaye = ($sumofipayprov);
            if($sofipaye == 0){
                $sofipaye = 1;
            }


            $percofipayprov = round(($sumofipayprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofipayprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofipayprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/ipayjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/ipayfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/ipaymar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/ipayapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/ipaymay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/ipayjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/ipayjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/ipayaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/ipaysep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/ipayoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/ipaynov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/ipaydec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/tbcpay"> 
                <h1 class="productHeader">TBC Pay - Issues in HH/MM: {{$sumtbcpaynow}}</h1>
            </a>
            <div class="graph">
            <a href="/tbcpay1" class="tbcpay1a">
            <button class="box" id="tbcpay1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $tbcpay1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#tbcpay1{
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
                    echo "<style>#tbcpay1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay1count>=0.10 && $tbcpay1count<=0.20){
                    echo "<style>#tbcpay1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay1count>0.20){
                    echo "<style>#tbcpay1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay2" class="tbcpay2a">
            <button class="box" id="tbcpay2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $tbcpay2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#tbcpay2{
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
                    echo "<style>#tbcpay2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay2count>=0.10 && $tbcpay2count<=0.20){
                    echo "<style>#tbcpay2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay2count>0.20){
                    echo "<style>#tbcpay2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay3" class="tbcpay3a">
            <button class="box" id="tbcpay3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $tbcpay3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#tbcpay3{
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
                    echo "<style>#tbcpay3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay3count>=0.10 && $tbcpay3count<=0.20){
                    echo "<style>#tbcpay3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay3count>0.20){
                    echo "<style>#tbcpay3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay4" class="tbcpay4a">
            <button class="box" id="tbcpay4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $tbcpay4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#tbcpay4{
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
                    echo "<style>#tbcpay4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay4count>=0.10 && $tbcpay4count<=0.20){
                    echo "<style>#tbcpay4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay4count>0.20){
                    echo "<style>#tbcpay4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay5" class="tbcpay5a">
            <button class="box" id="tbcpay5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $tbcpay5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#tbcpay5{
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
                    echo "<style>#tbcpay5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay5count>=0.10 && $tbcpay5count<=0.20){
                    echo "<style>#tbcpay5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay5count>0.20){
                    echo "<style>#tbcpay5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay6" class="tbcpay6a">
            <button class="box" id="tbcpay6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $tbcpay6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#tbcpay6{
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
                    echo "<style>#tbcpay6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($tbcpay6count>=0.10 && $tbcpay6count<=0.20){
                    echo "<style>#tbcpay6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay6count>0.20){
                    echo "<style>#tbcpay6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay7" class="tbcpay7a">
            <button class="box" id="tbcpay7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $tbcpay7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#tbcpay7{
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
                    echo "<style>#tbcpay7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                       
                if ($tbcpay7count>=0.10 && $tbcpay7count<=0.20){
                    echo "<style>#tbcpay7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay7count>0.20){
                    echo "<style>#tbcpay7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay8" class="tbcpay8a"> 
            <button class="box" id="tbcpay8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $tbcpay8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#tbcpay8{
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
                    echo "<style>#tbcpay8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay8count>=0.10 && $tbcpay8count<=0.20){
                    echo "<style>#tbcpay8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay8count>0.20){
                    echo "<style>#tbcpay8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay9" class="tbcpay9a">
            <button class="box" id="tbcpay9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $tbcpay9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#tbcpay9{
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
                    echo "<style>#tbcpay9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay9count>=0.10 && $tbcpay9count<=0.20){
                    echo "<style>#tbcpay9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay9count>0.20){
                    echo "<style>#tbcpay9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay10" class="tbcpay10a">
            <button class="box" id="tbcpay10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $tbcpay10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#tbcpay10{
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
                    echo "<style>#tbcpay10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay10count>=0.10 && $tbcpay10count<=0.20){
                    echo "<style>#tbcpay10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay10count>0.20){
                    echo "<style>#tbcpay10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay11" class="tbcpay11a">
            <button class="box" id="tbcpay11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $tbcpay11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#tbcpay11{
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
                    echo "<style>#tbcpay11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay11count>=0.10 && $tbcpay11count<=0.20){
                    echo "<style>#tbcpay11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay11count>0.20){
                    echo "<style>#tbcpay11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay12" class="tbcpay12a">
            <button class="box" id="tbcpay12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $tbcpay12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#tbcpay12{
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
                    echo "<style>#tbcpay12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay12count>=0.10 && $tbcpay12count<=0.20){
                    echo "<style>#tbcpay12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay12count>0.20){
                    echo "<style>#tbcpay12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay13" class="tbcpay13a">
            <button class="box" id="tbcpay13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $tbcpay13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#tbcpay13{
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
                    echo "<style>#tbcpay13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay13count>=0.10 && $tbcpay13count<=0.20){
                    echo "<style>#tbcpay13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay13count>0.20){
                    echo "<style>#tbcpay13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay14" class="tbcpay14a">
            <button class="box" id="tbcpay14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $tbcpay14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#tbcpay14{
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
                    echo "<style>#tbcpay14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay14count>=0.10 && $tbcpay14count<=0.20){
                    echo "<style>#tbcpay14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay14count>0.20){
                    echo "<style>#tbcpay14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay15" class="tbcpay15a">
            <button class="box" id="tbcpay15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $tbcpay15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#tbcpay15{
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
                    echo "<style>#tbcpay15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay15count>=0.10 && $tbcpay15count<=0.20){
                    echo "<style>#tbcpay15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay15count>0.20){
                    echo "<style>#tbcpay15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay16" class="tbcpay16a">
            <button class="box" id="tbcpay16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $tbcpay16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#tbcpay16{
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
                    echo "<style>#tbcpay16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay16count>=0.10 && $tbcpay16count<=0.20){
                    echo "<style>#tbcpay16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay16count>0.20){
                    echo "<style>#tbcpay16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay17" class="tbcpay17a">
            <button class="box" id="tbcpay17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $tbcpay17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#tbcpay17{
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
                    echo "<style>#tbcpay17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay17count>=0.10 && $tbcpay17count<=0.20){
                    echo "<style>#tbcpay17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay17count>0.20){
                    echo "<style>#tbcpay17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay18" class="tbcpay18a">
            <button class="box" id="tbcpay18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $tbcpay18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#tbcpay18{
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
                    echo "<style>#tbcpay18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay18count>=0.10 && $tbcpay18count<=0.20){
                    echo "<style>#tbcpay18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay18count>0.20){
                    echo "<style>#tbcpay18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay19" class="tbcpay19a">
            <button class="box" id="tbcpay19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $tbcpay19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#tbcpay19{
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
                    echo "<style>#tbcpay19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay19count>=0.10 && $tbcpay19count<=0.20){
                    echo "<style>#tbcpay19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay19count>0.20){
                    echo "<style>#tbcpay19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay20" class="tbcpay20a">
            <button class="box" id="tbcpay20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $tbcpay20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#tbcpay20{
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
                    echo "<style>#tbcpay20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay20count>=0.10 && $tbcpay20count<=0.20){
                    echo "<style>#tbcpay20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay20count>0.20){
                    echo "<style>#tbcpay20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay21" class="tbcpay21a">
            <button class="box" id="tbcpay21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $tbcpay21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#tbcpay21{
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
                    echo "<style>#tbcpay21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay21count>=0.10 && $tbcpay21count<=0.20){
                    echo "<style>#tbcpay21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay21count>0.20){
                    echo "<style>#tbcpay21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay22" class="tbcpay22a">
            <button class="box" id="tbcpay22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $tbcpay22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#tbcpay22{
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
                    echo "<style>#tbcpay22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay22count>=0.10 && $tbcpay22count<=0.20){
                    echo "<style>#tbcpay22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay22count>0.20){
                    echo "<style>#tbcpay22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay23" class="tbcpay23a">
            <button class="box" id="tbcpay23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $tbcpay23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#tbcpay23{
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
                    echo "<style>#tbcpay23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay23count>=0.10 && $tbcpay23count<=0.20){
                    echo "<style>#tbcpay23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay23count>0.20){
                    echo "<style>#tbcpay23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay24" class="tbcpay24a">
            <button class="box" id="tbcpay24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $tbcpay24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#tbcpay24{
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
                    echo "<style>#tbcpay24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay24count>=0.10 && $tbcpay24count<=0.20){
                    echo "<style>#tbcpay24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay24count>0.20){
                    echo "<style>#tbcpay24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay25" class="tbcpay25a">
            <button class="box" id="tbcpay25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $tbcpay25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#tbcpay25{
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
                    echo "<style>#tbcpay25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay25count>=0.10 && $tbcpay25count<=0.20){
                    echo "<style>#tbcpay25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay25count>0.20){
                    echo "<style>#tbcpay25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay26" class="tbcpay26a">
            <button class="box" id="tbcpay26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $tbcpay26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#tbcpay26{
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
                    echo "<style>#tbcpay26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay26count>=0.10 && $tbcpay26count<=0.20){
                    echo "<style>#tbcpay26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay26count>0.20){
                    echo "<style>#tbcpay26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay27" class="tbcpay27a">
            <button class="box" id="tbcpay27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $tbcpay27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#tbcpay27{
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
                    echo "<style>#tbcpay27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay27count>=0.10 && $tbcpay27count<=0.20){
                    echo "<style>#tbcpay27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay27count>0.20){
                    echo "<style>#tbcpay27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay28" class="tbcpay28a">
            <button class="box" id="tbcpay28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $tbcpay28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#tbcpay28{
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
                    echo "<style>#tbcpay28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay28count>=0.10 && $tbcpay28count<=0.20){
                    echo "<style>#tbcpay28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay28count>0.20){
                    echo "<style>#tbcpay28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay29" class="tbcpay29a">
            <button class="box" id="tbcpay29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $tbcpay29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#tbcpay29{
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
                    echo "<style>#tbcpay29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay29count>=0.10 && $tbcpay29count<=0.20){
                    echo "<style>#tbcpay29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay29count>0.20){
                    echo "<style>#tbcpay29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay30" class="tbcpay30a">
            <button class="box" id="tbcpay30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $tbcpay30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#tbcpay30{
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
                    echo "<style>#tbcpay30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay30count>=0.10 && $tbcpay30count<=0.20){
                    echo "<style>#tbcpay30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay30count>0.20){
                    echo "<style>#tbcpay30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/tbcpay31" class="tbcpay31a">
            <button class="box" id="tbcpay31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $tbcpay31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#tbcpay31{
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
                    echo "<style>#tbcpay31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .tbcpay31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#tbcpay31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($tbcpay31count>=0.10 && $tbcpay31count<=0.20){
                    echo "<style>#tbcpay31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($tbcpay31count>0.20){
                    echo "<style>#tbcpay31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/exptbcpay">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumoftbcpayprov=($tbcpay1count + $tbcpay2count + $tbcpay3count + $tbcpay4count + $tbcpay5count + $tbcpay6count + $tbcpay7count + $tbcpay8count + $tbcpay9count + $tbcpay10count + $tbcpay11count + $tbcpay12count + $tbcpay13count + $tbcpay14count + $tbcpay15count +  $tbcpay16count + $tbcpay17count + $tbcpay18count + $tbcpay19count + $tbcpay20count + $tbcpay21count + $tbcpay22count + $tbcpay23count + $tbcpay24count + $tbcpay25count + $tbcpay26count+ $tbcpay27count+ $tbcpay28count+ $tbcpay29count+ $tbcpay30count + $tbcpay31count);
            $softbcpaye = ($sumoftbcpayprov);
            if($softbcpaye == 0){
                $softbcpaye = 1;
            }


            $percoftbcpayprov = round(($sumoftbcpayprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percoftbcpayprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percoftbcpayprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br>
                    <a href="/tbcpayjan">
                        <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/tbcpayfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>    
                    </a> 
                    <a href="/tbcpaymar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/tbcpayapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/tbcpaymay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/tbcpayjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/tbcpayjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/tbcpayaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/tbcpaysep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/tbcpayoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/tbcpaynov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/tbcpaydec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div>
                    </a> 
                    <br>
                <br>
                <hr>
            <br>
            <a class="provider_link" href="/novapayments"> 
                <h1 class="productHeader">Nova payment system - Issues in HH/MM: {{$sumnovapaymentsnow}}</h1>
            </a>
            <div class="graph">
            <a href="/novapayments1" class="novapayments1a">
            <button class="box" id="novapayments1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $novapayments1count }}</span>
                <?php if ("$lst-01"==date("Y-M-d")){
                    echo "<style>#novapayments1{
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
                    echo "<style>#novapayments1{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments1a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments1{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments1count>=0.10 && $novapayments1count<=0.20){
                    echo "<style>#novapayments1{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments1count>0.20){
                    echo "<style>#novapayments1{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments2" class="novapayments2a">
            <button class="box" id="novapayments2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $novapayments2count }}</span>
                <?php if ("$lst-02"==date("Y-M-d")){
                    echo "<style>#novapayments2{
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
                    echo "<style>#novapayments2{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments2a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments2{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments2count>=0.10 && $novapayments2count<=0.20){
                    echo "<style>#novapayments2{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments2count>0.20){
                    echo "<style>#novapayments2{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments3" class="novapayments3a">
            <button class="box" id="novapayments3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $novapayments3count }}</span>
                <?php if ("$lst-03"==date("Y-M-d")){
                    echo "<style>#novapayments3{
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
                    echo "<style>#novapayments3{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments3a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments3{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments3count>=0.10 && $novapayments3count<=0.20){
                    echo "<style>#novapayments3{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments3count>0.20){
                    echo "<style>#novapayments3{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments4" class="novapayments4a">
            <button class="box" id="novapayments4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $novapayments4count }}</span>
                <?php if ("$lst-04"==date("Y-M-d")){
                    echo "<style>#novapayments4{
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
                    echo "<style>#novapayments4{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments4a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments4{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments4count>=0.10 && $novapayments4count<=0.20){
                    echo "<style>#novapayments4{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments4count>0.20){
                    echo "<style>#novapayments4{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments5" class="novapayments5a">
            <button class="box" id="novapayments5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $novapayments5count }}</span>
                <?php if ("$lst-05"==date("Y-M-d")){
                    echo "<style>#novapayments5{
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
                    echo "<style>#novapayments5{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments5a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments5{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments5count>=0.10 && $novapayments5count<=0.20){
                    echo "<style>#novapayments5{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments5count>0.20){
                    echo "<style>#novapayments5{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments6" class="novapayments6a">
            <button class="box" id="novapayments6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $novapayments6count }}</span>
                <?php if ("$lst-06"==date("Y-M-d")){
                    echo "<style>#novapayments6{
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
                    echo "<style>#novapayments6{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments6a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments6{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments6count>=0.10 && $novapayments6count<=0.20){
                    echo "<style>#novapayments6{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments6count>0.20){
                    echo "<style>#novapayments6{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments7" class="novapayments7a">
            <button class="box" id="novapayments7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $novapayments7count }}</span>
                <?php if ("$lst-07"==date("Y-M-d")){
                    echo "<style>#novapayments7{
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
                    echo "<style>#novapayments7{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments7a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments7{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments7count>=0.10 && $novapayments7count<=0.20){
                    echo "<style>#novapayments7{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments7count>0.20){
                    echo "<style>#novapayments7{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments8" class="novapayments8a">
            <button class="box" id="novapayments8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $novapayments8count }}</span>
                <?php if ("$lst-08"==date("Y-M-d")){
                    echo "<style>#novapayments8{
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
                    echo "<style>#novapayments8{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments8a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments8{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments8count>=0.10 && $novapayments8count<=0.20){
                    echo "<style>#novapayments8{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments8count>0.20){
                    echo "<style>#novapayments8{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments9" class="novapayments9a">
            <button class="box" id="novapayments9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $novapayments9count }}</span>
                <?php if ("$lst-09"==date("Y-M-d")){
                    echo "<style>#novapayments9{
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
                    echo "<style>#novapayments9{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments9a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments9{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments9count>=0.10 && $novapayments9count<=0.20){
                    echo "<style>#novapayments9{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments9count>0.20){
                    echo "<style>#novapayments9{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments10" class="novapayments10a">
            <button class="box" id="novapayments10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $novapayments10count }}</span>
                <?php if ("$lst-10"==date("Y-M-d")){
                    echo "<style>#novapayments10{
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
                    echo "<style>#novapayments10{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments10a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments10{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments10count>=0.10 && $novapayments10count<=0.20){
                    echo "<style>#novapayments10{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments10count>0.20){
                    echo "<style>#novapayments10{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments11" class="novapayments11a">
            <button class="box" id="novapayments11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $novapayments11count }}</span>
                <?php if ("$lst-11"==date("Y-M-d")){
                    echo "<style>#novapayments11{
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
                    echo "<style>#novapayments11{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments11a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments11{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments11count>=0.10 && $novapayments11count<=0.20){
                    echo "<style>#novapayments11{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments11count>0.20){
                    echo "<style>#novapayments11{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments12" class="novapayments12a">
            <button class="box" id="novapayments12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $novapayments12count }}</span>
                <?php if ("$lst-12"==date("Y-M-d")){
                    echo "<style>#novapayments12{
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
                    echo "<style>#novapayments12{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments12a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments12{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments12count>=0.10 && $novapayments12count<=0.20){
                    echo "<style>#novapayments12{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments12count>0.20){
                    echo "<style>#novapayments12{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments13" class="novapayments13a">
            <button class="box" id="novapayments13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $novapayments13count }}</span>
                <?php if ("$lst-13"==date("Y-M-d")){
                    echo "<style>#novapayments13{
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
                    echo "<style>#novapayments13{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments13a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments13{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments13count>=0.10 && $novapayments13count<=0.20){
                    echo "<style>#novapayments13{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments13count>0.20){
                    echo "<style>#novapayments13{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments14" class="novapayments14a">
            <button class="box" id="novapayments14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $novapayments14count }}</span>
                <?php if ("$lst-14"==date("Y-M-d")){
                    echo "<style>#novapayments14{
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
                    echo "<style>#novapayments14{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments14a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments14{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments14count>=0.10 && $novapayments14count<=0.20){
                    echo "<style>#novapayments14{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments14count>0.20){
                    echo "<style>#novapayments14{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments15" class="novapayments15a">
            <button class="box" id="novapayments15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $novapayments15count }}</span>
                <?php if ("$lst-15"==date("Y-M-d")){
                    echo "<style>#novapayments15{
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
                    echo "<style>#novapayments15{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments15a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments15{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments15count>=0.10 && $novapayments15count<=0.20){
                    echo "<style>#novapayments15{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments15count>0.20){
                    echo "<style>#novapayments15{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments16" class="novapayments16a">
            <button class="box" id="novapayments16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $novapayments16count }}</span>
                <?php if ("$lst-16"==date("Y-M-d")){
                    echo "<style>#novapayments16{
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
                    echo "<style>#novapayments16{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments16a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments16{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments16count>=0.10 && $novapayments16count<=0.20){
                    echo "<style>#novapayments16{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments16count>0.20){
                    echo "<style>#novapayments16{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments17" class="novapayments17a">
            <button class="box" id="novapayments17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $novapayments17count }}</span>
                <?php if ("$lst-17"==date("Y-M-d")){
                    echo "<style>#novapayments17{
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
                    echo "<style>#novapayments17{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments17a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments17{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments17count>=0.10 && $novapayments17count<=0.20){
                    echo "<style>#novapayments17{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments17count>0.20){
                    echo "<style>#novapayments17{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments18" class="novapayments18a">
            <button class="box" id="novapayments18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $novapayments18count }}</span>
                <?php if ("$lst-18"==date("Y-M-d")){
                    echo "<style>#novapayments18{
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
                    echo "<style>#novapayments18{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments18a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments18{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments18count>=0.10 && $novapayments18count<=0.20){
                    echo "<style>#novapayments18{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments18count>0.20){
                    echo "<style>#novapayments18{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments19" class="novapayments19a">
            <button class="box" id="novapayments19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $novapayments19count }}</span>
                <?php if ("$lst-19"==date("Y-M-d")){
                    echo "<style>#novapayments19{
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
                    echo "<style>#novapayments19{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments19a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments19{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments19count>=0.10 && $novapayments19count<=0.20){
                    echo "<style>#novapayments19{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments19count>0.20){
                    echo "<style>#novapayments19{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments20" class="novapayments20a">
            <button class="box" id="novapayments20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $novapayments20count }}</span>
                <?php if ("$lst-20"==date("Y-M-d")){
                    echo "<style>#novapayments20{
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
                    echo "<style>#novapayments20{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments20a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments20{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments20count>=0.10 && $novapayments20count<=0.20){
                    echo "<style>#novapayments20{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments20count>0.20){
                    echo "<style>#novapayments20{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments21" class="novapayments21a">
            <button class="box" id="novapayments21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $novapayments21count }}</span>
                <?php if ("$lst-21"==date("Y-M-d")){
                    echo "<style>#novapayments21{
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
                    echo "<style>#novapayments21{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments21a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments21{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments21count>=0.10 && $novapayments21count<=0.20){
                    echo "<style>#novapayments21{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments21count>0.20){
                    echo "<style>#novapayments21{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments22" class="novapayments22a">
            <button class="box" id="novapayments22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $novapayments22count }}</span>
                <?php if ("$lst-22"==date("Y-M-d")){
                    echo "<style>#novapayments22{
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
                    echo "<style>#novapayments22{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments22a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments22{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments22count>=0.10 && $novapayments22count<=0.20){
                    echo "<style>#novapayments22{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments22count>0.20){
                    echo "<style>#novapayments22{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments23" class="novapayments23a">
            <button class="box" id="novapayments23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $novapayments23count }}</span>
                <?php if ("$lst-23"==date("Y-M-d")){
                    echo "<style>#novapayments23{
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
                    echo "<style>#novapayments23{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments23a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments23{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments23count>=0.10 && $novapayments23count<=0.20){
                    echo "<style>#novapayments23{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments23count>0.20){
                    echo "<style>#novapayments23{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments24" class="novapayments24a">
            <button class="box" id="novapayments24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $novapayments24count }}</span>
                <?php if ("$lst-24"==date("Y-M-d")){
                    echo "<style>#novapayments24{
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
                    echo "<style>#novapayments24{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments24a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments24{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments24count>=0.10 && $novapayments24count<=0.20){
                    echo "<style>#novapayments24{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments24count>0.20){
                    echo "<style>#novapayments24{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments25" class="novapayments25a">
            <button class="box" id="novapayments25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $novapayments25count }}</span>
                <?php if ("$lst-25"==date("Y-M-d")){
                    echo "<style>#novapayments25{
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
                    echo "<style>#novapayments25{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments25a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments25{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments25count>=0.10 && $novapayments25count<=0.20){
                    echo "<style>#novapayments25{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments25count>0.20){
                    echo "<style>#novapayments25{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments26" class="novapayments26a">
            <button class="box" id="novapayments26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $novapayments26count }}</span>
                <?php if ("$lst-26"==date("Y-M-d")){
                    echo "<style>#novapayments26{
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
                    echo "<style>#novapayments26{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments26a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments26{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments26count>=0.10 && $novapayments26count<=0.20){
                    echo "<style>#novapayments26{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments26count>0.20){
                    echo "<style>#novapayments26{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments27" class="novapayments27a">
            <button class="box" id="novapayments27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $novapayments27count }}</span>
                <?php if ("$lst-27"==date("Y-M-d")){
                    echo "<style>#novapayments27{
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
                    echo "<style>#novapayments27{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments27a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments27{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments27count>=0.10 && $novapayments27count<=0.20){
                    echo "<style>#novapayments27{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments27count>0.20){
                    echo "<style>#novapayments27{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments28" class="novapayments28a">
            <button class="box" id="novapayments28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $novapayments28count }}</span>
                <?php if ("$lst-28"==date("Y-M-d")){
                    echo "<style>#novapayments28{
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
                    echo "<style>#novapayments28{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments28a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments28{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                if ($novapayments28count>=0.10 && $novapayments28count<=0.20){
                    echo "<style>#novapayments28{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments28count>0.20){
                    echo "<style>#novapayments28{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments29" class="novapayments29a">
            <button class="box" id="novapayments29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $novapayments29count }}</span>
                <?php if ("$lst-29"==date("Y-M-d")){
                    echo "<style>#novapayments29{
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
                    echo "<style>#novapayments29{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments29a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments29{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }

                if ($novapayments29count>=0.10 && $novapayments29count<=0.20){
                    echo "<style>#novapayments29{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments29count>0.20){
                    echo "<style>#novapayments29{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments30" class="novapayments30a">
            <button class="box" id="novapayments30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $novapayments30count }}</span>
                <?php if ("$lst-30"==date("Y-M-d")){
                    echo "<style>#novapayments30{
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
                    echo "<style>#novapayments30{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments30a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments30{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                
                if ($novapayments30count>=0.10 && $novapayments30count<=0.20){
                    echo "<style>#novapayments30{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments30count>0.20){
                    echo "<style>#novapayments30{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/novapayments31" class="novapayments31a">
            <button class="box" id="novapayments31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $novapayments31count }}</span>
                <?php if ("$lst-31"==date("Y-M-d")){
                    echo "<style>#novapayments31{
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
                    echo "<style>#novapayments31{
                        background-color: gray;
                        pointer-events: none;

                        }
                        .novapayments31a{
                            pointer-events: none;
                        }
                    </style>";
                }
                else{
                    echo "<style>#novapayments31{
                        background-color: #6bad4c;
                        height: 100%;
                        width: 20px;
                        margin-left:2px;
                        border: none;
                        border-radius: 5px;
                        }
               </style>";
                }
                
                if ($novapayments31count>=0.10 && $novapayments31count<=0.20){
                    echo "<style>#novapayments31{
                                    background-color: #F7C631;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }
                if ($novapayments31count>0.20){
                    echo "<style>#novapayments31{
                                    background-color: #A01914;
                                    height: 100%;
                                    width: 20px;
                                    margin-left:2px;
                                    border: none;
                                    border-radius: 5px;
                                    }
                           </style>";

                    
                }  
                            
                ?>
            
                @endforeach
                
                </button>
            </a>
            <a href="/expnovapaymentsystem">
            <img src="/IMG/download.svg" style="position: absolute; width:40px; margin-left: 40px;"/> 
            </a>
            <?php 
            $sumofnovapaymentsprov=($novapayments1count + $novapayments2count + $novapayments3count + $novapayments4count + $novapayments5count + $novapayments6count + $novapayments7count + $novapayments8count + $novapayments9count + $novapayments10count + $novapayments11count + $novapayments12count + $novapayments13count + $novapayments14count + $novapayments15count +  $novapayments16count + $novapayments17count + $novapayments18count + $novapayments19count + $novapayments20count + $novapayments21count + $novapayments22count + $novapayments23count + $novapayments24count + $novapayments25count + $novapayments26count+ $novapayments27count+ $novapayments28count+ $novapayments29count+ $novapayments30count + $novapayments31count);
            $sofnovapaymentse = ($sumofnovapaymentsprov);
            if($sofnovapaymentse == 0){
                $sofnovapaymentse = 1;
            }


            $percofnovapaymentsprov = round(($sumofnovapaymentsprov/744) * 100, 1);
            ?>
			<div class="b-skills">
				<div class="container">

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{100-$percofnovapaymentsprov}}" data-bar-color="#6BAD4C">
										<span class="percent" data-after="%">{{100-$percofnovapaymentsprov}}</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
            </div>
            <br> 
                    <a href="/novapaymentsjan">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jan</span>
                        </div>
                    </a>  
                    <a href="/novapaymentsfeb">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Feb</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsmar">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Mar</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsapr">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Apr</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsmay">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>May</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsjun">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jun</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsjul">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Jul</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsaug">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Aug</span>
                        </div>
                    </a> 
                    <a href="/novapaymentssep">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Sep</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsoct">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Oct</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsnov">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Nov</span>
                        </div>
                    </a> 
                    <a href="/novapaymentsdec">
                    <div class="gradient-btn btn-11">
                            <i class="fa fa-stop"></i>
                            <span>Dec</span>
                        </div></a> 
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
