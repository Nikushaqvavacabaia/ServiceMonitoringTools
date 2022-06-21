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
        <button class="slot">Slot(Casino, Sport)</button>
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
            <a class="provider_link" href="/mostofaprall">
                <h1 class="product1Header">Most of - Issues in HH/MM: {{$summostofapr}}</h1>
            </a>

            <div class="graph">
            <a href="/mostof1apr" class="mostof1a">
            <button class="box" id="mostof1"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext"> {{$lst}}-01 Problem in HH/MM: {{ $mostof1aprcount }}</span>
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

                if ($mostof1aprcount>=0.10 && $mostof1aprcount<=0.20){
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
                if ($mostof1aprcount>0.20){
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
            
            <a href="/mostof2apr" class="mostof2a">
            <button class="box" id="mostof2"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-02 Problem in HH/MM: {{ $mostof2aprcount }}</span>
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
                      
                
                if ($mostof2aprcount >=0.10 && $mostof2aprcount<=0.20){
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
                if ($mostof2aprcount>0.20){
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
            <a href="/mostof3apr" class="mostof3a">
            <button class="box" id="mostof3"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-03 Problem in HH/MM: {{ $mostof3aprcount }}</span>
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

                if ($mostof3aprcount>=0.10 && $mostof3aprcount<=0.20){
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
                if ($mostof3aprcount>0.20){
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
            <a href="/mostof4apr" class="mostof4a">
            <button class="box" id="mostof4"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-04 Problem in HH/MM: {{ $mostof4aprcount }}</span>
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

                if ($mostof4aprcount>=0.10 && $mostof4aprcount<=0.20){
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
                if ($mostof4aprcount>0.20){
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
            <a href="/mostof5apr" class="mostof5a">
            <button class="box" id="mostof5"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-05 Problem in HH/MM: {{ $mostof5aprcount }}</span>
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

                if ($mostof5aprcount>=0.10 && $mostof5aprcount<=0.20){
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
                if ($mostof5aprcount>0.20){
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
            <a href="/mostof6apr" class="mostof6a">
            <button class="box" id="mostof6"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-06 Problem in HH/MM: {{ $mostof6aprcount }}</span>
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

                if ($mostof6aprcount>=0.10 && $mostof6aprcount<=0.20){
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
                if ($mostof6aprcount>0.20){
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
            <a href="/mostof7apr" class="mostof7a">
            <button class="box" id="mostof7"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-07 Problem in HH/MM: {{ $mostof7aprcount }}</span>
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

                if ($mostof7aprcount>=0.10 && $mostof7aprcount<=0.20){
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
                if ($mostof7aprcount>0.20){
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
            <a href="/mostof8apr" class="mostof8a">
            <button class="box" id="mostof8"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-08 Problem in HH/MM: {{ $mostof8aprcount }}</span>
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

                if ($mostof8aprcount>=0.10 && $mostof8aprcount<=0.20){
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
                if ($mostof8aprcount>0.20){
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
            <a href="/mostof9apr" class="mostof9a">
            <button class="box" id="mostof9"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-09 Problem in HH/MM: {{ $mostof9aprcount }}</span>
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

                if ($mostof9aprcount>=0.10 && $mostof9aprcount<=0.20){
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
                if ($mostof9aprcount>0.20){
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
            <a href="/mostof10apr" class="mostof10a">
            <button class="box" id="mostof10"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-10 Problem in HH/MM: {{ $mostof10aprcount }}</span>
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

                if ($mostof10aprcount>=0.10 && $mostof10aprcount<=0.20){
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
                if ($mostof10aprcount>0.20){
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
            <a href="/mostof11apr" class="mostof11a">
            <button class="box" id="mostof11"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-11 Problem in HH/MM: {{ $mostof11aprcount }}</span>
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

                if ($mostof11aprcount>=0.10 && $mostof11aprcount<=0.20){
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
                if ($mostof11aprcount>0.20){
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
            <a href="/mostof12apr" class="mostof12a">
            <button class="box" id="mostof12"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-12 Problem in HH/MM: {{ $mostof12aprcount }}</span>
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

                if ($mostof12aprcount>=0.10 && $mostof12aprcount<=0.20){
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
                if ($mostof12aprcount>0.20){
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
            <a href="/mostof13apr" class="mostof13a">
            <button class="box" id="mostof13"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-13 Problem in HH/MM: {{ $mostof13aprcount }}</span>
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

                if ($mostof13aprcount>=0.10 && $mostof13aprcount<=0.20){
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
                if ($mostof13aprcount>0.20){
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
            <a href="/mostof14apr" class="mostof14a">
            <button class="box" id="mostof14"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-14 Problem in HH/MM: {{ $mostof14aprcount }}</span>
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

                if ($mostof14aprcount>=0.10 && $mostof14aprcount<=0.20){
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
                if ($mostof14aprcount>0.20){
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
            <a href="/mostof15apr" class="mostof15a">
            <button class="box" id="mostof15"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-15 Problem in HH/MM: {{ $mostof15aprcount }}</span>
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

                if ($mostof15aprcount>=0.10 && $mostof15aprcount<=0.20){
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
                if ($mostof15aprcount>0.20){
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
            <a href="/mostof16apr" class="mostof16a">
                <button class="box" id="mostof16"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-16 Problem in HH/MM: {{ $mostof16aprcount }}</span>
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

                if ($mostof16aprcount>=0.10 && $mostof16aprcount<=0.20){
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
                if ($mostof16aprcount>0.20){
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
            <a href="/mostof17apr" class="mostof17a">
            <button class="box" id="mostof17"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-17 Problem in HH/MM: {{ $mostof17aprcount }}</span>
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

                if ($mostof17aprcount>=0.10 && $mostof17aprcount<=0.20){
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
                if ($mostof17aprcount>0.20){
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
            <a href="/mostof18apr" class="mostof18a">
            <button class="box" id="mostof18"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-18 Problem in HH/MM: {{ $mostof18aprcount }}</span>
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

                if ($mostof18aprcount>=0.10 && $mostof18aprcount<=0.20){
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
                if ($mostof18aprcount>0.20){
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
            <a href="/mostof19apr" class="mostof19a">
            <button class="box" id="mostof19"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-19 Problem in HH/MM: {{ $mostof19aprcount }}</span>
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

                if ($mostof19aprcount>=0.10 && $mostof19aprcount<=0.20){
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
                if ($mostof19aprcount>0.20){
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
            <a href="/mostof20apr" class="mostof20a">
            <button class="box" id="mostof20"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-20 Problem in HH/MM: {{ $mostof20aprcount }}</span>
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
 
                if ($mostof20aprcount>=0.10 && $mostof20aprcount<=0.20){
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
                if ($mostof20aprcount>0.20){
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
            <a href="/mostof21apr" class="mostof21a">
            <button class="box" id="mostof21"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-21 Problem in HH/MM: {{ $mostof21aprcount }}</span>
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

                if ($mostof21aprcount>=0.10 && $mostof21aprcount<=0.20){
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
                if ($mostof21aprcount>0.20){
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
            <a href="/mostof22apr" class="mostof22a">
            <button class="box" id="mostof22"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-22 Problem in HH/MM: {{ $mostof22aprcount }}</span>
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

                if ($mostof22aprcount>=0.10 && $mostof22aprcount<=0.20){
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
                if ($mostof22aprcount>0.20){
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
            <a href="/mostof23apr" class="mostof23a">
            <button class="box" id="mostof23"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-23 Problem in HH/MM: {{ $mostof23aprcount }}</span>
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

                if ($mostof23aprcount>=0.10 && $mostof23aprcount<=0.20){
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
                if ($mostof23aprcount>0.20){
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
            <a href="/mostof24apr" class="mostof24a">
            <button class="box" id="mostof24"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-24 Problem in HH/MM: {{ $mostof24aprcount }}</span>
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

                if ($mostof24aprcount>=0.10 && $mostof24aprcount<=0.20){
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
                if ($mostof24aprcount>0.20){
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
            <a href="/mostof25apr" class="mostof25a">
            <button class="box" id="mostof25"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-25 Problem in HH/MM: {{ $mostof25aprcount }}</span>
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

                if ($mostof25aprcount>=0.10 && $mostof25aprcount<=0.20){
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
                if ($mostof25aprcount>0.20){
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
            <a href="/mostof26apr" class="mostof26a">
            <button class="box" id="mostof26"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-26 Problem in HH/MM: {{ $mostof26aprcount }}</span>
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

                if ($mostof26aprcount>=0.10 && $mostof26aprcount<=0.20){
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
                if ($mostof26aprcount>0.20){
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
            <a href="/mostof27apr" class="mostof27a">
            <button class="box" id="mostof27"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-27 Problem in HH/MM: {{ $mostof27aprcount }}</span>
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

                if ($mostof27aprcount>=0.10 && $mostof27aprcount<=0.20){
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
                if ($mostof27aprcount>0.20){
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
            <a href="/mostof28apr" class="mostof28a">
            <button class="box" id="mostof28"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-28 Problem in HH/MM: {{ $mostof28aprcount }}</span>
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

                if ($mostof28aprcount>=0.10 && $mostof28aprcount<=0.20){
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
                if ($mostof28aprcount>0.20){
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
            <a href="/mostof29apr" class="mostof29a">
            <button class="box" id="mostof29"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-29 Problem in HH/MM: {{ $mostof29aprcount }}</span>
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

                if ($mostof29aprcount>=0.10 && $mostof29aprcount<=0.20){
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
                if ($mostof29aprcount>0.20){
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
            <a href="/mostof30apr" class="mostof30a">
            <button class="box" id="mostof30"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-30 Problem in HH/MM: {{ $mostof30aprcount }}</span>
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

                if ($mostof30aprcount>=0.10 && $mostof30aprcount<=0.20){
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
                if ($mostof30aprcount>0.20){
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
            <a href="/mostof31apr" class="mostof31a">
            <button class="box" id="mostof31"  method="get">
                @foreach ($list as $lst)
                <span class="tooltiptext">{{$lst}}-31 Problem in HH/MM: {{ $mostof31aprcount }}</span>
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

                if ($mostof31aprcount>=0.10 && $mostof31aprcount<=0.20){
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
                if ($mostof31aprcount>0.20){
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
        </div>

        
    </div>
</body>
</html>
