<?php echo validation_errors(); ?>

<?php echo form_open('tasks/edit_row/'.$id,'class="firstform" ')?>
<?php foreach($records as $record): ?>
<label for="name">Name</label>
<input class="form-control" name="name" value="<?php echo $record->name?>">
<label for="address">Address</label>
<input  class="form-control" name="address" value="<?php echo $record->address?>">
<label for="dob">DOB</label>
<input  class="form-control" id="datepicker" name="dob" value="<?php echo $record->dob?>">
<label for="contact">Contact</label>
<input type="number" class="form-control" name="contact" value="<?php echo $record->contact?>">
<button >submit</button>
<?php endforeach; ?>
</form>