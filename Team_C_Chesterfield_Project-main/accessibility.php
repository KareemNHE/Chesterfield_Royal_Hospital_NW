<!DOCTYPE html>
<html lang="en">
<?php include 'include/style.php'; ?>

<head>
    <link rel="stylesheet" media="all" href="/application/themes/custom/css/style.css?ts=1702891514" id="mainStylesheet" data-font="/application/themes/custom/css/accessibility/font_size.css" data-bw="/application/themes/custom/css/accessibility/bw_contrast.css" data-blue="/application/themes/custom/css/accessibility/blue_contrast.css" data-beige="/application/themes/custom/css/accessibility/beige_contrast.css" data-high="/application/themes/custom/css/accessibility/high_contrast.css">
</head>


<body>
    <!-- <style>
        .ccm-page .accessibility-controls .access-tab .access-tab-button {
            position: relative;
            display: inline-block;
            padding: 8px 45px;
            background-color: #c0dbed;
            color: #000;
            font-size: 1rem;
            border: 1px solid #c0dbed;
            border-bottom: none;
            border-radius: 8px 8px 0 0;
            pointer-events: all;
            transition: background-color 80ms linear;
        }

        [role=button],
        [type=button]:not(:disabled),
        [type=reset]:not(:disabled),
        [type=submit]:not(:disabled),
        button:not(:disabled) {
            cursor: pointer;
        }

        [type=button],
        [type=reset],
        [type=submit],
        button {
            -webkit-appearance: button;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
        }

        button {
            border-radius: 0;
        }

        *,
        ::after,
        ::before {
            box-sizing: border-box;
        }

        button {
            appearance: auto;
            font-style: ;
            font-variant-ligatures: ;
            font-variant-caps: ;
            font-variant-numeric: ;
            font-variant-east-asian: ;
            font-variant-alternates: ;
            font-variant-position: ;
            font-weight: ;
            font-stretch: ;
            font-size: ;
            font-family: ;
            font-optical-sizing: ;
            font-kerning: ;
            font-feature-settings: ;
            font-variation-settings: ;
            text-rendering: auto;
            color: buttontext;
            letter-spacing: normal;
            word-spacing: normal;
            line-height: normal;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            display: inline-block;
            text-align: center;
            align-items: flex-start;
            cursor: default;
            box-sizing: border-box;
            background-color: buttonface;
            margin: 0em;
            padding-block: 1px;
            padding-inline: 6px;
            border-width: 2px;
            border-style: outset;
            border-color: buttonborder;
            border-image: initial;
        }

        .ccm-page .accessibility-controls {
            position: fixed;
            z-index: 500;
            left: 0;
            right: 0;
            bottom: 0;
            text-align: center;
            pointer-events: none;
            transition: 260ms cubic-bezier(0, .4, .5, .8);
        }
    </style> -->

