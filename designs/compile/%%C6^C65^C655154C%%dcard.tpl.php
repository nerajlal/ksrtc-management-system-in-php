<?php /* Smarty version 2.6.26, created on 2022-05-07 20:38:45
         compiled from dcard.tpl */ ?>
<html>
<head><title>  </title></head>
<body>
  <form method="post" action="" >
    <table align="center">
      <input type="hidden" name="hide" value="h">
      <tr><td>Card Type</td><td><select name="cardtype" class="form-control">
        <option>---Select---</option>
        <option>Bronze</option>
        <option>Silver</option>
        <option>Gold</option>
        <option>Platinum</option>
        </select></td></tr>
        <tr><td>Amount</td><td><input type="text" name="amount" class="form-control"></td></tr>
        <tr><td>No Of Months</td><td><select name="month" class="form-control">
        <option>---Select---</option>
        <option>1</option>
        <option>3</option>
        <option>6</option>
        </select></td></tr>
        <tr><td>Card Details</td><td><input type="text" name="carddetails" class="form-control"></td></tr>
            <tr><td></td><td><input type="submit" value="Upload" class="btn btn-success"></td></tr>
        </table>
      </form>
    </body>
    </html>