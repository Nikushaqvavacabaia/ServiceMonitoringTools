<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <title>Slot(Casino,Sport)</title>
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
        <button class="slot"  style="background-color: #85CF9B; color: #152340;">Slot(Casino, Sport)</button>
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
            <a class="provider_link" href="/betradarsepall">
                <h1 class="product1Header">Betradar - Issues in HH/MM: {{$sumbetradarsep}}</h1>
            </a>

            <div class="graph">
            <a href="/betradar1sep" class="betradar1a">
            <button class="box" id="betradar1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $betradar1sepcount }}</span>
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

                if ($betradar1sepcount>=0.10 && $betradar1sepcount<=0.20){
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
                if ($betradar1sepcount>0.20){
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
            
            <a href="/betradar2sep" class="betradar2a">
            <button class="box" id="betradar2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $betradar2sepcount }}</span>
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
                      
                
                if ($betradar2sepcount >=0.10 && $betradar2sepcount<=0.20){
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
                if ($betradar2sepcount>0.20){
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
            <a href="/betradar3sep" class="betradar3a">
            <button class="box" id="betradar3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $betradar3sepcount }}</span>
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

                if ($betradar3sepcount>=0.10 && $betradar3sepcount<=0.20){
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
                if ($betradar3sepcount>0.20){
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
            <a href="/betradar4sep" class="betradar4a">
            <button class="box" id="betradar4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $betradar4sepcount }}</span>
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

                if ($betradar4sepcount>=0.10 && $betradar4sepcount<=0.20){
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
                if ($betradar4sepcount>0.20){
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
            <a href="/betradar5sep" class="betradar5a">
            <button class="box" id="betradar5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $betradar5sepcount }}</span>
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

                if ($betradar5sepcount>=0.10 && $betradar5sepcount<=0.20){
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
                if ($betradar5sepcount>0.20){
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
            <a href="/betradar6sep" class="betradar6a">
            <button class="box" id="betradar6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $betradar6sepcount }}</span>
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

                if ($betradar6sepcount>=0.10 && $betradar6sepcount<=0.20){
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
                if ($betradar6sepcount>0.20){
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
            <a href="/betradar7sep" class="betradar7a">
            <button class="box" id="betradar7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $betradar7sepcount }}</span>
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

                if ($betradar7sepcount>=0.10 && $betradar7sepcount<=0.20){
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
                if ($betradar7sepcount>0.20){
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
            <a href="/betradar8sep" class="betradar8a">
            <button class="box" id="betradar8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $betradar8sepcount }}</span>
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

                if ($betradar8sepcount>=0.10 && $betradar8sepcount<=0.20){
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
                if ($betradar8sepcount>0.20){
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
            <a href="/betradar9sep" class="betradar9a">
            <button class="box" id="betradar9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $betradar9sepcount }}</span>
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

                if ($betradar9sepcount>=0.10 && $betradar9sepcount<=0.20){
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
                if ($betradar9sepcount>0.20){
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
            <a href="/betradar10sep" class="betradar10a">
            <button class="box" id="betradar10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $betradar10sepcount }}</span>
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

                if ($betradar10sepcount>=0.10 && $betradar10sepcount<=0.20){
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
                if ($betradar10sepcount>0.20){
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
            <a href="/betradar11sep" class="betradar11a">
            <button class="box" id="betradar11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $betradar11sepcount }}</span>
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

                if ($betradar11sepcount>=0.10 && $betradar11sepcount<=0.20){
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
                if ($betradar11sepcount>0.20){
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
            <a href="/betradar12sep" class="betradar12a">
            <button class="box" id="betradar12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $betradar12sepcount }}</span>
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

                if ($betradar12sepcount>=0.10 && $betradar12sepcount<=0.20){
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
                if ($betradar12sepcount>0.20){
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
            <a href="/betradar13sep" class="betradar13a">
            <button class="box" id="betradar13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $betradar13sepcount }}</span>
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

                if ($betradar13sepcount>=0.10 && $betradar13sepcount<=0.20){
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
                if ($betradar13sepcount>0.20){
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
            <a href="/betradar14sep" class="betradar14a">
            <button class="box" id="betradar14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $betradar14sepcount }}</span>
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

                if ($betradar14sepcount>=0.10 && $betradar14sepcount<=0.20){
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
                if ($betradar14sepcount>0.20){
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
            <a href="/betradar15sep" class="betradar15a">
            <button class="box" id="betradar15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $betradar15sepcount }}</span>
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

                if ($betradar15sepcount>=0.10 && $betradar15sepcount<=0.20){
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
                if ($betradar15sepcount>0.20){
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
            <a href="/betradar16sep" class="betradar16a">
                <button class="box" id="betradar16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $betradar16sepcount }}</span>
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

                if ($betradar16sepcount>=0.10 && $betradar16sepcount<=0.20){
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
                if ($betradar16sepcount>0.20){
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
            <a href="/betradar17sep" class="betradar17a">
            <button class="box" id="betradar17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $betradar17sepcount }}</span>
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

                if ($betradar17sepcount>=0.10 && $betradar17sepcount<=0.20){
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
                if ($betradar17sepcount>0.20){
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
            <a href="/betradar18sep" class="betradar18a">
            <button class="box" id="betradar18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $betradar18sepcount }}</span>
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

                if ($betradar18sepcount>=0.10 && $betradar18sepcount<=0.20){
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
                if ($betradar18sepcount>0.20){
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
            <a href="/betradar19sep" class="betradar19a">
            <button class="box" id="betradar19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $betradar19sepcount }}</span>
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

                if ($betradar19sepcount>=0.10 && $betradar19sepcount<=0.20){
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
                if ($betradar19sepcount>0.20){
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
            <a href="/betradar20sep" class="betradar20a">
            <button class="box" id="betradar20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $betradar20sepcount }}</span>
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
 
                if ($betradar20sepcount>=0.10 && $betradar20sepcount<=0.20){
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
                if ($betradar20sepcount>0.20){
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
            <a href="/betradar21sep" class="betradar21a">
            <button class="box" id="betradar21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $betradar21sepcount }}</span>
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

                if ($betradar21sepcount>=0.10 && $betradar21sepcount<=0.20){
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
                if ($betradar21sepcount>0.20){
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
            <a href="/betradar22sep" class="betradar22a">
            <button class="box" id="betradar22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $betradar22sepcount }}</span>
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

                if ($betradar22sepcount>=0.10 && $betradar22sepcount<=0.20){
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
                if ($betradar22sepcount>0.20){
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
            <a href="/betradar23sep" class="betradar23a">
            <button class="box" id="betradar23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $betradar23sepcount }}</span>
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

                if ($betradar23sepcount>=0.10 && $betradar23sepcount<=0.20){
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
                if ($betradar23sepcount>0.20){
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
            <a href="/betradar24sep" class="betradar24a">
            <button class="box" id="betradar24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $betradar24sepcount }}</span>
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

                if ($betradar24sepcount>=0.10 && $betradar24sepcount<=0.20){
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
                if ($betradar24sepcount>0.20){
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
            <a href="/betradar25sep" class="betradar25a">
            <button class="box" id="betradar25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $betradar25sepcount }}</span>
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

                if ($betradar25sepcount>=0.10 && $betradar25sepcount<=0.20){
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
                if ($betradar25sepcount>0.20){
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
            <a href="/betradar26sep" class="betradar26a">
            <button class="box" id="betradar26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $betradar26sepcount }}</span>
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

                if ($betradar26sepcount>=0.10 && $betradar26sepcount<=0.20){
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
                if ($betradar26sepcount>0.20){
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
            <a href="/betradar27sep" class="betradar27a">
            <button class="box" id="betradar27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $betradar27sepcount }}</span>
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

                if ($betradar27sepcount>=0.10 && $betradar27sepcount<=0.20){
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
                if ($betradar27sepcount>0.20){
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
            <a href="/betradar28sep" class="betradar28a">
            <button class="box" id="betradar28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $betradar28sepcount }}</span>
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

                if ($betradar28sepcount>=0.10 && $betradar28sepcount<=0.20){
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
                if ($betradar28sepcount>0.20){
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
            <a href="/betradar29sep" class="betradar29a">
            <button class="box" id="betradar29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $betradar29sepcount }}</span>
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

                if ($betradar29sepcount>=0.10 && $betradar29sepcount<=0.20){
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
                if ($betradar29sepcount>0.20){
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
            <a href="/betradar30sep" class="betradar30a">
            <button class="box" id="betradar30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $betradar30sepcount }}</span>
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

                if ($betradar30sepcount>=0.10 && $betradar30sepcount<=0.20){
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
                if ($betradar30sepcount>0.20){
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
            <a href="/betradar31sep" class="betradar31a">
            <button class="box" id="betradar31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $betradar31sepcount }}</span>
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

                if ($betradar31sepcount>=0.10 && $betradar31sepcount<=0.20){
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
                if ($betradar31sepcount>0.20){
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
        </div>

        
    </div>
</body>
</html>
