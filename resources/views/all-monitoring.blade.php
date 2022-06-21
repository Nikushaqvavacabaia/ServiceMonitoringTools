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
    <title>Monitoring Table</title>
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
				<form action="/monitoring/add" method="POST">	
                @csrf
                <table>	
						<thead>
							<tr class="table100-head">
                                <th class="column5">თარიღი</th>
								<th class="column1">პრობლემის დაწყება</th>
								<th class="column2">პრობლემის აღმოჩენა</th>
								<th class="column3">მიმართვა</th>
                                <th class="column4">პრობლემის მოგვარება</th>
								<!-- <th class="column4">მოგვარება</th> -->
								<th class="column6">ხანგრძლივობა</th>
								<th class="column7">პროვაიდერი</th>
                                <th class="column8">პროდუქტი</th>
                                <th class="column9">პრობლემის აღწერა</th>
                                <th class="column10">პროვაიდერის პასუხი</th>
                                <th class="column11">პრობლემური მხარე</th>
                                <th class="column12">ჩანაწერის თარიღი</th>
                                <th>Actions</th>
							</tr>
						</thead>
						<tbody>
								<tr>
                                    <td class="column5"><input type="text" name="problem_date" placeholder="Y-M-D /2021 - 00 - 00"></td>
									<td class="column1"><input type="text" name="problem_start" placeholder="პრობლემის დაწყება"></td>
									<td class="column2"><input type="text" name="problem_discover" placeholder="პრობლემის აღმოჩენა"></td>
									<td class="column3"><input type="text" name="appeal" placeholder="მიმართვა"></td>
                                    <td class="column4"><input type="text" name="problem_solved" placeholder="პრობლემის მოგვარება"></td>
									<!-- <td class="column4"><input type="text" name="duration" placeholder="მოგვარება"></td> -->
									<td class="column6"><input type="text" name="problem_dur" ></td>
									<td class="column7"><label for="provider" type="text" name="provider" placeholder="პროვაიდერი"></label>
                                    <select id="provider" name="provider">
                                        <option value="GC (BOG)">GC (BOG)</option>
                                        <option value="UFC (TBC)">UFC (TBC)</option>
                                        <option value="SB Betting">SB Betting</option>
                                        <option value="EGT">EGT</option>
                                        <option value="GlobalCell">GlobalCell</option>
                                        <option value="Betconstruct">Betconstruct</option>
                                        <option value="Lambda">Lambda</option>
                                        <option value="Caucasus">Caucasus</option>
                                        <option value="IT + Support">IT + Support</option>
                                        <option value="Betradar">Betradar</option>
                                        <option value="iPay">iPay</option>
                                        <option value="TBC Pay">TBC Pay</option>
                                        <option value="Magti">Magti</option>
                                        <option value="Nova (Oppa)">Nova (Oppa)</option>
                                        <option value="Everymatrix">Everymatrix</option>
                                        <option value="Silknet">Silknet</option>
                                        <option value="Front">Front</option>
                                        <option value="Evolution Gaming">Evolution Gaming</option>
                                        <option value="Golden Race">Golden Race</option>
                                        <option value="Nova payment systems">Nova payment systems</option>
                                        <option value="Most of">Most of</option>
                                        <option value="igrosoft">igrosoft</option>
                                        <option value="Middle">Middle</option>
                                        <option value="*">*</option>
                                        <option value="LiveCaller">LiveCaller</option>
                                    </select>
                                    </td>	
    								<td class="column8"><label for="product" type="text" name="product" placeholder="პროდუქტი"></label>
                                    <select id="product" name="product">
                                        <option value="Deposit">Deposit</option>
                                        <option value="Slot">Slot</option>
                                        <option value="SMS sending">SMS sending</option>
                                        <option value="Payout">Payout</option>
                                        <option value="Deposit/Payout">Deposit/Payout</option>
                                        <option value="All of services">All of services</option>
                                        <option value="Virtual">Virtual</option>
                                        <option value="EGT freespins">EGT freespins</option>
                                        <option value="P2P">P2P</option>
                                        <option value="Network">Network</option>
                                        <option value="Live">Live</option>
                                        <option value="Poker">Poker</option>
                                        <option value="UFO">UFO</option>
                                        <option value="Sport">Sport</option>
                                        <option value="Casino">Casino</option>
                                        <option value="Promotion">Promotion</option>
                                        <option value="Verification">Verification</option>
                                        <option value="odds">odds</option>
                                        <option value="Restart">Restart</option>
                                        <option value="Banners">Banners</option>
                                        <option value="Secredt Card">Secred Card</option>
                                        <option value="Cashdesk">Cashdesk</option>
                                        <option value="PlayNgo">PlayNgo</option>
                                        <option value="უფასო სპორტი">უფასო სპორტი</option>
                                        <option value="პაროლის შეცვლა">პაროლის შეცვლა</option>
                                        <option value="Web">Web</option>
                                        <option value="Login">Login</option>
                                        <option value="*">*</option>
                                        <option value="Online Chat">Online Chat</option>
                                    </select>
                                    </td>
                                    <td class="column9"><input type="text" name="problem_desc" placeholder="პრობლემის აღწერა"></td>
                                    <td class="column10"><input type="text" name="provider_answ" placeholder="პროვაიდერის პასუხი"></td>
                                    <td class="column11"><label for="poblem_side" type="text" name="poblem_side" placeholder="პრობლემური მხარე"></label>
                                    <select id="poblem_side" name="poblem_side">
                                        <option value="Provider">Provider</option>
                                        <option value="Network">Network</option>
                                        <option value="SB Betting">SB Betting</option>
                                        <option value="Frontend">Frontend</option>
                                        <option value="Unknown">Unknown</option>
                                        <option value="Bookmakers">Bookmakers</option>
                                        <option value="Hardware">Hardware</option>
                                        <option value="Middle">Middle</option>
                                        <option value="IT + Support">IT + Support</option>
                                    </select>
                                    </td>
                                    <th>#</th>
                                    <td class="column12"><button type="submit">დამატება</button></td>
								</tr>
                                </form>
                            @foreach($monitorings as $mn)
                                <tr>
                                    <td>{{ $mn -> problem_date }}</td>
                                    <td>{{ $mn -> problem_start }}</td>
                                    <td>{{ $mn -> problem_discover }}</td>
                                    <td>{{ $mn -> appeal }}</td>
                                    <td>{{ $mn -> problem_solved }}</td>
                                    <!-- <td>Unknown</td> -->
                                    <td>{{$mn->problem_dur}}</td>
                                    <td>{{ $mn -> provider }}</td>
                                    <td>{{ $mn -> product }}</td>
                                    <td>{{ $mn -> problem_desc }}</td>
                                    <td>{{ $mn -> provider_answ }}</td>
                                    <td>{{ $mn -> poblem_side }}</td>
                                    <td>{{ $mn -> created_at }} </td>
                                    <td>
                                        <form action="/monitoring/delete" method="POST">
                                        @csrf
                                            <input type="hidden" name="monitoring_id" value=" {{ $mn->id }} " />
                                            <button class = "btn-danger">X</button>
                                        </form>
                                        <form action="/monitoring/edit" method="GET">
                                            <input type="hidden" name="monitoring_id" value=" {{ $mn->id }} " />
                                            <button class = "btn-edit">/</button>
                                        </form>
                                    </td>
                                    </tr>
                            @endforeach
                        </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
    <audio id="xyz" src="/Music/alarm1.mp3" preload="auto"></audio>
	<script type="text/javascript">

		<?php 
		$counter=count($monitorings); ?>
		document.getElementById('xyz').play();
		alert("All Problems --> " + {{$counter}} + "\nSum of time All Problems --> " + {{array_sum($arrayoftime6)}} + " Hours");

</script>

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/main.js"></script>
    
</body>
</html>
