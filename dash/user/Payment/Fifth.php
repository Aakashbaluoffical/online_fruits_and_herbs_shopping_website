<?php include 'header.php'?>
<?php
	ob_start();
	$con=mysqli_connect("localhost","root","","db_registration");

	  session_start();
	  $sel="select * from tb_cart_head where cart_head_id='".$_GET['chead_id']."'";
                            $row=mysqli_query($con,$sel);
                            $data=mysqli_fetch_array($row);
                               $amt=$data['cart_head_total'];
	  if(isset($_POST['btnBack']))
	  {
		header("Location:../index.php");
		
	  }
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
 <style type="text/css">
        .auto-style18 {
            height: 35px;
        }
        .auto-style21 {
            height: 39px;
        }
        .auto-style24 {
            width: 50px;
            height: 30px;
        }
        .auto-style28 {
            width: 34px;
            height: 27px;
        }
        .auto-style29 {
            height: 55px;
        }
        .auto-style30 {
            text-align: right;
            font-weight: 700;
            width: 422px;
            height: 29px;
        }
        .auto-style32 {
            height: 29px;
        }
        .auto-style33 {
            text-align: right;
            font-weight: 700;
            width: 422px;
            height: 30px;
        }
        .auto-style35 {
            height: 30px;
        }
        .auto-style36 {
            text-align: right;
            font-weight: 700;
            width: 422px;
            height: 32px;
        }
        .auto-style38 {
            height: 32px;
        }
        .auto-style39 {
            height: 108px;
        }
        .auto-style40 {
            height: 29px;
            width: 11px;
        }
        .auto-style41 {
            height: 30px;
            width: 11px;
        }
        .auto-style42 {
            height: 32px;
            width: 11px;
        }
    </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form name="frm" id="frm" method="post">
<script type="text/javascript">   
    function PrintDiv() {    
		var divToPrint = document.getElementById('divToPrint');
		var popupWin = window.open('', '_blank', 'width=1500,height=700');
		popupWin.document.open();
		popupWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
 </script>
    </script>
    <div id="printablediv"><fieldset><legend style="text-align: center; font-weight: 700">Payment Details</legend>
       
        <table  align="center" class="auto-style1">
            <tr>
                <td class="auto-style18"></td>
                <td class="auto-style18" style="text-align: center; color: #3399FF">Payment Success...</td>
                <td class="auto-style18"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
					<div id="divToPrint">
                    <table align="center" width="100%" height="250px" style="font-weight:bold;font-size:1em;" class="auto-style1">
                        <tr>
                            <td>Merchant</td>
							<td>:</td>
                            <td>&nbsp;Fruits & Herbs </td>
                        </tr>
                        <tr>
                            <td>Date</td>
							<td>:</td>
                            <td>&nbsp;<?php echo date("d-m-Y");?></td>
                        </tr>
                        <tr>
                            <td>Amount</td>
							<td>:</td>
                            <td>&nbsp; Rs.<?php echo $amt;?><strong>/-</strong></td>
                        </tr>
                        <tr>
                            <td>Transaction ID</td>
							<td>:</td>
                            <td>&nbsp; <?php echo rand(10000,10000000);?> </td>
                        </tr>
					</table>
					</div>
					<table  align="center"  class="auto-style1">
                        <tr>
                            <td colspan="3" class="auto-style21" style="text-align: center">
                                <input type="submit" value="" name="btnsub" Width="108px" OnClick="PrintDiv();" style="background-image:url('Icons/1391813769_printer.png');background-repeat:no-repeat;height:50px;width:50px;border:none;"  />
                            </td>
                        </tr>
                    </table>
                </td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td class="auto-style39"></td>
                <td style="text-align: center" class="auto-style39">&nbsp;&nbsp;&nbsp;
                    <img alt="" class="auto-style24" src="Icons/1391813453_mastercard1.gif" />
                    <img alt="" class="auto-style24" src="Icons/1391813456_visa2.gif" />
                    <img alt="" class="auto-style24" src="Icons/1391813466_westernunion.gif" />
                    <img alt="" class="auto-style24" src="Icons/1391813469_cirrus1.gif" />
                    <img alt="" class="auto-style24" src="Icons/1391813513_visa1.gif" /></td>
                <td class="auto-style39"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td class="auto-style18" style="text-align: center; color: #3399FF">Thank You
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><table  align="center"  class="auto-style1">
                        <tr>
                            <td colspan="3" class="auto-style21" style="text-align: center">
                                <input type="submit" value="Back To Home" name="btnBack" Width="108px"  />
                            </td>
                        </tr>
                    </table></td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        </table>
       
    </fieldset></div>
    </form>
</body>
</html>