$(function() {
// Select
$('.slct').click(function(){
	var dropBlock = $(this).parent().find('.drop');

	if( dropBlock.is(':hidden') ) {
		dropBlock.slideDown();
		$(this).addClass('active');
		$('.drop').find('li').click(function(){	
			var selectResult = $(this).html();		
			$(this).parent().parent().find('input').val(selectResult);
			$(this).parent().parent().find('.slct').removeClass('active').html(selectResult);	
			dropBlock.slideUp();
		});

	} else {
		$(this).removeClass('active');
		dropBlock.slideUp();
	}

	return false;
});
});

$(function() {
	 
        $( ".search-fix .controlgroup" ).controlgroup({
			position: { my : "left top", at: "left top", of: ".search-fix #city-vibor" }
		});
		$( ".controlgroup" ).controlgroup()
        $( ".controlgroup-vertical" ).controlgroup({
          "direction": "vertical"
        });
         $( "#datepicker" ).datepicker();
         $( "#datepicker2" ).datepicker();
		$( ".controlgroup" ).controlgroup( "option", "position", { my : "left top", at: "left top", of: ".search-dark" } );
		
		var pull 		= $('#pull');
			menu 		= $('nav ul');
			menuHeight	= menu.height();

		$(pull).on('click', function(e) {
			e.preventDefault();
			menu.slideToggle();
		});

		$(window).resize(function(){
			var w = $(window).width();
			if(w > 320 && menu.is(':hidden')) {
				menu.removeAttr('style');
			}
		});
		var pull_2 = $('#content-menu-pun');
			menu_2 = $('#content-menu-show');
			value = 0;

		$(pull_2).on('click', function(e) {
			if(value == 0 ){
			menu_2.css("height", "100%");
			value = 1; pull_2.text('свернуть');
			}else {
			menu_2.css("height", "20px");
			value = 0; pull_2.text('развернуть');
			}
		});
		$("#tabs").tabs();
		$("#tabs2").tabs();
		$(".various").fancybox({
                maxWidth	: 800,
                maxHeight	: 600,
                fitToView	: false,
                width		: '700',
                height		: '600',
                autoSize	: false,
                closeClick	: false,

          });
	  $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 20000,
		values: [ 1500, 15000    ],
		slide: function( event, ui ) {
			$("#slider-range-value1").text(ui.values[0]);
			$("#slider-range-value2").text(ui.values[1]);
		}
	});
	var btn = $('#el-search-btn');
		list = $('#el-search-select');
		icon = $('#icon-down-top');
		value = 0;

		$(btn).on('click', function(e) {
			if(value == 0 ){
				list.css("display", "block");value = 1;
				icon.css("background-position-y","7px");
			}else {
				list.css("display", "none");value = 0;
				icon.css("background-position-y","-7px");}
	});
	$( ".el-search-dop-input" ).checkboxradio();
	$(window).load(function() {
		// The slider being synced must be initialized first
		$('#carousel').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			itemWidth: 110,
			itemMargin: 5,
			asNavFor: '#slider'
		});

		$('#slider').flexslider({
			animation: "slide",
			controlNav: false,
			animationLoop: false,
			slideshow: false,
			sync: "#carousel"
		});
	});
	
$( ".el-search-dop-input" ).checkboxradio();
$( "#slider-range-d" ).slider({
	range: true,
	min: 0,
	max: 20000,
	values: [ 1500, 15000    ],
	slide: function( event, ui ) {
		$("#slider-range-value01").text(ui.values[0]);
		$("#slider-range-value02").text(ui.values[1]);
	}
});

	var btn_d = $('#el-search-btn-d');
	list_d = $('#el-search-select-d');
	icon_d = $('#icon-down-top-d');
	value = 0;

	$(btn_d).on('click', function(e) {
		if(value == 0 ){
			list_d.css("display", "block");value = 1;
			icon_d.css("background-position-y","7px");
		}else {
			list_d.css("display", "none");value = 0;
			icon_d.css("background-position-y","-7px");}
	});
	
$(window).scroll(function() {
	if($(this).scrollTop() != 0) {
	$('.search-fix').fadeIn();
	} else {
	$('.search-fix').fadeOut();
	}
});
$(".p-head li:has(ul)").addClass("menu_parent");
    $(".menu_parent").click(
      function(){
        $(this).find(">ul").toggleClass("menu_expanded");
        $(this).toggleClass("menu_parent_exp");
      }
    )  

});

$(document).ready(function(){
            var submitIcon = $('.searchbox-icon');
            var inputBox = $('.searchbox-input');
            var searchBox = $('.searchbox');
            var isOpen = false;
            submitIcon.click(function(){
                if(isOpen == false){
                    searchBox.addClass('searchbox-open');
                    inputBox.focus();
                    isOpen = true;
                } else {
                    searchBox.removeClass('searchbox-open');
                    inputBox.focusout();
                  inputBox.val('');
                    isOpen = false;
                }
            });  
             submitIcon.mouseup(function(){
                    return false;
                });
            searchBox.mouseup(function(){
                    return false;
                });
            $(document).mouseup(function(){
                    if(isOpen == true){
                        $('.searchbox-icon').css('display','block');
                        submitIcon.click();
                    }
                });
				
			
        });
function buttonUp(){
                var inputVal = $('.searchbox-input').val();
                inputVal = $.trim(inputVal).length;
                if( inputVal !== 0){
                    $('.searchbox-icon').css('display','none');
                } else {
                    $('.searchbox-input').val('');
                    $('.searchbox-icon').css('display','block');
                }
            }
            