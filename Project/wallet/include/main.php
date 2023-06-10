 			 <span>Account Holders</span>
             <hr />
<div class="box-body well">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                   <thead>
                        <tr>
                         <th>Account No</th>	
                         <th>Name</th>
                         <th>Sex</th>
                         <th>Age</th>
                         <th>Address</th>
                         <th>Contact</th>
                         <th>Email</th>
                       </tr>
                      </thead>
                    <tbody>	
                        <?php
                        $result = $db->prepare("select * from  account");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++)
                            {
                            echo"<tr>";		
								echo"<td>".$row["ac_account_no"]."</td>";					
                                echo"<td>".$row["ac_name"]."</td>";	
                                echo"<td>".$row["ac_sex"]."</td>";
                                echo"<td>".$row["ac_age"]."</td>";	
                                echo"<td>".$row["ac_addr"]."</td>";	
                                echo"<td>".$row["ac_mob"]."</td>";	
                                echo"<td>".$row["ac_email"]."</td>";	
                            echo"</tr>";
                            }
                    ?>			
                    </tbody>
                  </table>
         		</div>
			</div>