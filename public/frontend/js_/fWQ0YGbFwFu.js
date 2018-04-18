if (self.CavalryLogger) { CavalryLogger.start_js(["s6S5I"]); }

__d("ChannelConstants",[],(function(a,b,c,d,e,f){var g="channel/";a={CHANNEL_MANUAL_RECONNECT_DEFER_MSEC:2e3,MUTE_WARNING_TIME_MSEC:25e3,WARNING_COUNTDOWN_THRESHOLD_MSEC:15e3,ON_SHUTDOWN:g+"shutdown",ON_INVALID_HISTORY:g+"invalid_history",ON_CONFIG:g+"config",ON_ENTER_STATE:g+"enter_state",ON_EXIT_STATE:g+"exit_state",ATTEMPT_RECONNECT:g+"attempt_reconnect",RTI_SESSION:g+"new_rti_address",GET_RTI_SESSION_REQUEST:g+"rti_session_request",SKYWALKER:g+"skywalker",CHANNEL_ESTABLISHED:g+"established",OK:"ok",ERROR:"error",ERROR_MAX:"error_max",ERROR_MISSING:"error_missing",ERROR_MSG_TYPE:"error_msg_type",ERROR_SHUTDOWN:"error_shutdown",ERROR_STALE:"error_stale",SYS_OWNER:"sys_owner",SYS_NONOWNER:"sys_nonowner",SYS_ONLINE:"sys_online",SYS_OFFLINE:"sys_offline",SYS_TIMETRAVEL:"sys_timetravel",HINT_AUTH:"shutdown auth",HINT_CONN:"shutdown conn",HINT_DISABLED:"shutdown disabled",HINT_INVALID_STATE:"shutdown invalid state",HINT_MAINT:"shutdown maint",HINT_UNSUPPORTED:"shutdown unsupported",reason_Unknown:0,reason_AsyncError:1,reason_TooLong:2,reason_Refresh:3,reason_RefreshDelay:4,reason_UIRestart:5,reason_NeedSeq:6,reason_PrevFailed:7,reason_IFrameLoadGiveUp:8,reason_IFrameLoadRetry:9,reason_IFrameLoadRetryWorked:10,reason_PageTransitionRetry:11,reason_IFrameLoadMaxSubdomain:12,reason_NoChannelInfo:13,reason_NoChannelHost:14,CAPABILITY_VOIP_INTEROP:8,CAPABILITY_ACTIVE_ON_DESKTOP_APP:16384,FANTAIL_SERVICE:"WebchatClient",SUBSCRIBE:"subscribe",UNSUBSCRIBE:"unsubscribe",FAKE_DFF:"fake_dff",THROTTLED:g+"throttled",JUMPSTART:g+"jumpstart",ENTITY_PRESENCE_ACTIVE_PING:"entity_presence/active_ping",SUBSCRIPTION_STATE:{SUBSCRIBE:"s",MUTATE_CONTEXT:"m",UNSUBSCRIBE:"u"},DEFAULT_MAX_SUBSCRIPTIONS:300,DEFAULT_EVICTION_BATCH_SIZE:20,DEFAULT_MAX_SUBSCRIPTION_FLUSH_BATCH_SIZE:300,DEFAULT_MAX_CONSECUTIVE_FLUSH_FAILURES:3,getArbiterType:function(a){return g+"message:"+a},getSkywalkerArbiterType:function(a){return g+"skywalker:"+a},getRTISkywalkerArbiterType:function(a,b){return g+"skywalker:"+a+":"+b}};e.exports=a}),null);
__d("CenteredContainer.react",["cx","React","joinClasses"],(function(a,b,c,d,e,f,g){__p&&__p();var h;c=b("React").PropTypes;h=babelHelpers.inherits(a,b("React").Component);h&&h.prototype;a.prototype.render=function(){"use strict";var a=(this.props.vertical?"_3bwv":"")+(this.props.horizontal?" _3bww":""),c=b("React").Children.map(this.props.children,function(a){return b("React").createElement("div",{className:"_3bwx"},a)}),d=b("joinClasses")(this.props.className,this.props.fullHeight?"_5bpf":"");return b("React").createElement("div",babelHelpers["extends"]({},this.props,{className:d}),b("React").createElement("div",{className:a},b("React").createElement("div",{className:"_3bwy"},c)))};function a(){"use strict";h.apply(this,arguments)}a.propTypes={fullHeight:c.bool,vertical:c.bool,horizontal:c.bool};a.defaultProps={fullHeight:!1,vertical:!1,horizontal:!0};e.exports=a}),null);
__d("MaybeNativePromise",["Promise"],(function(a,b,c,d,e,f){"use strict";c=a.Promise||b("Promise");b("Promise").resolve();e.exports=c}),null);
__d("VideoAkamaiRequestHelper",["URI"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a){return a.toLowerCase().indexOf("akamai")!==-1}function g(a){var b=a.startByte;a=a.endByte;if(b!=undefined&&!(b===0&&a==undefined)){b="bytes="+b+"-"+(a==undefined?"":a);return{Range:b}}return null}function c(a){var c=new(b("URI"))(a);c=c.getQueryData();var d=c.startByte;c=c.endByte;return g({baseUrl:a,startByte:d,endByte:c})}e.exports={isAkamai:a,getRequestHeaders:g,getRequestHeadersFromUrl:c}}),null);
__d("VideoPlayerShakaParsedContextualConfig",["EventEmitter","FBLogger","VideoPlayerShakaContextualConfig"],(function(a,b,c,d,e,f){__p&&__p();var g;c=babelHelpers.inherits(a,b("EventEmitter"));g=c&&c.prototype;function a(){"use strict";g.constructor.call(this),this.$VideoPlayerShakaParsedContextualConfig1=null,this.$VideoPlayerShakaParsedContextualConfig2={},this.parseConfig()}a.prototype.getGlobalConfig=function(){"use strict";return this.$VideoPlayerShakaParsedContextualConfig2};a.prototype.getStaticConfig=function(){"use strict";return b("VideoPlayerShakaContextualConfig").staticConfig};a.prototype.getRawContextualConfig=function(){"use strict";return this.$VideoPlayerShakaParsedContextualConfig1};a.prototype.parseConfig=function(){"use strict";this.$VideoPlayerShakaParsedContextualConfig3(),this.$VideoPlayerShakaParsedContextualConfig4(),this.emit("configChange")};a.prototype.$VideoPlayerShakaParsedContextualConfig3=function(){"use strict";if(!b("VideoPlayerShakaContextualConfig").rawContextualConfig)return;try{this.$VideoPlayerShakaParsedContextualConfig1=JSON.parse(b("VideoPlayerShakaContextualConfig").rawContextualConfig)}catch(a){b("FBLogger")("VideoPlayerShakaParsedContextualConfig").warn("Failed to parse raw config")}};a.prototype.$VideoPlayerShakaParsedContextualConfig4=function(){"use strict";this.$VideoPlayerShakaParsedContextualConfig2=Object.assign({},b("VideoPlayerShakaContextualConfig").staticConfig),this.$VideoPlayerShakaParsedContextualConfig1&&this.$VideoPlayerShakaParsedContextualConfig1.defaults.forEach(function(a){return this.$VideoPlayerShakaParsedContextualConfig2[a.name]=a.value}.bind(this))};e.exports=new a()}),null);
__d("VideoPlayerShakaGlobalConfig",["VideoPlayerShakaParsedContextualConfig","VideoPlayerShakaExperiments"],(function(a,b,c,d,e,f){a={getBool:function(a,c){var d=b("VideoPlayerShakaParsedContextualConfig").getGlobalConfig();return d&&d[a]!==undefined?d[a]==="true"||d[a]===!0:typeof b("VideoPlayerShakaExperiments")[a]==="boolean"?b("VideoPlayerShakaExperiments")[a]:c},getNumber:function(a,c){var d=b("VideoPlayerShakaParsedContextualConfig").getGlobalConfig();return d&&d[a]!==undefined?Number(d[a]):typeof b("VideoPlayerShakaExperiments")[a]==="number"?b("VideoPlayerShakaExperiments")[a]:c},getString:function(a,c){var d=b("VideoPlayerShakaParsedContextualConfig").getGlobalConfig();return d&&d[a]!==undefined?String(d[a]):typeof b("VideoPlayerShakaExperiments")[a]==="string"?b("VideoPlayerShakaExperiments")[a]:c}};e.exports=a}),null);
__d("VideoPlayerShakaError",["VideoPlayerShakaGlobalConfig"],(function(a,b,c,d,e,f){"use strict";a={translateError:function(a,c,d){var e=b("VideoPlayerShakaGlobalConfig").getBool("fix_shaka_xhr_error_status",!0)?a.errorRawTransportStatus:a.errorCode;a={name:a.errorType,message:a.errorMsg,type:d,url:c,status:e};return a},createTimeoutError:function(a){a={name:"timeout",message:"timeout",type:"net",url:a,status:0};return a}};e.exports=a}),null);
__d("VideoDashPrefetchCache",["regeneratorRuntime","Promise","BanzaiODS","Deferred","MaybeNativePromise","Run","URI","VideoAkamaiRequestHelper","VideoPlayerShakaError","VideoPlayerPrefetchExperiments","XHRRequest","getCrossOriginTransport","requireWeak"],(function(a,b,c,d,e,f){__p&&__p();var g=null;b("requireWeak")("VideoPlayerShakaBandwidthEstimator",function(a){return g=a});var h=null;b("requireWeak")("VideoStreamingTaskQueueProvider",function(a){return h=a});function i(a){return a.audio.length+a.video.length+a.manifest.length}function j(a,c){b("BanzaiODS").bumpEntityKey("www_video_playback","prefetch."+a,c)}function k(a){var b="aborted",c={status:0},d=new Error("Prefetch request aborted.");return Object.assign(d,{type:b,url:a,xhr:c})}function l(a){var c=a.getURI(),d=c.toString();b("VideoAkamaiRequestHelper").isAkamai(d)&&(function(){var e=b("VideoAkamaiRequestHelper").getRequestHeadersFromUrl(d),f=c.removeQueryData(["bytestart","byteend"]);a.setURI(f);e&&Object.keys(e).forEach(function(b){a.setRequestHeader(b,e[b])})})();return a}var m=null,n=new Map();function o(a){a=new(b("URI"))(a);a=a.getDomain();return a.endsWith("fbcdn.net")&&!a.startsWith("interncache")&&!a.endsWith("ak.fbcdn.net")}function p(a){var c=arguments.length<=1||arguments[1]===undefined?!1:arguments[1];return c&&o(a)?b("getCrossOriginTransport").withCredentials:b("getCrossOriginTransport")}function q(a){return o(a.url)}function r(a,b,c){return{response:a.slice(b.start+0,b.end+1),responseTime:c}}function s(a){__p&&__p();var c=new(b("URI"))(a);if(c.getDomain()){c=c.removeQueryData(["oh"]);c=c.removeQueryData("__gda__");for(var d=Object.keys(c.getQueryData()),e=Array.isArray(d),f=0,d=e?d:d[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var g;if(e){if(f>=d.length)break;g=d[f++]}else{f=d.next();if(f.done)break;g=f.value}g=g;g.startsWith("_nc")&&(c=c.removeQueryData(g))}return c.toString()}return a}function t(){"use strict";this.$2=new Map(),this.$1=new Map(),this.$3=[],this.$4=[],this.$5=0,this.$6=b("VideoPlayerPrefetchExperiments").maxPrefetchVideosNum,this.$7=b("VideoPlayerPrefetchExperiments").consolidateFragmentedPrefetchRequest}t.prototype.$9=function(a){__p&&__p();var c=arguments.length<=1||arguments[1]===undefined?!1:arguments[1],d=a,e=new(b("XHRRequest"))(d).setMethod("GET").setResponseType("arraybuffer").setTransportBuilder(p(d,c));l(e);var f=new(b("MaybeNativePromise"))(function(c,g){e.setErrorHandler(function(a){this.$10(e),g(b("VideoPlayerShakaError").translateError(a,d,"preload"))}.bind(this)),e.setResponseHandler(function(a){e.response=a,this.$10(e),c(e)}.bind(this)),e.setAbortHandler(function(){if(b("VideoPlayerPrefetchExperiments").fixPrefetchCacheAbort){this.$10(e);var c=k(a);g(c)}else g(f,new Error("Request promise aborted"))}.bind(this))}.bind(this));this.$11(a,f);this.$3.push(e);this.$8?this.$8.push(e):e.send();return f};t.prototype.genPrefetchMpdNow=function(a){__p&&__p();return b("regeneratorRuntime").async(function(b){while(1)switch(b.prev=b.next){case 0:if(!this.has(a)){b.next=3;break}return b.abrupt("return",null);case 3:return b.abrupt("return",this.$9(a));case 4:case"end":return b.stop()}},null,this)};t.prototype.$12=function(a){var b=arguments.length<=1||arguments[1]===undefined?!1:arguments[1],c=arguments.length<=2||arguments[2]===undefined?null:arguments[2],d=[];for(var e=0;e<a.length;e++){var f=t.createQueryStringURL(a[e]);this.has(f)||(d.push(this.$9(f,b).then(function(a){j("received",1);return a})),c!=null&&this.$2.set(f,c))}j("sent",d.length);return d};t.prototype.$13=function(a){"use strict";__p&&__p();var c=t.getConsolidatedURL(a);if(c==null)return this.$12(a);var d=new(b("XHRRequest"))(c).setMethod("GET").setResponseType("arraybuffer").setTransportBuilder(p(c));l(d);var e=Date.now(),f=[];for(var g=0;g<a.length;g++){var h=t.createQueryStringURL(a[g]),i=new(b("Deferred"))();this.has(h)||this.$11(h,i.getPromise());f.push(i)}d.setErrorHandler(function(e){this.$10(d);for(var a=0;a<f.length;a++)f[a].reject(b("VideoPlayerShakaError").translateError(e,c,"preload"))}.bind(this));d.setResponseHandler(function(c){var g=Date.now()-e;for(var b=0;b<a.length;b++){var h=f[b],i=a[b];h.resolve(r(c,i,g))}this.$10(d)}.bind(this));d.setAbortHandler(function(){for(var b=0;b<a.length;b++){var c=f[b];c.reject(new Error("Request aborted."))}});this.$3.push(d);d.send();j("consolidated.sent",1);j("sent",f.length);h=f.map(function(a){return a.getPromise().then(function(a){j("received",1);return a})});b("Promise").all(h).then(function(){return j("consolidated.received",1)});return h};t.prototype.$14=function(a){__p&&__p();var c=this,d=a.useCredentials,e=a.connectionQualityLevel;this.$5++;var f=this.$7&&!d;b("VideoPlayerPrefetchExperiments").enableGlobalSchedulerForPrefetch&&(this.$8=[]);var g=f?this.$13(a.video):this.$12(a.video,d,e);f=f?this.$13(a.audio):this.$12(a.audio,d,e);e=this.$12(a.manifest,d);var i=g.concat(f,e);this.$8?(function(){__p&&__p();var d=c.$8||[];c.$8=null;var e=""+a.videoID,f={name:"prefetch task, "+e,run:function(){e&&n["delete"](e);d.forEach(function(a){return a.send()});return b("MaybeNativePromise").all(i).then(function(){})["catch"](function(){})},cancel:function(){}};h?(b("VideoPlayerPrefetchExperiments").switchPrefetchTaskToHighPriWhenPlayed&&e&&n.set(e,f),h.getQueue("video").enqueue(f,b("VideoPlayerPrefetchExperiments").prefetchPriority),c.$15()):(f.run(),b("MaybeNativePromise").all(i).then(function(){return this.$15()}.bind(c))["catch"](function(){return this.$15()}.bind(c)))})():b("MaybeNativePromise").all(i).then(function(){return this.$15()}.bind(this))["catch"](function(){return this.$15()}.bind(this))};t.prototype.$11=function(a,c){"use strict";a=s(a),this.$1.values().next().done&&b("Run").onLeave(function(){for(var a=0;a<this.$3.length;a++)this.$3[a].abort();this.$3=[];this.$4=[];this.$5=0;this.$1.clear()}.bind(this)),this.$1.set(a,c)};t.prototype.$10=function(a){"use strict";a=this.$3.indexOf(a);a>-1&&this.$3.splice(a,1)};t.prototype.$15=function(){"use strict";this.$5--;var a=this.$4.shift();a&&this.$14(a)};t.prototype.has=function(a){"use strict";a=s(a);return this.$1.has(a)};t.prototype.getConnectionQualityLevel=function(a){"use strict";return this.$2.get(a)};t.prototype.getAndDelete=function(a){"use strict";a=s(a);var b=this.$1.get(a);b?j("cache.hit",1):j("cache.miss",1);this.$1["delete"](a);j("retrieve",1);return b};t.prototype.$16=function(a){"use strict";a=s(a);a=this.$1.get(a);return a};t.prototype.queueRequestBatch=function(a){"use strict";this.$6===0||this.$5<this.$6?this.$14(a):(j("queued",i(a)),this.$4.push(a))};t.getInstance=function(){"use strict";m===null&&(m=new t());return m};t.createQueryStringURL=function(a){"use strict";var c=a.url,d=a.start;a=a.end;d!==null&&d!==undefined&&a!==null&&a!==undefined&&(c=new(b("URI"))(c).addQueryData({bytestart:d,byteend:a}));return c.toString()};t.getConsolidatedURL=function(a){"use strict";__p&&__p();var b="",c=Infinity,d=0;for(var e=0;e<a.length;e++){var f=a[e],g=f.url,h=f.start;f=f.end;if(g==null||h==null||f==null)return null;if(b==="")b=g;else if(b!==g)return null;c=Math.min(c,h);d=Math.max(d,f)}return t.createQueryStringURL({url:b,start:c,end:d})};t.loadVideo=function(a,c,d){"use strict";c=!!c;if(g&&g.isAutoplayBandwidthRestrained())return;if(b("VideoPlayerPrefetchExperiments").disablePrefetchCache)return;var e=t.getInstance();a.manifest||(a.manifest=[]);e.queueRequestBatch({manifest:a.manifest.filter(q),video:a.video.filter(q),audio:a.audio.filter(q),videoID:a.videoID,useCredentials:c,connectionQualityLevel:d})};t.getCacheValue=function(a){"use strict";return t.getInstance().getAndDelete(a)};t.getConnectionQualityLevel=function(a){"use strict";return t.getInstance().getConnectionQualityLevel(a)};t.hasCacheValue=function(a){"use strict";return t.getInstance().has(a)};t.getPrefetchTaskByID=function(a){"use strict";a=n.get(a)||null;return a};e.exports=t}),null);
__d("VideoDisplayTimePlayButton",["CSS","DataStore","Event"],(function(a,b,c,d,e,f){"use strict";__p&&__p();var g={},h="_spinner";a={getClicked:function(a){return b("DataStore").get(a,"clicked",!1)},register:function(a,c){var d=a.id;g[d]=b("Event").listen(a,"click",function(){c&&(b("CSS").hide(a),b("CSS").show(c)),b("DataStore").set(a,"clicked",!0)});c&&(g[d+h]=b("Event").listen(c,"click",function(){c&&b("CSS").hide(c),b("CSS").show(a),b("DataStore").set(a,"clicked",!1)}))},unregister:function(a){a=a.id;Object.prototype.hasOwnProperty.call(g,a)&&g[a].remove();a=a+h;Object.prototype.hasOwnProperty.call(g,a)&&g[a].remove()}};e.exports=a}),null);
__d("VideosRenderingInstrumentation",["DataStore","VideoPlayerHTML5Experiments","performanceAbsoluteNow"],(function(a,b,c,d,e,f){var g={storeRenderTime:function(a){var c=b("VideoPlayerHTML5Experiments").useMonotonicallyIncreasingTimers?b("performanceAbsoluteNow")():Date.now();b("DataStore").set(a,"videos_rendering_instrumentation",c);return c},retrieveRenderTime:function(a){var c=b("DataStore").get(a,"videos_rendering_instrumentation",NaN);Number.isNaN(c)&&(c=g.storeRenderTime(a));return c}};e.exports=g}),null);
__d("uuid",[],(function(a,b,c,d,e,f){function a(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,function(a){var b=Math.random()*16|0;a=a=="x"?b:b&3|8;return a.toString(16)})}e.exports=a}),null);
__d("DOMContainer.react",["invariant","React","ReactDOM","isNode"],(function(a,b,c,d,e,f,g){__p&&__p();var h;c=b("React").PropTypes;d=babelHelpers.inherits(a,b("React").Component);h=d&&d.prototype;function a(){var a,c;for(var d=arguments.length,e=Array(d),f=0;f<d;f++)e[f]=arguments[f];return c=(a=h.constructor).call.apply(a,[this].concat(e)),this.getDOMChild=function(){var a=this.props.children;b("isNode")(a)||g(0);return a}.bind(this),c}a.prototype.shouldComponentUpdate=function(a,b){"use strict";return a.children!==this.props.children};a.prototype.componentDidMount=function(){"use strict";b("ReactDOM").findDOMNode(this).appendChild(this.getDOMChild())};a.prototype.componentDidUpdate=function(){"use strict";var a=b("ReactDOM").findDOMNode(this);while(a.lastChild)a.removeChild(a.lastChild);a.appendChild(this.getDOMChild())};a.prototype.render=function(){"use strict";return this.props.display==="block"?b("React").createElement("div",this.props,undefined):b("React").createElement("span",this.props,undefined)};a.propTypes={display:c.oneOf(["inline","block"])};a.defaultProps={display:"inline"};e.exports=a}),18);
__d("ImageBlock.react",["cx","invariant","LeftRight.react","React","joinClasses"],(function(a,b,c,d,e,f,g,h){__p&&__p();var i;function j(a){a=a.children;a&&(a.length===2||a.length===3)||h(0);a[0]!==null||h(0);return a}function k(a){return"img _8o"+(a==="small"?" _8r":"")+(a==="medium"?" _8s":"")+(a==="large"?" _8t":"")}i=babelHelpers.inherits(a,b("React").Component);i&&i.prototype;a.prototype.render=function(){"use strict";__p&&__p();var a=j(this.props),c=a[0],d=a[1];a=a[2];var e=this.props,f=e.imageClassName,g=e.contentClassName,h=e.spacing;e=babelHelpers.objectWithoutProperties(e,["imageClassName","contentClassName","spacing"]);var i=c.props,l=i.className,m=i.alt,n=i.tabIndex;i=i.title;l={className:b("joinClasses")(l,k(h),f)};c.type==="img"?m===undefined&&(l.alt=""):(c.type==="a"||c.type==="link")&&n===undefined&&i===undefined&&c.props["aria-label"]===undefined&&(l.tabIndex="-1",l["aria-hidden"]="true");c=b("React").cloneElement(c,l);f=b("joinClasses")(g,"_42ef"+(h==="small"?" _8u":""));m=void 0;!a?m=b("React").createElement("div",{className:f},d):m=b("React").createElement(b("LeftRight.react"),{className:f,direction:b("LeftRight.react").DIRECTION.right},d,a);return b("React").createElement(b("LeftRight.react"),babelHelpers["extends"]({},e,{direction:b("LeftRight.react").DIRECTION.left}),c,m)};function a(){"use strict";i.apply(this,arguments)}a.defaultProps={spacing:"small"};e.exports=a}),null);
__d("asset",[],(function(a,b,c,d,e,f){function a(a){throw new Error("asset("+JSON.stringify(a)+"): Unexpected asset reference.")}e.exports=a}),null);
__d("cssVar",[],(function(a,b,c,d,e,f){function a(a){throw new Error('cssVar("'+a+'"): Unexpected class transformation.')}e.exports=a}),18);
__d("JSResourceReference",["Promise","Bootloader"],(function(a,b,c,d,e,f){__p&&__p();function a(a){"use strict";this.$1=a}a.prototype.getModuleId=function(){"use strict";return this.$1};a.prototype.load=function(){"use strict";return new(b("Promise"))(function(a){b("Bootloader").loadModules.call(b("Bootloader"),[this.$1],a,this.$2||"JSResource: unknown caller")}.bind(this))};a.prototype.equals=function(a){"use strict";return this===a||this.$1==a.$1};a.prototype.__setRef=function(a){"use strict";this.$2=a;return this};a.loadAll=function(a,c){"use strict";__p&&__p();var d={},e=!1;for(var f=a,g=Array.isArray(f),h=0,f=g?f:f[typeof Symbol==="function"?Symbol.iterator:"@@iterator"]();;){var i;if(g){if(h>=f.length)break;i=f[h++]}else{h=f.next();if(h.done)break;i=h.value}i=i;i=i.$2;i&&(e=!0,d[i]=!0)}b("Bootloader").loadModules.call(b("Bootloader"),a.map(function(a){return a.getModuleId()}),c,e?Object.keys(d).join(":"):"JSResource: unknown caller")};e.exports=a}),18);
__d("JSResource",["JSResourceReference"],(function(a,b,c,d,e,f){a=function(a){return new(b("JSResourceReference"))(a)};a.Reference=b("JSResourceReference");a.loadAll=b("JSResourceReference").loadAll;e.exports=a}),null);
__d("CacheStorage",["ErrorUtils","EventListener","ExecutionEnvironment","FBJSON","WebStorage"],(function(a,b,c,d,e,f){__p&&__p();var g,h,i={memory:m,localstorage:c,sessionstorage:d},j="_@_",k="3b",l="CacheStorageVersion";function a(a){"use strict";this._store=a}a.prototype.getStore=function(){"use strict";return this._store};a.prototype.keys=function(){"use strict";var a=[];for(var b=0;b<this._store.length;b++)a.push(this._store.key(b));return a};a.prototype.get=function(a){"use strict";return this._store.getItem(a)};a.prototype.set=function(a,b){"use strict";this._store.setItem(a,b)};a.prototype.remove=function(a){"use strict";this._store.removeItem(a)};a.prototype.clear=function(){"use strict";this._store.clear()};f=babelHelpers.inherits(c,a);g=f&&f.prototype;function c(){"use strict";g.constructor.call(this,b("WebStorage").getLocalStorage())}c.available=function(){"use strict";return!!b("WebStorage").getLocalStorage()};f=babelHelpers.inherits(d,a);h=f&&f.prototype;function d(){"use strict";h.constructor.call(this,b("WebStorage").getSessionStorage())}d.available=function(){"use strict";return!!b("WebStorage").getSessionStorage()};function m(){"use strict";this._store={}}m.prototype.getStore=function(){"use strict";return this._store};m.prototype.keys=function(){"use strict";return Object.keys(this._store)};m.prototype.get=function(a){"use strict";return this._store[a]===undefined?null:this._store[a]};m.prototype.set=function(a,b){"use strict";this._store[a]=b};m.prototype.remove=function(a){"use strict";a in this._store&&delete this._store[a]};m.prototype.clear=function(){"use strict";this._store={}};m.available=function(){"use strict";return!0};function n(a,c){"use strict";__p&&__p();this._exceptionMessage=null;this._key_prefix=c||"_cs_";if(a=="AUTO"||!a)for(var d in i){c=i[d];if(c.available()){a=d;break}}a&&(!i[a]||!i[a].available()?(b("ExecutionEnvironment").canUseDOM,this._backend=new m()):this._backend=new i[a]());c=this.useBrowserStorage();c&&b("EventListener").listen(window,"storage",this._onBrowserValueChanged.bind(this));a=c?this._backend.getStore().getItem(l):this._backend.getStore()[l];a!==k&&this.clear()}n.prototype.useBrowserStorage=function(){"use strict";return this._backend.getStore()===b("WebStorage").getLocalStorage()||this._backend.getStore()===b("WebStorage").getSessionStorage()};n.prototype.addValueChangeCallback=function(a){"use strict";this._changeCallbacks=this._changeCallbacks||[];this._changeCallbacks.push(a);return{remove:function(){this._changeCallbacks.slice(this._changeCallbacks.indexOf(a),1)}.bind(this)}};n.prototype._onBrowserValueChanged=function(a){"use strict";this._changeCallbacks&&String(a.key).startsWith(this._key_prefix)&&this._changeCallbacks.forEach(function(b){b(a.key,a.oldValue,a.newValue)})};n.prototype.keys=function(){"use strict";var a=[];b("ErrorUtils").guard(function(){if(this._backend){var b=this._backend.keys(),c=this._key_prefix.length;for(var d=0;d<b.length;d++)b[d].substr(0,c)==this._key_prefix&&a.push(b[d].substr(c))}}.bind(this),"CacheStorage")();return a};n.prototype.set=function(a,c,d){"use strict";__p&&__p();if(this._backend){var e;typeof c=="string"?e=j+c:!d?(e={__t:Date.now(),__v:c},e=b("FBJSON").stringify(e)):e=b("FBJSON").stringify(c);d=this._backend;c=this._key_prefix+a;a=!0;var f=null;while(a)try{f=null,d.set(c,e),a=!1}catch(b){f=b;var g=d.keys().length;this._evictCacheEntries();a=d.keys().length<g}if(f!==null){this._exceptionMessage=f.message;return!1}else{this._exceptionMessage=null;return!0}}this._exceptionMessage="no back end";return!1};n.prototype.getLastSetExceptionMessage=function(){"use strict";return this._exceptionMessage};n.prototype._evictCacheEntries=function(){"use strict";__p&&__p();var a=[],c=this._backend;c.keys().forEach(function(d){__p&&__p();if(d===l)return;var f=c.get(d);if(f===undefined){c.remove(d);return}if(n._hasMagicPrefix(f))return;try{f=b("FBJSON").parse(f,e.id)}catch(a){c.remove(d);return}f&&f.__t!==undefined&&f.__v!==undefined&&a.push([d,f.__t])});a.sort(function(a,b){return a[1]-b[1]});for(var d=0;d<Math.ceil(a.length/2);d++)c.remove(a[d][0])};n.prototype.get=function(a,c){"use strict";__p&&__p();var d;if(this._backend){b("ErrorUtils").applyWithGuard(function(){d=this._backend.get(this._key_prefix+a)},this,null,function(){d=null},"CacheStorage:get");if(d!==null)if(n._hasMagicPrefix(d))d=d.substr(j.length);else try{d=b("FBJSON").parse(d,e.id),d&&d.__t!==undefined&&d.__v!==undefined&&(d=d.__v)}catch(a){d=undefined}else d=undefined}d===undefined&&c!==undefined&&(d=c,this.set(a,d));return d};n.prototype.remove=function(a){"use strict";this._backend&&b("ErrorUtils").applyWithGuard(this._backend.remove,this._backend,[this._key_prefix+a],null,"CacheStorage:remove")};n.prototype.clear=function(){"use strict";this._backend&&(b("ErrorUtils").applyWithGuard(this._backend.clear,this._backend,null,null,null,"CacheStorage:clear"),this.useBrowserStorage()?this._backend.getStore().setItem(l,k):this._backend.getStore()[l]=k)};n.getAllStorageTypes=function(){"use strict";return Object.keys(i)};n._hasMagicPrefix=function(a){"use strict";return a.substr(0,j.length)===j};e.exports=n}),null);
__d("MarauderLogger",["Banzai","CacheStorage","MarauderConfig"],(function(a,b,c,d,e,f){__p&&__p();var g="client_event",h="navigation",i=18e4,j="marauder",k="marauder_last_event_time",l="marauder_last_session_id",m={},n=[],o=!1,p=null,q=null,r=null,s=0,t,u,v=!1,w=null,x=!1;function a(){G().set(k,y())}b("Banzai").subscribe(b("Banzai").SHUTDOWN,a);function y(){t=t||G().get(k)||0;return t}function z(){v||(u=G().get(l),v=!0);var a=Date.now();(!u||a-i>y())&&(u=a.toString(16)+"-"+(~~(Math.random()*16777215)).toString(16),G().set(l,u));return u}function A(){return{user_agent:window.navigator.userAgent,screen_height:window.screen.availHeight,screen_width:window.screen.availWidth,density:window.screen.devicePixelRatio||null,platform:window.navigator.platform||null,locale:window.navigator.language||null}}function B(){return{locale:navigator.language}}function C(b,a,c,d,f,g,h){var i=h||Date.now();t=h?Date.now():i;a=a||p;return{name:b,time:i/1e3,module:a,obj_type:d,obj_id:f,uuid:g,extra:c}}function D(a,b,c){return C("content",null,{flags:b},null,null,a,c)}function E(a){__p&&__p();var b=window.__mrdr;if(b)for(var c in b){var d=b[c];if(d[3]!==0){delete b[c];if(c==="1")if(r!==null)c=r;else continue;a.push(D(c,1,d[1]));a.push(D(c,2,d[2]));a.push(D(c,3,d[3]))}}}function F(a){__p&&__p();E(a);if(a.length===0)return;o&&a.push(C("counters",null,m));var c=a[0].name==="time_spent_bit_array"&&b("Banzai").isEnabled("vital_navigations"),d=c?b("Banzai").VITAL:b("Banzai").BASIC,e=b("MarauderConfig").gk_enabled;s===0&&e&&(a.push(C("device_status",null,B())),c||(d={delay:5e3}));e&&Math.random()<.01&&a.push(C("device_info",null,A()));if(r!==null)for(var c=0;c<a.length;c++){e=a[c];(e.uuid===null||e.uuid===undefined)&&(e.uuid=r)}e={app_ver:b("MarauderConfig").app_version,data:a,log_type:g,seq:s++,session_id:z()};c=G().get("device_id");c&&(e.device_id=c);m={};o=!1;b("Banzai").post(j,e,d)}function G(){x||(x=!0,w=new(b("CacheStorage"))("localstorage",""));return w}function c(a){m[a]||(m[a]=0),m[a]++,o=!0}function H(b,a,c,d,f,g,h){F([C(b,a,c,d,f,g,h)])}function I(a,b){p!==b&&(n.push(C(h,p,{dest_module:b,source_url:q,destination_url:a})),p=b,q=a)}function d(a,b){p!==b&&(r=null,I(a,b))}function f(a,b,c){H(b?"show_module":"hide_module",a,c)}function J(a){p=a}function K(){return p}function L(a){r===null&&(r=a,a!==null&&(F(n),n=[]))}e.exports={count:c,log:H,navigateTo:d,navigateWithinSession:I,toggleModule:f,setUUID:L,setNavigationModule:J,getNavigationModule:K}}),null);
__d("cancelAnimationFramePolyfill",[],(function(a,b,c,d,e,f){b=a.cancelAnimationFrame&&a.cancelAnimationFrame.nativeBackup||a.cancelAnimationFrame||a.webkitCancelAnimationFrame||a.mozCancelAnimationFrame||a.oCancelAnimationFrame||a.msCancelAnimationFrame||a.clearTimeout;e.exports=b}),null);
__d("cancelAnimationFrame",["Env","TimerStorage","TimeSlice","cancelAnimationFramePolyfill","requestAnimationFrameAcrossTransitions"],(function(a,b,c,d,e,f){__p&&__p();var g=b("TimerStorage").ANIMATION_FRAME;function a(a){if(a!=null)if(b("Env").gk_raf_flush)b("requestAnimationFrameAcrossTransitions").cancelVirtualRAF(a);else{b("TimerStorage").unset(g,a);var c=g+String(a);b("TimeSlice").cancelWithToken(c)}b("cancelAnimationFramePolyfill")(a)}e.exports=a}),18);