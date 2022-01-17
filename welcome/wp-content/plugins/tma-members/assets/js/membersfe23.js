jQuery( document ).ready( function () {
	
    const url_prodid = getQuery("product");
	const url_title = $('[data-prodid="' + url_prodid+'"]').data('title');
	const url_descr = $('[data-prodid="' + url_prodid +'"]').data('descr');;
	console.log(getQuery("product"));
    if (url_prodid ) {
			
		$("#access-button").data('prodid' , url_prodid);
		$('#product-title').text(url_title);
		$('#product-descr').text(url_descr);
		
		
		//$("#access-button").trigger('click');
    }
    
    function getQuery(q) {
    	return (window.location.search.match(new RegExp('[?&]' + q + '=([^&]+)')) || [, null])[1];
	}

	
	
  jQuery( "#access-button" ).click(function(e) {
	e.preventDefault();   
    
      const prodTitle = jQuery('.product-slider .slick-current').data('title'); //jQuery('#product-title').text(); 
      const prodDescr = jQuery('.product-slider .slick-current').data('descr'); //jQuery('#product-descr').text();
	  const prodid = jQuery('#access-button').data('prodid');

    jQuery('#popup-prodtitle').text(prodTitle);
	jQuery("#popup-descr").html(prodDescr);	
	var formdata = {
			action : "membership_productshow",
			nonce: tmamembers_ojb.ajax_nonce,
			prodid: prodid,
		};
		
		jQuery.ajax({ 
			url: tmamembers_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
			data: formdata,
		  beforeSend: function() {
			jQuery('#popup-content, #popup-prodtitle, #popup-descr').css('opacity','0');
			jQuery('#modal-placeholder').addClass('eg-loading-icon');			

		  },			
			success:function(data) {

				jQuery("#popup-content").html(data);
			setTimeout(function(){				
				jQuery('#popup-content,#popup-prodtitle, #popup-descr').css('opacity','1');
				jQuery('#modal-placeholder').removeClass('eg-loading-icon');							
			
			},1000);
				//console.log(data);
			/*				
				const jsonresponse = JSON.parse(data);

				const processed_response = new Promise((resolve, reject) => {
					jsonresponse.forEach((value, index, jsonresponse ) => {
						console.log(value);
						if (index === jsonresponse.length -1) resolve();
					});
				});

				processed_response.then(() => {
					console.log('All done!');
				});
			*/	
				
				//console.log(data);
			},
			error: function(errorThrown){
				console.log(errorThrown);
			}
		}); 
    
    
  });  
  jQuery( ".sm-programs" ).click(function(e) {
	e.preventDefault();
	
    const prodTitle = $(this).find("input").data('title');
    const prodDescr = $(this).find("input").data('descr');	
	const prodid = $(this).find("input").val();

    jQuery('#popup-prodtitle').text(prodTitle);
	jQuery("#popup-descr").html(prodDescr);	
	
	var formdata = {
			action : "membership_productshow",
			nonce: tmamembers_ojb.ajax_nonce,
			prodid: prodid,
		};
		
		jQuery.ajax({ 
			url: tmamembers_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
			data: formdata,
		  beforeSend: function() {
			jQuery('#popup-content, #popup-prodtitle, #popup-descr').css('opacity','0');
			jQuery('#modal-placeholder').addClass('eg-loading-icon');			

		  },			
			success:function(data) {

				jQuery("#popup-content").html(data);
			setTimeout(function(){				
				jQuery('#popup-content,#popup-prodtitle, #popup-descr').css('opacity','1');
				jQuery('#modal-placeholder').removeClass('eg-loading-icon');							
			
			},1000);
	
			},
			error: function(errorThrown){
				console.log(errorThrown);
			}
		});

  });
  
  
  //GIVE ACCESS TO PROGRAM
  jQuery( "#claim-yes" ).click(function(e) {
	e.preventDefault();

	const prodid = $(this).data("prodid");


	var formdata = {
			action : "getinsidercontent",
			nonce: tmamembers_ojb.ajax_nonce,
			prodid: prodid,
			transtype: "getaccess",
		};
		
		jQuery.ajax({ 
			url: tmamembers_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
			data: formdata,
		  beforeSend: function() {	

		  },			
			success:function(data) {
				var obj = JSON.parse(data);
				var message = obj.response.message;
				var responseid = obj.response.responseid;
				
				$("#getaccess_response").text(message);
				$("#getaccess_response").show("slow");
				
				if( responseid == 2 ) { location.reload(); }
				console.log(obj.response.responseid);
			},
			error: function(errorThrown){
				console.log(errorThrown);
			}
		});

  });    
  
  
  jQuery( ".sm-showvault" ).click(function(e) {
	e.preventDefault();
	
    const prodTitle = $(this).find("input").data('title');
    const prodDescr = $(this).find("input").data('descr');	
	const prodid = $(this).find("input").val();

    jQuery('#popup-prodtitle').text(prodTitle);
	jQuery("#popup-descr").html('');	
	
	var formdata = {
			action : "getinsidercontent",
			nonce: tmamembers_ojb.ajax_nonce,
			prodid: prodid,
			transtype: "accessvault",
		};
		
		jQuery.ajax({ 
			url: tmamembers_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
			data: formdata,
		  beforeSend: function() {
			jQuery('#popup-content, #popup-prodtitle, #popup-descr').css('opacity','0');
			jQuery('#modal-placeholder').addClass('eg-loading-icon');			

		  },			
			success:function(data) {
				console.log(data);
				jQuery("#popup-content").html(data);
			setTimeout(function(){				
				jQuery('#popup-content,#popup-prodtitle, #popup-descr').css('opacity','1');
				jQuery('#modal-placeholder').removeClass('eg-loading-icon');							
			
			},1000);
	
			},
			error: function(errorThrown){
				console.log(errorThrown);
			}
		});

  });

  
});