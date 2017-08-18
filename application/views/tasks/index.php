<?php echo validation_errors(); ?>

<?php echo form_open('tasks/store','class="firstform" id="firstform"')?>
        <label for="name">Name</label>
        <input class="form-control" name="name">
        <label for="address">Address</label>
        <input  class="form-control" name="address">
        <label for="dob">DOB</label>
        <input  class="form-control" id="datepicker" name="dob">
        <label for="contact">Contact</label>
        <input type="number" class="form-control" name="contact">
        <button >submit</button>

    </form>


<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta enim eos expedita, hic id illo magnam nostrum omnis, qui quibusdam sit voluptat</h4>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid commodi eius laboriosam nisi provident quasi unde voluptate. Aspernatur assumenda consequatur dolorum fugiat maxime nihil nobis quidem rem sapiente sint.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio incidunt minus totam. Neque quasi, repellendus. Debitis dignissimos fuga illum, pariatur quaerat ratione veniam! Ab cum nemo nesciunt quaerat saepe ut.</p>

Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aperiam aut cumque, deleniti dicta dignissimos et impedit itaque, magni minima nesciunt placeat praesentium quam quibusdam rem reprehenderit, soluta sunt?
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat hic maxime nesciunt nobis, non omnis voluptas voluptates? Aliquam aperiam culpa est inventore libero molestiae nisi reprehenderit unde veritatis. Iste.</p>
<table class="table table-bordered">
    <thead>
    <tr>
        <td>name</td>
        <td>address</td>
        <td>dob</td>
        <td>phone</td>
        <td>action</td>

    </tr>
    </thead>
    <tbody>
    <?php foreach($tasks as $task):?>
    <tr>

        <td><?php echo $task['name']?></td>
        <td><?php echo $task['address']?></td>
        <td><?php echo $task['dob']?></td>
        <td><?php echo $task['contact']?></td>
        <td>
            <a class="btn btn-warning" href=
            "<?php echo site_url('tasks/edit_row/'.$task['id'])?>">
                Edit</a>
            <a class="btn btn-danger" href=
            "<?php echo site_url('tasks/delete_row/'.$task['id'])?>">
                Delete</a></td>

    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<button id="opener"> fire form</button>
