import { t as _sfc_main$1 } from "./AuthenticatedLayout-BKEfoJpg.js";
import _sfc_main$2 from "./BusinessForm-Cv3aofiW.js";
import { Head, useForm } from "@inertiajs/vue3";
import { createVNode, unref, useSSRContext, withCtx } from "vue";
import { ssrRenderComponent } from "vue/server-renderer";
//#region resources/js/Pages/Businesses/Create.vue
var _sfc_main = {
	__name: "Create",
	__ssrInlineRender: true,
	setup(__props) {
		const form = useForm({
			name: "",
			domain: "",
			email: "",
			phone: "",
			plan: "self_managed",
			status: "unknown",
			notes: ""
		});
		const submit = () => {
			form.post(route("businesses.store"));
		};
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<!--[-->`);
			_push(ssrRenderComponent(unref(Head), { title: "Add Business" }, null, _parent));
			_push(ssrRenderComponent(_sfc_main$1, null, {
				header: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(`<h2 class="text-xl font-semibold leading-tight text-white"${_scopeId}> Add Business </h2>`);
					else return [createVNode("h2", { class: "text-xl font-semibold leading-tight text-white" }, " Add Business ")];
				}),
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) {
						_push(`<div class="py-8"${_scopeId}><div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8"${_scopeId}><div class="rounded-2xl border border-white/5 bg-gray-900 p-6 sm:p-8"${_scopeId}>`);
						_push(ssrRenderComponent(_sfc_main$2, {
							form: unref(form),
							"submit-label": "Create Business",
							onSubmit: submit
						}, null, _parent, _scopeId));
						_push(`</div></div></div>`);
					} else return [createVNode("div", { class: "py-8" }, [createVNode("div", { class: "mx-auto max-w-3xl px-4 sm:px-6 lg:px-8" }, [createVNode("div", { class: "rounded-2xl border border-white/5 bg-gray-900 p-6 sm:p-8" }, [createVNode(_sfc_main$2, {
						form: unref(form),
						"submit-label": "Create Business",
						onSubmit: submit
					}, null, 8, ["form"])])])])];
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
	(ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Businesses/Create.vue");
	return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
//#endregion
export { _sfc_main as default };
