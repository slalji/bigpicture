<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

//$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
//$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
$cakeDescription = __d('cake_dev', 'Emphasis: Info');
$cakeVersion = __d('cake_dev', 'Emphasis %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
                   //Bootstrap -->
                echo $this->Html->css('bootstrap.min');
     
    // styles -->
            echo $this->Html->css('styles');
            echo $this->Html->css('bigpicture');
            echo $this->Html->css('custom');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');                
                echo $this->Html->script('jquery');
                echo $this->Html->script('bootstrap.min');
	?>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65701121-2', 'auto');
  ga('send', 'pageview');

</script>
   <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body data-spy="scroll" data-offset="0" data-target="#myScrollspy" >
    
<div id="container">
<div class="bigpicture">


		<div id="content">
                       
			<?php echo $this->Session->flash(); ?>
                    <div class="main" style="top:130px">
			<?php echo $this->fetch('content'); ?>
                    </div>
		</div>
		
            

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

    
    <?php
    echo $this->Html->script('bootstrap.min');
            echo $this->Html->script('custom');
            echo $this->Html->script('share.min');
             echo $this->Html->script('tiny_mce/tinymce.min');
             echo $this->Html->script('tinyMCE');
             
     ?>

 
	</div> <!-- end container-->
 
 </div>


        </div><!-- end bigpicture-->
        <p><br>
    <p><br>
        <footer id="footer">

                <!-- Icons -->
                
                        <ul class="actions">
                            <li class="current"><a href="/"><i class="glyphicon glyphicon-home"></i></a></li>
                                <li><a href="https://twitter.com/maryadevera" class="icon fa-twitter nobkg"></a></li>
                                <!--<li><a href="http://emphasis.core.ubc.ca/cinfo/admin" class="icon fa-sign-in nobkg"></a></li>-->
                                <li><?php if ($logged_in): ?>       
                    
                Welcome <?php echo $current_user['username'];?>
                <i class="glyphicon glyphicon-log-out"></i><?php echo $this->Html->link(' Logout', array('controller' => 'users', 'action' => 'logout'));?>
            <?php else:?>
                <i class="glyphicon glyphicon-log-in"></i><?php echo $this->Html->link(' Login', array('controller' => 'admin', 'action' => 'index'));?>
            <?php endif;?></li>
                                <!--<li><a href="http://disqus.com" class="disqus">Blog</a></li>

                                <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                                <li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
                                <li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
                                <li><a href="#" class="icon fa-pinterest"><span class="label">Pinterest</span></a></li>
                                <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>-->
                        </ul>

                <!-- Menu -->
                        <ul class="menu">

                                        <li><a href="http://emphasis.core.ubc.ca/#team" class="team_id">Team</a></li>
                                        <li><a href="http://emphasis.core.ubc.ca/#knowledge">Info</a></li>
                                       <!-- <li><a href="BootstrapAdmin/pharmacists.html">Sign in</a></li>-->


                                <li>© Collaborations Outcomes Research and Evaluations</li>
                                
                        </ul><div class="design">Design: Salma Lalji </div>
                      

</footer>
	
        
        <?php //echo $this->element('sql_dump'); ?>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>

  <script>

  $(function() {
    $( "#accordion" ).accordion({
      event: "click hoverintent"
    });
  });
 
  /*
   * hoverIntent | Copyright 2011 Brian Cherne
   * http://cherne.net/brian/resources/jquery.hoverIntent.html
   * modified by the jQuery UI team
   */
  $.event.special.hoverintent = {
    setup: function() {
      $( this ).bind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    teardown: function() {
      $( this ).unbind( "mouseover", jQuery.event.special.hoverintent.handler );
    },
    handler: function( event ) {
      var currentX, currentY, timeout,
        args = arguments,
        target = $( event.target ),
        previousX = event.pageX,
        previousY = event.pageY;
 
      function track( event ) {
        currentX = event.pageX;
        currentY = event.pageY;
      };
 
      function clear() {
        target
          .unbind( "mousemove", track )
          .unbind( "mouseout", clear );
        clearTimeout( timeout );
      }
 
      function handler() {
        var prop,
          orig = event;
 
        if ( ( Math.abs( previousX - currentX ) +
            Math.abs( previousY - currentY ) ) < 7 ) {
          clear();
 
          event = $.Event( "hoverintent" );
          for ( prop in orig ) {
            if ( !( prop in event ) ) {
              event[ prop ] = orig[ prop ];
            }
          }
          // Prevent accessing the original event since the new event
          // is fired asynchronously and the old event is no longer
          // usable (#6028)
          delete event.originalEvent;
 
          target.trigger( event );
        } else {
          previousX = currentX;
          previousY = currentY;
          timeout = setTimeout( handler, 100 );
        }
      }
 
      timeout = setTimeout( handler, 100 );
      target.bind({
        mousemove: track,
        mouseout: clear
      });
    }
  };
  </script>
</body>
</html>
