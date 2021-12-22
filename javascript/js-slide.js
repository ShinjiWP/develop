const mediaQuery = window.matchMedia("(max-width: 1079px)");

// ページが読み込まれた時に実行
handle(mediaQuery);

// ウィンドウサイズを変更しても実行（ブレイクポイントの監視）
mediaQuery.addListener(handle);

function handle(mm) {
	if (mm.matches) {
		// ウィンドウサイズ768px以下のときの処理
		jQuery(".js-slidebar").on("click", function () {
			jQuery(".c-shadow").fadeIn(500);
			jQuery(".p-sidebar").css({ right: "0%", transition: "0.5s" });
			jQuery("body").css({ height: "100%", "overflow-y": "hidden" });
			jQuery(".c-grid").css({ position: "static" });
		});
	} else {
		// それ以外の処理
		jQuery(".c-shadow").fadeOut(00);
		jQuery(".p-sidebar").css({ right: "-100%" });
	}
	jQuery(".p-sidebar__esc").on("click", function () {
		jQuery(".c-shadow").fadeOut(500);
		jQuery(".p-sidebar").css({ right: "-100%", transition: "0.5s" });
		jQuery("body").css({ height: "100%", "overflow-y": "visible" });
		jQuery(".c-grid").css({ position: "relative" });
	});
}

// jQuery(function () {
// 	if (window.matchMedia("(max-width:599.9px)").matches) {
// 		jQuery(".p-header__box").on("click", function () {
// 			jQuery(".c-shadow").fadeIn(500);
// 			jQuery(".p-sidebar").css({ left: "14%", transition: "0.5s" });
// 		});
// 	} else if (window.matchMedia("(mix-width:600px)").matches) {
// 		jQuery(".p-header__box").on("click", function () {
// 			jQuery(".c-shadow").fadeIn(500);
// 			jQuery(".p-sidebar").css({ left: "57%", transition: "0.5s" });
// 		});
// 	}
// 	// jQuery(".p-header__box").on("click", function () {
// 	// 	jQuery(".c-shadow").fadeIn(500);
// 	// 	// jQuery("body").css("position", "fixed");
// 	// 	jQuery(".c-grid--sidebar").css({ transform: "translate(-86%, 0)", transition: "1s" });
// 	// });
// 	jQuery(".p-sidebar__x").on("click", function () {
// 		jQuery(".c-shadow").fadeOut(500);
// 		jQuery(".p-sidebar").css({ left: "100%", transition: "0.5s" });
// 	});
// });

// jQuery(function () {
//     jQuery(".p-header__box").on("click", function () {
//         jQuery(".c-shadow").fadeIn(600);
//         jQuery(".p-sidebar").css({ left: "14%", transition: "0.6s" });
//     });

//     jQuery(".p-sidebar__x").on("click", function () {
//         jQuery(".p-sidebar").css("left", "100%");
//     });
// });
// jQuery(function () {
// 	jQuery(".p-header__box").on("click", function () {
// 		jQuery(".c-shadow").fadeIn(600);
// 		// jQuery("body").css("position", "fixed");
//         jQuery(".p-sidebar").css({ "left": "-100%" ,"transition":"0.6s"});
// 	});

// 	jQuery(".p-sidebar__x").on("click", function () {
// 		jQuery(".c-shadow").fadeOut(500);
// 		jQuery(".p-sidebar").css("left", "100%");
// 	});
// });

// function handle(mm) {
// 	if (mm.matches) {
// 		// ウィンドウサイズ768px以下のときの処理
// 		jQuery(".p-header__box").on("click", function () {
// 			jQuery(".c-shadow").fadeIn(500);
// 			jQuery(".p-sidebar").css({ left: "14%", transition: "0.5s" });
// 		});
// 	} else  {
// 		// それ以外の処理
// 		jQuery(".p-header__box").on("click", function () {
// 			jQuery(".c-shadow").fadeIn(500);
// 			jQuery(".p-sidebar").css({ left: "57%", transition: "0.5s" });
// 		});
//     }
//     jQuery(".p-sidebar__x").on("click", function () {
// 		jQuery(".c-shadow").fadeOut(500);
// 		jQuery(".p-sidebar").css({ left: "100%", transition: "0.5s" });
//     });

// }
