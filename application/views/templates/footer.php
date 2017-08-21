
<script src="<?php echo base_url().'assets/js/jquery.min.js' ?>"></script>
<script src="<?php echo base_url().'assets/js/jquery-ui.js' ?>"></script>

<!-- <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet"> -->
<!--<script src="--><?php //echo base_url().'assets/js/jquery.min.js'?><!--"></script>-->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
<script>
    $( function popform(){
        $( "#firstform" ).dialog({
            autoOpen: false,
            show: 'fade',
            resizable: false,
            position: 'center',
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
    					success: function() {
    						$("#firstform").dialog("close");
    						$('#resulttable').load("<?php echo base_url('tasks/loadView');?>");
                $('#firstform').trigger("reset");
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
              success: function(data)
              {
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
