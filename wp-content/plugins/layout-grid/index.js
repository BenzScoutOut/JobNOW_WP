!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=23)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t){!function(){e.exports=this.wp.i18n}()},function(e,t){e.exports=function(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}},function(e,t){!function(){e.exports=this.wp.components}()},function(e,t){e.exports=function(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return e}},function(e,t){!function(){e.exports=this.wp.blockEditor}()},function(e,t,n){var r;
/*!
  Copyright (c) 2017 Jed Watson.
  Licensed under the MIT License (MIT), see
  http://jedwatson.github.io/classnames
*/!function(){"use strict";var n={}.hasOwnProperty;function o(){for(var e=[],t=0;t<arguments.length;t++){var r=arguments[t];if(r){var a=typeof r;if("string"===a||"number"===a)e.push(r);else if(Array.isArray(r)&&r.length){var c=o.apply(null,r);c&&e.push(c)}else if("object"===a)for(var i in r)n.call(r,i)&&r[i]&&e.push(i)}}return e.join(" ")}e.exports?(o.default=o,e.exports=o):void 0===(r=function(){return o}.apply(t,[]))||(e.exports=r)}()},function(e,t){e.exports=function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}},function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}e.exports=function(e,t,r){return t&&n(e.prototype,t),r&&n(e,r),e}},function(e,t,n){var r=n(21),o=n(4);e.exports=function(e,t){return!t||"object"!==r(t)&&"function"!=typeof t?o(e):t}},function(e,t){function n(t){return e.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)},n(t)}e.exports=n},function(e,t,n){var r=n(22);e.exports=function(e,t){if("function"!=typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function");e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:!0,configurable:!0}}),t&&r(e,t)}},function(e,t){!function(){e.exports=this.wp.blocks}()},function(e,t){!function(){e.exports=this.wp.data}()},function(e,t){!function(){e.exports=this.wp.compose}()},function(e,t,n){var r=n(18),o=n(19),a=n(20);e.exports=function(e){return r(e)||o(e)||a()}},function(e,t){!function(){e.exports=this.lodash}()},function(e,t){!function(){e.exports=this.wp.keycodes}()},function(e,t){e.exports=function(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t];return n}}},function(e,t){e.exports=function(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}},function(e,t){e.exports=function(){throw new TypeError("Invalid attempt to spread non-iterable instance")}},function(e,t){function n(t){return"function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?e.exports=n=function(e){return typeof e}:e.exports=n=function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(t)}e.exports=n},function(e,t){function n(t,r){return e.exports=n=Object.setPrototypeOf||function(e,t){return e.__proto__=t,e},n(t,r)}e.exports=n},function(e,t,n){"use strict";n.r(t);var r=n(2),o=n.n(r),a=n(12),c=n(1),i=n(15),u=n.n(i),l=n(7),s=n.n(l),d=n(8),f=n.n(d),p=n(9),b=n.n(p),g=n(10),h=n.n(g),m=n(4),v=n.n(m),y=n(11),O=n.n(y),j=n(0),_=n(16),k=n(6),w=n.n(k),E=n(5),S=n(3),C=n(17),x=n(13),P=n(14);function M(){return[{value:"small",label:Object(c.__)("Small","layout-grid")},{value:"medium",label:Object(c.__)("Medium","layout-grid")},{value:"large",label:Object(c.__)("Large","layout-grid")},{value:"huge",label:Object(c.__)("Huge","layout-grid")}]}var z=function(){return[{label:Object(c.__)("1 column","layout-grid"),value:1},{label:Object(c.__)("2 columns","layout-grid"),value:2},{label:Object(c.__)("3 columns","layout-grid"),value:3},{label:Object(c.__)("4 columns","layout-grid"),value:4}]},B="Tablet",A="Mobile",D=function(){return[{value:"Desktop",label:Object(c.__)("Desktop","layout-grid")},{value:B,label:Object(c.__)("Tablet","layout-grid")},{value:A,label:Object(c.__)("Mobile","layout-grid")}]},N=4,R=["Desktop",B,A];function L(e,t){return"column".concat(e+1).concat(t,"Span")}function G(e,t){return"column".concat(e+1).concat(t,"Offset")}var V=function(e){return e===B?8:e===A?4:12};function T(e,t,n){return e===B?3===t&&2===n?V(e):t>1?V(e)/2:V(e):e===A?V(e):V(e)/t}function I(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function H(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?I(Object(n),!0).forEach((function(t){o()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):I(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var U=function(e,t){return"column".concat(e+1,"-grid__span-").concat(t)},X=function(e,t){return"column".concat(e+1,"-grid__start-").concat(t)},F=function(e,t){return"column".concat(e+1,"-grid__row-").concat(t)},K=function(e,t,n){return"column".concat(e+1,"-").concat(n.toLowerCase(),"-grid__span-").concat(t)},W=function(e,t,n){return"column".concat(e+1,"-").concat(n.toLowerCase(),"-grid__start-").concat(t)},q=function(e,t,n){return"column".concat(e+1,"-").concat(n.toLowerCase(),"-grid__row-").concat(t)};function J(e,t){return Math.floor(e/t)}function Q(e,t){return e%t}function Y(e,t,n,r){return{name:e,column:t,value:n,device:r,enabled:!(arguments.length>4&&void 0!==arguments[4])||arguments[4]}}function Z(e,t,n){for(var r=[],o=V(e),a=function(e,t,n){for(var r=[],o=0,a=0;a<e;a++){var c=L(a,t),i=G(a,t),u=n[c]||T(t,e,a),l=n[i]||0;r.push({position:o+l,span:u}),o+=l,o+=u}return r}(t,e,n),c=0;c<a.length;c++){var i=a[c],u=i.span,l=i.position,s=J(l,o),d=Q(l,o);r.push(Y("span",c,u,e)),r.push(Y("offset",c,d+1,e,d>0)),r.push(Y("row",c,s+1,e))}return r}function $(e,t){var n={};return e.filter((function(e){return e.enabled&&t[e.name]})).map((function(e){return n[t[e.name](e.column,e.value,e.device)]=!0})),n}function ee(e){return e?e.replace(/column\d-\w*-grid__\w*-\d*/g,"").replace(/column\d-grid__\w*-\d*/g,"").replace(/\s{2,}/,"").replace(/wp-block-jetpack-layout-gutter__\w*/,""):e}function te(e){var t=e.gutterSize;return{"wp-block-jetpack-layout-gutter__nowrap":!e.addGutterEnds,"wp-block-jetpack-layout-gutter__none":"none"===t,"wp-block-jetpack-layout-gutter__small":"small"===t,"wp-block-jetpack-layout-gutter__medium":"medium"===t,"wp-block-jetpack-layout-gutter__huge":"huge"===t}}var ne=function(){return Object(j.createElement)(S.SVG,{xmlns:"http://www.w3.org/2000/svg",width:"24",height:"24",viewBox:"0 0 24 24"},Object(j.createElement)(S.Path,{d:"M4 5v13h17V5H4zm10 2v9h-3V7h3zM6 7h3v9H6V7zm13 9h-3V7h3v9z"}))},re=function(){return Object(j.createElement)(S.SVG,{xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},Object(j.createElement)(S.Path,{d:"M7 12v24h34V12H7zm32 22H9V14h30v20z"}))},oe=function(){return Object(j.createElement)(S.SVG,{xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},Object(j.createElement)(S.Path,{d:"M7,12v24h34V12H7z M23,34H9V14h14V34z M39,34H25V14h14V34z"}))},ae=function(){return Object(j.createElement)(S.SVG,{xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},Object(j.createElement)(S.Path,{d:"M7 12v24h34V12H7zm23 2h9v20h-9V14zm-2 20h-8V14h8v20zM9 14h9v20H9V14z"}))},ce=function(){return Object(j.createElement)(S.SVG,{xmlns:"http://www.w3.org/2000/svg",width:"48",height:"48",viewBox:"0 0 48 48"},Object(j.createElement)(S.Path,{d:"M7 12v24h34V12H7zm8 22H9V14h6v20zm8 0h-6V14h6v20zm8 0h-6V14h6v20zm8 0h-6V14h6v20z"}))},ie=function(e){var t=e.columns;return 4===t?Object(j.createElement)(ce,null):3===t?Object(j.createElement)(ae,null):2===t?Object(j.createElement)(oe,null):Object(j.createElement)(re,null)};var ue=function(e){var t=e.height,n=e.xPos,r=e.top,o=e.isSelected,a=w()("wpcom-overlay-resize__handle","components-resizable-box__container",{"is-selected":o}),c={height:t+"px",width:n+"px",top:r+"px"},i={left:n+"px"};return Object(j.createElement)("div",{className:a,style:c},Object(j.createElement)("span",null,Object(j.createElement)("div",{className:"components-resizable-box__handle components-resizable-box__side-handle components-resizable-box__handle-left",style:i})))},le=function(e){function t(e){var n;return s()(this,t),n=b()(this,h()(t).call(this,e)),o()(v()(n),"onMouseDown",(function(e){var t=e.target;if((0===e.button||e.touches)&&(t.dataset.resizeRight||t.dataset.resizeLeft)){n.block=t.closest(".wp-block");var r=n.block.getBoundingClientRect(),o=r.height,a=r.right,c=r.left,i=r.top,u=t.getBoundingClientRect().width,l=n.getChildPosition(n.block),s=t.dataset.resizeLeft;n.setState({resizingColumn:l,xPos:n.getAdjustedOffset(n.getMouseX(e),u),height:o,width:u,top:n.getAdjustedTop(i),direction:s?"left":"right",max:s?n.getAdjustedOffset(a,u):n.getAdjustedOffset(c,u)}),0===e.button?(document.addEventListener("mousemove",n.onMouseMove),document.addEventListener("mouseup",n.onMouseUp),e.preventDefault()):(document.addEventListener("touchmove",n.onMouseMove),document.addEventListener("touchend",n.onMouseUp)),e.stopPropagation()}})),o()(v()(n),"onMouseMove",(function(e){e.stopPropagation(),void 0===e.touches&&e.preventDefault();var t=n.block.getBoundingClientRect().height;n.setState({xPos:n.getRestrictedOffset(n.getAdjustedOffset(n.getMouseX(e))),height:t});var r=n.getNearestColumn(n.state.direction,e);r&&n.props.onResize(n.state.resizingColumn,r)})),o()(v()(n),"onMouseUp",(function(e){n.setState({resizingColumn:-1}),document.removeEventListener("mousemove",n.onMouseMove),document.removeEventListener("mouseup",n.onMouseUp),document.removeEventListener("touchmove",n.onMouseMove),document.removeEventListener("touchend",n.onMouseUp)})),n.containerRef=Object(j.createRef)(),n.state={resizingColumn:-1,xPos:0,height:0},n}return O()(t,e),f()(t,[{key:"getNearestColumn",value:function(e,t){var n=this.props,r=n.totalColumns,o=n.layoutGrid,a=o.getStart(this.state.resizingColumn),c=o.getSpan(this.state.resizingColumn),i=Math.min(r,Math.max(0,function(e,t,n,r){var o=e.getBoundingClientRect(),a=o.width/r,c=t-o.x,i=Math.floor(c/a),u=c%a;return"left"===n?u<=a/2?i:i+1:u<a/2?i:i+1}(this.containerRef.current,this.getMouseX(t),e,r)));if("left"===e){if(i===a)return null;var u=Math.abs(i-a),l={start:i,span:i>a?c-u:c+u,direction:e};return l.start>=a+c?null:(l.span=Math.max(1,l.span),l)}return{span:Math.max(1,i-a),direction:e}}},{key:"getMouseX",value:function(e){var t=e.clientX,n=e.targetTouches;return t||n&&n[0].clientX}},{key:"getAdjustedOffset",value:function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0,n=this.state.width,r=t>0?t:n;return e-this.containerRef.current.getBoundingClientRect().left-r/2}},{key:"getAdjustedTop",value:function(e){return e-this.containerRef.current.getBoundingClientRect().top}},{key:"getRestrictedOffset",value:function(e){var t=this.state,n=t.direction,r=t.max,o=t.width;return"left"===n?Math.min(r-o,e):Math.max(r+o,e)}},{key:"getChildPosition",value:function(e){for(var t=0;null!==e.previousSibling;)e=e.previousSibling,t++;return t}},{key:"render",value:function(){var e=this.props,t=e.className,n=e.children,r=e.isSelected,o=this.state,a=o.resizingColumn,c=o.xPos,i=o.height,u=w()(t,-1!==a?"wp-block-jetpack-layout-grid__resizing":null);return Object(j.createElement)("div",{className:u,onMouseDown:this.onMouseDown,onTouchStart:this.onMouseDown,ref:this.containerRef},-1!==a&&Object(j.createElement)(ue,{height:i,xPos:c,top:this.state.top,isSelected:r}),n)}}]),t}(j.Component);function se(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function de(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?se(Object(n),!0).forEach((function(t){o()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):se(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var fe=function(){function e(t,n,r){s()(this,e),this.attributes=t,this.device=n,this.columnCount=r}return f()(e,[{key:"getGridValues",value:function(){for(var e={},t=0;t<this.columnCount;t++){var n=T(this.device,this.columnCount,t);e[L(t,this.device)]=this.getSpan(t)||n,e[G(t,this.device)]=this.getOffset(t)}return e}},{key:"applyAdjustments",value:function(e){for(var t=this.getGridValues(),n=0;n<e.length;n++)t=de({},t,{},e[n]);return t}},{key:"getSpanAdjustment",value:function(e,t){return o()({},L(e,this.device),t)}},{key:"getAdjustOffset",value:function(e,t){return o()({},G(e,this.device),t)}},{key:"getShrinkOffset",value:function(e,t){var n=this.getOffset(e),r=t>=n?n:t;return{adjustment:this.getAdjustOffset(e,n-r),offsetUsed:r}}},{key:"hasOverlaps",value:function(e){for(var t=0;t<e.length;t++)for(var n=e[t],r=t+1;r<e.length;r++){var o=e[r];if(n.start>o.start&&n.start<o.end)return!0;if(n.end>o.start&&n.end<o.end)return!0}return!1}},{key:"validateGrid",value:function(e){for(var t,n,r=[],o=V(this.device),a=0,c=0,i=0;i<this.columnCount;i++){var u=e[L(i,this.device)],l=e[G(i,this.device)];if((c+=l)>=o&&(c-=o),(c+=u)>o)return!1;r.push({start:a+l,end:a+l+u}),a+=u+l}return!(a>(t=this.device,n=this.columnCount,t===B&&n>2?2*V(t):t===A?V(t)*n:V(t)))&&!this.hasOverlaps(r)}},{key:"getEndAdjustments",value:function(e,t){var n=[];if(t<0)return[this.getAdjustOffset(e,this.getOffset(e)+Math.abs(t))];if(t>0)for(var r=e;r<this.columnCount&&t>0;r++){var o=this.getShrinkOffset(r,Math.abs(t));n.push(o.adjustment),t-=o.offsetUsed}return n}},{key:"getStartMovedLeft",value:function(e,t){for(var n=[],r=e;r>=0&&t>0;r--){var o=this.getShrinkOffset(r,t);n.push(o.adjustment),t-=o.offsetUsed}return n}},{key:"getStartAdjustments",value:function(e,t){var n=this.getOffset(e),r=this.getOffsetFromStart(e,t),o=r-n;return o<0?this.getStartMovedLeft(e,Math.abs(o)):[this.getAdjustOffset(e,r)]}},{key:"getSpan",value:function(e){return this.attributes[L(e,this.device)]}},{key:"getOffset",value:function(e){return this.attributes[G(e,this.device)]}},{key:"getStart",value:function(e){for(var t=0,n=0;n<e;n++)t+=this.getSpan(n)+this.getOffset(n);var r=Math.max(1,Math.floor(t/V(this.device)));return(t+this.getOffset(e))%(r*V(this.device))}},{key:"getOffsetFromStart",value:function(e,t){if(0===e)return t;var n=t-this.getStart(e);return this.getOffset(e)+n}},{key:"convertOffsetToStart",value:function(e,t){return this.getStart(e)+(t-this.getOffset(e))}},{key:"getAdjustedGrid",value:function(e,t){var n=t.start,r=void 0===n?this.getStart(e):n,o=t.span,a=void 0===o?this.getSpan(e):o,c=[];r!==this.getStart(e)&&a!==this.getSpan(e)?c=(c=c.concat(this.getStartAdjustments(e,r))).concat(this.getSpanAdjustment(e,a)):a!==this.getSpan(e)?c=(c=c.concat(this.getSpanAdjustment(e,a))).concat(this.getEndAdjustments(e+1,a-this.getSpan(e))):r!==this.getStart(e)&&(c=(c=c.concat(this.getStartAdjustments(e,r))).concat(this.getEndAdjustments(e+1,r-this.getStart(e))));var i=this.applyAdjustments(c);return c.length>0&&this.validateGrid(i)?i:null}}]),e}();function pe(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function be(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?pe(Object(n),!0).forEach((function(t){o()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):pe(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}var ge=["jetpack/layout-grid-column"],he=function(e){function t(e){var n;return s()(this,t),n=b()(this,h()(t).call(this,e)),o()(v()(n),"onChangeLayout",(function(e){for(var t={},r=0;r<e;r++)for(var o=0;o<R.length;o++){var a=T(R[o],e,r);t[L(r,R[o])]=a,t[G(r,R[o])]=0}n.props.updateColumns(n.props.columns,e,t)})),o()(v()(n),"onChangeDevice",(function(e){n.setState({selectedDevice:e})})),o()(v()(n),"onResize",(function(e,t){var r=n.props,o=r.attributes,a=r.columns,c=new fe(o,n.state.selectedDevice,a).getAdjustedGrid(e,t);c&&n.adjustGrid(c)})),o()(v()(n),"onChangeSpan",(function(e,t,r){var o=n.props,a=o.attributes,c=o.columns,i=new fe(a,t,c).getAdjustedGrid(e,{span:parseInt(r,10)});i&&n.adjustGrid(i)})),o()(v()(n),"onChangeOffset",(function(e,t,r){var o=n.props,a=o.attributes,c=o.columns,i=new fe(a,t,c),u=i.getAdjustedGrid(e,{start:i.convertOffsetToStart(e,parseInt(r,10))});u&&n.adjustGrid(u)})),n.overlayRef=Object(j.createRef)(),n.state={selectedDevice:D()[0].value},n}return O()(t,e),f()(t,[{key:"adjustGrid",value:function(e){var t=this.props;(0,t.setAttributes)(be({},e,{className:ee(t.attributes.className)}))}},{key:"renderDeviceSettings",value:function(e,t,n){for(var r=this,o=new fe(n,t,this.props.columns),a=[],i=function(n){var i=o.getSpan(n)||T(t,e,n),u=o.getOffset(n)||0;a.push(Object(j.createElement)("div",{className:"jetpack-layout-grid-settings",key:n},Object(j.createElement)("strong",null,Object(c.__)("Column","layout-grid")," ",n+1),Object(j.createElement)("div",{className:"jetpack-layout-grid-settings__group"},Object(j.createElement)(S.TextControl,{type:"number",label:Object(c.__)("Offset","layout-grid"),value:u||0,min:0,max:V(t)-1,onChange:function(e){return r.onChangeOffset(n,t,e)}}),Object(j.createElement)(S.TextControl,{type:"number",label:Object(c.__)("Span","layout-grid"),value:i,min:1,max:V(t),onChange:function(e){return r.onChangeSpan(n,t,e)}}))))},u=0;u<e;u++)i(u);return a}},{key:"getPreviewText",value:function(e){return"Mobile"===e?Object(c.__)("Showing mobile layout","layout-grid"):"Tablet"===e?Object(c.__)("Showing tablet layout","layout-grid"):Object(c.__)("Showing desktop layout","layout-grid")}},{key:"canResizeBreakpoint",value:function(e){return!(!this.overlayRef||!this.overlayRef.current)&&this.overlayRef.current.getBoundingClientRect().width/V(e)>50}},{key:"render",value:function(){var e=this,t=this.props,n=t.className,r=t.attributes,o=void 0===r?{}:r,a=t.isSelected,i=t.columns,u=t.setAttributes,l=this.state.selectedDevice,s=function(e,t){return $(Z(e,t,arguments.length>2&&void 0!==arguments[2]?arguments[2]:{}),{span:U,offset:X,row:F})}(l,i,o),d=o.gutterSize,f=o.addGutterEnds,p=new fe(o,l,i),b=w()(ee(n),s,{"wp-block-jetpack-layout-tablet":"Tablet"===l,"wp-block-jetpack-layout-desktop":"Desktop"===l,"wp-block-jetpack-layout-mobile":"Mobile"===l,"wp-block-jetpack-layout-resizable":this.canResizeBreakpoint(l)},te(o));if(0===i)return Object(j.createElement)(S.Placeholder,{icon:"layout",label:Object(c.__)("Choose Layout","layout-grid"),instructions:Object(c.__)("Select a layout to start with:","layout-grid"),className:b},Object(j.createElement)("ul",{className:"block-editor-inner-blocks__template-picker-options"},z().map((function(t){return Object(j.createElement)("li",{key:t.value},Object(j.createElement)(S.IconButton,{isSecondary:!0,icon:Object(j.createElement)(ie,{columns:t.value}),onClick:function(){return e.onChangeLayout(t.value)},className:"block-editor-inner-blocks__template-picker-option",label:t.label}))}))));var g=Object(j.createElement)(S.ToggleControl,{label:Object(c.__)("Add end gutters","layout-grid"),help:f?Object(c.__)("Toggle off to remove the spacing left and right of the grid.","layout-grid"):Object(c.__)("Toggle on to add space left and right of the layout grid. ","layout-grid"),checked:f,onChange:function(e){return u({addGutterEnds:e})}});return Object(j.createElement)(S.IsolatedEventContainer,null,Object(j.createElement)(le,{className:b,onResize:this.onResize,totalColumns:V(l),layoutGrid:p,isSelected:a},Object(j.createElement)("div",{className:"wpcom-overlay-grid",ref:this.overlayRef},Object(_.times)(V(l)).map((function(e){return Object(j.createElement)("div",{className:"wpcom-overlay-grid__column",key:e})}))),Object(j.createElement)(E.InnerBlocks,{template:null,templateLock:"all",allowedBlocks:ge}),Object(j.createElement)(E.InspectorControls,null,Object(j.createElement)(S.PanelBody,{title:Object(c.__)("Layout","layout-grid")},Object(j.createElement)("div",{className:"jetpack-layout-grid-columns block-editor-block-styles"},z().map((function(t){return Object(j.createElement)("div",{key:t.value,className:w()("block-editor-block-styles__item",{"is-active":i===t.value}),onClick:function(){return e.onChangeLayout(t.value)},onKeyDown:function(n){C.ENTER!==n.keyCode&&C.SPACE!==n.keyCode||(n.preventDefault(),e.onChangeLayout(t.value))},role:"button",tabIndex:"0","aria-label":t.label},Object(j.createElement)("div",{className:"block-editor-block-styles__item-preview"},Object(j.createElement)(ie,{columns:t.value})),Object(j.createElement)("div",{className:"editor-block-styles__item-label block-editor-block-styles__item-label"},t.label))}))),Object(j.createElement)("p",null,Object(j.createElement)("em",null,Object(c.__)("Changing the number of columns will reset your layout and could remove content.","layout-grid")))),Object(j.createElement)(S.PanelBody,{title:Object(c.__)("Responsive Breakpoints","layout-grid")},Object(j.createElement)("p",null,Object(j.createElement)("em",null,Object(c.__)("Note that previewing your post will show your browser's breakpoint, not the currently selected one.","layout-grid"))),Object(j.createElement)(S.ButtonGroup,null,D().map((function(t){return Object(j.createElement)(S.Button,{key:t.value,isPrimary:t.value===l,onClick:function(){return e.onChangeDevice(t.value)}},t.label)}))),this.renderDeviceSettings(i,l,o)),Object(j.createElement)(S.PanelBody,{title:Object(c.__)("Gutter","layout-grid")},Object(j.createElement)("p",null,Object(c.__)("Gutter size","layout-grid")),Object(j.createElement)(S.SelectControl,{value:d,onChange:function(e){return u({gutterSize:e,addGutterEnds:"none"!==e&&f})},options:[{value:"none",label:Object(c.__)("No gutter","layout-grid")}].concat(M())}),"none"===d?Object(j.createElement)(S.Disabled,null,g):g)),Object(j.createElement)("div",{className:"jetpack-layout-grid-previewing"},this.getPreviewText(l))))}}]),t}(j.Component);var me=Object(P.compose)([Object(x.withDispatch)((function(e,t,n){return{updateColumns:function(r,o,c){var i=t.clientId,l=e("core/block-editor").replaceBlock,s=function(e,t,n){if(n>t)return[].concat(u()(e),u()(Object(_.times)(n-t,(function(){return Object(a.createBlock)("jetpack/layout-grid-column")}))));var r=u()(e),o=0;return r.reverse(),(r=r.filter((function(e){return!(o<t-n&&0===e.innerBlocks.length)||(o++,!1)}))).slice(Math.max(0,t-n-o)).reverse()}((0,n.select("core/block-editor").getBlocks)(i),r,o);l(i,Object(a.createBlock)(t.name,be({},t.attributes,{},c),s))}}})),Object(x.withSelect)((function(e,t){var n=t.clientId;return{columns:e("core/block-editor").getBlockCount(n)}}))])(he),ve=function(e){var t=e.attributes,n=e.innerBlocks,r=t.className,o=function(e){for(var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{},n={},r={span:K,offset:W,row:q},o=0;o<R.length;o++)n=H({},n,{},$(Z(R[o],e,t),r));return t.addGutterEnds||(n["wp-block-jetpack-layout-gutter__nowrap"]=!0),n}(n.length,t),a=w()(ee(r),o,te(t));return Object(j.createElement)("div",{className:a},Object(j.createElement)(E.InnerBlocks.Content,null))},ye=function(e){function t(e){var n;return s()(this,t),n=b()(this,h()(t).call(this,e)),o()(v()(n),"onLeftIn",(function(){n.setState({direction:"left"}),document.addEventListener("mouseup",n.onLeftOut)})),o()(v()(n),"onLeftOut",(function(){n.setState({direction:null}),document.removeEventListener("mouseup",n.onLeftOut)})),o()(v()(n),"onRightIn",(function(){n.setState({direction:"right"}),document.addEventListener("mouseup",n.onRightOut)})),o()(v()(n),"onRightOut",(function(){n.setState({direction:null}),document.removeEventListener("mouseup",n.onRightOut)})),n.state={direction:null},n}return O()(t,e),f()(t,[{key:"render",value:function(){var e,t=this.props,n=t.className,r=t.hasChildBlocks,a=t.backgroundColor,i=t.setBackgroundColor,u=t.attributes,l=t.setAttributes,s=u.padding,d=this.state.direction,f=w()(n,a.class,(e={},o()(e,"wp-block-jetpack-layout-grid__padding-"+s,!0),o()(e,"has-background",a.color),o()(e,"components-resizable-box__container",!0),o()(e,a.class,a.class),o()(e,"wp-blocks-jetpack-layout-grid__showleft","right"===d),o()(e,"wp-blocks-jetpack-layout-grid__showright","left"===d),e)),p={backgroundColor:a.color};return Object(j.createElement)("div",{className:f,style:p},Object(j.createElement)("span",{className:"wp-blocks-jetpack-layout-grid__resize-handles"},Object(j.createElement)("div",{className:"components-resizable-box__handle components-resizable-box__side-handle components-resizable-box__handle-right",onMouseDown:this.onRightIn,"data-resize-right":!0}),Object(j.createElement)("div",{className:"components-resizable-box__handle components-resizable-box__side-handle components-resizable-box__handle-left",onMouseDown:this.onLeftIn,"data-resize-left":!0})),Object(j.createElement)(E.InnerBlocks,{templateLock:!1,renderAppender:r?void 0:function(){return Object(j.createElement)(E.InnerBlocks.ButtonBlockAppender,null)}}),Object(j.createElement)(E.InspectorControls,null,Object(j.createElement)(E.PanelColorSettings,{title:Object(c.__)("Column Color","layout-grid"),initialOpen:!0,colorSettings:[{value:a.color,onChange:i,label:Object(c.__)("Background","layout-grid")}]}),Object(j.createElement)(S.PanelBody,{title:Object(c.__)("Column Padding","layout-grid")},Object(j.createElement)("p",null,Object(c.__)("Choose padding for this column:","layout-grid")),Object(j.createElement)(S.SelectControl,{value:s,onChange:function(e){return l({padding:e})},options:[{value:"none",label:Object(c.__)("No padding","layout-grid")}].concat(M())}))))}}]),t}(j.Component),Oe=Object(P.compose)(Object(E.withColors)("backgroundColor"),Object(x.withSelect)((function(e,t){var n=t.clientId;return{hasChildBlocks:(0,e("core/block-editor").getBlockOrder)(n).length>0}})))(ye),je=function(e){var t,n=e.attributes,r=void 0===n?{}:n,a=r.className,c=r.backgroundColor,i=r.customBackgroundColor,u=r.padding,l=Object(E.getColorClassName)("background-color",c),s=w()(a,(t={},o()(t,"wp-block-jetpack-layout-grid__padding-"+u,!0),o()(t,"has-background",c),o()(t,l,l),t)),d={backgroundColor:l?void 0:i};return Object(j.createElement)("div",{className:s,style:d},Object(j.createElement)(E.InnerBlocks.Content,null))};function _e(e,t){var n=Object.keys(e);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(e);t&&(r=r.filter((function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable}))),n.push.apply(n,r)}return n}function ke(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{};t%2?_e(Object(n),!0).forEach((function(t){o()(e,t,n[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(n)):_e(Object(n)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(n,t))}))}return e}function we(e,t){for(var n={},r=function(e){t.map((function(t){n[L(e,t)]={type:"number"},n[G(e,t)]={type:"number",default:0}}))},o=0;o<e;o++)r(o);return n}Object(a.registerBlockType)("jetpack/layout-grid",{title:Object(c.__)("Layout Grid","layout-grid"),description:Object(c.__)("Align blocks to to a global grid, with support for responsive breakpoints.","layout-grid"),icon:ne,category:"layout",supports:{align:["full"],html:!1},example:{attributes:{columns:2},innerBlocks:[{name:"jetpack/layout-grid-column",innerBlocks:[{name:"core/paragraph",attributes:{customFontSize:32,content:Object(c.__)("<strong>Snow Patrol</strong>","layout-grid"),align:"center"}}]},{name:"jetpack/layout-grid-column",innerBlocks:[{name:"core/image",attributes:{url:"https://s.w.org/images/core/5.3/Windbuchencom.jpg"}}]}]},attributes:ke({align:{type:"string",default:"full"},gutterSize:{type:"string",default:"large"},addGutterEnds:{type:"boolean",default:!0}},we(N,R)),edit:me,save:ve}),Object(a.registerBlockType)("jetpack/layout-grid-column",{description:Object(c.__)("A column used inside a Layout Grid block.","layout-grid"),title:Object(c.__)("Column","layout-grid"),icon:ne,category:"layout",parent:["jetpack/layout-grid"],supports:{inserter:!1,reusable:!1,html:!1},attributes:{backgroundColor:{type:"string"},customBackgroundColor:{type:"string"},padding:{type:"string",default:"none"}},edit:Oe,save:je})}]);