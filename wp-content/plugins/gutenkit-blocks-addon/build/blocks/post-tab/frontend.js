(()=>{"use strict";const t=t=>{const e=t.target,a=e.getAttribute("data-category-id"),s=e.closest(".gkit-post-tab"),i=e.closest(".tab__list").childNodes;Array.from(i).filter((t=>t.nodeType===Node.ELEMENT_NODE&&t!==e)).map((t=>t.classList.remove("active"))),e.classList.add("active"),s.querySelectorAll(".tab-item").forEach((t=>{t.getAttribute("data-category-id")===a?t.classList.add("active"):t.classList.remove("active")}))};window.addEventListener("load",(()=>{document.querySelectorAll(".gkit-post-tab").forEach((e=>{const a=e.getAttribute("data-event");e.querySelectorAll(".tab__list__item").forEach((e=>{e.addEventListener(a,t)}))}))}))})();