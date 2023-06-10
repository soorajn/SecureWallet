 			 <span>Amount Transfer</span>
             <hr />
			<div class="box-body well">
              <div class="table-responsive">
                <table  class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Sl No</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Contact No</th>
                        <th>Email</th>
                        <th>Pin No</th>
                        <th>Amount</th>  
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        $result = $db->prepare("select * from  transfer where frmpinn='$PINNNO' order by date asc");
                        $result->execute();
                        for($i=1; $row = $result->fetch(); $i++)
                        {
							 echo"<tr>";
								 echo"<td>".$i."</td>";					
								 echo"<td>".$row["date"]."</td>";
								 echo"<td>".$row["name"]."</td>";
								 echo"<td>".$row["contactno"]."</td>";	
								 echo"<td>".$row["email"]."</td>";
								 echo"<td>".$row["topinn"]."</td>";
								 echo"<td>".$row["amount"]."</td>";
							 echo"</tr>";
                        }
                    ?>	
                    </tbody>
                </table>
         		</div>
			</div>