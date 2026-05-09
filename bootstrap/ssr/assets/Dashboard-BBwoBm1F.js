import { t as _sfc_main$1 } from "./AuthenticatedLayout-Di3BRzMd.js";
import { Head } from "@inertiajs/vue3";
import { createVNode, unref, useSSRContext, withCtx } from "vue";
import { ssrRenderComponent } from "vue/server-renderer";
//#region resources/js/Pages/Dashboard.vue
var _sfc_main = {
	__name: "Dashboard",
	__ssrInlineRender: true,
	setup(__props) {
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<!--[-->`);
			_push(ssrRenderComponent(unref(Head), { title: "Dashboard" }, null, _parent));
			_push(ssrRenderComponent(_sfc_main$1, null, {
				header: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(`<h2 class="text-xl font-semibold leading-tight text-white"${_scopeId}> Dashboard </h2>`);
					else return [createVNode("h2", { class: "text-xl font-semibold leading-tight text-white" }, " Dashboard ")];
				}),
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(`<div class="py-8"${_scopeId}><div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"${_scopeId}><div class="rounded-2xl border border-white/5 bg-gray-900 p-6"${_scopeId}><p class="text-gray-300"${_scopeId}>You&#39;re logged in!</p></div></div></div>`);
					else return [createVNode("div", { class: "py-8" }, [createVNode("div", { class: "mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" }, [createVNode("div", { class: "rounded-2xl border border-white/5 bg-gray-900 p-6" }, [createVNode("p", { class: "text-gray-300" }, "You're logged in!")])])])];
				}),
				_: 1
			}, _parent));
			_push(`<!--]-->`);
		};
	}
};
var _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
	const ssrContext = useSSRContext();
	(ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Dashboard.vue");
	return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
//#endregion
export { _sfc_main as default };
