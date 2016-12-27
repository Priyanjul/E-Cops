<?php

error_reporting(0);
$connect = mysql_connect("localhost", "root", "") or die(mysql_error());


mysql_select_db("ecops") or die(mysql_error());

echo "Connected Succesfully!.<br><br>";

$Query="select * from complaint";
				$dbresult=mysql_query($Query);
				if(mysql_num_rows($dbresult) >0)
				{
				echo "<table border = 1 width=\"95%\" border=\"0\" cellpadding=\"2\" cellspacing=\"2\" class=\"text_black\">
                <tr class=\"yellow\">
                <td width=\"5%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">id</td>
                  <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">name</td>
                  <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">gender </td>
				   <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">age</td>
                  <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">tel </td>
				   <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">c_type</td>
                  <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">datee </td>
				   <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">timee</td>
                  <td width=\"10%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">place </td>
                  <td width=\"15%\" align=\"center\" valign=\"middle\" class=\"text_black_bold\">descc </td>
                       
                </tr> ";

	
					while($rows=mysql_fetch_row($dbresult))
					{
					echo " 
                <tr class=\"text_black\" align=\"left\" valign=\"middle\">
                  <td width=\"5%\">$rows[0]</td>
                  <td width=\"10%\">$rows[1]</td>
				  <td width=\"10%\">$rows[2]</td>
                  <td width=\"10%\">$rows[3]</td>
                   <td width=\"10%\">$rows[4]</td>
                    <td width=\"10%\">$rows[5]</td>
                     <td width=\"10%\">$rows[6]</td>
                      <td width=\"10%\">$rows[7]</td>
                       <td width=\"10%\">$rows[8]</td>
                        <td width=\"15%\">$rows[9]</td>

				                  </tr>";
             		  
					
				}
				
				echo " </table> " ;	
							
			}
			
			else
				echo "Sorry Data Not Available";

?>