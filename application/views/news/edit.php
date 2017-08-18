<?php echo validation_errors(); ?>

<?php echo form_open('tasks/store','class="firstform" ')?>

<label for="name">Name</label>
<input class="form-control" name="name" value="<?php echo $task['name']?>">
<label for="address">Address</label>
<input  class="form-control" name="address" value="<?php echo $task['address']?>">
<label for="dob">DOB</label>
<input  class="form-control" id="datepicker" name="dob" value="<?php echo $task['dob']?>">
<label for="contact">Contact</label>
<input type="number" class="form-control" name="contact" value="<?php echo $task['contact']?>">
<button >submit</button>

</form>