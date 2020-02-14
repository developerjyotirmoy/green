<!DOCTYPE html>
<html lang="en">
<?php
  include'lib/header.php';
  include'lib/connection.php';

?>
<div class="container-fluid">
  <h1>User Infromation</h1>
  <form method="POST" action="allagent.php">
    <label for="validatedtype">Valited Type</label>
    <select name="validatedtype" >
      <option>Please Select </option>
      <option>None</option>
      <option>Electric</option>
      <option>Gas</option>
      <option>Both</option>
    </select>
    <br><br>
    <label for="leaddate">Lead Date</label>
    <input type="date" name="leaddate" placeholder="enter leaddate">
    <br><br>
    <label for="businessname">Business Name</label>
    <input type="text" name="businessname" placeholder="enter businessname">
    <br><br>
    <label for="businessaddress">Business Address</label>
    <input type="text" name="businessaddress" placeholder="enter businessaddress">
    <br><br>
    <label for="businesspostcode">Business Post Code</label>
    <input type="text" name="businesspostcode" placeholder="enter businesspostcard">
    <br><br>
    <label for="agentid">Agent ID</label>
    <input type="text" name="agentid" placeholder="enter agentid">
    <br><br>
    <label for="customername">Customer Name</label>
    <input type="text" name="customername" placeholder="enter customername">
    <br><br>
    <label for="billingname">Billing Name</label>
    <input type="text" name="billingname" placeholder="enter billingname">
    <br><br>
    <label for="phoneno">Phone No</label>
    <input type="text" name="phoneno" placeholder="enter phoneno">    
  <div class="row">
    <div class="col-lg-6" style="background-color:;">
      <h1>ELECTRICITY</h1>
        <label for="currentsupplier">Current Supplier</label>
        <input type="text" name="current_elec" placeholder="enter Current Supplier" placeholder="currentsupplier">
        <select name="currentsupplier_elec">
        <option>Please Select</option>
        <option>British Gas</option>
        <option>Eon Energy</option>
        <option>Opus Energy</option>
        <option>N Power</option>
        <option>Scottish Power</option>
        <option>Scottish & Southern Electricity</option>
        <option>Scottish Hydra</option>
        <option>Extra Energy</option>
        <option>Swolec</option>
        <option>Haven Power</option>
        <option>Total Gas & Power</option>
        <option>Dual Energy</option>
        <option>Gazprom</option>
        <option>Bulen Energy</option>
        <option>Engie Power</option>
        <option>Hudson Energy</option>
        <option>XLN Energy</option>
        <option>Utilito</option>
        <option>Pozitive Energy</option>
        <option>Ecotricity</option>
        <option>Dony Energy</option>
        <option>Axis Energy</option>
        <option>Bes Utilities</option>
        <option>Bristal Energy</option>
        <option>Corona Energy</option>
        <option>Crown Gas & Power</option>
        <option>Utility Warehouse</option>
        <option>Yarkshire Gas & Power & Y U Energy</option>
        <option>others</option>
        </select>
        <br><br>
        <label for="customeraccountno">Customer Account No</label>
        <input type="number" name="customeraccountno_elec" placeholder="enter customeraccountno">
        <br><br>
        <label for="monthandyear">Month and Year</label>
        <input type="date" name="monthandyear_elec" placeholder="enter monthandyear">
        <br><br>
        <label for="contractenddate">Contract End Date</label>
        <input type="date" name="contractenddate_elec" placeholder="enter contractenddate">
        <br><br>
        <label for="paymentmethod">Payment Method</label>
        <select name="paymentmethod_elec">
          <option>Debit</option>
          <option>Cash</option>
          <option>Cheque</option>
          <option>Other</option>
        </select>
        <br><br>
        <label for="metertype">Meter Type</label>
        <select name="metertype_elec">
          <option>Day Meter</option>
          <option>Day And Night Meter</option>
          <option>Flexi Rate 2 Meter</option>
          <option>Flexi Rate 2 Meter</option>
        </select>
        <br><br>
        <label for="annualconsumption">Annual Consumption</label>
        <input type="text" name="annualconsumption_elec" placeholder="annualconsumption">
        <br><br>
    </div>
    <div class="col-lg-6" style="background-color:;">
      <h1>GAS</h1>
        <label for="currentsupplier">Current Supplier</label>
        <input type="text" name="current_gas" placeholder="currentsupplier">
        <select name="currentsupplier_gas">
          <option>Please Select</option>
          <option>British Gas</option>
          <option>Eon Energy</option>
          <option>Opus Energy</option>
          <option>N Power</option>
          <option>Scottish Power</option>
          <option>Scottish & Southern Electric</option>
          <option>Extra Energy</option>
          <option>Swolec</option>
          <option>Haven Power</option>
          <option>Total Gas & Power</option>
          <option>Dual Energy</option>
          <option>Gazprom</option>
          <option>Bulen Energy</option>
          <option>Engie Power</option>
          <option>Hudson Energy</option>
          <option>XLN Energy</option>
          <option>Utilito</option>
          <option>Pozitive Energy</option>
          <option>Ecotricity</option>
          <option>Dony Energy</option>
          <option>Axis Energy</option>
          <option>Bes Utilities</option>
          <option>Bristal Energy</option>
          <option>Corona Energy</option>
          <option>Crown Gas & Power</option>
          <option>Utility Warehouse</option>
          <option>Yarkshire Gas & Power & Y U Energy</option>
          <option>Others</option>
        </select>
        <br><br>
        <label for="customeraccountno">Customer Account No</label>
        <input type="text" name="customeraccountno_gas" placeholder="customeraccountno">
        <br><br>
        <label for="monthandyear">Month and Year</label>
        <input type="date" name="monthandyear_gas" placeholder="monthandyear">
        <br><br>
        <label for="contractenddate">Contract End Date</label>
        <input type="date" name="contractenddate_gas" placeholder="contractenddate">
        <br><br>
        <label for="paymentmethod">Payment Method</label>
        <select name="paymentmethod_gas">
          <option>Debit</option>
          <option>Cash</option>
          <option>Cheque</option>
          <option>Other</option>
        </select>
        <br><br>
        <label for="annualconsumption">Annual Consumption</label>
        <input type="text" name="annualconsumption" placeholder="annualconsumption" >
        <br><br>
    </div>
  </div>
