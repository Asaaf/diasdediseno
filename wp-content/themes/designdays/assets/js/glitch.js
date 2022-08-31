(function($, window, document, undefined) {

    "use strict";

    var pluginName = "glitchImage";

    var defaults = {
        imageUrl: null, // uses background unless specified
        frequency: 99 //ms
    };

    //exposed controls
    var controls = {
        play: function(id) {
            Plugin.prototype.play(id);
        },
        pause: function(id) {
            Plugin.prototype.pause(id);
        },
        clear: function() {
            Plugin.prototype.clear();
        },
        destroy: function() {
            console.log(Plugin.prototype);
        }
    }

    // The actual plugin constructor
    function Plugin(element, options) {
        this.element = element;
        this.settings = $.extend({}, defaults, options);
        this._defaults = defaults;
        this._name = pluginName;

        this.init();
    }

    // Avoid Plugin.prototype conflicts
    $.extend(Plugin.prototype, {
        init: function() {

            this.$element = $(this.element);
            this.glitchId = parseInt(this.$element.data('glitch-id'));

            if (!this.glitchId) {
                this.glitchId = 0;
            }
            if (!this.settings.width) {
                this.settings.width = this.$element.width();
            }
            if (!this.settings.height) {
                this.settings.height = this.$element.height();
            }

            this.canvas = document.createElement('canvas');
            this.canvas.width = this.settings.width;
            this.canvas.height = this.settings.height;
            //append the canvas to the selected el
            this.$element.append(this.canvas);
            this.context = this.canvas.getContext('2d');

            if (!Array.isArray($.fn[pluginName].paused)) {
                $.fn[pluginName].paused = [];
            }
            if (this.settings.imageUrl === null) {
                this.backgroundImageUrl = this.$element.css('background-image').slice(5, -2);
            } else {
                this.backgroundImageUrl = settings.imageUrl;
            }
            this.img = new Image();
            this.img.src = this.backgroundImageUrl;
            this.img.width = this.settings.width;
            this.img.height = this.settings.height;
            this.draw();
        },
        getRandInt: function(a, b) {
            return ~~(Math.random() * (b - a) + a)
        },
        draw: function() {
            var _this = this;
            this.glitchInterval = setInterval(function() {
                if ($.fn[pluginName].paused.indexOf(_this.glitchId) === -1) {
                    this.context = _this.context;
                    setTimeout(function() {
                        for (var i = 0; i < _this.getRandInt(1, 13); i++) {
                            var x = Math.random() * _this.settings.width,
                                y = Math.random() * _this.settings.height,
                                spliceWidth = _this.settings.width - x,
                                spliceHeight = _this.getRandInt(5, _this.settings.height / 3);
                            _this.context.drawImage(_this.img, 0, y, spliceWidth, spliceHeight, x, y, spliceWidth, spliceHeight);
                            _this.context.drawImage(_this.img, spliceWidth, y, x, spliceHeight, 0, y, x, spliceHeight);
                        }
                    }, _this.getRandInt(250, 1000));
                }
            }, _this.settings.frequency);
        },
        clear: function() {
            var _this = this;
            if (_this.context) {
                _this.context.clearRect(0, 0, 250, 250);
            }
        },
        play: function(id) {
            if ($.fn[pluginName].paused) {
                var indexOfPaused = $.fn[pluginName].paused.indexOf(id);
            }
            if (indexOfPaused >= 0) {
                $.fn[pluginName].paused.splice(indexOfPaused, 1);
            }
        },
        pause: function(id) {
            if ($.fn[pluginName].paused && $.fn[pluginName].paused.length === 0) {
                $.fn[pluginName].paused = [id];
            } else {
                if ($.fn[pluginName].paused && $.fn[pluginName].paused.indexOf(id) === -1) {
                    $.fn[pluginName].paused.push(id);
                }
            }
        },
        stop: function() {

        },
        destroy: function() {}
    });

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[pluginName] = function(options) {
        if (typeof arguments[0] === 'string') {
            //execute string comand on mediaPlayer
            //pass the element id as an argument to control functions
            var args = [$(this).data('glitch-id')];
            controls[arguments[0]].apply(this, args);
            return this;
        } else {
            return this.each(function() {
                if (!$.data(this, "plugin_" + pluginName)) {
                    $.data(this, "plugin_" +
                        pluginName, new Plugin(this, options));
                }
            });
        }
    };

})(jQuery, window, document);

function showLoader() {
    var glitch = $('.glitched').glitchImage();
    var glitch2 = $('.glitched2').glitchImage();

    setInterval(function() {
        glitch.glitchImage('clear');
        glitch2.glitchImage('clear');
        glitch.glitchImage('play');
        glitch2.glitchImage('play');
        setTimeout(function() {
            glitch.glitchImage('pause');
            glitch2.glitchImage('pause');
        }, 50);
    }, 150);
}

$(window).on("load", showLoader);