<style> 
html {
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box
}

*,*:before,*:after {
    -moz-box-sizing: inherit;
    -webkit-box-sizing: inherit;
    box-sizing: inherit
}

button,input,select,textarea {
    font-family: inherit
}

a {
    color: #005eb8
}

a:visited {
    color: #330072
}

a:hover {
    color: #7c2855;
    text-decoration: none
}

a:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

a:focus:hover {
    text-decoration: none
}

a:focus:visited {
    color: #212b32
}

a:focus .nhsuk-icon {
    fill: #212b32
}

a:active {
    color: #002f5c
}

@media print {
    a:after {
        color: #212b32;
        content: " (Link: " attr(href) ")";
        font-size: 14pt
    }
}

.nhsuk-link--no-visited-state:link {
    color: #005eb8
}

.nhsuk-link--no-visited-state:visited {
    color: #005eb8
}

.nhsuk-link--no-visited-state:hover {
    color: #7c2855
}

.nhsuk-link--no-visited-state:active {
    color: #002f5c
}

.nhsuk-link--no-visited-state:focus {
    color: #212b32
}

html {
    background-color: #d8dde0;
    overflow-y: scroll;
    font-family: Frutiger W01,Arial,Sans-serif
}

@font-face {
    font-display: swap;
    font-family: "Frutiger W01";
    font-style: normal;
    font-weight: 400;
    src: url("https://assets.nhs.uk/fonts/FrutigerLTW01-55Roman.eot?#iefix");
    src: url("https://assets.nhs.uk/fonts/FrutigerLTW01-55Roman.eot?#iefix") format("eot"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-55Roman.woff2") format("woff2"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-55Roman.woff") format("woff"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-55Roman.ttf") format("truetype"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-55Roman.svg#7def0e34-f28d-434f-b2ec-472bde847115") format("svg")
}

