<?php echo validation_errors(); ?>

<div id="divform">

<?php echo form_open('','class="firstform" id="firstform" false"')?>
        <label for="name">Name</label>
        <input class="form-control" name="name">
        <label for="address">Address</label>
        <input  class="form-control" name="address">
        <label for="dob">DOB</label>
        <input  class="form-control" id="datepicker" name="dob">
        <label for="contact">Contact</label>
        <input type="number" class="form-control" name="contact">
        <button class="btn btn-success">submit</button>

    </form>
</div>


<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta enim eos expedita, hic id illo magnam nostrum omnis, qui quibusdam sit voluptat</h4>
<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid commodi eius laboriosam nisi provident quasi unde voluptate. Aspernatur assumenda consequatur dolorum fugiat maxime nihil nobis quidem rem sapiente sint.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et fugiat hic maxime nesciunt nobis, non omnis voluptas voluptates? Aliquam aperiam culpa est inventore libero molestiae nisi reprehenderit unde veritatis. Iste.</p>
<div id="resulttable">
    <?php
        $this->load->view("tasks/list");
    ?>
</div>
<button id="opener" class="btn btn-success"> fire form</button>
