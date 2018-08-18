(function(b) {
    function a() {
        this._orgOpt = {};
        this._defaults = {
            label: "",
            autoSelected: true,
            displayOption: "default",
            autocomplete: true,
            showLabelOnClose: false,
            update: false,
            change: function() {},
            complete: function() {}
        }
    }
    b.fn.dropdown = function(c) {
        return this.each(function() {
            if (c.update == true) {
                b.dropdown._update(this, b.dropdown._orgOpt[this.id])
            }
            b.dropdown._createDropDown(this, c)
        })
    };
    b.extend(a.prototype, {
        _createDropDown: function(o, s) {
            var l = false;
            var f = [];
            var p = {};
            b.extend(p, this._defaults, s);
            this._orgOpt[o.id] = p;
            if (!p.autoSelected) {
                b("#" + o.id + " option:selected").attr("selected", false)
            } else {
                b.each(b("#" + o.id + " option:selected"), function(t, u) {
                    f.push(u.value)
                })
            }
            ddSelWrap = b("<div>", {
                "class": "ddSelWrap",
                id: "ddSelWrap_" + o.id
            });
            ddOptHolderWrapper = b("<div>", {
                "class": "ddOptHolderWrapper",
                id: "ddOptHolderWrapper_" + o.id,
                mouseenter: function(t) {
                    l = true
                },
                mouseleave: function(t) {
                    l = false
                }
            });
            ddOptHolder = b("<div>", {
                "class": "ddOptHolder",
                id: "ddOptHolder_" + o.id,
                click: function(t) {
                    t.stopPropagation();
                    if (b(this).hasClass("ddOptHolderOpen")) {
                        d()
                    } else {
                        h()
                    }
                }
            });
            ddLabelHolder = b("<div>", {
                "class": "ddLabelHolder",
                id: "ddLabelHolder_" + o.id,
                click: function(t) {
                    if (b(this).hasClass("ddLabelHolderOpen")) {
                        t.stopPropagation()
                    }
                }
            });
            ddLabel = b("<p>", {
                "class": "ddLabel"
            });
            ddSelOptHolder = b("<div>", {
                "class": "ddSelOptHolder",
                id: "ddSelOptHolder_" + o.id,
                click: function(t) {
                    if (p.label != undefined && p.label != "") {
                        t.stopPropagation()
                    }
                    b("#ddSelOptText_" + o.id).focus();
                    if (p.label == "" || p.label == undefined) {
                        if (b(this).hasClass("ddSelOptHolderOpen")) {
                            d()
                        } else {
                            h()
                        }
                    }
                }
            });
            ddSelOptText = b("<input>", {
                type: "text",
                "class": "ddSelOptText",
                id: "ddSelOptText_" + o.id,
                autocomplete: "off",
                css: {
                    display: "none"
                },
                click: function(t) {
                    t.stopPropagation()
                },
                keydown: function(t) {
                    j(b(this), t)
                },
                keypress: function(t) {
                    j(b(this), t)
                },
                keyup: function(t) {
                    j(b(this), t)
                },
                blur: function(w) {
                    var x = b("#ddOptHolder_" + o.id);
                    var u = b("#ddOptionHolder_" + o.id);
                    var v = 0;
                    var t = 0;
                    if (typeof x == "object" && typeof u == "object") {
                        v = (x.offset().top + x.outerHeight() + u.outerHeight());
                        t = (x.offset().left + x.outerWidth(true));
                        if (yPos < x.offset().top || yPos > v) {
                            l = false
                        }
                        if (xPos < x.offset().left || xPos > t) {
                            l = false
                        }
                    }
                    if (!l) {
                        d()
                    }
                }
            });
            ddOptionHolder = b("<div>", {
                "class": "ddOptionHolder",
                id: "ddOptionHolder_" + o.id
            });
            if (p.label != "" && p.label != undefined) {
                ddLabel.text(p.label);
                ddLabel.appendTo(ddLabelHolder);
                ddLabelHolder.appendTo(ddOptHolder)
            }
            if (p.autoSelected) {
                b.each(f, function(t, u) {
                    ddSelectedOptSpan = q(b('select[name="' + o.name + '"] option[value="' + unescape(u) + '"]'));
                    ddSelectedOptSpan.appendTo(ddSelOptHolder)
                });
                if (f.length == 0) {
                    ddSelectedOptSpan = b("<span>", {
                        "class": "ddSelectedOptSpan",
                        id: "ddSelectedOptSpan_" + o.id + "_" + b("#" + o.id + " option:first").val(),
                        click: function(t) {
                            t.stopPropagation();
                            g(b(this))
                        }
                    });
                    ddSelectedOptSpan.text(b("#" + o.id + " option:first").text());
                    ddSelectedOptSpan.appendTo(ddSelOptHolder);
                    b('select[name="' + o.name + '"] option:first').attr("selected", "selected")
                }
                if (p.displayOption == "comma") {
                    selectedOptSpan = ddSelOptHolder.find("span");
                    selOptStr = "";
                    if (selectedOptSpan.length > 0) {
                        var i = [];
                        b.each(selectedOptSpan, function(t, u) {
                            i.push(b(u).text())
                        });
                        selOptStr = i.join(" , ");
                        selOptStr = (selOptStr.length > 28) ? selOptStr.substr(0, 28) + "..." : selOptStr
                    }
                    if (p.showLabelOnClose) {
                        optWithLabelSpan = b("<span>", {
                            "class": "ddSelectedVal"
                        });
                        optWithLabelSpan.text(selOptStr);
                        optWithLabelSpan.appendTo(ddLabelHolder)
                    } else {
                        ddLabel.text(selOptStr);
                        ddLabel.appendTo(ddLabelHolder)
                    }
                } else {
                    ddSelOptHolder.addClass("ddSelOptHolderOpen")
                }
            }
            if (p.autocomplete) {
                ddSelOptText.attr("size", "1");
                ddSelOptText.appendTo(ddSelOptHolder)
            } else {
                if (ddSelOptHolder.html() == "") {
                    ddSelOptHolder.html("&nbsp;");
                    ddSelOptHolder.css("padding-bottom", "7px")
                }
            }
            ddSelOptHolder.appendTo(ddOptHolder);
            ddOptHolder.appendTo(ddOptHolderWrapper);
            ddOptionHolder.appendTo(ddOptHolderWrapper);
            ddOptHolderWrapper.appendTo(ddSelWrap);
            ddSelWrap.insertAfter("#" + o.id);
            b("#" + o.id).hide();

            function j(t, u) {
                switch (u.keyCode) {
                    case 8:
                        if (u.type == "keyup") {
                            if (b("#ddSelOptText_" + o.id).val().length == 0) {
                                prevElement = b("#ddSelOptText_" + o.id).prev();
                                if (prevElement.is("span")) {
                                    if (prevElement.hasClass("ddSelectedOptSpanHover")) {
                                        g(prevElement)
                                    } else {
                                        prevElement.addClass("ddSelectedOptSpanHover")
                                    }
                                }
                            }
                        }
                        r();
                        textObjVal = (t == undefined) ? "" : t.val().toLowerCase();
                        n(textObjVal);
                        break;
                    case 13:
                        u.preventDefault();
                        if (u.type == "keyup") {
                            c(b("#ddOptHolderWrapper_" + o.id + " .ddOptionHolderLiHover"))
                        }
                        break;
                    case 38:
                        if (u.type == "keydown") {
                            selected = b("#ddOptHolderWrapper_" + o.id + " .ddOptionHolderLiHover");
                            if (selected.siblings().length > 0) {
                                b("#ddOptionHolder_" + o.id + " li").removeClass("ddOptionHolderLiHover");
                                prevSibling = selected.prevAll(":not(.ddOptgroupLI)").first();
                                if (prevSibling.length > 0) {
                                    prevSibling.addClass("ddOptionHolderLiHover")
                                } else {
                                    selected.nextAll(":not(.ddOptgroupLI)").last().addClass("ddOptionHolderLiHover")
                                }
                                m()
                            }
                        }
                        break;
                    case 40:
                        if (u.type == "keydown") {
                            selected = b("#ddOptHolderWrapper_" + o.id + " .ddOptionHolderLiHover");
                            if (selected.siblings().length > 0) {
                                b("#ddOptionHolder_" + o.id + " li").removeClass("ddOptionHolderLiHover");
                                nextSibling = selected.nextAll(":not(.ddOptgroupLI)").first();
                                if (nextSibling.length > 0) {
                                    nextSibling.addClass("ddOptionHolderLiHover")
                                } else {
                                    selected.prevAll(":not(.ddOptgroupLI)").last().addClass("ddOptionHolderLiHover")
                                }
                                m()
                            }
                        }
                        break;
                    default:
                        r();
                        b("#ddSelOptText_" + o.id).prev().removeClass("ddSelectedOptSpanHover");
                        if (u.type == "keyup") {
                            textObjVal = (t == undefined) ? "" : t.val().toLowerCase();
                            n(textObjVal)
                        }
                        break
                }
            }

            function m() {
                selectedLi = b("#ddOptHolderWrapper_" + o.id + " .ddOptionHolderLiHover").get(0);
                wrapperUL = b("#ddOptHolderWrapper_" + o.id + " .ddOptionHolder ul").get(0);
                if (selectedLi.offsetTop + selectedLi.offsetHeight > wrapperUL.scrollTop + wrapperUL.clientHeight) {
                    wrapperUL.scrollTop = selectedLi.offsetTop + selectedLi.offsetHeight - wrapperUL.clientHeight
                } else {
                    if (selectedLi.offsetTop < wrapperUL.scrollTop) {
                        wrapperUL.scrollTop = selectedLi.offsetTop
                    }
                }
            }

            function r() {
                var t = (b("#ddSelOptText_" + o.id).val().length != 0) ? b("#ddSelOptText_" + o.id).val().length : 1;
                b("#ddSelOptText_" + o.id).attr({
                    width: "auto",
                    size: t
                })
            }

            function h() {
                e();
                n();
                b("#ddOptionHolder_" + o.id + " li:first").addClass("ddOptionHolderLiHover");
                b("#ddSelWrap_" + o.id).addClass("ddSelWrapOpen");
                b("#ddOptHolder_" + o.id).addClass("ddOptHolderOpen");
                b("#ddLabelHolder_" + o.id).addClass("ddLabelHolderOpen");
                b("#ddOptionHolder_" + o.id).addClass("ddOptionHolderOpen");
                if (p.label != "" && p.label != undefined) {
                    b("#ddSelOptHolder_" + o.id).addClass("ddSelOptHolderOpen")
                }
                b("#ddSelOptText_" + o.id).show();
                b("#ddSelOptText_" + o.id).val("");
                b("#ddSelOptText_" + o.id).focus();
                if (p.label != "" && p.label != undefined) {
                    if (p.showLabelOnClose) {
                        b("#ddLabelHolder_" + o.id + " span").remove()
                    } else {
                        b("#ddLabelHolder_" + o.id + " p").remove();
                        ddLabel.text(p.label);
                        ddLabel.appendTo(b("#ddLabelHolder_" + o.id))
                    }
                } else {
                    b("#ddSelOptHolder_" + o.id + " p.ddSelectedVal").remove();
                    b("#ddSelOptHolder_" + o.id).children().show()
                }
            }

            function d(t) {
                t = (t == undefined || t == "") ? o.id : t;
                b("#ddSelWrap_" + t).removeClass("ddSelWrapOpen");
                b("#ddOptHolder_" + t).removeClass("ddOptHolderOpen");
                b("#ddLabelHolder_" + t).removeClass("ddLabelHolderOpen");
                b("#ddOptionHolder_" + t).removeClass("ddOptionHolderOpen");
                if (p.label != "" && p.label != undefined) {
                    b("#ddSelOptHolder_" + t).removeClass("ddSelOptHolderOpen")
                }
                b("#ddSelOptText_" + o.id).hide();
                var v = "";
                if (p.displayOption == "comma") {
                    if (b("#ddSelOptHolder_" + t + " > span").length > 0) {
                        var u = [];
                        b.each(b("#ddSelOptHolder_" + t + " > span"), function(w, x) {
                            u.push(b(x).text())
                        });
                        v = u.join(" , ");
                        v = (v.length > 28) ? v.substr(0, 28) + "..." : v
                    } else {
                        optWithBlankVal = b("#" + o.id + ' option[value=""]').text();
                        b("#" + o.id + ' option[value=""]').attr("selected", "selected");
                        v = (optWithBlankVal.length > 28) ? optWithBlankVal.substr(0, 28) + "..." : optWithBlankVal
                    }
                    if (p.showLabelOnClose) {
                        optWithLabelSpan = b("<span>", {
                            "class": "ddSelectedVal"
                        });
                        optWithLabelSpan.text(v);
                        b("#ddLabelHolder_" + t).find("span").remove();
                        b("#ddLabelHolder_" + t).append(optWithLabelSpan)
                    } else {
                        ddLabel.text(v);
                        ddLabel.appendTo(b("#ddLabelHolder_" + t))
                    }
                } else {
                    if (b("#ddSelOptHolder_" + t).find("span").length == 0) {
                        optWithBlankVal = b("#" + o.id).find('option[value=""]');
                        optWithBlankVal.attr("selected", "selected");
                        spanArr = q(optWithBlankVal);
                        if (spanArr.length > 0) {
                            if (p.autocomplete) {
                                spanArr.insertBefore("#ddSelOptText_" + o.id)
                            } else {
                                spanArr.appendTo(b("#ddSelOptHolder_" + o.id))
                            }
                        }
                    }
                }
            }

            function e() {
                allDivs = b(".ddOptHolderWrapper");
                if (allDivs.length > 0) {
                    b.each(allDivs, function(t, u) {
                        if (u.id) {
                            divId = u.id.split("_");
                            if (divId[1] != o.id) {
                                if (b("#" + u.id + " div#ddOptHolder_" + divId[1]).hasClass("ddOptHolderOpen")) {
                                    d(divId[1])
                                }
                            }
                        }
                    })
                }
            }

            function n(t) {
                t = (t == undefined) ? "" : t;
                b("#ddOptionHolder_" + o.id).html("");
                ddOptionUL = b("<ul>");
                selectOptPresent = false;
                b("#" + o.id).children().each(function() {
                    if (b(this).is("optgroup")) {
                        option = b(this).find("option");
                        optionArr = k(t, option, "ddOptLI");
                        if (optionArr.length > 0) {
                            ddOptionLI = b("<li>", {
                                "class": "ddOptgroupLI",
                                click: function(u) {
                                    u.stopPropagation();
                                    b("#ddSelOptText_" + o.id).focus()
                                }
                            });
                            ddOptionLI.text(b(this).attr("label"));
                            ddOptionLI.appendTo(ddOptionUL);
                            b.each(optionArr, function(u, v) {
                                v.appendTo(ddOptionUL)
                            });
                            selectOptPresent = true
                        }
                    } else {
                        if (b(this).is("option")) {
                            optionArr = k(t, b(this));
                            if (optionArr.length > 0) {
                                b.each(optionArr, function(u, v) {
                                    v.appendTo(ddOptionUL)
                                });
                                selectOptPresent = true
                            }
                        }
                    }
                });
                if (!selectOptPresent) {
                    ddOptionLI = b("<li>");
                    ddOptionLI.text("No Record Found" + ((t != "") ? " For " + t : ""));
                    ddOptionLI.appendTo(ddOptionUL)
                }
                ddOptionUL.appendTo(b("#ddOptionHolder_" + o.id));
                b("#ddOptionHolder_" + o.id + " li:first").addClass("ddOptionHolderLiHover");
                b("#ddOptionHolder_" + o.id + " ul").bind("scroll", function() {
                    b("#ddSelOptText_" + o.id).focus()
                })
            }

            function k(t, w, u) {
                u = (u == undefined) ? "" : u;
                t = (t == undefined) ? "" : t;
                var v = "";
                if (t != "") {
                    t = t.replace(/[^a-zA-Z 0-9]+/g, "");
                    v = new RegExp("(" + t + ")")
                } else {
                    v = new RegExp("[0-9A-Za-z]")
                }
                optArr = [];
                w.each(function() {
                    if (!b(this).is(":selected")) {
                        if (b(this).text().toLowerCase().match(v) != null) {
                            ddOptionLI = b("<li>", {
                                "class": u,
                                rel: escape(b(this).val()),
                                click: function(y) {
                                    y.stopPropagation();
                                    c(b(this))
                                },
                                mouseover: function(y) {
                                    b("#ddOptionHolder_" + o.id + " li").removeClass("ddOptionHolderLiHover");
                                    b(this).addClass("ddOptionHolderLiHover")
                                }
                            });
                            if (t != "") {
                                var x = new RegExp("(" + t + ")", "gi");
                                ddOptionLiHtml = b(this).text().replace(x, '<span style="text-decoration:underline">$1</span>')
                            } else {
                                ddOptionLiHtml = b(this).text()
                            }
                            ddOptionLI.html(ddOptionLiHtml);
                            optArr.push(ddOptionLI)
                        }
                    }
                });
                return optArr
            }

            function c(w) {
                selectedOptId = w.attr("rel");
                f.push(selectedOptId);
                b('select[name="' + o.name + '"] option[value="' + unescape(selectedOptId) + '"]').attr("selected", "selected");
                p.change.call(this, selectedOptId);
                var v = [];
                b.each(b('select[name="' + o.name + '"] option:selected'), function(y, x) {
                    v.push(x.value)
                });
                var t = [];
                b.each(f, function(x, y) {
                    if (b.inArray(unescape(y), v) != -1) {
                        t.push(unescape(y))
                    }
                });
                f = t;
                b("#ddSelOptHolder_" + o.id).find("span").remove();
                b.each(f, function(x, y) {
                    ddSelectedOptSpan = q(b('select[name="' + o.name + '"] option[value="' + unescape(y) + '"]'));
                    if (p.autocomplete) {
                        ddSelectedOptSpan.insertBefore("#ddSelOptText_" + o.id)
                    } else {
                        ddSelectedOptSpan.appendTo(b("#ddSelOptHolder_" + o.id))
                    }
                });
                var u = b("#ddOptionHolder_" + o.id + " ul").scrollTop();
                b("#ddSelOptText_" + o.id).val("");
                n();
                b("#ddSelOptText_" + o.id).focus();
                b("#ddOptionHolder_" + o.id + " ul").scrollTop(u);
                p.complete.call(this)
            }

            function q(t) {
                ddSelectedOptSpan = b("<span>", {
                    "class": "ddSelectedOptSpan",
                    rel: t.val(),
                    click: function(u) {
                        u.stopPropagation();
                        g(b(this))
                    }
                });
                ddSelectedOptSpan.text(t.text());
                return ddSelectedOptSpan
            }

            function g(u) {
                selectedOptId = u.attr("rel");
                var t = b.inArray(selectedOptId, f);
                f.splice(t, 1);
                b('select[name="' + o.name + '"] option[value="' + unescape(selectedOptId) + '"]').attr("selected", false);
                b("#ddSelOptText_" + o.id).focus();
                p.change.call();
                u.remove();
                if (p.label == "" || p.label == undefined) {
                    h()
                } else {
                    n()
                }
                if (b("#ddSelOptHolder_" + o.id).html() == "") {
                    b("#ddSelOptHolder_" + o.id).html("&nbsp;");
                    b("#ddSelOptHolder_" + o.id).css("padding-bottom", "7px")
                }
                p.complete.call(this)
            }
        },
        _update: function(d, c) {
            b("#" + d.id).nextAll().remove()
        }
    });
    b.dropdown = new a()
})(jQuery);
var xPos = "";
var yPos = "";
$(document).ready(function() {
    $("body").mouseover(function(a) {
        xPos = a.pageX;
        yPos = a.pageY
    })
});