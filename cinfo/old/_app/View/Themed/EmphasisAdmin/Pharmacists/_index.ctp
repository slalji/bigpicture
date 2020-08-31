<header id="header">

<!-- Logo -->
<a href="/"><h1 id="logo">EmPhAsIS</h1></a>

<!-- Nav-->
    <nav id="nav">
       
     

        <div style="text-align: right">
            <ul>
                 <li><a href="#survey">Screening Forms</a></li>
            <?php foreach ($pharmacists as $post): ?>
            <li><a href="#<?php echo $post['Pharmacist']['id']; ?>"><?php echo $post['Pharmacist']['title']; ?></a></li>
                    <?php endforeach; ?>
                    <?php unset($post); ?>
             <li><a href="#faq">FAQs</a></li>
               
            </ul>
        </div>
    </nav> 

</header>
<div class="page-content">
    	<!--<div class="row">
	   <div class="col-md-2" id="myScrollspy">
		<div  xclass="sidebar content-box" xstyle="display: block;">
                    
                    <a href="#top"></a>
                   
                <ul class="nav affix-top" data-spy="affix" data-offset-top="100">
                    <!-- Main menu 
                 
                    
                     <li class="current"><a href="#top"><i class="glyphicon glyphicon-arrow-up"></i> Top</a></li>
                </ul>
             
                </div>
               
           </div>-->
      <!--end row-->
    <div class="col-md-9 ">
        <div class=""><h1>Usual Care Pharmacies</h1></div>
        <div class="sec">


        <div class="survey">
            <?php 
            echo "<button class=printbtn >".$this->Html->link('Screening Form', 'javascript:;', array(
    'onclick' => "var openWin = window.open('".$this->Html->url(array('controller'=>'surveys','action'=>'index'))."', '_blank', 'toolbar=0,scrollbars=1,location=0,status=1,menubar=0,resizable=1,width=800,height=500');  return false;"
))."</button>";
            ?>
        </div>
            
            <?php foreach ($pharmacists as $post): ?>
      <div class="card">
            <div class="card-heading image">
                <div class="card-heading-header">
                   <h1 id="<?php echo $post['Pharmacist']['id']; ?>"><?php echo $post['Pharmacist']['title']; ?></h1>
                  </div>
            </div>
                               
            <div class="card-body">

                    <?php echo html_entity_decode($post['Pharmacist']['body']); ?>

            </div>

            <div class="card-actions card-comments">
             <!--     <button class="btn">+1</button>
                 <button class="btn">Share</button>
                 <a href="#"> <i class="icon-facebook  muted pull-right"></i> </a>
                 <a href="#"> <i class="icon-twitter  muted pull-right"></i> </a>
                 <a href="#"> <i class="icon-google-plus  muted pull-right"></i> </a>

             --></div>
          <hr >
                            
           <?php endforeach; ?>
           <?php unset($post); ?>
        </div> <!-- end card-->
        <div class="card">
            <?php echo $this->element('faq'); ?>
        </div>
    </div>
        
       
      

   