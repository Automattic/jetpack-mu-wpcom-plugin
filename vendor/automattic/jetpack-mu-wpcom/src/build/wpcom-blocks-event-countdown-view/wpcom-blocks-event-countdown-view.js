(()=>{"use strict";var e,n={7701:e=>{e.exports=window.wp.domReady}},t={};function o(e){var s=t[e];if(void 0!==s)return s.exports;var r=t[e]={exports:{}};return n[e](r,r.exports,o),r.exports}o.n=e=>{var n=e&&e.__esModule?()=>e.default:()=>e;return o.d(n,{a:n}),n},o.d=(e,n)=>{for(var t in n)o.o(n,t)&&!o.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:n[t]})},o.o=(e,n)=>Object.prototype.hasOwnProperty.call(e,n),e=o(7701),o.n(e)()((function(){function e(e){return/^[0-9]+$/.test(e)}const n=[],t=document.getElementsByClassName("wp-block-jetpack-event-countdown");for(let r=0;r<t.length;r++){const a=t[r],c=a.getElementsByClassName("event-countdown__date");if(c.length<1)continue;const d=c[0].textContent;let l;l=e(d)?1e3*d:new Date(d).getTime(),isNaN(l)||(l-Date.now()>0?n[r]=window.setInterval(o,1e3,l,a,r):s(a))}function o(e,t,o){const r=e-Date.now();if(r<0)return s(t),void window.clearInterval(n[o]);let a=Math.round(r/1e3);const c=Math.floor(a/86400);a-=24*c*60*60;const d=Math.floor(a/3600);a-=60*d*60;const l=Math.floor(a/60);a-=60*l;const i=a;t.getElementsByClassName("event-countdown__day")[0].innerHTML=c,t.getElementsByClassName("event-countdown__hour")[0].innerHTML=d,t.getElementsByClassName("event-countdown__minute")[0].innerHTML=l,t.getElementsByClassName("event-countdown__second")[0].innerHTML=i}function s(e){const n=e.getElementsByClassName("event-countdown__counter")[0],t=document.createElement("div");e.getElementsByClassName("event-countdown__day")[0].innerHTML=0,e.getElementsByClassName("event-countdown__hour")[0].innerHTML=0,e.getElementsByClassName("event-countdown__minute")[0].innerHTML=0,e.getElementsByClassName("event-countdown__second")[0].innerHTML=0,n.classList.add("event-countdown__counter-stopped"),t.className="event-countdown__fireworks",t.innerHTML="<div class='event-countdown__fireworks-before'></div><div class='event-countdown__fireworks-after'></div>",n.parentNode.appendChild(t,n)}}))})();