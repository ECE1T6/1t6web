var crew = {};

crew.init = function() {
    var escapeEl;
    escapeEl = $('.escape');
    escapeEl.mouseover(function(e) {
        var $this, position, origRotation;
        e.preventDefault();
        $this = $(this);
        position = $this.position();
        origRotation = parseFloat($this.data('transform')) || 0;
        $this.css({
            position: 'absolute',
            left: position.left,
            top: position.top,
        });

        $this.animate({
            left: crew.utils.rand(0, $(window).width() - 10),
            top: crew.utils.rand(0, $(window).height() - 10),
        }, {
            step: function(now, fx) {
                now += origRotation;
                $this.css({
                    '-webkit-transform': 'rotate(' + now + 'deg)',
                    'transform': 'rotate(' + now + 'deg)',
                });

                $this.data('transform', now);
            },
        });

        return false;
    });
};

$(document).ready(crew.init);
