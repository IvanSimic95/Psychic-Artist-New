(window.webpackJsonp=window.webpackJsonp||[]).push([[6],{815:function(t,e,r){"use strict";r.r(e);var n=r(6),l=(r(50),r(59),r(82),{name:"SingleArticleBox",props:["article"],data:function(){return{media:null}},methods:{truncate:function(text){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:44;return text.length>t?text.substring(0,t)+"...":text},stripHtml:function(text){return text.replace(/(<([^>]+)>)/gi,"")}},mounted:function(){var t=this;return Object(n.a)(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$repos.blogRepo.getMedia(t.article.featured_media);case 2:t.media=e.sent;case 3:case"end":return e.stop()}}),e)})))()},head:{title:"Blog"}}),c=l,o=r(41),component=Object(o.a)(c,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"single-article-box"},[r("nuxt-link",{attrs:{to:"/blog/"+t.article.slug+"/"+t.article.id+"/show"}},[r("div",{staticClass:"article-image"},[t.media?r("img",{attrs:{src:t.media.source_url,alt:t.media.alt_text}}):t._e()])]),t._v(" "),r("div",{staticClass:"article-content"},[r("div",{staticClass:"article-head"},[r("nuxt-link",{attrs:{to:"/blog/"+t.article.slug+"/"+t.article.id+"/show"}},[r("div",{staticClass:"article-title"},[t._v(t._s(t.truncate(t.article.title.rendered)))])]),t._v(" "),r("div",{staticClass:"article-duration"},[t._v("\n        2 min reading\n      ")])],1),t._v(" "),r("div",{staticClass:"article-description",domProps:{innerHTML:t._s(t.truncate(t.stripHtml(t.article.content.rendered),120))}})])],1)}),[],!1,null,null,null);e.default=component.exports}}]);