<header id="header">

<!-- Logo -->
<a href="/"><h1 id="logo">EmPhAsIS</h1></a>

<!-- Nav-->
    <nav id="nav">  
       
     

        <div style="text-align: right">
            <ul>
                 
                <?php if ($logged_in): ?>       
                    
                Welcome <?php echo $current_user['username'];?>
                <i class="glyphicon glyphicon-log-out"></i><?php echo $this->Html->link(' Logout', array('controller' => 'users', 'action' => 'logout'));?>
            <?php else:?>
                <i class="glyphicon glyphicon-log-in"></i><?php echo $this->Html->link(' Login', array('controller' => 'admin', 'action' => 'index'));?>
            <?php endif;?>
            </ul>
        </div>
    </nav> 

</header>
<h1>Admin/Editor Login</h1>

<ul>
    <li><?php echo $this->Html->link('Usual Care', array('controller' => 'admin', 'action' => 'pharmacists'));?></li>
    <li><?php echo $this->Html->link('Intervention', array('controller' => 'admin', 'action' => 'interventions'));?></li>
    <li><?php echo $this->Html->link('Patients', array('controller' => 'admin', 'action' => 'patients'));?></li>
    <li><?php echo $this->Html->link('Uploads', array('controller' => 'admin', 'action' => 'uploads'));?></li>

</ul>
