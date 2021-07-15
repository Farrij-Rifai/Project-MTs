 
  <!--=========== js section ===========-->
<!-- jQuery (necessary for Bootstrap's JavaScript) -->
<script src="<?= base_url('assets/templat') ?>/js/jquery.min.js"></script>
<script src="<?= base_url('assets/templat') ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/templat') ?>/js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="<?= base_url('assets/templat') ?>/js/wow.js"></script>
<!-- custom js -->
<script src="<?= base_url('assets/templat') ?>/js/custom.js"></script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
  <script type="text/javascript">
	$(document).ready(function(){		
		$('.form-checkbox').click(function(){
			if($(this).is(':checked')){
				$('.form-password').attr('type','text');
			}else{
				$('.form-password').attr('type','password');
			}
		});
	});
</script>
  </body> 

</html>