<!DOCTYPE html>

<html lang="en">
<head>
    <title>Java Jam Coffee House</title>
    <meta name="description" content="CENG 311 Inclass Activity 1" />

</head>

<body>

	<form action = "activity4.php" method="GET">
		<?php /** get related ratio to calculate the result value*/
		 	$array = array("USD"."CAD" => 1.35,"USD"."USD" => 1.0, "USD"."EUR" => 0.92,
						   "EUR"."CAD" => 1.47,"EUR"."USD" => 1.09,"EUR"."EUR" => 1.0,
						   "CAD"."CAD" => 1.0, "CAD"."USD" => 0.74,"CAD"."EUR" => 0.68);
				
			if(isset($_GET["value1"]) && isset($_GET["value2"]) && isset($_GET["tCurrency"]) && isset($_GET["fCurrency"])){
				$val1 = $_GET["value1"]; 
				$fC = $_GET["fCurrency"];
				$tC = $_GET["tCurrency"];
				$result = $_GET["value1"] * $array[$fC.$tC];	
			}
		?>
		<table>
			<tr>
				<td>
					From:
				</td>
				<td>
					<input type="text" name="value1" value="<?php echo $val1;?>"/>
					
				</td>
				<td>
					Currency:
				</td>
				<td>
					<select name="fCurrency" id="fCurrency">
						<option value="USD"<?php echo (isset($fC) && $fC == "USD") ? "selected" : ""; ?> /> USD </option>
						<option value="CAD"<?php echo (isset($fC) && $fC == "CAD") ? "selected" : ""; ?> /> CAD </option>
						<option value="EUR"<?php echo (isset($fC) && $fC == "EUR") ? "selected" : ""; ?> /> EUR </option>
					</select>
				</td>	
			</tr>
			<tr>
				<td>
					To:
				</td>
				<td>
					<!-- renamed name attributes to access each element specifically -->
					<input type="text" name="value2" value="<?php echo $result?>"/>
				</td>
				<td>
					Currency:
				</td>
				<td>
				<!-- check if the value sent in query string is same with any of the options,
				 if it is add select attribute to it so that is shows the selected attribute. -->
					<select name="tCurrency"> 
						<option value="USD"<?php echo (isset($tC) && $tC == "USD") ? "selected" : ""; ?> /> USD </option>
						<option value="CAD"<?php echo (isset($tC) && $tC == "CAD") ? "selected" : ""; ?> /> CAD </option>
						<option value="EUR"<?php echo (isset($tC) && $tC == "EUR") ? "selected" : ""; ?> /> EUR </option>
					</select>
				</td>	
			</tr>
				<tr>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					
				</td>
				<td>
					<input type="submit" value="convert"/>
				</td>	
			</tr>
		</table>
		
	</form>		

	
</body>