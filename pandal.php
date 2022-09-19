<?php

include 'dbfr.php';
$cmd=$_POST['cmd'];
if($cmd=='register')
{
						$pin=$_POST['pin'];
			            $START=$pin-5;
			            $END=$pin+5;
	
			
							$ql="SELECT * FROM pandal WHERE VERIFY='1' AND (PINCODE BETWEEN $START AND $END) ";
						$ar=array();

							if($query_run=mysqli_query($con,$ql))
							{
						
							 		//$query_run=mysqli_query($con,$ql);
									$count=mysqli_num_rows($query_run);
									if($count>0)
									{
					   						while($row= mysqli_fetch_assoc($query_run))
					  						{
					  							$res=array();
					      
					      								$res["PANDAL_NAME"]=$row["PANDAL NAME"];
					      								$res["ADDRESS"]=$row["ADDRESS"];
					      								$res["MAP"]=$row["MAP"];
					      								$res["IMAGE"]=$row["IMAGE"];
					      								$res["RATING"]=$row["RATING"];
					      								$res["COMMENT"]=$row["COMMENT"];
					      								
					      								array_push($ar, $res);
					      								
												}
						
									}
									else
									{
						          	//echo "error in registration 1";
											 $ar[0]["MAP"]="nothing";


									}
					  }
							else
							{
								$ar[0]["MAP"]="nothing";
														
							}
echo json_encode($ar);					
}

?>
