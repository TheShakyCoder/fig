import { t as ApplicationLogo_default } from "./ApplicationLogo-B_ee1Ukd.js";
import { Link } from "@inertiajs/vue3";
import { createVNode, mergeProps, unref, useSSRContext, withCtx } from "vue";
import { ssrRenderAttrs, ssrRenderComponent, ssrRenderSlot } from "vue/server-renderer";
//#region resources/js/Layouts/GuestLayout.vue
var _sfc_main = {
	__name: "GuestLayout",
	__ssrInlineRender: true,
	setup(__props) {
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<div${ssrRenderAttrs(mergeProps({ class: "flex min-h-screen flex-col items-center bg-gray-100 pt-6 sm:justify-center sm:pt-0 dark:bg-gray-900" }, _attrs))}><div>`);
			_push(ssrRenderComponent(unref(Link), { href: "/" }, {
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(ssrRenderComponent(ApplicationLogo_default, { class: "h-20 w-20 fill-current text-gray-500" }, null, _parent, _scopeId));
					else return [createVNode(ApplicationLogo_default, { class: "h-20 w-20 fill-current text-gray-500" })];
				}),
				_: 1
			}, _parent));
			_push(`</div><div class="mt-6 w-full overflow-hidden bg-white px-6 py-4 shadow-md sm:max-w-md sm:rounded-lg dark:bg-gray-800">`);
			ssrRenderSlot(_ctx.$slots, "default", {}, null, _push, _parent);
			_push(`</div></div>`);
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
