(window.webpackJsonp=window.webpackJsonp||[]).push([[21,6,12,19],{659:function(t,e,r){"use strict";r.r(e);var n={name:"Footer"},l=r(40),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("footer",[r("div",{staticClass:"pa-section"},[r("div",{staticClass:"container"},[r("div",{staticClass:"columns is-centered is-mobile is-multiline"},[r("div",{staticClass:"column is-6-desktop is-6-tablet is-12-mobile"},[r("div",{staticClass:"logo-footer"},[r("Logo"),t._v(" "),r("LogoText")],1),t._v(" "),r("p",{staticClass:"light-text light-text-block"},[t._v("\n            Born psychic with an extrasensory perception capable of uniting with your energy and reading the hidden\n            meanings and upcoming events predestined by the Universe. In the process, I will find out a lot about\n            your soulmate, good and bad, his nature, his inner willingness to finally meet you.\n          ")])]),t._v(" "),r("div",{staticClass:"column is-3-desktop is-3-tablet is-12-mobile"},[r("div",{staticClass:"column-list"},[r("h3",[t._v("Quick Links")]),t._v(" "),r("ul",[r("li",[r("nuxt-link",{attrs:{to:"/"}},[t._v("Home")])],1),t._v(" "),r("li",[r("nuxt-link",{attrs:{to:"/support"}},[t._v("Support")])],1),t._v(" "),r("li",[r("nuxt-link",{attrs:{to:"/about"}},[t._v("About")])],1)])])]),t._v(" "),r("div",{staticClass:"column is-3-desktop is-3-tablet is-12-mobile"},[r("div",{staticClass:"column-list"},[r("h3",[t._v("Legal")]),t._v(" "),r("ul",[r("li",[r("nuxt-link",{attrs:{to:"/terms"}},[t._v("Terms of Service")])],1),t._v(" "),r("li",[r("nuxt-link",{attrs:{to:"/privacy"}},[t._v("Privacy Policy")])],1),t._v(" "),r("li",[r("nuxt-link",{attrs:{to:"/dmca"}},[t._v("DMCA")])],1),t._v(" "),r("li",[r("nuxt-link",{attrs:{to:"/digital-goods-refund-policy"}},[t._v("Refund Policy")])],1),t._v(" "),r("li",[r("nuxt-link",{attrs:{to:"/facebook-policy"}},[t._v("Facebook Policy")])],1)])])])])])]),t._v(" "),r("div",{staticClass:"divider"}),t._v(" "),r("div",{staticClass:"pa-section"},[r("div",{staticClass:"footer-links"},[r("nuxt-link",{attrs:{to:"/"}},[t._v("© 2021 Psychic Artist All Rights Reserved")]),t._v(" "),r("nuxt-link",{attrs:{to:"/terms"}},[t._v("Terms of Service")]),t._v(" "),r("nuxt-link",{attrs:{to:"/privacy"}},[t._v("Privacy Policy")]),t._v(" "),r("nuxt-link",{attrs:{to:"/dmca"}},[t._v("DMCA")]),t._v(" "),r("nuxt-link",{attrs:{to:"/digital-goods-refund-policy"}},[t._v("Refund Policy")]),t._v(" "),r("nuxt-link",{attrs:{to:"/facebook-policy"}},[t._v("Facebook Policy")])],1)])])}),[],!1,null,"3300a165",null);e.default=component.exports;installComponents(component,{Logo:r(665).default,LogoText:r(664).default,Footer:r(659).default})},660:function(t,e,r){"use strict";r.r(e);var n=[function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"subscription-head"},[n("div",{staticClass:"sub-image"},[n("img",{attrs:{src:r(661)}})]),t._v(" "),n("div",{staticClass:"sub-text"},[n("div",{staticClass:"sub-title"},[t._v("Stay updated!")]),t._v(" "),n("div",{staticClass:"sub-description"},[t._v("Lorem ipsum dolor sit amet, choro tincidunt ad sed, ea qui dicit possim\n              quaeque. Case percipitur in has,\n            ")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("div",{staticClass:"footer-cover"},[e("img",{attrs:{src:r(360)}})])}],l={name:"Subscribe",methods:{showSubscriptionModal:function(){this.$store.commit("user/setShowSubscriptionModal",!0)}}},o=r(40),component=Object(o.a)(l,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"pa-section"},[r("div",{staticClass:"container"},[r("div",{staticClass:"subscription-area"},[r("div",{staticClass:"subscription-box"},[t._m(0),t._v(" "),r("div",{staticClass:"subscription-form"},[r("a",{staticClass:"button is-primary is-rounded",attrs:{href:"#"},on:{click:function(e){return e.preventDefault(),t.showSubscriptionModal(e)}}},[t._v("Subscribe")])])])])]),t._v(" "),t._m(1)])}),n,!1,null,"31ec4410",null);e.default=component.exports},661:function(t,e,r){t.exports=r.p+"img/sub-image.00cd709.svg"},662:function(t,e,r){"use strict";r.r(e);var n={name:"DefaultLayout",components:{NavBar:r(658).default},props:{showNavbar:{type:Boolean,default:!0}}},l=r(40),component=Object(l.a)(n,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",[t.showNavbar?r("section",{staticClass:"hero is-transparent"},[r("div",{staticClass:"hero-head"},[r("NavBar")],1)]):t._e(),t._v(" "),t._t("default")],2)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{NavBar:r(658).default})},685:function(t,e,r){"use strict";r.r(e);var n=r(11),l=(r(57),r(58),r(95),{name:"SingleArticleBox",props:["article"],data:function(){return{media:null}},methods:{truncate:function(text){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:44;return text.length>t?text.substring(0,t)+"...":text},stripHtml:function(text){return text.replace(/(<([^>]+)>)/gi,"")}},mounted:function(){var t=this;return Object(n.a)(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$repos.blogRepo.getMedia(t.article.featured_media);case 2:t.media=e.sent;case 3:case"end":return e.stop()}}),e)})))()}}),o=r(40),component=Object(o.a)(l,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"single-article-box"},[r("nuxt-link",{attrs:{to:"/blog/"+t.article.slug+"/"+t.article.id+"/show"}},[r("div",{staticClass:"article-image"},[t.media?r("img",{attrs:{src:t.media.source_url,alt:t.media.alt_text}}):t._e()])]),t._v(" "),r("div",{staticClass:"article-content"},[r("div",{staticClass:"article-head"},[r("nuxt-link",{attrs:{to:"/blog/"+t.article.slug+"/"+t.article.id+"/show"}},[r("div",{staticClass:"article-title"},[t._v(t._s(t.truncate(t.article.title.rendered)))])]),t._v(" "),r("div",{staticClass:"article-duration"},[t._v("\n        2 min reading\n      ")])],1),t._v(" "),r("div",{staticClass:"article-description",domProps:{innerHTML:t._s(t.truncate(t.stripHtml(t.article.content.rendered),120))}})])],1)}),[],!1,null,null,null);e.default=component.exports},745:function(t,e,r){"use strict";r.r(e);var n=r(11),l=(r(57),r(658)),o=r(662),c=r(660),d={name:"show",components:{SingleArticleBox:r(685).default,Subscribe:c.default,DefaultLayout:o.default,NavBar:l.default},data:function(){return{relatedArticles:[],article:null,media:null}},created:function(){var t=this;return Object(n.a)(regeneratorRuntime.mark((function e(){var r;return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=parseInt(t.$route.params.postId),e.next=3,t.$repos.blogRepo.getSingleArticle(r);case 3:return t.article=e.sent,e.next=6,t.$repos.blogRepo.getMedia(t.article.featured_media);case 6:return t.media=e.sent,e.next=9,t.$repos.blogRepo.getArticles({page:1,per_page:2,format:"image"});case 9:t.relatedArticles=e.sent;case 10:case"end":return e.stop()}}),e)})))()}},v=r(40),component=Object(v.a)(d,(function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("DefaultLayout",[n("div",{staticClass:"is-relative"},[n("div",{staticClass:"under-cover",staticStyle:{top:"120px"}},[n("img",{attrs:{src:r(360)}})]),t._v(" "),n("section",{staticClass:"pa-section article-show"},[n("div",{staticClass:"article-image"},[t.media?n("img",{attrs:{src:t.media.source_url}}):t._e()]),t._v(" "),n("h1",{staticClass:"article-title-row"},[t._v("\n        "+t._s(t.article?t.article.title.rendered:"Loading...")+"\n      ")]),t._v(" "),t.article?n("div",{domProps:{innerHTML:t._s(t.article.content.rendered)}}):t._e()])]),t._v(" "),n("section",{staticClass:"pa-section"},[n("h2",{staticClass:"pa-section-title"},[t._v("Related Posts")]),t._v(" "),n("div",{staticClass:"articles-boxes"},t._l(t.relatedArticles,(function(article){return n("SingleArticleBox",{key:article.id,attrs:{article:article}})})),1)]),t._v(" "),n("Subscribe"),t._v(" "),n("Footer")],1)}),[],!1,null,null,null);e.default=component.exports;installComponents(component,{Subscribe:r(660).default,Footer:r(659).default})}}]);