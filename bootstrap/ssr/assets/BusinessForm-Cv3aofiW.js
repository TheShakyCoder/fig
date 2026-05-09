import { n as _sfc_main$1, r as _sfc_main$3, t as _sfc_main$2 } from "./TextInput-C2E0wJPU.js";
import { t as PrimaryButton_default } from "./PrimaryButton-CZJY0X90.js";
import { Link } from "@inertiajs/vue3";
import { createTextVNode, mergeProps, toDisplayString, unref, useSSRContext, withCtx } from "vue";
import { ssrIncludeBooleanAttr, ssrInterpolate, ssrLooseContain, ssrLooseEqual, ssrRenderAttrs, ssrRenderComponent } from "vue/server-renderer";
//#region resources/js/Pages/Businesses/Partials/BusinessForm.vue
var _sfc_main = {
	__name: "BusinessForm",
	__ssrInlineRender: true,
	props: {
		form: Object,
		submitLabel: {
			type: String,
			default: "Save"
		}
	},
	emits: ["submit"],
	setup(__props) {
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<form${ssrRenderAttrs(mergeProps({ class: "space-y-6" }, _attrs))}><div class="grid gap-6 sm:grid-cols-2"><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "name",
				value: "Business Name"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$2, {
				id: "name",
				type: "text",
				class: "mt-1 block w-full",
				modelValue: __props.form.name,
				"onUpdate:modelValue": ($event) => __props.form.name = $event,
				required: "",
				placeholder: "Acme Ltd"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.name
			}, null, _parent));
			_push(`</div><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "domain",
				value: "Domain"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$2, {
				id: "domain",
				type: "text",
				class: "mt-1 block w-full",
				modelValue: __props.form.domain,
				"onUpdate:modelValue": ($event) => __props.form.domain = $event,
				placeholder: "acme.co.uk"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.domain
			}, null, _parent));
			_push(`</div><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "email",
				value: "Email"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$2, {
				id: "email",
				type: "email",
				class: "mt-1 block w-full",
				modelValue: __props.form.email,
				"onUpdate:modelValue": ($event) => __props.form.email = $event,
				required: "",
				placeholder: "john@acme.co.uk"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.email
			}, null, _parent));
			_push(`</div><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "phone",
				value: "Phone"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$2, {
				id: "phone",
				type: "text",
				class: "mt-1 block w-full",
				modelValue: __props.form.phone,
				"onUpdate:modelValue": ($event) => __props.form.phone = $event,
				placeholder: "07700 900000"
			}, null, _parent));
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.phone
			}, null, _parent));
			_push(`</div><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "plan",
				value: "Plan"
			}, null, _parent));
			_push(`<select id="plan" class="mt-1 w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"><option value="self_managed"${ssrIncludeBooleanAttr(Array.isArray(__props.form.plan) ? ssrLooseContain(__props.form.plan, "self_managed") : ssrLooseEqual(__props.form.plan, "self_managed")) ? " selected" : ""}>Self Managed — £20/month</option><option value="fig_managed"${ssrIncludeBooleanAttr(Array.isArray(__props.form.plan) ? ssrLooseContain(__props.form.plan, "fig_managed") : ssrLooseEqual(__props.form.plan, "fig_managed")) ? " selected" : ""}>Fig Managed — £50/month</option><option value="fig_developed"${ssrIncludeBooleanAttr(Array.isArray(__props.form.plan) ? ssrLooseContain(__props.form.plan, "fig_developed") : ssrLooseEqual(__props.form.plan, "fig_developed")) ? " selected" : ""}>Fig Developed — £200/month</option></select>`);
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.plan
			}, null, _parent));
			_push(`</div><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "status",
				value: "Status"
			}, null, _parent));
			_push(`<select id="status" class="mt-1 w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50"><option value="unknown"${ssrIncludeBooleanAttr(Array.isArray(__props.form.status) ? ssrLooseContain(__props.form.status, "unknown") : ssrLooseEqual(__props.form.status, "unknown")) ? " selected" : ""}>Unknown</option><option value="active"${ssrIncludeBooleanAttr(Array.isArray(__props.form.status) ? ssrLooseContain(__props.form.status, "active") : ssrLooseEqual(__props.form.status, "active")) ? " selected" : ""}>Active</option><option value="suspended"${ssrIncludeBooleanAttr(Array.isArray(__props.form.status) ? ssrLooseContain(__props.form.status, "suspended") : ssrLooseEqual(__props.form.status, "suspended")) ? " selected" : ""}>Suspended</option><option value="cancelled"${ssrIncludeBooleanAttr(Array.isArray(__props.form.status) ? ssrLooseContain(__props.form.status, "cancelled") : ssrLooseEqual(__props.form.status, "cancelled")) ? " selected" : ""}>Cancelled</option></select>`);
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.status
			}, null, _parent));
			_push(`</div></div><div>`);
			_push(ssrRenderComponent(_sfc_main$1, {
				for: "notes",
				value: "Notes"
			}, null, _parent));
			_push(`<textarea id="notes" rows="4" class="mt-1 w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50" placeholder="Any additional notes...">${ssrInterpolate(__props.form.notes)}</textarea>`);
			_push(ssrRenderComponent(_sfc_main$3, {
				class: "mt-2",
				message: __props.form.errors.notes
			}, null, _parent));
			_push(`</div><div class="flex items-center justify-end gap-4">`);
			_push(ssrRenderComponent(unref(Link), {
				href: _ctx.route("businesses.index"),
				class: "text-sm text-gray-400 transition hover:text-white"
			}, {
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(` Cancel `);
					else return [createTextVNode(" Cancel ")];
				}),
				_: 1
			}, _parent));
			_push(ssrRenderComponent(PrimaryButton_default, {
				class: ["!w-auto", { "opacity-25": __props.form.processing }],
				disabled: __props.form.processing
			}, {
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) _push(`${ssrInterpolate(__props.submitLabel)}`);
					else return [createTextVNode(toDisplayString(__props.submitLabel), 1)];
				}),
				_: 1
			}, _parent));
			_push(`</div></form>`);
		};
	}
};
var _sfc_setup = _sfc_main.setup;
_sfc_main.setup = (props, ctx) => {
	const ssrContext = useSSRContext();
	(ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Businesses/Partials/BusinessForm.vue");
	return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
//#endregion
export { _sfc_main as default };
