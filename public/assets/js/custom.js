(function($) {
    "use strict";

    // ______________Cover Image
    $(".cover-image").each(function() {
        var attr = $(this).attr('data-image-src');
        if (typeof attr !== typeof undefined && attr !== false) {
            $(this).css('background', 'url(' + attr + ') center center');
        }
    });

    $('.table-subheader').click(function(){
        $(this).nextUntil('tr.table-subheader').slideToggle(100);
    });

    // ______________ Horizonatl
    $(document).ready(function() {
        $("a[data-theme]").click(function() {
            $("head link#theme").attr("href", $(this).data("theme"));
            $(this).toggleClass('active').siblings().removeClass('active');
        });
        $("a[data-effect]").click(function() {
            $("head link#effect").attr("href", $(this).data("effect"));
            $(this).toggleClass('active').siblings().removeClass('active');
        });
    });


    // ______________Full screen
    $("#fullscreen-button").on("click", function toggleFullScreen() {
        if ((document.fullScreenElement !== undefined && document.fullScreenElement === null) || (document.msFullscreenElement !== undefined && document.msFullscreenElement === null) || (document.mozFullScreen !== undefined && !document.mozFullScreen) || (document.webkitIsFullScreen !== undefined && !document.webkitIsFullScreen)) {
            if (document.documentElement.requestFullScreen) {
                document.documentElement.requestFullScreen();
            } else if (document.documentElement.mozRequestFullScreen) {
                document.documentElement.mozRequestFullScreen();
            } else if (document.documentElement.webkitRequestFullScreen) {
                document.documentElement.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            } else if (document.documentElement.msRequestFullscreen) {
                document.documentElement.msRequestFullscreen();
            }
        } else {
            if (document.cancelFullScreen) {
                document.cancelFullScreen();
            } else if (document.mozCancelFullScreen) {
                document.mozCancelFullScreen();
            } else if (document.webkitCancelFullScreen) {
                document.webkitCancelFullScreen();
            } else if (document.msExitFullscreen) {
                document.msExitFullscreen();
            }
        }
    })

    // ______________Active Class
    $(document).ready(function() {
        $(".horizontalMenu-list li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
        $(".horizontal-megamenu li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
        $(".horizontalMenu-list .sub-menu .sub-menu li a").each(function() {
            var pageUrl = window.location.href.split(/[?#]/)[0];
            if (this.href == pageUrl) {
                $(this).addClass("active");
                $(this).parent().addClass("active"); // add active to li of the current link
                $(this).parent().parent().parent().parent().prev().addClass("active"); // add active class to an anchor
                $(this).parent().parent().prev().click(); // click the item to make it drop
            }
        });
    });

    // ______________Quantity Cart Increase & Descrease
    $(function () {
        $('.add').on('click',function(){
            var $qty=$(this).closest('div').find('.qty');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal)) {
                $qty.val(currentVal + 1);
            }
        });
        $('.minus').on('click',function(){
            var $qty=$(this).closest('div').find('.qty');
            var currentVal = parseInt($qty.val());
            if (!isNaN(currentVal) && currentVal > 0) {
                $qty.val(currentVal - 1);
            }
        });
    });

    // ___________TOOLTIP
    $('[data-toggle="tooltip"]').tooltip();
    // colored tooltip
    $('[data-toggle="tooltip-primary"]').tooltip({
        template: '<div class="tooltip tooltip-primary" role="tooltip"><div class="arrow"><\/div><div class="tooltip-inner"><\/div><\/div>'
    });
    $('[data-toggle="tooltip-secondary"]').tooltip({
        template: '<div class="tooltip tooltip-secondary" role="tooltip"><div class="arrow"><\/div><div class="tooltip-inner"><\/div><\/div>'
    });

    // __________POPOVER
    $('[data-toggle="popover"]').popover();
    $('[data-popover-color="head-primary"]').popover({
        template: '<div class="popover popover-head-primary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
    });
    $('[data-popover-color="head-secondary"]').popover({
        template: '<div class="popover popover-head-secondary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
    });
    $('[data-popover-color="primary"]').popover({
        template: '<div class="popover popover-primary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
    });
    $('[data-popover-color="secondary"]').popover({
        template: '<div class="popover popover-secondary" role="tooltip"><div class="arrow"><\/div><h3 class="popover-header"><\/h3><div class="popover-body"><\/div><\/div>'
    });
    $(document).on('click', function(e) {
        $('[data-toggle="popover"],[data-original-title]').each(function() {
            //the 'is' for buttons that trigger popups
            //the 'has' for icons within a button that triggers a popup
            if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {
                (($(this).popover('hide').data('bs.popover') || {}).inState || {}).click = false // fix for BS 3.3.6
            }
        });
    });

    // __________MODAL
    // showing modal with effect
    $('.modal-effect').on('click', function(e) {
        e.preventDefault();
        var effect = $(this).attr('data-effect');
        $('#modaldemo8').addClass(effect);
    });
    // hide modal with effect
    $('#modaldemo8').on('hidden.bs.modal', function(e) {
        $(this).removeClass(function(index, className) {
            return (className.match(/(^|\s)effect-\S+/g) || []).join(' ');
        });
    });

    // ______________ Page Loading
    $(window).on("load", function(e) {
        $("#global-loader").fadeOut("slow");
    })

    // ______________Back to top Button
    $(window).on("scroll", function(e) {
        if ($(this).scrollTop() > 0) {
            $('#back-to-top').fadeIn('slow');
        } else {
            $('#back-to-top').fadeOut('slow');
        }
    });
    $("#back-to-top").on("click", function(e){
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

    // ______________ StarRating
    var ratingOptions = {
        selectors: {
            starsSelector: '.rating-stars',
            starSelector: '.rating-star',
            starActiveClass: 'is--active',
            starHoverClass: 'is--hover',
            starNoHoverClass: 'is--no-hover',
            targetFormElementSelector: '.rating-value'
        }
    };
    $(".rating-stars").ratingStars(ratingOptions);

    // ______________ Chart-circle
    if ($('.chart-circle').length) {
        $('.chart-circle').each(function() {
            let $this = $(this);

            $this.circleProgress({
                fill: {
                    color: $this.attr('data-color')
                },
                size: $this.height(),
                startAngle: -Math.PI / 4 * 2,
                emptyFill: '#e2e2e9',
                lineCap: 'round'
            });
        });
    }
    // ______________ Chart-circle
    if ($('.chart-circle-primary').length) {
        $('.chart-circle-primary').each(function() {
            let $this = $(this);

            $this.circleProgress({
                fill: {
                    color: $this.attr('data-color')
                },
                size: $this.height(),
                startAngle: -Math.PI / 4 * 2,
                emptyFill: 'rgba(112, 94, 200, 0.4)',
                lineCap: 'round'
            });
        });
    }

    // ______________ Chart-circle
    if ($('.chart-circle-secondary').length) {
        $('.chart-circle-secondary').each(function() {
            let $this = $(this);

            $this.circleProgress({
                fill: {
                    color: $this.attr('data-color')
                },
                size: $this.height(),
                startAngle: -Math.PI / 4 * 2,
                emptyFill: 'rgba(251, 28, 82, 0.4)',
                lineCap: 'round'
            });
        });
    }

    // ______________ Chart-circle
    if ($('.chart-circle-success').length) {
        $('.chart-circle-success').each(function() {
            let $this = $(this);

            $this.circleProgress({
                fill: {
                    color: $this.attr('data-color')
                },
                size: $this.height(),
                startAngle: -Math.PI / 4 * 2,
                emptyFill: 'rgba(66, 196, 138, 0.5)',
                lineCap: 'round'
            });
        });
    }

    // ______________ Chart-circle
    if ($('.chart-circle-warning').length) {
        $('.chart-circle-warning').each(function() {
            let $this = $(this);

            $this.circleProgress({
                fill: {
                    color: $this.attr('data-color')
                },
                size: $this.height(),
                startAngle: -Math.PI / 4 * 2,
                emptyFill: 'rgba(255, 171, 0, 0.5)',
                lineCap: 'round'
            });
        });
    }

    // ______________ Global Search
    $(document).on("click", "[data-toggle='search']", function(e) {
        var body = $("body");

        if(body.hasClass('search-gone')) {
            body.addClass('search-gone');
            body.removeClass('search-show');
        }else{
            body.removeClass('search-gone');
            body.addClass('search-show');
        }
    });
    var toggleSidebar = function() {
        var w = $(window);
        if(w.outerWidth() <= 1024) {
            $("body").addClass("sidebar-gone");
            $(document).off("click", "body").on("click", "body", function(e) {
                if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
                    $("body").removeClass("sidebar-show");
                    $("body").addClass("sidebar-gone");
                    $("body").removeClass("search-show");
                }
            });
        }else{
            $("body").removeClass("sidebar-gone");
        }
    }
    toggleSidebar();
    $(window).resize(toggleSidebar);

    const DIV_CARD = 'div.card';
    // ______________ Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // ______________ Popover
    $('[data-toggle="popover"]').popover({
        html: true
    });

    // ______________ Card Remove
    $(document).on('click', '[data-toggle="card-remove"]', function(e) {
        let $card = $(this).closest(DIV_CARD);
        $card.remove();
        e.preventDefault();
        return false;
    });

    // ______________ Card Collapse
    $(document).on('click', '[data-toggle="card-collapse"]', function(e) {
        let $card = $(this).closest(DIV_CARD);
        $card.toggleClass('card-collapsed');
        e.preventDefault();
        return false;
    });

    // ______________ Card Fullscreen
    $(document).on('click', '[data-toggle="card-fullscreen"]', function(e) {
        let $card = $(this).closest(DIV_CARD);
        $card.toggleClass('card-fullscreen').removeClass('card-collapsed');
        e.preventDefault();
        return false;
    });

    // sparkline1
    $(".sparkline_bar").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4], {
        height: 20,
        type: 'bar',
        colorMap: {
            '7': '#a1a1a1'
        },
        barColor: '#ff5b51'
    });

    // sparkline2
    $(".sparkline_bar1").sparkline([3, 4, 3, 4, 5, 4, 5, 6, 4, 6,], {
        height: 20,
        type: 'bar',
        colorMap: {
            '7': '#c34444'
        },
        barColor: '#44c386'
    });

    // sparkline3
    $(".sparkline_bar2").sparkline([3, 4, 3, 4, 5, 4, 5, 6, 4, 6,], {
        height: 20,
        type: 'bar',
        colorMap: {
            '7': '#a1a1a1'
        },
        barColor: '#fa057a'
    });


    // ______________ Styles ______________//

    //$('body').addClass('color-menu');//

    //$('body').addClass('light-menu');//

    //$('body').addClass('dark-menu');//

    //$('body').addClass('gradient-menu');//

    //$('body').addClass('light-hor-header');//

    //$('body').addClass('color-hor-header');//

    //$('body').addClass('dark-hor-header');//

    //$('body').addClass('gradient-hor-header');//

    //$('body').addClass('color-hor-menu');//

    //$('body').addClass('light-hor-menu');//

    //$('body').addClass('gradient-hor-menu');//

    //$('body').addClass('dark-hor-menu');//

})(jQuery);


$(document).ready(function(e) {
    //Details display datatable


    //
    function modalDataTableFunc(){
        $('#dtable_popup').DataTable( {
            responsive: true,
            "pageLength": 8,
            "order": [[ 2, "desc" ]],
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_',
            },
            columnDefs: [{
                className: "text-center",
                targets: "_all"
            }],
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal( {
                        header: function ( row ) {
                            var data = row.data();
                            return 'Details for '+data[0]+' '+data[1];
                        }
                    } ),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                        tableClass: 'table border mb-0'
                    } )
                }
            }
        });
    }
    $("#ctg_hospital_popup_content").click(function (){
        $('.modal-title').html('Dhaka Hospital Data Table');
        $('#modalContent').html($('#hospital_popup_table_content').html());
        modalDataTableFunc();
    });

    $("#dhk_hospital_popup_content").click(function(){
        $('.modal-title').html('Chittagong Hospital Data Table');
        $('#modalContent').html($('#hospital_popup_table_content').html());
        modalDataTableFunc();
    });
});