@font-face {
    font-display: swap;
    font-family: "Frutiger W01";
    font-style: normal;
    font-weight: 600;
    src: url("https://assets.nhs.uk/fonts/FrutigerLTW01-65Bold.eot?#iefix");
    src: url("https://assets.nhs.uk/fonts/FrutigerLTW01-65Bold.eot?#iefix") format("eot"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-65Bold.woff2") format("woff2"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-65Bold.woff") format("woff"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-65Bold.ttf") format("truetype"),url("https://assets.nhs.uk/fonts/FrutigerLTW01-65Bold.svg#eae74276-dd78-47e4-9b27-dac81c3411ca") format("svg")
}

body {
    background-color: #f0f4f5;
    color: #212b32;
    font-size: 16px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    line-height: 1.5;
    margin: 0;
    min-height: 100%
}

table {
    margin-bottom: 40px;
    border-spacing: 0;
    vertical-align: top;
    width: 100%
}

@media(min-width: 40.0625em) {
    table {
        margin-bottom:48px
    }
}

@media print {
    table {
        page-break-inside: avoid
    }
}

thead th {
    border-bottom: 2px solid #d8dde0
}

th,td {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    padding-bottom: 8px;
    padding-right: 16px;
    padding-top: 8px;
    border-bottom: 1px solid #d8dde0;
    text-align: left;
    vertical-align: top
}

@media(min-width: 40.0625em) {
    th,td {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    th,td {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    th,td {
        padding-bottom:16px
    }
}

@media(min-width: 40.0625em) {
    th,td {
        padding-right:24px
    }
}

@media(min-width: 40.0625em) {
    th,td {
        padding-top:16px
    }
}

th:last-child,td:last-child {
    padding-right: 0
}

th {
    font-weight: 600
}

caption {
    font-weight: 600;
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 1.55556;
    text-align: left
}

@media(min-width: 40.0625em) {
    caption {
        font-size:22px;
        font-size: 1.375rem;
        line-height: 1.45455
    }
}

@media print {
    caption {
        font-size: 18pt;
        line-height: 1.15
    }
}

.nhsuk-form-group {
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-form-group {
        margin-bottom:24px
    }
}

.nhsuk-form-group .nhsuk-form-group:last-of-type {
    margin-bottom: 0
}

.nhsuk-form-group--wrapper {
    margin-bottom: 24px
}

@media(min-width: 40.0625em) {
    .nhsuk-form-group--wrapper {
        margin-bottom:32px
    }
}

.nhsuk-form-group--error {
    border-left: 4px solid #d5281b;
    padding-left: 16px
}

.nhsuk-form-group--error .nhsuk-form-group {
    border: 0;
    padding: 0
}

.nhsuk-grid-row {
    margin-left: -16px;
    margin-right: -16px
}

.nhsuk-grid-row:after {
    clear: both;
    content: "";
    display: block
}

.nhsuk-grid-column-one-quarter {
    box-sizing: border-box;
    padding: 0 16px
}

@media(min-width: 48.0625em) {
    .nhsuk-grid-column-one-quarter {
        float:left;
        width: 25%
    }
}

.nhsuk-grid-column-one-third {
    box-sizing: border-box;
    padding: 0 16px
}

@media(min-width: 48.0625em) {
    .nhsuk-grid-column-one-third {
        float:left;
        width: 33.3333%
    }
}

.nhsuk-grid-column-one-half {
    box-sizing: border-box;
    padding: 0 16px
}

@media(min-width: 48.0625em) {
    .nhsuk-grid-column-one-half {
        float:left;
        width: 50%
    }
}

.nhsuk-grid-column-two-thirds {
    box-sizing: border-box;
    padding: 0 16px
}

@media(min-width: 48.0625em) {
    .nhsuk-grid-column-two-thirds {
        float:left;
        width: 66.6666%
    }
}

.nhsuk-grid-column-three-quarters {
    box-sizing: border-box;
    padding: 0 16px
}

@media(min-width: 48.0625em) {
    .nhsuk-grid-column-three-quarters {
        float:left;
        width: 75%
    }
}

.nhsuk-grid-column-full {
    box-sizing: border-box;
    padding: 0 16px
}

@media(min-width: 48.0625em) {
    .nhsuk-grid-column-full {
        float:left;
        width: 100%
    }
}

.nhsuk-main-wrapper {
    padding-top: 40px;
    padding-bottom: 40px;
    display: block
}

@media(min-width: 40.0625em) {
    .nhsuk-main-wrapper {
        padding-top:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-main-wrapper {
        padding-bottom:48px
    }
}

.nhsuk-main-wrapper>*:first-child {
    margin-top: 0
}

.nhsuk-main-wrapper>*:last-child {
    margin-bottom: 0
}

.nhsuk-main-wrapper--l {
    padding-top: 48px
}

@media(min-width: 40.0625em) {
    .nhsuk-main-wrapper--l {
        padding-top:56px
    }
}

.nhsuk-main-wrapper--s {
    padding-bottom: 24px;
    padding-top: 24px
}

@media(min-width: 40.0625em) {
    .nhsuk-main-wrapper--s {
        padding-bottom:32px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-main-wrapper--s {
        padding-top:32px
    }
}

.nhsuk-width-container {
    margin: 0 16px;
    max-width: 960px
}

@media(min-width: 48.0625em) {
    .nhsuk-width-container {
        margin:0 32px
    }
}

@media(min-width: 1024px) {
    .nhsuk-width-container {
        margin:0 auto
    }
}

.nhsuk-width-container-fluid {
    margin: 0 16px;
    max-width: 100%
}

@media(min-width: 48.0625em) {
    .nhsuk-width-container-fluid {
        margin:0 32px
    }
}

.nhsuk-icon {
    height: 34px;
    width: 34px
}

.nhsuk-icon__search {
    fill: #005eb8
}

.nhsuk-icon__chevron-left {
    fill: #005eb8
}

.nhsuk-icon__chevron-right {
    fill: #005eb8
}

.nhsuk-icon__close {
    fill: #005eb8
}

.nhsuk-icon__cross {
    fill: #d5281b
}

.nhsuk-icon__tick {
    stroke: #007f3b
}

.nhsuk-icon__arrow-right {
    fill: #005eb8
}

.nhsuk-icon__arrow-left {
    fill: #005eb8
}

.nhsuk-icon__arrow-right-circle {
    fill: #007f3b
}

.nhsuk-icon__chevron-down {
    fill: #fff;
    height: 24px;
    position: absolute;
    right: 4px;
    transform: rotate(90deg);
    width: 24px
}

.nhsuk-icon__chevron-up {
    fill: #005eb8
}

.nhsuk-icon__chevron-up path {
    fill: #fff
}

.nhsuk-icon__emdash path {
    fill: #aeb7bd
}

.nhsuk-icon__plus {
    fill: #005eb8
}

.nhsuk-icon__minus {
    fill: #005eb8
}

.nhsuk-icon--size-25 {
    height: 42.5px;
    width: 42.5px
}

.nhsuk-icon--size-50 {
    height: 51px;
    width: 51px
}

.nhsuk-icon--size-75 {
    height: 59.5px;
    width: 59.5px
}

.nhsuk-icon--size-100 {
    height: 68px;
    width: 68px
}

ol,ul,.nhsuk-list {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 16px;
    list-style-type: none;
    margin-top: 0;
    padding-left: 0
}

@media(min-width: 40.0625em) {
    ol,ul,.nhsuk-list {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    ol,ul,.nhsuk-list {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    ol,ul,.nhsuk-list {
        margin-bottom:24px
    }
}

ol>li,ul>li,.nhsuk-list>li {
    margin-bottom: 8px
}

@media(min-width: 40.0625em) {
    ol>li,ul>li,.nhsuk-list>li {
        margin-bottom:8px
    }
}

ol>li:last-child,ul>li:last-child,.nhsuk-list>li:last-child {
    margin-bottom: 0
}

ul,.nhsuk-list--bullet {
    list-style-type: disc;
    padding-left: 20px
}

ol,.nhsuk-list--number {
    list-style-type: decimal;
    padding-left: 20px
}

.nhsuk-list--tick,.nhsuk-list--cross {
    list-style: none;
    margin-top: 0;
    padding-left: 40px;
    position: relative
}

.nhsuk-list--tick svg,.nhsuk-list--cross svg {
    left: -4px;
    margin-top: -5px;
    position: absolute
}

hr,.nhsuk-section-break {
    border: 0;
    margin: 0
}

.nhsuk-section-break--xl {
    margin-top: 48px;
    margin-bottom: 48px
}

@media(min-width: 40.0625em) {
    .nhsuk-section-break--xl {
        margin-top:56px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-section-break--xl {
        margin-bottom:56px
    }
}

hr,.nhsuk-section-break--l {
    margin-top: 32px;
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    hr,.nhsuk-section-break--l {
        margin-top:40px
    }
}

@media(min-width: 40.0625em) {
    hr,.nhsuk-section-break--l {
        margin-bottom:40px
    }
}

.nhsuk-section-break--m {
    margin-top: 16px;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-section-break--m {
        margin-top:24px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-section-break--m {
        margin-bottom:24px
    }
}

hr,.nhsuk-section-break--visible {
    border-bottom: 1px solid #d8dde0
}

h1,.nhsuk-heading-xl {
    font-size: 32px;
    font-size: 2rem;
    line-height: 1.25;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 40px
}

@media(min-width: 40.0625em) {
    h1,.nhsuk-heading-xl {
        font-size:48px;
        font-size: 3rem;
        line-height: 1.16667
    }
}

@media print {
    h1,.nhsuk-heading-xl {
        font-size: 32pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    h1,.nhsuk-heading-xl {
        margin-bottom:48px
    }
}

h2,.nhsuk-heading-l {
    font-size: 24px;
    font-size: 1.5rem;
    line-height: 1.33333;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    h2,.nhsuk-heading-l {
        font-size:32px;
        font-size: 2rem;
        line-height: 1.25
    }
}

@media print {
    h2,.nhsuk-heading-l {
        font-size: 24pt;
        line-height: 1.05
    }
}

@media(min-width: 40.0625em) {
    h2,.nhsuk-heading-l {
        margin-bottom:24px
    }
}

h3,.nhsuk-heading-m {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    h3,.nhsuk-heading-m {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    h3,.nhsuk-heading-m {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    h3,.nhsuk-heading-m {
        margin-bottom:24px
    }
}

h4,.nhsuk-heading-s {
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 1.55556;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    h4,.nhsuk-heading-s {
        font-size:22px;
        font-size: 1.375rem;
        line-height: 1.45455
    }
}

@media print {
    h4,.nhsuk-heading-s {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    h4,.nhsuk-heading-s {
        margin-bottom:24px
    }
}

h5,.nhsuk-heading-xs {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    h5,.nhsuk-heading-xs {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    h5,.nhsuk-heading-xs {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    h5,.nhsuk-heading-xs {
        margin-bottom:24px
    }
}

h6,.nhsuk-heading-xxs {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    h6,.nhsuk-heading-xxs {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    h6,.nhsuk-heading-xxs {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    h6,.nhsuk-heading-xxs {
        margin-bottom:24px
    }
}

.nhsuk-caption-xl {
    font-weight: 400;
    font-size: 24px;
    font-size: 1.5rem;
    line-height: 1.33333;
    color: #4c6272;
    display: block;
    margin-bottom: 4px
}

@media(min-width: 40.0625em) {
    .nhsuk-caption-xl {
        font-size:32px;
        font-size: 2rem;
        line-height: 1.25
    }
}

@media print {
    .nhsuk-caption-xl {
        font-size: 24pt;
        line-height: 1.05
    }
}

.nhsuk-caption-l {
    font-weight: 400;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    color: #4c6272;
    display: block;
    margin-bottom: 4px
}

@media(min-width: 40.0625em) {
    .nhsuk-caption-l {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-caption-l {
        font-size: 18pt;
        line-height: 1.15
    }
}

.nhsuk-caption-m {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    color: #4c6272;
    display: block
}

@media(min-width: 40.0625em) {
    .nhsuk-caption-m {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-caption-m {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-caption--bottom {
    margin-bottom: 0;
    margin-top: 4px
}

.nhsuk-body-l {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    display: block;
    margin-top: 0;
    margin-bottom: 24px
}

@media(min-width: 40.0625em) {
    .nhsuk-body-l {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-body-l {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-body-l {
        margin-bottom:32px
    }
}

address,p,.nhsuk-body-m {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    address,p,.nhsuk-body-m {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    address,p,.nhsuk-body-m {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    address,p,.nhsuk-body-m {
        margin-bottom:24px
    }
}

p,.nhsuk-body-m {
    color: inherit
}

.nhsuk-body-s {
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    display: block;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-body-s {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-body-s {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-body-s {
        margin-bottom:24px
    }
}

address {
    font-style: normal
}

.nhsuk-lede-text {
    font-weight: 400;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    margin-bottom: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-lede-text {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-lede-text {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-lede-text {
        margin-bottom:48px
    }
}

.nhsuk-lede-text p,.nhsuk-lede-text ul {
    font-weight: 400;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4
}

@media(min-width: 40.0625em) {
    .nhsuk-lede-text p,.nhsuk-lede-text ul {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-lede-text p,.nhsuk-lede-text ul {
        font-size: 18pt;
        line-height: 1.15
    }
}

.nhsuk-lede-text--small {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 24px
}

@media(min-width: 40.0625em) {
    .nhsuk-lede-text--small {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-lede-text--small {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-lede-text--small {
        margin-bottom:32px
    }
}

h1+.nhsuk-lede-text,h1+.nhsuk-lede-text--small {
    margin-top: -8px
}

.nhsuk-body-l+h2,.nhsuk-body-l+.nhsuk-heading-l {
    padding-top: 4px
}

@media(min-width: 40.0625em) {
    .nhsuk-body-l+h2,.nhsuk-body-l+.nhsuk-heading-l {
        padding-top:8px
    }
}

p+h2,.nhsuk-body-m+h2,address+h2,p+.nhsuk-heading-l,.nhsuk-body-m+.nhsuk-heading-l,address+.nhsuk-heading-l,.nhsuk-body-s+h2,.nhsuk-body-s+.nhsuk-heading-l,.nhsuk-list+h2,ul+h2,ol+h2,.nhsuk-list+.nhsuk-heading-l,ul+.nhsuk-heading-l,ol+.nhsuk-heading-l {
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    p+h2,.nhsuk-body-m+h2,address+h2,p+.nhsuk-heading-l,.nhsuk-body-m+.nhsuk-heading-l,address+.nhsuk-heading-l,.nhsuk-body-s+h2,.nhsuk-body-s+.nhsuk-heading-l,.nhsuk-list+h2,ul+h2,ol+h2,.nhsuk-list+.nhsuk-heading-l,ul+.nhsuk-heading-l,ol+.nhsuk-heading-l {
        padding-top:24px
    }
}

p+h3,.nhsuk-body-m+h3,address+h3,p+.nhsuk-heading-m,.nhsuk-body-m+.nhsuk-heading-m,address+.nhsuk-heading-m,.nhsuk-body-s+h3,.nhsuk-body-s+.nhsuk-heading-m,.nhsuk-list+h3,ul+h3,ol+h3,.nhsuk-list+.nhsuk-heading-m,ul+.nhsuk-heading-m,ol+.nhsuk-heading-m,p+h4,.nhsuk-body-m+h4,address+h4,p+.nhsuk-heading-s,.nhsuk-body-m+.nhsuk-heading-s,address+.nhsuk-heading-s,.nhsuk-body-s+h4,.nhsuk-body-s+.nhsuk-heading-s,.nhsuk-list+h4,ul+h4,ol+h4,.nhsuk-list+.nhsuk-heading-s,ul+.nhsuk-heading-s,ol+.nhsuk-heading-s {
    padding-top: 4px
}

@media(min-width: 40.0625em) {
    p+h3,.nhsuk-body-m+h3,address+h3,p+.nhsuk-heading-m,.nhsuk-body-m+.nhsuk-heading-m,address+.nhsuk-heading-m,.nhsuk-body-s+h3,.nhsuk-body-s+.nhsuk-heading-m,.nhsuk-list+h3,ul+h3,ol+h3,.nhsuk-list+.nhsuk-heading-m,ul+.nhsuk-heading-m,ol+.nhsuk-heading-m,p+h4,.nhsuk-body-m+h4,address+h4,p+.nhsuk-heading-s,.nhsuk-body-m+.nhsuk-heading-s,address+.nhsuk-heading-s,.nhsuk-body-s+h4,.nhsuk-body-s+.nhsuk-heading-s,.nhsuk-list+h4,ul+h4,ol+h4,.nhsuk-list+.nhsuk-heading-s,ul+.nhsuk-heading-s,ol+.nhsuk-heading-s {
        padding-top:8px
    }
}

.nhsuk-lede-text+h2,.nhsuk-lede-text+.nhsuk-heading-l {
    padding-top: 0
}

strong,b {
    font-weight: 600
}

.nhsuk-u-clear:after {
    clear: both;
    content: "";
    display: block
}

.nhsuk-u-display-block {
    display: block !important
}

.nhsuk-u-display-inline-block {
    display: inline-block !important
}

.nhsuk-u-float-left {
    float: left !important
}

.nhsuk-u-float-right {
    float: right !important
}

.nhsuk-u-one-half {
    float: left;
    width: 50% !important
}

.nhsuk-u-one-third {
    float: left;
    width: 33.3333333333% !important
}

.nhsuk-u-two-thirds {
    float: left;
    width: 66.6666666667% !important
}

.nhsuk-u-one-quarter {
    float: left;
    width: 25% !important
}

.nhsuk-u-three-quarters {
    float: left;
    width: 75% !important
}

.nhsuk-u-one-half-tablet {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-one-half-tablet {
        float:left;
        width: 50% !important
    }
}

.nhsuk-u-one-third-tablet {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-one-third-tablet {
        float:left;
        width: 33.3333333333% !important
    }
}

.nhsuk-u-two-thirds-tablet {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-two-thirds-tablet {
        float:left;
        width: 66.6666666667% !important
    }
}

.nhsuk-u-one-quarter-tablet {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-one-quarter-tablet {
        float:left;
        width: 25% !important
    }
}

.nhsuk-u-three-quarters-tablet {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-three-quarters-tablet {
        float:left;
        width: 75% !important
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-u-nowrap {
        white-space:nowrap
    }
}

.nhsuk-list--border li {
    border-bottom: 1px solid #d8dde0;
    padding: 8px 0 16px
}

.nhsuk-u-reading-width {
    max-width: 44em
}

.nhsuk-u-margin-0 {
    margin: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-0 {
        margin:0 !important
    }
}

.nhsuk-u-margin-top-0 {
    margin-top: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-0 {
        margin-top:0 !important
    }
}

.nhsuk-u-margin-right-0 {
    margin-right: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-0 {
        margin-right:0 !important
    }
}

.nhsuk-u-margin-bottom-0 {
    margin-bottom: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-0 {
        margin-bottom:0 !important
    }
}

.nhsuk-u-margin-left-0 {
    margin-left: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-0 {
        margin-left:0 !important
    }
}

.nhsuk-u-margin-1 {
    margin: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-1 {
        margin:4px !important
    }
}

.nhsuk-u-margin-top-1 {
    margin-top: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-1 {
        margin-top:4px !important
    }
}

.nhsuk-u-margin-right-1 {
    margin-right: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-1 {
        margin-right:4px !important
    }
}

.nhsuk-u-margin-bottom-1 {
    margin-bottom: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-1 {
        margin-bottom:4px !important
    }
}

.nhsuk-u-margin-left-1 {
    margin-left: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-1 {
        margin-left:4px !important
    }
}

.nhsuk-u-margin-2 {
    margin: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-2 {
        margin:8px !important
    }
}

.nhsuk-u-margin-top-2 {
    margin-top: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-2 {
        margin-top:8px !important
    }
}

.nhsuk-u-margin-right-2 {
    margin-right: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-2 {
        margin-right:8px !important
    }
}

.nhsuk-u-margin-bottom-2 {
    margin-bottom: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-2 {
        margin-bottom:8px !important
    }
}

.nhsuk-u-margin-left-2 {
    margin-left: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-2 {
        margin-left:8px !important
    }
}

.nhsuk-u-margin-3 {
    margin: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-3 {
        margin:16px !important
    }
}

.nhsuk-u-margin-top-3 {
    margin-top: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-3 {
        margin-top:16px !important
    }
}

.nhsuk-u-margin-right-3 {
    margin-right: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-3 {
        margin-right:16px !important
    }
}

.nhsuk-u-margin-bottom-3 {
    margin-bottom: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-3 {
        margin-bottom:16px !important
    }
}

.nhsuk-u-margin-left-3 {
    margin-left: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-3 {
        margin-left:16px !important
    }
}

.nhsuk-u-margin-4 {
    margin: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-4 {
        margin:24px !important
    }
}

.nhsuk-u-margin-top-4 {
    margin-top: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-4 {
        margin-top:24px !important
    }
}

.nhsuk-u-margin-right-4 {
    margin-right: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-4 {
        margin-right:24px !important
    }
}

.nhsuk-u-margin-bottom-4 {
    margin-bottom: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-4 {
        margin-bottom:24px !important
    }
}

.nhsuk-u-margin-left-4 {
    margin-left: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-4 {
        margin-left:24px !important
    }
}

.nhsuk-u-margin-5 {
    margin: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-5 {
        margin:32px !important
    }
}

.nhsuk-u-margin-top-5 {
    margin-top: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-5 {
        margin-top:32px !important
    }
}

.nhsuk-u-margin-right-5 {
    margin-right: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-5 {
        margin-right:32px !important
    }
}

.nhsuk-u-margin-bottom-5 {
    margin-bottom: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-5 {
        margin-bottom:32px !important
    }
}

.nhsuk-u-margin-left-5 {
    margin-left: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-5 {
        margin-left:32px !important
    }
}

.nhsuk-u-margin-6 {
    margin: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-6 {
        margin:40px !important
    }
}

.nhsuk-u-margin-top-6 {
    margin-top: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-6 {
        margin-top:40px !important
    }
}

.nhsuk-u-margin-right-6 {
    margin-right: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-6 {
        margin-right:40px !important
    }
}

.nhsuk-u-margin-bottom-6 {
    margin-bottom: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-6 {
        margin-bottom:40px !important
    }
}

.nhsuk-u-margin-left-6 {
    margin-left: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-6 {
        margin-left:40px !important
    }
}

.nhsuk-u-margin-7 {
    margin: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-7 {
        margin:48px !important
    }
}

.nhsuk-u-margin-top-7 {
    margin-top: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-7 {
        margin-top:48px !important
    }
}

.nhsuk-u-margin-right-7 {
    margin-right: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-7 {
        margin-right:48px !important
    }
}

.nhsuk-u-margin-bottom-7 {
    margin-bottom: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-7 {
        margin-bottom:48px !important
    }
}

.nhsuk-u-margin-left-7 {
    margin-left: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-7 {
        margin-left:48px !important
    }
}

.nhsuk-u-margin-8 {
    margin: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-8 {
        margin:56px !important
    }
}

.nhsuk-u-margin-top-8 {
    margin-top: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-8 {
        margin-top:56px !important
    }
}

.nhsuk-u-margin-right-8 {
    margin-right: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-8 {
        margin-right:56px !important
    }
}

.nhsuk-u-margin-bottom-8 {
    margin-bottom: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-8 {
        margin-bottom:56px !important
    }
}

.nhsuk-u-margin-left-8 {
    margin-left: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-8 {
        margin-left:56px !important
    }
}

.nhsuk-u-margin-9 {
    margin: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-9 {
        margin:64px !important
    }
}

.nhsuk-u-margin-top-9 {
    margin-top: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-top-9 {
        margin-top:64px !important
    }
}

.nhsuk-u-margin-right-9 {
    margin-right: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-right-9 {
        margin-right:64px !important
    }
}

.nhsuk-u-margin-bottom-9 {
    margin-bottom: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-bottom-9 {
        margin-bottom:64px !important
    }
}

.nhsuk-u-margin-left-9 {
    margin-left: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-margin-left-9 {
        margin-left:64px !important
    }
}

.nhsuk-u-padding-0 {
    padding: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-0 {
        padding:0 !important
    }
}

.nhsuk-u-padding-top-0 {
    padding-top: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-0 {
        padding-top:0 !important
    }
}

.nhsuk-u-padding-right-0 {
    padding-right: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-0 {
        padding-right:0 !important
    }
}

.nhsuk-u-padding-bottom-0 {
    padding-bottom: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-0 {
        padding-bottom:0 !important
    }
}

.nhsuk-u-padding-left-0 {
    padding-left: 0 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-0 {
        padding-left:0 !important
    }
}

.nhsuk-u-padding-1 {
    padding: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-1 {
        padding:4px !important
    }
}

.nhsuk-u-padding-top-1 {
    padding-top: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-1 {
        padding-top:4px !important
    }
}

.nhsuk-u-padding-right-1 {
    padding-right: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-1 {
        padding-right:4px !important
    }
}

.nhsuk-u-padding-bottom-1 {
    padding-bottom: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-1 {
        padding-bottom:4px !important
    }
}

.nhsuk-u-padding-left-1 {
    padding-left: 4px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-1 {
        padding-left:4px !important
    }
}

.nhsuk-u-padding-2 {
    padding: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-2 {
        padding:8px !important
    }
}

.nhsuk-u-padding-top-2 {
    padding-top: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-2 {
        padding-top:8px !important
    }
}

.nhsuk-u-padding-right-2 {
    padding-right: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-2 {
        padding-right:8px !important
    }
}

.nhsuk-u-padding-bottom-2 {
    padding-bottom: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-2 {
        padding-bottom:8px !important
    }
}

.nhsuk-u-padding-left-2 {
    padding-left: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-2 {
        padding-left:8px !important
    }
}

.nhsuk-u-padding-3 {
    padding: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-3 {
        padding:16px !important
    }
}

.nhsuk-u-padding-top-3 {
    padding-top: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-3 {
        padding-top:16px !important
    }
}

.nhsuk-u-padding-right-3 {
    padding-right: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-3 {
        padding-right:16px !important
    }
}

.nhsuk-u-padding-bottom-3 {
    padding-bottom: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-3 {
        padding-bottom:16px !important
    }
}

.nhsuk-u-padding-left-3 {
    padding-left: 8px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-3 {
        padding-left:16px !important
    }
}

.nhsuk-u-padding-4 {
    padding: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-4 {
        padding:24px !important
    }
}

.nhsuk-u-padding-top-4 {
    padding-top: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-4 {
        padding-top:24px !important
    }
}

.nhsuk-u-padding-right-4 {
    padding-right: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-4 {
        padding-right:24px !important
    }
}

.nhsuk-u-padding-bottom-4 {
    padding-bottom: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-4 {
        padding-bottom:24px !important
    }
}

.nhsuk-u-padding-left-4 {
    padding-left: 16px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-4 {
        padding-left:24px !important
    }
}

.nhsuk-u-padding-5 {
    padding: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-5 {
        padding:32px !important
    }
}

.nhsuk-u-padding-top-5 {
    padding-top: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-5 {
        padding-top:32px !important
    }
}

.nhsuk-u-padding-right-5 {
    padding-right: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-5 {
        padding-right:32px !important
    }
}

.nhsuk-u-padding-bottom-5 {
    padding-bottom: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-5 {
        padding-bottom:32px !important
    }
}

.nhsuk-u-padding-left-5 {
    padding-left: 24px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-5 {
        padding-left:32px !important
    }
}

.nhsuk-u-padding-6 {
    padding: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-6 {
        padding:40px !important
    }
}

.nhsuk-u-padding-top-6 {
    padding-top: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-6 {
        padding-top:40px !important
    }
}

.nhsuk-u-padding-right-6 {
    padding-right: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-6 {
        padding-right:40px !important
    }
}

.nhsuk-u-padding-bottom-6 {
    padding-bottom: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-6 {
        padding-bottom:40px !important
    }
}

.nhsuk-u-padding-left-6 {
    padding-left: 32px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-6 {
        padding-left:40px !important
    }
}

.nhsuk-u-padding-7 {
    padding: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-7 {
        padding:48px !important
    }
}

.nhsuk-u-padding-top-7 {
    padding-top: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-7 {
        padding-top:48px !important
    }
}

.nhsuk-u-padding-right-7 {
    padding-right: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-7 {
        padding-right:48px !important
    }
}

.nhsuk-u-padding-bottom-7 {
    padding-bottom: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-7 {
        padding-bottom:48px !important
    }
}

.nhsuk-u-padding-left-7 {
    padding-left: 40px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-7 {
        padding-left:48px !important
    }
}

.nhsuk-u-padding-8 {
    padding: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-8 {
        padding:56px !important
    }
}

.nhsuk-u-padding-top-8 {
    padding-top: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-8 {
        padding-top:56px !important
    }
}

.nhsuk-u-padding-right-8 {
    padding-right: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-8 {
        padding-right:56px !important
    }
}

.nhsuk-u-padding-bottom-8 {
    padding-bottom: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-8 {
        padding-bottom:56px !important
    }
}

.nhsuk-u-padding-left-8 {
    padding-left: 48px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-8 {
        padding-left:56px !important
    }
}

.nhsuk-u-padding-9 {
    padding: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-9 {
        padding:64px !important
    }
}

.nhsuk-u-padding-top-9 {
    padding-top: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-top-9 {
        padding-top:64px !important
    }
}

.nhsuk-u-padding-right-9 {
    padding-right: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-right-9 {
        padding-right:64px !important
    }
}

.nhsuk-u-padding-bottom-9 {
    padding-bottom: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-bottom-9 {
        padding-bottom:64px !important
    }
}

.nhsuk-u-padding-left-9 {
    padding-left: 56px !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-padding-left-9 {
        padding-left:64px !important
    }
}

.nhsuk-u-text-align-left {
    text-align: left !important
}

.nhsuk-u-text-align-centre {
    text-align: center !important
}

.nhsuk-u-text-align-right {
    text-align: right !important
}

.nhsuk-u-font-size-64 {
    font-size: 48px !important;
    font-size: 3rem !important;
    line-height: 1.16667 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-64 {
        font-size:64px !important;
        font-size: 4rem !important;
        line-height: 1.125 !important
    }
}

@media print {
    .nhsuk-u-font-size-64 {
        font-size: 53pt !important;
        line-height: 1.1 !important
    }
}

.nhsuk-u-font-size-48 {
    font-size: 32px !important;
    font-size: 2rem !important;
    line-height: 1.25 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-48 {
        font-size:48px !important;
        font-size: 3rem !important;
        line-height: 1.16667 !important
    }
}

@media print {
    .nhsuk-u-font-size-48 {
        font-size: 32pt !important;
        line-height: 1.15 !important
    }
}

.nhsuk-u-font-size-32 {
    font-size: 24px !important;
    font-size: 1.5rem !important;
    line-height: 1.33333 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-32 {
        font-size:32px !important;
        font-size: 2rem !important;
        line-height: 1.25 !important
    }
}

@media print {
    .nhsuk-u-font-size-32 {
        font-size: 24pt !important;
        line-height: 1.05 !important
    }
}

.nhsuk-u-font-size-24 {
    font-size: 20px !important;
    font-size: 1.25rem !important;
    line-height: 1.4 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-24 {
        font-size:24px !important;
        font-size: 1.5rem !important;
        line-height: 1.33333 !important
    }
}

@media print {
    .nhsuk-u-font-size-24 {
        font-size: 18pt !important;
        line-height: 1.15 !important
    }
}

.nhsuk-u-font-size-22 {
    font-size: 18px !important;
    font-size: 1.125rem !important;
    line-height: 1.55556 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-22 {
        font-size:22px !important;
        font-size: 1.375rem !important;
        line-height: 1.45455 !important
    }
}

@media print {
    .nhsuk-u-font-size-22 {
        font-size: 18pt !important;
        line-height: 1.15 !important
    }
}

.nhsuk-u-font-size-19 {
    font-size: 16px !important;
    font-size: 1rem !important;
    line-height: 1.5 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-19 {
        font-size:19px !important;
        font-size: 1.1875rem !important;
        line-height: 1.47368 !important
    }
}

@media print {
    .nhsuk-u-font-size-19 {
        font-size: 14pt !important;
        line-height: 1.15 !important
    }
}

.nhsuk-u-font-size-16 {
    font-size: 14px !important;
    font-size: .875rem !important;
    line-height: 1.71429 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-16 {
        font-size:16px !important;
        font-size: 1rem !important;
        line-height: 1.5 !important
    }
}

@media print {
    .nhsuk-u-font-size-16 {
        font-size: 14pt !important;
        line-height: 1.2 !important
    }
}

.nhsuk-u-font-size-14 {
    font-size: 12px !important;
    font-size: .75rem !important;
    line-height: 1.66667 !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-font-size-14 {
        font-size:14px !important;
        font-size: .875rem !important;
        line-height: 1.71429 !important
    }
}

@media print {
    .nhsuk-u-font-size-14 {
        font-size: 12pt !important;
        line-height: 1.2 !important
    }
}

.nhsuk-u-font-weight-normal {
    font-weight: 400 !important
}

.nhsuk-u-font-weight-bold {
    font-weight: 600 !important
}

.nhsuk-u-secondary-text-color {
    color: #4c6272 !important
}

.nhsuk-u-visually-hidden {
    border: 0;
    clip: rect(0 0 0 0);
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    height: 1px;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 1px
}

.nhsuk-u-width-full {
    width: 100% !important
}

.nhsuk-u-width-three-quarters {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-width-three-quarters {
        width:75% !important
    }
}

.nhsuk-u-width-two-thirds {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-width-two-thirds {
        width:66.66% !important
    }
}

.nhsuk-u-width-one-half {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-width-one-half {
        width:50% !important
    }
}

.nhsuk-u-width-one-third {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-width-one-third {
        width:33.33% !important
    }
}

.nhsuk-u-width-one-quarter {
    width: 100% !important
}

@media(min-width: 40.0625em) {
    .nhsuk-u-width-one-quarter {
        width:25% !important
    }
}

.nhsuk-action-link {
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-action-link {
        margin-bottom:40px
    }
}

.nhsuk-action-link__link {
    font-weight: 400;
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 1.55556;
    display: inline-block;
    font-weight: 600;
    padding-left: 38px;
    position: relative;
    text-decoration: none
}

@media(min-width: 40.0625em) {
    .nhsuk-action-link__link {
        font-size:22px;
        font-size: 1.375rem;
        line-height: 1.45455
    }
}

@media print {
    .nhsuk-action-link__link {
        font-size: 18pt;
        line-height: 1.15
    }
}

.nhsuk-action-link__link:hover .nhsuk-action-link__text {
    text-decoration: underline
}

.nhsuk-action-link__link:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-action-link__link:focus:hover .nhsuk-action-link__text {
    color: #212b32;
    text-decoration: none
}

@media(max-width: 40.0525em) {
    .nhsuk-action-link__link {
        padding-left:26px
    }
}

@media print {
    .nhsuk-action-link__link {
        color: #212b32
    }

    .nhsuk-action-link__link:visited {
        color: #212b32
    }
}

.nhsuk-action-link__link .nhsuk-icon__arrow-right-circle {
    fill: #007f3b;
    height: 36px;
    left: -3px;
    position: absolute;
    top: -2px;
    width: 36px
}

@media print {
    .nhsuk-action-link__link .nhsuk-icon__arrow-right-circle {
        color: #212b32;
        fill: #212b32
    }

    .nhsuk-action-link__link .nhsuk-icon__arrow-right-circle:active,.nhsuk-action-link__link .nhsuk-icon__arrow-right-circle:focus,.nhsuk-action-link__link .nhsuk-icon__arrow-right-circle:visited {
        color: #212b32
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-action-link__link .nhsuk-icon__arrow-right-circle {
        height:24px;
        left: -2px;
        margin-bottom: 0;
        top: 2px;
        width: 24px
    }
}

.nhsuk-back-link {
    margin-bottom: 16px
}

.nhsuk-back-link__link {
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    color: #005eb8;
    background: none;
    border: 0;
    cursor: pointer;
    display: inline-block;
    padding: 0 0 0 16px;
    position: relative;
    text-decoration: none
}

@media(min-width: 40.0625em) {
    .nhsuk-back-link__link {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-back-link__link {
        font-size: 14pt;
        line-height: 1.2
    }
}

.nhsuk-back-link__link:visited {
    color: #330072
}

.nhsuk-back-link__link:hover {
    color: #7c2855;
    text-decoration: none
}

.nhsuk-back-link__link:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-back-link__link:focus:hover {
    text-decoration: none
}

.nhsuk-back-link__link:focus:visited {
    color: #212b32
}

.nhsuk-back-link__link:focus .nhsuk-icon {
    fill: #212b32
}

.nhsuk-back-link__link:active {
    color: #002f5c
}

.nhsuk-back-link__link .nhsuk-icon__chevron-left {
    height: 24px;
    left: -8px;
    position: absolute;
    top: -1px;
    width: 24px
}

.nhsuk-back-link__link:visited {
    color: #005eb8
}

.nhsuk-back-link__link:hover {
    color: #7c2855;
    text-decoration: underline
}

.nhsuk-back-link__link:hover .nhsuk-icon__chevron-left {
    fill: #7c2855
}

.nhsuk-back-link__link:focus .nhsuk-icon__chevron-left {
    fill: #212b32
}

.nhsuk-breadcrumb {
    padding-bottom: 16px;
    padding-top: 20px
}

@media print {
    .nhsuk-breadcrumb {
        display: none
    }
}

.nhsuk-breadcrumb .nhsuk-icon__chevron-right {
    fill: #aeb7bd;
    height: 18px;
    position: relative;
    top: 5px;
    width: 18px
}

@media(min-width: 61.875em) {
    .nhsuk-breadcrumb .nhsuk-icon__chevron-right {
        margin:0 3px 0 5px
    }
}

.nhsuk-breadcrumb .nhsuk-icon__chevron-left {
    float: left;
    height: 24px;
    left: -8px;
    position: relative;
    width: 24px
}

.nhsuk-breadcrumb+.nhsuk-width-container .nhsuk-main-wrapper {
    padding-top: 0
}

.nhsuk-breadcrumb__list {
    list-style: none;
    margin: 0;
    padding: 0
}

@media(max-width: 40.0525em) {
    .nhsuk-breadcrumb__list {
        display:none
    }
}

.nhsuk-breadcrumb__item {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    display: inline-block;
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-breadcrumb__item {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-breadcrumb__item {
        font-size: 14pt;
        line-height: 1.2
    }
}

.nhsuk-breadcrumb__item:not(:last-child):after {
    background: url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__chevron-right' xmlns='http://www.w3.org/2000/svg' fill='%23aeb7bd' height='18' width='18' viewBox='0 0 24 24' aria-hidden='true'%3E%3Cpath d='M15.5 12a1 1 0 0 1-.29.71l-5 5a1 1 0 0 1-1.42-1.42l4.3-4.29-4.3-4.29a1 1 0 0 1 1.42-1.42l5 5a1 1 0 0 1 .29.71z'%3E%3C/path%3E%3C/svg%3E") right 0 top 4px no-repeat;
    content: "";
    display: inline-block;
    height: 18px;
    margin-left: 10px;
    margin-right: 2px;
    width: 18px
}

.nhsuk-breadcrumb__link:visited {
    color: #005eb8
}

.nhsuk-breadcrumb__link:visited:hover {
    color: #7c2855
}

.nhsuk-breadcrumb__link:focus:hover {
    color: #212b32
}

.nhsuk-breadcrumb__back {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    margin: 0;
    padding-left: 16px;
    position: relative
}

@media(min-width: 40.0625em) {
    .nhsuk-breadcrumb__back {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-breadcrumb__back {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-breadcrumb__back {
        display:none
    }
}

.nhsuk-breadcrumb__back:before {
    background: url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__chevron-left' xmlns='http://www.w3.org/2000/svg' fill='%23005eb8' height='24' width='24' viewBox='8 0 24 24' aria-hidden='true'%3E%3Cpath d='M8.5 12c0-.3.1-.5.3-.7l5-5c.4-.4 1-.4 1.4 0s.4 1 0 1.4L10.9 12l4.3 4.3c.4.4.4 1 0 1.4s-1 .4-1.4 0l-5-5c-.2-.2-.3-.4-.3-.7z'%3E%3C/path%3E%3C/svg%3E") no-repeat;
    content: "";
    display: inline-block;
    height: 18px;
    left: 0;
    position: absolute;
    top: 0;
    width: 10px
}

.nhsuk-breadcrumb__backlink:visited {
    color: #005eb8
}

.nhsuk-breadcrumb__backlink:visited:hover {
    color: #7c2855
}

.nhsuk-button {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 28px;
    -webkit-appearance: none;
    background-color: #007f3b;
    border: 2px solid rgba(0,0,0,0);
    border-radius: 4px;
    box-shadow: 0 4px 0 #00401e;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-weight: 600;
    margin-top: 0;
    padding: 12px 16px;
    position: relative;
    text-align: center;
    vertical-align: top;
    width: auto
}

@media(min-width: 40.0625em) {
    .nhsuk-button {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-button {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-button {
        margin-bottom:36px
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-button {
        padding:8px 16px
    }
}

.nhsuk-button:link,.nhsuk-button:visited,.nhsuk-button:active,.nhsuk-button:hover {
    color: #fff;
    text-decoration: none
}

.nhsuk-button::-moz-focus-inner {
    border: 0;
    padding: 0
}

.nhsuk-button:hover {
    background-color: #00662f
}

.nhsuk-button:focus {
    background: #ffeb3b;
    box-shadow: 0 4px 0 #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0)
}

.nhsuk-button:focus:visited {
    color: #212b32
}

.nhsuk-button:focus:visited:active {
    color: #fff
}

.nhsuk-button:active {
    background: #00401e;
    box-shadow: none;
    color: #fff;
    top: 4px
}

.nhsuk-button::before {
    background: rgba(0,0,0,0);
    bottom: -6px;
    content: "";
    display: block;
    left: -2px;
    position: absolute;
    right: -2px;
    top: -2px
}

.nhsuk-button:active::before {
    top: -6px
}

.nhsuk-button--secondary {
    background-color: #4c6272;
    box-shadow: 0 4px 0 #263139
}

.nhsuk-button--secondary:hover {
    background-color: #384853
}

.nhsuk-button--secondary:focus {
    background: #ffeb3b;
    box-shadow: 0 4px 0 #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0)
}

.nhsuk-button--secondary:active {
    background: #263139;
    box-shadow: none;
    color: #fff;
    top: 4px
}

.nhsuk-button--secondary.nhsuk-button--disabled {
    background-color: #4c6272
}

.nhsuk-button--reverse {
    background-color: #fff;
    box-shadow: 0 4px 0 #212b32;
    color: #212b32
}

.nhsuk-button--reverse:hover {
    background-color: #f2f2f2;
    color: #212b32
}

.nhsuk-button--reverse:focus {
    background: #ffeb3b;
    box-shadow: 0 4px 0 #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0)
}

.nhsuk-button--reverse:active {
    background: #212b32;
    box-shadow: none;
    color: #fff;
    top: 4px
}

.nhsuk-button--reverse:link {
    color: #212b32
}

.nhsuk-button--reverse:link:active {
    color: #fff
}

.nhsuk-button--reverse.nhsuk-button--disabled {
    background-color: #fff
}

.nhsuk-button--reverse.nhsuk-button--disabled:focus {
    background-color: #fff
}

.nhsuk-button--disabled,.nhsuk-button[disabled=disabled],.nhsuk-button[disabled] {
    background-color: #007f3b;
    opacity: .5;
    pointer-events: none
}

.nhsuk-button--disabled:hover,.nhsuk-button[disabled=disabled]:hover,.nhsuk-button[disabled]:hover {
    background-color: #007f3b;
    cursor: default
}

.nhsuk-button--disabled:focus,.nhsuk-button[disabled=disabled]:focus,.nhsuk-button[disabled]:focus {
    background-color: #007f3b;
    outline: none
}

.nhsuk-button--disabled:active,.nhsuk-button[disabled=disabled]:active,.nhsuk-button[disabled]:active {
    box-shadow: 0 4px 0 #00401e;
    top: 0
}

.nhsuk-button--secondary[disabled=disabled],.nhsuk-button--secondary[disabled] {
    background-color: #4c6272;
    opacity: .5
}

.nhsuk-button--secondary[disabled=disabled]:hover,.nhsuk-button--secondary[disabled]:hover {
    background-color: #4c6272;
    cursor: default
}

.nhsuk-button--secondary[disabled=disabled]:focus,.nhsuk-button--secondary[disabled]:focus {
    outline: none
}

.nhsuk-button--secondary[disabled=disabled]:active,.nhsuk-button--secondary[disabled]:active {
    box-shadow: 0 4px 0 #263139;
    top: 0
}

.nhsuk-button--reverse[disabled=disabled],.nhsuk-button--reverse[disabled] {
    background-color: #fff;
    opacity: .5
}

.nhsuk-button--reverse[disabled=disabled]:hover,.nhsuk-button--reverse[disabled]:hover {
    background-color: #fff;
    cursor: default
}

.nhsuk-button--reverse[disabled=disabled]:focus,.nhsuk-button--reverse[disabled]:focus {
    outline: none
}

.nhsuk-button--reverse[disabled=disabled]:active,.nhsuk-button--reverse[disabled]:active {
    box-shadow: 0 4px 0 #212b32;
    top: 0
}

.nhsuk-card {
    margin-bottom: 40px;
    background: #fff;
    border: 1px solid #d8dde0;
    position: relative;
    width: 100%
}

@media(min-width: 40.0625em) {
    .nhsuk-card {
        margin-bottom:48px
    }
}

.nhsuk-card__img {
    border-bottom: 1px solid #f0f4f5;
    display: block;
    width: 100%
}

@media print {
    .nhsuk-card__img {
        display: none
    }
}

.nhsuk-card__content {
    padding: 24px
}

.nhsuk-card__content>*:first-child {
    margin-top: 0
}

.nhsuk-card__content>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-card__content {
        padding:32px
    }
}

.nhsuk-card__heading,.nhsuk-card__metadata,.nhsuk-card__description {
    margin-bottom: 16px
}

.nhsuk-card--clickable {
    border-bottom-width: 4px
}

.nhsuk-card--clickable .nhsuk-card__heading a::before,.nhsuk-card--clickable .nhsuk-card__link::before {
    background-color: rgba(255,255,255,0);
    bottom: 0;
    content: "";
    display: block;
    left: 0;
    position: absolute;
    right: 0;
    top: 0
}

.nhsuk-card--clickable:active {
    border-color: #aeb7bd;
    bottom: -1px
}

.nhsuk-card-group {
    display: flex;
    flex-wrap: wrap;
    margin-bottom: 16px;
    padding: 0
}

@media(max-width: 48.0525em) {
    .nhsuk-card-group {
        margin-bottom:40px
    }
}

.nhsuk-card-group+h2,.nhsuk-card-group+.nhsuk-heading-l,.nhsuk-card-group+h3,.nhsuk-card-group+.nhsuk-heading-m {
    padding-top: 0
}

.nhsuk-card-group__item {
    display: flex;
    list-style-type: none;
    margin-bottom: 0
}

@media(max-width: 48.0525em) {
    .nhsuk-card-group__item {
        flex:0 0 100%
    }
}

.nhsuk-card-group__item .nhsuk-card {
    margin-bottom: 32px
}

@media(max-width: 48.0525em) {
    .nhsuk-card-group__item .nhsuk-card {
        margin-bottom:16px
    }

    .nhsuk-card-group__item:last-child .nhsuk-card {
        margin-bottom: 0
    }
}

.nhsuk-card--feature {
    margin-top: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-card--feature {
        margin-top:48px
    }
}

.nhsuk-card__heading--feature {
    background: #005eb8;
    color: #fff;
    display: inline-block;
    left: -25px;
    margin-bottom: 8px;
    margin-right: -24px;
    padding: 8px 24px;
    position: relative;
    top: -8px
}

@media(min-width: 40.0625em) {
    .nhsuk-card__heading--feature {
        left:-33px;
        margin-right: -32px;
        padding: 8px 32px;
        top: -16px
    }
}

.nhsuk-card__content--feature {
    padding-top: 0 !important
}

.nhsuk-card--care {
    margin-top: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-card--care {
        margin-top:48px
    }
}

.nhsuk-card--care .nhsuk-card--care__heading-container {
    background-color: #005eb8;
    color: #fff
}

@media print {
    .nhsuk-card--care {
        border: 4px solid #212b32;
        color: #212b32;
        page-break-inside: avoid
    }
}

.nhsuk-card--care__heading-container {
    padding-left: 24px;
    padding-right: 24px;
    padding-bottom: 16px;
    padding-top: 16px;
    position: relative
}

@media(min-width: 40.0625em) {
    .nhsuk-card--care__heading-container {
        padding-left:32px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-card--care__heading-container {
        padding-right:32px
    }
}

.nhsuk-card--care__heading {
    font-weight: 600;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    margin: 0;
    padding-top: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-card--care__heading {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-card--care__heading {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media print {
    .nhsuk-card--care__heading {
        color: #212b32;
        fill: #212b32
    }

    .nhsuk-card--care__heading:active,.nhsuk-card--care__heading:focus,.nhsuk-card--care__heading:visited {
        color: #212b32
    }
}

.nhsuk-card--care__arrow {
    bottom: -10px;
    display: block;
    height: 20px;
    left: 30px;
    overflow: hidden;
    position: absolute;
    transform: rotate(45deg);
    width: 20px
}

@media print {
    .nhsuk-card--care__arrow {
        display: none
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-card--care__arrow {
        left:38px
    }
}

.nhsuk-card--care__arrow:before,.nhsuk-card--care__arrow:after {
    border: solid 32px #005eb8;
    content: "";
    display: block;
    height: 0;
    position: absolute;
    top: 0;
    transform: rotate(45deg);
    width: 0
}

.nhsuk-card--care--urgent .nhsuk-card--care__heading-container {
    background-color: #d5281b;
    color: #fff
}

@media print {
    .nhsuk-card--care--urgent {
        border: 6px solid #212b32;
        color: #212b32;
        page-break-inside: avoid
    }
}

.nhsuk-card--care--urgent .nhsuk-card--care__arrow:before,.nhsuk-card--care--urgent .nhsuk-card--care__arrow:after {
    border-color: #d5281b
}

.nhsuk-card--care--emergency .nhsuk-card--care__heading-container {
    background-color: #d5281b;
    color: #fff
}

@media print {
    .nhsuk-card--care--emergency {
        border: 8px solid #212b32;
        color: #212b32;
        page-break-inside: avoid
    }
}

.nhsuk-card--care--emergency .nhsuk-card--care__arrow:before,.nhsuk-card--care--emergency .nhsuk-card--care__arrow:after {
    border-color: #d5281b
}

.nhsuk-card--care--emergency .nhsuk-card__content {
    background-color: #212b32;
    border: 0;
    color: #fff;
    position: static
}

.nhsuk-card--care--emergency .nhsuk-card__content a {
    color: #fff
}

.nhsuk-card--care--emergency .nhsuk-card__content a:focus {
    color: #212b32
}

.nhsuk-card--care--emergency .nhsuk-details,.nhsuk-card--care--emergency .nhsuk-details__summary {
    color: #fff
}

.nhsuk-card--care--emergency .nhsuk-details__summary:hover {
    color: #fff
}

.nhsuk-card--care--emergency .nhsuk-details__summary:focus {
    color: #212b32
}

.nhsuk-card--care--emergency .nhsuk-action-link__link .nhsuk-icon__arrow-right-circle {
    fill: #fff
}

.nhsuk-card__content--primary {
    padding-right: 75px
}

@media(min-width: 48.0625em) {
    .nhsuk-card__content--primary {
        height:100%
    }
}

.nhsuk-card__content--primary .nhsuk-icon {
    display: block;
    fill: #005eb8;
    margin-top: -8px;
    pointer-events: none;
    position: absolute;
    right: 24px;
    top: 50%
}

.nhsuk-card--secondary {
    background: rgba(0,0,0,0);
    border-bottom: 4px solid #d8dde0;
    border-left: 0;
    border-right: 0;
    border-top: 0
}

.nhsuk-card__content--secondary {
    padding-left: 0;
    padding-right: 0;
    padding-top: 0
}

.nhsuk-contents-list {
    margin-bottom: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-contents-list {
        margin-bottom:48px
    }
}

.nhsuk-contents-list__list {
    list-style: none;
    padding: 0
}

.nhsuk-contents-list__item {
    background: url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__emdash' xmlns='http://www.w3.org/2000/svg' fill='%23aeb7bd' width='19' height='1' aria-hidden='true'%3E%3Cpath d='M0 0h19v1H0z'%3E%3C/path%3E%3C/svg%3E") left .75rem no-repeat;
    padding: 0 0 0 32px;
    position: relative
}

@media(min-width: 40.0625em) {
    .nhsuk-contents-list__item {
        background:url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__emdash' xmlns='http://www.w3.org/2000/svg' fill='%23aeb7bd' width='16' height='1' aria-hidden='true'%3E%3Cpath d='M0 0h19v1H0z'%3E%3C/path%3E%3C/svg%3E") left .875rem no-repeat
    }
}

.nhsuk-contents-list__link {
    display: inline-block
}

.nhsuk-contents-list__current {
    font-weight: 600
}

.nhsuk-date-input {
    font-size: 0
}

.nhsuk-date-input:after {
    clear: both;
    content: "";
    display: block
}

.nhsuk-date-input__item {
    display: inline-block;
    margin-bottom: 0;
    margin-right: 24px
}

.nhsuk-date-input__label {
    display: block
}

.nhsuk-date-input__input {
    margin-bottom: 0
}

.nhsuk-details {
    color: #212b32;
    margin-bottom: 16px;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    display: block
}

@media print {
    .nhsuk-details {
        color: #212b32
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-details {
        margin-bottom:24px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-details {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-details {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-details__summary {
    color: #005eb8;
    cursor: pointer;
    display: inline-block;
    padding-left: 24px;
    position: relative
}

.nhsuk-details__summary:hover {
    color: #7c2855
}

.nhsuk-details__summary:before {
    bottom: 0;
    content: "";
    left: 0;
    margin: auto;
    position: absolute;
    top: 0;
    display: block;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: rgba(0,0,0,0);
    clip-path: polygon(0% 0%, 100% 50%, 0% 100%);
    border-width: 7px 0 7px 12.124px;
    border-left-color: inherit
}

.nhsuk-details__summary:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-details__summary:focus .nhsuk-icon {
    fill: #212b32
}

.nhsuk-details__summary:hover .nhsuk-details__summary-text,.nhsuk-details__summary:focus .nhsuk-details__summary-text {
    text-decoration: none
}

.nhsuk-details[open]>.nhsuk-details__summary:before {
    display: block;
    width: 0;
    height: 0;
    border-style: solid;
    border-color: rgba(0,0,0,0);
    clip-path: polygon(0% 0%, 50% 100%, 100% 0%);
    border-width: 12.124px 7px 0 7px;
    border-top-color: inherit
}

.nhsuk-details__summary-text {
    text-decoration: underline
}

.nhsuk-details__summary::-webkit-details-marker {
    display: none
}

.nhsuk-details__text {
    border-left: 4px solid #d8dde0;
    margin-top: 8px;
    padding: 16px;
    padding-left: 20px
}

.nhsuk-details__text>*:first-child {
    margin-top: 0
}

.nhsuk-details__text>*:last-child {
    margin-bottom: 0
}

.nhsuk-expander {
    background-color: #fff;
    border: 1px solid #d8dde0;
    border-bottom-width: 4px
}

.nhsuk-expander:hover {
    border-color: #aeb7bd
}

.nhsuk-expander .nhsuk-details__summary {
    background-color: #fff;
    border-top: 4px solid rgba(0,0,0,0);
    display: block;
    padding: 20px 24px 24px
}

@media(max-width: 40.0525em) {
    .nhsuk-expander .nhsuk-details__summary {
        padding:12px 16px 16px
    }
}

.nhsuk-expander .nhsuk-details__summary:before {
    display: none !important
}

.nhsuk-expander .nhsuk-details__summary:hover .nhsuk-details__summary-text {
    color: #7c2855
}

.nhsuk-expander .nhsuk-details__summary:focus {
    box-shadow: none
}

.nhsuk-expander .nhsuk-details__summary:focus .nhsuk-details__summary-text {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-expander .nhsuk-details__summary:focus .nhsuk-details__summary-text:before {
    background: #ffeb3b url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__plus' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' aria-hidden='true'%3E%3Ccircle cx='12' cy='12' r='10' fill='002f5c'%3E%3C/circle%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M12 8v8M8 12h8'%3E%3C/path%3E%3C/svg%3E%0A") left -2px center no-repeat
}

.nhsuk-expander .nhsuk-details__summary-text {
    color: #005eb8;
    cursor: pointer;
    display: inline-block;
    padding: 4px 4px 4px 38px;
    position: relative
}

.nhsuk-expander .nhsuk-details__summary-text:before {
    background: url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__plus' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' aria-hidden='true'%3E%3Ccircle cx='12' cy='12' r='10' fill='%23005eb8'%3E%3C/circle%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M12 8v8M8 12h8'%3E%3C/path%3E%3C/svg%3E%0A") left -2px center no-repeat;
    content: "";
    display: inline-block;
    height: 32px;
    left: 0;
    position: absolute;
    top: calc(50% - 16px);
    width: 32px
}

.nhsuk-expander .nhsuk-details__text {
    padding-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
    padding-top: 0;
    border-left: 0;
    margin-left: 0;
    margin-top: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-expander .nhsuk-details__text {
        padding-bottom:24px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-expander .nhsuk-details__text {
        padding-left:24px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-expander .nhsuk-details__text {
        padding-right:24px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-expander .nhsuk-details__text {
        padding-top:0
    }
}

.nhsuk-expander[open] {
    border-bottom-width: 1px
}

.nhsuk-expander[open] .nhsuk-details__summary:focus:hover .nhsuk-details__summary-text {
    text-decoration: none
}

.nhsuk-expander[open] .nhsuk-details__summary:focus .nhsuk-details__summary-text::before {
    background: #ffeb3b url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__minus' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' aria-hidden='true'%3E%3Ccircle cx='12' cy='12' r='10' fill='002f5c'%3E%3C/circle%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M8 12h8'%3E%3C/path%3E%3C/svg%3E%0A") left -2px center no-repeat
}

.nhsuk-expander[open] .nhsuk-details__summary-text::before {
    background: url("data:image/svg+xml,%3Csvg class='nhsuk-icon nhsuk-icon__minus' xmlns='http://www.w3.org/2000/svg' width='32' height='32' viewBox='0 0 24 24' aria-hidden='true'%3E%3Ccircle cx='12' cy='12' r='10' fill='%23005eb8'%3E%3C/circle%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M8 12h8'%3E%3C/path%3E%3C/svg%3E%0A") left -2px center no-repeat
}

.nhsuk-expander-group {
    margin-bottom: 16px
}

.nhsuk-expander-group>.nhsuk-details {
    margin-bottom: 8px
}

@media(min-width: 40.0625em) {
    .nhsuk-expander-group>.nhsuk-details {
        margin-bottom:8px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-expander-group {
        margin-bottom:24px
    }
}

.nhsuk-details+h2,.nhsuk-details+.nhsuk-heading-l {
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-details+h2,.nhsuk-details+.nhsuk-heading-l {
        padding-top:24px
    }
}

.nhsuk-do-dont-list {
    margin-bottom: 40px;
    margin-top: 40px;
    padding: 24px;
    background-color: #fff;
    color: #212b32;
    border: 1px solid #d8dde0;
    padding-top: 0 !important
}

.nhsuk-do-dont-list>*:first-child {
    margin-top: 0
}

.nhsuk-do-dont-list>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-do-dont-list {
        margin-bottom:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-do-dont-list {
        margin-top:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-do-dont-list {
        padding:32px
    }
}

@media print {
    .nhsuk-do-dont-list {
        border: 1px solid #212b32;
        page-break-inside: avoid
    }
}

.nhsuk-do-dont-list__label {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    background-color: #005eb8;
    color: #fff;
    display: inline-block;
    margin: 0 0 8px -33px;
    padding: 8px 32px;
    position: relative;
    top: -16px
}

@media(min-width: 40.0625em) {
    .nhsuk-do-dont-list__label {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-do-dont-list__label {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-do-dont-list__label {
        margin-left:-25px;
        margin-right: 0;
        padding: 8px 24px;
        top: -8px
    }
}

@media print {
    .nhsuk-do-dont-list__label {
        background: none;
        color: #212b32;
        top: 0
    }
}

@media print {
    .nhsuk-do-dont-list__label {
        color: #212b32;
        fill: #212b32
    }

    .nhsuk-do-dont-list__label:active,.nhsuk-do-dont-list__label:focus,.nhsuk-do-dont-list__label:visited {
        color: #212b32
    }
}

.nhsuk-error-message {
    font-weight: 600;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    clear: both;
    color: #d5281b;
    display: block;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-error-message {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-error-message {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-error-summary {
    padding: 16px;
    margin-bottom: 48px;
    border: 4px solid #d5281b
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary {
        padding:24px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary {
        margin-bottom:56px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary {
        border:4px solid #d5281b
    }
}

.nhsuk-error-summary:focus {
    border: 4px solid #212b32;
    box-shadow: 0 0 0 4px #ffeb3b;
    outline: 4px solid rgba(0,0,0,0)
}

.nhsuk-error-summary__title {
    font-weight: 600;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary__title {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-error-summary__title {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary__title {
        margin-bottom:24px
    }
}

.nhsuk-error-summary__body {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary__body {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-error-summary__body {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-error-summary__body p {
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-error-summary__body p {
        margin-bottom:24px
    }
}

.nhsuk-error-summary__list {
    margin-bottom: 0;
    margin-top: 0
}

.nhsuk-error-summary__list a {
    font-weight: 600
}

.nhsuk-error-summary__list a:link,.nhsuk-error-summary__list a:visited,.nhsuk-error-summary__list a:hover,.nhsuk-error-summary__list a:active {
    color: #d5281b
}

.nhsuk-error-summary__list a:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-fieldset {
    border: 0;
    margin: 0;
    padding: 0
}

.nhsuk-fieldset:after {
    clear: both;
    content: "";
    display: block
}

.nhsuk-fieldset__legend {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    box-sizing: border-box;
    color: #212b32;
    display: table;
    margin-bottom: 8px;
    margin-top: 0;
    max-width: 100%;
    padding: 0;
    white-space: normal
}

@media(min-width: 40.0625em) {
    .nhsuk-fieldset__legend {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-fieldset__legend {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-fieldset__legend--xl {
    font-weight: 600;
    font-size: 32px;
    font-size: 2rem;
    line-height: 1.25;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-fieldset__legend--xl {
        font-size:48px;
        font-size: 3rem;
        line-height: 1.16667
    }
}

@media print {
    .nhsuk-fieldset__legend--xl {
        font-size: 32pt;
        line-height: 1.15
    }
}

.nhsuk-fieldset__legend--l {
    font-weight: 600;
    font-size: 24px;
    font-size: 1.5rem;
    line-height: 1.33333;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-fieldset__legend--l {
        font-size:32px;
        font-size: 2rem;
        line-height: 1.25
    }
}

@media print {
    .nhsuk-fieldset__legend--l {
        font-size: 24pt;
        line-height: 1.05
    }
}

.nhsuk-fieldset__legend--m {
    font-weight: 600;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-fieldset__legend--m {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-fieldset__legend--m {
        font-size: 18pt;
        line-height: 1.15
    }
}

.nhsuk-fieldset__legend--s {
    font-weight: 600;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-fieldset__legend--s {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-fieldset__legend--s {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-fieldset__heading {
    font-size: inherit;
    font-weight: inherit;
    margin: 0
}

.nhsuk-footer-container {
    padding-bottom: 24px;
    padding-top: 24px;
    background-color: #d8dde0;
    border-top: 4px solid #005eb8
}

.nhsuk-footer-container:after {
    clear: both;
    content: "";
    display: block
}

@media print {
    .nhsuk-footer-container {
        display: none
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-footer-container {
        padding-bottom:32px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-footer-container {
        padding-top:32px
    }
}

.nhsuk-footer {
    background-color: #d8dde0;
    margin-bottom: 15px
}

@media(min-width: 48.0625em) {
    .nhsuk-footer {
        display:flex
    }
}

.nhsuk-footer__list {
    padding-bottom: 16px;
    list-style-type: none;
    margin-bottom: 25px;
    padding-left: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-footer__list {
        padding-bottom:24px
    }
}

.nhsuk-footer__list:last-child {
    margin-bottom: 15px
}

@media(min-width: 48.0625em) {
    .nhsuk-footer__list {
        float:left;
        padding-bottom: 0;
        padding-right: 40px;
        width: 75%
    }

    .nhsuk-footer__list:last-child {
        padding-right: 0
    }
}

.nhsuk-footer__list-item {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429
}

@media(min-width: 40.0625em) {
    .nhsuk-footer__list-item {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-footer__list-item {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(min-width: 48.0625em) {
    .nhsuk-footer__list-item {
        float:none;
        margin-right: 0
    }
}

@media(min-width: 48.0625em) {
    .nhsuk-footer-default__list-item {
        float:left;
        margin-right: 32px
    }
}

.nhsuk-footer__list-item-link {
    color: #003087
}

.nhsuk-footer__list-item-link:visited {
    color: #003087
}

.nhsuk-footer__list-item-link:hover {
    color: #7c2855
}

.nhsuk-footer__copyright {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    color: #231f20;
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-footer__copyright {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-footer__copyright {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(max-width: 48.0525em) {
    .nhsuk-footer__meta {
        border-top:1px solid #f0f4f5;
        padding-top: 35px
    }
}

.nhsuk-header {
    background-color: #005eb8
}

.nhsuk-header__container {
    margin: 0 16px;
    max-width: 960px;
    padding: 20px 0
}

@media(min-width: 48.0625em) {
    .nhsuk-header__container {
        margin:0 32px
    }
}

@media(min-width: 1024px) {
    .nhsuk-header__container {
        margin:0 auto
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-header__container {
        padding-bottom:0
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-header__container {
        border-bottom:1px solid rgba(255,255,255,.2);
        display: flex;
        justify-content: space-between
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-header__logo {
        position:relative;
        z-index: 1
    }
}

.nhsuk-header__logo .nhsuk-logo__background {
    fill: #fff
}

@media print {
    .nhsuk-header__logo .nhsuk-logo__background {
        fill: #005eb8
    }
}

.nhsuk-header__logo .nhsuk-logo__text {
    fill: #005eb8
}

@media print {
    .nhsuk-header__logo .nhsuk-logo__text {
        fill: #fff
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-header__logo {
        padding-left:0
    }
}

.nhsuk-header__logo .nhsuk-logo {
    height: 40px;
    width: 100px;
    border: 0
}

@media(max-width: 48.0525em) {
    .nhsuk-header__logo {
        max-width:60%
    }
}

@media(max-width: 450px) {
    .nhsuk-header__logo {
        max-width:50%
    }
}

.nhsuk-header__link {
    height: 40px;
    width: 100px;
    display: block
}

.nhsuk-header__link:hover .nhsuk-logo {
    box-shadow: 0 0 0 4px #003d78
}

.nhsuk-header__link:focus {
    box-shadow: none
}

.nhsuk-header__link:focus .nhsuk-logo {
    box-shadow: 0 0 0 4px #ffeb3b,0 4px 0 4px #212b32
}

@media print {
    .nhsuk-header__link:after {
        content: ""
    }
}

.nhsuk-header__link:hover,.nhsuk-header__link:active,.nhsuk-header__link:focus {
    background-color: rgba(0,0,0,0)
}

.nhsuk-header__logo--only {
    max-width: 100%
}

@media(max-width: 40.0525em) {
    .nhsuk-header__logo--only {
        padding-bottom:16px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-header__logo--only .nhsuk-header__link--service {
        align-items:center;
        display: flex;
        -ms-flex-align: center;
        margin-bottom: 0;
        width: auto
    }

    .nhsuk-header__logo--only .nhsuk-header__service-name {
        padding-left: 16px
    }
}

.nhsuk-header__content {
    position: relative
}

@media print {
    .nhsuk-header__content {
        display: none
    }
}

.nhsuk-header__content.js-show {
    border-bottom: 4px solid #f0f4f5
}

@media(min-width: 40.0625em) {
    .nhsuk-header__content.js-show {
        border-bottom:0
    }
}

.nhsuk-header__search {
    position: relative;
    text-align: right
}

@media(min-width: 40.0625em) {
    .nhsuk-header__search {
        margin-left:8px
    }
}

.nhsuk-header__search-form {
    height: 100%;
    overflow: visible
}

@media(max-width: 40.0525em) {
    .nhsuk-header__search-form {
        display:flex;
        margin: 16px 0 0;
        position: relative;
        width: 100%
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-header__search-wrap {
        display:block
    }
}

.nhsuk-search__input {
    -webkit-appearance: listbox;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
    border-top-left-radius: 4px;
    border-top-right-radius: 0;
    padding: 0 16px
}

.nhsuk-search__input:focus {
    border: 4px solid #212b32;
    box-shadow: 0 0 0 4px #ffeb3b;
    outline: 4px solid rgba(0,0,0,0);
    outline-offset: 4px;
    padding: 0 13px
}

.nhsuk-search__input::placeholder {
    color: #4c6272;
    font-size: 16px
}

.nhsuk-search__input:-ms-input-placeholder {
    color: #4c6272;
    font-size: 16px
}

.nhsuk-search__input::-webkit-input-placeholder {
    color: #4c6272;
    font-size: 16px
}

@media(max-width: 40.0525em) {
    .nhsuk-search__input {
        border:1px solid #fff;
        border-bottom-right-radius: 4px;
        border-top-right-radius: 4px;
        flex-grow: 2;
        -ms-flex-positive: 2;
        font-size: inherit;
        height: 40px;
        margin: 0;
        outline: none;
        width: 100%;
        z-index: 1
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-search__input {
        border:1px solid #fff;
        font-size: 16px;
        height: 40px;
        width: 200px
    }
}

@media(min-width: 48.0625em) {
    .nhsuk-search__input {
        width:235px
    }
}

.nhsuk-search__submit {
    border: 0;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 4px;
    border-top-left-radius: 0;
    border-top-right-radius: 4px;
    float: right;
    font-size: inherit;
    line-height: inherit;
    outline: none;
    padding: 0
}

.nhsuk-search__submit::-moz-focus-inner {
    border: 0
}

.nhsuk-search__submit:hover {
    cursor: pointer
}

@media(max-width: 40.0525em) {
    .nhsuk-search__submit {
        background-color:#f0f4f5;
        border: 0;
        height: 40px;
        margin: 0;
        padding: 8px 8px 0;
        position: absolute;
        right: 0;
        top: 0;
        z-index: 9
    }

    .nhsuk-search__submit .nhsuk-icon__search {
        fill: #005eb8;
        height: 27px;
        width: 27px
    }

    .nhsuk-search__submit:hover {
        background-color: #003d78;
        border: 1px solid #fff
    }

    .nhsuk-search__submit:hover .nhsuk-icon {
        fill: #fff
    }

    .nhsuk-search__submit:focus {
        background-color: #ffeb3b;
        box-shadow: 0 -4px #ffeb3b,0 4px #212b32;
        outline: 4px solid rgba(0,0,0,0);
        outline-offset: 4px
    }

    .nhsuk-search__submit:focus:hover {
        background-color: #ffeb3b
    }

    .nhsuk-search__submit:focus:hover .nhsuk-icon {
        fill: #212b32
    }

    .nhsuk-search__submit:focus .nhsuk-icon {
        fill: #212b32
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-search__submit {
        background-color:#f0f4f5;
        display: block;
        height: 40px;
        line-height: 1;
        width: 44px
    }

    .nhsuk-search__submit .nhsuk-icon__search {
        height: 27px;
        width: 27px
    }

    .nhsuk-search__submit:hover {
        background-color: #003d78;
        border: 1px solid #fff
    }

    .nhsuk-search__submit:hover .nhsuk-icon__search {
        fill: #fff
    }

    .nhsuk-search__submit:focus {
        background-color: #ffeb3b;
        border: 0;
        box-shadow: 0 4px 0 0 #212b32;
        color: #212b32;
        outline: 4px solid rgba(0,0,0,0);
        outline-offset: 4px;
        box-shadow: 0 -2px #ffeb3b,0 4px #212b32
    }

    .nhsuk-search__submit:focus .nhsuk-icon {
        fill: #212b32
    }

    .nhsuk-search__submit:active {
        background-color: #002f5c;
        border: 0
    }

    .nhsuk-search__submit:active .nhsuk-icon__search {
        fill: #fff
    }
}

.nhsuk-header__navigation-link {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    border-bottom: 4px solid rgba(0,0,0,0);
    border-top: 4px solid rgba(0,0,0,0);
    color: #fff;
    display: block;
    font-size: inherit;
    padding: 16px 12px;
    text-decoration: underline;
    white-space: nowrap
}

@media(min-width: 40.0625em) {
    .nhsuk-header__navigation-link {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-header__navigation-link {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-header__navigation-link {
        padding:12px 16px
    }
}

.nhsuk-header__navigation-link .nhsuk-icon__chevron-right {
    fill: #aeb7bd;
    position: absolute;
    right: 4px;
    top: 11px
}

.nhsuk-header__navigation-link:visited {
    color: #fff
}

@media(min-width: 61.875em) {
    .nhsuk-header__navigation-link:visited {
        color:#fff
    }
}

.nhsuk-header__navigation-link:hover {
    box-shadow: none;
    color: #fff;
    text-decoration: none
}

@media(min-width: 61.875em) {
    .nhsuk-header__navigation-link:hover {
        color:#fff
    }
}

.nhsuk-header__navigation-link:active,.nhsuk-header__navigation-link:focus {
    background-color: #ffeb3b;
    border-bottom: 4px solid #212b32;
    box-shadow: none;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    outline-offset: 4px;
    text-decoration: none
}

.nhsuk-header__navigation-link:active:hover,.nhsuk-header__navigation-link:focus:hover {
    background-color: #ffeb3b;
    color: #212b32
}

.nhsuk-header__navigation-link:active:visited,.nhsuk-header__navigation-link:focus:visited {
    background-color: #ffeb3b;
    color: #212b32
}

.nhsuk-header__menu-toggle {
    background: rgba(0,0,0,0);
    border: 0;
    border-bottom: 4px solid rgba(0,0,0,0);
    border-radius: 0;
    border-top: 4px solid rgba(0,0,0,0);
    box-sizing: border-box;
    cursor: pointer;
    margin: 0;
    overflow: visible;
    position: relative;
    right: 0;
    text-align: center;
    text-decoration: underline;
    vertical-align: top;
    visibility: hidden;
    width: auto;
    z-index: 1
}

.nhsuk-header__menu-toggle.nhsuk-header__navigation-link {
    padding-right: 30px
}

@media(min-width: 48.0625em) {
    .nhsuk-header__menu-toggle {
        display:none
    }
}

.nhsuk-header__menu-toggle:focus {
    text-decoration: none
}

.nhsuk-header__menu-toggle:focus .nhsuk-icon__chevron-down {
    fill: #212b32
}

.nhsuk-header__menu-toggle--visible {
    visibility: visible;
    display: block
}

.nhsuk-header__menu-toggle[aria-expanded=true] .nhsuk-icon__chevron-down {
    transform: rotate(270deg)
}

.nhsuk-navigation {
    display: flex
}

@media(max-width: 40.0525em) {
    .nhsuk-navigation {
        position:relative;
        z-index: 10
    }
}

.nhsuk-header__drop-down,.nhsuk-header__navigation-list {
    list-style: none;
    margin: 0;
    padding: 0
}

.nhsuk-header__navigation-list {
    margin: 0 16px;
    max-width: 960px;
    width: 100%
}

@media(min-width: 48.0625em) {
    .nhsuk-header__navigation-list {
        margin:0 32px
    }
}

@media(min-width: 1024px) {
    .nhsuk-header__navigation-list {
        margin:0 auto
    }
}

@media(min-width: 48.0625em) {
    .nhsuk-header__navigation-list {
        display:flex;
        justify-content: space-between
    }
}

.js-enabled .nhsuk-header__navigation-list {
    display: flex
}

.nhsuk-header__navigation-item {
    margin-bottom: 0
}

.nhsuk-navigation-container {
    position: relative
}

.nhsuk-header__drop-down {
    background-color: #fff;
    border-bottom: 4px solid #f0f4f5;
    overflow: hidden;
    position: absolute;
    right: 0;
    top: 100%;
    left: 0
}

@media print {
    .nhsuk-header__drop-down {
        display: none
    }
}

.nhsuk-header__drop-down .nhsuk-header__navigation-link {
    color: #005eb8;
    padding: 12px 16px
}

.nhsuk-header__drop-down .nhsuk-header__navigation-item {
    border-top: 1px solid #f0f4f5;
    margin-bottom: 0
}

@media(min-width: 61.875em) {
    .nhsuk-header__drop-down .nhsuk-header__navigation-item {
        border-top:0;
        margin: 0;
        text-align: center
    }
}

.nhsuk-header__drop-down--hidden {
    display: none
}

.nhsuk-mobile-menu-container {
    align-self: center;
    display: none
}

.nhsuk-mobile-menu-container--visible {
    display: block
}

@media(min-width: 48.0625em) {
    .nhsuk-header__navigation-item--home {
        display:none
    }
}


.nhsuk-header__link--service {
    height: auto;
    margin-bottom: -4px;
    text-decoration: none;
    width: auto
}

@media(min-width: 61.875em) {
    .nhsuk-header__link--service {
        align-items:center;
        display: flex;
        -ms-flex-align: center;
        margin-bottom: 0;
        width: auto
    }
}

.nhsuk-header__link--service:hover {
    background: none
}

.nhsuk-header__link--service:hover .nhsuk-header__service-name {
    text-decoration: underline
}

.nhsuk-header__link--service:focus {
    background: #ffeb3b;
    box-shadow: 0 0 0 4px #ffeb3b,0 4px 0 4px #212b32
}

.nhsuk-header__link--service:focus .nhsuk-header__service-name {
    color: #212b32;
    text-decoration: none
}

.nhsuk-header__link--service:focus .nhsuk-logo {
    box-shadow: none
}

.nhsuk-header__service-name {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    color: #fff;
    display: block;
    padding-left: 0;
    padding-right: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-header__service-name {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-header__service-name {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 61.875em) {
    .nhsuk-header__service-name {
        padding-left:16px
    }
}

@media(max-width: 61.865em) {
    .nhsuk-header__service-name {
        max-width:220px
    }
}

.nhsuk-header__transactional-service-name {
    padding-left: 16px;
    padding-top: 3px
}

@media(max-width: 40.0525em) {
    .nhsuk-header__transactional-service-name {
        padding-bottom:16px
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-header__transactional-service-name {
        padding-left:0;
        padding-top: 8px;
        width: 100%
    }
}

.nhsuk-header__transactional-service-name--link {
    color: #fff;
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    text-decoration: none
}

.nhsuk-header__transactional-service-name--link:visited {
    color: #fff
}

.nhsuk-header__transactional-service-name--link:hover {
    color: #fff;
    text-decoration: none
}

.nhsuk-header__transactional-service-name--link:focus {
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    outline-offset: 4px;
    text-decoration: none
}

.nhsuk-header__transactional-service-name--link:active {
    color: #002f5c
}

@media(min-width: 40.0625em) {
    .nhsuk-header__transactional-service-name--link {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-header__transactional-service-name--link {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-header__transactional-service-name--link:hover {
    text-decoration: underline
}

.nhsuk-header__transactional .nhsuk-header__container {
    justify-content: normal
}

.nhsuk-header__transactional .nhsuk-header__link {
    height: 32px;
    width: 80px;
    display: block
}

.nhsuk-header__transactional .nhsuk-logo {
    height: 32px;
    width: 80px
}

.nhsuk-header__transactional--logo {
    max-width: 100%
}

@media(min-width: 40.0625em) {
    .nhsuk-header__transactional--logo .nhsuk-header__link--service {
        align-items:center;
        display: flex;
        -ms-flex-align: center;
        margin-bottom: 0;
        width: auto
    }

    .nhsuk-header__transactional--logo .nhsuk-header__service-name {
        padding-left: 16px
    }
}

.nhsuk-header--white {
    background-color: #fff
}

.nhsuk-header--white .nhsuk-header__search-wrap {
    margin-bottom: 16px
}

@media(max-width: 40.0525em) {
    .nhsuk-header--white .nhsuk-header__search-wrap::after {
        background:#fff
    }
}

.nhsuk-header--white .nhsuk-navigation-container {
    background-color: #005eb8
}

.nhsuk-header--white .nhsuk-logo .nhsuk-logo__background {
    fill: #005eb8
}

.nhsuk-header--white .nhsuk-logo .nhsuk-logo__text {
    fill: #fff
}

.nhsuk-header--white .nhsuk-header__link:hover {
    color: #212b32;
    text-decoration: underline
}

.nhsuk-header--white .nhsuk-header__link:hover .nhsuk-organisation-descriptor {
    color: #212b32
}

.nhsuk-header--white .nhsuk-search__submit {
    background-color: #005eb8
}

.nhsuk-header--white .nhsuk-search__submit .nhsuk-icon__search {
    fill: #fff
}

.nhsuk-header--white .nhsuk-search__submit:hover {
    background-color: #004b93;
    border-color: #004b93
}

.nhsuk-header--white .nhsuk-search__submit:focus {
    background-color: #ffeb3b
}

.nhsuk-header--white .nhsuk-search__submit:focus .nhsuk-icon__search {
    fill: #212b32
}

.nhsuk-header--white .nhsuk-search__input {
    border: 1px solid #aeb7bd
}

.nhsuk-header--white .nhsuk-search__input:focus {
    border: 2px solid #212b32
}

@media(max-width: 40.0525em) {
    .nhsuk-header--white .nhsuk-search__input:focus {
        border:4px solid #212b32
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-header--white .nhsuk-header__search-form {
        padding-top:0
    }
}

.nhsuk-header--white .nhsuk-organisation-name {
    color: #000
}

.nhsuk-header--white .nhsuk-organisation-descriptor {
    color: #005eb8
}

.nhsuk-header--white .nhsuk-header__transactional-service-name--link {
    color: #212b32
}

.nhsuk-header--white .nhsuk-header__service-name {
    color: #212b32
}
.nhsuk-hero {
    background-color: #005eb8;
    color: #fff;
    position: relative
}

@media print {
    .nhsuk-hero {
        color: #212b32;
        fill: #212b32
    }

    .nhsuk-hero:active,.nhsuk-hero:focus,.nhsuk-hero:visited {
        color: #212b32
    }
}

.nhsuk-hero .nhsuk-hero--border {
    border-top: 1px solid rgba(255,255,255,.2)
}

.nhsuk-hero__wrapper {
    padding-top: 48px;
    padding-bottom: 48px
}

@media(min-width: 40.0625em) {
    .nhsuk-hero__wrapper {
        padding-top:56px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-hero__wrapper {
        padding-bottom:56px
    }
}

.nhsuk-hero--image {
    background-position: center right;
    background-repeat: no-repeat;
    background-size: cover
}

@media only screen {
    .nhsuk-hero--image {
        min-height: 200px
    }
}

@media only screen and (min-width: 40.0625em) {
    .nhsuk-hero--image {
        min-height:320px
    }

    .nhsuk-hero--image .nhsuk-hero__overlay {
        height: 320px
    }
}

@media screen and (-ms-high-contrast: active) {
    .nhsuk-hero--image {
        min-height: 0
    }
}

.nhsuk-hero--image .nhsuk-hero__overlay {
    background-color: rgba(0,47,92,.1)
}

@media only screen {
    .nhsuk-hero--image .nhsuk-hero__overlay {
        min-height: 200px
    }
}

@media screen and (-ms-high-contrast: active) {
    .nhsuk-hero--image .nhsuk-hero__overlay {
        height: auto;
        min-height: 0
    }
}

.nhsuk-hero--image-description .nhsuk-hero-content {
    background-color: #005eb8;
    color: #fff;
    margin-bottom: 24px;
    padding: 24px;
    position: relative;
    top: 70px
}

.nhsuk-hero--image-description .nhsuk-hero-content .nhsuk-hero__arrow {
    bottom: -10px;
    display: block;
    height: 20px;
    left: 32px;
    overflow: hidden;
    position: absolute;
    transform: rotate(45deg);
    width: 20px
}

@media print {
    .nhsuk-hero--image-description .nhsuk-hero-content .nhsuk-hero__arrow {
        display: none
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-hero--image-description .nhsuk-hero-content .nhsuk-hero__arrow {
        left:46px
    }
}

.nhsuk-hero--image-description .nhsuk-hero-content .nhsuk-hero__arrow:before,.nhsuk-hero--image-description .nhsuk-hero-content .nhsuk-hero__arrow:after {
    border: solid 32px #005eb8;
    content: "";
    display: block;
    height: 0;
    position: absolute;
    top: 0;
    transform: rotate(45deg);
    width: 0
}

@media screen and (-ms-high-contrast: active) {
    .nhsuk-hero--image-description .nhsuk-hero-content .nhsuk-hero__arrow {
        display: none
    }
}

@media(min-width: 23.4375em) {
    .nhsuk-hero--image-description .nhsuk-hero-content {
        width:85%
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-hero--image-description .nhsuk-hero-content {
        bottom:-48px;
        margin-bottom: 0;
        max-width: 35em;
        padding: 32px 40px;
        position: absolute;
        top: auto
    }

    .nhsuk-hero--image-description .nhsuk-hero-content>*:first-child {
        margin-top: 0
    }

    .nhsuk-hero--image-description .nhsuk-hero-content>*:last-child {
        margin-bottom: 0
    }
}

@media print {
    .nhsuk-hero--image-description .nhsuk-hero-content {
        color: #212b32;
        max-width: 100%;
        padding: 0
    }
}

@media screen and (-ms-high-contrast: active) {
    .nhsuk-hero--image-description .nhsuk-hero-content {
        bottom: 0;
        margin-bottom: 0;
        min-height: 0;
        padding: 32px 0 0;
        position: relative;
        top: 0
    }
}

.nhsuk-hint {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    color: #4c6272;
    display: block;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-hint {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-hint {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-label:not(.nhsuk-label--m):not(.nhsuk-label--l):not(.nhsuk-label--xl)+.nhsuk-hint {
    margin-bottom: 8px
}

.nhsuk-fieldset__legend:not(.nhsuk-fieldset__legend--m):not(.nhsuk-fieldset__legend--l):not(.nhsuk-fieldset__legend--xl)+.nhsuk-hint {
    margin-bottom: 8px
}

.nhsuk-fieldset__legend+.nhsuk-hint {
    margin-top: -4px
}

.nhsuk-image {
    background-color: #fff;
    border-bottom: 1px solid #d8dde0;
    margin-left: 0;
    margin-right: 0;
    margin-bottom: 32px;
    margin-top: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-image {
        margin-bottom:40px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-image {
        margin-top:40px
    }
}

@media(min-width: 48.0625em) {
    .nhsuk-image {
        width:66.66667%
    }
}

@media print {
    .nhsuk-image {
        width: 50%
    }
}

.nhsuk-image+.nhsuk-image {
    margin-top: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-image+.nhsuk-image {
        margin-top:0
    }
}

.nhsuk-image__img {
    display: block;
    width: 100%
}

.nhsuk-image__caption {
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    padding: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-image__caption {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-image__caption {
        font-size: 14pt;
        line-height: 1.2
    }
}

.nhsuk-input {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    border: 2px solid #4c6272;
    border-radius: 0;
    box-sizing: border-box;
    height: 40px;
    margin-top: 0;
    padding: 4px;
    width: 100%
}

@media(min-width: 40.0625em) {
    .nhsuk-input {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-input {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-input:focus {
    border: 2px solid #212b32;
    box-shadow: inset 0 0 0 2px;
    outline: 4px solid #ffeb3b;
    outline-offset: 0
}

.nhsuk-input::-webkit-outer-spin-button,.nhsuk-input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0
}

.nhsuk-input[type=number] {
    -moz-appearance: textfield
}

.nhsuk-input--error {
    border: 2px solid #d5281b
}

.nhsuk-input--width-30 {
    max-width: 59ex
}

.nhsuk-input--width-20 {
    max-width: 41ex
}

.nhsuk-input--width-10 {
    max-width: 23ex
}

.nhsuk-input--width-5 {
    max-width: 10.8ex
}

.nhsuk-input--width-4 {
    max-width: 9ex
}

.nhsuk-input--width-3 {
    max-width: 7.2ex
}

.nhsuk-input--width-2 {
    max-width: 5.4ex
}

.nhsuk-input__wrapper {
    display: flex
}

@media(max-width: 19.99em) {
    .nhsuk-input__wrapper {
        display:block
    }
}

.nhsuk-input__prefix,.nhsuk-input__suffix {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    background-color: #d8dde0;
    border: 2px solid #4c6272;
    box-sizing: border-box;
    cursor: default;
    display: inline-block;
    flex: 0 0 auto;
    height: 40px;
    min-width: 2.5rem;
    padding: 4px;
    text-align: center;
    white-space: nowrap
}

@media(min-width: 40.0625em) {
    .nhsuk-input__prefix,.nhsuk-input__suffix {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-input__prefix,.nhsuk-input__suffix {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(max-width: 19.99em) {
    .nhsuk-input__prefix,.nhsuk-input__suffix {
        max-width:9.1ex;
        display: block;
        height: 100%;
        white-space: normal
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-input__prefix,.nhsuk-input__suffix {
        line-height:1.6;
        font-size: 1.1875rem
    }
}

@media(max-width: 19.99em) {
    .nhsuk-input__prefix {
        border-bottom:0
    }
}

@media(min-width: 20em) {
    .nhsuk-input__prefix {
        border-right:0
    }
}

@media(max-width: 19.99em) {
    .nhsuk-input__suffix {
        border-top:0
    }
}

@media(min-width: 20em) {
    .nhsuk-input__suffix {
        border-left:0
    }
}

.nhsuk-inset-text {
    max-width: 44em;
    margin-bottom: 40px;
    margin-top: 40px;
    padding: 16px;
    border-left: 8px solid #005eb8
}

.nhsuk-inset-text>*:first-child {
    margin-top: 0
}

.nhsuk-inset-text>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-inset-text {
        margin-bottom:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-inset-text {
        margin-top:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-inset-text {
        padding:24px
    }
}

@media print {
    .nhsuk-inset-text {
        border-color: #212b32
    }
}

.nhsuk-label {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    margin-bottom: 4px
}

@media(min-width: 40.0625em) {
    .nhsuk-label {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-label {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-label--xl {
    font-size: 32px;
    font-size: 2rem;
    line-height: 1.25;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-label--xl {
        font-size:48px;
        font-size: 3rem;
        line-height: 1.16667
    }
}

@media print {
    .nhsuk-label--xl {
        font-size: 32pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-label--xl {
        margin-bottom:48px
    }
}

.nhsuk-label--l {
    font-size: 24px;
    font-size: 1.5rem;
    line-height: 1.33333;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-label--l {
        font-size:32px;
        font-size: 2rem;
        line-height: 1.25
    }
}

@media print {
    .nhsuk-label--l {
        font-size: 24pt;
        line-height: 1.05
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-label--l {
        margin-bottom:24px
    }
}

.nhsuk-label--m {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-label--m {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-label--m {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-label--m {
        margin-bottom:24px
    }
}

.nhsuk-label--s {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    display: block;
    font-weight: 600;
    margin-top: 0;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-label--s {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-label--s {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-label--s {
        margin-bottom:24px
    }
}

.nhsuk-label-wrapper {
    margin: 0
}

.nhsuk-pagination {
    margin-top: 40px;
    margin-bottom: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-pagination {
        margin-top:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-pagination {
        margin-bottom:48px
    }
}

.nhsuk-pagination__list:after {
    clear: both;
    content: "";
    display: block
}

.nhsuk-pagination-item--previous {
    float: left;
    text-align: left;
    width: 50%
}

.nhsuk-pagination-item--previous .nhsuk-icon {
    left: -6px
}

.nhsuk-pagination-item--previous .nhsuk-pagination__title {
    padding-left: 32px
}

.nhsuk-pagination-item--next {
    float: right;
    text-align: right;
    width: 50%
}

.nhsuk-pagination-item--next .nhsuk-icon {
    right: -6px
}

.nhsuk-pagination-item--next .nhsuk-pagination__title {
    padding-right: 32px
}

.nhsuk-pagination__link {
    display: block;
    position: relative;
    text-decoration: none;
    width: 100%
}

@media print {
    .nhsuk-pagination__link {
        color: #212b32
    }
}

.nhsuk-pagination__link .nhsuk-icon {
    position: absolute;
    top: -2px
}

@media print {
    .nhsuk-pagination__link .nhsuk-icon {
        color: #212b32;
        margin-top: 0
    }
}

.nhsuk-pagination__link:hover {
    color: #7c2855
}

.nhsuk-pagination__link:hover .nhsuk-icon {
    fill: #7c2855
}

.nhsuk-pagination__link:hover .nhsuk-pagination__page {
    text-decoration: none
}

.nhsuk-pagination__link:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-pagination__link:focus .nhsuk-pagination__page {
    text-decoration: none
}

.nhsuk-pagination__link:focus:visited .nhsuk-icon,.nhsuk-pagination__link:focus:hover .nhsuk-icon,.nhsuk-pagination__link:focus:active .nhsuk-icon {
    fill: #212b32
}

.nhsuk-pagination__link:visited .nhsuk-icon {
    fill: #330072
}

.nhsuk-pagination__link:visited:hover .nhsuk-icon {
    fill: #7c2855
}

.nhsuk-pagination__link:visited:focus .nhsuk-icon {
    fill: #212b32
}

.nhsuk-pagination__title {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    display: block
}

@media(min-width: 40.0625em) {
    .nhsuk-pagination__title {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-pagination__title {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media print {
    .nhsuk-pagination__title:after {
        content: " page"
    }
}

.nhsuk-pagination__page {
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    display: block;
    text-decoration: underline
}

@media(min-width: 40.0625em) {
    .nhsuk-pagination__page {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-pagination__page {
        font-size: 14pt;
        line-height: 1.2
    }
}

.nhsuk-checkboxes__item {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    clear: left;
    display: block;
    margin-bottom: 8px;
    min-height: 40px;
    padding: 0 0 0 40px;
    position: relative
}

@media(min-width: 40.0625em) {
    .nhsuk-checkboxes__item {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-checkboxes__item {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-checkboxes__item:last-child,.nhsuk-checkboxes__item:last-of-type {
    margin-bottom: 0
}

.nhsuk-checkboxes__input {
    cursor: pointer;
    height: 40px;
    left: 0;
    margin: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    width: 40px;
    z-index: 1
}

.nhsuk-checkboxes__label {
    cursor: pointer;
    display: inline-block;
    margin-bottom: 0;
    padding: 8px 12px 4px;
    -ms-touch-action: manipulation;
    touch-action: manipulation
}

.nhsuk-checkboxes__hint {
    display: block;
    padding-left: 12px;
    padding-right: 12px
}

.nhsuk-checkboxes__input+.nhsuk-checkboxes__label::before {
    background: #fff;
    border: 2px solid #4c6272;
    box-sizing: border-box;
    content: "";
    height: 40px;
    left: 0;
    position: absolute;
    top: 0;
    width: 40px
}

.nhsuk-checkboxes__input+.nhsuk-checkboxes__label::after {
    background: rgba(0,0,0,0);
    border: solid;
    border-top-color: rgba(0,0,0,0);
    border-width: 0 0 4px 4px;
    content: "";
    height: 10px;
    left: 10px;
    opacity: 0;
    position: absolute;
    top: 13px;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
    width: 22px
}

.nhsuk-checkboxes__input:focus+.nhsuk-checkboxes__label::before {
    border: 4px solid #212b32;
    box-shadow: 0 0 0 4px #ffeb3b
}

.nhsuk-checkboxes__input:checked+.nhsuk-checkboxes__label::after {
    opacity: 1
}

.nhsuk-checkboxes__input:disabled,.nhsuk-checkboxes__input:disabled+.nhsuk-checkboxes__label {
    cursor: default
}

.nhsuk-checkboxes__input:disabled+.nhsuk-checkboxes__label {
    opacity: .5
}

.nhsuk-checkboxes__divider {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    color: #212b32;
    margin-bottom: 8px;
    text-align: center;
    width: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-checkboxes__divider {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-checkboxes__divider {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-checkboxes__conditional {
    margin-bottom: 16px;
    border-left: 4px solid #4c6272;
    margin-left: 18px;
    padding-left: 30px
}

@media(min-width: 40.0625em) {
    .nhsuk-checkboxes__conditional {
        margin-bottom:24px
    }
}

.nhsuk-checkboxes__conditional>:last-child {
    margin-bottom: 0
}

.js-enabled .nhsuk-checkboxes__conditional--hidden {
    display: none
}

.nhsuk-radios__item {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    clear: left;
    display: block;
    margin-bottom: 8px;
    min-height: 40px;
    padding: 0 0 0 40px;
    position: relative
}

@media(min-width: 40.0625em) {
    .nhsuk-radios__item {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-radios__item {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-radios__item:last-child,.nhsuk-radios__item:last-of-type {
    margin-bottom: 0
}

.nhsuk-radios__input {
    cursor: pointer;
    height: 40px;
    left: 0;
    margin: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    width: 40px;
    z-index: 1
}

.nhsuk-radios__label {
    cursor: pointer;
    display: inline-block;
    margin-bottom: 0;
    padding: 8px 12px 4px;
    -ms-touch-action: manipulation;
    touch-action: manipulation
}

.nhsuk-radios__hint {
    display: block;
    padding-left: 12px;
    padding-right: 12px
}

.nhsuk-radios__input+.nhsuk-radios__label::before {
    background: #fff;
    border: 2px solid #4c6272;
    border-radius: 50%;
    box-sizing: border-box;
    content: "";
    height: 40px;
    left: 0;
    position: absolute;
    top: 0;
    width: 40px
}

.nhsuk-radios__input+.nhsuk-radios__label::after {
    background: #4c6272;
    border: 10px solid #212b32;
    border-radius: 50%;
    content: "";
    height: 0;
    left: 10px;
    opacity: 0;
    position: absolute;
    top: 10px;
    width: 0
}

.nhsuk-radios__input:focus+.nhsuk-radios__label::before {
    border: 4px solid #212b32;
    box-shadow: 0 0 0 4px #ffeb3b
}

.nhsuk-radios__input:checked+.nhsuk-radios__label::after {
    opacity: 1
}

.nhsuk-radios__input:disabled,.nhsuk-radios__input:disabled+.nhsuk-radios__label {
    cursor: default
}

.nhsuk-radios__input:disabled+.nhsuk-radios__label {
    opacity: .5
}

@media(min-width: 40.0625em) {
    .nhsuk-radios--inline:after {
        clear:both;
        content: "";
        display: block
    }

    .nhsuk-radios--inline .nhsuk-radios__item {
        clear: none;
        float: left;
        margin-right: 24px
    }
}

.nhsuk-radios--inline.nhsuk-radios--conditional .nhsuk-radios__item {
    float: none;
    margin-right: 0
}

.nhsuk-radios__divider {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    color: #212b32;
    margin-bottom: 8px;
    text-align: center;
    width: 40px
}

@media(min-width: 40.0625em) {
    .nhsuk-radios__divider {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-radios__divider {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-radios__conditional {
    margin-bottom: 16px;
    border-left: 4px solid #4c6272;
    margin-left: 18px;
    padding-left: 30px
}

@media(min-width: 40.0625em) {
    .nhsuk-radios__conditional {
        margin-bottom:24px
    }
}

.nhsuk-radios__conditional>:last-child {
    margin-bottom: 0
}

.js-enabled .nhsuk-radios__conditional--hidden {
    display: none
}

.nhsuk-select {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    border: 2px solid #4c6272;
    box-sizing: border-box;
    height: 40px;
    max-width: 100%;
    padding: 4px
}

@media(min-width: 40.0625em) {
    .nhsuk-select {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-select {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-select:focus {
    border: 2px solid #212b32;
    box-shadow: inset 0 0 0 2px;
    outline: 4px solid #ffeb3b;
    outline-offset: 0
}

.nhsuk-select option:active,.nhsuk-select option:checked,.nhsuk-select:focus::-ms-value {
    background-color: #005eb8;
    color: #fff
}

.nhsuk-select--error {
    border: 2px solid #d5281b
}

.nhsuk-skip-link {
    left: -9999px;
    padding: 8px;
    position: absolute
}

.nhsuk-skip-link:active,.nhsuk-skip-link:focus {
    left: 16px;
    top: 16px;
    z-index: 2
}

.nhsuk-skip-link:visited {
    color: #212b32
}

.nhsuk-summary-list {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin: 0;
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-summary-list {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list {
        display:table;
        table-layout: fixed;
        width: 100%
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list {
        margin-bottom:40px
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-summary-list__row {
        border-bottom:1px solid #d8dde0;
        margin-bottom: 16px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list__row {
        display:table-row
    }
}

.nhsuk-summary-list__key,.nhsuk-summary-list__value,.nhsuk-summary-list__actions {
    margin: 0;
    vertical-align: top
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list__key,.nhsuk-summary-list__value,.nhsuk-summary-list__actions {
        border-bottom:1px solid #d8dde0;
        display: table-cell;
        padding-bottom: 8px;
        padding-right: 24px;
        padding-top: 8px
    }
}

.nhsuk-summary-list__actions {
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list__actions {
        padding-right:0;
        text-align: right;
        width: 20%
    }
}

.nhsuk-summary-list__key,.nhsuk-summary-list__value {
    overflow-wrap: break-word;
    word-wrap: break-word
}

.nhsuk-summary-list__key {
    font-weight: 600;
    margin-bottom: 4px
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list__key {
        width:30%
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-summary-list__value {
        margin-bottom:16px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-summary-list__value {
        width:50%
    }
}

.nhsuk-summary-list__value>p {
    margin-bottom: 8px
}

.nhsuk-summary-list__value>:last-child {
    margin-bottom: 0
}

.nhsuk-summary-list__actions-list {
    margin: 0;
    padding: 0;
    width: 100%
}

.nhsuk-summary-list__actions-list-item {
    display: inline;
    margin-right: 8px;
    padding-right: 8px
}

.nhsuk-summary-list__actions-list-item:not(:last-child) {
    border-right: 1px solid #d8dde0
}

.nhsuk-summary-list__actions-list-item:last-child {
    border: 0;
    margin-right: 0;
    padding-right: 0
}

.nhsuk-summary-list--no-border .nhsuk-summary-list__key,.nhsuk-summary-list--no-border .nhsuk-summary-list__value,.nhsuk-summary-list--no-border .nhsuk-summary-list__actions,.nhsuk-summary-list--no-border .nhsuk-summary-list__row {
    border: 0
}

.nhsuk-table-container {
    margin-bottom: 40px;
    display: block;
    -webkit-overflow-scrolling: touch;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    overflow-x: auto;
    width: 100%
}

@media(min-width: 40.0625em) {
    .nhsuk-table-container {
        margin-bottom:48px
    }
}

.nhsuk-table-container .nhsuk-table {
    margin: 0
}

.nhsuk-table__row:hover {
    background-color: #f0f4f5
}

.nhsuk-table__panel-with-heading-tab {
    margin-bottom: 40px;
    margin-top: 40px;
    padding: 24px;
    background-color: #fff;
    color: #212b32;
    border: 1px solid #d8dde0;
    padding-top: 0 !important
}

.nhsuk-table__panel-with-heading-tab>*:first-child {
    margin-top: 0
}

.nhsuk-table__panel-with-heading-tab>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-table__panel-with-heading-tab {
        margin-bottom:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-table__panel-with-heading-tab {
        margin-top:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-table__panel-with-heading-tab {
        padding:32px
    }
}

@media print {
    .nhsuk-table__panel-with-heading-tab {
        border: 1px solid #212b32;
        page-break-inside: avoid
    }
}

.nhsuk-table__panel-with-heading-tab .nhsuk-table-container,.nhsuk-table__panel-with-heading-tab .nhsuk-table {
    margin: 0
}

.nhsuk-table__heading-tab {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    background-color: #005eb8;
    color: #fff;
    display: inline-block;
    margin: 0 0 8px -33px;
    padding: 8px 32px;
    position: relative;
    top: -16px
}

@media(min-width: 40.0625em) {
    .nhsuk-table__heading-tab {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-table__heading-tab {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-table__heading-tab {
        margin-left:-25px;
        margin-right: 0;
        padding: 8px 24px;
        top: -8px
    }
}

@media print {
    .nhsuk-table__heading-tab {
        background: none;
        color: #212b32;
        top: 0
    }
}

.nhsuk-table-responsive {
    margin-bottom: 0;
    width: 100%
}

.nhsuk-table-responsive thead {
    border: 0;
    clip: rect(0 0 0 0);
    -webkit-clip-path: inset(50%);
    clip-path: inset(50%);
    height: 1px;
    margin: 0;
    overflow: hidden;
    padding: 0;
    position: absolute;
    white-space: nowrap;
    width: 1px
}

@media(min-width: 48.0625em) {
    .nhsuk-table-responsive thead {
        clip:auto;
        -webkit-clip-path: initial;
        clip-path: initial;
        display: table-header-group;
        height: auto;
        overflow: auto;
        position: relative;
        width: auto
    }
}

.nhsuk-table-responsive .nhsuk-table__body .nhsuk-table-responsive__heading {
    font-weight: 600;
    padding-right: 16px;
    text-align: left
}

@media(min-width: 48.0625em) {
    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table-responsive__heading {
        display:none
    }
}

.nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row {
    display: block;
    margin-bottom: 24px
}

.nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row:last-child {
    margin-bottom: 0
}

@media(min-width: 48.0625em) {
    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row {
        display:table-row
    }
}

.nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row th {
    text-align: right
}

@media(min-width: 48.0625em) {
    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row th {
        text-align:left
    }
}

.nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row td {
    display: block;
    display: flex;
    justify-content: space-between;
    min-width: 1px
}

@media all and (-ms-high-contrast: none) {
    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row td {
        display: block
    }
}

@media(min-width: 48.0625em) {
    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row td {
        display:table-cell
    }
}

@media(max-width: 48.0525em) {
    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row td {
        padding-right:0;
        text-align: right
    }

    .nhsuk-table-responsive .nhsuk-table__body .nhsuk-table__row td:last-child {
        border-bottom: 3px solid #d8dde0
    }
}

.nhsuk-table__header--numeric,.nhsuk-table__cell--numeric {
    text-align: right
}

.nhsuk-tag {
    font-weight: 600;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1;
    background-color: #0055a6;
    border: 1px solid #0055a6;
    color: #fff;
    display: inline-block;
    outline: 2px solid rgba(0,0,0,0);
    outline-offset: -2px;
    padding-bottom: 4px;
    padding-left: 8px;
    padding-right: 8px;
    padding-top: 4px;
    text-decoration: none
}

@media(min-width: 40.0625em) {
    .nhsuk-tag {
        font-size:16px;
        font-size: 1rem;
        line-height: 1
    }
}

@media print {
    .nhsuk-tag {
        font-size: 14pt;
        line-height: 1
    }
}

.nhsuk-tag--white {
    background-color: #fff;
    border-color: #212b32;
    color: #212b32
}

.nhsuk-tag--grey {
    background-color: #dbe0e3;
    border-color: #354550;
    color: #354550
}

.nhsuk-tag--green {
    background-color: #cce5d8;
    border-color: #004c23;
    color: #004c23
}

.nhsuk-tag--aqua-green {
    background-color: #ccedeb;
    border-color: #00524d;
    color: #00524d
}

.nhsuk-tag--blue {
    background-color: #ccdff1;
    border-color: #004281;
    color: #004281
}

.nhsuk-tag--purple {
    background-color: #d6cce3;
    border-color: #240050;
    color: #240050
}

.nhsuk-tag--pink {
    background-color: #efd3e3;
    border-color: #57133a;
    color: #57133a
}

.nhsuk-tag--red {
    background-color: #f7d4d1;
    border-color: #6b140e;
    color: #6b140e
}

.nhsuk-tag--orange {
    background-color: #ffdc8e;
    border-color: #4d3708;
    color: #4d3708
}

.nhsuk-tag--yellow {
    background-color: #fff59d;
    border-color: #4d4712;
    color: #4d4712
}

.nhsuk-tag--no-border {
    border: 0
}

.nhsuk-textarea {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    -webkit-appearance: none;
    border: 2px solid #4c6272;
    border-radius: 0;
    box-sizing: border-box;
    display: block;
    min-height: 40px;
    padding: 4px;
    resize: vertical;
    width: 100%
}

@media(min-width: 40.0625em) {
    .nhsuk-textarea {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-textarea {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-textarea:focus {
    border: 2px solid #212b32;
    box-shadow: inset 0 0 0 2px;
    outline: 4px solid #ffeb3b;
    outline-offset: 0
}

.nhsuk-textarea--error {
    border: 2px solid #d5281b
}

.nhsuk-warning-callout {
    margin-bottom: 40px;
    margin-top: 40px;
    padding: 24px;
    background-color: #fff9c4;
    color: #212b32;
    border: 1px solid #ffeb3b;
    padding-top: 0 !important
}

.nhsuk-warning-callout>*:first-child {
    margin-top: 0
}

.nhsuk-warning-callout>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-warning-callout {
        margin-bottom:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-warning-callout {
        margin-top:48px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-warning-callout {
        padding:32px
    }
}

@media print {
    .nhsuk-warning-callout {
        border: 1px solid #212b32;
        page-break-inside: avoid
    }
}

.nhsuk-warning-callout__label {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    background-color: #ffeb3b;
    color: #212b32;
    display: inline-block;
    margin: 0 0 8px -33px;
    padding: 8px 32px;
    position: relative;
    top: -16px
}

@media(min-width: 40.0625em) {
    .nhsuk-warning-callout__label {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .nhsuk-warning-callout__label {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(max-width: 40.0525em) {
    .nhsuk-warning-callout__label {
        margin-left:-25px;
        margin-right: 0;
        padding: 8px 24px;
        top: -8px
    }
}

@media print {
    .nhsuk-warning-callout__label {
        background: none;
        color: #212b32;
        top: 0
    }
}

.nhsuk-character-count {
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-character-count {
        margin-bottom:40px
    }
}

.nhsuk-character-count .nhsuk-form-group,.nhsuk-character-count .nhsuk-textarea {
    margin-bottom: 4px
}

.nhsuk-character-count__message {
    margin-bottom: 0;
    margin-top: 0
}

.nhsuk-character-count__message--disabled {
    visibility: hidden
}

.nhsuk-tabs {
    margin-top: 4px;
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-tabs {
        margin-top:4px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-tabs {
        margin-bottom:40px
    }
}

.nhsuk-tabs__title {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    color: #212b32;
    margin-bottom: 8px
}

@media(min-width: 40.0625em) {
    .nhsuk-tabs__title {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-tabs__title {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-tabs__list {
    list-style: none;
    margin: 0;
    padding: 0;
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-tabs__list {
        margin-bottom:40px
    }
}

.nhsuk-tabs__list-item {
    font-weight: 400;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin-left: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-tabs__list-item {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-tabs__list-item {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-tabs__list-item:before {
    color: #212b32;
    content: "—";
    margin-left: -32px;
    padding-right: 4px
}

.nhsuk-tabs__tab {
    color: #005eb8;
    display: inline-block;
    margin-bottom: 8px
}

.nhsuk-tabs__tab:visited {
    color: #330072
}

.nhsuk-tabs__tab:hover {
    color: #7c2855;
    text-decoration: none
}

.nhsuk-tabs__tab:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.nhsuk-tabs__tab:focus:hover {
    text-decoration: none
}

.nhsuk-tabs__tab:focus:visited {
    color: #212b32
}

.nhsuk-tabs__tab:focus .nhsuk-icon {
    fill: #212b32
}

.nhsuk-tabs__tab:active {
    color: #002f5c
}

.nhsuk-tabs__panel {
    margin-bottom: 48px
}

@media(min-width: 40.0625em) {
    .nhsuk-tabs__panel {
        margin-bottom:56px
    }
}

@media(min-width: 40.0625em) {
    .js-enabled .nhsuk-tabs__list {
        border-bottom:1px solid #d8dde0;
        margin-bottom: 0
    }

    .js-enabled .nhsuk-tabs__list:after {
        clear: both;
        content: "";
        display: block
    }

    .js-enabled .nhsuk-tabs__title {
        display: none
    }

    .js-enabled .nhsuk-tabs__list-item {
        background-color: #d8dde0;
        float: left;
        margin-bottom: 0;
        margin-left: 0;
        margin-right: 4px;
        padding: 8px 24px;
        position: relative;
        text-align: center
    }

    .js-enabled .nhsuk-tabs__list-item:before {
        content: none
    }

    .js-enabled .nhsuk-tabs__list-item--selected {
        background-color: #fff;
        border: 1px solid #d8dde0;
        border-bottom: 0;
        margin-bottom: -1px;
        margin-top: -4px;
        padding-bottom: 13px;
        padding-left: 23px;
        padding-right: 23px;
        padding-top: 11px;
        position: relative
    }

    .js-enabled .nhsuk-tabs__list-item--selected .nhsuk-tabs__tab {
        text-decoration: none
    }

    .js-enabled .nhsuk-tabs__tab {
        margin-bottom: 0
    }

    .js-enabled .nhsuk-tabs__tab:link,.js-enabled .nhsuk-tabs__tab:visited {
        color: #212b32
    }

    .js-enabled .nhsuk-tabs__tab:hover {
        color: rgba(33,43,50,.99)
    }

    .js-enabled .nhsuk-tabs__tab:active,.js-enabled .nhsuk-tabs__tab:focus {
        color: #212b32
    }

    .js-enabled .nhsuk-tabs__tab:after {
        bottom: 0;
        content: "";
        left: 0;
        position: absolute;
        right: 0;
        top: 0
    }

    .js-enabled .nhsuk-tabs__panel {
        margin-bottom: 0;
        background-color: #fff;
        border: 1px solid #d8dde0;
        border-top: 0;
        padding: 40px 24px
    }
}

@media(min-width: 40.0625em)and (min-width: 40.0625em) {
    .js-enabled .nhsuk-tabs__panel {
        margin-bottom:0
    }
}

@media(min-width: 40.0625em) {
    .js-enabled .nhsuk-tabs__panel>:last-child {
        margin-bottom:0
    }
}

@media(min-width: 40.0625em) {
    .js-enabled .nhsuk-tabs__panel--hidden {
        display:none
    }
}

@media(min-width: 48.0625em) {
    .app-component-reading-width h1 {
        max-width:14.5em
    }

    .app-component-reading-width h2 {
        max-width: 22em
    }

    .app-component-reading-width h3,.app-component-reading-width .nhsuk-lede-text,.app-component-reading-width .nhsuk-body-l {
        max-width: 29em
    }

    .app-component-reading-width h4 {
        max-width: 32em
    }

    .app-component-reading-width p,.app-component-reading-width ul,.app-component-reading-width ol,.app-component-reading-width .nhsuk-details {
        max-width: 37em
    }

    .app-component-reading-width .nhsuk-body-s {
        max-width: 47em
    }

    .app-component-reading-width .app-example,.app-component-reading-width .nhsuk-table,.app-component-reading-width .app-colour-list,.app-component-reading-width .app-example--image,.app-component-reading-width .app-pre,.app-component-reading-width .nhsuk-image__img {
        max-width: 44em
    }

    .app-component-reading-width .app-tabs,.app-component-reading-width .nhsuk-pagination__list {
        max-width: 100%
    }
}

.autocomplete-container {
    display: inline-block;
    z-index: 1
}

@media(max-width: 40.0525em) {
    .autocomplete-container {
        display:inline;
        width: 100%
    }
}

@media(max-width: 40.0525em) {
    .autocomplete__input {
        -ms-flex-positive:2;
        -webkit-appearance: listbox;
        border-bottom: 1px solid #aeb7bd;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 0;
        border-left: 1px solid #aeb7bd;
        border-right: 0;
        border-top: 1px solid #aeb7bd;
        border-top-left-radius: 4px;
        border-top-right-radius: 0;
        flex-grow: 2;
        font-size: inherit;
        height: 52px;
        margin: 0;
        outline: none;
        padding: 0 16px;
        width: 100%
    }

    .autocomplete__input:focus {
        border: 4px solid #212b32;
        box-shadow: 0 0 0 4px #ffeb3b;
        outline: 4px solid rgba(0,0,0,0);
        outline-offset: 4px;
        padding: 0 13px
    }
}

@media(min-width: 40.0625em) {
    .autocomplete__input {
        -webkit-appearance:listbox;
        border: 1px solid #fff;
        border-bottom-left-radius: 4px;
        border-bottom-right-radius: 0;
        border-right: 0;
        border-top-left-radius: 4px;
        border-top-right-radius: 0;
        font-size: 16px;
        height: 40px;
        padding: 0 12px;
        width: 200px
    }

    .autocomplete__input:focus {
        border: 2px solid #212b32;
        box-shadow: 0 0 0 4px #ffeb3b;
        outline: 4px solid rgba(0,0,0,0);
        outline-offset: 4px;
        padding: 0 11px
    }

    .autocomplete__input::placeholder {
        color: #4c6272;
        font-size: 16px
    }
}

@media(min-width: 48.0625em) {
    .autocomplete__input {
        width:235px
    }
}

.autocomplete__menu {
    -moz-box-shadow: 0 3px 5px rgba(66,84,98,.5);
    -webkit-box-shadow: 0 3px 5px rgba(66,84,98,.5);
    background-color: #fff;
    border-bottom: 1px solid #d8dde0;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 4px;
    border-left: 1px solid #d8dde0;
    border-right: 1px solid #d8dde0;
    box-shadow: 0 0 3px 0 rgba(66,84,98,.5);
    list-style: none;
    margin-top: 2px;
    overflow-x: hidden;
    overflow-y: auto;
    padding: 16px;
    position: absolute;
    top: 100%;
    width: 100%;
    z-index: 1
}

@media(max-width: 40.0525em) {
    .autocomplete__menu {
        border:0;
        box-shadow: none;
        margin: 0;
        padding-left: 0;
        padding-right: 0;
        position: relative
    }
}

.autocomplete__menu--visible {
    display: block
}

.autocomplete__menu--hidden {
    display: none
}

.autocomplete__option {
    border-bottom: 1px solid #f0f4f5;
    color: #005eb8;
    cursor: pointer;
    font-size: 16px;
    padding-bottom: 12px;
    text-align: left;
    text-decoration: underline
}

.autocomplete__option .nhsuk-icon__search {
    fill: #aeb7bd;
    float: left;
    height: 22px;
    margin: 2px 4px 0 0;
    width: 22px
}

.autocomplete__option:hover,.autocomplete__option:active {
    text-decoration: none
}

.autocomplete__option:focus {
    outline: 1px solid rgba(0,0,0,0);
    text-decoration: none
}

.autocomplete__option:focus a {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

@media(min-width: 40.0625em) {
    .autocomplete__option:last-child {
        border-bottom:0
    }
}

.autocomplete__option--no-results {
    border-bottom: 0;
    color: #212b32;
    font-size: 16px;
    line-height: 24px;
    margin: 0;
    padding: 0;
    text-align: left;
    text-decoration: none
}

@media(max-width: 40.0525em) {
    .autocomplete__option--no-results {
        padding:16px 0
    }
}

.app-beta__container {
    border-bottom: 1px solid #d8dde0;
    padding: 8px 0
}

.app-beta__content {
    display: table;
    margin-bottom: 0
}

.app-beta__content .app-beta__tag {
    display: block;
    margin-right: 8px
}

.app-beta__text {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.2;
    display: table-cell;
    vertical-align: baseline
}

@media(min-width: 40.0625em) {
    .app-beta__text {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.2
    }
}

@media print {
    .app-beta__text {
        font-size: 14pt;
        line-height: 1.2
    }
}

code[class*=language-],pre[class*=language-] {
    color: #000;
    background: none;
    text-align: left;
    white-space: pre;
    word-spacing: normal;
    word-break: normal;
    word-wrap: normal;
    -moz-tab-size: 4;
    -o-tab-size: 4;
    tab-size: 4;
    -webkit-hyphens: none;
    -moz-hyphens: none;
    -ms-hyphens: none;
    hyphens: none
}

pre[class*=language-]::-moz-selection,pre[class*=language-] ::-moz-selection,code[class*=language-]::-moz-selection,code[class*=language-] ::-moz-selection {
    text-shadow: none;
    background: #b3d4fc
}

pre[class*=language-]::selection,pre[class*=language-] ::selection,code[class*=language-]::selection,code[class*=language-] ::selection {
    text-shadow: none;
    background: #b3d4fc
}

@media print {
    code[class*=language-],pre[class*=language-] {
        text-shadow: none
    }
}

pre[class*=language-] {
    margin-bottom: 16px;
    padding: 1em;
    overflow: auto
}

@media(min-width: 40.0625em) {
    pre[class*=language-] {
        margin-bottom:24px
    }
}

:not(pre)>code[class*=language-],pre[class*=language-] {
    background: #fff
}

:not(pre)>code[class*=language-] {
    padding: .1em;
    border-radius: .3em;
    white-space: normal
}

.token.comment,.token.prolog,.token.doctype,.token.cdata {
    color: #708090
}

.token.punctuation {
    color: #999
}

.namespace {
    opacity: .7
}

.token.property,.token.tag,.token.boolean,.token.number,.token.constant,.token.symbol,.token.deleted {
    color: #905
}

.token.selector,.token.attr-name,.token.string,.token.char,.token.builtin,.token.inserted {
    color: #690
}

.token.operator,.token.entity,.token.url,.language-css .token.string,.style .token.string {
    color: #9a6e3a;
    background: rgba(255,255,255,.5)
}

.token.atrule,.token.attr-value,.token.keyword {
    color: #07a
}

.token.function,.token.class-name {
    color: #dd4a68
}

.token.regex,.token.important,.token.variable {
    color: #e90
}

.token.important,.token.bold {
    font-weight: bold
}

.token.italic {
    font-style: italic
}

.token.entity {
    cursor: help
}

li code,p code,td code {
    background-color: #fff;
    color: #d14;
    padding: 2px 8px;
    word-break: break-word
}

.app-pre {
    margin-bottom: 16px;
    background: #fff;
    border: 1px solid #d8dde0;
    margin-top: 0;
    overflow: auto;
    padding: 16px;
    position: relative
}

@media(min-width: 40.0625em) {
    .app-pre {
        margin-bottom:24px
    }
}

.app-pre+h2 {
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    .app-pre+h2 {
        padding-top:24px
    }
}

.app-pre+h3 {
    padding-top: 8px
}

@media(min-width: 40.0625em) {
    .app-pre+h3 {
        padding-top:8px
    }
}

.code-snippet__preformatted {
    align-items: flex-end;
    border-bottom: 1px solid #d8dde0;
    display: flex;
    flex-direction: column;
    padding: 16px
}

.hljs {
    background-color: #fff;
    color: #212b32;
    display: block;
    overflow-x: scroll;
    padding: 0
}

.hljs.css .hljs-selector-class,.hljs.css .hljs-selector-tag,.hljs.css .hljs-keyword {
    color: #330072
}

.app-tabs__container pre {
    -ms-flex-item-align: stretch;
    -ms-grid-row-align: stretch;
    align-self: stretch;
    background-color: #fff;
    padding: 0
}

.code-snippet__macro {
    width: 100%
}

.app-colour-list {
    margin-top: 0
}

.app-colour-list th,.app-colour-list td {
    border: 0
}

.app-colour-list__swatch {
    background-color: #f0f4f5;
    border: 1px solid rgba(0,0,0,0);
    border-radius: 50%;
    display: inline-block;
    height: 40px;
    margin-right: 8px;
    vertical-align: middle;
    width: 40px
}

@media(max-width: 40.0525em) {
    .app-colour-list__swatch {
        height:24px;
        left: 0;
        position: absolute;
        width: 24px
    }
}

.app-colour-list__column {
    padding-left: 0;
    padding-top: 0;
    vertical-align: middle
}

@media(max-width: 40.0525em) {
    .app-colour-list__column {
        display:block;
        padding-left: 32px;
        position: relative
    }
}

.app-colour-list__column--name {
    font-weight: normal
}

@media(max-width: 40.0525em) {
    .app-colour-list__column--name {
        padding-bottom:4px;
        padding-top: 8px
    }
}

@media(max-width: 40.0525em) {
    .app-colour-list__column--colour {
        padding-bottom:4px
    }
}

.app-colour-list__swatch--border {
    border: 1px solid #d8dde0
}

.app-contact-panel {
    margin-top: 32px;
    border-top: 2px solid #005eb8
}

@media(min-width: 40.0625em) {
    .app-contact-panel {
        margin-top:40px
    }
}

.app-contact-panel__heading {
    font-weight: 600;
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.4;
    padding-top: 8px
}

@media(min-width: 40.0625em) {
    .app-contact-panel__heading {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.33333
    }
}

@media print {
    .app-contact-panel__heading {
        font-size: 18pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .app-contact-panel__heading {
        padding-top:16px
    }
}

.nhsuk-pagination+.app-contact-panel {
    margin-top: 0
}

.app-width-container,.app-breadcrumb .nhsuk-width-container {
    max-width: 1100px
}

@media(min-width: 767px)and (max-width: 1164px) {
    .app-width-container,.app-breadcrumb .nhsuk-width-container {
        margin:0 32px
    }
}

.app-header__navigation {
    max-width: 1164px
}

.nhsuk-header__navigation-list {
    max-width: 1100px
}

.nhsuk-header__container {
    max-width: 1100px
}

.nhsuk-footer-container .nhsuk-width-container {
    max-width: 1100px
}

.app-example {
    margin-bottom: 24px;
    margin-top: 8px;
    padding-bottom: 24px;
    padding-left: 24px;
    padding-right: 24px;
    padding-top: 40px;
    border: 1px solid #aeb7bd;
    position: relative
}

.app-example>*:first-child {
    margin-top: 0
}

.app-example>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .app-example {
        margin-bottom:32px
    }
}

@media(min-width: 40.0625em) {
    .app-example {
        margin-top:16px
    }
}

@media(min-width: 40.0625em) {
    .app-example {
        padding-bottom:32px
    }
}

@media(min-width: 40.0625em) {
    .app-example {
        padding-left:32px
    }
}

@media(min-width: 40.0625em) {
    .app-example {
        padding-right:32px
    }
}

@media(min-width: 40.0625em) {
    .app-example {
        padding-top:48px
    }
}

.app-example__heading {
    background: #4c6272;
    border: 0;
    left: -1px;
    position: absolute;
    top: -1px
}

.app-example+h2 {
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    .app-example+h2 {
        padding-top:24px
    }
}

.app-example+h3 {
    padding-top: 8px
}

@media(min-width: 40.0625em) {
    .app-example+h3 {
        padding-top:8px
    }
}

.app-example--white {
    background: #fff
}

.app-example--image {
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .app-example--image {
        margin-bottom:24px
    }
}

.app-example--image+h2 {
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    .app-example--image+h2 {
        padding-top:24px
    }
}

.featured-list {
    list-style: none;
    margin: 24px 0 32px;
    padding-left: 0
}

@media(min-width: 40.0625em) {
    .featured-list {
        margin:40px 0 32px
    }
}

.featured-list--item {
    margin-bottom: 32px
}

@media(min-width: 40.0625em) {
    .featured-list--item {
        display:-ms-flexbox;
        display: flex;
        margin-bottom: 40px;
        padding-left: 64px
    }
}

.featured-list--item__content {
    max-width: 99.99%
}

.featured-list--item__number {
    display: none;
    font-weight: 600;
    margin-bottom: 16px
}

@media(min-width: 40.0625em) {
    .featured-list--item__number {
        display:block;
        left: -64px;
        margin: 0;
        position: absolute
    }
}

.featured-list--item__number--mobile {
    display: block
}

@media(min-width: 40.0625em) {
    .featured-list--item__number--mobile {
        display:none
    }
}

.featured-list--item__heading {
    -ms-flex-align: center;
    align-items: center;
    border-top: 4px solid #005eb8;
    display: -ms-flexbox;
    display: flex;
    margin-top: 0;
    padding-top: 16px;
    position: relative
}

@media(min-width: 40.0625em) {
    .featured-list--item__heading {
        padding-top:32px
    }
}

.app-ogl-footer {
    background-color: #d8dde0
}

.app-ogl-footer--text {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    padding-bottom: 24px;
    color: #4c6272;
    margin-bottom: 0;
    padding-bottom: 24px
}

@media(min-width: 40.0625em) {
    .app-ogl-footer--text {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .app-ogl-footer--text {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(min-width: 40.0625em) {
    .app-ogl-footer--text {
        padding-bottom:32px
    }
}

.app-ogl-footer--text svg {
    margin-right: 8px;
    position: relative;
    top: 2px
}

.app-style-guide-a-z .nhsuk-a-z-list--results-items {
    margin-bottom: 56px
}

@media(min-width: 40.0625em) {
    .app-style-guide-a-z .nhsuk-a-z-list--results-items {
        margin-bottom:64px
    }
}

.app-style-guide-a-z .nhsuk-back-to-top__link {
    margin-left: 0
}

.app-style-guide-a-z h2 {
    background: #005eb8;
    color: #fff;
    display: inline-block;
    padding: 12px
}

.nhsuk-section {
    padding-bottom: 32px;
    padding-top: 32px
}

@media(min-width: 40.0625em) {
    .nhsuk-section {
        padding-bottom:40px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-section {
        padding-top:40px
    }
}

@media(max-width: 48.0525em) {
    .nhsuk-section .nhsuk-grid-column-one-half:last-child {
        padding-top:16px
    }
}

.nhsuk-section--white {
    background-color: #fff
}

.app-image--border {
    border: 1px solid #aeb7bd;
    width: 100%
}

.nhsuk-lede-text+.app-lede-text--sub {
    margin-bottom: 48px;
    margin-top: -16px
}

@media(max-width: 40.0525em) {
    .nhsuk-lede-text+.app-lede-text--sub {
        margin-bottom:32px;
        margin-top: -16px
    }
}

.app-lede-text+h2,.app-lede-text+.nhsuk-heading-l {
    padding-top: 8px
}

.app-lede-text--sub+h2,.app-lede-text--sub+.nhsuk-heading-l {
    padding-top: 0
}

.app-lede-text+.app-index-navigation {
    padding-top: 0
}

.app-meta-data {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    color: #4c6272
}

@media(min-width: 40.0625em) {
    .app-meta-data {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .app-meta-data {
        font-size: 14pt;
        line-height: 1.2
    }
}

.app-meta-data+.app-meta-data {
    margin-top: -16px
}

@media(min-width: 40.0625em) {
    .app-meta-data {
        margin-bottom:16px
    }

    .app-meta-data+.app-meta-data {
        margin-top: -16px
    }
}

.app-meta-data--strong {
    color: #212b32;
    font-weight: 600
}

.app-page-contents {
    margin-bottom: 24px
}

@media(min-width: 40.0625em) {
    .app-page-contents {
        margin-bottom:32px
    }
}

.app-page-contents__heading {
    font-weight: 600;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5;
    margin-bottom: 8px
}

@media(min-width: 40.0625em) {
    .app-page-contents__heading {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .app-page-contents__heading {
        font-size: 14pt;
        line-height: 1.15
    }
}

@media(min-width: 40.0625em) {
    .app-page-contents__heading {
        margin-bottom:16px
    }
}

.app-page-contents__list {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429
}

@media(min-width: 40.0625em) {
    .app-page-contents__list {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .app-page-contents__list {
        font-size: 14pt;
        line-height: 1.2
    }
}

.app-page-contents__item {
    margin-bottom: 4px
}

@media(min-width: 40.0625em) {
    .app-page-contents__item {
        margin-bottom:4px
    }
}

.app-pane {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    min-height: 0;
    overflow: inherit;
    position: relative
}

.app-pane__side-bar {
    -ms-flex: 0 0 auto;
    -webkit-box-flex: 0;
    flex: 0 0 auto;
    width: 220px
}

@media(max-width: 61.865em) {
    .app-pane__side-bar {
        width:200px
    }
}

@media(max-width: 48.0525em) {
    .app-pane__side-bar {
        display:none
    }
}

.app-pane__main-content {
    -ms-flex: 1 1 100%;
    -ms-flex-direction: column;
    -webkit-box-direction: normal;
    -webkit-box-flex: 1;
    -webkit-box-orient: vertical;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    flex: 1 1 100%;
    flex-direction: column;
    min-width: 0
}

@media(min-width: 48.0625em) {
    .app-pane__main-content {
        padding-left:64px
    }
}

@media(max-width: 40.0525em) {
    .app-page-heading,.app-lede-text,.app-contents-list,.app-lede-text--sub {
        margin-bottom:32px
    }

    .app-contents-list .nhsuk-contents-list__list {
        margin-bottom: 0
    }
}

.app-promo--video {
    background: #fff
}

.app-promo--video-title {
    margin-bottom: 16px
}

.app-embed-container {
    height: 0;
    max-width: 100%;
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative
}

.app-embed-container iframe,.app-embed-container object,.app-embed-container embed {
    border: 0;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}



.nhsuk-related-nav__heading {
    font-size: 20px;
    font-size: 1.25rem;
    line-height: 1.2;
    margin-bottom: 16px;
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    .nhsuk-related-nav__heading {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.2
    }
}

@media print {
    .nhsuk-related-nav__heading {
        font-size: 18pt;
        line-height: 1.2
    }
}

.nhsuk-related-nav__heading--small {
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.5
}

@media(min-width: 40.0625em) {
    .nhsuk-related-nav__heading--small {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-related-nav__heading--small {
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-related-nav__list {
    list-style: none;
    margin-bottom: 16px;
    padding-left: 0
}

.nhsuk-related-nav__item {
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429
}

@media(min-width: 40.0625em) {
    .nhsuk-related-nav__item {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .nhsuk-related-nav__item {
        font-size: 14pt;
        line-height: 1.2
    }
}

.nhsuk-related-nav__sub-heading {
    margin-bottom: 8px;
    padding-top: 8px;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.2
}

@media(min-width: 40.0625em) {
    .nhsuk-related-nav__sub-heading {
        margin-bottom:8px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-related-nav__sub-heading {
        padding-top:8px
    }
}

@media(min-width: 40.0625em) {
    .nhsuk-related-nav__sub-heading {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.2
    }
}

@media print {
    .nhsuk-related-nav__sub-heading {
        font-size: 14pt;
        line-height: 1.2
    }
}

@media(max-width: 40.0525em) {
    .app-table-responsive--cookies thead {
        border:0;
        clip: rect(0 0 0 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px
    }

    .app-table-responsive--cookies tr {
        border-bottom: solid 2px #d8dde0;
        display: block
    }

    .app-table-responsive--cookies tr:last-child {
        border-bottom: 0
    }

    .app-table-responsive--cookies td {
        border-bottom: 1px dotted #d8dde0;
        display: block;
        text-align: left
    }

    .app-table-responsive--cookies td:last-child {
        border-bottom: 0
    }

    .app-table-responsive--cookies td::before {
        content: attr(data-label);
        display: block;
        font-weight: bold;
        padding-right: 20px
    }
}

.nhsuk-list--border li {
    border-bottom: 1px solid #d8dde0;
    padding: 8px 0 16px
}

.nhsuk-list--border li>:first-child {
    margin-top: 0
}

.nhsuk-list--border li>:last-child {
    margin-bottom: 0
}

.nhsuk-list--border li:first-of-type {
    border-top: 1px solid #d8dde0;
    padding: 16px 0
}

.nhsuk-header__search-form--search-results {
    margin-bottom: 40px;
    background-color: rgba(0,0,0,0);
    display: -ms-flexbox;
    display: flex;
    padding: 0;
    width: 100%
}

@media(min-width: 40.0625em) {
    .nhsuk-header__search-form--search-results {
        margin-bottom:48px
    }
}

.nhsuk-header__search-form--search-results .autocomplete-container {
    width: 100%
}

.nhsuk-header__search-form--search-results .autocomplete__menu--hidden {
    display: none
}

.nhsuk-header__search-form--search-results .autocomplete__input,.nhsuk-header__search-form--search-results .nhsuk-search__input {
    -ms-flex-positive: 2;
    -webkit-appearance: listbox;
    background-color: #fff !important;
    border-bottom: 1px solid #aeb7bd;
    border-bottom-left-radius: 4px;
    border-bottom-right-radius: 0;
    border-left: 1px solid #aeb7bd;
    border-right: 0;
    border-top: 1px solid #aeb7bd;
    border-top-left-radius: 4px;
    border-top-right-radius: 0;
    flex-grow: 2;
    font-size: inherit;
    height: 52px;
    margin: 0;
    outline: none;
    padding: 0 16px;
    width: 100%
}

.nhsuk-header__search-form--search-results .autocomplete__input:focus,.nhsuk-header__search-form--search-results .nhsuk-search__input:focus {
    border: 4px solid #ffeb3b;
    box-shadow: inset 0 0 0 4px #212b32
}

.nhsuk-header__search-form--search-results .nhsuk-search__submit {
    background-color: #007f3b;
    border: 0;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 4px;
    border-top-left-radius: 0;
    border-top-right-radius: 4px;
    float: right;
    font-size: inherit;
    height: 52px;
    line-height: inherit;
    margin: 0;
    outline: none;
    padding: 8px 8px 0;
    width: 52px
}

.nhsuk-header__search-form--search-results .nhsuk-search__submit .nhsuk-icon__search {
    fill: #fff;
    height: 38px;
    width: 38px
}

.nhsuk-header__search-form--search-results .nhsuk-search__submit::-moz-focus-inner {
    border: 0
}

.nhsuk-header__search-form--search-results .nhsuk-search__submit:hover {
    background-color: #00662f;
    cursor: pointer
}

.nhsuk-header__search-form--search-results .nhsuk-search__submit:focus {
    background-color: #ffeb3b;
    border-bottom: 4px solid #212b32
}

.nhsuk-header__search-form--search-results .nhsuk-search__submit:focus .nhsuk-icon__search {
    fill: #212b32
}

.app-search-results-item {
    font-size: 18px;
    font-size: 1.125rem;
    line-height: 1.55556;
    font-weight: 600;
    text-decoration: none
}

@media(min-width: 40.0625em) {
    .app-search-results-item {
        font-size:22px;
        font-size: 1.375rem;
        line-height: 1.45455
    }
}

@media print {
    .app-search-results-item {
        font-size: 18pt;
        line-height: 1.15
    }
}

.app-search-results-item:hover {
    text-decoration: underline
}

.app-search-results-item::first-letter {
    text-transform: uppercase
}

.app-search-results-category {
    color: #4c6272;
    display: block;
    font-size: 14px
}

.autocomplete__option {
    line-height: 1.35;
    text-decoration: none
}

.autocomplete__option:focus .autocomplete__option-title {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.autocomplete__option:hover .autocomplete__option-title,.autocomplete__option:focus .autocomplete__option-title {
    text-decoration: none
}

.autocomplete__option-title {
    text-decoration: underline
}

.autocomplete__option .nhsuk-icon__search {
    margin: 2px 4px 2px 0
}

@media(min-width: 40.0625em) {
    .autocomplete__option:last-child {
        padding-bottom:0
    }

    .autocomplete__menu {
        padding: 16px 8px
    }

    .autocomplete__option-title {
        text-decoration: underline
    }
}

.autocomplete__option-category {
    color: #4c6272;
    display: block;
    font-size: 14px;
    margin-top: 4px
}

.app-side-nav__heading {
    font-weight: 600;
    font-size: 16px;
    font-size: 1rem;
    line-height: 1.25;
    color: #4c6272;
    margin-bottom: 12px;
    padding-top: 4px
}

@media(min-width: 40.0625em) {
    .app-side-nav__heading {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.25
    }
}

@media print {
    .app-side-nav__heading {
        font-size: 14pt;
        line-height: 1.25
    }
}

@media(max-width: 48.0525em) {
    .app-side-nav__heading {
        font-weight:600;
        font-size: 20px;
        font-size: 1.25rem;
        line-height: 1.25;
        color: #212b32
    }
}

@media(max-width: 48.0525em)and (min-width: 40.0625em) {
    .app-side-nav__heading {
        font-size:24px;
        font-size: 1.5rem;
        line-height: 1.25
    }
}

@media print and (max-width: 48.0525em) {
    .app-side-nav__heading {
        font-size:18pt;
        line-height: 1.25
    }
}

.app-side-nav__back {
    border-bottom: 1px solid #d8dde0;
    padding-bottom: 16px
}

.app-side-nav__list {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.3;
    margin-bottom: 0
}

@media(min-width: 40.0625em) {
    .app-side-nav__list {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.3
    }
}

@media print {
    .app-side-nav__list {
        font-size: 14pt;
        line-height: 1.3
    }
}

@media(max-width: 48.0525em) {
    .app-side-nav__list {
        font-weight:400;
        font-size: 16px;
        font-size: 1rem;
        line-height: 1.3;
        margin-bottom: 8px
    }
}

@media(max-width: 48.0525em)and (min-width: 40.0625em) {
    .app-side-nav__list {
        font-size:19px;
        font-size: 1.1875rem;
        line-height: 1.3
    }
}

@media print and (max-width: 48.0525em) {
    .app-side-nav__list {
        font-size:14pt;
        line-height: 1.3
    }
}

.app-side-nav__item {
    padding-bottom: 4px;
    padding-top: 4px
}

.app-side-nav__item--current {
    border-left: 4px solid #005eb8;
    margin-left: -12px;
    padding-left: 8px
}

.app-side-nav__item--current .app-side-nav__link {
    font-weight: 600
}

.app-side-nav__link {
    text-decoration: none
}

@media(max-width: 48.0525em) {
    .app-side-nav__link {
        text-decoration:underline
    }
}

.app-side-nav__link:visited {
    color: #005eb8
}

.app-side-nav__link:hover {
    color: #7c2855;
    text-decoration: underline
}

.app-side-nav__link:focus:hover,.app-side-nav__link:focus:visited {
    color: #212b32
}

.app-side-nav__list--nested {
    margin-bottom: 8px;
    margin-top: 8px
}

@media(min-width: 40.0625em) {
    .app-side-nav__list--nested {
        margin-bottom:8px
    }
}

@media(min-width: 40.0625em) {
    .app-side-nav__list--nested {
        margin-top:16px
    }
}

.app-side-nav__list--nested .app-side-nav__item {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.3;
    list-style: none
}

@media(min-width: 40.0625em) {
    .app-side-nav__list--nested .app-side-nav__item {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.3
    }
}

@media print {
    .app-side-nav__list--nested .app-side-nav__item {
        font-size: 14pt;
        line-height: 1.3
    }
}

.app-side-nav__list--nested .app-side-nav__link {
    font-weight: 400
}

.app-side-nav__list--nested .app-side-nav__item::before {
    color: #aeb7bd;
    content: "—";
    margin-left: -20px;
    margin-right: 4px
}

.app-index-navigation {
    padding-top: 16px
}

@media(min-width: 40.0625em) {
    .app-index-navigation {
        padding-top:24px
    }
}

.app-u-border-top {
    border-top: 2px solid #005eb8;
    margin-top: 8px
}

.app-u-border-top h3 {
    margin-bottom: 16px;
    margin-top: 16px
}

.app-u-border-top ul {
    list-style: none;
    padding-left: 0
}

@media(max-width: 48.0525em) {
    .app-u-hide-mobile {
        display:none
    }
}

@media(min-width: 48.0625em) {
    .app-u-hide-desktop {
        display:none
    }
}

.app-u-full-width {
    max-width: 100% !important;
    width: 100% !important
}

.hljs {
    background: #f8f8f8;
    color: #333;
    display: block;
    overflow-x: auto;
    padding: .5em
}

.hljs-comment,.hljs-quote {
    color: #998;
    font-style: italic
}

.hljs-keyword,.hljs-selector-tag,.hljs-subst {
    color: #333;
    font-weight: bold
}

.hljs-number,.hljs-literal,.hljs-variable,.hljs-template-variable,.hljs-tag .hljs-attr {
    color: #007f80
}

.hljs-string,.hljs-doctag {
    color: #d14
}

.hljs-title,.hljs-section,.hljs-selector-id {
    color: #900;
    font-weight: bold
}

.hljs-subst {
    font-weight: normal
}

.hljs-type,.hljs-class .hljs-title {
    color: #458;
    font-weight: bold
}

.hljs-tag,.hljs-name,.hljs-attribute {
    color: navy;
    font-weight: normal
}

.hljs-regexp,.hljs-link {
    color: #008020
}

.hljs-symbol,.hljs-bullet {
    color: #990073
}

.hljs-built_in,.hljs-builtin-name {
    color: #017ba5
}

.hljs-meta {
    color: #999;
    font-weight: bold
}

.hljs-deletion {
    background: #fdd
}

.hljs-addition {
    background: #dfd
}

.hljs-emphasis {
    font-style: italic
}

.hljs-strong {
    font-weight: bold
}

.app-tabs {
    list-style-type: none;
    margin: -1px auto;
    margin-bottom: 0;
    overflow: visible;
    padding: 0
}

.app-tabs__item {
    display: inline-block;
    margin: 0;
    position: relative;
    z-index: 2
}

.app-tabs__item a {
    background: inherit;
    border-bottom: 2px solid rgba(0,0,0,0);
    border-top: 2px solid rgba(0,0,0,0);
    color: #005eb8;
    display: block;
    font-weight: bold;
    margin-top: -1px;
    padding: 15px;
    text-decoration: none
}

.app-tabs__item--current a {
    border-bottom-color: #005eb8;
    border-top-color: #005eb8
}

.app-tabs__item__heading a {
    background: inherit;
    border: 1px solid #bfc1c3;
    border-top: 0;
    color: #005ea5;
    display: none;
    font-weight: bold;
    padding: 15px;
    position: relative;
    text-decoration: none;
    z-index: 2
}

.app-tabs__item__heading a:visited {
    color: #005ea5
}

.app-tabs__item__heading--current {
    background-color: #f0f0f0
}

.app-tabs__text {
    padding: 20px
}

.app-tabs__container {
    border: 1px solid #bfc1c3;
    margin-top: -2px;
    position: relative
}

.app-tabs__container pre {
    background-color: #f8f8f8;
    border: 0;
    font-size: inherit;
    margin: 0;
    margin-bottom: 0;
    max-width: inherit;
    overflow: auto;
    padding: 15px;
    position: relative
}

.app-link--copy:link,.app-link--copy:active,.app-link--copy:visited,.app-link--copy:hover {
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    background-color: #fff;
    border: 1px solid #007f3b;
    color: #007f3b;
    font-family: "nta",Arial,sans-serif;
    font-size: 14px;
    font-weight: 400;
    min-width: 58px;
    padding: 4px 10px 0;
    position: absolute;
    right: 15px;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    top: 15px;
    z-index: 1
}

.code-embed {
    background-color: #f0f4f5;
    border: 1px solid #aeb7bd
}

.code-embed iframe {
    display: block;
    width: 100%
}

.code-embed [src*="components/header"] {
    width: 99%
}

.code-embed+.code-snippet {
    margin-top: -1px
}

.code-snippet {
    background-color: #f0f4f5
}

.code-snippet .js-hidden {
    display: none
}

.code-snippet .app-link--copy {
    border-bottom-color: #007f3b;
    box-shadow: 0 2px 0 #007f3b;
    margin-bottom: 16px;
    padding: 2px 8px;
    position: absolute;
    right: 16px;
    text-transform: none;
    top: 16px
}

.code-snippet .app-link--copy:hover {
    background-color: #f0f4f5
}

.code-snippet .app-link--copy:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none;
    border-color: #ffeb3b
}

.code-snippet .app-link--close {
    background-color: rgba(0,0,0,0);
    border: 0;
    bottom: 16px;
    color: #005eb8;
    cursor: pointer;
    font-size: 16px;
    margin-top: 16px;
    position: static;
    right: 16px;
    text-decoration: underline;
    z-index: 1
}

.code-snippet .app-link--close:hover {
    color: #7c2855;
    text-decoration: none
}

.code-snippet .app-link--close:focus {
    background-color: #ffeb3b;
    box-shadow: 0 -2px #ffeb3b,0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.code-snippet .app-link--close:focus:hover {
    color: #212b32
}

@media(min-width: 40.0625em) {
    .code-snippet .app-link--close {
        bottom:24px;
        right: 24px
    }
}

.code-snippet .app-link--close svg {
    fill: #005eb8;
    height: 16px;
    margin: 5px 5px 0 0;
    transform: rotate(-90deg);
    width: 16px
}

.code-snippet__preformatted {
    align-items: flex-end;
    border-bottom: 1px solid #aeb7bd;
    display: flex;
    flex-direction: column;
    padding: 16px
}

@media(min-width: 40.0625em) {
    .code-snippet__preformatted {
        padding:24px
    }
}

.app-tabs {
    background: #fff;
    border: 1px solid #aeb7bd;
    border-bottom: 0;
    display: none
}

@media(min-width: 40.0625em) {
    .app-tabs {
        display:block
    }
}

.app-tabs__item {
    background-color: rgba(0,0,0,0);
    margin: 0
}

.app-tabs__item a {
    border: 0;
    font-weight: normal;
    margin: 0;
    padding: 8px 16px;
    text-decoration: underline
}

@media(min-width: 40.0625em) {
    .app-tabs__item a {
        padding:12px 24px
    }
}

.app-tabs__item a:hover {
    color: #7c2855;
    outline: 0;
    text-decoration: none
}

.app-tabs__item a:focus {
    background-color: #ffeb3b;
    box-shadow: 0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.app-tabs__item--current a {
    text-decoration: none
}

@media(min-width: 40.0625em) {
    .app-tabs__item--current a {
        box-shadow:0 4px 0 #005eb8
    }
}

.app-tabs__item--current a:hover {
    color: #005eb8
}

.app-tabs__item--current a:focus:hover {
    color: #212b32
}

.app-tabs__item--mobile {
    background-color: #fff;
    border: 1px solid #aeb7bd;
    border-width: 1px 0;
    display: block;
    margin: -1px 0
}

@media(min-width: 40.0625em) {
    .app-tabs__item--mobile {
        display:none
    }
}

.app-tabs__container {
    background-color: #fff;
    border: 1px solid #aeb7bd;
    border-bottom: 0;
    margin-top: 0
}

.app-tabs__container pre {
    align-self: stretch;
    background-color: #fff;
    padding: 0
}

.hljs {
    background-color: #fff;
    color: #28333b;
    overflow-x: scroll;
    padding: 0
}

@media(min-width: 40.0625em) {
    .hljs {
        max-width:calc(71.5vw - 121px)
    }
}

@media(min-width: 64em) {
    .hljs {
        max-width:586px
    }
}

.hljs .hljs-comment,.hljs .hljs-quote {
    color: #757575;
    font-style: italic
}

.hljs .hljs-keyword,.hljs .hljs-selector-tag,.hljs .hljs-subst {
    color: #990155;
    font-weight: normal
}

.hljs .hljs-number,.hljs .hljs-literal,.hljs .hljs-variable,.hljs .hljs-template-variable,.hljs .hljs-tag .hljs-attr {
    color: #527a00
}

.hljs .hljs-string,.hljs .hljs-doctag {
    color: #025eb8
}

.hljs .hljs-title,.hljs .hljs-section,.hljs .hljs-selector-id {
    color: #990155;
    font-weight: normal
}

.hljs .hljs-subst {
    font-weight: normal
}

.hljs .hljs-type,.hljs .hljs-class .hljs-title {
    color: #527a00;
    font-weight: normal
}

.hljs .hljs-tag,.hljs .hljs-name,.hljs .hljs-attribute {
    color: #990155;
    font-weight: normal
}

.hljs .hljs-regexp,.hljs .hljs-link {
    color: #527a00
}

.hljs .hljs-symbol,.hljs .hljs-bullet {
    color: #990155
}

.hljs .hljs-built_in,.hljs .hljs-builtin-name {
    color: #025eb8
}

.hljs .hljs-meta {
    color: #757575;
    font-weight: normal
}

.hljs.html .hljs-tag {
    color: #757575
}

.hljs.css .hljs-selector-class,.hljs.css .hljs-selector-tag,.hljs.css .hljs-keyword {
    color: #330072
}

.hljs.javascript .hljs-title,.hljs.javascript .hljs-section,.hljs.javascript .hljs-selector-id,.hljs.python .hljs-title,.hljs.python .hljs-section,.hljs.python .hljs-selector-id {
    color: #025eb8
}

.hljs.json .hljs-attr {
    color: #990155
}

.design-example {
    margin-bottom: 40px;
    position: relative;
    width: 100%
}

@media(max-width: 40.0525em) {
    .design-example {
        margin-bottom:32px
    }
}

.design-example__pop-out {
    font-weight: 400;
    font-size: 14px;
    font-size: .875rem;
    line-height: 1.71429;
    border: 1px solid #aeb7bd;
    border-bottom: 0;
    display: block;
    outline: 2px solid rgba(0,0,0,0);
    padding: 8px 16px;
    position: relative;
    width: 100%
}

@media(min-width: 40.0625em) {
    .design-example__pop-out {
        font-size:16px;
        font-size: 1rem;
        line-height: 1.5
    }
}

@media print {
    .design-example__pop-out {
        font-size: 14pt;
        line-height: 1.2
    }
}

.design-example__pop-out:hover,.design-example__pop-out:focus {
    box-shadow: none
}

.design-example__pop-out:focus {
    background-color: #ffeb3b;
    box-shadow: 0 4px #212b32;
    color: #212b32;
    outline: 4px solid rgba(0,0,0,0);
    text-decoration: none
}

.design-example__pop-out:focus:hover {
    color: #212b32
}

p+.design-example {
    padding-top: 8px
}

@media(min-width: 40.0625em) {
    p+.design-example {
        padding-top:16px
    }
}

.nhsuk-lede-text+.design-example {
    padding-top: 0
}

@media(min-width: 40.0625em) {
    .nhsuk-lede-text+.design-example {
        padding-top:0
    }
}

.design-example-frame {
    border: 0
}

.app-code-snippet__macro {
    width: 100%
}

.app-tabs__container pre {
    background-color: #f0f4f5
}

.app-code-snippet__container {
    background-color: #f0f4f5;
    padding: 16px;
    padding-top: 56px;
    position: relative;
    width: 100%
}

.nhsuk-breadcrumb__backlink:visited {
    color: #005eb8
}

.nhsuk-breadcrumb__link:visited {
    color: #005eb8
}

.nhsuk-breadcrumb__link:hover {
    color: #7c2855
}

.nhsuk-back-link__link:hover {
    color: #7c2855
}

.nhsuk-pagination__link:visited:focus .nhsuk-icon {
    fill: #212b32
}

.nhsuk-table__cell>*:first-child {
    margin-top: 0
}

.nhsuk-table__cell>*:last-child {
    margin-bottom: 0
}

@media(min-width: 40.0625em)and (max-width: 61.865em) {
    .nhsuk-header__menu-toggle {
        margin-top:0
    }
}

.app-latest-update {
    padding-bottom: 56px;
    padding-top: 56px
}

@media(max-width: 48.0525em) {
    .app-latest-update {
        padding-bottom:40px;
        padding-top: 0
    }
}

.app-card--transparent {
    background: rgba(0,0,0,0);
    border: 2px solid rgba(255,255,255,.2);
    color: #fff
}

.app-card--transparent a {
    color: #fff
}

.app-card--transparent a:hover,.app-card--transparent a:visited {
    color: #f0f4f5
}

.app-card--transparent a:focus {
    color: #212b32
}

.app-card__video {
    height: 0;
    max-width: 100%;
    overflow: hidden;
    padding-bottom: 56.25%;
    position: relative
}

.app-card__video iframe,.app-card__video object,.app-card__video embed {
    border: 0;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

@media(max-width: 48.0525em) {
    .app-hero__wrapper {
        padding-bottom:32px;
        padding-top: 32px
    }
}

.app-annotate-block {
    margin-bottom: 24px;
    outline: 2px dashed #4c6272;
    padding: 16px;
    padding-top: 48px;
    position: relative
}

.app-annotate-block__label {
    border-bottom: 2px dashed #4c6272;
    border-right: 2px dashed #4c6272;
    left: 0;
    padding: 4px 8px;
    position: absolute;
    top: 0
}

.app-annotate-block+.nhsuk-main-wrapper {
    padding-bottom: 0;
    padding-top: 0
}

.app-team-pictures-list {
    padding-left: 0
}

@media(min-width: 40.0625em) {
    .app-team-pictures-list {
        padding-left:0
    }
}

.app-team-pictures-list img {
    margin-right: 8px;
    border: 2px solid rgba(0,0,0,0);
    border-radius: 30px;
    display: inline-block;
    height: 40px;
    line-height: 1;
    overflow: hidden;
    vertical-align: middle;
    width: 40px
}

@media(min-width: 40.0625em) {
    .app-team-pictures-list img {
        margin-right:16px
    }
}

.app-team-pictures-list li {
    list-style: none
}

.nhsuk-back-to-top__link {
    display: inline-block;
    font-size: 1rem;
    line-height: 1.5;
    margin-top: 0;
    position: relative
}

@media(min-width: 40.0625em) {
    .nhsuk-back-to-top__link {
        font-size:1.1875rem;
        line-height: 1.47368
    }
}

@media print {
    .nhsuk-back-to-top__link {
        display: none;
        font-size: 14pt;
        line-height: 1.15
    }
}

.nhsuk-back-to-top__link:visited {
    color: #330072
}

.nhsuk-back-to-top__link:hover,.nhsuk-back-to-top__link:focus {
    color: #7c2855;
    text-decoration: none
}

.nhsuk-back-to-top__link:hover .nhsuk-icon,.nhsuk-back-to-top__link:focus .nhsuk-icon {
    fill: #212b32
}

/*# sourceMappingURL=main.css.map */


</style>
