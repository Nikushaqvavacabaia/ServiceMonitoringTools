<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Style/style.css">
    <title>Edit-Monitoring</title>
</head>
<body>
<form action="/monitoring/update" method="POST">
<input type="hidden" name="monitoring_id" value=" {{ $monitoring->id }} "/>
@csrf	
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
                <table>	
						<thead>
							<tr class="table100-head">
                                <th class="column3">თარიღი</th>
								<th class="column1">პრობლემის დაწყება</th>
								<th class="column2">პრობლემის აღმოჩენა</th>
								<th class="column3">მიმართვა</th>
                                <th class="column4">პრობლემის მოგვარება</th>
                                <th class="column5">ხანგრძლივობა</th>
								<th class="column6">პროვაიდერი</th>
                                <th class="column7">პროდუქტი</th>
                                <th class="column8">პრობლემის აღწერა</th>
                                <th class="column9">პროვაიდერის პასუხი</th>
                                <th class="column10">პრობლემური მხარე</th>
							</tr>
						</thead>
						<tbody>
								<tr>
                                    <td class="column1"><input type="text" name="problem_date" id="problem_date" value="{{ $monitoring->problem_date }}"></td>
									<td class="column1"><input type="text" name="problem_start" id="problem_start" value="{{ $monitoring->problem_start }}"></td>
									<td class="column2"><input type="text" name="problem_discover" id="problem_discover" value="{{ $monitoring->problem_discover }}"></td>
									<td class="column3"><input type="text" name="appeal" id="appeal" value="{{ $monitoring->appeal }}"></td>
                                    <td class="column4"><input type="text" name="problem_solved" id="problem_solved" value="{{ $monitoring->problem_solved }}"></td>
                                    <td class="column5"><input type="text" name="problem_dur" ></td>
									<td class="column7"><label for="provider" type="text" name="provider" id="provider" value="{{ $monitoring->provider }}"></label>
									<select id="provider" name="provider" >
                                        <option value="{{ $monitoring->provider }}">{{ $monitoring->provider }}</option>
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
									<td class="column6"><label for="product" type="text" name="product" id="product" value="{{ $monitoring->product }}"></label>
									<select id="product" name="product">
										<option value="{{ $monitoring->product }}">{{ $monitoring->product }}</option>
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
                                    <td class="column8"><input type="text" name="problem_desc" id="problem_desc" value="{{ $monitoring->problem_desc }}"></td>
                                    <td class="column9"><input type="text" name="provider_answ" id="provider_answ" value="{{ $monitoring->provider_answ }}"></td>
                                    <td class="column10"><label for="poblem_side" type="text" name="poblem_side" id="poblem_side" value="{{ $monitoring->poblem_side }}">
									<select id="poblem_side" name="poblem_side">
                                        <option value="{{ $monitoring->poblem_side }}">{{ $monitoring->poblem_side }}</option>
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
								</tr>
                        </tbody>
					</table>
					<button class="edit">ჩასწორება</button>
					<button class="cancel">უარყოფა</button>
				</div>
			</div>
		</div>
</body>
</html>
