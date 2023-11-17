const zbarWasm=function(t){"use strict";
/*! *****************************************************************************
    Copyright (c) Microsoft Corporation.

    Permission to use, copy, modify, and/or distribute this software for any
    purpose with or without fee is hereby granted.

    THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
    REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
    AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
    INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
    LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR
    OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
    PERFORMANCE OF THIS SOFTWARE.
    ***************************************************************************** */function e(t,e,n,r){return new(n||(n=Promise))((function(i,o){function a(t){try{u(r.next(t))}catch(t){o(t)}}function s(t){try{u(r.throw(t))}catch(t){o(t)}}function u(t){var e;t.done?i(t.value):(e=t.value,e instanceof n?e:new n((function(t){t(e)}))).then(a,s)}u((r=r.apply(t,e||[])).next())}))}function n(t){if(t.__esModule)return t;var e=Object.defineProperty({},"__esModule",{value:!0});return Object.keys(t).forEach((function(n){var r=Object.getOwnPropertyDescriptor(t,n);Object.defineProperty(e,n,r.get?r:{enumerable:!0,get:function(){return t[n]}})})),e}var r={exports:{}};function i(t,e){for(var n=0,r=t.length-1;r>=0;r--){var i=t[r];"."===i?t.splice(r,1):".."===i?(t.splice(r,1),n++):n&&(t.splice(r,1),n--)}if(e)for(;n--;n)t.unshift("..");return t}var o=/^(\/?|)([\s\S]*?)((?:\.{1,2}|[^\/]+?|)(\.[^.\/]*|))(?:[\/]*)$/,a=function(t){return o.exec(t).slice(1)};function s(){for(var t="",e=!1,n=arguments.length-1;n>=-1&&!e;n--){var r=n>=0?arguments[n]:"/";if("string"!=typeof r)throw new TypeError("Arguments to path.resolve must be strings");r&&(t=r+"/"+t,e="/"===r.charAt(0))}return(e?"/":"")+(t=i(m(t.split("/"),(function(t){return!!t})),!e).join("/"))||"."}function u(t){var e=c(t),n="/"===d(t,-1);return(t=i(m(t.split("/"),(function(t){return!!t})),!e).join("/"))||e||(t="."),t&&n&&(t+="/"),(e?"/":"")+t}function c(t){return"/"===t.charAt(0)}function f(){var t=Array.prototype.slice.call(arguments,0);return u(m(t,(function(t,e){if("string"!=typeof t)throw new TypeError("Arguments to path.join must be strings");return t})).join("/"))}function l(t,e){function n(t){for(var e=0;e<t.length&&""===t[e];e++);for(var n=t.length-1;n>=0&&""===t[n];n--);return e>n?[]:t.slice(e,n-e+1)}t=s(t).substr(1),e=s(e).substr(1);for(var r=n(t.split("/")),i=n(e.split("/")),o=Math.min(r.length,i.length),a=o,u=0;u<o;u++)if(r[u]!==i[u]){a=u;break}var c=[];for(u=a;u<r.length;u++)c.push("..");return(c=c.concat(i.slice(a))).join("/")}function _(t){var e=a(t),n=e[0],r=e[1];return n||r?(r&&(r=r.substr(0,r.length-1)),n+r):"."}function A(t,e){var n=a(t)[2];return e&&n.substr(-1*e.length)===e&&(n=n.substr(0,n.length-e.length)),n}function h(t){return a(t)[3]}const p={extname:h,basename:A,dirname:_,sep:"/",delimiter:":",relative:l,join:f,isAbsolute:c,normalize:u,resolve:s};function m(t,e){if(t.filter)return t.filter(e);for(var n=[],r=0;r<t.length;r++)e(t[r],r,t)&&n.push(t[r]);return n}var d="b"==="ab".substr(-1)?function(t,e,n){return t.substr(e,n)}:function(t,e,n){return e<0&&(e=t.length+e),t.substr(e,n)};const y=n(Object.freeze({__proto__:null,resolve:s,normalize:u,isAbsolute:c,join:f,relative:l,sep:"/",delimiter:":",dirname:_,basename:A,extname:h,default:p})),R=n(Object.freeze({__proto__:null,default:{}}));!function(t,e){var n,r=(n="undefined"!=typeof document&&document.currentScript?document.currentScript.src:void 0,"undefined"!=typeof __filename&&(n=n||__filename),function(t){var e,r,i=void 0!==(t=t||{})?t:{},o=Object.assign;i.ready=new Promise((function(t,n){e=t,r=n}));var a,s,u,c,f,l,_=o({},i),A="object"==typeof window,h="function"==typeof importScripts,p="object"==typeof process&&"object"==typeof process.versions&&"string"==typeof process.versions.node,m="";p?(m=h?y.dirname(m)+"/":__dirname+"/",l=function(){f||(c=R,f=y)},a=function(t,e){return l(),t=f.normalize(t),c.readFileSync(t,e?null:"utf8")},u=function(t){var e=a(t,!0);return e.buffer||(e=new Uint8Array(e)),e},s=function(t,e,n){l(),t=f.normalize(t),c.readFile(t,(function(t,r){t?n(t):e(r.buffer)}))},process.argv.length>1&&process.argv[1].replace(/\\/g,"/"),process.argv.slice(2),process.on("uncaughtException",(function(t){if(!(t instanceof Q))throw t})),process.on("unhandledRejection",(function(t){throw t})),i.inspect=function(){return"[Emscripten Module object]"}):(A||h)&&(h?m=self.location.href:"undefined"!=typeof document&&document.currentScript&&(m=document.currentScript.src),n&&(m=n),m=0!==m.indexOf("blob:")?m.substr(0,m.replace(/[?#].*/,"").lastIndexOf("/")+1):"",a=function(t){var e=new XMLHttpRequest;return e.open("GET",t,!1),e.send(null),e.responseText},h&&(u=function(t){var e=new XMLHttpRequest;return e.open("GET",t,!1),e.responseType="arraybuffer",e.send(null),new Uint8Array(e.response)}),s=function(t,e,n){var r=new XMLHttpRequest;r.open("GET",t,!0),r.responseType="arraybuffer",r.onload=function(){200==r.status||0==r.status&&r.response?e(r.response):n()},r.onerror=n,r.send(null)});var d,g,B=i.print||console.log.bind(console),v=i.printErr||console.warn.bind(console);o(i,_),_=null,i.arguments,i.thisProgram,i.quit,i.wasmBinary&&(d=i.wasmBinary),i.noExitRuntime,"object"!=typeof WebAssembly&&x("no native wasm support detected");var E,I,Z,b,S=!1,C="undefined"!=typeof TextDecoder?new TextDecoder("utf8"):void 0;function w(t,e,n){for(var r=e+n,i=e;t[i]&&!(i>=r);)++i;if(i-e>16&&t.subarray&&C)return C.decode(t.subarray(e,i));for(var o="";e<i;){var a=t[e++];if(128&a){var s=63&t[e++];if(192!=(224&a)){var u=63&t[e++];if((a=224==(240&a)?(15&a)<<12|s<<6|u:(7&a)<<18|s<<12|u<<6|63&t[e++])<65536)o+=String.fromCharCode(a);else{var c=a-65536;o+=String.fromCharCode(55296|c>>10,56320|1023&c)}}else o+=String.fromCharCode((31&a)<<6|s)}else o+=String.fromCharCode(a)}return o}function N(t){E=t,i.HEAP8=new Int8Array(t),i.HEAP16=new Int16Array(t),i.HEAP32=Z=new Int32Array(t),i.HEAPU8=I=new Uint8Array(t),i.HEAPU16=new Uint16Array(t),i.HEAPU32=new Uint32Array(t),i.HEAPF32=new Float32Array(t),i.HEAPF64=new Float64Array(t)}i.INITIAL_MEMORY;var T,P,O,D=[],F=[],H=[],U=0,G=null;function x(t){i.onAbort&&i.onAbort(t),v(t="Aborted("+t+")"),S=!0,t+=". Build with -s ASSERTIONS=1 for more info.";var e=new WebAssembly.RuntimeError(t);throw r(e),e}function M(t){return t.startsWith("data:application/octet-stream;base64,")}function j(t){return t.startsWith("file://")}function L(t){try{if(t==T&&d)return new Uint8Array(d);if(u)return u(t);throw"both async and sync fetching of the wasm failed"}catch(t){x(t)}}function k(t){for(;t.length>0;){var e=t.shift();if("function"!=typeof e){var n=e.func;"number"==typeof n?void 0===e.arg?W(n)():W(n)(e.arg):n(void 0===e.arg?null:e.arg)}else e(i)}}function W(t){return b.get(t)}function Y(t){try{return g.grow(t-E.byteLength+65535>>>16),N(g.buffer),1}catch(t){}}i.preloadedImages={},i.preloadedAudios={},M(T="zbar.wasm")||(P=T,T=i.locateFile?i.locateFile(P,m):m+P),O=p?()=>{var t=process.hrtime();return 1e3*t[0]+t[1]/1e6}:()=>performance.now();var z={mappings:{},buffers:[null,[],[]],printChar:function(t,e){var n=z.buffers[t];0===e||10===e?((1===t?B:v)(w(n,0)),n.length=0):n.push(e)},varargs:void 0,get:function(){return z.varargs+=4,Z[z.varargs-4>>2]},getStr:function(t){var e=function(t,e){return t?w(I,t,e):""}(t);return e},get64:function(t,e){return t}},X={e:function(t,e){var n,r;if(0===t)n=Date.now();else{if(1!==t&&4!==t)return r=28,Z[K()>>2]=r,-1;n=O()}return Z[e>>2]=n/1e3|0,Z[e+4>>2]=n%1e3*1e3*1e3|0,0},c:function(t){var e,n,r=I.length,i=2147483648;if((t>>>=0)>i)return!1;for(var o=1;o<=4;o*=2){var a=r*(1+.2/o);if(a=Math.min(a,t+100663296),Y(Math.min(i,((e=Math.max(t,a))%(n=65536)>0&&(e+=n-e%n),e))))return!0}return!1},d:function(t){return 0},b:function(t,e,n,r,i){},a:function(t,e,n,r){for(var i=0,o=0;o<n;o++){var a=Z[e>>2],s=Z[e+4>>2];e+=8;for(var u=0;u<s;u++)z.printChar(t,I[a+u]);i+=s}return Z[r>>2]=i,0}};!function(){var t={a:X};function e(t,e){var n,r=t.exports;i.asm=r,N((g=i.asm.f).buffer),b=i.asm.r,n=i.asm.g,F.unshift(n),function(t){if(U--,i.monitorRunDependencies&&i.monitorRunDependencies(U),0==U&&G){var e=G;G=null,e()}}()}function n(t){e(t.instance)}function o(e){return function(){if(!d&&(A||h)){if("function"==typeof fetch&&!j(T))return fetch(T,{credentials:"same-origin"}).then((function(t){if(!t.ok)throw"failed to load wasm binary file at '"+T+"'";return t.arrayBuffer()})).catch((function(){return L(T)}));if(s)return new Promise((function(t,e){s(T,(function(e){t(new Uint8Array(e))}),e)}))}return Promise.resolve().then((function(){return L(T)}))}().then((function(e){return WebAssembly.instantiate(e,t)})).then((function(t){return t})).then(e,(function(t){v("failed to asynchronously prepare wasm: "+t),x(t)}))}if(U++,i.monitorRunDependencies&&i.monitorRunDependencies(U),i.instantiateWasm)try{return i.instantiateWasm(t,e)}catch(t){return v("Module.instantiateWasm callback failed with error: "+t),!1}(d||"function"!=typeof WebAssembly.instantiateStreaming||M(T)||j(T)||"function"!=typeof fetch?o(n):fetch(T,{credentials:"same-origin"}).then((function(e){return WebAssembly.instantiateStreaming(e,t).then(n,(function(t){return v("wasm streaming compile failed: "+t),v("falling back to ArrayBuffer instantiation"),o(n)}))}))).catch(r)}(),i.___wasm_call_ctors=function(){return(i.___wasm_call_ctors=i.asm.g).apply(null,arguments)},i._ImageScanner_create=function(){return(i._ImageScanner_create=i.asm.h).apply(null,arguments)},i._ImageScanner_destory=function(){return(i._ImageScanner_destory=i.asm.i).apply(null,arguments)},i._ImageScanner_set_config=function(){return(i._ImageScanner_set_config=i.asm.j).apply(null,arguments)},i._ImageScanner_enable_cache=function(){return(i._ImageScanner_enable_cache=i.asm.k).apply(null,arguments)},i._ImageScanner_recycle_image=function(){return(i._ImageScanner_recycle_image=i.asm.l).apply(null,arguments)},i._ImageScanner_get_results=function(){return(i._ImageScanner_get_results=i.asm.m).apply(null,arguments)},i._ImageScanner_scan=function(){return(i._ImageScanner_scan=i.asm.n).apply(null,arguments)},i._Image_create=function(){return(i._Image_create=i.asm.o).apply(null,arguments)},i._Image_destory=function(){return(i._Image_destory=i.asm.p).apply(null,arguments)},i._Image_get_symbols=function(){return(i._Image_get_symbols=i.asm.q).apply(null,arguments)};var q,K=i.___errno_location=function(){return(K=i.___errno_location=i.asm.s).apply(null,arguments)};function Q(t){this.name="ExitStatus",this.message="Program terminated with exit("+t+")",this.status=t}function V(t){function n(){q||(q=!0,i.calledRun=!0,S||(k(F),e(i),i.onRuntimeInitialized&&i.onRuntimeInitialized(),function(){if(i.postRun)for("function"==typeof i.postRun&&(i.postRun=[i.postRun]);i.postRun.length;)t=i.postRun.shift(),H.unshift(t);var t;k(H)}()))}U>0||(function(){if(i.preRun)for("function"==typeof i.preRun&&(i.preRun=[i.preRun]);i.preRun.length;)t=i.preRun.shift(),D.unshift(t);var t;k(D)}(),U>0||(i.setStatus?(i.setStatus("Running..."),setTimeout((function(){setTimeout((function(){i.setStatus("")}),1),n()}),1)):n()))}if(i._free=function(){return(i._free=i.asm.t).apply(null,arguments)},i._malloc=function(){return(i._malloc=i.asm.u).apply(null,arguments)},G=function t(){q||V(),q||(G=t)},i.run=V,i.preInit)for("function"==typeof i.preInit&&(i.preInit=[i.preInit]);i.preInit.length>0;)i.preInit.pop()();return V(),t.ready});t.exports=r}(r);const g=r.exports;let B;const v=e(void 0,void 0,void 0,(function*(){if(B=yield g(),!B)throw Error("WASM was not loaded");return B})),E=()=>e(void 0,void 0,void 0,(function*(){return yield v}));var I,Z,b;t.ZBarSymbolType=void 0,(I=t.ZBarSymbolType||(t.ZBarSymbolType={}))[I.ZBAR_NONE=0]="ZBAR_NONE",I[I.ZBAR_PARTIAL=1]="ZBAR_PARTIAL",I[I.ZBAR_EAN2=2]="ZBAR_EAN2",I[I.ZBAR_EAN5=5]="ZBAR_EAN5",I[I.ZBAR_EAN8=8]="ZBAR_EAN8",I[I.ZBAR_UPCE=9]="ZBAR_UPCE",I[I.ZBAR_ISBN10=10]="ZBAR_ISBN10",I[I.ZBAR_UPCA=12]="ZBAR_UPCA",I[I.ZBAR_EAN13=13]="ZBAR_EAN13",I[I.ZBAR_ISBN13=14]="ZBAR_ISBN13",I[I.ZBAR_COMPOSITE=15]="ZBAR_COMPOSITE",I[I.ZBAR_I25=25]="ZBAR_I25",I[I.ZBAR_DATABAR=34]="ZBAR_DATABAR",I[I.ZBAR_DATABAR_EXP=35]="ZBAR_DATABAR_EXP",I[I.ZBAR_CODABAR=38]="ZBAR_CODABAR",I[I.ZBAR_CODE39=39]="ZBAR_CODE39",I[I.ZBAR_PDF417=57]="ZBAR_PDF417",I[I.ZBAR_QRCODE=64]="ZBAR_QRCODE",I[I.ZBAR_SQCODE=80]="ZBAR_SQCODE",I[I.ZBAR_CODE93=93]="ZBAR_CODE93",I[I.ZBAR_CODE128=128]="ZBAR_CODE128",I[I.ZBAR_SYMBOL=255]="ZBAR_SYMBOL",I[I.ZBAR_ADDON2=512]="ZBAR_ADDON2",I[I.ZBAR_ADDON5=1280]="ZBAR_ADDON5",I[I.ZBAR_ADDON=1792]="ZBAR_ADDON",t.ZBarConfigType=void 0,(Z=t.ZBarConfigType||(t.ZBarConfigType={}))[Z.ZBAR_CFG_ENABLE=0]="ZBAR_CFG_ENABLE",Z[Z.ZBAR_CFG_ADD_CHECK=1]="ZBAR_CFG_ADD_CHECK",Z[Z.ZBAR_CFG_EMIT_CHECK=2]="ZBAR_CFG_EMIT_CHECK",Z[Z.ZBAR_CFG_ASCII=3]="ZBAR_CFG_ASCII",Z[Z.ZBAR_CFG_BINARY=4]="ZBAR_CFG_BINARY",Z[Z.ZBAR_CFG_NUM=5]="ZBAR_CFG_NUM",Z[Z.ZBAR_CFG_MIN_LEN=32]="ZBAR_CFG_MIN_LEN",Z[Z.ZBAR_CFG_MAX_LEN=33]="ZBAR_CFG_MAX_LEN",Z[Z.ZBAR_CFG_UNCERTAINTY=64]="ZBAR_CFG_UNCERTAINTY",Z[Z.ZBAR_CFG_POSITION=128]="ZBAR_CFG_POSITION",Z[Z.ZBAR_CFG_TEST_INVERTED=129]="ZBAR_CFG_TEST_INVERTED",Z[Z.ZBAR_CFG_X_DENSITY=256]="ZBAR_CFG_X_DENSITY",Z[Z.ZBAR_CFG_Y_DENSITY=257]="ZBAR_CFG_Y_DENSITY",t.ZBarOrientation=void 0,(b=t.ZBarOrientation||(t.ZBarOrientation={}))[b.ZBAR_ORIENT_UNKNOWN=-1]="ZBAR_ORIENT_UNKNOWN",b[b.ZBAR_ORIENT_UP=0]="ZBAR_ORIENT_UP",b[b.ZBAR_ORIENT_RIGHT=1]="ZBAR_ORIENT_RIGHT",b[b.ZBAR_ORIENT_DOWN=2]="ZBAR_ORIENT_DOWN",b[b.ZBAR_ORIENT_LEFT=3]="ZBAR_ORIENT_LEFT";class S{constructor(t,e){this.ptr=t,this.inst=e}checkAlive(){if(!this.ptr)throw Error("Call after destroyed")}getPointer(){return this.checkAlive(),this.ptr}}class C{constructor(t,e){this.ptr=t,this.ptr32=t>>2,this.buf=e,this.HEAP8=new Int8Array(e),this.HEAPU32=new Uint32Array(e),this.HEAP32=new Int32Array(e)}}class w extends C{get type(){return this.HEAPU32[this.ptr32]}get data(){const t=this.HEAPU32[this.ptr32+4],e=this.HEAPU32[this.ptr32+5];return Int8Array.from(this.HEAP8.subarray(e,e+t))}get points(){const t=this.HEAPU32[this.ptr32+7],e=this.HEAPU32[this.ptr32+8]>>2,n=[];for(let r=0;r<t;++r){const t=this.HEAP32[e+2*r],i=this.HEAP32[e+2*r+1];n.push({x:t,y:i})}return n}get orientation(){return this.HEAP32[this.ptr32+9]}get next(){const t=this.HEAPU32[this.ptr32+11];return t?new w(t,this.buf):null}get time(){return this.HEAPU32[this.ptr32+13]}get cacheCount(){return this.HEAP32[this.ptr32+14]}get quality(){return this.HEAP32[this.ptr32+15]}}class N extends C{get head(){const t=this.HEAPU32[this.ptr32+2];return t?new w(t,this.buf):null}}class T{constructor(e){this.type=e.type,this.typeName=t.ZBarSymbolType[this.type],this.data=e.data,this.points=e.points,this.orientation=e.orientation,this.time=e.time,this.cacheCount=e.cacheCount,this.quality=e.quality}static createSymbolsFromPtr(t,e){if(0==t)return[];let n=new N(t,e).head;const r=[];for(;null!==n;)r.push(new T(n)),n=n.next;return r}decode(t){return new TextDecoder(t).decode(this.data)}}class P extends S{static createFromGrayBuffer(t,n,r,i=0){return e(this,void 0,void 0,(function*(){const e=yield E(),o=new Uint8Array(r),a=t*n;if(a!==o.byteLength)throw Error("dataBuf does not match width and height");const s=e._malloc(a);e.HEAPU8.set(o,s);return new this(e._Image_create(t,n,808466521,s,a,i),e)}))}static createFromRGBABuffer(t,n,r,i=0){return e(this,void 0,void 0,(function*(){const e=yield E(),o=new Uint8Array(r),a=t*n;if(4*a!==o.byteLength)throw Error("dataBuf does not match width and height");const s=e._malloc(a),u=s+a,c=e.HEAPU8;for(let t=s,e=0;t<u;t++,e+=4)c[t]=19595*o[e]+38469*o[e+1]+7472*o[e+2]>>16;return new this(e._Image_create(t,n,808466521,s,a,i),e)}))}destroy(){this.checkAlive(),this.inst._Image_destory(this.ptr),this.ptr=0}getSymbols(){this.checkAlive();const t=this.inst._Image_get_symbols(this.ptr);return T.createSymbolsFromPtr(t,this.inst.HEAPU8.buffer)}}class O extends S{static create(){return e(this,void 0,void 0,(function*(){const t=yield E();return new this(t._ImageScanner_create(),t)}))}destroy(){this.checkAlive(),this.inst._ImageScanner_destory(this.ptr),this.ptr=0}setConfig(t,e,n){return this.checkAlive(),this.inst._ImageScanner_set_config(this.ptr,t,e,n)}enableCache(t=!0){this.checkAlive(),this.inst._ImageScanner_enable_cache(this.ptr,t)}recycleImage(t){this.checkAlive(),this.inst._ImageScanner_recycle_image(this.ptr,t.getPointer())}getResults(){this.checkAlive();const t=this.inst._ImageScanner_get_results(this.ptr);return T.createSymbolsFromPtr(t,this.inst.HEAPU8.buffer)}scan(t){return this.checkAlive(),this.inst._ImageScanner_scan(this.ptr,t.getPointer())}}const D=O.create(),F=(t,n)=>e(void 0,void 0,void 0,(function*(){void 0===n&&(n=yield D);const e=n.scan(t);if(e<0)throw Error("Scan Failed");return 0===e?[]:t.getSymbols()})),H=(t,n,r,i)=>e(void 0,void 0,void 0,(function*(){const e=yield P.createFromRGBABuffer(n,r,t),o=yield F(e,i);return e.destroy(),o}));return t.ZBarImage=P,t.ZBarScanner=O,t.ZBarSymbol=T,t.getDefaultScanner=()=>e(void 0,void 0,void 0,(function*(){return yield D})),t.getInstance=E,t.scanGrayBuffer=(t,n,r,i)=>e(void 0,void 0,void 0,(function*(){const e=yield P.createFromGrayBuffer(n,r,t),o=yield F(e,i);return e.destroy(),o})),t.scanImageData=(t,n)=>e(void 0,void 0,void 0,(function*(){return yield H(t.data.buffer,t.width,t.height,n)})),t.scanRGBABuffer=H,Object.defineProperty(t,"__esModule",{value:!0}),t}({});
//# sourceMappingURL=index.js.map
