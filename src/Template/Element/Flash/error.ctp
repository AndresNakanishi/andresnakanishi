<script type="text/javascript">
	$.notify({
		message: "<?= $message ?>"
	},{
		allow_dismiss: true,
		type: 'danger',
		animate: {
			enter: 'animated fadeInDown',
			exit: 'animated fadeOutUp'
		},
		placement: {
			from: 'bottom',
			align: 'center'
		}
	});
</script>