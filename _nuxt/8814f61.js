(window.webpackJsonp=window.webpackJsonp||[]).push([[5,6],{824:function(t,e,r){"use strict";r.r(e);var n=r(7),c=(r(50),r(53),r(86),{name:"SingleArticleBox",props:["article"],data:function(){return{media:null}},methods:{truncate:function(text){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:44;return text.length>t?text.substring(0,t)+"...":text},stripHtml:function(text){return text.replace(/(<([^>]+)>)/gi,"")}},mounted:function(){var t=this;return Object(n.a)(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$repos.blogRepo.getMedia(t.article.featured_media);case 2:t.media=e.sent;case 3:case"end":return e.stop()}}),e)})))()},head:{title:"Blog"}}),l=r(42),component=Object(l.a)(c,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"single-article-box"},[r("nuxt-link",{attrs:{to:"/blog/"+t.article.slug+"/"+t.article.id+"/show"}},[r("div",{staticClass:"article-image"},[t.media?r("img",{attrs:{src:t.media.source_url,alt:t.media.alt_text}}):t._e()])]),t._v(" "),r("div",{staticClass:"article-content"},[r("div",{staticClass:"article-head"},[r("nuxt-link",{attrs:{to:"/blog/"+t.article.slug+"/"+t.article.id+"/show"}},[r("div",{staticClass:"article-title"},[t._v(t._s(t.truncate(t.article.title.rendered)))])]),t._v(" "),r("div",{staticClass:"article-duration"},[t._v("\n        2 min reading\n      ")])],1),t._v(" "),r("div",{staticClass:"article-description",domProps:{innerHTML:t._s(t.truncate(t.stripHtml(t.article.content.rendered),120))}})])],1)}),[],!1,null,null,null);e.default=component.exports},856:function(t,e,r){"use strict";r.r(e);var n=r(7),c=(r(50),{name:"ArticlesList",components:{SingleArticleBox:r(824).default},data:function(){return{articles:[]}},created:function(){var t=this;return Object(n.a)(regeneratorRuntime.mark((function e(){return regeneratorRuntime.wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.next=2,t.$repos.blogRepo.getArticles({page:1,per_page:3,format:"image"});case 2:t.articles=e.sent;case 3:case"end":return e.stop()}}),e)})))()},mounted:function(){return Object(n.a)(regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:case"end":return t.stop()}}),t)})))()}}),l=r(42),component=Object(l.a)(c,(function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"articles-boxes"},t._l(t.articles,(function(article){return r("SingleArticleBox",{key:article.id,attrs:{article:article}})})),1)}),[],!1,null,"75d77fa6",null);e.default=component.exports}}]);