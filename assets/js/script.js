// Affichage ou non du panneau de login
function toggleSignIn() {
	var panel = $("#signin");
	var accountLink = $("#accountLink");
	if (panel.attr("class") == "signin-show") {
		panel.removeClass("signin-show");
		panel.addClass("signin-hide");
		accountLink.removeClass("account-link-show");
		accountLink.addClass("account-link-hide");
		
	}
	else if (panel.attr("class") == "signin-hide") {
		panel.removeClass("signin-hide");
		panel.addClass("signin-show");
		accountLink.removeClass("account-link-hide");
		accountLink.addClass("account-link-show");
	}
}

// Affichage ou non du menu mobile
function toggleMenu() {
	var menu =  $("#menu");
	if (menu.attr("class") == "menu-show") {
		menu.removeClass("menu-show");
		menu.addClass("menu-hide");
	}
	else if (menu.attr("class") == "menu-hide") {
		menu.removeClass("menu-hide");
		menu.addClass("menu-show");
	}
}