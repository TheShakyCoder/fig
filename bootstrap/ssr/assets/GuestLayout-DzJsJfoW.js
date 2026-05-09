import { Link } from "@inertiajs/vue3";
import { createTextVNode, createVNode, mergeProps, unref, useSSRContext, withCtx } from "vue";
import { ssrInterpolate, ssrRenderAttrs, ssrRenderComponent, ssrRenderSlot } from "vue/server-renderer";
//#region resources/js/Layouts/GuestLayout.vue
var _sfc_main = {
	__name: "GuestLayout",
	__ssrInlineRender: true,
	setup(__props) {
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<div${ssrRenderAttrs(mergeProps({ class: "flex min-h-screen flex-col items-center bg-gray-950 pt-6 sm:justify-center sm:pt-0" }, _attrs))}><div class="pointer-events-none absolute top-0 left-1/2 -translate-x-1/2 h-[400px] w-[600px] rounded-full bg-emerald-500/5 blur-3xl"></div><div class="relative">`);
			_push(ssrRenderComponent(unref(Link), { href: "/" }, {
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(`<span class="text-3xl font-bold tracking-tight text-white"${_scopeId}>fig<span class="text-emerald-400"${_scopeId}>.</span></span>`);
					else return [createVNode("span", { class: "text-3xl font-bold tracking-tight text-white" }, [createTextVNode("fig"), createVNode("span", { class: "text-emerald-400" }, ".")])];
				}),
				_: 1
			}, _parent));
			_push(`</div><div class="relative mt-8 w-full overflow-hidden rounded-2xl border border-white/5 bg-gray-900 px-8 py-8 shadow-xl sm:max-w-md">`);
			ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
			_push(`</div><p class="mt-6 text-xs text-gray-600"> © ${ssrInterpolate((/* @__PURE__ */ new Date()).getFullYear())} Fig Limited </p></div>`);
		};
	}
};
var _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
	const ssrContext = useSSRContext();
	(ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Layouts/GuestLayout.vue");
	return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
//#endregion
export { _sfc_main as t };
