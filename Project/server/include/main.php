 			 <span>Request</span>
             <hr />
			<div class="box-body well">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Account No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        $result = $db->prepare("select * from  walletotp");
                        $result->execute();
                        for($i=0; $row = $result->fetch(); $i++)
                        {
							echo"<tr>";
								echo"<td>".$row["accountno"]."</td>";
								echo"<td>".$row["name"]."</td>";
								echo"<td>".$row["email"]."</td>";
								echo"<td>".$row["mobileno"]."</td>";
								echo"<td>".$row["date"]."</td>";
							echo"</tr>";
                        }
                    ?>	
                    </tbody>
                </table>
         		</div>
			</div>