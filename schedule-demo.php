<?php

/*
 * Template Name: Schedule Demo
 */
get_header(); ?>

<style>
    /*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */
    html {
        font-family: sans-serif;
        -ms-text-size-adjust: 100%;
        -webkit-text-size-adjust: 100%
    }

    body {
        margin: 0
    }

    article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
        display: block
    }

    audio, canvas, progress, video {
        display: inline-block;
        vertical-align: baseline
    }

    audio:not([controls]) {
        display: none;
        height: 0
    }

    [hidden], template {
        display: none
    }

    a {
        background-color: transparent
    }

    a:active, a.nice-select.open, a:hover {
        outline: 0
    }

    abbr[title] {
        border-bottom: 1px dotted
    }

    b, strong {
        font-weight: bold
    }

    dfn {
        font-style: italic
    }

    h1 {
        font-size: 2em;
        margin: 0.67em 0
    }

    mark {
        background: #ff0;
        color: #000
    }

    small {
        font-size: 80%
    }

    sub, sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline
    }

    sup {
        top: -0.5em
    }

    sub {
        bottom: -0.25em
    }

    img {
        border: 0
    }

    svg:not(:root) {
        overflow: hidden
    }

    figure {
        margin: 1em 40px
    }

    hr {
        box-sizing: content-box;
        height: 0
    }

    pre {
        overflow: auto
    }

    code, kbd, pre, samp {
        font-family: monospace, monospace;
        font-size: 1em
    }

    button, input, optgroup, select, textarea {
        color: inherit;
        font: inherit;
        margin: 0
    }

    button {
        overflow: visible
    }

    button, select {
        text-transform: none
    }

    button, html input[type="button"], input[type="reset"], input[type="submit"] {
        -webkit-appearance: button;
        cursor: pointer
    }

    button[disabled], html input[disabled] {
        cursor: default
    }

    button::-moz-focus-inner, input::-moz-focus-inner {
        border: 0;
        padding: 0
    }

    input {
        line-height: normal
    }

    input[type="checkbox"], input[type="radio"] {
        box-sizing: border-box;
        padding: 0
    }

    input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
        height: auto
    }

    input[type="search"] {
        -webkit-appearance: textfield;
        box-sizing: content-box
    }

    input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
        -webkit-appearance: none
    }

    fieldset {
        border: 1px solid #c0c0c0;
        margin: 0 2px;
        padding: 0.35em 0.625em 0.75em
    }

    legend {
        border: 0;
        padding: 0
    }

    textarea {
        overflow: auto
    }

    optgroup {
        font-weight: bold
    }

    table {
        border-collapse: collapse;
        border-spacing: 0
    }

    td, th {
        padding: 0
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list {
        position: relative;
        overflow: hidden;
        display: block;
        margin: 0;
        padding: 0
    }

    .slick-list:focus {
        outline: none
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand
    }

    .slick-slider .slick-track, .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .slick-track {
        position: relative;
        left: 0;
        top: 0;
        display: block
    }

    .slick-track:before, .slick-track:after {
        content: "";
        display: table
    }

    .slick-track:after {
        clear: both
    }

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide {
        float: left;
        height: 100%;
        min-height: 1px;
        display: none
    }

    [dir="rtl"] .slick-slide {
        float: right
    }

    .slick-slide img {
        display: block
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-initialized .slick-slide {
        display: block
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent
    }

    .slick-arrow.slick-hidden {
        display: none
    }

    .slick-slider {
        position: relative;
        display: block;
        box-sizing: border-box;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        -ms-touch-action: pan-y;
        touch-action: pan-y;
        -webkit-tap-highlight-color: transparent
    }

    .slick-list {
        position: relative;
        overflow: hidden;
        display: block;
        margin: 0;
        padding: 0
    }

    .slick-list:focus {
        outline: none
    }

    .slick-list.dragging {
        cursor: pointer;
        cursor: hand
    }

    .slick-slider .slick-track, .slick-slider .slick-list {
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .slick-track {
        position: relative;
        left: 0;
        top: 0;
        display: block
    }

    .slick-track:before, .slick-track:after {
        content: "";
        display: table
    }

    .slick-track:after {
        clear: both
    }

    .slick-loading .slick-track {
        visibility: hidden
    }

    .slick-slide {
        float: left;
        height: 100%;
        min-height: 1px;
        display: none
    }

    [dir="rtl"] .slick-slide {
        float: right
    }

    .slick-slide img {
        display: block
    }

    .slick-slide.slick-loading img {
        display: none
    }

    .slick-slide.dragging img {
        pointer-events: none
    }

    .slick-initialized .slick-slide {
        display: block
    }

    .slick-loading .slick-slide {
        visibility: hidden
    }

    .slick-vertical .slick-slide {
        display: block;
        height: auto;
        border: 1px solid transparent
    }

    .slick-arrow.slick-hidden {
        display: none
    }

    .jspContainer {
        overflow: hidden;
        position: relative
    }

    .jspPane {
        position: absolute
    }

    .jspVerticalBar {
        background: #BFBFC9;
        height: 100%;
        position: absolute;
        right: 0;
        top: 0;
        width: 16px
    }

    .jspHorizontalBar {
        background: #BFBFC9;
        bottom: 6px;
        height: 1px;
        left: 0;
        position: absolute;
        width: 100%
    }

    .jspCap {
        display: none
    }

    .jspHorizontalBar .jspCap {
        float: left
    }

    .jspTrack {
        background: #BFBFC9;
        position: relative
    }

    .jspDrag {
        background: #BFBFC9;
        cursor: pointer;
        left: 0;
        position: relative;
        top: 0
    }

    .jspDrag:after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 12px;
        height: 12px;
        background: #151614;
        border-radius: 50%
    }

    .jspHorizontalBar .jspTrack, .jspHorizontalBar .jspDrag {
        float: left;
        height: 100%
    }

    .jspArrow {
        background: #50506d;
        cursor: pointer;
        direction: ltr;
        display: block;
        margin: 0;
        padding: 0;
        text-indent: -20000px
    }

    .jspDisabled {
        background: #80808d;
        cursor: default
    }

    .jspVerticalBar .jspArrow {
        height: 16px
    }

    .jspHorizontalBar .jspArrow {
        float: left;
        height: 100%;
        width: 16px
    }

    .jspVerticalBar .jspArrow:focus {
        border: 1px solid red;
        outline: none
    }

    .jspCorner {
        background: #eeeef4;
        float: left;
        height: 100%
    }

    * html .jspCorner {
        margin: 0 -3px 0 0
    }

    body.compensate-for-scrollbar {
        overflow: hidden
    }

    .fancybox-active {
        height: auto
    }

    .fancybox-is-hidden {
        left: -9999px;
        margin: 0;
        position: absolute !important;
        top: -9999px;
        visibility: hidden
    }

    .fancybox-container {
        -webkit-backface-visibility: hidden;
        height: 100%;
        left: 0;
        outline: none;
        position: fixed;
        -webkit-tap-highlight-color: transparent;
        top: 0;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        width: 100%;
        z-index: 99992
    }

    .fancybox-container * {
        box-sizing: border-box
    }

    .fancybox-outer, .fancybox-inner, .fancybox-bg, .fancybox-stage {
        bottom: 0;
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    .fancybox-outer {
        -webkit-overflow-scrolling: touch;
        overflow-y: auto
    }

    .fancybox-bg {
        background: #1e1e1e;
        opacity: 0;
        -webkit-transition-duration: inherit;
        transition-duration: inherit;
        -webkit-transition-property: opacity;
        transition-property: opacity;
        -webkit-transition-timing-function: cubic-bezier(0.47, 0, 0.74, 0.71);
        transition-timing-function: cubic-bezier(0.47, 0, 0.74, 0.71)
    }

    .fancybox-is-open .fancybox-bg {
        opacity: .9;
        -webkit-transition-timing-function: cubic-bezier(0.22, 0.61, 0.36, 1);
        transition-timing-function: cubic-bezier(0.22, 0.61, 0.36, 1)
    }

    .fancybox-infobar, .fancybox-toolbar, .fancybox-caption, .fancybox-navigation .fancybox-button {
        direction: ltr;
        opacity: 0;
        position: absolute;
        -webkit-transition: opacity .25s ease, visibility 0s ease .25s;
        transition: opacity .25s ease, visibility 0s ease .25s;
        visibility: hidden;
        z-index: 99997
    }

    .fancybox-show-infobar .fancybox-infobar, .fancybox-show-toolbar .fancybox-toolbar, .fancybox-show-caption .fancybox-caption, .fancybox-show-nav .fancybox-navigation .fancybox-button {
        opacity: 1;
        -webkit-transition: opacity .25s ease 0s, visibility 0s ease 0s;
        transition: opacity .25s ease 0s, visibility 0s ease 0s;
        visibility: visible
    }

    .fancybox-infobar {
        color: #ccc;
        font-size: 13px;
        -webkit-font-smoothing: subpixel-antialiased;
        height: 44px;
        left: 0;
        line-height: 44px;
        min-width: 44px;
        mix-blend-mode: difference;
        padding: 0 10px;
        pointer-events: none;
        top: 0;
        -webkit-touch-callout: none;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .fancybox-toolbar {
        right: 0;
        top: 0
    }

    .fancybox-stage {
        direction: ltr;
        overflow: visible;
        -webkit-transform: translateZ(0);
        transform: translateZ(0);
        z-index: 99994
    }

    .fancybox-is-open .fancybox-stage {
        overflow: hidden
    }

    .fancybox-slide {
        -webkit-backface-visibility: hidden;
        display: none;
        height: 100%;
        left: 0;
        outline: none;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        padding: 44px;
        position: absolute;
        text-align: center;
        top: 0;
        -webkit-transition-property: opacity, -webkit-transform;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
        white-space: normal;
        width: 100%;
        z-index: 99994
    }

    .fancybox-slide::before {
        content: '';
        display: inline-block;
        font-size: 0;
        height: 100%;
        vertical-align: middle;
        width: 0
    }

    .fancybox-is-sliding .fancybox-slide, .fancybox-slide--previous, .fancybox-slide--current, .fancybox-slide--next {
        display: block
    }

    .fancybox-slide--image {
        overflow: hidden;
        padding: 44px 0
    }

    .fancybox-slide--image::before {
        display: none
    }

    .fancybox-slide--html {
        padding: 6px
    }

    .fancybox-content {
        background: #fff;
        display: inline-block;
        margin: 0;
        max-width: 100%;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        padding: 44px;
        position: relative;
        text-align: left;
        vertical-align: middle
    }

    .fancybox-slide--image .fancybox-content {
        -webkit-animation-timing-function: cubic-bezier(0.5, 0, 0.14, 1);
        animation-timing-function: cubic-bezier(0.5, 0, 0.14, 1);
        -webkit-backface-visibility: hidden;
        background: transparent;
        background-repeat: no-repeat;
        background-size: 100% 100%;
        left: 0;
        max-width: none;
        overflow: visible;
        padding: 0;
        position: absolute;
        top: 0;
        -webkit-transform-origin: top left;
        transform-origin: top left;
        -webkit-transition-property: opacity, -webkit-transform;
        transition-property: opacity, -webkit-transform;
        transition-property: transform, opacity;
        transition-property: transform, opacity, -webkit-transform;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        z-index: 99995
    }

    .fancybox-can-zoomOut .fancybox-content {
        cursor: -webkit-zoom-out;
        cursor: zoom-out
    }

    .fancybox-can-zoomIn .fancybox-content {
        cursor: -webkit-zoom-in;
        cursor: zoom-in
    }

    .fancybox-can-swipe .fancybox-content, .fancybox-can-pan .fancybox-content {
        cursor: -webkit-grab;
        cursor: grab
    }

    .fancybox-is-grabbing .fancybox-content {
        cursor: -webkit-grabbing;
        cursor: grabbing
    }

    .fancybox-container [data-selectable='true'] {
        cursor: text
    }

    .fancybox-image, .fancybox-spaceball {
        background: transparent;
        border: 0;
        height: 100%;
        left: 0;
        margin: 0;
        max-height: none;
        max-width: none;
        padding: 0;
        position: absolute;
        top: 0;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        width: 100%
    }

    .fancybox-spaceball {
        z-index: 1
    }

    .fancybox-slide--video .fancybox-content, .fancybox-slide--map .fancybox-content, .fancybox-slide--pdf .fancybox-content, .fancybox-slide--iframe .fancybox-content {
        height: 100%;
        overflow: visible;
        padding: 0;
        width: 100%
    }

    .fancybox-slide--video .fancybox-content {
        background: #000
    }

    .fancybox-slide--map .fancybox-content {
        background: #e5e3df
    }

    .fancybox-slide--iframe .fancybox-content {
        background: #fff
    }

    .fancybox-video, .fancybox-iframe {
        background: transparent;
        border: 0;
        display: block;
        height: 100%;
        margin: 0;
        overflow: hidden;
        padding: 0;
        width: 100%
    }

    .fancybox-iframe {
        left: 0;
        position: absolute;
        top: 0
    }

    .fancybox-error {
        background: #fff;
        cursor: default;
        max-width: 400px;
        padding: 40px;
        width: 100%
    }

    .fancybox-error p {
        color: #444;
        font-size: 16px;
        line-height: 20px;
        margin: 0;
        padding: 0
    }

    .fancybox-button {
        background: rgba(30, 30, 30, 0.6);
        border: 0;
        border-radius: 0;
        box-shadow: none;
        cursor: pointer;
        display: inline-block;
        height: 44px;
        margin: 0;
        padding: 10px;
        position: relative;
        -webkit-transition: color .2s;
        transition: color .2s;
        vertical-align: top;
        visibility: inherit;
        width: 44px
    }

    .fancybox-button, .fancybox-button:visited, .fancybox-button:link {
        color: #ccc
    }

    .fancybox-button:hover {
        color: #fff
    }

    .fancybox-button:focus {
        outline: none
    }

    .fancybox-button.fancybox-focus {
        outline: 1px dotted
    }

    .fancybox-button[disabled], .fancybox-button[disabled]:hover {
        color: #888;
        cursor: default;
        outline: none
    }

    .fancybox-button div {
        height: 100%
    }

    .fancybox-button svg {
        display: block;
        height: 100%;
        overflow: visible;
        position: relative;
        width: 100%
    }

    .fancybox-button svg path {
        fill: currentColor;
        stroke-width: 0
    }

    .fancybox-button--play svg:nth-child(2), .fancybox-button--fsenter svg:nth-child(2) {
        display: none
    }

    .fancybox-button--pause svg:nth-child(1), .fancybox-button--fsexit svg:nth-child(1) {
        display: none
    }

    .fancybox-progress {
        background: #ff5268;
        height: 2px;
        left: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transform: scaleX(0);
        transform: scaleX(0);
        -webkit-transform-origin: 0;
        transform-origin: 0;
        -webkit-transition-property: -webkit-transform;
        transition-property: -webkit-transform;
        transition-property: transform;
        transition-property: transform, -webkit-transform;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
        z-index: 99998
    }

    .fancybox-close-small {
        background: transparent;
        border: 0;
        border-radius: 0;
        color: #ccc;
        cursor: pointer;
        opacity: .8;
        padding: 8px;
        position: absolute;
        right: -12px;
        top: -44px;
        z-index: 401
    }

    .fancybox-close-small:hover {
        color: #fff;
        opacity: 1
    }

    .fancybox-slide--html .fancybox-close-small {
        color: currentColor;
        padding: 10px;
        right: 0;
        top: 0
    }

    .fancybox-slide--image.fancybox-is-scaling .fancybox-content {
        overflow: hidden
    }

    .fancybox-is-scaling .fancybox-close-small, .fancybox-is-zoomable.fancybox-can-pan .fancybox-close-small {
        display: none
    }

    .fancybox-navigation .fancybox-button {
        background-clip: content-box;
        height: 100px;
        opacity: 0;
        position: absolute;
        top: calc(50% - 50px);
        width: 70px
    }

    .fancybox-navigation .fancybox-button div {
        padding: 7px
    }

    .fancybox-navigation .fancybox-button--arrow_left {
        left: 0;
        left: env(safe-area-inset-left);
        padding: 31px 26px 31px 6px
    }

    .fancybox-navigation .fancybox-button--arrow_right {
        padding: 31px 6px 31px 26px;
        right: 0;
        right: env(safe-area-inset-right)
    }

    .fancybox-caption {
        background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.15) 65%, rgba(0, 0, 0, 0.075) 75.5%, rgba(0, 0, 0, 0.037) 82.85%, rgba(0, 0, 0, 0.019) 88%, rgba(0, 0, 0, 0) 100%);
        background: linear-gradient(to top, rgba(0, 0, 0, 0.85) 0%, rgba(0, 0, 0, 0.3) 50%, rgba(0, 0, 0, 0.15) 65%, rgba(0, 0, 0, 0.075) 75.5%, rgba(0, 0, 0, 0.037) 82.85%, rgba(0, 0, 0, 0.019) 88%, rgba(0, 0, 0, 0) 100%);
        bottom: 0;
        color: #eee;
        font-size: 14px;
        font-weight: 400;
        left: 0;
        line-height: 1.5;
        padding: 75px 44px 25px 44px;
        pointer-events: none;
        right: 0;
        text-align: center;
        z-index: 99996
    }

    @supports (padding: 0px) {
        .fancybox-caption {
            padding: 75px 44px 44px 44px
        }
    }

    .fancybox-caption--separate {
        margin-top: -50px
    }

    .fancybox-caption__body {
        max-height: 50vh;
        overflow: auto;
        pointer-events: all
    }

    .fancybox-caption a, .fancybox-caption a:link, .fancybox-caption a:visited {
        color: #ccc;
        text-decoration: none
    }

    .fancybox-caption a:hover {
        color: #fff;
        text-decoration: underline
    }

    .fancybox-loading {
        -webkit-animation: fancybox-rotate 1s linear infinite;
        animation: fancybox-rotate 1s linear infinite;
        background: transparent;
        border: 4px solid #888;
        border-bottom-color: #fff;
        border-radius: 50%;
        height: 50px;
        left: 50%;
        margin: -25px 0 0 -25px;
        opacity: .7;
        padding: 0;
        position: absolute;
        top: 50%;
        width: 50px;
        z-index: 99999
    }

    @-webkit-keyframes fancybox-rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    @keyframes fancybox-rotate {
        100% {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
    }

    .fancybox-animated {
        -webkit-transition-timing-function: cubic-bezier(0, 0, 0.25, 1);
        transition-timing-function: cubic-bezier(0, 0, 0.25, 1)
    }

    .fancybox-fx-slide.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: translate3d(-100%, 0, 0);
        transform: translate3d(-100%, 0, 0)
    }

    .fancybox-fx-slide.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: translate3d(100%, 0, 0);
        transform: translate3d(100%, 0, 0)
    }

    .fancybox-fx-slide.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0)
    }

    .fancybox-fx-fade.fancybox-slide--previous, .fancybox-fx-fade.fancybox-slide--next {
        opacity: 0;
        -webkit-transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1);
        transition-timing-function: cubic-bezier(0.19, 1, 0.22, 1)
    }

    .fancybox-fx-fade.fancybox-slide--current {
        opacity: 1
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: scale3d(1.5, 1.5, 1.5);
        transform: scale3d(1.5, 1.5, 1.5)
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: scale3d(0.5, 0.5, 0.5);
        transform: scale3d(0.5, 0.5, 0.5)
    }

    .fancybox-fx-zoom-in-out.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: scale3d(1, 1, 1);
        transform: scale3d(1, 1, 1)
    }

    .fancybox-fx-rotate.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: rotate(-360deg);
        transform: rotate(-360deg)
    }

    .fancybox-fx-rotate.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
    }

    .fancybox-fx-rotate.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg)
    }

    .fancybox-fx-circular.fancybox-slide--previous {
        opacity: 0;
        -webkit-transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0);
        transform: scale3d(0, 0, 0) translate3d(-100%, 0, 0)
    }

    .fancybox-fx-circular.fancybox-slide--next {
        opacity: 0;
        -webkit-transform: scale3d(0, 0, 0) translate3d(100%, 0, 0);
        transform: scale3d(0, 0, 0) translate3d(100%, 0, 0)
    }

    .fancybox-fx-circular.fancybox-slide--current {
        opacity: 1;
        -webkit-transform: scale3d(1, 1, 1) translate3d(0, 0, 0);
        transform: scale3d(1, 1, 1) translate3d(0, 0, 0)
    }

    .fancybox-fx-tube.fancybox-slide--previous {
        -webkit-transform: translate3d(-100%, 0, 0) scale(0.1) skew(-10deg);
        transform: translate3d(-100%, 0, 0) scale(0.1) skew(-10deg)
    }

    .fancybox-fx-tube.fancybox-slide--next {
        -webkit-transform: translate3d(100%, 0, 0) scale(0.1) skew(10deg);
        transform: translate3d(100%, 0, 0) scale(0.1) skew(10deg)
    }

    .fancybox-fx-tube.fancybox-slide--current {
        -webkit-transform: translate3d(0, 0, 0) scale(1);
        transform: translate3d(0, 0, 0) scale(1)
    }

    .fancybox-share {
        background: #f4f4f4;
        border-radius: 3px;
        max-width: 90%;
        padding: 30px;
        text-align: center
    }

    .fancybox-share h1 {
        color: #222;
        font-size: 35px;
        font-weight: 700;
        margin: 0 0 20px 0
    }

    .fancybox-share p {
        margin: 0;
        padding: 0
    }

    .fancybox-share__button {
        border: 0;
        border-radius: 3px;
        display: inline-block;
        font-size: 14px;
        font-weight: 700;
        line-height: 40px;
        margin: 0 5px 10px 5px;
        min-width: 130px;
        padding: 0 15px;
        text-decoration: none;
        -webkit-transition: all .2s;
        transition: all .2s;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap
    }

    .fancybox-share__button:visited, .fancybox-share__button:link {
        color: #fff
    }

    .fancybox-share__button:hover {
        text-decoration: none
    }

    .fancybox-share__button--fb {
        background: #3b5998
    }

    .fancybox-share__button--fb:hover {
        background: #344e86
    }

    .fancybox-share__button--pt {
        background: #bd081d
    }

    .fancybox-share__button--pt:hover {
        background: #aa0719
    }

    .fancybox-share__button--tw {
        background: #1da1f2
    }

    .fancybox-share__button--tw:hover {
        background: #0d95e8
    }

    .fancybox-share__button svg {
        height: 25px;
        margin-right: 7px;
        position: relative;
        top: -1px;
        vertical-align: middle;
        width: 25px
    }

    .fancybox-share__button svg path {
        fill: #fff
    }

    .fancybox-share__input {
        background: transparent;
        border: 0;
        border-bottom: 1px solid #d7d7d7;
        border-radius: 0;
        color: #5d5b5b;
        font-size: 14px;
        margin: 10px 0 0 0;
        outline: none;
        padding: 10px 15px;
        width: 100%
    }

    .fancybox-thumbs {
        background: #ddd;
        bottom: 0;
        display: none;
        margin: 0;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        padding: 2px 2px 4px 2px;
        position: absolute;
        right: 0;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        top: 0;
        width: 212px;
        z-index: 99995
    }

    .fancybox-thumbs-x {
        overflow-x: auto;
        overflow-y: hidden
    }

    .fancybox-show-thumbs .fancybox-thumbs {
        display: block
    }

    .fancybox-show-thumbs .fancybox-inner {
        right: 212px
    }

    .fancybox-thumbs__list {
        font-size: 0;
        height: 100%;
        list-style: none;
        margin: 0;
        overflow-x: hidden;
        overflow-y: auto;
        padding: 0;
        position: absolute;
        position: relative;
        white-space: nowrap;
        width: 100%
    }

    .fancybox-thumbs-x .fancybox-thumbs__list {
        overflow: hidden
    }

    .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar {
        width: 7px
    }

    .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-track {
        background: #fff;
        border-radius: 10px;
        box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3)
    }

    .fancybox-thumbs-y .fancybox-thumbs__list::-webkit-scrollbar-thumb {
        background: #2a2a2a;
        border-radius: 10px
    }

    .fancybox-thumbs__list a {
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        background-color: rgba(0, 0, 0, 0.1);
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;
        cursor: pointer;
        float: left;
        height: 75px;
        margin: 2px;
        max-height: calc(100% - 8px);
        max-width: calc(50% - 4px);
        outline: none;
        overflow: hidden;
        padding: 0;
        position: relative;
        -webkit-tap-highlight-color: transparent;
        width: 100px
    }

    .fancybox-thumbs__list a::before {
        border: 6px solid #ff5268;
        bottom: 0;
        content: '';
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        -webkit-transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        transition: all 0.2s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        z-index: 99991
    }

    .fancybox-thumbs__list a:focus::before {
        opacity: .5
    }

    .fancybox-thumbs__list a.fancybox-thumbs-active::before {
        opacity: 1
    }

    .nice-select {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
        background-color: #fff;
        border-radius: 0;
        border: solid 1px #e8e8e8;
        box-sizing: border-box;
        clear: both;
        cursor: pointer;
        display: block;
        float: left;
        font-family: inherit;
        font-size: 16px;
        font-weight: normal;
        height: 42px;
        line-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 30px;
        position: relative;
        text-align: left !important;
        -webkit-transition: all 0.2s ease-in-out;
        transition: all 0.2s ease-in-out;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        white-space: nowrap;
        width: auto
    }

    .nice-select:hover {
        border-color: #dbdbdb
    }

    .nice-select:active, .nice-select.open, .nice-select:focus {
        border-color: #999
    }

    .nice-select:after {
        border-bottom: 2px solid #999;
        border-right: 2px solid #999;
        content: '';
        display: block;
        height: 5px;
        margin-top: -4px;
        pointer-events: none;
        position: absolute;
        right: 12px;
        top: 50%;
        -webkit-transform-origin: 66% 66%;
        transform-origin: 66% 66%;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
        -webkit-transition: all 0.15s ease-in-out;
        transition: all 0.15s ease-in-out;
        width: 5px
    }

    .nice-select.open:after {
        -webkit-transform: rotate(-135deg);
        transform: rotate(-135deg)
    }

    .nice-select.open .list {
        opacity: 1;
        pointer-events: auto;
        -webkit-transform: scale(1) translateY(0);
        transform: scale(1) translateY(0)
    }

    .nice-select.disabled {
        border-color: #ededed;
        color: #999;
        pointer-events: none
    }

    .nice-select.disabled:after {
        border-color: #ccc
    }

    .nice-select.wide {
        width: 100%
    }

    .nice-select.wide .list {
        left: 0 !important;
        right: 0 !important
    }

    .nice-select.right {
        float: right
    }

    .nice-select.right .list {
        left: auto;
        right: 0
    }

    .nice-select.small {
        font-size: 12px;
        height: 36px;
        line-height: 34px
    }

    .nice-select.small:after {
        height: 4px;
        width: 4px
    }

    .nice-select.small .option {
        line-height: 34px;
        min-height: 34px
    }

    .nice-select .list {
        background-color: #fff;
        border-radius: 0;
        box-shadow: 0 0 0 1px rgba(68, 68, 68, 0.11);
        box-sizing: border-box;
        margin-top: 4px;
        opacity: 0;
        overflow: hidden;
        padding: 0;
        pointer-events: none;
        position: absolute;
        top: 100%;
        left: 0;
        -webkit-transform-origin: 50% 0;
        transform-origin: 50% 0;
        -webkit-transform: scale(0.75) translateY(-21px);
        transform: scale(0.75) translateY(-21px);
        -webkit-transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
        transition: all 0.2s cubic-bezier(0.5, 0, 0, 1.25), opacity 0.15s ease-out;
        z-index: 9
    }

    .nice-select .list:hover .option:not(:hover) {
        background-color: transparent !important
    }

    .nice-select .option {
        cursor: pointer;
        font-weight: 400;
        line-height: 40px;
        list-style: none;
        min-height: 40px;
        outline: none;
        padding-left: 18px;
        padding-right: 29px;
        text-align: left;
        -webkit-transition: all 0.2s;
        transition: all 0.2s
    }

    .nice-select .option:hover, .nice-select .option.focus, .nice-select .option.selected.focus {
        background-color: #f5f4f0
    }

    .nice-select .option.selected {
        font-weight: bold
    }

    .nice-select .option.disabled {
        background-color: transparent;
        color: #999;
        cursor: default
    }

    .no-csspointerevents .nice-select .list {
        display: none
    }

    .no-csspointerevents .nice-select.open .list {
        display: block
    }

    .listreset {
        margin: 0;
        padding: 0;
        list-style: none
    }

    .clearfix:after {
        content: '';
        display: block;
        clear: both
    }

    .ellipsis {
        white-space: nowrap;
        text-overflow: ellipsis;
        overflow: hidden
    }

    .btn {
        display: inline-block;
        vertical-align: top
    }

    html {
        box-sizing: border-box
    }

    *, *:before, *:after {
        box-sizing: inherit
    }

    * {
        max-height: 1000000px
    }

    body {
        color: #151614;
        background: #fff;
        font: 16px/1.6 "Gilroy", "Arial", "Helvetica Neue", "Helvetica", sans-serif;
        min-width: 320px;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale
    }

    img {
        max-width: 100%;
        height: auto
    }

    .gm-style img {
        max-width: none
    }

    .text-center {
        text-align: center
    }

    form, fieldset {
        margin: 0;
        padding: 0;
        border-style: none
    }

    input[type='text'], input[type='tel'], input[type='email'], input[type='search'], input[type='password'], textarea {
        -webkit-appearance: none;
        -webkit-border-radius: 0;
        box-sizing: border-box;
        border: 1px solid #E5EBEE;
        padding: 18px 24px 18px 24px;
        width: 100%;
        margin-bottom: 15px;
        outline: none
    }

    input[type='text']:only-child, input[type='tel']:only-child, input[type='email']:only-child, input[type='search']:only-child, input[type='password']:only-child, textarea:only-child {
        margin-bottom: 0
    }

    input[type='text']:focus, input[type='tel']:focus, input[type='email']:focus, input[type='search']:focus, input[type='password']:focus, textarea:focus {
        border-color: #151614
    }

    input[type='text']::-webkit-input-placeholder, input[type='tel']::-webkit-input-placeholder, input[type='email']::-webkit-input-placeholder, input[type='search']::-webkit-input-placeholder, input[type='password']::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
        color: #151614
    }

    input[type='text']::-moz-placeholder, input[type='tel']::-moz-placeholder, input[type='email']::-moz-placeholder, input[type='search']::-moz-placeholder, input[type='password']::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1;
        color: #151614
    }

    input[type='text']:-moz-placeholder, input[type='tel']:-moz-placeholder, input[type='email']:-moz-placeholder, input[type='search']:-moz-placeholder, input[type='password']:-moz-placeholder, textarea:-moz-placeholder {
        color: #151614
    }

    input[type='text']:-ms-input-placeholder, input[type='tel']:-ms-input-placeholder, input[type='email']:-ms-input-placeholder, input[type='search']:-ms-input-placeholder, input[type='password']:-ms-input-placeholder, textarea:-ms-input-placeholder {
        color: #151614
    }

    input[type='text'].placeholder, input[type='tel'].placeholder, input[type='email'].placeholder, input[type='search'].placeholder, input[type='password'].placeholder, textarea.placeholder {
        color: #151614
    }

    input[type='text']::-webkit-input-placeholder, input[type='tel']::-webkit-input-placeholder, input[type='email']::-webkit-input-placeholder, input[type='search']::-webkit-input-placeholder, input[type='password']::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
        opacity: 1;
        -webkit-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']::-moz-placeholder, input[type='tel']::-moz-placeholder, input[type='email']::-moz-placeholder, input[type='search']::-moz-placeholder, input[type='password']::-moz-placeholder, textarea::-moz-placeholder {
        opacity: 1;
        -moz-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']:-moz-placeholder, input[type='tel']:-moz-placeholder, input[type='email']:-moz-placeholder, input[type='search']:-moz-placeholder, input[type='password']:-moz-placeholder, textarea:-moz-placeholder {
        opacity: 1;
        -moz-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']:-ms-input-placeholder, input[type='tel']:-ms-input-placeholder, input[type='email']:-ms-input-placeholder, input[type='search']:-ms-input-placeholder, input[type='password']:-ms-input-placeholder, textarea:-ms-input-placeholder {
        opacity: 1;
        -ms-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']:focus::-webkit-input-placeholder, input[type='tel']:focus::-webkit-input-placeholder, input[type='email']:focus::-webkit-input-placeholder, input[type='search']:focus::-webkit-input-placeholder, input[type='password']:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
        opacity: 0;
        -webkit-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']:focus::-moz-placeholder, input[type='tel']:focus::-moz-placeholder, input[type='email']:focus::-moz-placeholder, input[type='search']:focus::-moz-placeholder, input[type='password']:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
        opacity: 0;
        -moz-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']:focus:-moz-placeholder, input[type='tel']:focus:-moz-placeholder, input[type='email']:focus:-moz-placeholder, input[type='search']:focus:-moz-placeholder, input[type='password']:focus:-moz-placeholder, textarea:focus:-moz-placeholder {
        opacity: 0;
        -moz-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    input[type='text']:focus:-ms-input-placeholder, input[type='tel']:focus:-ms-input-placeholder, input[type='email']:focus:-ms-input-placeholder, input[type='search']:focus:-ms-input-placeholder, input[type='password']:focus:-ms-input-placeholder, textarea:focus:-ms-input-placeholder {
        opacity: 0;
        -ms-transition: opacity 0.3s ease;
        transition: opacity 0.3s ease
    }

    select, .nice-select {
        -webkit-border-radius: 0;
        -webkit-appearance: none;
        box-sizing: border-box;
        border: 1px solid #E5EBEE;
        padding: 18px 24px 18px 24px;
        width: 100%;
        margin-bottom: 15px;
        background-image: url("../images/icon-arrow-bottom.png");
        background-repeat: no-repeat;
        background-size: 10px;
        background-position: calc(100% - 28px) 50%;
        cursor: pointer;
        outline: none;
        line-height: 1
    }

    select:only-child, .nice-select:only-child {
        margin-bottom: 0
    }

    select:focus, .nice-select:focus {
        border-color: #151614
    }

    .nice-select {
        height: 58px;
        padding: 15px 24px;
        display: block;
        background-size: 23px;
        float: none
    }

    .nice-select:after {
        display: none
    }

    .nice-select .current {
        font-size: 26px;
        font-weight: 400
    }

    .nice-select .list {
        width: 100%;
        margin-top: 1px;
        border-top-color: #16CC8E;
        z-index: 10
    }

    .nice-select .option {
        padding: 24px 75px 24px 24px;
        line-height: 1;
        color: #151614;
        font-weight: 400
    }

    .nice-select .option.selected {
        color: #16CC8E;
        font-weight: 400;
        background-image: url("../images/icon-selected.png");
        background-size: 15px;
        background-repeat: no-repeat;
        background-position: calc(100% - 24px) 50%
    }

    textarea {
        resize: vertical;
        vertical-align: top;
        height: 126px;
        min-height: 126px
    }

    button, input[type='button'], input[type='reset'], input[type='file'], input[type='submit'] {
        -webkit-appearance: none;
        -webkit-border-radius: 0;
        cursor: pointer
    }

    .form-column {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin: 0
    }

    .form-column .form-row {
        margin-bottom: 14px
    }

    .form-row {
        margin-bottom: 24px;
        width: 100%
    }

    .form-row.hide {
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.3s;
        transition: 0.3s
    }

    .form-row a {
        line-height: 1;
        font-weight: 600;
        color: #151614;
        text-decoration: none
    }

    .form-row a:hover {
        color: #16CC8E
    }

    .form-bottom {
        padding-top: 33px
    }

    .form-bottom .separator {
        display: block;
        margin: 13px 0;
        line-height: 1.13;
        font-size: 16px;
        color: #b1b1ae;
        font-weight: 500
    }

    .form-bottom .btn {
        width: 100%;
        text-align: center
    }

    .form-bottom .btn:before {
        position: static;
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
        margin-right: 10px;
        margin-top: 6px
    }

    .form-bottom .btn:after {
        display: none
    }

    .form-control-checkbox {
        display: none
    }

    .form-control-checkbox:checked + .label-checkbox:after {
        opacity: 1
    }

    .label-checkbox {
        display: block;
        position: relative;
        line-height: 1.2;
        font-size: 16px;
        font-weight: 400;
        cursor: pointer;
        padding: 10px 0 10px 52px;
        margin: 0
    }

    .label-checkbox:before {
        content: '';
        border: 1px solid #E6E3DA;
        width: 36px;
        height: 36px;
        position: absolute;
        top: 50%;
        left: 0;
        -webkit-transform: translateY(-50%);
        transform: translateY(-50%)
    }

    .label-checkbox:after {
        content: '';
        position: absolute;
        top: calc(50% - 2px);
        left: 10px;
        width: 17px;
        height: 8px;
        -webkit-transform: translateY(-50%) rotate(-45deg);
        transform: translateY(-50%) rotate(-45deg);
        border-left: 2px solid #16CC8E;
        border-bottom: 2px solid #16CC8E;
        opacity: 0;
        -webkit-transition: 0.3s;
        transition: 0.3s
    }

    .label-checkbox strong {
        font-weight: 700
    }

    h1, .h1, h2, .h2, h3, .h3, h4, .h4, h5, .h5, h6, .h6, .h {
        font-family: inherit;
        font-weight: bold;
        margin: 0 0 0.5em;
        color: inherit
    }

    h1, .h1 {
        font-size: 64px
    }

    h2, .h2 {
        font-size: 42px
    }

    h3, .h3 {
        font-size: 34px
    }

    h4, .h4 {
        font-size: 24px
    }

    h5, .h5 {
        font-size: 24px
    }

    h6, .h6 {
        font-size: 24px
    }

    p {
        margin: 0 0 1em
    }

    a {
        color: #16CC8E;
        -webkit-transition: 0.3s;
        transition: 0.3s
    }

    a:hover, a:focus {
        text-decoration: none
    }

    .hover-decor-line, .contact-holder .contact-text-holder a, .footer .menu a {
        position: relative
    }

    .hover-decor-line:hover:after, .contact-holder .contact-text-holder a:hover:after, .footer .menu a:hover:after {
        width: 100%;
        left: 0;
        right: auto
    }

    .hover-decor-line:after, .contact-holder .contact-text-holder a:after, .footer .menu a:after {
        content: "";
        width: 0;
        height: 1px;
        bottom: -2px;
        position: absolute;
        left: auto;
        right: 0;
        -webkit-transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
        transition: width 0.6s cubic-bezier(0.25, 0.8, 0.25, 1) 0s;
        background: currentColor
    }

    .link {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.1875;
        text-decoration: none;
        color: #151614
    }

    .link:hover {
        color: #16CC8E
    }

    .link:after {
        content: '';
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: #151614;
        display: inline-block;
        vertical-align: middle;
        margin-left: 12px
    }

    .link.dot-green:after {
        background: #16CC8E
    }

    .text-right {
        text-align: right
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-Black.eot");
        src: url("../fonts/gilroy/Gilroy-Black.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-Black.woff") format("woff"), url("../fonts/gilroy/Gilroy-Black.ttf") format("truetype");
        font-weight: 900;
        font-style: normal
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-ExtraBold.eot");
        src: url("../fonts/gilroy/Gilroy-ExtraBold.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-ExtraBold.woff") format("woff"), url("../fonts/gilroy/Gilroy-ExtraBold.ttf") format("truetype");
        font-weight: 800;
        font-style: normal
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-Bold.eot");
        src: url("../fonts/gilroy/Gilroy-Bold.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-Bold.woff") format("woff"), url("../fonts/gilroy/Gilroy-Bold.ttf") format("truetype");
        font-weight: 700;
        font-style: normal
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-SemiBold.eot");
        src: url("../fonts/gilroy/Gilroy-SemiBold.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-SemiBold.woff") format("woff"), url("../fonts/gilroy/Gilroy-SemiBold.ttf") format("truetype");
        font-weight: 600;
        font-style: normal
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-Medium.eot");
        src: url("../fonts/gilroy/Gilroy-Medium.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-Medium.woff") format("woff"), url("../fonts/gilroy/Gilroy-Medium.ttf") format("truetype");
        font-weight: 500;
        font-style: normal
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-Regular.eot");
        src: url("../fonts/gilroy/Gilroy-Regular.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-Regular.woff") format("woff"), url("../fonts/gilroy/Gilroy-Regular.ttf") format("truetype");
        font-weight: 400;
        font-style: normal
    }

    @font-face {
        font-family: "Gilroy";
        src: url("../fonts/gilroy/Gilroy-Light.eot");
        src: url("../fonts/gilroy/Gilroy-Light.eot?iefix") format("eot"), url("../fonts/gilroy/Gilroy-Light.woff") format("woff"), url("../fonts/gilroy/Gilroy-Light.ttf") format("truetype");
        font-weight: 300;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-black-webfont.eot");
        src: url("../fonts/montserrat/montserrat-black-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-black-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-black-webfont.ttf") format("truetype");
        font-weight: 900;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-extrabold-webfont.eot");
        src: url("../fonts/montserrat/montserrat-extrabold-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-extrabold-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-extrabold-webfont.ttf") format("truetype");
        font-weight: 800;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-bold-webfont.eot");
        src: url("../fonts/montserrat/montserrat-bold-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-bold-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-bold-webfont.ttf") format("truetype");
        font-weight: 700;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-semibold-webfont.eot");
        src: url("../fonts/montserrat/montserrat-semibold-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-semibold-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-semibold-webfont.ttf") format("truetype");
        font-weight: 600;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-medium-webfont.eot");
        src: url("../fonts/montserrat/montserrat-medium-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-medium-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-medium-webfont.ttf") format("truetype");
        font-weight: 500;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-regular-webfont.eot");
        src: url("../fonts/montserrat/montserrat-regular-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-regular-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-regular-webfont.ttf") format("truetype");
        font-weight: 400;
        font-style: normal
    }

    @font-face {
        font-family: "Montserrat";
        src: url("../fonts/montserrat/montserrat-light-webfont.eot");
        src: url("../fonts/montserrat/montserrat-light-webfont.eot?iefix") format("eot"), url("../fonts/montserrat/montserrat-light-webfont.woff") format("woff"), url("../fonts/montserrat/montserrat-light-webfont.ttf") format("truetype");
        font-weight: 300;
        font-style: normal
    }

    .hamburger {
        padding: 5px 0px 0;
        display: inline-block;
        cursor: pointer;
        -webkit-transition-property: opacity, -webkit-filter;
        transition-property: opacity, -webkit-filter;
        transition-property: opacity, filter;
        transition-property: opacity, filter, -webkit-filter;
        -webkit-transition-duration: 0.15s;
        transition-duration: 0.15s;
        -webkit-transition-timing-function: linear;
        transition-timing-function: linear;
        font: inherit;
        color: inherit;
        text-transform: none;
        background-color: transparent;
        border: 0;
        margin: 0;
        overflow: visible;
        outline: none
    }

    .hamburger-box {
        width: 26px;
        height: 19px;
        display: inline-block;
        position: relative
    }

    .hamburger-inner {
        display: block;
        margin-top: -1.5px;
        top: 1.5px;
        -webkit-transition-duration: 0.275s;
        transition-duration: 0.275s;
        -webkit-transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55)
    }

    .hamburger-inner, .hamburger-inner::before, .hamburger-inner::after {
        width: 26px;
        height: 3px;
        background-color: #151614;
        border-radius: 2px;
        position: absolute
    }

    .hamburger-inner::before, .hamburger-inner::after {
        content: "";
        display: block
    }

    .hamburger-inner::before {
        top: 8px;
        -webkit-transition: opacity 0.125s 0.275s ease;
        transition: opacity 0.125s 0.275s ease
    }

    .hamburger-inner::after {
        bottom: -8px;
        top: 16px;
        -webkit-transition: -webkit-transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transition: -webkit-transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        transition: transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55), -webkit-transform 0.275s cubic-bezier(0.68, -0.55, 0.265, 1.55)
    }

    .is-active-menu .hamburger .hamburger-inner, .is-active-menu .hamburger .hamburger-inner::before, .is-active-menu .hamburger .hamburger-inner::after {
        background-color: #151614
    }

    .is-active-menu .hamburger .hamburger-inner {
        -webkit-transform: translate3d(0, 8px, 0) rotate(135deg);
        transform: translate3d(0, 8px, 0) rotate(135deg);
        -webkit-transition-delay: 0.075s;
        transition-delay: 0.075s
    }

    .is-active-menu .hamburger .hamburger-inner::before {
        -webkit-transition-delay: 0s;
        transition-delay: 0s;
        opacity: 0
    }

    .is-active-menu .hamburger .hamburger-inner::after {
        -webkit-transform: translate3d(0, -16px, 0) rotate(-270deg);
        transform: translate3d(0, -16px, 0) rotate(-270deg);
        -webkit-transition-delay: 0.075s;
        transition-delay: 0.075s
    }

    .hero-banner-section {
        margin-bottom: 18px;
        padding-top: 27px
    }

    .hero-banner-section.is-video {
        margin-bottom: 50px
    }

    .hero-banner-section.is-video .text-holder {
        margin-bottom: 34px
    }

    .hero-banner-section.is-video .title-block {
        min-height: 0;
        margin-bottom: 13px
    }

    .hero-banner-section.is-video .text-block {
        display: block;
        margin-bottom: 0
    }

    .hero-banner-section.custom-section {
        padding-top: 70px;
        margin-bottom: 105px
    }

    .hero-banner-section.custom-section .title-block {
        min-height: 0;
        margin-bottom: 13px
    }

    .hero-banner-section.custom-section .text-block {
        display: block;
        margin-bottom: 102px
    }

    .hero-banner-section.custom-section .text-block.mb-0 {
        margin-bottom: 0
    }

    .hero-banner-section.custom-section .text-block.mb-4 {
        margin-bottom: 40px
    }

    .hero-banner-section.custom-section .image-holder {
        height: auto;
        text-align: center
    }

    .hero-banner-section.custom-section .image-holder picture {
        margin: 0 -20px;
        display: inline-block
    }

    .hero-banner-section.custom-margin-bottom {
        margin-bottom: 40px;
        padding-top: 27px
    }

    .hero-banner-section.custom-margin-bottom .image-holder {
        height: auto;
        text-align: center
    }

    .hero-banner-section.custom-margin-bottom .image-holder picture {
        margin: 0 -20px;
        display: inline-block
    }

    .hero-banner-section .text-holder {
        margin-bottom: 59px;
        position: relative;
        z-index: 10
    }

    .hero-banner-section .text-holder.mb-30 {
        margin-bottom: 30px
    }

    .hero-banner-section .title-block {
        font-size: 36px;
        font-weight: 400;
        line-height: 1.3;
        margin-bottom: 20px;
        min-height: 175px;
        text-transform: capitalize
    }

    .hero-banner-section .title-block.text-normal {
        text-transform: none
    }

    .hero-banner-section .title-block .string-replacement {
        font-weight: 900;
        position: relative;
        display: inline-block;
        -webkit-transition: width 0.2s linear;
        transition: width 0.2s linear
    }

    .hero-banner-section .title-block .string-replacement span {
        opacity: 0;
        position: absolute;
        z-index: -1;
        word-break: normal;
        white-space: nowrap
    }

    .hero-banner-section .title-block .string-replacement span.animate {
        -webkit-transition: opacity 0.5s 0.2s linear;
        transition: opacity 0.5s 0.2s linear;
        opacity: 1;
        position: static
    }

    .hero-banner-section .title-block .string-replacement:after {
        content: '';
        display: block;
        position: absolute;
        top: 100%;
        left: 0;
        width: 220px;
        height: 25px;
        background-image: url("../images/decor/decor-string.svg");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 50% 50%
    }

    .hero-banner-section .title-block .decor-line {
        position: relative
    }

    .hero-banner-section .title-block .decor-line:after {
        content: '';
        display: block;
        position: absolute;
        top: 100%;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 180px;
        height: 20px;
        background-image: url("../images/decor/decor-string.svg");
        background-size: contain;
        background-repeat: no-repeat;
        background-position: 50% 50%
    }

    .hero-banner-section .text-block {
        display: none
    }

    .hero-banner-section .btn {
        width: 100%
    }

    .hero-banner-section .image-holder {
        height: 170px;
        position: relative
    }

    .hero-banner-section .image-holder.custom-margin-top {
        margin-top: -40px
    }

    .hero-banner-section .image-holder .lottie-custom {
        width: 125%;
        position: absolute;
        top: 50%;
        left: 55%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%)
    }

    .hero-banner-section .video-holder {
        position: relative;
        width: 100%;
        padding-top: 56.25%
    }

    .hero-banner-section .video-holder .video-block {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 10
    }

    .hero-banner-section .column-block .col-left {
        width: 100%
    }

    .hero-banner-section .column-block .col-right {
        width: 100%
    }

    .hero-banner-section .column-block .image-block img {
        width: 100%
    }

    .review-links-banner {
        list-style-type: none;
        margin: 0 0 30px;
        padding: 94px 0 0;
        position: relative
    }

    .review-links-banner:before {
        content: '';
        position: absolute;
        top: 0;
        left: 127px;
        width: 27px;
        height: 72px;
        background-position: 50% 50%;
        background-size: contain;
        background-repeat: no-repeat;
        background-image: url("../images/review-links-banner-decor.png")
    }

    .review-links-banner li {
        margin-bottom: 20px
    }

    .review-links-banner li:last-child {
        margin-bottom: 0
    }

    .review-links-banner li > span {
        display: block;
        font-size: 12px;
        padding-top: 10px
    }

    .review-links-banner li .btn {
        width: 100%
    }

    .contact-section {
        margin-bottom: 100px
    }

    .contact-section .banner-holder {
        margin-bottom: 30px
    }

    .contact-section .text-holder {
        margin-bottom: 30px
    }

    .contact-section .text-holder p:last-child {
        margin-bottom: 0
    }

    .contact-section .title-global-section {
        line-height: 1.2;
        margin-bottom: 8px;
        font-weight: 400
    }

    .contact-section .title-global-section strong {
        font-weight: 700
    }

    .contact-section .text-block {
        font-size: 22px;
        color: #757471;
        font-weight: 400
    }

    .contact-holder .contact-text-block {
        margin-bottom: 20px;
        width: 100%
    }

    .contact-holder .contact-text-holder {
        padding: 20px 20px 30px;
        height: 100%;
        margin-bottom: 30px
    }

    .contact-holder .contact-text-holder:last-child {
        margin-bottom: 0
    }

    .contact-holder .contact-text-holder.height-auto {
        height: auto
    }

    .contact-holder .contact-text-holder.bg-green a, .contact-holder .contact-text-holder.bg-green p, .contact-holder .contact-text-holder.bg-green li, .contact-holder .contact-text-holder.bg-green label {
        color: #fff
    }

    .contact-holder .contact-text-holder.bg-green .btn:hover {
        background: #fff;
        border-color: #fff;
        color: #151614
    }

    .contact-holder .contact-text-holder .image-block {
        margin: 0 -9px 40px
    }

    .contact-holder .contact-text-holder a, .contact-holder .contact-text-holder p, .contact-holder .contact-text-holder li {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 15px;
        line-height: 1.2
    }

    .contact-holder .contact-text-holder a:last-child, .contact-holder .contact-text-holder p:last-child, .contact-holder .contact-text-holder li:last-child {
        margin-bottom: 0
    }

    .contact-holder .contact-text-holder a {
        display: inline-block;
        vertical-align: top;
        text-decoration: none
    }

    .contact-holder .contact-text-holder ul {
        list-style-type: none;
        padding: 0;
        margin: 0
    }

    .contact-holder .contact-text-holder li {
        padding-left: 35px;
        position: relative;
        margin-bottom: 15px
    }

    .contact-holder .contact-text-holder li:before {
        content: '';
        position: absolute;
        top: 2px;
        left: 0;
        width: 20px;
        height: 14px;
        background-size: contain;
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-image: url("../images/icon-check.svg")
    }

    .contact-holder .contact-text-holder .questions-image-block {
        margin-bottom: 25px;
        text-align: center;
        line-height: 0
    }

    .contact-holder .contact-text-holder .questions-text {
        line-height: 1.2
    }

    .contact-holder .contact-text-holder .questions-text p {
        font-weight: 600;
        margin-bottom: 20px
    }

    .contact-holder .contact-text-holder .questions-text p, .contact-holder .contact-text-holder .questions-text li {
        font-size: 16px
    }

    .contact-holder .contact-text-holder .contact-form-holder {
        padding: 0;
        border: none
    }

    .contact-holder .contact-text-holder .contact-form-holder textarea {
        height: 105px;
        min-height: 105px
    }

    .contact-holder .contact-text-holder .contact-form-holder textarea.big {
        height: 340px;
        min-height: 340px
    }

    .contact-holder .contact-form-block {
        width: 100%
    }

    .contact-holder .contact-form-message {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        font-size: 16px;
        font-weight: 600;
        color: #fff;
        position: absolute;
        text-align: center;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        z-index: 10;
        padding: 20px 30px
    }

    .contact-holder .contact-form-message p, .contact-holder .contact-form-message a {
        font-size: 16px
    }

    .contact-holder .contact-form-message p:last-child, .contact-holder .contact-form-message a:last-child {
        margin-bottom: 0
    }

    .contact-holder .contact-form-holder {
        padding: 17px 35px 40px 30px;
        border: 1px solid #e8e8ec;
        height: 100%;
        position: relative
    }

    .contact-holder .contact-form-holder .form-column {
        margin-bottom: -14px
    }

    .contact-holder .contact-form-holder .form-column .form-row {
        margin-bottom: 14px
    }

    .contact-holder .contact-form-holder .form-column .form-control {
        font-size: 12px;
        padding-left: 20px;
        padding-right: 20px
    }

    .contact-holder .contact-form-holder .form-column .label-checkbox {
        padding: 0 0 0 30px
    }

    .contact-holder .contact-form-holder .form-row {
        margin-bottom: 29px
    }

    .contact-holder .contact-form-holder .form-row:last-child {
        margin-bottom: 0
    }

    .contact-holder .contact-form-holder .form-row-file:last-child {
        margin-bottom: 0
    }

    .contact-holder .contact-form-holder .form-row-file [type="file"] {
        display: none
    }

    .contact-holder .contact-form-holder .image-file {
        display: block;
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: url("../images/default-image.jpg");
        margin-bottom: 37px
    }

    .contact-holder .contact-form-holder p {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 45px
    }

    .contact-holder .contact-form-holder p.small {
        font-size: 14px
    }

    .contact-holder .contact-form-holder label {
        cursor: pointer;
        color: #151614;
        display: block;
        margin-bottom: 11px
    }

    .contact-holder .contact-form-holder label .text-label {
        font-size: inherit;
        display: block;
        margin: 0 0 11px
    }

    .contact-holder .contact-form-holder .form-control {
        border-color: #e8e8ec;
        margin-bottom: 0;
        padding-top: 16px;
        padding-bottom: 16px;
        line-height: 1.2
    }

    .contact-holder .contact-form-holder textarea {
        height: 165px;
        min-height: 165px
    }

    .contact-holder .contact-form-holder [type="submit"] {
        margin-top: 23px
    }

    .contact-holder .contact-form-holder .label-checkbox {
        padding: 0 0 0 35px;
        font-size: 12px;
        margin: 0
    }

    .contact-holder .contact-form-holder .label-checkbox:before {
        border: 2px solid #E6E3DA;
        width: 15px;
        height: 15px;
        top: 0;
        left: 0;
        -webkit-transform: translateY(0);
        transform: translateY(0)
    }

    .contact-holder .contact-form-holder .label-checkbox:after {
        top: 4px;
        left: 4px;
        width: 7px;
        height: 7px;
        border: none;
        background: #16CC8E;
        -webkit-transform: translateY(0) rotate(0);
        transform: translateY(0) rotate(0)
    }

    .contact-holder .contact-form-holder hr {
        margin: 43px 0 32px;
        height: 2px;
        border: none;
        background: #eeebe5
    }

    .contact-holder .contact-form-holder .contact-form-footer {
        border-top: 2px solid #E5EBEE;
        padding: 32px 0 20px;
        margin-top: 43px
    }

    .contact-holder .contact-form-holder .contact-form-footer p {
        font-weight: 600;
        margin-bottom: 20px
    }

    .banner-green-section + .banner-gray-section {
        margin-top: -50px
    }

    .banner-gray-section {
        position: relative;
        padding: 80px 0 94px
    }

    .banner-gray-section:after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 120vw;
        background: #E6E3DA;
        z-index: -1;
        opacity: 0.4
    }

    .banner-gray-section .text-holder {
        width: 100%;
        margin-bottom: 70px
    }

    .banner-gray-section .image-holder {
        width: 100%
    }

    .banner-gray-section .image-holder .lottie-custom {
        width: 335px;
        height: 280px;
        margin: 0 auto
    }

    .banner-gray-section .title-block {
        font-size: 40px;
        font-weight: 400;
        line-height: 1.3;
        margin-bottom: 41px
    }

    .banner-gray-section .title-block strong {
        font-weight: 900
    }

    .banner-green-text-section {
        padding: 50px 0;
        position: relative;
        color: #fff
    }

    .banner-green-text-section:after {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        width: 110vw;
        background: #16CC8E;
        z-index: -2
    }

    .banner-green-text-section .text-block {
        font-weight: 600;
        font-size: 22px;
        line-height: 1.76;
        margin-bottom: 46px
    }

    .banner-green-text-section .text-block p:last-child {
        margin-bottom: 0
    }

    .banner-green-text-section .text-block a {
        color: #fff;
        text-decoration: underline
    }

    .banner-green-text-section .text-block a:hover {
        text-decoration: none
    }

    .banner-green-text-section .btn:hover {
        background: #fff;
        color: #151614
    }

    .banner-demo-section {
        margin-bottom: 100px
    }

    .banner-demo-section .banner-demo-header {
        margin-bottom: 50px
    }

    .banner-demo-section .title-global-section {
        margin-bottom: 5px
    }

    .banner-demo-section .text-block p {
        margin-bottom: 10px
    }

    .banner-demo-section .text-block p:last-child {
        margin-bottom: 0
    }

    .banner-demo-section .column-item {
        width: 100%;
        margin-bottom: 20px
    }

    .is-active-menu {
        overflow: hidden;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .is-active-menu .header .menu-holder {
        opacity: 1;
        visibility: visible
    }

    .header {
        padding: 26px 0
    }

    .header .container {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between
    }

    .header .logo {
        width: 100%;
        max-width: 92px;
        position: relative;
        z-index: 110
    }

    .header .logo img {
        width: 100%
    }

    .header .hamburger {
        z-index: 110;
        position: relative
    }

    .header .menu-holder {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: #F5F4F0;
        z-index: 100;
        padding: 160px 20px 200px;
        -webkit-transition: 0.3s;
        transition: 0.3s;
        opacity: 0;
        visibility: hidden
    }

    .header .menu-block {
        height: 100%;
        overflow-y: auto
    }

    .header .menu {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .header .menu li {
        margin: 0 0 32px;
        text-align: center
    }

    .header .menu li.active a:after {
        opacity: 1;
        visibility: visible
    }

    .header .menu a {
        font-size: 24px;
        font-weight: 700;
        color: #151614;
        text-decoration: none;
        position: relative
    }

    .header .menu a:hover:after {
        opacity: 1;
        visibility: visible
    }

    .header .menu-btn {
        list-style-type: none;
        margin: 0;
        padding: 0;
        position: absolute;
        bottom: 60px;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%)
    }

    .header .menu-btn li {
        margin: 0 0 20px;
        text-align: center
    }

    .header .menu-btn li:last-child {
        margin: 0
    }

    .header .btn {
        min-width: 160px;
        padding: 10px 15px 11px
    }

    .header .btn-outline-gray {
        background: #fff
    }

    .footer {
        background: #151614;
        color: #fff;
        padding: 80px 0 30px
    }

    .footer .logo-holder {
        width: 100%;
        font-size: 16px;
        line-height: 1.6;
        font-weight: 400;
        margin-bottom: 55px;
        max-width: 300px;
        color: #757471
    }

    .footer .logo-holder strong {
        color: #fff
    }

    .footer .menu-holder {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin: 0 -15px
    }

    .footer .menu-col {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 50%;
        flex: 1 1 50%;
        padding: 0 15px;
        margin-bottom: 56px
    }

    .footer .menu-col:last-child {
        margin-bottom: 0
    }

    .footer .menu-col.menu-columns {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding: 0
    }

    .footer .menu-row {
        margin-bottom: 33px;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 50%;
        flex: 1 1 50%
    }

    .footer .menu-row:first-child {
        padding: 0 40px 0 39px
    }

    .footer .menu-row:last-child {
        padding: 0 15px;
        margin-bottom: 0
    }

    .footer .menu-row h3 {
        margin-bottom: 32px
    }

    .footer .menu {
        list-style-type: none;
        margin: 0;
        padding: 0
    }

    .footer .menu.menu-social {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        max-width: 110px
    }

    .footer .menu.menu-social li {
        width: 100%;
        max-width: 34%;
        margin-bottom: 28px
    }

    .footer .menu.menu-social a {
        display: inline-block;
        color: #fff;
        vertical-align: middle
    }

    .footer .menu.menu-social a:hover {
        color: #16CC8E
    }

    .footer .menu.menu-social a:after {
        display: none
    }

    .footer .menu li {
        margin-bottom: 14px
    }

    .footer .menu a {
        color: #757471;
        font-size: 14px;
        font-weight: 400;
        text-decoration: none
    }

    .footer .menu a:hover {
        color: #fff
    }

    .footer .menu .social-icon {
        display: block;
        width: 19px;
        height: 19px
    }

    .footer .menu .social-icon svg {
        max-width: 100%;
        max-height: 100%
    }

    .footer h3 {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 12px
    }

    .footer-logo {
        width: 100%;
        max-width: 120px;
        margin-bottom: 28px;
        display: block;
        line-height: 0
    }

    .footer-logo img {
        width: 100%
    }

    #wrapper {
        max-width: 100%;
        overflow: hidden;
        position: relative
    }

    .container {
        width: 100%;
        margin: 0 auto;
        padding: 0 20px;
        max-width: 1220px
    }

    .container.container-big {
        max-width: 1440px
    }

    .full-section {
        margin: 0 -20px
    }

    .title-global-section {
        font-size: 40px;
        font-weight: 600;
        line-height: 1.193
    }

    .title-global-section.big-title {
        font-size: 44px;
        font-weight: 400;
        line-height: 1.3
    }

    .title-global-section.mb-0 {
        margin-bottom: 0
    }

    .title-global-section strong {
        font-weight: 900
    }

    .tooltip {
        display: inline-block;
        vertical-align: top;
        cursor: pointer;
        width: 14px;
        height: 14px;
        background-repeat: no-repeat;
        background-position: 50% 50%;
        background-size: contain;
        background-image: url("../images/icon-tooltip.svg")
    }

    .tooltip-text {
        background: #fff;
        border: 1px solid #F5F4F0;
        padding: 10px 15px;
        border-radius: 2px;
        font-size: 12px;
        line-height: 1.2;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.2)
    }

    .only-section {
        margin-bottom: 80px
    }

    .slick-arrow {
        border: none;
        background: transparent;
        padding: 0;
        font-size: 16px;
        font-weight: 600;
        color: #151614;
        line-height: 1.1875;
        outline: none
    }

    .slick-arrow.slick-disabled {
        opacity: 0.4
    }

    .slick-arrow.slick-prev:before {
        content: '';
        width: 8px;
        height: 8px;
        background: currentColor;
        border-radius: 50%;
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
        margin-top: 5px
    }

    .slick-arrow.slick-next:after {
        content: '';
        width: 8px;
        height: 8px;
        background: currentColor;
        border-radius: 50%;
        display: inline-block;
        vertical-align: top;
        margin-left: 10px;
        margin-top: 5px
    }

    .fancybox-slide--html {
        padding: 40px 6px
    }

    .fancybox-is-open .fancybox-bg {
        opacity: 1
    }

    .fancybox-bg {
        background: #EEEBE5
    }

    .popup-content {
        padding: 70px 20px;
        position: relative;
        width: 90%
    }

    .popup-content.popup-copywriting {
        padding: 0;
        background: transparent
    }

    .popup-content.popup-project {
        padding: 33px 20px 70px
    }

    .popup-content .fancybox-close-small {
        position: fixed;
        top: 5px;
        right: 5px;
        padding: 5px
    }

    .popup-content .preview-video .video-holder {
        position: relative;
        padding-top: 65.25%;
        width: 100%
    }

    .popup-content .preview-video iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%
    }

    .popup-content .preview-image, .popup-content .preview-video {
        width: 100%;
        max-width: 770px;
        margin: 0 auto;
        text-align: center;
        line-height: 0
    }

    .popup-content .preview-copywriting {
        width: 100%;
        text-align: center;
        line-height: 0;
        position: relative
    }

    .popup-content .preview-copywriting img {
        width: 100%;
        border-bottom: 10px solid #EEEBE5
    }

    .popup-content .preview-copywriting img:last-child {
        border-bottom: none
    }

    .popup-content .preview-copywriting .btn {
        display: none
    }

    .popup-content .popup-audio-holder {
        width: 100%;
        max-width: 390px;
        margin: 0 auto;
        text-align: center;
        line-height: 0
    }

    .popup-content .popup-link {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.13;
        position: absolute;
        top: 20px;
        right: 20px;
        text-decoration: none;
        color: black;
        max-width: 45%
    }

    .popup-content .popup-link:hover {
        color: #16CC8E
    }

    .popup-content .title-block {
        font-size: 16px;
        font-weight: 600;
        line-height: 1.13;
        position: absolute;
        top: 20px;
        left: 20px;
        max-width: 45%
    }

    .popup-content .caption-block {
        font-size: 12px;
        font-weight: 400;
        position: absolute;
        bottom: 12px;
        right: 12px;
        color: #151614
    }

    .popup-content .caption-block:before {
        content: '';
        display: inline-block;
        vertical-align: middle;
        width: 4px;
        height: 4px;
        background: currentColor;
        border-radius: 50%;
        margin-right: 8px;
        margin-top: -2px
    }

    .popup-content .caption-block strong {
        font-weight: 600
    }

    .js-tab-hidden {
        display: block !important;
        left: -9999px !important;
        position: absolute !important;
        top: -9999px !important
    }

    img.grayscale {
        filter: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg'><filter id='grayscale'><feColorMatrix type='matrix' values='0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0'/></filter></svg>#grayscale");
        filter: gray;
        -webkit-filter: grayscale(100%)
    }

    .bg-green {
        background: #16CC8E
    }

    .bg-red {
        background: #f0564c
    }

    .bg-gray {
        background: rgba(230, 227, 218, 0.4)
    }

    .text-green {
        color: #16CC8E
    }

    .text-red {
        color: #f0564c
    }

    .text-blue {
        color: #4267b2
    }

    .font-weight-bold {
        font-weight: 700
    }

    .mb-0 {
        margin-bottom: 0
    }

    .btn-group {
        font-size: 0;
        margin-bottom: -10px
    }

    .btn-group .btn {
        margin-right: 12px;
        margin-bottom: 10px
    }

    .btn-group .btn:last-child {
        margin-right: 0
    }

    .btn {
        font-size: 16px;
        line-height: 1.19;
        border-radius: 0;
        font-weight: 600;
        background: #151614;
        padding: 16px 15px 16px 15px;
        color: #fff;
        border: 1px solid #151614;
        text-decoration: none;
        min-width: 140px;
        position: relative;
        text-align: center;
        -webkit-transition: 0.3s;
        transition: 0.3s
    }

    .btn:hover {
        background: #16CC8E;
        border-color: #16CC8E
    }

    .btn:before {
        -webkit-transition: 0.3s;
        transition: 0.3s;
        content: '';
        background: currentColor;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        display: inline-block;
        vertical-align: top;
        margin-right: 10px;
        margin-top: 5px
    }

    .btn.no-dot {
        padding-left: 20px;
        padding-right: 20px;
        text-align: center
    }

    .btn.no-dot:before, .btn.no-dot:after {
        display: none
    }

    .btn.no-dot.btn-green {
        color: #151614
    }

    .btn.no-dot.btn-green:hover {
        color: #fff
    }

    .btn.no-animate {
        padding-left: 15px;
        padding-right: 15px;
        text-align: center
    }

    .btn.no-animate:before {
        position: static;
        -webkit-transform: translate(0, 0);
        transform: translate(0, 0);
        margin-right: 10px;
        margin-top: 6px;
        -webkit-transition: 0s;
        transition: 0s
    }

    .btn.no-animate:after {
        display: none
    }

    .btn.no-animate.icon-trustpilot, .btn.no-animate.icon-g2 {
        padding: 16px 15px 16px 65px
    }

    .btn.no-animate.icon-trustpilot:after, .btn.no-animate.icon-g2:after {
        content: '';
        display: block;
        position: absolute;
        top: -1px;
        bottom: -1px;
        left: -1px;
        right: auto;
        width: 50px;
        height: auto;
        -webkit-transform: none;
        transform: none;
        background-color: #151614;
        background-position: 50% 50%;
        background-size: 30px;
        background-repeat: no-repeat;
        z-index: 10
    }

    .btn.no-animate.icon-g2:after {
        background-image: url("../images/icon-g2.png")
    }

    .btn.no-animate.icon-trustpilot:after {
        background-image: url("../images/icon-trustpilot.png")
    }

    .btn.btn-green {
        background: #16CC8E;
        border-color: #16CC8E
    }

    .btn.btn-green:hover {
        background: #151614;
        border-color: #151614
    }

    .btn.btn-red {
        background: #f0564c;
        border-color: #f0564c
    }

    .btn.btn-red:hover {
        background: #151614;
        border-color: #151614
    }

    .btn.btn-outline {
        background: transparent;
        color: #151614
    }

    .btn.btn-outline:hover {
        border-color: #16CC8E
    }

    .btn.btn-outline-white {
        background: transparent;
        color: #fff;
        border-color: #fff
    }

    .btn.btn-outline-white:hover {
        border-color: #16CC8E
    }

    .btn.btn-outline-gray {
        color: #151614;
        border-color: #E5EBEE;
        background: transparent
    }

    .btn.btn-outline-gray:hover {
        border-color: #16CC8E
    }

    .btn-circle {
        display: inline-block;
        vertical-align: middle;
        width: 80px;
        height: 80px;
        border-radius: 50px;
        border: none;
        background: #151614;
        position: relative;
        -webkit-transition: 0.3s;
        transition: 0.3s
    }

    .btn-circle:hover {
        background: #16CC8E
    }

    .btn-circle span {
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        width: 42px;
        height: 4px;
        background: #fff
    }

    .btn-circle span:before, .btn-circle span:after {
        content: '';
        background: #fff;
        height: 4px;
        position: absolute;
        left: 0
    }

    .btn-circle span:before {
        width: 100%;
        top: -9px
    }

    .btn-circle span:after {
        width: 60%;
        bottom: -9px
    }

    .resize-active * {
        -webkit-transition: none !important;
        transition: none !important
    }

    @media (min-width: 375px) {
        .hero-banner-section .title-block {
            font-size: 44px
        }

        .btn {
            min-width: 160px
        }
    }

    @media (min-width: 480px) {
        .hero-banner-section .image-holder {
            height: 200px
        }

        .banner-demo-section .column-list {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -20px
        }

        .banner-demo-section .column-item {
            max-width: 50%;
            padding: 0 20px;
            margin-bottom: 0
        }
    }

    @media (min-width: 768px) {
        .form-column {
            margin: 0 -10px -14px
        }

        .form-column .form-row {
            max-width: 50%;
            padding: 0 10px
        }

        .hero-banner-section {
            margin-bottom: 20px
        }

        .hero-banner-section.custom-section .text-block {
            margin-bottom: 53px
        }

        .hero-banner-section .title-block {
            min-height: 115px
        }

        .hero-banner-section .title-block .decor-line:after {
            width: 220px;
            height: 25px
        }

        .hero-banner-section .text-block {
            color: #757471;
            font-size: 18px;
            display: block;
            line-height: 1.6;
            margin-bottom: 36px
        }

        .hero-banner-section .btn {
            width: auto
        }

        .hero-banner-section .image-holder {
            height: 270px
        }

        .hero-banner-section .column-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex
        }

        .hero-banner-section .column-block .col-left {
            padding-right: 40px
        }

        .review-links-banner li .btn {
            max-width: 380px
        }

        .contact-holder {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -10px
        }

        .contact-holder.contact-holder-reverse {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse
        }

        .contact-holder .contact-text-block {
            margin-bottom: 0;
            padding: 0 10px;
            max-width: 50%
        }

        .contact-holder .contact-form-block {
            padding: 0 10px;
            max-width: 50%
        }

        .banner-gray-section {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .banner-gray-section .text-holder {
            max-width: 50%;
            margin-bottom: 0
        }

        .banner-gray-section .image-holder {
            max-width: 50%
        }

        .header .logo {
            max-width: 120px
        }

        .footer .menu-col {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 33.33%;
            flex: 1 1 33.33%
        }

        .footer .menu-col.menu-columns {
            display: block
        }

        .footer .menu-row:first-child {
            padding: 0
        }

        .footer .menu-row:last-child {
            padding: 0
        }

        .footer-logo {
            max-width: 121px
        }

        .title-global-section.small-title {
            font-size: 32px
        }

        .tooltip-text {
            width: 100%;
            max-width: 350px;
            text-align: center
        }

        .popup-content {
            padding: 115px 40px
        }

        .popup-content.popup-project {
            padding: 33px 40px 115px
        }

        .popup-content.popup-project .fancybox-close-small {
            top: 10px;
            right: 10px
        }

        .popup-content .fancybox-close-small {
            top: 20px;
            right: 20px
        }

        .popup-content .popup-link {
            font-size: 24px;
            top: 40px;
            right: 30px
        }

        .popup-content .title-block {
            font-size: 24px;
            top: 40px;
            left: 30px
        }

        .popup-content .caption-block {
            bottom: 37px;
            right: 43px
        }

        .btn {
            padding: 16px 42px 16px 59px;
            text-align: left
        }

        .btn:hover:before {
            left: 28px
        }

        .btn:hover:after {
            width: 15px
        }

        .btn:before {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 42px;
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%)
        }

        .btn:after {
            -webkit-transition: 0.3s;
            transition: 0.3s;
            content: '';
            background: currentColor;
            width: 0;
            height: 2px;
            position: absolute;
            top: 50%;
            right: calc(100% - 55px);
            -webkit-transform: translate(0, -50%);
            transform: translate(0, -50%)
        }

        .btn.no-animate {
            min-width: 232px
        }

        .btn.no-animate.icon-trustpilot, .btn.no-animate.icon-g2 {
            padding: 16px 42px 16px 89px
        }
    }

    @media (min-width: 1024px) {
        .hero-banner-section .image-holder {
            height: 400px
        }

        .review-links-banner li {
            margin-bottom: 40px
        }

        .contact-holder .contact-text-block {
            max-width: 500px
        }

        .contact-holder .contact-form-block {
            max-width: calc(100% - 480px)
        }

        .banner-gray-section .image-holder .lottie-custom {
            width: 455px;
            height: 387px
        }

        .is-active-menu {
            position: static;
            overflow: visible
        }

        .header {
            padding: 32px 0
        }

        .header .hamburger {
            display: none
        }

        .header .menu-holder {
            padding: 0;
            background: transparent;
            position: static;
            opacity: 1;
            visibility: visible
        }

        .header .menu-block {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            overflow: visible
        }

        .header .menu {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center
        }

        .header .menu li {
            margin: 0 20px
        }

        .header .menu a {
            font-size: 16px
        }

        .header .menu a:after {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #16CC8E;
            position: absolute;
            left: 50%;
            bottom: -10px;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
            opacity: 0;
            visibility: hidden;
            -webkit-transition: 0.3s;
            transition: 0.3s
        }

        .header .menu-btn {
            position: static;
            -webkit-transform: translateX(0);
            transform: translateX(0);
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -10px
        }

        .header .menu-btn li {
            margin: 0 10px
        }

        .header .menu-btn li:last-child {
            margin: 0 10px
        }

        .header .btn {
            min-width: 110px
        }
    }

    @media (min-width: 1200px) {
        .hero-banner-section {
            padding-top: 46px;
            margin-bottom: 28px
        }

        .hero-banner-section.is-video {
            margin-bottom: 149px
        }

        .hero-banner-section.is-video .title-block {
            margin-bottom: 20px
        }

        .hero-banner-section.custom-section {
            padding-top: 92px;
            margin-bottom: 129px
        }

        .hero-banner-section.custom-section .title-block {
            margin-bottom: 20px
        }

        .hero-banner-section.custom-margin-bottom {
            margin-bottom: 40px;
            padding-top: 46px
        }

        .hero-banner-section .text-holder {
            margin-bottom: 0
        }

        .hero-banner-section .text-holder.mb-30 {
            margin-bottom: 0
        }

        .hero-banner-section .text-holder.mb-20 {
            margin-bottom: 20px
        }

        .hero-banner-section .text-holder.mb-70 {
            margin-bottom: 70px
        }

        .hero-banner-section .text-holder:only-child {
            margin-bottom: 170px
        }

        .hero-banner-section .title-block {
            min-height: 0;
            font-size: 64px;
            line-height: 1.25;
            margin-bottom: 20px
        }

        .hero-banner-section .title-block .decor-line.small:after {
            width: 220px;
            height: 25px
        }

        .hero-banner-section .title-block .decor-line:after {
            width: 311px;
            height: 35px
        }

        .hero-banner-section .text-block {
            font-size: 22px
        }

        .hero-banner-section .image-holder {
            height: 530px
        }

        .hero-banner-section .image-holder.custom-margin-top {
            margin-top: -140px
        }

        .hero-banner-section .image-holder .lottie-custom {
            width: 1690px
        }

        .hero-banner-section .column-block .col-left {
            width: 40%;
            padding-right: 55px
        }

        .hero-banner-section .column-block .col-right {
            width: 60%
        }

        .contact-section {
            margin-bottom: 165px
        }

        .contact-section .banner-holder {
            margin-bottom: 50px
        }

        .contact-section .text-holder {
            margin-bottom: 52px
        }

        .contact-holder {
            margin: 0 -30px
        }

        .contact-holder .contact-text-block {
            padding: 0 30px
        }

        .contact-holder .contact-text-holder {
            padding: 45px 20px 30px;
            margin-bottom: 57px
        }

        .contact-holder .contact-text-holder:last-child {
            margin-bottom: 0
        }

        .contact-holder .contact-text-holder.custom-block {
            padding: 25px 23px 30px
        }

        .contact-holder .contact-text-holder .image-block {
            margin: 0 -14px 72px
        }

        .contact-holder .contact-text-holder a, .contact-holder .contact-text-holder p, .contact-holder .contact-text-holder li {
            font-size: 22px;
            margin-bottom: 27px
        }

        .contact-holder .contact-text-holder li {
            margin-bottom: 19px
        }

        .contact-holder .contact-form-block {
            padding: 0 30px
        }

        .contact-holder .contact-form-message {
            font-size: 22px
        }

        .contact-holder .contact-form-message p, .contact-holder .contact-form-message a {
            font-size: 22px
        }

        .contact-holder .contact-form-holder {
            border-width: 2px
        }

        .contact-holder .contact-form-holder .form-row-file {
            margin-bottom: 75px
        }

        .contact-holder .contact-form-holder .form-control {
            border-width: 2px
        }

        .banner-green-section + .banner-gray-section {
            margin-top: -157px
        }

        .banner-gray-section {
            padding: 137px 0 144px
        }

        .banner-gray-section .text-holder {
            max-width: 522px;
            padding-bottom: 67px
        }

        .banner-gray-section .image-holder {
            max-width: calc(100% - 478px);
            margin: 0 -5px 0 -40px
        }

        .banner-gray-section .image-holder .lottie-custom {
            width: 658px;
            height: 548px
        }

        .banner-gray-section .title-block {
            font-size: 54px;
            line-height: 1.16;
            margin-bottom: 50px
        }

        .banner-green-text-section {
            padding: 103px 0 100px
        }

        .banner-green-text-section .text-block {
            font-size: 34px
        }

        .banner-demo-section {
            margin-bottom: 152px
        }

        .banner-demo-section .banner-demo-header {
            margin-bottom: 100px
        }

        .banner-demo-section .text-block p {
            margin-bottom: 15px
        }

        .banner-demo-section .column-list {
            margin: 0 -39px
        }

        .banner-demo-section .column-item {
            padding: 0 39px
        }

        .header .menu {
            margin-right: 88px
        }

        .footer {
            padding: 86px 0 62px
        }

        .footer .container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between
        }

        .footer .logo-holder {
            margin-bottom: 0
        }

        .footer .menu-holder {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap;
            margin: 0;
            padding-top: 10px;
            padding-right: 90px
        }

        .footer .menu-col {
            margin-right: 69px;
            margin-bottom: 0;
            padding: 0;
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto
        }

        .footer .menu-col:last-child {
            margin-right: 0
        }

        .footer .menu-row h3 {
            margin-bottom: 40px
        }

        .full-section {
            margin: 0;
            width: 100vw;
            position: relative;
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .title-global-section {
            font-size: 56px
        }

        .title-global-section.small-title {
            font-size: 52px
        }

        .title-global-section.big-title {
            font-size: 64px
        }

        .only-section {
            margin-bottom: 137px
        }

        .popup-content {
            width: 100%;
            max-width: 1180px
        }

        .popup-content .fancybox-close-small {
            top: 48px;
            right: 60px;
            padding: 0
        }

        .popup-content .preview-image, .popup-content .preview-video {
            margin: -80px auto
        }

        .popup-content .preview-copywriting img.hide {
            display: none
        }

        .popup-content .preview-copywriting .btn {
            display: inline-block;
            bottom: 40px;
            position: absolute;
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%)
        }

        .popup-content .popup-link {
            right: 60px
        }

        .popup-content .title-block {
            left: 60px
        }

        .btn {
            min-width: 176px
        }
    }

    @media (min-width: 1500px) {
        .hero-banner-section.custom-margin-bottom .image-holder picture {
            margin: 0 -100px
        }

        .header .container.container-big .logo {
            max-width: 150px
        }

        .header .container.container-big .menu {
            margin-right: 95px
        }

        .header .container.container-big .menu li {
            margin: 0 30px
        }

        .header .container.container-big .btn {
            padding-top: 15px;
            padding-bottom: 15px;
            min-width: 140px
        }

        .footer .container.container-big .footer-logo {
            max-width: 150px
        }

        .container-big .btn {
            padding-top: 22px;
            padding-bottom: 22px
        }
    }

    @media all and (max-height: 576px) {
        .fancybox-slide {
            padding-left: 6px;
            padding-right: 6px
        }

        .fancybox-slide--image {
            padding: 6px 0
        }

        .fancybox-close-small {
            right: -6px
        }

        .fancybox-slide--image .fancybox-close-small {
            background: #4e4e4e;
            color: #f2f4f6;
            height: 36px;
            opacity: 1;
            padding: 6px;
            right: 0;
            top: 0;
            width: 36px
        }

        .fancybox-caption {
            padding-left: 12px;
            padding-right: 12px
        }

        @supports (padding: 0px) {
            .fancybox-caption {
                padding-left: 12px;
                padding-right: 12px
            }
        }
    }

    @media all and (max-width: 576px) {
        .fancybox-thumbs {
            width: 110px
        }

        .fancybox-show-thumbs .fancybox-inner {
            right: 110px
        }

        .fancybox-thumbs__list a {
            max-width: calc(100% - 10px)
        }
    }

    @media (max-height: 500px) {
        .header .menu-holder {
            padding: 100px 20px 50px
        }

        .header .menu-btn {
            position: static;
            -webkit-transform: translateX(0);
            transform: translateX(0)
        }
    }

    @media (max-width: 767px) {
        .hover-tooltip {
            left: 20px !important;
            right: 20px !important;
            width: calc(100% - 40px) !important
        }
    }

    @media print {
        body {
            background: #fff;
            color: #151614;
            overflow: visible
        }

        * {
            color: #151614 !important;
            background: none !important
        }

        .search-form, .navigation, .navigation-single, #header, #footer {
            display: none !important
        }
    }

    /*# sourceMappingURL=schedule-a-demo-style.css.map */

