!function(e){var t={};function n(a){if(t[a])return t[a].exports;var o=t[a]={i:a,l:!1,exports:{}};return e[a].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,a){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:a})},n.r=function(e){Object.defineProperty(e,"__esModule",{value:!0})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=1)}([function(e,t){!function(){e.exports=this.wp.element}()},function(e,t,n){"use strict";n.r(t);var a=n(0),o=wp.blocks.registerBlockType,l=wp.editor,r=l.RichText,c=l.InspectorControls,i=(l.ColorPalette,l.MediaUpload),u=wp.components,s=u.PanelBody,b=u.IconButton,m=u.RadioControl;wp.compose.withState;o("namespace/donation-block",{title:"Donation Call To Action",description:"Block qui génère un appel à donation dans un hero",icon:"format-image",category:"layout",attributes:{hook:{type:"string",source:"html",selector:"h2"},buttonText:{type:"string",source:"html",selector:"p"}},edit:function(e){var t=e.attributes,n=e.setAttributes,o=t.buttonText,l=t.hook;return Object(a.createElement)("div",{class:"cta-container hero hero-donation"},Object(a.createElement)(r,{key:"editable",tagName:"h2",placeholder:"Le texte au dessus du bouton",value:l,onChange:function(e){n({hook:e})}}),Object(a.createElement)(r,{key:"editable",tagName:"p",placeholder:"Le texte du bouton",value:o,onChange:function(e){n({buttonText:e})}}))},save:function(e){var t=e.attributes,n=t.buttonText,o=t.hook;return Object(a.createElement)("div",null,Object(a.createElement)("section",{class:"hero hero-fullwidth hero-donation"},Object(a.createElement)("h2",{class:"text"},o),Object(a.createElement)("a",{href:"/MIV/donation"},Object(a.createElement)("div",{class:"donation-button big"},Object(a.createElement)(r.Content,{tagName:"p",value:n})))))}}),o("namespace/presentation-section-block",{title:"Presentation Section",description:"Block to generate a presentation with an align image",icon:"format-image",category:"layout",attributes:{title:{type:"string",source:"html",selector:"h2"},body:{type:"string",source:"html",selector:"p"},backgroundImage:{type:"string",default:null},align:{type:"string"}},edit:function(e){var t=e.attributes,n=e.setAttributes,o=t.title,l=t.body,u=t.backgroundImage,g=t.align;return[Object(a.createElement)(c,{style:{marginBottom:"40px"}},Object(a.createElement)(s,{title:"Background Image Settings"},Object(a.createElement)("p",null,Object(a.createElement)("strong",null,"Sélectionner l'image")),Object(a.createElement)(i,{onSelect:function(e){n({backgroundImage:e.sizes.full.url})},type:"image",value:u,render:function(e){var t=e.open;return Object(a.createElement)(b,{onClick:t,icon:"upload",className:"editor-medi-placeholder__button is-button is-default is-large"},"Image")}})),Object(a.createElement)(s,{title:"Align Image Settings "},Object(a.createElement)("p",null,Object(a.createElement)("strong",null,"Sélectionner l'alignement de l'image")),Object(a.createElement)(m,{label:"Alignement",selected:g,options:[{label:"To Left",value:"img-align-left"},{label:"To Right",value:"img-align-right"}],onChange:function(e){n({align:e})}}))),Object(a.createElement)("div",{class:"cta-container"},Object(a.createElement)(r,{key:"editable",tagName:"h2",placeholder:"Le titre du block de présentation",value:o,onChange:function(e){n({title:e})}}),Object(a.createElement)(r,{key:"editable",tagName:"p",placeholder:"Texte long",value:l,onChange:function(e){n({body:e})}}))]},save:function(e){var t=e.attributes,n=t.title,o=t.body,l=t.backgroundImage,c=t.align;return Object(a.createElement)("div",null,Object(a.createElement)("div",{class:"presentation-card container"},Object(a.createElement)("div",{class:"image-wrapper show-on-scroll "+c},Object(a.createElement)("img",{src:l,alt:""})),Object(a.createElement)("h2",{class:"presentation-hook"},n),Object(a.createElement)("div",{class:"content"},Object(a.createElement)(r.Content,{tagName:"p",value:o}))))}})}]);