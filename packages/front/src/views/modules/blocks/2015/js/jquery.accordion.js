(function ($) {
    $.fn.accordion = function (options) {
        if (!this || this.length < 1) {
            return this;
        }
        initialize(this, options);
    };
    function initialize(obj, options) {
        var opts = $.extend({}, $.fn.accordion.defaults, options);
        var opened = '';
        obj.each(function () {
            var $this = $(this);
            saveOpts($this, opts);
            if (opts.bind == 'mouseenter') {
                $this.bind('mouseenter', function (e) {
                    e.preventDefault();
                    toggle($this, opts);
                });
            }
            if (opts.bind == 'mouseover') {
                $this.bind('mouseover', function (e) {
                    e.preventDefault();
                    toggle($this, opts);
                });
            }
            if (opts.bind == 'click') {
                $this.bind('click', function (e) {
                    e.preventDefault();
                    toggle($this, opts);
                });
            }
            if (opts.bind == 'dblclick') {
                $this.bind('dblclick', function (e) {
                    e.preventDefault();
                    toggle($this, opts);
                });
            }
            id = $this.attr('id');
            if (!useCookies(opts)) {
                if (id != opts.defaultOpen) {
                    $this.addClass(opts.cssClose);
                    opts.loadClose($this, opts);
                } else {
                    $this.addClass(opts.cssOpen);
                    opts.loadOpen($this, opts);
                    opened = id;
                }
            } else {
                if (issetCookie(opts)) {
                    if (inCookie(id, opts) === false) {
                        $this.addClass(opts.cssClose);
                        opts.loadClose($this, opts);
                    } else {
                        $this.addClass(opts.cssOpen);
                        opts.loadOpen($this, opts);
                        opened = id;
                    }
                } else {
                    if (id != opts.defaultOpen) {
                        $this.addClass(opts.cssClose);
                        opts.loadClose($this, opts);
                    } else {
                        $this.addClass(opts.cssOpen);
                        opts.loadOpen($this, opts);
                        opened = id;
                    }
                }
            }
        });
        if (opened.length > 0 && useCookies(opts)) {
            setCookie(opened, opts);
        } else {
            setCookie('', opts);
        }
        return obj;
    }
    ;
    function loadOpts($this) {
        return $this.data('accordion-opts');
    }
    function saveOpts($this, opts) {
        return $this.data('accordion-opts', opts);
    }
    function close(opts) {
        opened = $(document).find('.' + opts.cssOpen);
        $.each(opened, function () {
            $(this).addClass(opts.cssClose).removeClass(opts.cssOpen);
            opts.animateClose($(this), opts);
        });
    }
    function open($this, opts) {
        close(opts);
        $this.removeClass(opts.cssClose).addClass(opts.cssOpen);
        opts.animateOpen($this, opts);
        if (useCookies(opts)) {
            id = $this.attr('id');
            setCookie(id, opts);
        }
    }
    function toggle($this, opts) {
        if ($this.hasClass(opts.cssOpen))
        {
            close(opts);
            if (useCookies(opts)) {
                setCookie('', opts);
            }
            return false;
        }
        close(opts);
        open($this, opts);
        return false;
    }
    function useCookies(opts) {
        if (!$.cookie || opts.cookieName == '') {
            return false;
        }
        return true;
    }
    function setCookie(value, opts)
    {
        if (!useCookies(opts)) {
            return false;
        }
        $.cookie(opts.cookieName, value, opts.cookieOptions);
    }
    function inCookie(value, opts)
    {
        if (!useCookies(opts)) {
            return false;
        }
        if (!issetCookie(opts)) {
            return false;
        }
        cookie = unescape($.cookie(opts.cookieName));
        if (cookie != value) {
            return false;
        }
        return true;
    }
    function issetCookie(opts)
    {
        if (!useCookies(opts)) {
            return false;
        }
        if ($.cookie(opts.cookieName) == null) {
            return false;
        }
        return true;
    }

    $.fn.accordion.defaults = {cssClose: 'accordion-close', cssOpen: 'accordion-open', cookieName: 'accordion', cookieOptions: {path: '/', expires: 7, domain: '', secure: ''}, defaultOpen: '', speed: 'slow', bind: 'click', animateOpen: function (elem, opts) {
            elem.next().stop(true, true).slideDown(opts.speed);
        }, animateClose: function (elem, opts) {
            elem.next().stop(true, true).slideUp(opts.speed);
        }, loadOpen: function (elem, opts) {
            elem.next().show();
        }, loadClose: function (elem, opts) {
            elem.next().hide();
        }};
})(jQuery);
$(document).ready(function () {
    if ($(".accordion_cp").length) {
        $.fn.slideFadeToggle = function (speed, easing, callback) {
            return this.animate({opacity: 'toggle', height: 'toggle'}, speed, easing, callback);
        };
        $('.accordion_cp').accordion({defaultClose: 'section1', cookieName: 'nav', speed: 'slow', animateOpen: function (elem, opts) {
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }, animateClose: function (elem, opts) {
                elem.next().stop(true, true).slideFadeToggle(opts.speed);
            }});
    }
});
