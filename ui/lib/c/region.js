$(document).on("click", ".cdelete-odp-port", function(e) {
	e.preventDefault();
	var id = this.id;
	var idreg = $(this).attr('data-reg');
	var idloc = $(this).attr('data-loc');
	var idodp = $(this).attr('data-odp');
	bootbox.confirm("Are you sure?", function(result) {
		if(result){
			window.location.href = "index.php?_route=region/" +  idreg + "/" +  idloc + "/" + idodp + "/delete_odp_port_post/" + id;
		}
	});
});
