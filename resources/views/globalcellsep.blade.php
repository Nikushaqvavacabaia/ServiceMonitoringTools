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
    <form action="/admin/login" method="POST">
    @csrf
        <button class="register_button">Login/Regiser</button>
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
    </div>

    <div class="buttons">
        <a href="/index">
            <button class="banksEcommerce">Banks/Ecommerce</button>
        </a>
        <a href="/slot">
        <button class="slot">Slot(Casino, Sport)</button>
        </a>
        <a href="/isp">
        <button class="isp"  style="background-color: #85CF9B; color: #152340;">ISP/Cell</button>
        </a>
        <a href="/fbn">
        <button class="fbn">Front/Back/Network</button>
        </a>
        
    </div><br><br><br>
    <div class="productBody">
        <div class="product1">
            <a class="provider_link" href="/globalcellsepall">
                <h1 class="productHeader">Globalcell - Issues in HH/MM: {{$sumglobalcellsep}}</h1>
            </a>
            <div class="graph">
            <a href="/globalcell1sep" class="globalcell1a">
            <button class="box" id="globalcell1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-01 Problem in HH/MM: {{ $globalcell1sepcount }}</span>
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
                if ($globalcell1sepcount>=0.10 && $globalcell1sepcount<=0.20){
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
                if ($globalcell1sepcount>0.20){
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
            <a href="/globalcell2sep" class="globalcell2a">
            <button class="box" id="globalcell2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $globalcell2sepcount }}</span>
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
                if ($globalcell2sepcount>=0.10 && $globalcell2sepcount<=0.20){
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
                if ($globalcell2sepcount>0.20){
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
            <a href="/globalcell3sep" class="globalcell3a">
            <button class="box" id="globalcell3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $globalcell3sepcount }}</span>
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
                if ($globalcell3sepcount>=0.10 && $globalcell3sepcount<=0.20){
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
                if ($globalcell3sepcount>0.20){
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
            <a href="/globalcell4sep" class="globalcell4a">
            <button class="box" id="globalcell4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $globalcell4sepcount }}</span>
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
                if ($globalcell4sepcount>=0.10 && $globalcell4sepcount<=0.20){
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
                if ($globalcell4sepcount>0.20){
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
            <a href="/globalcell5sep" class="globalcell5a">
            <button class="box" id="globalcell5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $globalcell5sepcount }}</span>
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
                if ($globalcell5sepcount>=0.10 && $globalcell5sepcount<=0.20){
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
                if ($globalcell5sepcount>0.20){
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
            <a href="/globalcell6sep" class="globalcell6a">
            <button class="box" id="globalcell6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $globalcell6sepcount }}</span>
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
                if ($globalcell6sepcount>=0.10 && $globalcell6sepcount<=0.20){
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
                if ($globalcell6sepcount>0.20){
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
            <a href="/globalcell7sep" class="globalcell7a">
            <button class="box" id="globalcell7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $globalcell7sepcount }}</span>
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
                if ($globalcell7sepcount>=0.10 && $globalcell7sepcount<=0.20){
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
                if ($globalcell7sepcount>0.20){
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
            <a href="/globalcell8sep" class="globalcell8a">
            <button class="box" id="globalcell8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $globalcell8sepcount }}</span>
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
                if ($globalcell8sepcount>=0.10 && $globalcell8sepcount<=0.20){
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
                if ($globalcell8sepcount>0.20){
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
            <a href="/globalcell9sep" class="globalcell9a">
            <button class="box" id="globalcell9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $globalcell9sepcount }}</span>
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
                if ($globalcell9sepcount>=0.10 && $globalcell9sepcount<=0.20){
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
                if ($globalcell9sepcount>0.20){
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
            <a href="/globalcell10sep" class="globalcell10a">
            <button class="box" id="globalcell10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $globalcell10sepcount }}</span>
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
                if ($globalcell10sepcount>=0.10 && $globalcell10sepcount<=0.20){
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
                if ($globalcell10sepcount>0.20){
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
            <a href="/globalcell11sep" class="globalcell11a">
            <button class="box" id="globalcell11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $globalcell11sepcount }}</span>
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
                if ($globalcell11sepcount>=0.10 && $globalcell11sepcount<=0.20){
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
                if ($globalcell11sepcount>0.20){
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
            <a href="/globalcell12sep" class="globalcell12a">
            <button class="box" id="globalcell12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $globalcell12sepcount }}</span>
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
                if ($globalcell12sepcount>=0.10 && $globalcell12sepcount<=0.20){
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
                if ($globalcell12sepcount>0.20){
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
            <a href="/globalcell13sep" class="globalcell13a">
            <button class="box" id="globalcell13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $globalcell13sepcount }}</span>
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
                if ($globalcell13sepcount>=0.10 && $globalcell13sepcount<=0.20){
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
                if ($globalcell13sepcount>0.20){
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
            <a href="/globalcell14sep" class="globalcell14a">
            <button class="box" id="globalcell14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $globalcell14sepcount }}</span>
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
                if ($globalcell14sepcount>=0.10 && $globalcell14sepcount<=0.20){
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
                if ($globalcell14sepcount>0.20){
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
            <a href="/globalcell15sep" class="globalcell15a">
            <button class="box" id="globalcell15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $globalcell15sepcount }}</span>
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
                if ($globalcell15sepcount>=0.10 && $globalcell15sepcount<=0.20){
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
                if ($globalcell15sepcount>0.20){
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
            <a href="/globalcell16sep" class="globalcell16a">
            <button class="box" id="globalcell16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $globalcell16sepcount }}</span>
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
                if ($globalcell16sepcount>=0.10 && $globalcell16sepcount<=0.20){
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
                if ($globalcell16sepcount>0.20){
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
            <a href="/globalcell17sep" class="globalcell17a">
            <button class="box" id="globalcell17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $globalcell17sepcount }}</span>
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
                if ($globalcell17sepcount>=0.10 && $globalcell17sepcount<=0.20){
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
                if ($globalcell17sepcount>0.20){
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
            <a href="/globalcell18sep" class="globalcell18a">
            <button class="box" id="globalcell18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $globalcell18sepcount }}</span>
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
                if ($globalcell18sepcount>=0.10 && $globalcell18sepcount<=0.20){
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
                if ($globalcell18sepcount>0.20){
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
            <a href="/globalcell19sep" class="globalcell19a">
            <button class="box" id="globalcell19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $globalcell19sepcount }}</span>
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
                if ($globalcell19sepcount>=0.10 && $globalcell19sepcount<=0.20){
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
                if ($globalcell19sepcount>0.20){
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
            <a href="/globalcell20sep" class="globalcell20a">
            <button class="box" id="globalcell20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $globalcell20sepcount }}</span>
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
                if ($globalcell20sepcount>=0.10 && $globalcell20sepcount<=0.20){
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
                if ($globalcell20sepcount>0.20){
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
            <a href="/globalcell21sep" class="globalcell21a">
            <button class="box" id="globalcell21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $globalcell21sepcount }}</span>
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
                if ($globalcell21sepcount>=0.10 && $globalcell21sepcount<=0.20){
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
                if ($globalcell21sepcount>0.20){
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
            <a href="/globalcell22sep" class="globalcell22a">
            <button class="box" id="globalcell22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $globalcell22sepcount }}</span>
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
                if ($globalcell22sepcount>=0.10 && $globalcell22sepcount<=0.20){
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
                if ($globalcell22sepcount>0.20){
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
            <a href="/globalcell23sep" class="globalcell23a">
            <button class="box" id="globalcell23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $globalcell23sepcount }}</span>
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
                if ($globalcell23sepcount>=0.10 && $globalcell23sepcount<=0.20){
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
                if ($globalcell23sepcount>0.20){
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
            <a href="/globalcell24sep" class="globalcell24a">
            <button class="box" id="globalcell24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $globalcell24sepcount }}</span>
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
                if ($globalcell24sepcount>=0.10 && $globalcell24sepcount<=0.20){
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
                if ($globalcell24sepcount>0.20){
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
            <a href="/globalcell25sep" class="globalcell25a">
            <button class="box" id="globalcell25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $globalcell25sepcount }}</span>
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
                if ($globalcell25sepcount>=0.10 && $globalcell25sepcount<=0.20){
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
                if ($globalcell25sepcount>0.20){
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
            <a href="/globalcell26sep" class="globalcell26a">
            <button class="box" id="globalcell26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $globalcell26sepcount }}</span>
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
                if ($globalcell26sepcount>=0.10 && $globalcell26sepcount<=0.20){
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
                if ($globalcell26sepcount>0.20){
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
            <a href="/globalcell27sep" class="globalcell27a">
            <button class="box" id="globalcell27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $globalcell27sepcount }}</span>
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
                if ($globalcell27sepcount>=0.10 && $globalcell27sepcount<=0.20){
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
                if ($globalcell27sepcount>0.20){
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
            <a href="/globalcell28sep" class="globalcell28a">
            <button class="box" id="globalcell28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $globalcell28sepcount }}</span>
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
                if ($globalcell28sepcount>=0.10 && $globalcell28sepcount<=0.20){
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
                if ($globalcell28sepcount>0.20){
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
            <a href="/globalcell29sep" class="globalcell29a">
            <button class="box" id="globalcell29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $globalcell29sepcount }}</span>
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
                if ($globalcell29sepcount>=0.10 && $globalcell29sepcount<=0.20){
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
                if ($globalcell29sepcount>0.20){
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
            <a href="/globalcell30sep" class="globalcell30a">
            <button class="box" id="globalcell30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $globalcell30sepcount }}</span>
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
                if ($globalcell30sepcount>=0.10 && $globalcell30sepcount<=0.20){
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
                if ($globalcell30sepcount>0.20){
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
			<a href="/globalcell31sep" class="globalcell31a">
            <button class="box" id="globalcell31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $globalcell31sepcount }}</span>
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

                if ($globalcell31sepcount>=0.10 && $globalcell31sepcount<=0.20){
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
                if ($globalcell31sepcount>0.20){
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
        </div>

        
    </div>
</body>
</html>
