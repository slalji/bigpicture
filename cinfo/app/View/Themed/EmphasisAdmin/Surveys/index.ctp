<div class="print"> 
<h1>Screening Form</h1>

<?php
$questions = array
  (
  array("data[Survey][Q1]","1. Are you 14 years of age or older?"),
  array("data[Survey][Q2]","2. Are you filling a new prescription or an on-going prescription for a daily control inhaler (inhaled corticosteroids (ICS) ,either monotherapy or in combination inhaler with long-acting beta-agonists)?"),
  array("data[Survey][Q3]","3. Have you ever been diagnosed by a doctor as having asthma?"),
  array("data[Survey][Q4]","4. Do you own a cellular phone with the ability to send and receive text messages?"),
  array("data[Survey][Q5]","5. Are you currently residing in BC and plan to reside for the next 12 months?"),
  array("data[Survey][Q6]","6. Have you been registered with BC’s medical services plan in the past 12 months, and planning to remain registered for the next 12 months"),
  array("data[Survey][Q7]","7. Are you <b>NOT</b> currently participating in another research study related to asthma?"),
  array("data[Survey][Q8]","8. Are you willing to participate in this study?"),
  array("data[Survey][Q9]","9. Is participant eligible?")
  );
echo $this->Form->create('Survey');
echo  '<section id="sec1" class="col-xs-12" >';
echo '<div class="col-xs-6">';

echo '<div class="input text">' . $this->Form->label('date_completed') . $this->Form->date('date_completed') . '</div>';
echo '</div>';
echo '<div class="col-xs-6">';
echo $this->Form->input('completed_by', array('label'=>'Completed By', 'placeholder'=>'Completed By'));
echo '</div>
  </section>';

?>
<section id="info" class="col-xs-12" style="font-weight: bold; font-size: 12px; text-align: center">
    If selected "No" to any of the following questions, then participant is not eligible
</section>
<section id="sec2" class="col-xs-12" >
<?php foreach ($questions as $quest): ?>

    <div class="sub col-xs-12 question" > 
        <div class="col-xs-6" >
        <label for=<?php echo $quest[0]; ?>><?php echo $quest[1]; ?></label>
        </div>
        <div class="col-xs-6" >
            <input type="radio" name=<?php echo $quest[0]; ?> id=<?php echo $quest[0]."Yes"; ?> value="Yes" required> Yes
        <input type="radio" name=<?php echo $quest[0]; ?> id=<?php echo $quest[0]."No" ?> value="No" > No
        </div>
    </div>
    


<?php endforeach; ?>

<?php

//echo $this->Form->end('Submit Survey');
echo '<div class="col-xs-12"><div class="col-xs-6" >';
echo $this->Form->input('Paste', array('class'=>'paste', 'placeholder'=>'Paste ID'));

echo '<input type="button" value="Print this page" onClick="window.print()">';
echo '</div> </div> </div>';
?> 
<p><br>
</div>  
   
<style>
    .print{margin:0px; background: #fff; width:800px; height:800px; font-size:11px; }
    body{background:#fff; margin:0px; padding:0px}
    #header{display:none;}
</style>
    