</div>
<h1>CURRENT</h1>
  <div class="row">
    <div class="col-lg-6" style="background-color:;">
        <label for="day">Day</label>
        <input type="text" name="day_elec" placeholder="day">
        <br><br>
        <label for="night">Night</label>
        <input type="night" name="night_elec" placeholder="night">
        <br><br>
        <label for="eveweekends">Eve/Weekends</label>
        <input type="eveweekends" name="eveweekends_elec" placeholder="eveweekends">
        <br><br>
        <label for="standingcharge">Standing Charge</label>
        <input type="standingcharge" name="standingcharge_elec" placeholder="standingcharge">
        <br><br>
        <label for="supply">Supply</label>
        <fieldset>
          <select name="supplyno_elec">
            <option>01</option>
            <option>02</option>
            <option>03</option>
            <option>04</option>
            <option>05</option>
            <option>06</option>
            <option>07</option>
            <option>08</option>
            <option>09</option>
          </select>
          <input type="text" size="3" maxlength="3">
          <input type="text" size="4" maxlength="4">
          <input type="text" size="4" maxlength="4">
          <input type="text" size="4" maxlength="4">
          <input type="text" size="4" maxlength="4">
        </fieldset>
        <br><br>
        <label for="average">Average Bill Amount</label>
        <input type="text" name="average_elec " placeholder="averagebillamount">
        <select name="averagebillamount_elec">
          <option>Monthly/Quaterly</option>
          <option>Monthly</option>
          <option>Quaterly</option>
        </select>
        <br><br>
        <label for="msn">MSN</label>
        <input type="text" name="msn_elec" placeholder="msn">
    </div>
    <div class="col-lg-6" style="background-color:;">
        <label for="day">Day</label>
        <input type="text" name="day_gas" placeholder="day">
        <br><br>
        <label for="standingcharge">Standing Charge</label>
        <input type="text" name="standings_gas" placeholder="standingcharge">
        <br><br>
        <label for="mprno">MPR NO</label>
        <input type="mprno" name="mpr_gas" placeholder="mprno">
        <br><br>
        <label for="average">Average Bill Amount</label>
        <input type="text" name="average_gas" placeholder="averagebillamount">
        <select name="averagebillamount_gas">
          <option>Monthly/Quaterly</option>
          <option>Monthly</option>
          <option>Quaterly</option>
        </select>
        <br><br>
        <label for="msnno">MSN NO</label>
        <input type="text" name="msn_gas" placeholder="msnno">
    </div>
  </div>
<div class="container-fluid">
  <h1>ALL</h1>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="email">
    <br><br>
    <label for="bankaccount">Bank Account</label>
    <input type="bankaccount" name="bankaccount" placeholder="bankaccount">
    <br><br>
    <label for="qafeedback">QA Feedback</label>
    <input type="text" name="qafeedback" placeholder="qafeedback">
    <br><br>
    <label for="agentfeedback">Agent Feedback</label>
    <input type="text" name="agentfeedback" placeholder="agentfeedback">
    <br><br>
    <label for="callbackdate">Call Back Date</label>
    <input type="text" name="callbackdate " placeholder="callbackdate">
    <br><br>
    <label for="leadstatus">Lead Status</label>
    <select name="leadstatus">
      <option>Call Back</option>
      <option>Plain Survey</option>
      <option>Quality</option>
      <option>Quality Low AQ</option>
    </select>
    <br><br>
    <label for="annualconsumption">Annual Consumption</label>
    <input type="text" name="annualconsumption" placeholder="annualconsumption">
    <br><br>
    <label for="addfile">Add FIle</label>
    <input type="file" name="file" accept="audio/*">
    <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Submit</button>
    <button type="Reset" class="btn btn-outline-warning my-2 my-sm-0">Reset</button>
    </form> 
</div>
</body>
</html>