/* Population Wise Infection */
/*var population_wise_infection_options = {
	series: [44, 55, 41, 17, 15],
	colors: ['#705ec8', '#fa057a', '#2dce89', '#ff5b51',  '#fcbf09'],
	chart: {
		height: 300,
		type: 'donut',
	},
	legend: {
		show: false,
	},
	responsive: [{
		breakpoint: 480,
		options: {
			chart: {
				width: 200
			},
			legend: {
				show: false,
				position: 'bottom'
			}
		}
	}]
};
var population_wise_infec = new ApexCharts(document.querySelector("#population-wise-infection"), population_wise_infection_options);
population_wise_infec.render();


/*----- Gender Vs Age -----*/

/*var chart = c3.generate({
	bindto: '#total_case', // id of chart wrapper
	data: {
		columns: [
			// each columns data
			['data1', 11, 30, 45, 48, 50, 62, 75],
			['data2', 4, 12, 18, 25, 28, 18, 40]
		],
		type: 'bar', // default type of chart
		colors: {
			data1: '#705ec8',
			data2: '#fb1c52'
		},
		names: {
			// name of each serie
			'data1': 'Male',
			'data2': 'Female'
		}
	},
	axis: {
		x: {
			type: 'category',
			// name of each category
			categories: ['0-10', '11-20', '21-30', '31-40', '41-50', '51-60', '61+']
		},
	},
	bar: {
		width: 16
	},
	legend: {
		  show: true, //hide legend
	},
	padding: {
		bottom: 0,
		top: 0
	},
});

var chart = c3.generate({
	bindto: '#total_death', // id of chart wrapper
	data: {
		columns: [
			// each columns data
			['data1', 22, 35, 35, 25, 37, 62, 30],
			['data2', 9, 18, 17, 12, 29, 18, 40]
		],
		type: 'bar', // default type of chart
		colors: {
			data1: '#705ec8',
			data2: '#fb1c52'
		},
		names: {
			// name of each serie
			'data1': 'Male',
			'data2': 'Female'
		}
	},
	axis: {
		x: {
			type: 'category',
			// name of each category
			categories: ['0-10', '11-20', '21-30', '31-40', '41-50', '51-60', '61+']
		},
	},
	bar: {
		width: 16
	},
	legend: {
		  show: true, //hide legend
	},
	padding: {
		bottom: 0,
		top: 0
	},
});
*/
// Weekly Change
var chart = c3.generate({
    bindto: '#weekly_change', // id of chart wrapper
    data: {
        columns: [
            // each columns data
            ['red', 10, 8, 10, 12, 20, 18],
            ['yellow', 8, 12, 8, 20, 10, 13],
            ['green', 8, 8, 9, 8, 10, 13]
        ],
        type: 'area-spline', // default type of chart
        groups: [
            [ 'red', 'yellow', 'green']
        ],
        colors: {
            red: '#ef4b4b',
            yellow: '#ffab00',
            green: '#38cb89'
        },
        names: {
            // name of each serie
            'red': 'Red',
            'yellow': 'Yellow',
            'Green': 'Green',

        }
    },
    axis: {
        x: {
            type: 'category',
            // name of each category
            categories: ['May', 'June', 'July', 'Aug', 'Sep', 'Oct']
        },
    },
    legend: {
        show: false, //hide legend
    },
    padding: {
        bottom: 0,
        top: 0
    },
});
