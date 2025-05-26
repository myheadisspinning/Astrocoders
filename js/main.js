
/* =================================
------------------------------------
	EndGam - Gaming Magazine Template
	Version: 1.0
 ------------------------------------
 ====================================*/

'use strict';

$(window).on('load', function() {
	/*------------------
		Preloder
	--------------------*/
	$(".loader").fadeOut();
	$("#preloder").delay(400).fadeOut("slow");
});

(function($) {
	/*------------------
		Navigation
	--------------------*/
	$('.primary-menu').slicknav({
		appendTo:'.header-warp',
		closedSymbol: '<i class="fa fa-angle-down"></i>',
		openedSymbol: '<i class="fa fa-angle-up"></i>'
	});

	/*------------------
		Background Set
	--------------------*/
	$('.set-bg').each(function() {
		var bg = $(this).data('setbg');
		$(this).css('background-image', 'url(' + bg + ')');
	});

	/*------------------
		Hero Slider
	--------------------*/
	$('.hero-slider').owlCarousel({
		loop: true,
		nav: true,
		dots: true,
		navText: ['', '<img src="img/icons/solid-right-arrow.png">'],
		mouseDrag: false,
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		items: 1,
		//autoplay: true,
		autoplayTimeout: 10000,
	});

	var dot = $('.hero-slider .owl-dot');
	dot.each(function() {
		var index = $(this).index() + 1;
		if(index < 10){
			$(this).html('0').append(index + '.');
		}else{
			$(this).html(index + '.');
		}
	});

	/*------------------
		Video Popup
	--------------------*/
	$('.video-popup').magnificPopup({
  		type: 'iframe'
	});

	$('#stickySidebar').stickySidebar({
	    topSpacing: 60,
	    bottomSpacing: 60
	});
})(jQuery);

/*------------------
	Modal & Auth Logic
--------------------*/
document.addEventListener('DOMContentLoaded', function() {
    // Modal open/close logic
    const loginModal = document.getElementById('loginModal');
    const registerModal = document.getElementById('registerModal');
    const openLoginBtn = document.getElementById('openLoginModal');
    const openRegisterBtn = document.getElementById('openRegisterModal');
    const closeLoginBtn = document.getElementById('closeLoginModal');
    const closeRegisterBtn = document.getElementById('closeRegisterModal');
    const switchToRegister = document.getElementById('switchToRegister');
    const switchToLogin = document.getElementById('switchToLogin');

    // Open modals
    openLoginBtn && openLoginBtn.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'block';
        registerModal.style.display = 'none';
    });
    openRegisterBtn && openRegisterBtn.addEventListener('click', function(e) {
        e.preventDefault();
        registerModal.style.display = 'block';
        loginModal.style.display = 'none';
    });

    // Close modals
    closeLoginBtn && closeLoginBtn.addEventListener('click', function() {
        loginModal.style.display = 'none';
    });
    closeRegisterBtn && closeRegisterBtn.addEventListener('click', function() {
        registerModal.style.display = 'none';
    });

    // Switch between modals
    switchToRegister && switchToRegister.addEventListener('click', function(e) {
        e.preventDefault();
        loginModal.style.display = 'none';
        registerModal.style.display = 'block';
    });
    switchToLogin && switchToLogin.addEventListener('click', function(e) {
        e.preventDefault();
        registerModal.style.display = 'none';
        loginModal.style.display = 'block';
    });

    // Close modal when clicking outside
    window.onclick = function(event) {
        if (event.target == loginModal) loginModal.style.display = "none";
        if (event.target == registerModal) registerModal.style.display = "none";
    };

    // No AJAX form submission handlers here!
    // Forms will submit via standard HTML POST to their action URLs.
});

document.addEventListener('DOMContentLoaded', function() {
    // Modal switch logic (existing)
    var switchToRegister = document.getElementById('switchToRegister');
    if (switchToRegister) {
        switchToRegister.onclick = function(e) {
            e.preventDefault();
            document.getElementById('loginModal').style.display = 'none';
            document.getElementById('registerModal').style.display = 'block';
        };
    }
    var switchToLogin = document.getElementById('switchToLogin');
    if (switchToLogin) {
        switchToLogin.onclick = function(e) {
            e.preventDefault();
            document.getElementById('registerModal').style.display = 'none';
            document.getElementById('loginModal').style.display = 'block';
        };
    }

    // Show login modal when download button is clicked
    document.addEventListener('DOMContentLoaded', function() {
        var downloadBtn = document.getElementById('downloadLoginBtn');
        var loginModal = document.getElementById('loginModal');
        var closeLoginModal = document.getElementById('closeLoginModal');
        var openLoginModal = document.getElementById('openLoginModal');
        var openRegisterModal = document.getElementById('openRegisterModal');
        var registerModal = document.getElementById('registerModal');
        var closeRegisterModal = document.getElementById('closeRegisterModal');
        var switchToRegister = document.getElementById('switchToRegister');
        var switchToLogin = document.getElementById('switchToLogin');

        if (downloadBtn && loginModal) {
            downloadBtn.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'block';
            });
        }
        if (openLoginModal && loginModal) {
            openLoginModal.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'block';
            });
        }
        if (openRegisterModal && registerModal) {
            openRegisterModal.addEventListener('click', function(e) {
                e.preventDefault();
                registerModal.style.display = 'block';
            });
        }
        if (closeLoginModal && loginModal) {
            closeLoginModal.addEventListener('click', function() {
                loginModal.style.display = 'none';
            });
        }
        if (closeRegisterModal && registerModal) {
            closeRegisterModal.addEventListener('click', function() {
                registerModal.style.display = 'none';
            });
        }
        if (switchToRegister && loginModal && registerModal) {
            switchToRegister.addEventListener('click', function(e) {
                e.preventDefault();
                loginModal.style.display = 'none';
                registerModal.style.display = 'block';
            });
        }
        if (switchToLogin && loginModal && registerModal) {
            switchToLogin.addEventListener('click', function(e) {
                e.preventDefault();
                registerModal.style.display = 'none';
                loginModal.style.display = 'block';
            });
        }
        // Optional: Close modal when clicking outside of it
        window.onclick = function(event) {
            if (event.target === loginModal) {
                loginModal.style.display = "none";
            }
            if (event.target === registerModal) {
                registerModal.style.display = "none";
            }
        }
    });
});
