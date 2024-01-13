<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/effect.js */
class __TwigTemplate_1eef7d1b107a5ddfeaec7608523b9cd953a81203185cdff56637110d131e08d5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "/*! jQuery UI - v1.12.1 - 2016-09-15
* http://jqueryui.com
* Copyright jQuery Foundation and other contributors; Licensed  */
!function(a){\"function\"==typeof define&&define.amd?define([\"jquery\",\"./version\"],a):a(jQuery)}(function(a){var b=\"ui-effects-\",c=\"ui-effects-style\",d=\"ui-effects-animated\",e=a;return a.effects={effect:{}},function(a,b){function c(a,b,c){var d=l[b.type]||{};return null==a?c||!b.def?null:b.def:(a=d.floor?~~a:parseFloat(a),isNaN(a)?b.def:d.mod?(a+d.mod)%d.mod:0>a?0:d.max<a?d.max:a)}function d(b){var c=j(),d=c._rgba=[];return b=b.toLowerCase(),o(i,function(a,e){var f,g=e.re.exec(b),h=g&&e.parse(g),i=e.space||\"rgba\";if(h)return f=c[i](h),c[k[i].cache]=f[k[i].cache],d=c._rgba=f._rgba,!1}),d.length?(\"0,0,0,0\"===d.join()&&a.extend(d,f.transparent),c):f[b]}function e(a,b,c){return c=(c+1)%1,6*c<1?a+(b-a)*c*6:2*c<1?b:3*c<2?a+(b-a)*(2/3-c)*6:a}var f,g=\"backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor\",h=/^([\\-+])=\\s*(\\d+\\.?\\d*)/,i=[{re:/rgba?\\(\\s*(\\d{1,3})\\s*,\\s*(\\d{1,3})\\s*,\\s*(\\d{1,3})\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,parse:function(a){return[a[1],a[2],a[3],a[4]]}},{re:/rgba?\\(\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,parse:function(a){return[2.55*a[1],2.55*a[2],2.55*a[3],a[4]]}},{re:/#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,parse:function(a){return[parseInt(a[1],16),parseInt(a[2],16),parseInt(a[3],16)]}},{re:/#([a-f0-9])([a-f0-9])([a-f0-9])/,parse:function(a){return[parseInt(a[1]+a[1],16),parseInt(a[2]+a[2],16),parseInt(a[3]+a[3],16)]}},{re:/hsla?\\(\\s*(\\d+(?:\\.\\d+)?)\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*,\\s*(\\d+(?:\\.\\d+)?)\\%\\s*(?:,\\s*(\\d?(?:\\.\\d+)?)\\s*)?\\)/,space:\"hsla\",parse:function(a){return[a[1],a[2]/100,a[3]/100,a[4]]}}],j=a.Color=function(b,c,d,e){return new a.Color.fn.parse(b,c,d,e)},k={rgba:{props:{red:{idx:0,type:\"byte\"},green:{idx:1,type:\"byte\"},blue:{idx:2,type:\"byte\"}}},hsla:{props:{hue:{idx:0,type:\"degrees\"},saturation:{idx:1,type:\"percent\"},lightness:{idx:2,type:\"percent\"}}}},l={\"byte\":{floor:!0,max:255},percent:{max:1},degrees:{mod:360,floor:!0}},m=j.support={},n=a(\"<p>\")[0],o=a.each;n.style.cssText=\"background-color:rgba(1,1,1,.5)\",m.rgba=n.style.backgroundColor.indexOf(\"rgba\")>-1,o(k,function(a,b){b.cache=\"_\"+a,b.props.alpha={idx:3,type:\"percent\",def:1}}),j.fn=a.extend(j.prototype,{parse:function(e,g,h,i){if(e===b)return this._rgba=[null,null,null,null],this;(e.jquery||e.nodeType)&&(e=a(e).css(g),g=b);var l=this,m=a.type(e),n=this._rgba=[];return g!==b&&(e=[e,g,h,i],m=\"array\"),\"string\"===m?this.parse(d(e)||f._default):\"array\"===m?(o(k.rgba.props,function(a,b){n[b.idx]=c(e[b.idx],b)}),this):\"object\"===m?(e instanceof j?o(k,function(a,b){e[b.cache]&&(l[b.cache]=e[b.cache].slice())}):o(k,function(b,d){var f=d.cache;o(d.props,function(a,b){if(!l[f]&&d.to){if(\"alpha\"===a||null==e[a])return;l[f]=d.to(l._rgba)}l[f][b.idx]=c(e[a],b,!0)}),l[f]&&a.inArray(null,l[f].slice(0,3))<0&&(l[f][3]=1,d.from&&(l._rgba=d.from(l[f])))}),this):void 0},is:function(a){var b=j(a),c=!0,d=this;return o(k,function(a,e){var f,g=b[e.cache];return g&&(f=d[e.cache]||e.to&&e.to(d._rgba)||[],o(e.props,function(a,b){if(null!=g[b.idx])return c=g[b.idx]===f[b.idx]})),c}),c},_space:function(){var a=[],b=this;return o(k,function(c,d){b[d.cache]&&a.push(c)}),a.pop()},transition:function(a,b){var d=j(a),e=d._space(),f=k[e],g=0===this.alpha()?j(\"transparent\"):this,h=g[f.cache]||f.to(g._rgba),i=h.slice();return d=d[f.cache],o(f.props,function(a,e){var f=e.idx,g=h[f],j=d[f],k=l[e.type]||{};null!==j&&(null===g?i[f]=j:(k.mod&&(j-g>k.mod/2?g+=k.mod:g-j>k.mod/2&&(g-=k.mod)),i[f]=c((j-g)*b+g,e)))}),this[e](i)},blend:function(b){if(1===this._rgba[3])return this;var c=this._rgba.slice(),d=c.pop(),e=j(b)._rgba;return j(a.map(c,function(a,b){return(1-d)*e[b]+d*a}))},toRgbaString:function(){var b=\"rgba(\",c=a.map(this._rgba,function(a,b){return null==a?b>2?1:0:a});return 1===c[3]&&(c.pop(),b=\"rgb(\"),b+c.join()+\")\"},toHslaString:function(){var b=\"hsla(\",c=a.map(this.hsla(),function(a,b){return null==a&&(a=b>2?1:0),b&&b<3&&(a=Math.round(100*a)+\"%\"),a});return 1===c[3]&&(c.pop(),b=\"hsl(\"),b+c.join()+\")\"},toHexString:function(b){var c=this._rgba.slice(),d=c.pop();return b&&c.push(~~(255*d)),\"#\"+a.map(c,function(a){return a=(a||0).toString(16),1===a.length?\"0\"+a:a}).join(\"\")},toString:function(){return 0===this._rgba[3]?\"transparent\":this.toRgbaString()}}),j.fn.parse.prototype=j.fn,k.hsla.to=function(a){if(null==a[0]||null==a[1]||null==a[2])return[null,null,null,a[3]];var b,c,d=a[0]/255,e=a[1]/255,f=a[2]/255,g=a[3],h=Math.max(d,e,f),i=Math.min(d,e,f),j=h-i,k=h+i,l=.5*k;return b=i===h?0:d===h?60*(e-f)/j+360:e===h?60*(f-d)/j+120:60*(d-e)/j+240,c=0===j?0:l<=.5?j/k:j/(2-k),[Math.round(b)%360,c,l,null==g?1:g]},k.hsla.from=function(a){if(null==a[0]||null==a[1]||null==a[2])return[null,null,null,a[3]];var b=a[0]/360,c=a[1],d=a[2],f=a[3],g=d<=.5?d*(1+c):d+c-d*c,h=2*d-g;return[Math.round(255*e(h,g,b+1/3)),Math.round(255*e(h,g,b)),Math.round(255*e(h,g,b-1/3)),f]},o(k,function(d,e){var f=e.props,g=e.cache,i=e.to,k=e.from;j.fn[d]=function(d){if(i&&!this[g]&&(this[g]=i(this._rgba)),d===b)return this[g].slice();var e,h=a.type(d),l=\"array\"===h||\"object\"===h?d:arguments,m=this[g].slice();return o(f,function(a,b){var d=l[\"object\"===h?a:b.idx];null==d&&(d=m[b.idx]),m[b.idx]=c(d,b)}),k?(e=j(k(m)),e[g]=m,e):j(m)},o(f,function(b,c){j.fn[b]||(j.fn[b]=function(e){var f,g=a.type(e),i=\"alpha\"===b?this._hsla?\"hsla\":\"rgba\":d,j=this[i](),k=j[c.idx];return\"undefined\"===g?k:(\"function\"===g&&(e=e.call(this,k),g=a.type(e)),null==e&&c.empty?this:(\"string\"===g&&(f=h.exec(e),f&&(e=k+parseFloat(f[2])*(\"+\"===f[1]?1:-1))),j[c.idx]=e,this[i](j)))})})}),j.hook=function(b){var c=b.split(\" \");o(c,function(b,c){a.cssHooks[c]={set:function(b,e){var f,g,h=\"\";if(\"transparent\"!==e&&(\"string\"!==a.type(e)||(f=d(e)))){if(e=j(f||e),!m.rgba&&1!==e._rgba[3]){for(g=\"backgroundColor\"===c?b.parentNode:b;(\"\"===h||\"transparent\"===h)&&g&&g.style;)try{h=a.css(g,\"backgroundColor\"),g=g.parentNode}catch(i){}e=e.blend(h&&\"transparent\"!==h?h:\"_default\")}e=e.toRgbaString()}try{b.style[c]=e}catch(i){}}},a.fx.step[c]=function(b){b.colorInit||(b.start=j(b.elem,c),b.end=j(b.end),b.colorInit=!0),a.cssHooks[c].set(b.elem,b.start.transition(b.end,b.pos))}})},j.hook(g),a.cssHooks.borderColor={expand:function(a){var b={};return o([\"Top\",\"Right\",\"Bottom\",\"Left\"],function(c,d){b[\"border\"+d+\"Color\"]=a}),b}},f=a.Color.names={aqua:\"#00ffff\",black:\"#000000\",blue:\"#0000ff\",fuchsia:\"#ff00ff\",gray:\"#808080\",green:\"#008000\",lime:\"#00ff00\",maroon:\"#800000\",navy:\"#000080\",olive:\"#808000\",purple:\"#800080\",red:\"#ff0000\",silver:\"#c0c0c0\",teal:\"#008080\",white:\"#ffffff\",yellow:\"#ffff00\",transparent:[null,null,null,0],_default:\"#ffffff\"}}(e),function(){function b(b){var c,d,e=b.ownerDocument.defaultView?b.ownerDocument.defaultView.getComputedStyle(b,null):b.currentStyle,f={};if(e&&e.length&&e[0]&&e[e[0]])for(d=e.length;d--;)c=e[d],\"string\"==typeof e[c]&&(f[a.camelCase(c)]=e[c]);else for(c in e)\"string\"==typeof e[c]&&(f[c]=e[c]);return f}function c(b,c){var d,e,g={};for(d in c)e=c[d],b[d]!==e&&(f[d]||!a.fx.step[d]&&isNaN(parseFloat(e))||(g[d]=e));return g}var d=[\"add\",\"remove\",\"toggle\"],f={border:1,borderBottom:1,borderColor:1,borderLeft:1,borderRight:1,borderTop:1,borderWidth:1,margin:1,padding:1};a.each([\"borderLeftStyle\",\"borderRightStyle\",\"borderBottomStyle\",\"borderTopStyle\"],function(b,c){a.fx.step[c]=function(a){(\"none\"!==a.end&&!a.setAttr||1===a.pos&&!a.setAttr)&&(e.style(a.elem,c,a.end),a.setAttr=!0)}}),a.fn.addBack||(a.fn.addBack=function(a){return this.add(null==a?this.prevObject:this.prevObject.filter(a))}),a.effects.animateClass=function(e,f,g,h){var i=a.speed(f,g,h);return this.queue(function(){var f,g=a(this),h=g.attr(\"class\")||\"\",j=i.children?g.find(\"*\").addBack():g;j=j.map(function(){var c=a(this);return{el:c,start:b(this)}}),f=function(){a.each(d,function(a,b){e[b]&&g[b+\"Class\"](e[b])})},f(),j=j.map(function(){return this.end=b(this.el[0]),this.diff=c(this.start,this.end),this}),g.attr(\"class\",h),j=j.map(function(){var b=this,c=a.Deferred(),d=a.extend({},i,{queue:!1,complete:function(){c.resolve(b)}});return this.el.animate(this.diff,d),c.promise()}),a.when.apply(a,j.get()).done(function(){f(),a.each(arguments,function(){var b=this.el;a.each(this.diff,function(a){b.css(a,\"\")})}),i.complete.call(g[0])})})},a.fn.extend({addClass:function(b){return function(c,d,e,f){return d?a.effects.animateClass.call(this,{add:c},d,e,f):b.apply(this,arguments)}}(a.fn.addClass),removeClass:function(b){return function(c,d,e,f){return arguments.length>1?a.effects.animateClass.call(this,{remove:c},d,e,f):b.apply(this,arguments)}}(a.fn.removeClass),toggleClass:function(b){return function(c,d,e,f,g){return\"boolean\"==typeof d||void 0===d?e?a.effects.animateClass.call(this,d?{add:c}:{remove:c},e,f,g):b.apply(this,arguments):a.effects.animateClass.call(this,{toggle:c},d,e,f)}}(a.fn.toggleClass),switchClass:function(b,c,d,e,f){return a.effects.animateClass.call(this,{add:c,remove:b},d,e,f)}})}(),function(){function e(b,c,d,e){return a.isPlainObject(b)&&(c=b,b=b.effect),b={effect:b},null==c&&(c={}),a.isFunction(c)&&(e=c,d=null,c={}),(\"number\"==typeof c||a.fx.speeds[c])&&(e=d,d=c,c={}),a.isFunction(d)&&(e=d,d=null),c&&a.extend(b,c),d=d||c.duration,b.duration=a.fx.off?0:\"number\"==typeof d?d:d in a.fx.speeds?a.fx.speeds[d]:a.fx.speeds._default,b.complete=e||c.complete,b}function f(b){return!(b&&\"number\"!=typeof b&&!a.fx.speeds[b])||(\"string\"==typeof b&&!a.effects.effect[b]||(!!a.isFunction(b)||\"object\"==typeof b&&!b.effect))}function g(a,b){var c=b.outerWidth(),d=b.outerHeight(),e=/^rect\\((-?\\d*\\.?\\d*px|-?\\d+%|auto),?\\s*(-?\\d*\\.?\\d*px|-?\\d+%|auto),?\\s*(-?\\d*\\.?\\d*px|-?\\d+%|auto),?\\s*(-?\\d*\\.?\\d*px|-?\\d+%|auto)\\)\$/,f=e.exec(a)||[\"\",0,c,d,0];return{top:parseFloat(f[1])||0,right:\"auto\"===f[2]?c:parseFloat(f[2]),bottom:\"auto\"===f[3]?d:parseFloat(f[3]),left:parseFloat(f[4])||0}}a.expr&&a.expr.filters&&a.expr.filters.animated&&(a.expr.filters.animated=function(b){return function(c){return!!a(c).data(d)||b(c)}}(a.expr.filters.animated)),a.uiBackCompat!==!1&&a.extend(a.effects,{save:function(a,c){for(var d=0,e=c.length;d<e;d++)null!==c[d]&&a.data(b+c[d],a[0].style[c[d]])},restore:function(a,c){for(var d,e=0,f=c.length;e<f;e++)null!==c[e]&&(d=a.data(b+c[e]),a.css(c[e],d))},setMode:function(a,b){return\"toggle\"===b&&(b=a.is(\":hidden\")?\"show\":\"hide\"),b},createWrapper:function(b){if(b.parent().is(\".ui-effects-wrapper\"))return b.parent();var c={width:b.outerWidth(!0),height:b.outerHeight(!0),\"float\":b.css(\"float\")},d=a(\"<div></div>\").addClass(\"ui-effects-wrapper\").css({fontSize:\"100%\",background:\"transparent\",border:\"none\",margin:0,padding:0}),e={width:b.width(),height:b.height()},f=document.activeElement;try{f.id}catch(g){f=document.body}return b.wrap(d),(b[0]===f||a.contains(b[0],f))&&a(f).trigger(\"focus\"),d=b.parent(),\"static\"===b.css(\"position\")?(d.css({position:\"relative\"}),b.css({position:\"relative\"})):(a.extend(c,{position:b.css(\"position\"),zIndex:b.css(\"z-index\")}),a.each([\"top\",\"left\",\"bottom\",\"right\"],function(a,d){c[d]=b.css(d),isNaN(parseInt(c[d],10))&&(c[d]=\"auto\")}),b.css({position:\"relative\",top:0,left:0,right:\"auto\",bottom:\"auto\"})),b.css(e),d.css(c).show()},removeWrapper:function(b){var c=document.activeElement;return b.parent().is(\".ui-effects-wrapper\")&&(b.parent().replaceWith(b),(b[0]===c||a.contains(b[0],c))&&a(c).trigger(\"focus\")),b}}),a.extend(a.effects,{version:\"1.12.1\",define:function(b,c,d){return d||(d=c,c=\"effect\"),a.effects.effect[b]=d,a.effects.effect[b].mode=c,d},scaledDimensions:function(a,b,c){if(0===b)return{height:0,width:0,outerHeight:0,outerWidth:0};var d=\"horizontal\"!==c?(b||100)/100:1,e=\"vertical\"!==c?(b||100)/100:1;return{height:a.height()*e,width:a.width()*d,outerHeight:a.outerHeight()*e,outerWidth:a.outerWidth()*d}},clipToBox:function(a){return{width:a.clip.right-a.clip.left,height:a.clip.bottom-a.clip.top,left:a.clip.left,top:a.clip.top}},unshift:function(a,b,c){var d=a.queue();b>1&&d.splice.apply(d,[1,0].concat(d.splice(b,c))),a.dequeue()},saveStyle:function(a){a.data(c,a[0].style.cssText)},restoreStyle:function(a){a[0].style.cssText=a.data(c)||\"\",a.removeData(c)},mode:function(a,b){var c=a.is(\":hidden\");return\"toggle\"===b&&(b=c?\"show\":\"hide\"),(c?\"hide\"===b:\"show\"===b)&&(b=\"none\"),b},getBaseline:function(a,b){var c,d;switch(a[0]){case\"top\":c=0;break;case\"middle\":c=.5;break;case\"bottom\":c=1;break;default:c=a[0]/b.height}switch(a[1]){case\"left\":d=0;break;case\"center\":d=.5;break;case\"right\":d=1;break;default:d=a[1]/b.width}return{x:d,y:c}},createPlaceholder:function(c){var d,e=c.css(\"position\"),f=c.position();return c.css({marginTop:c.css(\"marginTop\"),marginBottom:c.css(\"marginBottom\"),marginLeft:c.css(\"marginLeft\"),marginRight:c.css(\"marginRight\")}).outerWidth(c.outerWidth()).outerHeight(c.outerHeight()),/^(static|relative)/.test(e)&&(e=\"absolute\",d=a(\"<\"+c[0].nodeName+\">\").insertAfter(c).css({display:/^(inline|ruby)/.test(c.css(\"display\"))?\"inline-block\":\"block\",visibility:\"hidden\",marginTop:c.css(\"marginTop\"),marginBottom:c.css(\"marginBottom\"),marginLeft:c.css(\"marginLeft\"),marginRight:c.css(\"marginRight\"),\"float\":c.css(\"float\")}).outerWidth(c.outerWidth()).outerHeight(c.outerHeight()).addClass(\"ui-effects-placeholder\"),c.data(b+\"placeholder\",d)),c.css({position:e,left:f.left,top:f.top}),d},removePlaceholder:function(a){var c=b+\"placeholder\",d=a.data(c);d&&(d.remove(),a.removeData(c))},cleanUp:function(b){a.effects.restoreStyle(b),a.effects.removePlaceholder(b)},setTransition:function(b,c,d,e){return e=e||{},a.each(c,function(a,c){var f=b.cssUnit(c);f[0]>0&&(e[c]=f[0]*d+f[1])}),e}}),a.fn.extend({effect:function(){function b(b){function e(){i.removeData(d),a.effects.cleanUp(i),\"hide\"===c.mode&&i.hide(),h()}function h(){a.isFunction(j)&&j.call(i[0]),a.isFunction(b)&&b()}var i=a(this);c.mode=l.shift(),a.uiBackCompat===!1||g?\"none\"===c.mode?(i[k](),h()):f.call(i[0],c,e):(i.is(\":hidden\")?\"hide\"===k:\"show\"===k)?(i[k](),h()):f.call(i[0],c,h)}var c=e.apply(this,arguments),f=a.effects.effect[c.effect],g=f.mode,h=c.queue,i=h||\"fx\",j=c.complete,k=c.mode,l=[],m=function(b){var c=a(this),e=a.effects.mode(c,k)||g;c.data(d,!0),l.push(e),g&&(\"show\"===e||e===g&&\"hide\"===e)&&c.show(),g&&\"none\"===e||a.effects.saveStyle(c),a.isFunction(b)&&b()};return a.fx.off||!f?k?this[k](c.duration,j):this.each(function(){j&&j.call(this)}):h===!1?this.each(m).each(b):this.queue(i,m).queue(i,b)},show:function(a){return function(b){if(f(b))return a.apply(this,arguments);var c=e.apply(this,arguments);return c.mode=\"show\",this.effect.call(this,c)}}(a.fn.show),hide:function(a){return function(b){if(f(b))return a.apply(this,arguments);var c=e.apply(this,arguments);return c.mode=\"hide\",this.effect.call(this,c)}}(a.fn.hide),toggle:function(a){return function(b){if(f(b)||\"boolean\"==typeof b)return a.apply(this,arguments);var c=e.apply(this,arguments);return c.mode=\"toggle\",this.effect.call(this,c)}}(a.fn.toggle),cssUnit:function(b){var c=this.css(b),d=[];return a.each([\"em\",\"px\",\"%\",\"pt\"],function(a,b){c.indexOf(b)>0&&(d=[parseFloat(c),b])}),d},cssClip:function(a){return a?this.css(\"clip\",\"rect(\"+a.top+\"px \"+a.right+\"px \"+a.bottom+\"px \"+a.left+\"px)\"):g(this.css(\"clip\"),this)},transfer:function(b,c){var d=a(this),e=a(b.to),f=\"fixed\"===e.css(\"position\"),g=a(\"body\"),h=f?g.scrollTop():0,i=f?g.scrollLeft():0,j=e.offset(),k={top:j.top-h,left:j.left-i,height:e.innerHeight(),width:e.innerWidth()},l=d.offset(),m=a(\"<div class='ui-effects-transfer'></div>\").appendTo(\"body\").addClass(b.className).css({top:l.top-h,left:l.left-i,height:d.innerHeight(),width:d.innerWidth(),position:f?\"fixed\":\"absolute\"}).animate(k,b.duration,b.easing,function(){m.remove(),a.isFunction(c)&&c()})}}),a.fx.step.clip=function(b){b.clipInit||(b.start=a(b.elem).cssClip(),\"string\"==typeof b.end&&(b.end=g(b.end,b.elem)),b.clipInit=!0),a(b.elem).cssClip({top:b.pos*(b.end.top-b.start.top)+b.start.top,right:b.pos*(b.end.right-b.start.right)+b.start.right,bottom:b.pos*(b.end.bottom-b.start.bottom)+b.start.bottom,left:b.pos*(b.end.left-b.start.left)+b.start.left})}}(),function(){var b={};a.each([\"Quad\",\"Cubic\",\"Quart\",\"Quint\",\"Expo\"],function(a,c){b[c]=function(b){return Math.pow(b,a+2)}}),a.extend(b,{Sine:function(a){return 1-Math.cos(a*Math.PI/2)},Circ:function(a){return 1-Math.sqrt(1-a*a)},Elastic:function(a){return 0===a||1===a?a:-Math.pow(2,8*(a-1))*Math.sin((80*(a-1)-7.5)*Math.PI/15)},Back:function(a){return a*a*(3*a-2)},Bounce:function(a){for(var b,c=4;a<((b=Math.pow(2,--c))-1)/11;);return 1/Math.pow(4,3-c)-7.5625*Math.pow((3*b-2)/22-a,2)}}),a.each(b,function(b,c){a.easing[\"easeIn\"+b]=c,a.easing[\"easeOut\"+b]=function(a){return 1-c(1-a)},a.easing[\"easeInOut\"+b]=function(a){return a<.5?c(2*a)/2:1-c(a*-2+2)/2}})}(),a.effects});";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/effect.js";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/effect.js", "/var/www/html/mautic/docroot/app/bundles/CoreBundle/Assets/js/libraries/filemanager/jquery-ui/ui/minified/effect.js");
    }
}
