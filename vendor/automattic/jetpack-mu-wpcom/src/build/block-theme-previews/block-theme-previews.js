(()=>{"use strict";var e={70168:(e,t,o)=>{o.d(t,{Z:()=>m});var r=o(55609),s=o(9818),i=o(65736),a=o(99196),c=o.n(a),l=o(48496);const __=i.__;function m(){const e=(0,l.L)(),t=(0,s.useSelect)((t=>t("core").getTheme(e)),[e]),o=(0,s.useSelect)((e=>!!e("core/edit-site")),[]),a=(0,s.useSelect)((e=>e("automattic/wpcom-block-theme-previews").isModalVisible()),[]),{dismissModal:m}=(0,s.useDispatch)("automattic/wpcom-block-theme-previews");return o&&a?c().createElement(r.Modal,{className:"wpcom-block-theme-previews-modal",onRequestClose:m,shouldCloseOnClickOutside:!1},c().createElement("div",{className:"wpcom-block-theme-previews-modal__content"},c().createElement("div",{className:"wpcom-block-theme-previews-modal__text"},c().createElement("h1",{className:"wpcom-block-theme-previews-modal__heading"},(0,i.sprintf)(
// translators: %s: theme name
__("You’re previewing %s","jetpack-mu-wpcom"),t?.name?.rendered||e)),c().createElement("div",{className:"wpcom-block-theme-previews-modal__description"},c().createElement("p",null,__("Changes you make in the editor won’t be applied to your site until you activate the theme.","jetpack-mu-wpcom")),c().createElement("p",null,__("Try customizing your theme styles to get your site looking just right.","jetpack-mu-wpcom"))),c().createElement("div",{className:"wpcom-block-theme-previews-modal__actions"},c().createElement(r.Button,{variant:"primary",onClick:m},__("Start customizing","jetpack-mu-wpcom")))),c().createElement("div",{className:"wpcom-block-theme-previews-modal__video"},c().createElement("video",{autoPlay:!0,loop:!0,muted:!0},c().createElement("source",{src:"https://videos.files.wordpress.com/gTXUlIAB/wpcom-block-theme-previews-modal.mp4",type:"video/mp4"}))))):null}},25725:(e,t,o)=>{var r=o(9818);const s={isModalVisible:!0};(0,r.registerStore)("automattic/wpcom-block-theme-previews",{reducer:(e=s,t)=>"DISMISS_MODAL"===t.type?{...e,isModalVisible:!1}:e,actions:{dismissModal:()=>({type:"DISMISS_MODAL"})},selectors:{isModalVisible:e=>e.isModalVisible},persist:!0})},48496:(e,t,o)=>{o.d(t,{L:()=>s});var r=o(96483);function s(){return(0,r.getQueryArg)(window.location.href,"wp_theme_preview")}},99196:e=>{e.exports=window.React},55609:e=>{e.exports=window.wp.components},9818:e=>{e.exports=window.wp.data},47701:e=>{e.exports=window.wp.domReady},65736:e=>{e.exports=window.wp.i18n},98817:e=>{e.exports=window.wp.plugins},96483:e=>{e.exports=window.wp.url}},t={};function o(r){var s=t[r];if(void 0!==s)return s.exports;var i=t[r]={exports:{}};return e[r](i,i.exports,o),i.exports}o.n=e=>{var t=e&&e.__esModule?()=>e.default:()=>e;return o.d(t,{a:t}),t},o.d=(e,t)=>{for(var r in t)o.o(t,r)&&!o.o(e,r)&&Object.defineProperty(e,r,{enumerable:!0,get:t[r]})},o.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e=o(47701),t=o.n(e),r=o(98817),s=o(70168);o(25725);t()((()=>{(0,r.registerPlugin)("wpcom-block-theme-previews",{render:s.Z})}))})()})();