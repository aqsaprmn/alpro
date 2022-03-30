		$(document).on("click", ".cdelete-reg", function(e) {
			e.preventDefault();
			var id = this.id;
			bootbox.confirm("Are you sure?", function(result) {
				if(result){
					window.location.href = "index.php?_route=master/delete_region_post/" + id;
				}
			});
		});
		
		$(document).on("click", ".cdelete-loc", function(e) {
            e.preventDefault();
			var id = this.id;
			var idreg = $(this).attr('data-idreg');
			if (idreg != "") {
				bootbox.confirm("Are you sure?", function(result) {
					if(result){
						window.location.href = "index.php?_route=master/delete_location_post/" + id + "/" + idreg;
					}
				});
			}
			else {
				bootbox.confirm("Are you sure?", function(result) {
					if(result){
						window.location.href = "index.php?_route=master/delete_location_post/" + id;
					}
				});
			}
        });

		$(document).on("click", ".cdelete-subloc", function(e) {
            e.preventDefault();
			var id = this.id;
			var idloc = $(this).attr('data-idloc');
			if (idloc != "") {
				bootbox.confirm("Are you sure?", function(result) {
					if(result){
						window.location.href = "index.php?_route=master/delete_sublocation_post/" + id + "/" + idloc;
					}
				});
			}
			else {
				bootbox.confirm("Are you sure?", function(result) {
					if(result){
						window.location.href = "index.php?_route=master/delete_sublocation_post/" + id;
					}
				});
			}
        });

		$(document).on("click", ".cdelete-odc", function(e) {
            e.preventDefault();
			var id = this.id;
			bootbox.confirm("Are you sure?", function(result) {
				if(result){
					window.location.href = "index.php?_route=master/delete_odc_post/" + id;
				}
			});
        });

		$(document).on("click", ".cdelete-odp", function(e) {
            e.preventDefault();
			var id = this.id;
			bootbox.confirm("Are you sure?", function(result) {
				if(result){
					window.location.href = "index.php?_route=master/delete_odp_post/" + id;
				}
			});
        });
		
		$(document).on("click", ".cdelete-customer", function(e) {
            e.preventDefault();
			var id = this.id;
			bootbox.confirm("Are you sure?", function(result) {
				if(result){
					window.location.href = "index.php?_route=master/delete_customers_post/" + id;
				}
			});
        });