<?php

include 'dbfr.php';

			
							$ql="SELECT * FROM hel  ";
						

							if($query_run=mysqli_query($con,$ql))
							{
						
							 		//$query_run=mysqli_query($con,$ql);
									$count=mysqli_num_rows($query_run);
									if($count>0)
									{
					   						while($row= mysqli_fetch_assoc($query_run))
					  						{
					  							
					      
					      							$link="http://maps.google.com/maps?q=".$row["lat"].",".$row["long"]."&ll=".$row["lat"].",".$row["long"]."&z=17";
					      								$fw=fopen("ttt.txt", "a");
                                                       fwrite($fw,$link."\n");
					      								
					      								
												}
						
									}
									else
									{
						          	//echo "error in registration 1";
											 echo "error1";


									}
					  }
							else
							{
								echo "error2";
														
							}
				


?>
