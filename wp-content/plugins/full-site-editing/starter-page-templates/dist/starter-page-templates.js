!function(e,t){for(var n in t)e[n]=t[n]}(window,function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var i in e)n.d(r,i,function(t){return e[t]}.bind(null,i));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=39)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.lodash}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){e.exports=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){!function(){e.exports=this.wp.data}()},function(e,t){!function(){e.exports=this.wp.compose}()},function(e,t,n){var r;
/*!
  Copyright (c) 2017 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/!function(){"use strict";var n={}.hasOwnProperty;function i(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var o=typeof r;if("string"===o||"number"===o)e.push(r);else if(Array.isArray(r)&&r.length){var a=i.apply(null,r);a&&e.push(a)}else if("object"===o)for(var s in r)n.call(r,s)&&r[s]&&e.push(s)}}return e.join(" ")}e.exports?(i.default=i,e.exports=i):void 0===(r=function(){return i}.apply(t,[]))||(e.exports=r)}()},function(e,t,n){var r=n(3);function i(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}e.exports=function(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?i(Object(n),!0).forEach((function(t){r(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):i(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}},function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}e.exports=function(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}},function(e,t,n){var r=n(28),i=n(4);e.exports=function(e,t){return!t||"object"!==r(t)&&"function"!=typeof t?i(e):t}},function(e,t){function n(t){return e.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},n(t)}e.exports=n},function(e,t,n){var r=n(29);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&r(e,t)}},function(e,t){!function(){e.exports=this.wp.blocks}()},function(e,t){function n(){return e.exports=n=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t];for(var r in n)Object.prototype.hasOwnProperty.call(n,r)&&(e[r]=n[r])}return e},n.apply(this,arguments)}e.exports=n},function(e,t){!function(){e.exports=this.wp.plugins}()},function(e,t){!function(){e.exports=this.wp.hooks}()},function(e,t,n){var r=n(32),i=n(33),o=n(34);e.exports=function(e,t){return r(e)||i(e,t)||o()}},function(e,t){!function(){e.exports=this.wp.blockEditor}()},function(e,t){function n(e,t,n,r,i,o,a){try{var s=e[o](a),l=s.value}catch(c){return void n(c)}s.done?t(l):Promise.resolve(l).then(r,i)}e.exports=function(e){return function(){var t=this,r=arguments;return new Promise((function(i,o){var a=e.apply(t,r);function s(e){n(a,i,o,s,l,"next",e)}function l(e){n(a,i,o,s,l,"throw",e)}s(void 0)}))}}},function(e,t,n){var r=n(35),i=n(36),o=n(37);e.exports=function(e){return r(e)||i(e)||o()}},function(e,t){!function(){e.exports=this.wp.editPost}()},function(e,t){!function(){e.exports=this.wp.editor}()},function(e,t){!function(){e.exports=this.wp.apiFetch}()},function(e,t){!function(){e.exports=this.wp.url}()},function(e,t,n){var r=n(38);e.exports=function(e,t){if(null==e)return{};var n,i,o=r(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(i=0;i<a.length;i++)n=a[i],t.indexOf(n)>=0||Object.prototype.propertyIsEnumerable.call(e,n)&&(o[n]=e[n])}return o}},function(e,t){function n(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?e.exports=n=function(e){return typeof e}:e.exports=n=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(t)}e.exports=n},function(e,t){function n(t,r){return e.exports=n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},n(t,r)}e.exports=n},function(e,t){!function(){e.exports=this.wp.nux}()},function(e,t,n){},function(e,t){e.exports=function(e){if(Array.isArray(e))return e}},function(e,t){e.exports=function(e,t){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e)){var n=[],r=!0,i=!1,o=void 0;try{for(var a,s=e[Symbol.iterator]();!(r=(a=s.next()).done)&&(n.push(a.value),!t||n.length!==t);r=!0);}catch(l){i=!0,o=l}finally{try{r||null==s.return||s.return()}finally{if(i)throw o}}return n}}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to destructure non-iterable instance")}},function(e,t){e.exports=function(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}},function(e,t){e.exports=function(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}},function(e,t){e.exports=function(e,t){if(null==e)return{};var n,r,i={},o=Object.keys(e);for(r=0;r<o.length;r++)n=o[r],t.indexOf(n)>=0||(i[n]=e[n]);return i}},function(e,t,n){"use strict";n.r(t);var r=n(16),i=n.n(r),o=n(0),a=n(2),s=n(17),l=n(6),c=n(23),u=n(9),p=n.n(u),m=n(10),d=n.n(m),f=n(11),b=n.n(f),g=n(12),O=n.n(g),v=n(13),h=n.n(v),y=n(4),j=n.n(y),_=n(14),w=n.n(_),T=n(3),k=n.n(T),P=n(1),E=n(8),S=n.n(E),x=(n(30),n(7)),B=n(5),I=n(15),N=n(18),C=(n(31),n(19)),A=n.n(C),L=n(20),M=n(24),D=function(e){var t=e.blocks,n=e.settings,r=e.hidePageTitle,i=e.recomputeBlockListKey;return Object(o.createElement)(L.BlockEditorProvider,{value:t,settings:n},Object(o.createElement)(B.Disabled,{key:i},!r&&Object(o.createElement)("div",{className:"block-iframe-preview__template-title"},Object(o.createElement)(M.PostTitle,null)),Object(o.createElement)(L.BlockList,null)))},F=Object(x.compose)(x.withSafeTimeout,Object(l.withSelect)((function(e){var t=e("core/block-editor");return{settings:t?t.getSettings():{}}})))((function(e){var t=e.className,n=void 0===t?"block-iframe-preview":t,r=e.bodyClassName,i=void 0===r?"block-iframe-preview-body":r,s=e.viewportWidth,l=e.blocks,c=e.settings,u=e.setTimeout,p=void 0===u?P.noop:u,m=e.title,d=Object(o.useRef)(),f=Object(o.useRef)(),b=Object(o.useRef)(),g=Object(o.useState)({transform:"scale( 1 )"}),O=A()(g,2),v=O[0],h=O[1],y=Object(o.useMemo)((function(){return Object(P.castArray)(l)}),[l]),j=Object(o.useReducer)((function(e){return e+1}),0),_=A()(j,2),w=_[0],T=_[1];Object(o.useLayoutEffect)(T,[l]);var k=Object(o.useCallback)((function(){var e=Object(P.get)(d,["current","parentNode"]);if(e){var t=s||d.current.offsetWidth,n=e.offsetWidth/s,r=e.offsetHeight/n;h({width:t,height:r,transform:"scale( ".concat(n," )")})}}),[s]);return Object(o.useEffect)((function(){if(m){var e=Object(P.get)(b,["current","contentDocument","body"]);if(e){var t=e.querySelector(".editor-post-title .editor-post-title__input");t&&(t.value=m)}}}),[w]),Object(o.useEffect)((function(){p((function(){var e,t,n,r;e=window.document,t=b.current.contentDocument,n=["link","style"],r={head:document.createDocumentFragment(),body:document.createDocumentFragment()},Object(P.each)(Object.keys(r),(function(t){return Object(P.each)(Object(P.filter)(e[t].children,(function(e){var t=e.localName;return(n.includes(t))})),(function(e){r[t].appendChild(e.cloneNode(!0))}))})),t.head.appendChild(r.head),t.body.appendChild(r.body),b.current.contentDocument.body.classList.add(i,"editor-styles-wrapper","block-editor__container"),k()}),0)}),[p,i,k]),Object(o.useEffect)((function(){var e=Object(P.get)(b,["current","contentDocument","body"]);e&&(e.scrollTop=0)}),[w]),Object(o.useEffect)((function(){var e=f&&f.current;e&&b.current.contentDocument.body.appendChild(e)}),[w]),Object(o.useEffect)((function(){var e=Object(P.debounce)(k,300);return window.addEventListener("resize",e),function(){window.removeEventListener("resize",e)}}),[k]),Object(o.useEffect)((function(){return window.jQuery&&window.jQuery(window.document).on("wp-collapse-menu",k),function(){window.jQuery&&window.jQuery(window.document).off("wp-collapse-menu",k)}}),[k]),Object(o.createElement)("div",{ref:d},Object(o.createElement)("iframe",{ref:b,title:Object(a.__)("Preview"),className:S()("editor-styles-wrapper",n),style:v}),Object(o.createElement)("div",{ref:f,className:"block-editor"},Object(o.createElement)("div",{className:"edit-post-visual-editor"},Object(o.createElement)("div",{className:"editor-styles-wrapper"},Object(o.createElement)("div",{className:"editor-writing-flow"},Object(o.createElement)(D,{blocks:y,settings:c,hidePageTitle:!m,recomputeBlockListKey:w}))))))})),W=function(e){var t=e.id,n=e.value,r=e.onSelect,i=e.label,a=e.useDynamicPreview,s=void 0!==a&&a,l=e.staticPreviewImg,c=e.staticPreviewImgAlt,u=void 0===c?"":c,p=e.blocks,m=void 0===p?[]:p,d=e.isSelected;if(Object(P.isNil)(t)||Object(P.isNil)(i)||Object(P.isNil)(n))return null;if(s&&(Object(P.isNil)(m)||Object(P.isEmpty)(m)))return null;var f=s?Object(o.createElement)(B.Disabled,null,Object(o.createElement)(F,{blocks:m,viewportWidth:960})):Object(o.createElement)("img",{className:"template-selector-item__media",src:l,alt:u}),b="label-".concat(t,"-").concat(n);return Object(o.createElement)("button",{type:"button",className:S()("template-selector-item__label",{"is-selected":d}),value:n,onClick:function(){r(n)},"aria-labelledby":"".concat(t," ").concat(b)},Object(o.createElement)("span",{className:"template-selector-item__preview-wrap"},f))},G={Address:Object(a._x)("123 Main St","default address","full-site-editing"),Phone:Object(a._x)("555-555-5555","default phone number","full-site-editing"),CompanyName:Object(a._x)("Your Company Name","default company name","full-site-editing"),Vertical:Object(a._x)("Business","default vertical name","full-site-editing")},U={CompanyName:"title",Address:"address",Phone:"phone",Vertical:"vertical"},R=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{};return e?e.replace(/{{(\w+)}}/g,(function(e,n){var r=G[n];return t[U[n]]||r||n})):""},q=Object(x.compose)(o.memo,x.withInstanceId)((function(e){var t=e.label,n=e.className,r=e.help,i=e.instanceId,a=e.templates,s=void 0===a?[]:a,l=e.blocksByTemplates,c=void 0===l?{}:l,u=e.useDynamicPreview,p=void 0!==u&&u,m=e.onTemplateSelect,d=void 0===m?P.noop:m,f=e.siteInformation,b=void 0===f?{}:f,g=e.selectedTemplate;if(Object(P.isEmpty)(s)||!Object(P.isArray)(s))return null;if(!0===p&&Object(P.isEmpty)(c))return null;var O="template-selector-control-".concat(i);return Object(o.createElement)(B.BaseControl,{label:t,id:O,help:r,className:S()(n,"template-selector-control")},Object(o.createElement)("ul",{className:"template-selector-control__options","data-testid":"template-selector-control-options"},Object(P.map)(s,(function(e){var t=e.slug,n=e.title,i=e.preview,a=e.previewAlt;return Object(o.createElement)("li",{key:"".concat(O,"-").concat(t),className:"template-selector-control__template"},Object(o.createElement)(W,{id:O,value:t,label:R(n,b),help:r,onSelect:d,staticPreviewImg:i,staticPreviewImgAlt:a,blocks:c.hasOwnProperty(t)?c[t]:[],useDynamicPreview:p,isSelected:t===g}))}))))})),z=function(e){var t=e.blocks,n=void 0===t?[]:t,r=e.viewportWidth,i=e.title,s=!n.length;return Object(o.createElement)("div",{className:"template-selector-preview ".concat(s?"not-selected":"")},s&&Object(o.createElement)("div",{className:"editor-styles-wrapper"},Object(o.createElement)("div",{className:"template-selector-preview__empty-state"},Object(a.__)("Select a layout to preview.","full-site-editing"))),Object(o.createElement)(F,{blocks:n,viewportWidth:r,title:i}))};window._tkq=window._tkq||[];var V=null,Q=function(e,t){V&&window._tkq.push(["recordEvent","a8c_full_site_editing_template_selector_dismiss",{blog_id:V.blogid,segment_id:e,vertical_id:t}])},H=function(e,t,n){V&&window._tkq.push(["recordEvent","a8c_full_site_editing_template_selector_template_selected",{blog_id:V.blogid,segment_id:e,vertical_id:t,template:n}])},K=n(21),Y=n.n(K),J=n(22),X=n.n(J),Z=n(25),$=n.n(Z),ee=n(26),te=function(e,t,n){var r=e[t=Object(ee.removeQueryArgs)(t,"w","s")]||{url:t,usages:[]};return p()({},e,k()({},t,p()({},r,{usages:[].concat(X()(r.usages),X()(n))})))},ne=function e(t,n){switch(t.blocksByClientId[n.clientId]=n,n.name){case"core/cover":case"core/image":var r=n.attributes.url;r&&(t.assets=te(t.assets,r,[{prop:"url",path:[n.clientId,"attributes","url"]},{prop:"id",path:[n.clientId,"attributes","id"]}]));case"core/media-text":var i=n.attributes.mediaUrl;i&&"image"===n.attributes.mediaType&&(t.assets=te(t.assets,i,[{prop:"url",path:[n.clientId,"attributes","mediaUrl"]},{prop:"id",path:[n.clientId,"attributes","mediaId"]}]));case"core/gallery":Object(P.forEach)(n.attributes.images,(function(e,r){t.assets=te(t.assets,e.url,[{prop:"url",path:[n.clientId,"attributes","images",r,"url"]},{prop:"url",path:[n.clientId,"attributes","images",r,"link"]},{prop:"id",path:[n.clientId,"attributes","images",r,"id"]},{prop:"id",path:[n.clientId,"attributes","ids",r]}])}))}return Object(P.isEmpty)(n.innerBlocks)?t:Object(P.reduce)(n.innerBlocks,e,t)},re=function(){var e=Y()(regeneratorRuntime.mark((function e(t){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,$()({method:"POST",path:"/fse/v1/sideload/image/batch",data:{resources:Object(P.map)(t)}}).then((function(e){return Object(P.reduce)(t,(function(t,n){var r=e.shift(),i=r.id,o=r.source_url;return p()({},t,k()({},n.url,{id:i,url:o}))}),{})}));case 2:return e.abrupt("return",e.sent);case 3:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}(),ie=function(e,t){return Object(P.forEach)(e.assets,(function(n){var r=t[n.url];r&&Object(P.forEach)(n.usages,(function(t){Object(P.set)(e.blocksByClientId,t.path,r[t.prop])}))})),e.blocks},oe=function(){var e=Y()(regeneratorRuntime.mark((function e(t){var n;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:if(n=Object(P.reduce)(t,ne,{assets:{},blocksByClientId:{},blocks:t}),!Object(P.isEmpty)(n.assets)){e.next=3;break}return e.abrupt("return",t);case 3:return e.abrupt("return",re(n.assets).then((function(e){return ie(n,e)})));case 4:case"end":return e.stop()}}),e)})));return function(t){return e.apply(this,arguments)}}();var ae=function e(t){var n=arguments.length>1&&void 0!==arguments[1]?arguments[1]:P.identity;return t.map((function(t){return(t=n(Object(I.cloneBlock)(t))).innerBlocks&&t.innerBlocks.length&&(t.innerBlocks=e(t.innerBlocks,n)),t}))},se="core/missing";var le=function e(t){return!!t.find((function(t){return t.name===se||!(!t.innerBlocks||!t.innerBlocks.length)&&e(t.innerBlocks)}))},ce=function(e){function t(){var e,n;d()(this,t);for(var r=arguments.length,i=new Array(r),s=0;s<r;s++)i[s]=arguments[s];return n=O()(this,(e=h()(t)).call.apply(e,[this].concat(i))),k()(j()(n),"state",{isLoading:!1,previewedTemplate:null,error:null}),k()(j()(n),"getTitlesByTemplateSlugs",Object(P.memoize)((function(e){return Object(P.mapValues)(Object(P.keyBy)(e,"slug"),"title")}))),k()(j()(n),"getBlocksByTemplateSlugs",Object(P.memoize)((function(e){var t=Object(P.reduce)(e,(function(e,t){var r=t.slug,i=t.content;return e[r]=i?Object(I.parse)(R(i,n.props.siteInformation)):[],e}),{});return n.filterTemplatesWithMissingBlocks(t)}))),k()(j()(n),"getBlocksForPreview",Object(P.memoize)((function(e){var t=n.getBlocksByTemplateSlug(e);return ae(t,(function(e){return"jetpack/contact-form"===e.name&&void 0!==e.attributes.hasFormSettingsSet&&(e.attributes.hasFormSettingsSet=!0),e}))}))),k()(j()(n),"getBlocksForSelection",(function(e){var t=n.getBlocksByTemplateSlug(e);return ae(t,(function(e){return"core/button"===e.name&&void 0!==e.attributes.url&&(e.attributes.url="#"),e}))})),k()(j()(n),"setTemplate",(function(e){if(H(n.props.segment.id,n.props.vertical.id,e),n.props.saveTemplateChoice(e),"blank"===e)return n.props.insertTemplate("",[]),void n.props.setIsOpen(!1);var t=Object(P.find)(n.props.templates,{slug:e,category:"home"}),r=n.getBlocksForSelection(e),i=t?null:n.getTitleByTemplateSlug(e);r&&r.length?(n.setState({error:null,isLoading:!0}),n.maybePrefetchAssets(r).then((function(e){n.setState({isLoading:!1}),n.props.isOpen&&(n.props.insertTemplate(i,e),n.props.setIsOpen(!1))})).catch((function(e){n.setState({isLoading:!1,error:e})}))):n.props.setIsOpen(!1)})),k()(j()(n),"maybePrefetchAssets",(function(e){return n.props.shouldPrefetchAssets?oe(e):Promise.resolve(e)})),k()(j()(n),"handleConfirmation",(function(e){"string"!=typeof e&&(e=n.state.previewedTemplate),n.setTemplate(e),n.props.isPromptedFromSidebar&&n.props.toggleTemplateModal()})),k()(j()(n),"previewTemplate",(function(e){n.setState({previewedTemplate:e}),window.matchMedia("(min-width: 660px)").matches||n.handleConfirmation(e)})),k()(j()(n),"closeModal",(function(e){if(e.target.matches("button.template-selector-item__label"))return!1;Q(n.props.segment.id,n.props.vertical.id);var t=Object(P.get)(window,["calypsoifyGutenberg","closeUrl"]);window.top.location=t||"edit.php?post_type=page"})),k()(j()(n),"getTemplateGroups",(function(){return{blankTemplate:Object(P.filter)(n.props.templates,{slug:"blank"}),aboutTemplates:Object(P.filter)(n.props.templates,{category:"about"}),blogTemplates:Object(P.filter)(n.props.templates,{category:"blog"}),contactTemplates:Object(P.filter)(n.props.templates,{category:"contact"}),eventTemplates:Object(P.filter)(n.props.templates,{category:"event"}),menuTemplates:Object(P.filter)(n.props.templates,{category:"menu"}),portfolioTemplates:Object(P.filter)(n.props.templates,{category:"portfolio"}),productTemplates:Object(P.filter)(n.props.templates,{category:"product"}),servicesTemplates:Object(P.filter)(n.props.templates,{category:"services"}),teamTemplates:Object(P.filter)(n.props.templates,{category:"team"}),homepageTemplates:Object(P.sortBy)(Object(P.filter)(n.props.templates,{category:"home"}),"title")}})),k()(j()(n),"renderTemplatesList",(function(e,t){if(!e.length)return null;var r,i=n.getBlocksByTemplateSlugs(n.props.templates),s=Object.keys(i),l=(r=s,e.filter((function(e){return r.includes(e.slug)})));return l.length?Object(o.createElement)("fieldset",{className:"page-template-modal__list"},Object(o.createElement)("legend",{className:"page-template-modal__form-title"},t),Object(o.createElement)(q,{label:Object(a.__)("Layout","full-site-editing"),templates:l,blocksByTemplates:i,onTemplateSelect:n.previewTemplate,useDynamicPreview:!1,siteInformation:n.props.siteInformation,selectedTemplate:n.state.previewedTemplate})):null})),n}return w()(t,e),b()(t,[{key:"filterTemplatesWithMissingBlocks",value:function(e){return Object(P.reduce)(e,(function(e,t,n){return le(t)&&t.length||(e[n]=t),e}),{})}},{key:"componentDidMount",value:function(){this.props.isOpen&&this.trackCurrentView()}},{key:"componentDidUpdate",value:function(e){!e.isOpen&&this.props.isOpen&&this.trackCurrentView(),(this.props.isWelcomeGuideActive||this.props.areTipsEnabled)&&this.props.hideWelcomeGuide()}},{key:"trackCurrentView",value:function(){var e,t,n;e=this.props.segment.id,t=this.props.vertical.id,n=this.props.isPromptedFromSidebar?"sidebar":"add-page",V&&window._tkq.push(["recordEvent","a8c_full_site_editing_template_selector_view",{blog_id:V.blogid,segment_id:e,vertical_id:t,source:n}])}},{key:"getBlocksByTemplateSlug",value:function(e){return Object(P.get)(this.getBlocksByTemplateSlugs(this.props.templates),[e],[])}},{key:"getTitleByTemplateSlug",value:function(e){return Object(P.get)(this.getTitlesByTemplateSlugs(this.props.templates),[e],"")}},{key:"render",value:function(){var e=this.state,t=e.previewedTemplate,n=e.isLoading,r=this.props,i=r.isPromptedFromSidebar,s=r.hidePageTitle;if(!r.isOpen)return null;var l=this.getTemplateGroups(),c=l.blankTemplate,u=l.aboutTemplates,p=l.blogTemplates,m=l.contactTemplates,d=l.eventTemplates,f=l.menuTemplates,b=l.portfolioTemplates,g=l.productTemplates,O=l.servicesTemplates,v=l.teamTemplates,h=l.homepageTemplates;return Object(o.createElement)(B.Modal,{title:Object(a.__)("Select Page Layout","full-site-editing"),className:"page-template-modal",overlayClassName:"page-template-modal-screen-overlay",shouldCloseOnClickOutside:!1,isDismissable:!1,isDismissible:!1},i?Object(o.createElement)(B.IconButton,{className:"page-template-modal__close-button components-icon-button",onClick:this.props.toggleTemplateModal,icon:"no-alt",label:Object(a.__)("Close Layout Selector")}):Object(o.createElement)(B.IconButton,{className:"page-template-modal__close-button components-icon-button",onClick:this.closeModal,icon:"arrow-left-alt2",label:Object(a.__)("Go back")}),Object(o.createElement)("div",{className:"page-template-modal__inner"},n?Object(o.createElement)("div",{className:"page-template-modal__loading"},Object(o.createElement)(B.Spinner,null),Object(a.__)("Adding layout…","full-site-editing")):Object(o.createElement)(o.Fragment,null,Object(o.createElement)("form",{className:"page-template-modal__form"},this.props.isFrontPage&&this.renderTemplatesList(h,Object(a.__)("Home Pages","full-site-editing")),this.renderTemplatesList(c,Object(a.__)("Blank","full-site-editing")),this.renderTemplatesList(u,Object(a.__)("About Pages","full-site-editing")),this.renderTemplatesList(p,Object(a.__)("Blog Pages","full-site-editing")),this.renderTemplatesList(m,Object(a.__)("Contact Pages","full-site-editing")),this.renderTemplatesList(d,Object(a.__)("Event Pages","full-site-editing")),this.renderTemplatesList(f,Object(a.__)("Menu Pages","full-site-editing")),this.renderTemplatesList(b,Object(a.__)("Portfolio Pages","full-site-editing")),this.renderTemplatesList(g,Object(a.__)("Product Pages","full-site-editing")),this.renderTemplatesList(O,Object(a.__)("Services Pages","full-site-editing")),this.renderTemplatesList(v,Object(a.__)("Team Pages","full-site-editing")),!this.props.isFrontPage&&this.renderTemplatesList(h,Object(a.__)("Home Pages","full-site-editing"))),Object(o.createElement)(z,{blocks:this.getBlocksForPreview(t),viewportWidth:1200,title:!s&&this.getTitleByTemplateSlug(t)}))),Object(o.createElement)("div",{className:S()("page-template-modal__buttons",{"is-visually-hidden":Object(P.isEmpty)(t)||n})},Object(o.createElement)(B.Button,{isPrimary:!0,isLarge:!0,disabled:Object(P.isEmpty)(t)||n,onClick:this.handleConfirmation},Object(a.sprintf)(Object(a.__)("Use %s layout","full-site-editing"),this.getTitleByTemplateSlug(t)))))}}],[{key:"getDerivedStateFromProps",value:function(e,n){return n.previewedTemplate||Object(P.isEmpty)(e.templates)?null:{previewedTemplate:t.getDefaultSelectedTemplate(e)}}}]),t}(o.Component);k()(ce,"getDefaultSelectedTemplate",(function(e){var t=Object(P.get)(e.templates,[0,"slug"]),n=e._starter_page_template;if(!e.isFrontPage&&!n)return t;"home"===n&&(n=e.theme);var r=n||e.theme;return Object(P.find)(e.templates,{slug:r})?r:Object(P.find)(e.templates,{slug:"maywood"})?"maywood":t}));var ue=Object(x.compose)(Object(l.withSelect)((function(e){var t=function(){return e("core/editor").getEditedPostAttribute("meta")},n=t()._starter_page_template;return{isOpen:e("automattic/starter-page-layouts").isOpen(),getMeta:t,_starter_page_template:n,postContentBlock:e("core/editor").getBlocks().find((function(e){return"a8c/post-content"===e.name})),isWelcomeGuideActive:e("core/edit-post").isFeatureActive("welcomeGuide"),areTipsEnabled:!!e("core/nux")&&e("core/nux").areTipsEnabled()}})),Object(l.withDispatch)((function(e,t){var n=e("core/editor");return{setIsOpen:e("automattic/starter-page-layouts").setIsOpen,saveTemplateChoice:function(e){var r=t.getMeta();n.editPost({meta:p()({},r,{_starter_page_template:e})})},insertTemplate:function(r,i){Object(N.addFilter)("isInsertingPageTemplate","automattic/full-site-editing/inserting-template",P.stubTrue),r&&n.editPost({title:r});var o=t.postContentBlock;e("core/block-editor").replaceInnerBlocks(o?o.clientId:"",i,!1),Object(N.removeFilter)("isInsertingPageTemplate","automattic/full-site-editing/inserting-template")},hideWelcomeGuide:function(){t.isWelcomeGuideActive?e("core/edit-post").toggleFeature("welcomeGuide"):t.areTipsEnabled&&e("core/nux").disableTips()}}})))(ce),pe=function(e){function t(){var e,n;d()(this,t);for(var r=arguments.length,i=new Array(r),o=0;o<r;o++)i[o]=arguments[o];return n=O()(this,(e=h()(t)).call.apply(e,[this].concat(i))),k()(j()(n),"state",{isWarningOpen:!1}),k()(j()(n),"toggleTemplateModal",(function(){n.props.setIsOpen(!n.props.isOpen)})),k()(j()(n),"toggleWarningModal",(function(){n.setState({isWarningOpen:!n.state.isWarningOpen})})),k()(j()(n),"getLastTemplateUsed",(function(){var e=n.props,t=e.isFrontPage,r=e.templates,i=e.theme,o=n.props.lastTemplateUsedSlug;if(!o&&t&&(o=i),!o||"blank"===o)return r[0];var a=r.find((function(e){return e.slug===o}));return a||r[0]})),n}return w()(t,e),b()(t,[{key:"render",value:function(){var e=this.getLastTemplateUsed(),t=e.slug,n=e.title,r=e.preview,i=e.previewAlt,s=this.props,l=s.templates,c=s.theme,u=s.vertical,p=s.segment,m=s.siteInformation,d=s.hidePageTitle,f=s.isFrontPage,b=s.isOpen;return Object(o.createElement)("div",{className:"sidebar-modal-opener"},Object(o.createElement)(W,{id:"sidebar-modal-opener__last-template-used-preview",value:t,label:R(n,m),staticPreviewImg:r,staticPreviewImgAlt:i,onSelect:this.toggleWarningModal}),Object(o.createElement)(B.Button,{isPrimary:!0,onClick:this.toggleWarningModal,className:"sidebar-modal-opener__button"},Object(a.__)("Change Layout")),b&&Object(o.createElement)(ue,{shouldPrefetchAssets:!1,templates:l,theme:c,vertical:u,segment:p,toggleTemplateModal:this.toggleTemplateModal,hidePageTitle:d,isFrontPage:f,isPromptedFromSidebar:!0}),this.state.isWarningOpen&&Object(o.createElement)(B.Modal,{title:Object(a.__)("Overwrite Page Content?"),isDismissible:!1,onRequestClose:this.toggleWarningModal,className:"sidebar-modal-opener__warning-modal"},Object(o.createElement)("div",{className:"sidebar-modal-opener__warning-text"},Object(a.__)("Changing the page's layout will remove any customizations or edits you have already made.")),Object(o.createElement)("div",{className:"sidebar-modal-opener__warning-options"},Object(o.createElement)(B.Button,{isDefault:!0,onClick:this.toggleWarningModal},Object(a.__)("Cancel")),Object(o.createElement)(B.Button,{isPrimary:!0,onClick:this.toggleTemplateModal},Object(a.__)("Change Layout")))))}}]),t}(o.Component),me=Object(x.compose)(Object(l.withSelect)((function(e){return{lastTemplateUsedSlug:e("core/editor").getEditedPostAttribute("meta")._starter_page_template,isOpen:e("automattic/starter-page-layouts").isOpen()}})),Object(l.withDispatch)((function(e){return{setIsOpen:e("automattic/starter-page-layouts").setIsOpen}})))(pe),de=n(27),fe=n.n(de);Object(l.registerStore)("automattic/starter-page-layouts",{reducer:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{isOpen:!1},t=arguments.length>1?arguments[1]:void 0,n=t.type,r=fe()(t,["type"]);return"SET_IS_OPEN"===n?p()({},e,{isOpen:r.isOpen}):e},actions:{setIsOpen:function(e){return{type:"SET_IS_OPEN",isOpen:e}}},selectors:{isOpen:function(e){return e.isOpen}}});var be,ge=window.starterPageTemplatesConfig,Oe=ge.templates,ve=void 0===Oe?[]:Oe,he=ge.vertical,ye=ge.segment,je=ge.tracksUserData,_e=ge.siteInformation,we=void 0===_e?{}:_e,Te=ge.screenAction,ke=ge.theme,Pe=ge.isFrontPage,Ee=ge.hideFrontPageTitle;je&&(V=be=je,window._tkq.push(["identifyUser",be.userid,be.username]));var Se={segment:ye,templates:ve,theme:ke,vertical:he,isFrontPage:Pe,hidePageTitle:Boolean(Pe&&Ee)};"add"===Te&&(Object(l.dispatch)("automattic/starter-page-layouts").setIsOpen(!0),Object(s.registerPlugin)("page-templates",{render:function(){return Object(o.createElement)(ue,i()({},Se,{shouldPrefetchAssets:!1}))}})),Object(s.registerPlugin)("page-templates-sidebar",{render:function(){return Object(o.createElement)(c.PluginDocumentSettingPanel,{name:"Template Modal Opener",title:Object(a.__)("Page Layout"),className:"page-template-modal__sidebar",icon:"none"},Object(o.createElement)(me,i()({},Se,{siteInformation:we})))}});var xe=Object(l.subscribe)((function(){Object(l.select)("core/edit-post").isEditorPanelOpened("page-templates-sidebar/Template Modal Opener")||Object(l.dispatch)("core/edit-post").toggleEditorPanelOpened("page-templates-sidebar/Template Modal Opener"),xe()}))}]));
