(window.webpackJsonp=window.webpackJsonp||[]).push([[16,3,7],{664:function(e,t,o){"use strict";o.r(t);var n={name:"icon-chevron-right-accordion"},r=o(40),component=Object(r.a)(n,(function(){var e=this.$createElement,t=this._self._c||e;return t("svg",{attrs:{width:"10",height:"14",viewBox:"0 0 10 14",fill:"none",xmlns:"http://www.w3.org/2000/svg"}},[t("path",{attrs:{d:"M8.71741 6.28386L2.71861 0.28284C2.52593 0.099723 2.26981 -0.00164121 2.004 2.0103e-05C1.73819 0.00168142 1.48336 0.106239 1.29298 0.29175C1.10437 0.482165 0.998567 0.73934 0.998567 1.00735C0.998567 1.27536 1.10437 1.53254 1.29298 1.72295L6.56782 6.99891L1.29298 12.276C1.10494 12.4663 0.999865 12.7233 1.00072 12.9908C1.00157 13.2583 1.10827 13.5146 1.29752 13.7037C1.48677 13.8928 1.74317 13.9994 2.0107 14C2.27823 14.0006 2.53514 13.8954 2.7253 13.7072L8.71629 7.71506C8.90532 7.52494 9.01151 7.26779 9.01172 6.99969C9.01193 6.73159 8.90613 6.47428 8.71741 6.28386Z",fill:"#4158D0"}})])}),[],!1,null,null,null);t.default=component.exports},672:function(e,t,o){"use strict";o.r(t);var n={name:"Accordion",components:{IconChevronRightAccordion:o(664).default},props:["items"],data:function(){return{activeAccordion:0}},methods:{toggleAccordion:function(e){this.activeAccordion===e?this.activeAccordion=-1:this.activeAccordion=e}}},r=o(40),component=Object(r.a)(n,(function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("div",{staticClass:"accordion"},e._l(e.items,(function(t){return o("div",{staticClass:"accordion-element",class:{"is-active":e.activeAccordion===t.id}},[o("div",{staticClass:"accordion-header"},[o("div",{staticClass:"accordion-chevron",on:{click:function(o){return o.preventDefault(),e.toggleAccordion(t.id)}}},[o("icon-chevron-right-accordion")],1),e._v(" "),o("div",{staticClass:"accordion-title",on:{click:function(o){return o.preventDefault(),e.toggleAccordion(t.id)}}},[e._v(e._s(t.title))])]),e._v(" "),o("div",{staticClass:"accordion-body",domProps:{innerHTML:e._s(t.description)}})])})),0)}),[],!1,null,"45145f16",null);t.default=component.exports},677:function(e,t,o){var content=o(685);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[e.i,content,""]]),content.locals&&(e.exports=content.locals);(0,o(95).default)("7323c604",content,!0,{sourceMap:!1})},684:function(e,t,o){"use strict";o(677)},685:function(e,t,o){var n=o(94)(!1);n.push([e.i,"@media only screen and (max-width:1024px){.about-service[data-v-2851a6d9],.intro-video[data-v-2851a6d9]{max-width:620px}.intro-video[data-v-2851a6d9]{margin-bottom:3rem!important;margin-left:auto!important;margin-right:auto!important;border-radius:15px}}",""]),e.exports=n},688:function(e,t,o){"use strict";o.r(t);var n={name:"AboutService",data:function(){return{accordionItems:[{id:1,title:"How long does it take to receive my order?",description:"All orders are delivered in 24 hours max, but it's usually even faster than that."},{id:2,title:"Where can I see my order?",description:'Click on Login / Dashboard to get to your account page. Once you are there just click Orders and after that select the order you wish to see by clicking "View".'},{id:3,title:'What is "Processing" Order Status?',description:"Processing status means you finished your part.<br/>Our system received your payment and we will soon begin working on your order!"},{id:4,title:"Do you do custom orders?",description:"Unfortunately at this time I'm just way too busy to be doing custom work. If anything changes about that I'll be sure to inform you."},{id:5,title:"Who makes these drawings?",description:"All drawings are made by me, but because of that I'm quite limited in number of them I can do daily. It's best to order while you still can, any time I get too many orders they will be disabled until I'm able to resolve them."},{id:6,title:"I need help, what do I do?",description:'Head over to <a href="/support">Support Page</a> and follow the instructions there.'}]}}},r=(o(684),o(40)),component=Object(r.a)(n,(function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("section",{staticClass:"pa-section"},[o("div",{staticClass:"container"},[o("h1",{staticClass:"article-title-row mt-0 mb-6"},[e._v("\n        Are You Ready to Finally Meet Your True Soulmate?\n      ")]),e._v(" "),e._m(0),e._v(" "),o("br"),o("br"),e._v(" "),e._m(1),o("h1",{staticClass:"centered-page-title",staticStyle:{"font-size":"46px!important","line-height":"66px"}},[e._v("Frequently Asked Questions")]),e._v(" "),o("Accordion",{attrs:{items:e.accordionItems}})],1)])}),[function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("div",{staticClass:"intro-video"},[o("script",{attrs:{src:"https://fast.wistia.com/embed/medias/vixzjm6ovf.jsonp",async:""}}),e._v(" "),o("script",{attrs:{src:"https://fast.wistia.com/assets/external/E-v1.js",async:""}}),e._v(" "),o("div",{staticClass:"wistia_responsive_padding",staticStyle:{padding:"56.25% 0 0 0",position:"relative"}},[o("div",{staticClass:"wistia_responsive_wrapper",staticStyle:{height:"100%",left:"0",position:"absolute",top:"0",width:"100%"}},[o("div",{staticClass:"wistia_embed wistia_async_vixzjm6ovf videoFoam=true",staticStyle:{height:"100%",position:"relative",width:"100%"}},[e._v(" ")])])])])},function(){var e=this,t=e.$createElement,o=e._self._c||t;return o("p",{staticClass:"about-service mb-0"},[e._v("\n        The cries of your romantic nature, who is constantly in search of perfect love, of your soul mate, is finally heard by me, an artist who uses her talent to shape the faces of the one who is meant to be part of your life.\n        Before taking the courage to admit that you need confirmation or something concrete in your life, you need to know that my drawings are very realistic and accurate."),o("br"),o("br"),e._v("\n        This service will bring you a reflection of the person you are going to marry because I can describe and draw the physical aspect of your soul mate and even send you accurate information on when and how you will meet him.\n        A soulmate drawing is not a simple sketch, is an entirely difficult ritual that implies a lot of meditation and energy incursion."),o("br"),o("br"),e._v("\n        I will connect on a high level of energy with your aura and identify the physical features of the person with whom you should share your life.\n        I will sense and see if you have any blockages or disruptions and if there are any, I will clear the path so you can enjoy what blessing the universe has to offer."),o("br"),o("br"),e._v("\n        I will share my gift of clairvoyance with you and offer you a unique drawing, an exact portrait of how your soulmate looks like Provide me your date of birth and full name so I can get closer to your higher soul and frequencies and be able to make you aware of all the opportunities you have to meet your real half.\n        By reaching your Third Eye Chakra I will be able to see behind your thoughts and read between the lines."),o("br"),o("br"),e._v("\n        You will feel relief and peace will conquer your mind and body. I will send you an exact portrait of how your soulmate looks like, physical features that you will recognize soon enough right next to you.\n        At your email address, you will find exact and concrete information about when and how you will meet him. Stay faithful, your love is just a step away from you waiting, for you to think outside the box and trust your guts.\n        "),o("br"),o("br"),o("br"),o("br")])}],!1,null,"2851a6d9",null);t.default=component.exports;installComponents(component,{Accordion:o(672).default})}}]);