<header id="header">

<!-- Logo -->
<a href="/"><h1 id="logo">EmPhAsIS</h1></a>

<!-- Nav-->
    <nav id="nav">  
       
     

        <div style="text-align: right">
            <ul>
                 
            <?php foreach ($patients as $post): ?>
                    <li ><a href="#<?php echo $post['Patient']['id']; ?>"><?php echo $post['Patient']['title']; ?></a></li>
                    <?php endforeach; ?>
                    <?php unset($post); ?>
             <li><a href="#faq">FAQs</a></li>
               
            </ul>
        </div>
    </nav> 

</header>
    <div class="page-content">
    	<div class="row">
	  <!-- <div class="col-md-2" id="myScrollspy">
		<div class="sidebar content-box" style="display: block;">
                    <a href="#top"></a>
                <ul class="nav affix-top" data-spy="affix" data-offset-top="125">
                    <!-- Main menu  
                    
                    <li class="current"><a href="/"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    <li><a href="#faq"><i class="glyphicon glyphicon-question-sign"></i> FAQs</a></li>
                    <?php foreach ($patients as $post): ?>
                    <li ><a href="#<?php echo $post['Patient']['id']; ?>"><?php echo $post['Patient']['title']; ?></a></li>
                    <?php endforeach; ?>
                    <?php unset($post); ?>
                     <li class="current"><a href="#top"><i class="glyphicon glyphicon-arrow-up"></i> Top</a></li>
                </ul>
             
                </div>
               
           </div>-->
      <!--end row-->
    <div class="col-md-9 ">
            <?php foreach ($patients as $post): ?>
      <div class="card">
            <div class="card-heading image">
               <!--<a href="profile.html"> <img class="pull-right" src="assets/img/shaan.png" alt="author avatar"></a>-->
                <div class="card-heading-header">
                   <h1 id="<?php echo $post['Patient']['id']; ?>"><?php echo $post['Patient']['title']; ?></h1>
                   <!-- <h3>  <span> Published today - <i class="icon-time muted"> </i> 08.34 AM</span>  <i class="icon-eye-open muted"> </i> 4 min read  <span>  By <a href="profile.html"> Shaawn kan </a>  in  <i class="icon-bookmark muted"> </i>  <a href="topic.html"> Topic/Category </a></span> </h3> -->
                </div>
            </div>
                               
            <div class="card-body">

                    <?php echo html_entity_decode($post['Patient']['body']); ?>

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
        </div>
    </div>
      
       
      

   