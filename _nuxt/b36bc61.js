(window.webpackJsonp=window.webpackJsonp||[]).push([[3,7],{790:function(t,c,n){"use strict";n.r(c);var o={name:"icon-chevron-right-accordion"},e=n(41),component=Object(e.a)(o,(function(){var t=this.$createElement,c=this._self._c||t;return c("svg",{attrs:{width:"10",height:"14",viewBox:"0 0 10 14",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[c("path",{attrs:{d:"M8.71741 6.28386L2.71861 0.28284C2.52593 0.099723 2.26981 -0.00164121 2.004 2.0103e-05C1.73819 0.00168142 1.48336 0.106239 1.29298 0.29175C1.10437 0.482165 0.998567 0.73934 0.998567 1.00735C0.998567 1.27536 1.10437 1.53254 1.29298 1.72295L6.56782 6.99891L1.29298 12.276C1.10494 12.4663 0.999865 12.7233 1.00072 12.9908C1.00157 13.2583 1.10827 13.5146 1.29752 13.7037C1.48677 13.8928 1.74317 13.9994 2.0107 14C2.27823 14.0006 2.53514 13.8954 2.7253 13.7072L8.71629 7.71506C8.90532 7.52494 9.01151 7.26779 9.01172 6.99969C9.01193 6.73159 8.90613 6.47428 8.71741 6.28386Z",fill:"#4158D0"}})])}),[],!1,null,null,null);c.default=component.exports},798:function(t,c,n){"use strict";n.r(c);var o={name:"Accordion",components:{IconChevronRightAccordion:n(790).default},props:["items"],data:function(){return{activeAccordion:0}},methods:{toggleAccordion:function(t){this.activeAccordion===t?this.activeAccordion=-1:this.activeAccordion=t}}},e=n(41),component=Object(e.a)(o,(function(){var t=this,c=t.$createElement,n=t._self._c||c;return n("div",{staticClass:"accordion"},t._l(t.items,(function(c){return n("div",{staticClass:"accordion-element",class:{"is-active":t.activeAccordion===c.id}},[n("div",{staticClass:"accordion-header"},[n("div",{staticClass:"accordion-chevron",on:{click:function(n){return n.preventDefault(),t.toggleAccordion(c.id)}}},[n("icon-chevron-right-accordion")],1),t._v(" "),n("div",{staticClass:"accordion-title",on:{click:function(n){return n.preventDefault(),t.toggleAccordion(c.id)}}},[t._v(t._s(c.title))])]),t._v(" "),n("div",{staticClass:"accordion-body",domProps:{innerHTML:t._s(c.description)}})])})),0)}),[],!1,null,"45145f16",null);c.default=component.exports}}]);