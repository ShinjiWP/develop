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
			jQuery(".c-shadow").css({ height: "calc(var(--vh,1vh)*100)", position: "fixed" });
			jQuery(".p-sidebar").css({ right: "0%", transition: "0.5s", height: "calc(var(--vh,1vh)*100)" });
			jQuery("body").css({ height: "100%", "overflow-y": "hidden", "min-height": "calc(var(--vh,1vh)*100)" });
			jQuery(".c-grid").css({ position: "static", height: "calc(var(--vh,1vh)*100)" });
			jQuery("html").css({ height: "calc(var(--vh,1vh)*100)" });
		});
	} else {
		// それ以外の処理
		jQuery(".c-shadow").fadeOut(00);
		jQuery(".p-sidebar").css({ right: "-100%", height: "100%" });
		//12/24にこの４行追加した
		jQuery("html").css({ height: "100% " });
		jQuery("body").css({ height: "100%", "overflow-y": "auto" });
		jQuery(".c-grid").css({ height: "auto" });
	}
	jQuery(".p-sidebar__esc").on("click", function () {
		jQuery(".c-shadow").fadeOut(500);
		jQuery(".c-shadow").css({ height: "" });
		jQuery(".p-sidebar").css({ right: "-100%", transition: "0.5s", height: "" });
		jQuery("body").css({ height: "100%", "overflow-y": "visible" });
		jQuery(".c-grid").css({ position: "relative", height: "" });
		jQuery("html").css({ height: "" });
	});
}
// 1.関数の定義
function setHeight() {
	let vh = window.innerHeight * 0.01;
	document.documentElement.style.setProperty("--vh", `${vh}px`);
}

// 2.初期化
setHeight();

// 3.ブラウザのサイズが変更された時・画面の向きを変えた時に再計算する
window.addEventListener("resize", setHeight);

// if (window.matchMedia("(min-width:1080px)").matches) {
// 	jQuery("html").css({ height: " " });
// 	jQuery("body").css({ height: "100%", "overflow-y": "auto", "min-height": " " });
// 	jQuery(".c-grid").css({ height: " " });
// }

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
