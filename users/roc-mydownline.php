<?php 
include('index.tpl');

function getTitle()
{
echo 'My Downline';
}

function ShowContent($rocuname)
{

?>
<table width="90%" border="0" align="center" cellpadding="2" cellspacing="0">
                  <tr>
                    <td colspan="4" align="center" valign="middle" ><label class="submit"><input type="button" onclick="javascript:showside('idval_div','C')" value="Downline Complete"></label></td>
                  </tr>
                  <tr>
                    <td width="693" align="center" valign="middle" ><label class="submit"><input type="button" onclick="javascript:showside('idval_div','L','')" value="Left Side Only"></label></td>
                    <td width="695" align="center" valign="middle" ><label class="submit"><input type="button" onclick="javascript:showside('idval_div','R','')" value="Right Side Only"></label></td>
  </tr>
                  <tr>
                    <td colspan="4" align="center" valign="middle" ><hr /></td>
  </tr>
                  <tr>
                    <td colspan="4" align="center" valign="middle" >&nbsp;</td>
                  </tr>
</table>
<span class="output-div-container"><span id="idval_div">
<?php 
include ("rocmaindownlinefull.php");
}
?>
</span></span>
<script type="text/javascript" language="javascript">
function showside(div_id,o,fld)
{
			subject_id = div_id;
			var side=o;	
			if (side == "R")
     		http.open("GET", "mydownline-right.php?sr=" + fld ,  true);
			else if (side == "L")
			http.open("GET", "mydownline-left.php?sr=" + fld , true);
			else if (side == "C")
			http.open("GET", "rocmaindownlinefull.php" , true);
			http.onreadystatechange = handleHttpResponse;
			http.send(null);
}
</script>