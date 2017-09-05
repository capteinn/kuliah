</div>

<footer class="footer">
	<div class="container-fluid">
		<p class="copyright text-center" style="font-size: 12px;">
			Copyright &copy; <?php echo Date("Y"); ?> D3 Komsi, UGM &middot; Light Bootstrap Dashboard Theme by <a href="https://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank">Creative Tim</a>.
		</p>
	</div>
</footer>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<?php if (isset($_SESSION['message']) AND !empty($_SESSION['message'])) { ?>
<script type="text/javascript">
	$(document).ready(function(){
		$.notify({
			icon: 'pe-7s-check',
			message: "<?php echo $_SESSION['message'] ?>"
		},{
			type: 'info',
			offset: 10,
			timer: 4000
		});
	});
</script>
<?php } $_SESSION['message'] = ''; ?>

</html>