(window.webpackJsonp=window.webpackJsonp||[]).push([[19],{695:function(e,t,r){var content=r(701);content.__esModule&&(content=content.default),"string"==typeof content&&(content=[[e.i,content,""]]),content.locals&&(e.exports=content.locals);(0,r(95).default)("bbae33b2",content,!0,{sourceMap:!1})},700:function(e,t,r){"use strict";r(695)},701:function(e,t,r){var n=r(94)(!1);n.push([e.i,".firstName[data-v-1abcd65a]{border-top-right-radius:0!important;border-bottom-right-radius:0!important}.lastName[data-v-1abcd65a]{border-top-left-radius:0!important;border-bottom-left-radius:0!important}.next-disabled[data-v-1abcd65a]{opacity:.6!important;cursor:not-allowed!important}.purchase-box[data-v-1abcd65a]{-webkit-animation:appear-data-v-1abcd65a 1s;animation:appear-data-v-1abcd65a 1s}@-webkit-keyframes appear-data-v-1abcd65a{0%{opacity:0}}@keyframes appear-data-v-1abcd65a{0%{opacity:0}}.long-desc[data-v-1abcd65a]{padding:20px 0}.long-desc[data-v-1abcd65a] p{color:#878599!important;font-size:20px;line-height:1.2}",""]),e.exports=n},719:function(e,t,r){"use strict";r.r(t);r(49),r(27),r(48),r(72),r(41),r(73);var n=r(10),o=r(19),c=(r(58),r(50),r(149),r(42),r(78),r(79),r(74));function d(object,e){var t=Object.keys(object);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(object);e&&(r=r.filter((function(e){return Object.getOwnPropertyDescriptor(object,e).enumerable}))),t.push.apply(t,r)}return t}var l={1530:"ebook"},m={name:"BuyProductEmailForm",props:["product"],data:function(){return{firstName:null,lastName:null,email:null,isLoading:!1}},computed:function(e){for(var i=1;i<arguments.length;i++){var source=null!=arguments[i]?arguments[i]:{};i%2?d(Object(source),!0).forEach((function(t){Object(o.a)(e,t,source[t])})):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(source)):d(Object(source)).forEach((function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(source,t))}))}return e}({},Object(c.b)({userLogged:"user/userLogged"})),methods:{submitForm:function(){var e=this;return Object(n.a)(regeneratorRuntime.mark((function t(){var r,n,o,c,d,l;return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:if(!e.isLoading){t.next=2;break}return t.abrupt("return",!1);case 2:return e.isLoading=!0,r=null,t.next=6,e.$repos.orderRepo.getUser(e.email);case 6:if(!(n=t.sent).success){t.next=13;break}o=n.data,c=o.data.display_name.split(" "),r={id:o.ID,email:o.data.user_email,name:o.data.display_name,firstName:c[0]?c[0]:o.data.display_name,lastName:c[1]?c[1]:o.data.display_name},t.next=17;break;case 13:return t.next=15,e.$repos.orderRepo.createUserSimple(e.email,e.firstName,e.lastName);case 15:(n=t.sent).success&&(d=n.data,r={id:d.user_id,email:d.user_data.user_email,name:d.user_data.display_name,firstName:d.user_data.first_name,lastName:d.user_data.last_name});case 17:return e.$store.commit("user/setUserLogged",r),e.$fb.track("AddToCart",{content_ids:e.product.codeName,content_name:e.product.name,content_type:"product",currency:"USD",value:e.product.price.replace("$","")}),t.next=21,e.$repos.orderRepo.createOrderSimple(r,e.product.id,e.product.price);case 21:return n=t.sent,l=e.prepareRedirectLink(r,e.product.id,n.new_order_id),t.next=25,e.$repos.orderRepo.updateOrderSimple(r,n.new_order_id,l,e.product.name);case 25:t.sent,e.isLoading=!1,window.location.href=l;case 28:case"end":return t.stop()}}),t)})))()},prepareRedirectLink:function(e,t,r){var n=window.btoa("https://psychic-artist.com/personal"),o=l[t];return"https://www.buygoods.com/secure/?account_id=6490&screen=checkout_one&product_codename=".concat(o,"&redirect=").concat(n,"&subid=").concat(o,"&subid2=").concat(r,"&subid3=").concat(e.id,"&autoname=").concat(e.name,"&autoemail=").concat(e.email)}},mounted:function(){var e=this;return Object(n.a)(regeneratorRuntime.mark((function t(){return regeneratorRuntime.wrap((function(t){for(;;)switch(t.prev=t.next){case 0:e.userLogged&&(e.firstName=e.userLogged.firstName,e.lastName=e.userLogged.lastName,e.email=e.userLogged.email);case 1:case"end":return t.stop()}}),t)})))()}},v=(r(700),r(40)),component=Object(v.a)(m,(function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"purchase-box"},[r("div",{staticClass:"purchase-title"},[e._v(e._s(e.product.name))]),e._v(" "),r("div",{staticClass:"purchase-subtitle"},[e._v(e._s(e.product.description))]),e._v(" "),r("div",{staticClass:"purchase-pricing"},[r("div",{staticClass:"pricing-label"},[e._v(e._s(e.product.price))]),e._v(" "),r("div",{staticClass:"pricing-discount"},[r("span",{staticStyle:{"text-decoration":"line-through"}},[e._v(e._s(e.product.priceBeforeDiscount))]),e._v(" save\n      "),r("span",[e._v(e._s(e.product.discount))])])]),e._v(" "),r("div",{staticClass:"box-divider"}),e._v(" "),e.product.longDesc?r("div",{staticClass:"long-desc",domProps:{innerHTML:e._s(e.product.longDesc)}}):e._e(),e._v(" "),r("div",{staticClass:"purchase-form"},[r("div",{staticClass:"step1"},[r("div",{staticClass:"input-name"},[r("label",{staticClass:"floated"},[e._v("Full Name")]),e._v(" "),r("div",{staticClass:"is-flex"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.firstName,expression:"firstName"}],staticClass:"input firstName",attrs:{type:"text",placeholder:"Enter First Name"},domProps:{value:e.firstName},on:{input:function(t){t.target.composing||(e.firstName=t.target.value)}}}),e._v(" "),r("input",{directives:[{name:"model",rawName:"v-model",value:e.lastName,expression:"lastName"}],staticClass:"input lastName",attrs:{type:"text",placeholder:"Enter Last Name"},domProps:{value:e.lastName},on:{input:function(t){t.target.composing||(e.lastName=t.target.value)}}})])]),e._v(" "),r("div",{staticClass:"input-name"},[r("label",{staticClass:"floated"},[e._v("Email Address")]),e._v(" "),r("input",{directives:[{name:"model",rawName:"v-model",value:e.email,expression:"email"}],staticClass:"input",attrs:{type:"text",placeholder:"Enter Email Address"},domProps:{value:e.email},on:{input:function(t){t.target.composing||(e.email=t.target.value)}}})])]),e._v(" "),r("a",{staticClass:"next-button",class:{"next-disabled":e.isLoading},attrs:{href:"#",disabled:e.isLoading},on:{click:function(t){return t.preventDefault(),e.submitForm(t)}}},[e._v("\n      "+e._s(e.isLoading?"Loading...":"Get Your Book!")+"\n    ")])])])}),[],!1,null,"1abcd65a",null);t.default=component.exports}}]);