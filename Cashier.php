<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
 <head>
  <title>An application @The Cashier </title>
  <script src="cashier.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
  <link rel="stylesheet" type="text/css" href="print.css" media="print"/>
 </head>

 <body onload="init();">
  <form name="frmCashier" id="frmCashier" action="" >
   <table>
    <caption id="username">SavorSea Delights Ennada Nadakathu Inge</caption>
    <tr>
     <th>Item</th>
     <th>Price/Unit</th>
     <th>Quantity</th>
     <th>Sub Total</th>
    </tr>
    <tr>
     <td>PAPAYA SALAD SOM TAM</td>
     <td><input type="text" size="10" name="papaya_price" id="papaya_price" disabled="disabled" /></td>
     <td><input type="text" style="text-align:center" size="10" name="papaya_qty" onblur="papaya_salad_som_tam();" /></td>
     <td><input type="text" size="10" name="papaya_sub_total" disabled="disabled" /></td>
    </tr>
    <tr>
     <td>SEAFOOD SALAD</td>
     <td><input type="text" size="10" name="seafood_price" disabled="disabled" /></td>
     <td><input type="text" style="text-align:center" size="10" name="seafood_qty" onblur="seafood_salad();" /></td>
     <td><input type="text" size="10" name="seafood_sub_total" disabled="disabled" /></td>
    </tr>
    <tr>
     <td>STEAM SQUID</td>
     <td><input type="text" size="10" name="steam_price" disabled="disabled" /></td>
     <td><input type="text" style="text-align:center" size="10" name="steam_qty" onblur="steam_squid();" /></td>
     <td><input type="text" size="10" name="steam_sub_total" disabled="disabled" /></td>
    </tr>
    <tr>
     <td>MUSHROOM CURRY</td>
     <td><input type="text" size="10" name="curry_price" disabled="disabled" /></td>
     <td><input type="text" style="text-align:center" size="10" name="curry_qty" onblur="mushroom_curry();" /></td>
     <td><input type="text" size="10" name="curry_sub_total" disabled="disabled" /></td>
    </tr>
    <tr>
     <td>TOM YAM FRIED RICE</td>
     <td><input type="text" size="10" name="rice_price" disabled="disabled" /></td>
     <td><input type="text" style="text-align:center" size="10" name="rice_qty" onblur="tom_yam_fried_rice();" /></td>
     <td><input type="text" size="10" name="rice_sub_total" disabled="disabled" /></td>
    </tr>
    <tr>
     <td>Cold Drinks</td>
     <td><input type="text" size="10" name="drinks_price" disabled="disabled" /></td>
     <td><input type="text" style="text-align:center" size="10" name="drinks_qty" onchange="cold_drinks();" /></td>
     <td><input type="text" size="10" name="drinks_sub_total" disabled="disabled" /></td>
    </tr>
    <!-- Add more rows as needed -->

    <tr>
     <th colspan="6">TOTAL</th>
     <th><input type="text" size="10" name="g_total" value="0.00" disabled="disabled" /></th>
    </tr>
    <tr>
     <th colspan="4" align="center">
      <input type="button" value="print" onclick="window.print();" />
      <input type="button" value="reset" name="reset" onclick="init();" />
     </th>
    </tr>
   </table>
  </form>
 </body>
</html>

