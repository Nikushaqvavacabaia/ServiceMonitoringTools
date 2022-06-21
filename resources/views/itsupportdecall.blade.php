<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="/Style/util.css">
    <link rel="stylesheet" type="text/css" href="/Style/style.css">
    <title>itsupport</title>
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                <table>	
						<thead>
							<tr class="table100-head">
								<th class="column1">თარიღი</th>
								<th class="column1">პრობლემის დაწყება</th>
								<th class="column2">პრობლემის აღმოჩენა</th>
								<th class="column3">მიმართვა</th>
								<th class="column3">პრობლემის მოგვარება</th>
								<!-- <th class="column4">მოგვარება</th> -->
								<th class="column5">ხანგრძლივობა</th>
								<th class="column6">პროვაიდერი</th>
                                <th class="column7">პროდუქტი</th>
                                <th class="column8">პრობლემის აღწერა</th>
                                <th class="column9">პროვაიდერის პასუხი</th>
                                <th class="column10">პრობლემური მხარე</th>
                                <th class="column11">ჩანაწერის თარიღი</th>
								
							</tr>
						</thead>
						<tbody>
                            @foreach($monitorings as $mn)
                                <tr>
									<td>{{ $mn -> problem_date }}</td>
                                    <td>{{ $mn -> problem_start }}</td>
                                    <td>{{ $mn -> problem_discover }}</td>
                                    <td>{{ $mn -> appeal }}</td>
									<td>{{ $mn -> problem_solved }}</td>
                                    <!-- <td>Unknown</td> -->
                                    
									<td>{{$mn -> problem_dur}}</td>
                                    <td>{{ $mn -> provider }}</td>
                                    <td>{{ $mn -> product }}</td>
                                    <td>{{ $mn -> problem_desc }}</td>
                                    <td>{{ $mn -> provider_answ }}</td>
                                    <td>{{ $mn -> poblem_side }}</td>
                                    <td>{{ $mn -> created_at }} </td>

                                    </tr>
                            @endforeach
                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var alertAudio = new Audio(
		"/Music/itsupport.mp3"
		);
		<?php 

		$counter=count($monitorings); ?>
		alertAudio.play();
		alert("All Problems of itsupport December --> " + {{$counter}} + "\nSum of time itsupport December Problems --> " + {{array_sum($itsupportdecall)}} + " Hour")
		
</script>

<?php 



?>


    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>
