"use strict";
export const NavManager = function() {
    var navbar = document.querySelector(".nav");
    var sticky = navbar.offsetTop;
    var nav_sections = $("section");

    function onScrollSticky() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }

    function onScrollActiveTab(scroll) {
        var current_position = scroll.scrollTop() + 150;

        nav_sections.each(function() {
            var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

            if (current_position >= top && current_position <= bottom) {
                if (current_position <= bottom) {
                    $("#" + navbar.id)
                        .find("a")
                        .removeClass("active");
                }
                $("#" + navbar.id)
                    .find('a[href="#' + $(this).attr("id") + '"]')
                    .addClass("active");
            }
            if (current_position < 300) {
                $(".nav a").addClass("active").animate("slow");
            }
        });
    }

    return {
        init: function() {
            $(window)
                .off("scroll")
                .on("scroll", function(event) {
                    onScrollSticky();
                    onScrollActiveTab($(this));
                });
        }
    };
};
