<?php
/* display message saved in session if any */
echo $this->Session->flash();
/* create form with proper enctype */
echo $this->Form->create('Uploads', array('type' => 'file'));
/* create file input */
echo $this->Form->input('file',array( 'type' => 'file'));
/* create submit button and close form */
echo $this->Form->end('Submit');

?>
<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>