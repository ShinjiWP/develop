
const mediaQuery = window.matchMedia("(max-width: 1079px)");

// ページが読み込まれた時に実行
handle(mediaQuery);

// ウィンドウサイズを変更しても実行（ブレイクポイントの監視）
mediaQuery.addListener(handle);

function handle(mm) {
    if (mm.matches) {
        // ウィンドウサイズ768px以下のときの処理
        $(".js-slidebar").on("click", function () {
            $(".c-shadow").fadeIn(500);
            $(".p-sidebar").css({ right: "100%", transition: "0.5s" });
        });
    } else {
        // それ以外の処理
        $(".c-shadow").fadeOut(00);
        $(".p-sidebar").css({ right: "0%" });
    }
    $(".p-sidebar__esc").on("click", function () {
        $(".c-shadow").fadeOut(500);
        $(".p-sidebar").css({ right: "0%", transition: "0.5s" });
    });
}

// $(function () {
// 	if (window.matchMedia("(max-width:599.9px)").matches) {
// 		$(".p-header__box").on("click", function () {
// 			$(".c-shadow").fadeIn(500);
// 			$(".p-sidebar").css({ left: "14%", transition: "0.5s" });
// 		});
// 	} else if (window.matchMedia("(mix-width:600px)").matches) {
// 		$(".p-header__box").on("click", function () {
// 			$(".c-shadow").fadeIn(500);
// 			$(".p-sidebar").css({ left: "57%", transition: "0.5s" });
// 		});
// 	}
// 	// $(".p-header__box").on("click", function () {
// 	// 	$(".c-shadow").fadeIn(500);
// 	// 	// $("body").css("position", "fixed");
// 	// 	$(".c-grid--sidebar").css({ transform: "translate(-86%, 0)", transition: "1s" });
// 	// });
// 	$(".p-sidebar__x").on("click", function () {
// 		$(".c-shadow").fadeOut(500);
// 		$(".p-sidebar").css({ left: "100%", transition: "0.5s" });
// 	});
// });

// $(function () {
//     $(".p-header__box").on("click", function () {
//         $(".c-shadow").fadeIn(600);
//         $(".p-sidebar").css({ left: "14%", transition: "0.6s" });
//     });

//     $(".p-sidebar__x").on("click", function () {
//         $(".p-sidebar").css("left", "100%");
//     });
// });
// $(function () {
// 	$(".p-header__box").on("click", function () {
// 		$(".c-shadow").fadeIn(600);
// 		// $("body").css("position", "fixed");
//         $(".p-sidebar").css({ "left": "-100%" ,"transition":"0.6s"});
// 	});

// 	$(".p-sidebar__x").on("click", function () {
// 		$(".c-shadow").fadeOut(500);
// 		$(".p-sidebar").css("left", "100%");
// 	});
// });


// function handle(mm) {
// 	if (mm.matches) {
// 		// ウィンドウサイズ768px以下のときの処理
// 		$(".p-header__box").on("click", function () {
// 			$(".c-shadow").fadeIn(500);
// 			$(".p-sidebar").css({ left: "14%", transition: "0.5s" });
// 		});
// 	} else  {
// 		// それ以外の処理
// 		$(".p-header__box").on("click", function () {
// 			$(".c-shadow").fadeIn(500);
// 			$(".p-sidebar").css({ left: "57%", transition: "0.5s" });
// 		});
//     }
//     $(".p-sidebar__x").on("click", function () {
// 		$(".c-shadow").fadeOut(500);
// 		$(".p-sidebar").css({ left: "100%", transition: "0.5s" });
//     });

// }
