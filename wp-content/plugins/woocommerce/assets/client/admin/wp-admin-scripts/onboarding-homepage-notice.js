!function(){"use strict";var e={n:function(t){var o=t&&t.__esModule?function(){return t.default}:function(){return t};return e.d(o,{a:o}),o},d:function(t,o){for(var n in o)e.o(o,n)&&!e.o(t,n)&&Object.defineProperty(t,n,{enumerable:!0,get:o[n]})},o:function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r:function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}},t={};e.r(t);var o=window.wp.data,n=window.wp.i18n,i=window.wp.domReady,c=e.n(i),r=window.wc.wcSettings,s=window.wc.tracks;const a=()=>document.querySelector(".editor-post-publish-button").classList.contains("is-busy")?Promise.resolve(!0):new Promise((e=>{window.requestAnimationFrame(e)})).then((()=>a())),u=()=>document.querySelector(".editor-post-publish-button").classList.contains("is-busy")?new Promise((e=>{window.requestAnimationFrame(e)})).then((()=>u())):Promise.resolve(!0);c()((()=>{const e=document.querySelector(".editor-post-publish-button");e&&e.addEventListener("click",a().then((()=>(()=>{const e=document.querySelector(".editor-post-publish-button");e.classList.contains("is-clicked")||(e.classList.add("is-clicked"),u().then((()=>{const e=null!==document.querySelector(".components-snackbar__content")?"snackbar":"default";(0,o.dispatch)("core/notices").removeNotice("SAVE_POST_NOTICE_ID"),(0,o.dispatch)("core/notices").createSuccessNotice((0,n.__)("🏠 Nice work creating your store's homepage!","woocommerce"),{id:"WOOCOMMERCE_ONBOARDING_HOME_PAGE_NOTICE",type:e,actions:[{label:(0,n.__)("Continue setup.","woocommerce"),onClick:()=>{(0,s.queueRecordEvent)("tasklist_appearance_continue_setup",{}),window.location=(0,r.getAdminLink)("admin.php?page=wc-admin&task=appearance")}}]})})))})())))})),(window.wc=window.wc||{}).onboardingHomepageNotice=t}();