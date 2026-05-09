import { t as _sfc_main$1 } from "./AuthenticatedLayout-Di3BRzMd.js";
import { Head, Link, router } from "@inertiajs/vue3";
import { createBlock, createCommentVNode, createTextVNode, createVNode, openBlock, toDisplayString, unref, useSSRContext, withCtx } from "vue";
import { ssrInterpolate, ssrRenderAttr, ssrRenderClass, ssrRenderComponent } from "vue/server-renderer";
//#region resources/js/Pages/Businesses/Show.vue
var _sfc_main = {
	__name: "Show",
	__ssrInlineRender: true,
	props: { business: Object },
	setup(__props) {
		const props = __props;
		const planLabel = (plan) => ({
			self_managed: "Self Managed — £20/month",
			fig_managed: "Fig Managed — £50/month",
			fig_developed: "Fig Developed — £200/month"
		})[plan] || "—";
		const statusColor = (status) => ({
			active: "bg-emerald-500/10 text-emerald-400",
			suspended: "bg-amber-500/10 text-amber-400",
			cancelled: "bg-red-500/10 text-red-400"
		})[status] || "text-gray-400";
		const destroy = () => {
			if (confirm("Are you sure you want to delete this business?")) router.delete(route("businesses.destroy", props.business.id));
		};
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<!--[-->`);
			_push(ssrRenderComponent(unref(Head), { title: __props.business.name }, null, _parent));
			_push(ssrRenderComponent(_sfc_main$1, null, {
				header: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) {
						_push(`<div class="flex items-center justify-between"${_scopeId}><h2 class="text-xl font-semibold leading-tight text-white"${_scopeId}>${ssrInterpolate(__props.business.name)}</h2><div class="flex items-center gap-3"${_scopeId}><a${ssrRenderAttr("href", _ctx.route("businesses.flyer", __props.business.id))} class="rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-gray-950 transition hover:bg-emerald-400"${_scopeId}> Download Flyer </a>`);
						_push(ssrRenderComponent(unref(Link), {
							href: _ctx.route("businesses.edit", __props.business.id),
							class: "rounded-xl border border-white/10 bg-gray-800 px-4 py-2 text-sm font-medium text-white transition hover:bg-gray-700"
						}, {
							default: withCtx((_, _push, _parent, _scopeId) => {
								if (_push) _push(` Edit `);
								else return [createTextVNode(" Edit ")];
							}),
							_: 1
						}, _parent, _scopeId));
						_push(`<button class="rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-2 text-sm font-medium text-red-400 transition hover:bg-red-500/20"${_scopeId}> Delete </button></div></div>`);
					} else return [createVNode("div", { class: "flex items-center justify-between" }, [createVNode("h2", { class: "text-xl font-semibold leading-tight text-white" }, toDisplayString(__props.business.name), 1), createVNode("div", { class: "flex items-center gap-3" }, [
						createVNode("a", {
							href: _ctx.route("businesses.flyer", __props.business.id),
							class: "rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-gray-950 transition hover:bg-emerald-400"
						}, " Download Flyer ", 8, ["href"]),
						createVNode(unref(Link), {
							href: _ctx.route("businesses.edit", __props.business.id),
							class: "rounded-xl border border-white/10 bg-gray-800 px-4 py-2 text-sm font-medium text-white transition hover:bg-gray-700"
						}, {
							default: withCtx(() => [createTextVNode(" Edit ")]),
							_: 1
						}, 8, ["href"]),
						createVNode("button", {
							onClick: destroy,
							class: "rounded-xl border border-red-500/20 bg-red-500/10 px-4 py-2 text-sm font-medium text-red-400 transition hover:bg-red-500/20"
						}, " Delete ")
					])])];
				}),
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) {
						_push(`<div class="py-8"${_scopeId}><div class="mx-auto max-w-3xl px-4 sm:px-6 lg:px-8"${_scopeId}><div class="rounded-2xl border border-white/5 bg-gray-900 p-6 sm:p-8"${_scopeId}><dl class="space-y-6"${_scopeId}><div class="grid gap-6 sm:grid-cols-2"${_scopeId}><div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Business Name</dt><dd class="mt-1 text-white"${_scopeId}>${ssrInterpolate(__props.business.name)}</dd></div><div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Domain</dt><dd class="mt-1 text-white"${_scopeId}>`);
						if (__props.business.domain) _push(`<a${ssrRenderAttr("href", `https://${__props.business.domain}`)} target="_blank" class="text-emerald-400 hover:text-emerald-300 transition"${_scopeId}>${ssrInterpolate(__props.business.domain)}</a>`);
						else _push(`<span class="text-gray-600"${_scopeId}>—</span>`);
						_push(`</dd></div><div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Email</dt><dd class="mt-1"${_scopeId}><a${ssrRenderAttr("href", `mailto:${__props.business.email}`)} class="text-emerald-400 hover:text-emerald-300 transition"${_scopeId}>${ssrInterpolate(__props.business.email)}</a></dd></div><div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Phone</dt><dd class="mt-1 text-white"${_scopeId}>${ssrInterpolate(__props.business.phone || "—")}</dd></div><div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Plan</dt><dd class="mt-1 text-white"${_scopeId}>${ssrInterpolate(planLabel(__props.business.plan))}</dd></div><div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Status</dt><dd class="mt-1"${_scopeId}><span class="${ssrRenderClass([statusColor(__props.business.status), "inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium capitalize"])}"${_scopeId}>${ssrInterpolate(__props.business.status)}</span></dd></div></div>`);
						if (__props.business.notes) _push(`<div${_scopeId}><dt class="text-sm text-gray-500"${_scopeId}>Notes</dt><dd class="mt-1 whitespace-pre-line text-gray-300"${_scopeId}>${ssrInterpolate(__props.business.notes)}</dd></div>`);
						else _push(`<!---->`);
						_push(`</dl></div><div class="mt-6"${_scopeId}>`);
						_push(ssrRenderComponent(unref(Link), {
							href: _ctx.route("businesses.index"),
							class: "text-sm text-gray-400 transition hover:text-white"
						}, {
							default: withCtx((_, _push, _parent, _scopeId) => {
								if (_push) _push(` ← Back to Businesses `);
								else return [createTextVNode(" ← Back to Businesses ")];
							}),
							_: 1
						}, _parent, _scopeId));
						_push(`</div></div></div>`);
					} else return [createVNode("div", { class: "py-8" }, [createVNode("div", { class: "mx-auto max-w-3xl px-4 sm:px-6 lg:px-8" }, [createVNode("div", { class: "rounded-2xl border border-white/5 bg-gray-900 p-6 sm:p-8" }, [createVNode("dl", { class: "space-y-6" }, [createVNode("div", { class: "grid gap-6 sm:grid-cols-2" }, [
						createVNode("div", null, [createVNode("dt", { class: "text-sm text-gray-500" }, "Business Name"), createVNode("dd", { class: "mt-1 text-white" }, toDisplayString(__props.business.name), 1)]),
						createVNode("div", null, [createVNode("dt", { class: "text-sm text-gray-500" }, "Domain"), createVNode("dd", { class: "mt-1 text-white" }, [__props.business.domain ? (openBlock(), createBlock("a", {
							key: 0,
							href: `https://${__props.business.domain}`,
							target: "_blank",
							class: "text-emerald-400 hover:text-emerald-300 transition"
						}, toDisplayString(__props.business.domain), 9, ["href"])) : (openBlock(), createBlock("span", {
							key: 1,
							class: "text-gray-600"
						}, "—"))])]),
						createVNode("div", null, [createVNode("dt", { class: "text-sm text-gray-500" }, "Email"), createVNode("dd", { class: "mt-1" }, [createVNode("a", {
							href: `mailto:${__props.business.email}`,
							class: "text-emerald-400 hover:text-emerald-300 transition"
						}, toDisplayString(__props.business.email), 9, ["href"])])]),
						createVNode("div", null, [createVNode("dt", { class: "text-sm text-gray-500" }, "Phone"), createVNode("dd", { class: "mt-1 text-white" }, toDisplayString(__props.business.phone || "—"), 1)]),
						createVNode("div", null, [createVNode("dt", { class: "text-sm text-gray-500" }, "Plan"), createVNode("dd", { class: "mt-1 text-white" }, toDisplayString(planLabel(__props.business.plan)), 1)]),
						createVNode("div", null, [createVNode("dt", { class: "text-sm text-gray-500" }, "Status"), createVNode("dd", { class: "mt-1" }, [createVNode("span", { class: [statusColor(__props.business.status), "inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium capitalize"] }, toDisplayString(__props.business.status), 3)])])
					]), __props.business.notes ? (openBlock(), createBlock("div", { key: 0 }, [createVNode("dt", { class: "text-sm text-gray-500" }, "Notes"), createVNode("dd", { class: "mt-1 whitespace-pre-line text-gray-300" }, toDisplayString(__props.business.notes), 1)])) : createCommentVNode("", true)])]), createVNode("div", { class: "mt-6" }, [createVNode(unref(Link), {
						href: _ctx.route("businesses.index"),
						class: "text-sm text-gray-400 transition hover:text-white"
					}, {
						default: withCtx(() => [createTextVNode(" ← Back to Businesses ")]),
						_: 1
					}, 8, ["href"])])])])];
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
	(ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Businesses/Show.vue");
	return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
//#endregion
export { _sfc_main as default };
