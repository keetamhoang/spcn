if (self.CavalryLogger) { CavalryLogger.start_js(["MS+Oj"]); }

__d("MessengerMessage.bs",["URI","bs_array","Utils.bs","bs_caml_obj","bs_caml_primitive","MercuryActionType","MercuryPayloadSource","isMessengerDotComURI","MercuryLogMessageType"],(function(a,b,c,d,e,f){"use strict";__p&&__p();function a(a,c){return b("bs_caml_primitive").caml_float_compare(a.timestamp,c.timestamp)}function c(a){var b=a.offline_threading_id;if(b==null)return!1;else return b===a.message_id}function d(a){if(b("bs_caml_obj").caml_equal(a.action_type,b("MercuryActionType").USER_GENERATED_MESSAGE))return!0;else{a=a.log_message_type;if(!(a==null)&&(b("bs_caml_obj").caml_equal(a,b("MercuryLogMessageType").SUBSCRIBE)||b("bs_caml_obj").caml_equal(a,b("MercuryLogMessageType").UNSUBSCRIBE)||b("bs_caml_obj").caml_equal(a,b("MercuryLogMessageType").SERVER_ERROR)||b("bs_caml_obj").caml_equal(a,b("MercuryLogMessageType").LIVE_LISTEN)))return!1;else return!0}}function e(a){__p&&__p();var c=a.ranges;if(c==null)return 0;else{c=b("bs_array").map(function(c){__p&&__p();var a=c.entity;if(a==null)return c;else{var d=b("Utils.bs").isTruthy(a.external),e=a.url;if(d||e==null)return c;else{d=new(b("URI"))(e);e=b("isMessengerDotComURI")(b("URI").getRequestURI());var f=d.getDomain();if(e&&(f==null||f===""))e=1;else return c;if(e===1)return Object.assign(Object.assign({},c),{entity:Object.assign(Object.assign({},a),{url:d.setProtocol("https").setDomain("www.facebook.com").toString()})})}}},c);Object.assign(a,{ranges:c});return 0}}function g(a){if(b("bs_caml_obj").caml_equal(a,b("MercuryPayloadSource").UNKNOWN)||b("bs_caml_obj").caml_equal(a,b("MercuryPayloadSource").SERVER_INITIAL_DATA)||b("bs_caml_obj").caml_equal(a,b("MercuryPayloadSource").SERVER_FETCH_THREAD_INFO))return!0;else return b("bs_caml_obj").caml_equal(a,b("MercuryPayloadSource").SERVER_THREAD_SYNC)}f.compare=a;f.isLocalMessage=c;f.isTitanMessage=d;f.finalizeRanges=e;f.shouldSortForPayloadSource=g}),null);