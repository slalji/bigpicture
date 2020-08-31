<div class="faqs card-heading">
               <!-- FAQ --> 
               <div class="card-heading-header" id="faq"><h1>FAQs</h1></div>
            
        <!-- end FAQ -->
        <!-- JS -->
<ul class='accordion'>
     <?php foreach ($faqs as $faq): ?>
    <div class="sub">
        <label for="cp-<?php echo $faq['Faq']['id']; ?>"> <?php echo $faq['Faq']['title']; ?><i></i></label>
        <input type="radio" name="a" id="cp-<?php echo $faq['Faq']['id']; ?>" >
        <div class='content'>
           <?php echo html_entity_decode($faq['Faq']['body']); ?>     
        </div>
    </div>


<?php endforeach; ?>
<?php unset($faq); ?>
</ul>
</div>

<!-- end FAQs-->
