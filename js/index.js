(function($){
    TX = {
        bars: null,
        set_bars: function(bars) {
            this.bars = [];
            for (i=0; i<bars; i++) {
                this.bars.push({
                    height: (Math.random() * 30) + 10
                });
            }
        },
        build_bars: function(container, bars) {
            var container = $(container), that = this;
            this.set_bars(bars);
            
            $.each(this.bars, function() {
                container.append(that.build_html(this));
            });
        },
        build_html: function(bar) {
            return $('<div>').addClass('bar').css({height: bar.height * 10});
        }
    };
})(jQuery);