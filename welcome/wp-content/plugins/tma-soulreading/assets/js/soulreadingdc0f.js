//Stripe
jQuery( document ).ready( function () {
	
  jQuery( "#sr-submit,#sr-submit-desktop" ).click(function(e) {
	e.preventDefault();   
    jQuery("#email").css("border","1px solid #cebebe");	  
	jQuery("#dob-month").css("border","1px solid #cebebe");
	jQuery("#dob-day").css("border","1px solid #cebebe");
	jQuery("#fullname").css("border","1px solid #cebebe");
	jQuery("#dob-year").css("border","1px solid #cebebe");	
	
    let emailfield = jQuery("#email").val().trim();
		emailfield = emailfield.split(' ').join('');
  
    if(!validateEmail(emailfield)) {
		jQuery("#email").css("border","1px solid red");
    }
  
   if(jQuery("#dob-month").val() < 1) {
		jQuery("#dob-month").css("border","1px solid red");
   }

   if(jQuery("#dob-day").val() < 1) {
		jQuery("#dob-day").css("border","1px solid red");
   }

   if(jQuery("#dob-year").val() < 1) {
		jQuery("#dob-year").css("border","1px solid red");
   }

   if(jQuery("#fullname").val().length <= 1 ) {
		jQuery("#fullname").css("border","1px solid red");
   }
  
  
    if(validateEmail(emailfield) && jQuery("#dob-month").val() > 0 && jQuery("#dob-day").val() > 0) {
		
		eg_calculate_horoscope ();		
		var formdata = {
			name : jQuery("#fullname").val().split(" ")[0], 
			email : emailfield,
			horoscope: horoscope_name,
			action: "soulreading_optin",
			pageurl:  window.location.pathname,
			cbskin : jQuery("#horoscope").data("cbskin") || null,
			smsign: jQuery("#horoscope").val(),
			smdob : getmonth (jQuery("#dob-month").val()) + " " + jQuery("#dob-day").val()  + ", " + jQuery("#dob-year").val(),
			aff : jQuery("#affiliate").val(),
			problem : jQuery("#problem").val(),
			tarot : jQuery("#tarot").val(),
			tarot2 : jQuery("#tarot2").val(),
			nonce: soulreading_ojb.ajax_nonce	
		};		
		console.log(formdata);
		
		jQuery.ajax({
			url: soulreading_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
			data: formdata,
		  beforeSend: function() {

		  },			
			success:function(data) {
				
				var obj = JSON.parse(data);
				console.log(data);
				dataLayer.push({'event': 'sm.lead','pathname': window.location.href, 'sm.email' : jQuery("#email").val(), 'sign' : jQuery("#horoscope").val(), 'sm.name': jQuery("#fullname").val(), 'sm.acid' : obj.acid});				

			},
			error: function(errorThrown){
				console.log(errorThrown);
			}
		}); 		
		
		
		
		
	}

  });
  
  jQuery( "#step-2-btn" ).click(function(e) {
	e.preventDefault();   
    
    let emailfield = jQuery("#email").val().trim();
		emailfield = emailfield.split(' ').join('');
	
	
    if(validateEmail(emailfield)) {
		
		var urlparameters = {
			smfname : jQuery("#fullname").val().split(" ")[0], 
			smemail : emailfield,
			smsign: jQuery("#horoscope").val(),
			smdob : getmonth (jQuery("#dob-month").val()) + " " + jQuery("#dob-day").val()  + ", " + jQuery("#dob-year").val(),
		};
		
		if(getUrlParameter("etid")) {
			urlparameters['etid'] = getUrlParameter("etid");
		}
		if(getUrlParameter("cmid")) {
			urlparameters['cmid'] = getUrlParameter("cmid");
		}		

		
		//console.log($("#horoscope").val().toLowerCase());
		
		jQuery( ".sm-ctabtn" ).each(function() {
		   var url = jQuery( this ).attr("href");
		   var arr = url.split('?');
		   if (url.length > 1 && arr[1] !== undefined) {
					jQuery(this).attr("href", url  + "&" +  jQuery.param( urlparameters ));  
		   } else {
					jQuery(this).attr("href", url  + "?" + jQuery.param( urlparameters ));  
		   }
		});
		
		if (typeof ishome !== 'undefined') {
	
			grecaptcha.ready(function() {
			  grecaptcha.execute('6LeEJtEZAAAAALMZMLXiDrUhMompjDvCgJbjedYi', {action: 'soulreading_optin'}).then(function(token) {
				  
				var formdata = {
					name : jQuery("#fullname").val().split(" ")[0], 
					email : emailfield,
					horoscope: jQuery("#horoscope").val(),
					action: "soulreading_optin",
					pageurl:  window.location.pathname,
					cbskin: jQuery("#horoscope").data("cbskin") || null,
					smsign: jQuery("#horoscope").val(),
					smdob : getmonth (jQuery("#dob-month").val()) + " " + jQuery("#dob-day").val()  + ", " + jQuery("#dob-year").val(),
					aff : jQuery("#affiliate").val(),
					nonce: soulreading_ojb.ajax_nonce,
					captchatoken : token
				};
								
				jQuery.ajax({
					url: soulreading_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
					data: formdata,
				  beforeSend: function() {

				  },			
					success:function(data) {
						
						var obj = JSON.parse(data);
						console.log(data);
						dataLayer.push({'event': 'sm.lead','pathname': window.location.href, 'sm.email' : jQuery("#email").val(), 'sign' : jQuery("#horoscope").val(), 'sm.name': jQuery("#fullname").val(), 'sm.acid' : obj.acid});

							//document.dispatchEvent(event);
						//});				
						
						

					},
					error: function(errorThrown){
						console.log(errorThrown);
					}
				}); 
				
			  });
			});			
		
		} else {
			
			var formdata = {
				name : jQuery("#fullname").val().split(" ")[0], 
				email : emailfield,
				horoscope: jQuery("#horoscope").val(),
				action: "soulreading_optin",
				pageurl:  window.location.pathname,
				cbskin: jQuery("#horoscope").data("cbskin") || null,
				smsign: jQuery("#horoscope").val(),
				smdob : getmonth (jQuery("#dob-month").val()) + " " + jQuery("#dob-day").val()  + ", " + jQuery("#dob-year").val(),
				aff : jQuery("#affiliate").val(),
				nonce: soulreading_ojb.ajax_nonce,
			};
							
			jQuery.ajax({
				url: soulreading_ojb.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
				data: formdata,
			  beforeSend: function() {

			  },			
				success:function(data) {
					
					var obj = JSON.parse(data);
					console.log(data);
					dataLayer.push({'event': 'sm.lead','pathname': window.location.href, 'sm.email' : jQuery("#email").val(), 'sign' : jQuery("#horoscope").val(), 'sm.name': jQuery("#fullname").val(), 'sm.acid' : obj.acid});

						//document.dispatchEvent(event);
					//});				
					
					

				},
				error: function(errorThrown){
					console.log(errorThrown);
				}
			}); 			
		}
		
    }
    
  });  
  
  function getSearchParams(k){
	var p={};
	location.search.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(s,k,v){p[k]=v})
	return k?p[k]:p;
  }
 
  function validateEmail(email) {
	var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(String(email).toLowerCase());
  }  
	//Process Stripe Transaction End
  
  
	function eg_process_transaction (formdata) {
		formdata["action"] = "eg_process_stripetrans";
		formdata["nonce"] = checkoutscript_obj.ajax_nonce;	
		
		console.log(formdata);	

		jQuery.ajax({
			url: checkoutscript_obj.ajaxurl, // or example_ajax_obj.ajaxurl if using on frontend
			data: formdata,
		  beforeSend: function() {

		  },			
			success:function(data) {
				console.log(data);
				//var response = JSON.parse(data);
				if (response.status == "success") {
					window.location.replace(response.redirect_url);
				}
			},
			error: function(errorThrown){
				console.log(errorThrown);
			}
		});  
				
	}	
	
	function validateEmail(email) {
		var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
		return re.test(String(email).toLowerCase());
	}
	
	function getmonth (monthno) {
		 switch(monthno) {
			case "1":
			  return "January";
			  break;
			case "2":
			  return "February";
			  break;
			case "3":
			  return "March";
			  break;
			case "4":
			  return "April";
			  break;
			case "5":
			  return "May";
			  break;			  		
			case "6":
			  return "June";
			  break;		
			case "7":
			  return "July";
			  break;					  
			case "8":
			  return "August";
			  break;		
			case "9":
			  return "September";
			  break;					  
			case "10":
			  return "October";
			  break;		
			case "11":
			  return "November";
			  break;			
			case "12":
			  return "December";
			  break;					  
		  } 		
		
	}
		
    function getUrlParameter(sParam) {
		var sPageURL = window.location.search.substring(1),
			sURLVariables = sPageURL.split('&'),
			sParameterName,
			i;

		for (i = 0; i < sURLVariables.length; i++) {
			sParameterName = sURLVariables[i].split('=');

			if (sParameterName[0] === sParam) {
				return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
			}
		}
	}

	function eg_calculate_horoscope () {
		var dob_month = jQuery("#dob-month").val()
		  ,dob_day = jQuery("#dob-day").val()
		  
	   if( (dob_month == 3 && dob_day >= 21)  || (dob_month == 4 && dob_day <= 19) )  { horoscope_no = 1;horoscope_id = 31473;  horoscope_name="Aries"; var cbskin = 29731;  }
	   if( (dob_month == 4 && dob_day >= 20)  || (dob_month == 5 && dob_day <= 20) )  { horoscope_no = 2;horoscope_id = 31474;   horoscope_name="Taurus"; var cbskin = 29740;   }
	   if( (dob_month == 5 && dob_day >= 21)  || (dob_month == 6 && dob_day <= 20) )  { horoscope_no = 3;horoscope_id = 31475; horoscope_name="Gemini"; var cbskin = 29744;     }
	   if( (dob_month == 6 && dob_day >= 21)  || (dob_month == 7 && dob_day <= 22) )  { horoscope_no = 4;horoscope_id = 31476; horoscope_name="Cancer"; var cbskin = 29742;     }
	   if( (dob_month == 7 && dob_day >= 23)  || (dob_month == 8 && dob_day <= 22) )  { horoscope_no = 6;horoscope_id = 31477; horoscope_name="Leo"; var cbskin = 29745;      }
	   if( (dob_month == 8 && dob_day >= 23)  || (dob_month == 9 && dob_day <= 22) )  { horoscope_no = 6;horoscope_id = 31478; horoscope_name="Virgo"; var cbskin = 29741;      }
	   if( (dob_month == 9 && dob_day >= 23)  || (dob_month == 10 && dob_day <= 22) ) { horoscope_no = 7;horoscope_id = 31479; horoscope_name="Libra"; var cbskin = 29736;      }
	   if( (dob_month == 10 && dob_day >= 23) || (dob_month == 11 && dob_day <= 21) ) { horoscope_no = 8;horoscope_id = 31480; horoscope_name="Scorpio"; var cbskin = 29739;    }
	   if( (dob_month == 11 && dob_day >= 22) || (dob_month == 12 && dob_day <= 21) ) { horoscope_no = 9;horoscope_id = 31481; horoscope_name="Sagittarius"; var cbskin = 29738;}
	   if( (dob_month == 12 && dob_day >= 22) || (dob_month == 1 && dob_day <= 19) )  { horoscope_no = 10;horoscope_id = 31482; horoscope_name="Capricorn"; var cbskin = 29749; }
	   if( (dob_month == 1 && dob_day >= 20)  || (dob_month == 2 && dob_day <= 18) )  { horoscope_no = 11;horoscope_id = 31483; horoscope_name="Aquarius"; var cbskin = 29730;  }
	   if( (dob_month == 2 && dob_day >= 19)  || (dob_month == 3 && dob_day <= 20) )  { horoscope_no = 12;horoscope_id = 31484; horoscope_name="Pisces"; var cbskin = 29746;    }		
	
	}
	
	function isScriptLoaded(src) {
		return document.querySelector('script[src="' + src + '"]') ? true : false;
	}	
});