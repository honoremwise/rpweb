/******************************************
			-	PREPARE PLACEHOLDER FOR SLIDER	-
		******************************************/
		
		var setREVStartSize = function() {
			try {
				var e = new Object,
						i = jQuery(window).width(),
						t = 9999,
						r = 0,
						n = 0,
						l = 0,
						f = 0,
						s = 0,
						h = 0;
				e.c = jQuery('#rev_slider_2_1');
				e.responsiveLevels = [1240, 1024, 778, 480];
				e.gridwidth = [1230, 1024, 768, 480];
				e.gridheight = [630, 525, 390, 245];

				e.sliderLayout = "fullwidth";
				if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
						f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
				}), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
						var u = (e.c.width(), jQuery(window).height());
						if (void 0 != e.fullScreenOffsetContainer) {
								var c = e.fullScreenOffsetContainer.split(",");
								if (c) jQuery.each(c, function(e, i) {
										u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
								}), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
						}
						f = u
				} else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
				e.c.closest(".rev_slider_wrapper").css({
					height: f
				})
			} catch (d) {
				console.log("Failure at Presize of Slider:" + d)
			}
		};
		setREVStartSize();
		var tpj = jQuery;
		var revapi2;
		tpj(document).ready(function() {
			if (tpj("#rev_slider_2_1").revolution == undefined) {
				revslider_showDoubleJqueryError("#rev_slider_2_1");
			} else {
				revapi2 = tpj("#rev_slider_2_1").show().revolution({
					sliderType: "standard",
					jsFileLocation: "js/revslider/",
					sliderLayout: "fullwidth",
					dottedOverlay: "none",
					delay: 7000,
					navigation: {
						keyboardNavigation: "off",
						keyboard_direction: "horizontal",
						mouseScrollNavigation: "off",
						mouseScrollReverse: "default",
						onHoverStop: "off",
						touch: {
							touchenabled: "on",
							touchOnDesktop: "off",
							swipe_threshold: 75,
							swipe_min_touches: 50,
							swipe_direction: "horizontal",
							drag_block_vertical: false
						},
						bullets: {
								enable: true,
								hide_onmobile: true,
								hide_under: 600,
								style: "custom",
								hide_onleave: false,
								direction: "horizontal",
								h_align: "center",
								v_align: "bottom",
								h_offset: 0,
								v_offset: 30,
								space: 20,
								tmp: ''
						}
					},
					responsiveLevels: [1240, 1024, 778, 480],
					visibilityLevels: [1240, 1024, 778, 480],
					gridwidth: [1230, 1024, 768, 480],
					gridheight: [630, 525, 390, 245],
					lazyType: "smart",
					parallax: {
						type: "mouse",
						origo: "slidercenter",
						speed: 2000,
						levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
					},
					shadow: 0,
					spinner: "off",
					stopLoop: "off",
					stopAfterLoops: -1,
					stopAtSlide: -1,
					shuffle: "off",
					autoHeight: "off",
					disableProgressBar: "on",
					hideThumbsOnMobile: "on",
					hideSliderAtLimit: 0,
					hideCaptionAtLimit: 0,
					hideAllCaptionAtLilmit: 0,
					debugMode: false,
					fallbacks: {
						simplifyAll: "off",
						nextSlideOnWindowFocus: "off",
						disableFocusListener: true,
					}
				});
			}
		}); /*ready*/