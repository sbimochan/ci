<footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://bootstrapious.com" class="external">Bootstrapious</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/tether.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.cookie.js' ?>"> </script>
    <script src="<?php echo base_url().'assets/js/grasp_mobile_progress_circle-1.0.0.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.nicescroll.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.validate.min.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/chart.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/charts-home.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/front.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>
    <script src="<?php echo base_url().'assets/js/lobibox.js' ?>"></script>

<script>
    $( function popform(){
        $( "#firstform" ).dialog({
            autoOpen: false,
            show: 'fade',
           resizable: false,

          stack: true,
            height: 'auto',
            width: '500px',
            modal: true
        });
        $('#datepicker').datepicker({
            dateFormat:'yy-mm-dd'
        });
    } );
    $( "#opener" ).on( "click", function() {
        $( "#firstform" ).dialog( "open" );
    });
    $(document).ready(function() {
    			$('#firstform').submit(function(event) {
    				var formData = $(this).serializeArray();
    				$.ajax({
    					type: 'POST',
    					url: '<?php echo base_url('tasks/store')?>',
    					data: formData,
    					encode: true,
    					success: function(response) {

                if (status = 1) {
                  $("#firstform").dialog("close");
                }
    						$('#resulttable').load("<?php echo base_url('tasks/loadView');?>");
                $('#firstform').trigger("reset");
                var messages = response.message.split("<p>");

                for (i = 0; i < messages.length; i++) {
                  //msg += validations[i];
                  if (messages[i]) {
                    Lobibox.notify('warning', {
                      size:'mini',
                      rounded:true,
                      delayIndicator:true,
                      msg: messages[i]
                });
                  }

          }
    					}
    				})
    				event.preventDefault();

    			});

        $(document).on("click", ".delete", function(){
          var id = $(this).data("bimochan");
          if(confirm('Are you sure delete this data?')){
            $.ajax({
              url : "<?php echo base_url('tasks/delete_row');?>/"+id,
              type: "POST",
              // dataType: "JSON",
              success: function(response){

              //var messages = response.message.split("</p>");
                //console.log(messages);
               $("#"+id).remove();

              },
              error: function (jqXHR, textStatus, errorThrown)
              {
                  alert('Error deleting data');
              }
          });
          }
        });
    });

</script>
</body>
<footer>
    <em>&copy <?php echo date('Y')?></em>
</footer>
</html>
