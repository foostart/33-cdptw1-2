$(function() {

    $('#slider').movingBoxes({
        startPanel: 1,
        wrap: false,
        buildNav: true,
        navFormatter: function() {
            return "&#9679;";
        }
    });
});


