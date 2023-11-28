<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestReturnContrller extends Controller
{
    public function InvestReturng($date){

		$datE=$mysqli->query("SELECT * FROM `upgrade` WHERE DATE(`date`)<='".$date."' ");
		while($allInvest=mysqli_fetch_assoc($datE)){
			$TradeSTrat = mysqli_num_rows($mysqli->query("SELECT `serial` FROM `start_trade` WHERE `user`='".$allInvest['user']."' AND DATE(date)='".$date."'"));
			if($TradeSTrat>0){
				//$AutoInvestf=mysqli_fetch_assoc($mysqli->query("SELECT SUM(amount) AS totak FROM `upgrade` WHERE `auto_id`='".$allInvest['serial']."' "));
				$TodaysSale1 = mysqli_fetch_assoc($mysqli->query("SELECT amount FROM `binary_manipulate` WHERE DATE(date)='".$date."'"));

				$totalInvest=$allInvest['amount'];   //$AutoInvestf['totak'];
				if($totalInvest>=25 && $totalInvest<500){
					$returnLimit=0.5;
				}elseif($totalInvest>=500){
					$returnLimit=0.8;
				}
				$comsDater = $allInvest['tr_duration'];
				//$Thisdays = $todaysD[$allInvest['tr_duration']];
				$Thisdays = $returnLimit+$TodaysSale1['amount'];
				echo $Thisdays;
				$returnDay=(($totalInvest*$Thisdays)/100);

				if($comsDater<=1){
					$ChekcEntry=mysqli_num_rows($mysqli->query("SELECT `serial` FROM `game_return` WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' AND `date`='".$date."'"));
					if($ChekcEntry<1){
						$mysqli->query("INSERT INTO `game_return`( `user`, `play_id`, `curent_bal`,`bonus_bal`,`date`) VALUES ('".$allInvest['user']."','".$allInvest['serial']."','".$returnDay."','".$Thisdays."','".$date."')");
					}
				}else{
					$ChekcEntry=mysqli_num_rows($mysqli->query("SELECT `serial` FROM `game_return_test` WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' AND `count_date`='".$date."'"));
					if($ChekcEntry<1){
						$mysqli->query("INSERT INTO `game_return_test`( `user`, `play_id`, `curent_bal`,`bonus_bal`,`count_date`) VALUES ('".$allInvest['user']."','".$allInvest['serial']."','".$returnDay."','".$Thisdays."','".$date."')");
					}
				}
			}



			$tRAFSD = $mysqli->query("SELECT `date` FROM `game_return` WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' ORDER BY `date` DESC");
			$uwieIU=mysqli_num_rows($tRAFSD);
			if($uwieIU>0){
				$erterUyt = mysqli_fetch_assoc($tRAFSD);
				$startDate = date("Y-m-d", strtotime($erterUyt['date']));
			}else{
				$Teasags=mysqli_fetch_assoc($mysqli->query("SELECT `date` FROM `game_return_test`  WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' ORDER BY `date` ASC"));
				$startDate = date("Y-m-d", strtotime($Teasags['date']));
				echo $Teasags['user']. " " .$startDate;
			}
			$CommissionDate = date("Y-m-d", strtotime($startDate ."+$comsDater days"));
			if($date>=$CommissionDate){
				$ChekcEntry=mysqli_num_rows($mysqli->query("SELECT `serial` FROM `game_return` WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' AND `date`='".$date."'"));
				if($ChekcEntry<1){
					$Comsfdg = mysqli_fetch_assoc($mysqli->query("SELECT SUM(curent_bal) AS tolacoms FROM `game_return_test` WHERE `user`='".$allInvest['user']."' AND `play_id`='".$allInvest['serial']."' AND DATE(`count_date`) BETWEEN '".$startDate."' AND '".$CommissionDate."'"));
					$mysqli->query("INSERT INTO `game_return`( `user`, `play_id`, `curent_bal`,`bonus_bal`,`date`) VALUES ('".$allInvest['user']."','".$allInvest['serial']."','".$Comsfdg['tolacoms']."','0','".$date."')");
				}
			}
		}
	}
	//$query_11=mysqli_fetch_assoc($mysqli->query("SELECT MAX(`date`) AS date FROM game_return ORDER BY `serial` DESC "));
	//$DATE=date("Y-m-d", strtotime($query_11['date']));
	//echo $DATE;

	$comsDtr = date("H");
	if($comsDtr=='2'){
		$date=date("Y-m-d");
		//$date=date("2023-09-25");
		InvestReturng($date);
		$query_11=mysqli_fetch_assoc($mysqli->query("SELECT MAX(`date`) AS date FROM game_return ORDER BY `serial` DESC "));
		$DATE=date("Y-m-d", strtotime($query_11['date']));
		Generationoncome($DATE);
	}
}
