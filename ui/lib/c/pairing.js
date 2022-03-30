        $(document).on("click", ".cdelete-loc-odc", function(e) {
            e.preventDefault();
			var idodc = $(this).attr('data-idodc');
			var idloc = $(this).attr('data-idloc');
			bootbox.confirm("Are you sure?", function(result) {
				if(result){
					window.location.href = "index.php?_route=pairing/delete_location_odc_post/" + idodc + "/" + idloc + "/";
				}
			});
        });

		$(document).on("click", ".cdelete-subloc-odp", function(e) {
            e.preventDefault();
			var idodp = $(this).attr('data-idodp');
			var idsubloc = $(this).attr('data-idsublokasi');
			bootbox.confirm("Are you sure?", function(result) {
				if(result){
					window.location.href = "index.php?_route=pairing/delete_subloc_odp_post/" + idodp + "/" + idsubloc + "/";
				}
			});
        });
