
<html> 
<head>
 
<title>February Graph</title> 
<link href="/Style/style.css" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 

 <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 
   <style>
    
     
 
.b-skills
{
	border-top: 1px solid #f9f9f9;
	padding-top: 46px;
	text-align: center;
}

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
       
       p{
           font-weight: 900;
       }
 
    
    </style>
 
  
  
 
</head>

<body>

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
        <button class="fbn">Front/Back/Network</button>
        </a>
        
    </div><br><br><br>
  
<br><br><br><br>
	 
		<section id="s-team" class="section">
			 
			<br><br><br>
            <?php 
            $sumofprov=($sumbogfeb + $sumtbcfeb + $sumoppafeb + $sumipayfeb + $sumtbcpayfeb + $sumnovapaymentsfeb + $sumegtfeb + $sumeverymatrixfeb + $sumoppafeb + $sumbetconstructfeb + $sumbetradarfeb + $sumgoldenracefeb + $sumevolutiongamingfeb + $sumlambdafeb + $sumigrosoftfeb +  $sumsilknetfeb + $summagtifeb + $sumglobalcellfeb + $sumcaucasusfeb + $sumlivecallerfeb);
            $sumofnetwork=$sumitsupportfeb;
            $sumofback=$sumsbbettingfeb;
            $sumoffront=$sumfrontfeb;
            $sofe = ($sumofprov + $sumofnetwork + $sumofback + $sumoffront);
            if($sofe == 0){
                $sofe = 1;
            }


            $percofprov = ($sumofprov/$sofe) * 100;
            $percofnetwork = ($sumofnetwork/$sofe) * 100;
            $percofback = ($sumofback/$sofe) * 100;
            $percoffront = ($sumoffront/$sofe) * 100;
            
            ?>
			<div class="b-skills">
				<div class="container">
					<h2>Statistics of the current month 
						<select style="width: 120px; height: 30px; border-radius: 20px; font-size:16px; position: absolute; margin: 6px 30px;" name="id" onchange="window.location.replace('graph'+this.options[this.selectedIndex].value);"> 
							<option value="2">February</option> 
							<option value="1">January</option> 
							<option value="3">March</option> 
							<option value="4">April</option> 
							<option value="5">May</option> 
							<option value="6">Jun</option> 
							<option value="7">July</option> 
							<option value="8">August</option> 
							<option value="9">September</option> 
							<option value="10">October</option> 
							<option value="11">November</option> 
							<option value="12">December</option> 
						</select>
					</h2>

					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{$percofprov}}" data-bar-color="#ff4241">
										<span class="percent" data-after="%">{{$percofprov}}</span>
									</div>
								</div>

								<p>Providers</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{$percofnetwork}}" data-bar-color="#edc214">
										<span class="percent" data-after="%">{{$percofnetwork}}</span>
									</div>
								</div>

								<p>Network</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{$percoffront}}" data-bar-color="#a7d212">
										<span class="percent" data-after="%">{{$percoffront}}</span>
									</div>
								</div>

								<p>Front</p>
							</div>
						</div>

						<div class="col-xs-12 col-sm-6 col-md-3">
							<div class="skill-item center-block">
								<div class="chart-container">
									<div class="chart " data-percent="{{$percofback}}" data-bar-color="blue">
										<span class="percent" data-after="%">{{$percofback}}</span>
									</div>
								</div>


								<p>SB Betting</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
        <br><br><br><br><br>
    
 
 
  <br><br><br><br>  
  
  
  
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
					this.el.children[0].innerHTML = Math.round(percent);
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
 
</html>