</style>
<div class="page-holder">
    <div id="wrapper">
        <main id="main" class="main">
            <div class="container">

                <div class="hero-banner-section is-video">
                    <div class="text-holder">
                        <h1 class="title-block">Schedule <strong>a Demo</strong></h1>
                        <div class="text-block">
                            <p>Join us for a live demo that walks you through the platform and process within just minutes.</p>
                        </div>
                    </div>
                    <div class="column-list">

                        <div class="column-item">
                            <div class="image-block text-center">
                                <!-- Calendly inline widget begin -->
                                <div class="calendly-inline-widget" data-url="https://calendly.com/flocksy/flocksy-demo" style="min-width:320px;height:700px;"></div>
                                <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                                <!-- Calendly inline widget end -->

                            </div>
                        </div>

                    </div>

                    <div class="contact-section" style="margin:90px 0 0 0">
                        <div class="text-holder">
                            <h2 class="title-global-section"><strong>Have Questions?</strong></h2>
                            <div class="text-block"></div>
                        </div>
                        <div class="contact-holder">
                            <div class="contact-text-block">
                                <div class="contact-text-holder bg-green custom-block">
                                    <div class="questions-image-block">
                                        <img src="https://flocksy.com/images/contact-section02.png" alt="Have Questions?">
                                    </div>
                                    <div class="questions-text">
                                        <p>Join us for an on-demand demo that walks you through the platform and process within just minutes.</p>
                                        <ul>
                                            <li>Unlimited projects, revisions, brands, templates, and more</li>
                                            <li>A vetted creative team and dedicated Project Manager</li>
                                            <li>Fast turnarounds and quality work</li>
                                            <li>14-Day Money-Back Guarantee</li>
                                            <li>Join our Facebook Group here and see what existing clients are saying</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form-block">
                                <div class="contact-form-holder">
                                    <div class="contact-form-message bg-green" style="display: none">
                                        <p>We will contact you shortly. <br>You can also give us a call at (877) 263-7389</p>
                                    </div>
                                    <form class="form form-submit">
                                        <input type="hidden" name="action" value="contactFormSubmission">
                                        <input type="hidden" name="form_id" value="schedule-demo">
                                        <p>Response time is usually within an hour during business hours. <br><br>You can also call us at <strong>(877) 263-7389</strong>. We would
                                            love to talk. </p>
                                        <div class="form-row">
                                            <label for="name">Subject</label>
                                            <input type="text" id="Subject" name="name" class="form-control" required>
                                        </div>
                                        <div class="form-row">
                                            <label for="email">Email</label>
                                            <input type="email" id="email" name="email" class="form-control" required>
                                        </div>
                                        <div class="form-row">
                                            <label for="message">Message</label>
                                            <textarea class="form-control" name="message" id="message" required></textarea>
                                        </div>
                                        <div class="text-right">
                                            <button type="submit" class="btn">Submit message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="banner-green-text-section text-center">
                    <div class="text-block">
                        <p>Once you've watched or scheduled a demo, <a href="https://www.facebook.com/groups/3329274710435975" target="_blank">join the Flocksy Facebook group</a>
                            and see what others are saying about
                            <a href="/">Flocksy</a></p>
                    </div>
                    <a href="https://www.facebook.com/groups/3329274710435975" class="btn no-animate">Join Now</a>
                </div>

            </div>
        </main>
    </div>
</div>
<?php get_footer(); ?>

<script>
    jQuery(document).ready(function () {
        jQuery(".form-submit").each(function () {
            var e = jQuery(this);
            e.submit(function (t) {
                t.preventDefault();
                t = e.serialize();
                jQuery.ajax({
                    type: "post",
                    data: t,
                    url: "<?php echo admin_url('admin-ajax.php'); ?>",
                    dataType: "json",
                    success: function (t) {
                        console.log(t);
                        try {
                            t.success ? (jQuery(".contact-form-message").css("display", "flex"), e[0].reset()) : alert("error");
                        } catch (t) {
                            console.log(t), alert("error");
                        }
                    },
                    error: function (t) {
                        console.log("erorr");
                        console.log(t);
                    },
                });
            });
        });
    });
</script>
