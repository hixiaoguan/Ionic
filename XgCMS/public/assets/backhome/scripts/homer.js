function fixWrapperHeight(){var e=62,a=$("#navigation").height(),i=$(".content").height();i<a&&$("#wrapper").css("min-height",a+"px"),i<a&&a<$(window).height()&&$("#wrapper").css("min-height",$(window).height()-e+"px"),i>a&&i<$(window).height()&&$("#wrapper").css("min-height",$(window).height()-e+"px")}function setBodySmall(){$(this).width()<769?$("body").addClass("page-small"):($("body").removeClass("page-small"),$("body").removeClass("show-sidebar"))}$(document).ready(function(){setBodySmall(),$(".hide-menu").click(function(e){e.preventDefault(),$(window).width()<769?$("body").toggleClass("show-sidebar"):$("body").toggleClass("hide-sidebar")}),$("#side-menu").metisMenu(),$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green"}),$(".animate-panel").animatePanel(),$(".showhide").click(function(e){e.preventDefault();var a=$(this).closest("div.hpanel"),i=$(this).find("i:first"),s=a.find("div.panel-body"),t=a.find("div.panel-footer");s.slideToggle(300),t.slideToggle(200),i.toggleClass("fa-chevron-up").toggleClass("fa-chevron-down"),a.toggleClass("").toggleClass("panel-collapse"),setTimeout(function(){a.resize(),a.find("[id^=map-]").resize()},50)}),$(".closebox").click(function(e){e.preventDefault();var a=$(this).closest("div.hpanel");a.remove()}),$(".fullscreen").click(function(){var e=$(this).closest("div.hpanel"),a=$(this).find("i:first");$("body").toggleClass("fullscreen-panel-mode"),a.toggleClass("fa-expand").toggleClass("fa-compress"),e.toggleClass("fullscreen"),setTimeout(function(){$(window).trigger("resize")},100)}),$(".right-sidebar-toggle").click(function(){$("#right-sidebar").toggleClass("sidebar-open")}),$(".small-header-action").click(function(e){e.preventDefault();var a=$(this).find("i:first"),i=$(this).parent().find("#hbreadcrumb");$(this).parent().parent().parent().toggleClass("small-header"),i.toggleClass("m-t-lg"),a.toggleClass("fa-arrow-up").toggleClass("fa-arrow-down")}),setTimeout(function(){fixWrapperHeight()}),$("#sparkline1").sparkline([5,6,7,2,0,4,2,4,5,7,2,4,12,11,4],{type:"bar",barWidth:7,height:"30px",barColor:"#62cb31",negBarColor:"#53ac2a"}),$(".tooltip-demo").tooltip({selector:"[data-toggle=tooltip]"}),$("[data-toggle=popover]").popover(),$(".modal").appendTo("body")}),$(window).bind("load",function(){$(".splash").css("display","none")}),$(window).bind("resize click",function(){setBodySmall(),setTimeout(function(){fixWrapperHeight()},300)}),$.fn.animatePanel=function(){var e=$(this),a=$(this).data("effect"),i=$(this).data("delay"),s=$(this).data("child");a||(a="zoomIn"),i?i/=10:i=.06,s=s?"."+s:".row > div";var t=0,o=Math.abs(i)+t,n=e.find(s);n.addClass("opacity-0"),n=e.find(s),n.addClass("stagger").addClass("animated-panel").addClass(a);var l=n.length+10,r=l*i*1e4/10;n.each(function(e,a){o+=i;var s=Math.round(10*o)/10;$(a).css("animation-delay",s+"s"),$(a).removeClass("opacity-0")}),setTimeout(function(){$(".stagger").css("animation",""),$(".stagger").removeClass(a).removeClass("animated-panel").removeClass("stagger")},r)};