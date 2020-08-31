<h1>Upload file</h1>

<div class="uploadbox">
<?php echo $this->Form->create('Uploads', array('enctype' => 'multipart/form-data'));?>
    <fieldset>
    <?php
        //echo $this->Form->file('Document.submittedfile');
    echo $this->form->input('Document.submittedfile', array('type' => 'file')); 
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>