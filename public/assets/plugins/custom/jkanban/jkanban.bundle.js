!function e(t, n, i) {
    function o(a, c) {
        if (!n[a]) {
            if (!t[a]) {
                var d = "function" == typeof require && require;
                if (!c && d)
                    return d(a, !0);
                if (r)
                    return r(a, !0);
                var s = new Error("Cannot find module '" + a + "'");
                throw s.code = "MODULE_NOT_FOUND",
                s
            }
            var l = n[a] = {
                exports: {}
            };
            t[a][0].call(l.exports, function(e) {
                return o(t[a][1][e] || e)
            }, l, l.exports, e, t, n, i)
        }
        return n[a].exports
    }
    for (var r = "function" == typeof require && require, a = 0; a < i.length; a++)
        o(i[a]);
    return o
}({
    1: [function(e, t, n) {
        var i = e("dragula");
        !function() {
            this.jKanban = function() {
                var e = this;
                this._disallowedItemProperties = ["id", "title", "click", "drag", "dragend", "drop", "order"],
                this.element = "",
                this.container = "",
                this.boardContainer = [],
                this.handlers = [],
                this.dragula = i,
                this.drake = "",
                this.drakeBoard = "",
                this.addItemButton = !1;
                var t = {
                    element: "",
                    gutter: "15px",
                    widthBoard: "250px",
                    responsive: "700",
                    responsivePercentage: !(this.buttonContent = "+"),
                    boards: [],
                    dragBoards: !0,
                    dragItems: !0,
                    addItemButton: !1,
                    buttonContent: "+",
                    itemHandleOptions: this.itemHandleOptions = {
                        enabled: !1
                    },
                    dragEl: function(e, t) {},
                    dragendEl: function(e) {},
                    dropEl: function(e, t, n, i) {},
                    dragBoard: function(e, t) {},
                    dragendBoard: function(e) {},
                    dropBoard: function(e, t, n, i) {},
                    click: function(e) {},
                    buttonClick: function(e, t) {}
                };
                function n(t) {
                    t.addEventListener("click", function(t) {
                        t.preventDefault(),
                        e.options.click(this),
                        "function" == typeof this.clickfn && this.clickfn(this)
                    })
                }
                function o(t, n) {
                    t.addEventListener("click", function(t) {
                        t.preventDefault(),
                        e.options.buttonClick(this, n)
                    })
                }
                function r(t) {
                    var n = [];
                    return e.options.boards.map(function(e) {
                        if (e.id === t)
                            return n.push(e)
                    }),
                    n[0]
                }
                function a(t, n) {
                    for (var i in n)
                        -1 < e._disallowedItemProperties.indexOf(i) || t.setAttribute("data-" + i, n[i])
                }
                function c(t) {
                    var n = t;
                    if (e.options.itemHandleOptions.enabled)
                        if (void 0 === (e.options.itemHandleOptions.customHandler || void 0)) {
                            var i = e.options.itemHandleOptions.customCssHandler
                              , o = e.options.itemHandleOptions.customCssIconHandler;
                            void 0 === (i || void 0) && (i = "drag_handler"),
                            void 0 === (o || void 0) && (o = i + "_icon"),
                            n = "<div class='item_handle " + i + "'><i class='item_handle " + o + "'></i></div><div>" + n + "</div>"
                        } else
                            n = e.options.itemHandleOptions.customHandler.replace("%s", n);
                    return n
                }
                arguments[0] && "object" == typeof arguments[0] && (this.options = function(e, t) {
                    var n;
                    for (n in t)
                        t.hasOwnProperty(n) && (e[n] = t[n]);
                    return e
                }(t, arguments[0])),
                this.__getCanMove = function(t) {
                    return e.options.itemHandleOptions.enabled ? e.options.itemHandleOptions.handleClass ? t.classList.contains(e.options.itemHandleOptions.handleClass) : t.classList.contains("item_handle") : !!e.options.dragItems
                }
                ,
                this.init = function() {
                    !function() {
                        e.element = document.querySelector(e.options.element);
                        var t = document.createElement("div");
                        t.classList.add("kanban-container"),
                        e.container = t,
                        e.addBoards(e.options.boards, !0),
                        e.element.appendChild(e.container)
                    }(),
                    window.innerWidth > e.options.responsive && (e.drakeBoard = e.dragula([e.container], {
                        moves: function(t, n, i, o) {
                            return !!e.options.dragBoards && (i.classList.contains("kanban-board-header") || i.classList.contains("kanban-title-board"))
                        },
                        accepts: function(e, t, n, i) {
                            return t.classList.contains("kanban-container")
                        },
                        revertOnSpill: !0,
                        direction: "horizontal"
                    }).on("drag", function(t, n) {
                        t.classList.add("is-moving"),
                        e.options.dragBoard(t, n),
                        "function" == typeof t.dragfn && t.dragfn(t, n)
                    }).on("dragend", function(t) {
                        !function() {
                            for (var t = 1, n = 0; n < e.container.childNodes.length; n++)
                                e.container.childNodes[n].dataset.order = t++
                        }(),
                        t.classList.remove("is-moving"),
                        e.options.dragendBoard(t),
                        "function" == typeof t.dragendfn && t.dragendfn(t)
                    }).on("drop", function(t, n, i, o) {
                        t.classList.remove("is-moving"),
                        e.options.dropBoard(t, n, i, o),
                        "function" == typeof t.dropfn && t.dropfn(t, n, i, o)
                    }),
                    e.drake = e.dragula(e.boardContainer, {
                        moves: function(t, n, i, o) {
                            return e.__getCanMove(i)
                        },
                        revertOnSpill: !0
                    }).on("cancel", function(t, n, i) {
                        e.enableAllBoards()
                    }).on("drag", function(t, n) {
                        var i = t.getAttribute("class");
                        if ("" !== i && -1 < i.indexOf("not-draggable"))
                            e.drake.cancel(!0);
                        else {
                            t.classList.add("is-moving");
                            var o = r(n.parentNode.dataset.id);
                            void 0 !== o.dragTo && e.options.boards.map(function(t) {
                                -1 === o.dragTo.indexOf(t.id) && t.id !== n.parentNode.dataset.id && e.findBoard(t.id).classList.add("disabled-board")
                            }),
                            e.options.dragEl(t, n),
                            null !== t && "function" == typeof t.dragfn && t.dragfn(t, n)
                        }
                    }).on("dragend", function(t) {
                        e.options.dragendEl(t),
                        null !== t && "function" == typeof t.dragendfn && t.dragendfn(t)
                    }).on("drop", function(t, n, i, o) {
                        e.enableAllBoards();
                        var a = r(i.parentNode.dataset.id);
                        void 0 !== a.dragTo && -1 === a.dragTo.indexOf(n.parentNode.dataset.id) && n.parentNode.dataset.id !== i.parentNode.dataset.id && e.drake.cancel(!0),
                        null !== t && (!1 === e.options.dropEl(t, n, i, o) && e.drake.cancel(!0),
                        t.classList.remove("is-moving"),
                        "function" == typeof t.dropfn && t.dropfn(t, n, i, o))
                    }))
                }
                ,
                this.enableAllBoards = function() {
                    var e = document.querySelectorAll(".kanban-board");
                    if (0 < e.length && void 0 !== e)
                        for (var t = 0; t < e.length; t++)
                            e[t].classList.remove("disabled-board")
                }
                ,
                this.addElement = function(t, i) {
                    var o = e.element.querySelector('[data-id="' + t + '"] .kanban-drag')
                      , r = document.createElement("div");
                    return r.classList.add("kanban-item"),
                    void 0 !== i.id && "" !== i.id && r.setAttribute("data-eid", i.id),
                    i.class && Array.isArray(i.class) && i.class.forEach(function(e) {
                        r.classList.add(e)
                    }),
                    r.innerHTML = c(i.title),
                    r.clickfn = i.click,
                    r.dragfn = i.drag,
                    r.dragendfn = i.dragend,
                    r.dropfn = i.drop,
                    a(r, i),
                    n(r),
                    e.options.itemHandleOptions.enabled && (r.style.cursor = "default"),
                    o.appendChild(r),
                    e
                }
                ,
                this.addForm = function(t, n) {
                    var i = e.element.querySelector('[data-id="' + t + '"] .kanban-drag')
                      , o = n.getAttribute("class");
                    return n.setAttribute("class", o + " not-draggable"),
                    i.appendChild(n),
                    e
                }
                ,
                this.addBoards = function(t, i) {
                    if (e.options.responsivePercentage)
                        if (e.container.style.width = "100%",
                        e.options.gutter = "1%",
                        window.innerWidth > e.options.responsive)
                            var r = (100 - 2 * t.length) / t.length;
                        else
                            r = 100 - 2 * t.length;
                    else
                        r = e.options.widthBoard;
                    var d = e.options.addItemButton
                      , s = e.options.buttonContent;
                    for (var l in t) {
                        var u = t[l];
                        i || e.options.boards.push(u),
                        e.options.responsivePercentage || ("" === e.container.style.width ? e.container.style.width = parseInt(r) + 2 * parseInt(e.options.gutter) + "px" : e.container.style.width = parseInt(e.container.style.width) + parseInt(r) + 2 * parseInt(e.options.gutter) + "px");
                        var f = document.createElement("div");
                        f.dataset.id = u.id,
                        f.dataset.order = e.container.childNodes.length + 1,
                        f.classList.add("kanban-board"),
                        e.options.responsivePercentage ? f.style.width = r + "%" : f.style.width = r,
                        f.style.marginLeft = e.options.gutter,
                        f.style.marginRight = e.options.gutter;
                        var p = document.createElement("header");
                        if ("" !== u.class && void 0 !== u.class)
                            var v = u.class.split(",");
                        else
                            v = [];
                        if (p.classList.add("kanban-board-header"),
                        v.map(function(e) {
                            p.classList.add(e)
                        }),
                        p.innerHTML = '<div class="kanban-title-board">' + u.title + "</div>",
                        d) {
                            var m = document.createElement("BUTTON")
                              , h = document.createTextNode(s);
                            m.setAttribute("class", "kanban-title-button btn btn-default btn-xs"),
                            m.appendChild(h),
                            p.appendChild(m),
                            o(m, u.id)
                        }
                        var g = document.createElement("main");
                        if (g.classList.add("kanban-drag"),
                        "" !== u.bodyClass && void 0 !== u.bodyClass)
                            var b = u.bodyClass.split(",");
                        else
                            b = [];
                        for (var y in b.map(function(e) {
                            g.classList.add(e)
                        }),
                        e.boardContainer.push(g),
                        u.item) {
                            var w = u.item[y]
                              , E = document.createElement("div");
                            E.classList.add("kanban-item"),
                            w.id && (E.dataset.eid = w.id),
                            w.class && Array.isArray(w.class) && w.class.forEach(function(e) {
                                E.classList.add(e)
                            }),
                            E.innerHTML = c(w.title),
                            E.clickfn = w.click,
                            E.dragfn = w.drag,
                            E.dragendfn = w.dragend,
                            E.dropfn = w.drop,
                            a(E, w),
                            n(E),
                            e.options.itemHandleOptions.enabled && (E.style.cursor = "default"),
                            g.appendChild(E)
                        }
                        var T = document.createElement("footer");
                        f.appendChild(p),
                        f.appendChild(g),
                        f.appendChild(T),
                        e.container.appendChild(f)
                    }
                    return e
                }
                ,
                this.findBoard = function(t) {
                    return e.element.querySelector('[data-id="' + t + '"]')
                }
                ,
                this.getParentBoardID = function(t) {
                    return "string" == typeof t && (t = e.element.querySelector('[data-eid="' + t + '"]')),
                    null === t ? null : t.parentNode.parentNode.dataset.id
                }
                ,
                this.moveElement = function(e, t, n) {
                    if (e !== this.getParentBoardID(t))
                        return this.removeElement(t),
                        this.addElement(e, n)
                }
                ,
                this.replaceElement = function(t, n) {
                    var i = t;
                    return "string" == typeof i && (i = e.element.querySelector('[data-eid="' + t + '"]')),
                    i.innerHTML = n.title,
                    i.clickfn = n.click,
                    i.dragfn = n.drag,
                    i.dragendfn = n.dragend,
                    i.dropfn = n.drop,
                    a(i, n),
                    e
                }
                ,
                this.findElement = function(t) {
                    return e.element.querySelector('[data-eid="' + t + '"]')
                }
                ,
                this.getBoardElements = function(t) {
                    return e.element.querySelector('[data-id="' + t + '"] .kanban-drag').childNodes
                }
                ,
                this.removeElement = function(t) {
                    return "string" == typeof t && (t = e.element.querySelector('[data-eid="' + t + '"]')),
                    null !== t && t.remove(),
                    e
                }
                ,
                this.removeBoard = function(t) {
                    var n = null;
                    "string" == typeof t && (n = e.element.querySelector('[data-id="' + t + '"]')),
                    null !== n && n.remove();
                    for (var i = 0; i < e.options.boards.length; i++)
                        if (e.options.boards[i].id === t) {
                            e.options.boards.splice(i, 1);
                            break
                        }
                    return e
                }
                ,
                this.onButtonClick = function(e) {}
                ,
                this.init()
            }
        }()
    }
    , {
        dragula: 9
    }],
    2: [function(e, t, n) {
        t.exports = function(e, t) {
            return Array.prototype.slice.call(e, t)
        }
    }
    , {}],
    3: [function(e, t, n) {
        "use strict";
        var i = e("ticky");
        t.exports = function(e, t, n) {
            e && i(function() {
                e.apply(n || null, t || [])
            })
        }
    }
    , {
        ticky: 11
    }],
    4: [function(e, t, n) {
        "use strict";
        var i = e("atoa")
          , o = e("./debounce");
        t.exports = function(e, t) {
            var n = t || {}
              , r = {};
            return void 0 === e && (e = {}),
            e.on = function(t, n) {
                return r[t] ? r[t].push(n) : r[t] = [n],
                e
            }
            ,
            e.once = function(t, n) {
                return n._once = !0,
                e.on(t, n),
                e
            }
            ,
            e.off = function(t, n) {
                var i = arguments.length;
                if (1 === i)
                    delete r[t];
                else if (0 === i)
                    r = {};
                else {
                    var o = r[t];
                    if (!o)
                        return e;
                    o.splice(o.indexOf(n), 1)
                }
                return e
            }
            ,
            e.emit = function() {
                var t = i(arguments);
                return e.emitterSnapshot(t.shift()).apply(this, t)
            }
            ,
            e.emitterSnapshot = function(t) {
                var a = (r[t] || []).slice(0);
                return function() {
                    var r = i(arguments)
                      , c = this || e;
                    if ("error" === t && !1 !== n.throws && !a.length)
                        throw 1 === r.length ? r[0] : r;
                    return a.forEach(function(i) {
                        n.async ? o(i, r, c) : i.apply(c, r),
                        i._once && e.off(t, i)
                    }),
                    e
                }
            }
            ,
            e
        }
    }
    , {
        "./debounce": 3,
        atoa: 2
    }],
    5: [function(e, t, n) {
        (function(n) {
            "use strict";
            var i = e("custom-event")
              , o = e("./eventmap")
              , r = n.document
              , a = function(e, t, n, i) {
                return e.addEventListener(t, n, i)
            }
              , c = function(e, t, n, i) {
                return e.removeEventListener(t, n, i)
            }
              , d = [];
            function s(e, t, n) {
                var i = function(e, t, n) {
                    var i, o;
                    for (i = 0; i < d.length; i++)
                        if ((o = d[i]).element === e && o.type === t && o.fn === n)
                            return i
                }(e, t, n);
                if (i) {
                    var o = d[i].wrapper;
                    return d.splice(i, 1),
                    o
                }
            }
            n.addEventListener || (a = function(e, t, i) {
                return e.attachEvent("on" + t, function(e, t, i) {
                    var o = s(e, t, i) || function(e, t, i) {
                        return function(t) {
                            var o = t || n.event;
                            o.target = o.target || o.srcElement,
                            o.preventDefault = o.preventDefault || function() {
                                o.returnValue = !1
                            }
                            ,
                            o.stopPropagation = o.stopPropagation || function() {
                                o.cancelBubble = !0
                            }
                            ,
                            o.which = o.which || o.keyCode,
                            i.call(e, o)
                        }
                    }(e, 0, i);
                    return d.push({
                        wrapper: o,
                        element: e,
                        type: t,
                        fn: i
                    }),
                    o
                }(e, t, i))
            }
            ,
            c = function(e, t, n) {
                var i = s(e, t, n);
                if (i)
                    return e.detachEvent("on" + t, i)
            }
            ),
            t.exports = {
                add: a,
                remove: c,
                fabricate: function(e, t, n) {
                    var a = -1 === o.indexOf(t) ? new i(t,{
                        detail: n
                    }) : function() {
                        var e;
                        return r.createEvent ? (e = r.createEvent("Event")).initEvent(t, !0, !0) : r.createEventObject && (e = r.createEventObject()),
                        e
                    }();
                    e.dispatchEvent ? e.dispatchEvent(a) : e.fireEvent("on" + t, a)
                }
            }
        }
        ).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }
    , {
        "./eventmap": 6,
        "custom-event": 7
    }],
    6: [function(e, t, n) {
        (function(e) {
            "use strict";
            var n = []
              , i = ""
              , o = /^on/;
            for (i in e)
                o.test(i) && n.push(i.slice(2));
            t.exports = n
        }
        ).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }
    , {}],
    7: [function(e, t, n) {
        (function(e) {
            var n = e.CustomEvent;
            t.exports = function() {
                try {
                    var e = new n("cat",{
                        detail: {
                            foo: "bar"
                        }
                    });
                    return "cat" === e.type && "bar" === e.detail.foo
                } catch (e) {}
                return !1
            }() ? n : "function" == typeof document.createEvent ? function(e, t) {
                var n = document.createEvent("CustomEvent");
                return t ? n.initCustomEvent(e, t.bubbles, t.cancelable, t.detail) : n.initCustomEvent(e, !1, !1, void 0),
                n
            }
            : function(e, t) {
                var n = document.createEventObject();
                return n.type = e,
                t ? (n.bubbles = Boolean(t.bubbles),
                n.cancelable = Boolean(t.cancelable),
                n.detail = t.detail) : (n.bubbles = !1,
                n.cancelable = !1,
                n.detail = void 0),
                n
            }
        }
        ).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }
    , {}],
    8: [function(e, t, n) {
        "use strict";
        var i = {}
          , o = "(?:^|\\s)"
          , r = "(?:\\s|$)";
        function a(e) {
            var t = i[e];
            return t ? t.lastIndex = 0 : i[e] = t = new RegExp(o + e + r,"g"),
            t
        }
        t.exports = {
            add: function(e, t) {
                var n = e.className;
                n.length ? a(t).test(n) || (e.className += " " + t) : e.className = t
            },
            rm: function(e, t) {
                e.className = e.className.replace(a(t), " ").trim()
            }
        }
    }
    , {}],
    9: [function(e, t, n) {
        (function(n) {
            "use strict";
            var i = e("contra/emitter")
              , o = e("crossvent")
              , r = e("./classes")
              , a = document
              , c = a.documentElement;
            function d(e, t, i, r) {
                n.navigator.pointerEnabled ? o[t](e, {
                    mouseup: "pointerup",
                    mousedown: "pointerdown",
                    mousemove: "pointermove"
                }[i], r) : n.navigator.msPointerEnabled ? o[t](e, {
                    mouseup: "MSPointerUp",
                    mousedown: "MSPointerDown",
                    mousemove: "MSPointerMove"
                }[i], r) : (o[t](e, {
                    mouseup: "touchend",
                    mousedown: "touchstart",
                    mousemove: "touchmove"
                }[i], r),
                o[t](e, i, r))
            }
            function s(e) {
                if (void 0 !== e.touches)
                    return e.touches.length;
                if (void 0 !== e.which && 0 !== e.which)
                    return e.which;
                if (void 0 !== e.buttons)
                    return e.buttons;
                var t = e.button;
                return void 0 !== t ? 1 & t ? 1 : 2 & t ? 3 : 4 & t ? 2 : 0 : void 0
            }
            function l(e, t) {
                return void 0 !== n[t] ? n[t] : c.clientHeight ? c[e] : a.body[e]
            }
            function u(e, t, n) {
                var i, o = e || {}, r = o.className;
                return o.className += " gu-hide",
                i = a.elementFromPoint(t, n),
                o.className = r,
                i
            }
            function f() {
                return !1
            }
            function p() {
                return !0
            }
            function v(e) {
                return e.width || e.right - e.left
            }
            function m(e) {
                return e.height || e.bottom - e.top
            }
            function h(e) {
                return e.parentNode === a ? null : e.parentNode
            }
            function g(e) {
                return "INPUT" === e.tagName || "TEXTAREA" === e.tagName || "SELECT" === e.tagName || function e(t) {
                    return !!t && ("false" !== t.contentEditable && ("true" === t.contentEditable || e(h(t))))
                }(e)
            }
            function b(e) {
                return e.nextElementSibling || function() {
                    for (var t = e; (t = t.nextSibling) && 1 !== t.nodeType; )
                        ;
                    return t
                }()
            }
            function y(e, t) {
                var n = function(e) {
                    return e.targetTouches && e.targetTouches.length ? e.targetTouches[0] : e.changedTouches && e.changedTouches.length ? e.changedTouches[0] : e
                }(t)
                  , i = {
                    pageX: "clientX",
                    pageY: "clientY"
                };
                return e in i && !(e in n) && i[e]in n && (e = i[e]),
                n[e]
            }
            t.exports = function(e, t) {
                var n, w, E, T, C, k, S, x, L, O, B;
                1 === arguments.length && !1 === Array.isArray(e) && (t = e,
                e = []);
                var I, N = null, _ = t || {};
                void 0 === _.moves && (_.moves = p),
                void 0 === _.accepts && (_.accepts = p),
                void 0 === _.invalid && (_.invalid = function() {
                    return !1
                }
                ),
                void 0 === _.containers && (_.containers = e || []),
                void 0 === _.isContainer && (_.isContainer = f),
                void 0 === _.copy && (_.copy = !1),
                void 0 === _.copySortSource && (_.copySortSource = !1),
                void 0 === _.revertOnSpill && (_.revertOnSpill = !1),
                void 0 === _.removeOnSpill && (_.removeOnSpill = !1),
                void 0 === _.direction && (_.direction = "vertical"),
                void 0 === _.ignoreInputTextSelection && (_.ignoreInputTextSelection = !0),
                void 0 === _.mirrorContainer && (_.mirrorContainer = a.body);
                var A = i({
                    containers: _.containers,
                    start: function(e) {
                        var t = j(e);
                        t && F(t)
                    },
                    end: R,
                    cancel: V,
                    remove: W,
                    destroy: function() {
                        P(!0),
                        K({})
                    },
                    canMove: function(e) {
                        return !!j(e)
                    },
                    dragging: !1
                });
                return !0 === _.removeOnSpill && A.on("over", function(e) {
                    r.rm(e, "gu-hide")
                }).on("out", function(e) {
                    A.dragging && r.add(e, "gu-hide")
                }),
                P(),
                A;
                function H(e) {
                    return -1 !== A.containers.indexOf(e) || _.isContainer(e)
                }
                function P(e) {
                    var t = e ? "remove" : "add";
                    d(c, t, "mousedown", X),
                    d(c, t, "mouseup", K)
                }
                function q(e) {
                    d(c, e ? "remove" : "add", "mousemove", Y)
                }
                function D(e) {
                    var t = e ? "remove" : "add";
                    o[t](c, "selectstart", M),
                    o[t](c, "click", M)
                }
                function M(e) {
                    I && e.preventDefault()
                }
                function X(e) {
                    if (k = e.clientX,
                    S = e.clientY,
                    1 === s(e) && !e.metaKey && !e.ctrlKey) {
                        var t = e.target
                          , n = j(t);
                        n && (I = n,
                        q(),
                        "mousedown" === e.type && (g(t) ? t.focus() : e.preventDefault()))
                    }
                }
                function Y(e) {
                    if (I)
                        if (0 !== s(e)) {
                            if (void 0 === e.clientX || e.clientX !== k || void 0 === e.clientY || e.clientY !== S) {
                                if (_.ignoreInputTextSelection) {
                                    var t = y("clientX", e)
                                      , i = y("clientY", e);
                                    if (g(a.elementFromPoint(t, i)))
                                        return
                                }
                                var o = I;
                                q(!0),
                                D(),
                                R(),
                                F(o);
                                var u = function(e) {
                                    var t = E.getBoundingClientRect();
                                    return {
                                        left: t.left + l("scrollLeft", "pageXOffset"),
                                        top: t.top + l("scrollTop", "pageYOffset")
                                    }
                                }();
                                T = y("pageX", e) - u.left,
                                C = y("pageY", e) - u.top,
                                r.add(O || E, "gu-transit"),
                                function() {
                                    if (!n) {
                                        var e = E.getBoundingClientRect();
                                        (n = E.cloneNode(!0)).style.width = v(e) + "px",
                                        n.style.height = m(e) + "px",
                                        r.rm(n, "gu-transit"),
                                        r.add(n, "gu-mirror"),
                                        _.mirrorContainer.appendChild(n),
                                        d(c, "add", "mousemove", Q),
                                        r.add(_.mirrorContainer, "gu-unselectable"),
                                        A.emit("cloned", n, E, "mirror")
                                    }
                                }(),
                                Q(e)
                            }
                        } else
                            K({})
                }
                function j(e) {
                    if (!(A.dragging && n || H(e))) {
                        for (var t = e; h(e) && !1 === H(h(e)); ) {
                            if (_.invalid(e, t))
                                return;
                            if (!(e = h(e)))
                                return
                        }
                        var i = h(e);
                        if (i && !_.invalid(e, t) && _.moves(e, i, t, b(e)))
                            return {
                                item: e,
                                source: i
                            }
                    }
                }
                function F(e) {
                    !function(e, t) {
                        return "boolean" == typeof _.copy ? _.copy : _.copy(e, t)
                    }(e.item, e.source) || (O = e.item.cloneNode(!0),
                    A.emit("cloned", O, e.item, "copy")),
                    w = e.source,
                    E = e.item,
                    x = L = b(e.item),
                    A.dragging = !0,
                    A.emit("drag", E, w)
                }
                function R() {
                    if (A.dragging) {
                        var e = O || E;
                        z(e, h(e))
                    }
                }
                function U() {
                    q(!(I = !1)),
                    D(!0)
                }
                function K(e) {
                    if (U(),
                    A.dragging) {
                        var t = O || E
                          , i = y("clientX", e)
                          , o = y("clientY", e)
                          , r = J(u(n, i, o), i, o);
                        r && (O && _.copySortSource || !O || r !== w) ? z(t, r) : _.removeOnSpill ? W() : V()
                    }
                }
                function z(e, t) {
                    var n = h(e);
                    O && _.copySortSource && t === w && n.removeChild(E),
                    G(t) ? A.emit("cancel", e, w, w) : A.emit("drop", e, t, w, L),
                    $()
                }
                function W() {
                    if (A.dragging) {
                        var e = O || E
                          , t = h(e);
                        t && t.removeChild(e),
                        A.emit(O ? "cancel" : "remove", e, t, w),
                        $()
                    }
                }
                function V(e) {
                    if (A.dragging) {
                        var t = 0 < arguments.length ? e : _.revertOnSpill
                          , n = O || E
                          , i = h(n)
                          , o = G(i);
                        !1 === o && t && (O ? i && i.removeChild(O) : w.insertBefore(n, x)),
                        o || t ? A.emit("cancel", n, w, w) : A.emit("drop", n, i, w, L),
                        $()
                    }
                }
                function $() {
                    var e = O || E;
                    U(),
                    n && (r.rm(_.mirrorContainer, "gu-unselectable"),
                    d(c, "remove", "mousemove", Q),
                    h(n).removeChild(n),
                    n = null),
                    e && r.rm(e, "gu-transit"),
                    B && clearTimeout(B),
                    A.dragging = !1,
                    N && A.emit("out", e, N, w),
                    A.emit("dragend", e),
                    w = E = O = x = L = B = N = null
                }
                function G(e, t) {
                    var i;
                    return i = void 0 !== t ? t : n ? L : b(O || E),
                    e === w && i === x
                }
                function J(e, t, n) {
                    for (var i = e; i && !o(); )
                        i = h(i);
                    return i;
                    function o() {
                        if (!1 === H(i))
                            return !1;
                        var o = Z(i, e)
                          , r = ee(i, o, t, n);
                        return !!G(i, r) || _.accepts(E, i, w, r)
                    }
                }
                function Q(e) {
                    if (n) {
                        e.preventDefault();
                        var t = y("clientX", e)
                          , i = y("clientY", e)
                          , o = t - T
                          , r = i - C;
                        n.style.left = o + "px",
                        n.style.top = r + "px";
                        var a = O || E
                          , c = u(n, t, i)
                          , d = J(c, t, i)
                          , s = null !== d && d !== N;
                        !s && null !== d || (N && v("out"),
                        N = d,
                        s && v("over"));
                        var l = h(a);
                        if (d !== w || !O || _.copySortSource) {
                            var f, p = Z(d, c);
                            if (null !== p)
                                f = ee(d, p, t, i);
                            else {
                                if (!0 !== _.revertOnSpill || O)
                                    return void (O && l && l.removeChild(a));
                                f = x,
                                d = w
                            }
                            (null === f && s || f !== a && f !== b(a)) && (L = f,
                            d.insertBefore(a, f),
                            A.emit("shadow", a, d, w))
                        } else
                            l && l.removeChild(a)
                    }
                    function v(e) {
                        A.emit(e, a, N, w)
                    }
                }
                function Z(e, t) {
                    for (var n = t; n !== e && h(n) !== e; )
                        n = h(n);
                    return n === c ? null : n
                }
                function ee(e, t, n, i) {
                    var o, r = "horizontal" === _.direction;
                    return t !== e ? (o = t.getBoundingClientRect(),
                    a(r ? n > o.left + v(o) / 2 : i > o.top + m(o) / 2)) : function() {
                        var t, o, a, c = e.children.length;
                        for (t = 0; t < c; t++) {
                            if (a = (o = e.children[t]).getBoundingClientRect(),
                            r && a.left + a.width / 2 > n)
                                return o;
                            if (!r && a.top + a.height / 2 > i)
                                return o
                        }
                        return null
                    }();
                    function a(e) {
                        return e ? b(t) : t
                    }
                }
            }
        }
        ).call(this, "undefined" != typeof global ? global : "undefined" != typeof self ? self : "undefined" != typeof window ? window : {})
    }
    , {
        "./classes": 8,
        "contra/emitter": 4,
        crossvent: 5
    }],
    10: [function(e, t, n) {
        var i, o, r = t.exports = {};
        function a() {
            throw new Error("setTimeout has not been defined")
        }
        function c() {
            throw new Error("clearTimeout has not been defined")
        }
        function d(e) {
            if (i === setTimeout)
                return setTimeout(e, 0);
            if ((i === a || !i) && setTimeout)
                return i = setTimeout,
                setTimeout(e, 0);
            try {
                return i(e, 0)
            } catch (t) {
                try {
                    return i.call(null, e, 0)
                } catch (t) {
                    return i.call(this, e, 0)
                }
            }
        }
        !function() {
            try {
                i = "function" == typeof setTimeout ? setTimeout : a
            } catch (e) {
                i = a
            }
            try {
                o = "function" == typeof clearTimeout ? clearTimeout : c
            } catch (e) {
                o = c
            }
        }();
        var s, l = [], u = !1, f = -1;
        function p() {
            u && s && (u = !1,
            s.length ? l = s.concat(l) : f = -1,
            l.length && v())
        }
        function v() {
            if (!u) {
                var e = d(p);
                u = !0;
                for (var t = l.length; t; ) {
                    for (s = l,
                    l = []; ++f < t; )
                        s && s[f].run();
                    f = -1,
                    t = l.length
                }
                s = null,
                u = !1,
                function(e) {
                    if (o === clearTimeout)
                        return clearTimeout(e);
                    if ((o === c || !o) && clearTimeout)
                        return o = clearTimeout,
                        clearTimeout(e);
                    try {
                        o(e)
                    } catch (t) {
                        try {
                            return o.call(null, e)
                        } catch (t) {
                            return o.call(this, e)
                        }
                    }
                }(e)
            }
        }
        function m(e, t) {
            this.fun = e,
            this.array = t
        }
        function h() {}
        r.nextTick = function(e) {
            var t = new Array(arguments.length - 1);
            if (1 < arguments.length)
                for (var n = 1; n < arguments.length; n++)
                    t[n - 1] = arguments[n];
            l.push(new m(e,t)),
            1 !== l.length || u || d(v)
        }
        ,
        m.prototype.run = function() {
            this.fun.apply(null, this.array)
        }
        ,
        r.title = "browser",
        r.browser = !0,
        r.env = {},
        r.argv = [],
        r.version = "",
        r.versions = {},
        r.on = h,
        r.addListener = h,
        r.once = h,
        r.off = h,
        r.removeListener = h,
        r.removeAllListeners = h,
        r.emit = h,
        r.prependListener = h,
        r.prependOnceListener = h,
        r.listeners = function(e) {
            return []
        }
        ,
        r.binding = function(e) {
            throw new Error("process.binding is not supported")
        }
        ,
        r.cwd = function() {
            return "/"
        }
        ,
        r.chdir = function(e) {
            throw new Error("process.chdir is not supported")
        }
        ,
        r.umask = function() {
            return 0
        }
    }
    , {}],
    11: [function(e, t, n) {
        (function(e) {
            var n;
            n = "function" == typeof e ? function(t) {
                e(t)
            }
            : function(e) {
                setTimeout(e, 0)
            }
            ,
            t.exports = n
        }
        ).call(this, e("timers").setImmediate)
    }
    , {
        timers: 12
    }],
    12: [function(e, t, n) {
        (function(t, i) {
            var o = e("process/browser.js").nextTick
              , r = Function.prototype.apply
              , a = Array.prototype.slice
              , c = {}
              , d = 0;
            function s(e, t) {
                this._id = e,
                this._clearFn = t
            }
            n.setTimeout = function() {
                return new s(r.call(setTimeout, window, arguments),clearTimeout)
            }
            ,
            n.setInterval = function() {
                return new s(r.call(setInterval, window, arguments),clearInterval)
            }
            ,
            n.clearTimeout = n.clearInterval = function(e) {
                e.close()
            }
            ,
            s.prototype.unref = s.prototype.ref = function() {}
            ,
            s.prototype.close = function() {
                this._clearFn.call(window, this._id)
            }
            ,
            n.enroll = function(e, t) {
                clearTimeout(e._idleTimeoutId),
                e._idleTimeout = t
            }
            ,
            n.unenroll = function(e) {
                clearTimeout(e._idleTimeoutId),
                e._idleTimeout = -1
            }
            ,
            n._unrefActive = n.active = function(e) {
                clearTimeout(e._idleTimeoutId);
                var t = e._idleTimeout;
                0 <= t && (e._idleTimeoutId = setTimeout(function() {
                    e._onTimeout && e._onTimeout()
                }, t))
            }
            ,
            n.setImmediate = "function" == typeof t ? t : function(e) {
                var t = d++
                  , i = !(arguments.length < 2) && a.call(arguments, 1);
                return c[t] = !0,
                o(function() {
                    c[t] && (i ? e.apply(null, i) : e.call(null),
                    n.clearImmediate(t))
                }),
                t
            }
            ,
            n.clearImmediate = "function" == typeof i ? i : function(e) {
                delete c[e]
            }
        }
        ).call(this, e("timers").setImmediate, e("timers").clearImmediate)
    }
    , {
        "process/browser.js": 10,
        timers: 12
    }]
}, {}, [1]);