<?php include "include/accessibility_style.php" ?>

    <script>
        $(document).ready(function() {
            var s = 100,
                a = $("#mainStylesheet").attr("data-font");
            c(Cookies.get("accessibility-controls"), 0);
            var t = parseInt(Cookies.get("saveFontSize")),
                e = isNaN(t) ? s : t;
            l(e);
            var i = {
                    "b-w-contrast": $("#mainStylesheet").attr("data-bw"),
                    "blue-contrast": $("#mainStylesheet").attr("data-blue"),
                    "beige-contrast": $("#mainStylesheet").attr("data-beige"),
                    "high-contrast": $("#mainStylesheet").attr("data-high")
                },
                o = $(".access-tools .contrast .btn-contrast"),
                n = Cookies.get("contrast-mode");

            function c(t, e) {
                var s = "open" === (t = null == t ? "closed" : t) ? "true" : "false";
                $("#accessibility-btn").attr("aria-expanded", s);
                s = "open" === t ? "Hide " : "Show ";
                $("#accessibility-btn #show-hide-tools").html(s), "open" === t ? $(".access-tools").slideDown(e) : $(".access-tools").slideUp(e)
            }

            function l(t) {
                var e = "";
                t === s ? ($("#accessibilityFont").remove(), $("html").css("font-size", "")) : (e = "change-font-size font-" + (s < t ? "inc" : "dec"), d(a, "accessibilityFont"), $("html").css("font-size", t + "%")), $("body").removeClass("font-inc font-dec change-font-size").addClass(e).attr("data-font", t), Cookies.set("saveFontSize", t, {
                    path: "/"
                })
            }

            function r(t) {
                var e = $("body").attr("data-contrast");
                $("body").removeClass(e);
                e = !1;
                "reset-contrast" === t ? ($("#accessibilityStyles").remove(), $("#theme-stylesheet").length && ($("#theme-stylesheet")[0].disabled = !1)) : (e = t, $("body").addClass(t).attr("data-contrast", t), d(i[t], "accessibilityStyles"), "b-w-contrast" === t && (t = "black and white"), $("#theme-stylesheet").length && ($("#theme-stylesheet")[0].disabled = !0)), Cookies.set("contrast-mode", e, {
                    path: "/"
                })
            }

            function d(t, e) {
                var s, a;
                document.getElementById(e) ? document.getElementById(e).href = t : (s = document.getElementsByTagName("head")[0], (a = document.createElement("link")).id = e, a.rel = "stylesheet", a.href = t, a.media = "all", s.appendChild(a))
            }
            n && "false" !== n && (o.filter("." + n).addClass("active").attr("aria-pressed", "true"), r(n)), !isNaN(t) && t <= 30 && l(10 * e), $("#accessibility-btn").on("click", function() {
                var t = "false" === $(this).attr("aria-expanded") ? "open" : "closed";
                Cookies.set("accessibility-controls", t, {
                    path: "/"
                }), c(t)
            }), $(".access-tools .text-size .text-control").on("click", function() {
                var t = parseInt($("body").attr("data-font")),
                    e = s;
                $(this).hasClass("inc") ? (e = t + 20, inc_dec = "increased") : $(this).hasClass("dec") && (e = t - 20, inc_dec = "decreased"), $(this).hasClass("reset") && (inc_dec = "reset"), 60 <= e && e <= 200 && l(e)
            }), o.on("click", function() {
                var t = $(this).hasClass("active") || $(this).hasClass("contrast-reset"),
                    e = t ? "reset-contrast" : $(this).attr("data-contrast");
                o.removeClass("active"), o.attr("aria-pressed", "false"), t || ($(this).addClass("active"), $(this).attr("aria-pressed", "true")), r(e)
            })
        });
    </script>

  <div container >
    <div class="accessibility-controls" role="complementary" aria-labelledby="at-heading">
        <h2 class="visually-hidden" id="at-heading">Accessibility tools</h2>

        <div class="access-tab show-access-tab">
            <button type="button" class="access-tab-button" aria-expanded="false" aria-controls="accessibility-tools" id="accessibility-btn"><span aria-hidden="true" id="show-hide-tools">Show </span>accessibility tools</button>
        </div>

        <div class="access-tools" id="accessibility-tools" aria-labelledby="accessibility-btn">

            <div class="access-element language">
                <div id="google_translate_element"></div>
            </div>

            <div class="access-element text-size">
                <span id="text-label" aria-hidden="true">Text size:</span>

                <ul aria-labelledby="text-label">
                    <li>
                        <button class="text-control inc" aria-label="Increase text size">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <path role="presentation" d="M448 236v40a12 12 0 01-12 12H287v148a12 12 0 01-12 12h-40a12 12 0 01-12-12V288H76a12 12 0 01-12-12v-40a12 12 0 0112-12h147V76a12 12 0 0112-12h40a12 12 0 0112 12v148h149a12 12 0 0112 12z" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button class="text-control dec" aria-label="Decrease text size">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <rect role="presentation" width="384" height="64" x="64" y="224" rx="12" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button class="text-control reset" aria-label="Reset text size">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <path role="presentation" d="M225.14 234.39H72.24a9.16 9.16 0 01-9.16-9.16V72.33a9.16 9.16 0 019.16-9.16h36.63a9.16 9.16 0 019.13 9.16V132a189.27 189.27 0 01330 127c-.22 104.35-84.88 188.87-189.28 188.87a188.59 188.59 0 01-127.08-49 9.17 9.17 0 01-.36-13.3l25.92-25.92a9.14 9.14 0 0112.52-.4 134.33 134.33 0 10-19.59-179.77h75a9.16 9.16 0 019.16 9.16v36.63a9.16 9.16 0 01-9.16 9.16z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="access-element contrast">
                <span id="contrast-label" aria-hidden="true">Contrast:</span>

                <ul aria-labelledby="contrast-label">
                    <li>
                        <button type="button" class="btn-contrast b-w-contrast contrast-b-w" data-contrast="b-w-contrast" aria-pressed="false" aria-label="Black and white contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <circle role="presentation" cx="256" cy="256" r="165" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button type="button" class="btn-contrast blue-contrast contrast-blue" data-contrast="blue-contrast" aria-pressed="false" aria-label="Blue contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <circle role="presentation" cx="256" cy="256" r="165" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button type="button" class="btn-contrast beige-contrast contrast-beige" data-contrast="beige-contrast" aria-pressed="false" aria-label="Beige contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <circle role="presentation" cx="256" cy="256" r="165" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button type="button" class="btn-contrast high-contrast contrast-high" data-contrast="high-contrast" aria-pressed="false" aria-label="High contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <circle role="presentation" cx="256" cy="256" r="165" />
                            </svg>
                        </button>
                    </li>

                    <li>
                        <button type="button" class="btn-contrast contrast-reset" data-contrast="reset-contrast" aria-label="Reset contrast">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" focusable="false">
                                <path role="presentation" d="M225.14 234.39H72.24a9.16 9.16 0 01-9.16-9.16V72.33a9.16 9.16 0 019.16-9.16h36.63a9.16 9.16 0 019.13 9.16V132a189.27 189.27 0 01330 127c-.22 104.35-84.88 188.87-189.28 188.87a188.59 188.59 0 01-127.08-49 9.17 9.17 0 01-.36-13.3l25.92-25.92a9.14 9.14 0 0112.52-.4 134.33 134.33 0 10-19.59-179.77h75a9.16 9.16 0 019.16 9.16v36.63a9.16 9.16 0 01-9.16 9.16z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <div class="access-element frank-logo">
                <p>
                    <span>Created by</span>
                    <a href="https://frankltd.co.uk/" target="_blank" rel="noopener" aria-labelledby="frank-svg-title">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 478.6 162.3" focusable="false">
                            <title id="frank-svg-title">Frank Ltd.</title>
                            <path role="presentation" d="M392.9 91.4l41 36.4v34.5l-64.4-59v42.5h-27.8V2.8h27.8v78.9l32.2-31.3h33.7zM12.3 42c.2-24.9 12.1-42 33.4-42 14.9 0 24.2 7.6 24.2 7.6L59.6 28.4a19.69 19.69 0 0 0-8.8-2.3c-7.5 0-9.1 5-9.1 16.8v17.3h19.6v22.4H41.7v62.7H12.3V82.5H0V60.1h12.3zM67.5 60.1h29.4v12.3h.3s9.3-14.8 26.1-14.8a35.19 35.19 0 0 1 18.6 5.3l-12.3 24.9s-5.5-4.6-15.3-4.6c-15.3 0-17.4 15.1-17.4 17.3v44.8H67.5V60.1zM175.2 57.6c11.5 0 20.9 3.8 27.9 10.6v-8.1h29.3v85.2h-29v-9.6h-.3a37.65 37.65 0 0 1-27.9 12.1c-24.9 0-42.3-20.1-42.3-45s17.3-45.2 42.3-45.2zm8.8 65.1c11.5 0 19.8-8.3 19.8-19.9 0-11.8-8.8-20.1-19.8-20.1s-19.9 8.3-19.9 20.1c-.1 11.6 7.9 19.9 19.9 19.9zM241.5 60.1h29.4v9h.3c6.6-6.6 15.1-11.5 24.4-11.5 15.6 0 37.4 7.8 37.4 31.5v56.2h-29.4V97.2c0-8.5-5.8-16.6-15.3-16.6-8.8 0-17.4 8.1-17.4 16.6v48.1h-29.4zM478.6 128.8a19 19 0 1 1-19.1-19.1 18.93 18.93 0 0 1 19.1 19.1z" />
                        </svg>
                    </a>
                </p>
            </div>

            <a class="access-skiplink" href="#header">Return to header</a>
        </div>
    </div>
  </div>

</body>

</html>