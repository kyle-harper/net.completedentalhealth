/*
 *  Contact form module
 *
 *  Goal:		Dynamically fill and animate a form div for the user to contact us to learn more
 *
 *  Behavior: 	Show a brightly colored, small hook graphic, when the user clicks
 *  			inside the graphic, expand it downward to allow complete form to show.
 *				Non-linear animation would be nice, coming next round?
 *  			Customize detail questions based on referring page ("data-questions" attribute)
 *
 */
 
 
$(document).ready(function () {
    var isFormClosing = false, isFormValid = false, formTimeout;

	//
	//  FORM EVENTS
	//
    $(document).scroll(function() {
        toggleHook();
    });

    $(document.body).on('mousedown', function (event) {
	    // close down contact form if user clicks somewhere else on the page
		if (!$(event.target).closest('#contact-form').length && ($('#contact-form').hasClass('animate')) && !isFormClosing) {
            clearTimeout(formTimeout);
			closeForm();
		}
		isFormClosing = false;
	});

    $('#contact-form').click(function () {
        // open contact form if user clicks the call-to-action graphic
    	if (!$(this).hasClass('animate') && !isFormClosing) {
		    document.getElementById('contact-form').setAttribute('style', 'top: ' + ($(document).scrollTop() + 5) + 'px; right: 10px');
            $(this).toggleClass('animate');
			formTimeout = setTimeout(function () { $("#consultation-request").fadeIn(); $('#dim').toggleClass('dim'); }, 300);
		}
	});

    $('#close-form').click(function () {
	    // close the contact form if the user clicks the close button
	    if ($('#contact-form').hasClass('animate')) {
			closeForm();
			if ($(document).scrollTop() < 150) {
			    document.getElementById('contact-form').style.top = "-150px";
			}
			isFormClosing = true;
		}
	});
	
    $('#send-consultation-request').on('click', function(e){
        
		// compile and send ajax request to php script on the server
		
		if (!isFormValid) return;
		
		// if we get here, the form data are valid
		
		var name = $('#name').val(),
		    firstName = name.substring(0, (name.indexOf(" ") > 0) ? name.indexOf(" ") : name.length),
		    contact = $('#contact').val(),
			bite = $('input:radio[name = "bite"]:checked').val(),
			concerns = "",
			comments = $('#comments').val();
		    referrer = $('#contact-form').attr('data-referrer');
			
		// temporary: hard-code the concerns... iterating through the checkboxes is not working for some reason... TODO
		var crowding = document.getElementById('crowding').checked;
        var gaps = document.getElementById('gaps').checked;
		if (crowding && !gaps) {
		    concerns = "crowding";
		} else if (!crowding && gaps) {
		    concerns = "gaps";
		} else if (crowding && gaps) {
		    concerns = "crowding, gaps";
		} else {
		    concerns = "";
		}
		
		// update firstName to include comma
		if (firstName) {
		    firstName = ", " + firstName;
		}
		
		// configure form to allow sending and prevent resending
		e.preventDefault();
        $('#send-consultation-request').addClass('disabled');
		$('#send-consultation-request').html("SENDING...");

        $.ajax({ // start ajax call
            url: 'php/ajax-send-consultation.php',
            type: 'post',
            data: {'name': name, 'contact': contact, 'bite': bite, 'concerns': concerns, 'comments': comments, 'referrer': referrer},
            success: function(data, status) {
                if(data === "ok") {
					//reset form position and bring up thank you prompt for 7 seconds.
					document.getElementById('contact-form').setAttribute('style', 'top: ' + ($(document).scrollTop() + 5) + 'px; right: 10px');
                    $('#consultation-request').html('<div class="inset"><p class="text-massive text-align-center text-orange text-light">Thank you' + firstName + '.</p><div class="box ratio2_1 opacity-70"><div class="box-content"><img class="fill" src="images/your-smile-is-our-reward-mary.jpg" alt="our friendly staff will contact you for your free invisalign consultation"/></div></div><div class="text-align-center text-dark-gray text-large text-heavy" style="margin: 20px; 20px; 40px; 20px;">We\'ll be in touch soon to set you up with a free consultation with Dr. Collins.</div></div>');
                    formTimeout = setTimeout(function () { closeForm(); }, 7000);
                } else {
                    //reset form position and bring up error prompt - have user call the office instead
					document.getElementById('contact-form').setAttribute('style', 'top: ' + ($(document).scrollTop() + 5) + 'px; right: 10px');
                    $('#consultation-request').html('<div class="inset"><p class="text-massive text-align-center text-orange text-light">Oops!</p><div class="box ratio2_1 opacity-70"><div class="box-content"><img class="fill" src="images/your-smile-is-our-reward-mary.jpg" alt="please call our friendly staff"/></div></div><div class="text-align-center text-dark-gray text-large text-heavy" style="margin: 20px; 20px; 40px; 20px;">Sorry, the request could not send. Please call our friendly staff at 619-295-2202 and we can help you.</div></div>');
				}
            },
            error: function(xhr, desc, err) {
                console.log(xhr);
                console.log("Details: " + desc + "\nError:" + err);
            }
        }); // end ajax call
    });
	
	$('#name').on('keyup', function (event) {
        validateForm(true, false);
	});

	$('#name').on('blur', function (event) {
        validateForm(true, false);
	});
	
	$('#contact').on('keyup', function (event) {
        validateForm(false, true);
	});

	$('#contact').on('blur', function (event) {
        validateForm(false, true);
	});
	
    var validateForm = function (changeNameStyle, changeContactStyle) {
	    
		// ensure the 'name' field is a valid string, ensure the 'contact' field is a valid email or phone, then enable submit button if yes to both
		
		var isNameValid = false,
		    isContactValid = false;
			
		if (isName($('#name').val())) {
		    if (changeNameStyle) {
    			if ($('#name').hasClass('invalid')) {
    			    $('#name').removeClass('invalid');
	    		}
	    	    $('#name').addClass('valid');
			}
			isNameValid = true;
		} else {
	        if (changeNameStyle) {
            	if ($('#name').hasClass('valid')) {
	    		    $('#name').removeClass('valid');
	    		}
		        $('#name').addClass('invalid');
		    }
		}
		
		if (isEmail($('#contact').val()) || isPhone($('#contact').val())) {
		    if (changeContactStyle) {
			    if ($('#contact').hasClass('invalid')) {
			        $('#contact').removeClass('invalid');
			    }
			}
		    $('#contact').addClass('valid');
			isContactValid = true;
		} else {
		    if (changeContactStyle) {
		        if ($('#contact').hasClass('valid')) {
			        $('#contact').removeClass('valid');
			    }
		        $('#contact').addClass('invalid');
		    }
		}
		
		if (isNameValid && isContactValid) {
		    // enable send button
			isFormValid = true;
			if ($('#send-consultation-request').hasClass('disabled')) {
			    $('#send-consultation-request').removeClass('disabled');
			}
		} else {
		    // disable send button
			isFormValid = false;
			if (!$('#send-consultation-request').hasClass('disabled')) {
			    $('#send-consultation-request').addClass('disabled');
			}
		}
		
		function isEmail(testValue) {
		    var regexp = /[\w\.\_\-\+]+@[\w\-]+(\.\w{2,4})+/;
			return regexp.test(testValue);
		}
		
		function isPhone(testValue) {
		    var regexp = /(\s*)?((\+)?\d*)?(\s*)?(\()?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{3})(\s*)?(\)|\-|\.)?(\s*)?(\d{4})(\s*)?/;
			return regexp.test(testValue);
		}
		
		function isName(testValue) {
		    if (testValue) {
			    return true;
			}
			return false;
		}
	};
	
	var windowHeight = function () {
	    // cross-browser way to return client window height (per JS Definitive Guide, Flanagan)
	    if (window.innerHeight) {
		    return window.innerHeight;
		} else if (document.documentElement && document.documentElement.clientHeight) {
		    return document.documentElement.clientHeight;
		} else if (document.body.clientHeight) {
		    return document.body.clientHeight;
		}
		return 0;
	}

    var toggleHook = function () {
	    // show the hook graphic if user scrolls below header, hide if they scroll back up, but NO HIDING if form is open!
		// note to self: since you declared your own CSS transitions on the contact-form class, you cannot use jQuery animations because you overrode them somehow with the manual css.
        if ($(document).scrollTop() > 150 && (!$('#contact-form').hasClass('animate')) && (parseInt(document.getElementById('contact-form').style.top) < 0 || document.getElementById('contact-form').style.top === "")) {
   	        document.getElementById('contact-form').style.top = "45px";
	    } else if ($(document).scrollTop() < 150 && (!$('#contact-form').hasClass('animate')) && (parseInt(document.getElementById('contact-form').style.top) > 0 || document.getElementById('contact-form').style.top === "")) {
	        document.getElementById('contact-form').style.top = "-150px";
	    }
	};
	
	var closeForm = function () {
	    // close the form and reset styles to default
	    $("#consultation-request").fadeOut();
	    formTimeout = setTimeout(function () { 
		    $('#contact-form').toggleClass('animate');
			$('#dim').toggleClass('dim');
			document.getElementById('contact-form').setAttribute('style', '');
			toggleHook();
		}, 400);
	};
	
});