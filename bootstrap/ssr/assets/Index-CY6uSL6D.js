import { t as _sfc_main$1 } from "./AuthenticatedLayout-Di3BRzMd.js";
import { Head, Link, router } from "@inertiajs/vue3";
import { Fragment, createBlock, createCommentVNode, createTextVNode, createVNode, openBlock, ref, renderList, toDisplayString, unref, useSSRContext, vModelText, watch, withCtx, withDirectives } from "vue";
import { ssrInterpolate, ssrRenderAttr, ssrRenderClass, ssrRenderComponent, ssrRenderList } from "vue/server-renderer";
//#region resources/js/Pages/Businesses/Index.vue
var _sfc_main = {
	__name: "Index",
	__ssrInlineRender: true,
	props: {
		businesses: Object,
		filters: Object
	},
	setup(__props) {
		const search = ref(__props.filters?.search || "");
		watch(search, (value) => {
			router.get(route("businesses.index"), { search: value }, {
				preserveState: true,
				replace: true
			});
		});
		const planLabel = (plan) => ({
			self_managed: "Self Managed",
			fig_managed: "Fig Managed",
			fig_developed: "Fig Developed"
		})[plan] || "—";
		const statusColor = (status) => ({
			active: "bg-emerald-500/10 text-emerald-400",
			suspended: "bg-amber-500/10 text-amber-400",
			cancelled: "bg-red-500/10 text-red-400"
		})[status] || "text-gray-400";
		const destroy = (id) => {
			if (confirm("Are you sure you want to delete this business?")) router.delete(route("businesses.destroy", id));
		};
		return (_ctx, _push, _parent, _attrs) => {
			_push(`<!--[-->`);
			_push(ssrRenderComponent(unref(Head), { title: "Businesses" }, null, _parent));
			_push(ssrRenderComponent(_sfc_main$1, null, {
				header: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) {
						_push(`<div class="flex items-center justify-between"${_scopeId}><h2 class="text-xl font-semibold leading-tight text-white"${_scopeId}> Businesses </h2>`);
						_push(ssrRenderComponent(unref(Link), {
							href: _ctx.route("businesses.create"),
							class: "rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-gray-950 transition hover:bg-emerald-400"
						}, {
							default: withCtx((_, _push, _parent, _scopeId) => {
								if (_push) _push(` Add Business `);
								else return [createTextVNode(" Add Business ")];
							}),
							_: 1
						}, _parent, _scopeId));
						_push(`</div>`);
					} else return [createVNode("div", { class: "flex items-center justify-between" }, [createVNode("h2", { class: "text-xl font-semibold leading-tight text-white" }, " Businesses "), createVNode(unref(Link), {
						href: _ctx.route("businesses.create"),
						class: "rounded-xl bg-emerald-500 px-4 py-2 text-sm font-semibold text-gray-950 transition hover:bg-emerald-400"
					}, {
						default: withCtx(() => [createTextVNode(" Add Business ")]),
						_: 1
					}, 8, ["href"])])];
				}),
				default: withCtx((_, _push, _parent, _scopeId) => {
					if (_push) {
						_push(`<div class="py-8"${_scopeId}><div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8"${_scopeId}>`);
						if (_ctx.$page.props.flash?.success) _push(`<div class="mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-400"${_scopeId}>${ssrInterpolate(_ctx.$page.props.flash.success)}</div>`);
						else _push(`<!---->`);
						_push(`<div class="mb-6"${_scopeId}><input${ssrRenderAttr("value", search.value)} type="text" placeholder="Search businesses..." class="w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50 sm:max-w-xs"${_scopeId}></div><div class="overflow-hidden rounded-2xl border border-white/5 bg-gray-900"${_scopeId}><table class="w-full text-left text-sm"${_scopeId}><thead class="border-b border-white/5 text-xs uppercase tracking-wider text-gray-500"${_scopeId}><tr${_scopeId}><th class="px-6 py-4"${_scopeId}>Name</th><th class="px-6 py-4 hidden sm:table-cell"${_scopeId}>Domain</th><th class="px-6 py-4 hidden md:table-cell"${_scopeId}>Email</th><th class="px-6 py-4 hidden lg:table-cell"${_scopeId}>Plan</th><th class="px-6 py-4"${_scopeId}>Status</th><th class="px-6 py-4 text-right"${_scopeId}>Actions</th></tr></thead><tbody class="divide-y divide-white/5"${_scopeId}><!--[-->`);
						ssrRenderList(__props.businesses.data, (business) => {
							_push(`<tr class="transition hover:bg-white/[0.02]"${_scopeId}><td class="px-6 py-4"${_scopeId}>`);
							_push(ssrRenderComponent(unref(Link), {
								href: _ctx.route("businesses.show", business.id),
								class: "font-medium text-white hover:text-emerald-400 transition"
							}, {
								default: withCtx((_, _push, _parent, _scopeId) => {
									if (_push) _push(`${ssrInterpolate(business.name)}`);
									else return [createTextVNode(toDisplayString(business.name), 1)];
								}),
								_: 2
							}, _parent, _scopeId));
							_push(`</td><td class="px-6 py-4 text-gray-400 hidden sm:table-cell"${_scopeId}>${ssrInterpolate(business.domain || "—")}</td><td class="px-6 py-4 text-gray-400 hidden md:table-cell"${_scopeId}>${ssrInterpolate(business.email)}</td><td class="px-6 py-4 hidden lg:table-cell"${_scopeId}><span class="text-gray-400"${_scopeId}>${ssrInterpolate(planLabel(business.plan))}</span></td><td class="px-6 py-4"${_scopeId}><span class="${ssrRenderClass([statusColor(business.status), "inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium capitalize"])}"${_scopeId}>${ssrInterpolate(business.status)}</span></td><td class="px-6 py-4 text-right"${_scopeId}>`);
							_push(ssrRenderComponent(unref(Link), {
								href: _ctx.route("businesses.edit", business.id),
								class: "text-gray-400 transition hover:text-white mr-3"
							}, {
								default: withCtx((_, _push, _parent, _scopeId) => {
									if (_push) _push(` Edit `);
									else return [createTextVNode(" Edit ")];
								}),
								_: 2
							}, _parent, _scopeId));
							_push(`<button class="text-gray-400 transition hover:text-red-400"${_scopeId}> Delete </button></td></tr>`);
						});
						_push(`<!--]-->`);
						if (__props.businesses.data.length === 0) _push(`<tr${_scopeId}><td colspan="6" class="px-6 py-12 text-center text-gray-500"${_scopeId}> No businesses found. </td></tr>`);
						else _push(`<!---->`);
						_push(`</tbody></table></div>`);
						if (__props.businesses.last_page > 1) {
							_push(`<div class="mt-6 flex justify-center gap-2"${_scopeId}><!--[-->`);
							ssrRenderList(__props.businesses.links, (link) => {
								_push(`<!--[-->`);
								if (link.url) _push(ssrRenderComponent(unref(Link), {
									href: link.url,
									class: ["rounded-lg px-3 py-2 text-sm transition", link.active ? "bg-emerald-500 text-gray-950 font-semibold" : "text-gray-400 hover:bg-white/5 hover:text-white"]
								}, null, _parent, _scopeId));
								else _push(`<span class="rounded-lg px-3 py-2 text-sm text-gray-600"${_scopeId}>${link.label ?? ""}</span>`);
								_push(`<!--]-->`);
							});
							_push(`<!--]--></div>`);
						} else _push(`<!---->`);
						_push(`</div></div>`);
					} else return [createVNode("div", { class: "py-8" }, [createVNode("div", { class: "mx-auto max-w-7xl px-4 sm:px-6 lg:px-8" }, [
						_ctx.$page.props.flash?.success ? (openBlock(), createBlock("div", {
							key: 0,
							class: "mb-6 rounded-xl border border-emerald-500/20 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-400"
						}, toDisplayString(_ctx.$page.props.flash.success), 1)) : createCommentVNode("", true),
						createVNode("div", { class: "mb-6" }, [withDirectives(createVNode("input", {
							"onUpdate:modelValue": ($event) => search.value = $event,
							type: "text",
							placeholder: "Search businesses...",
							class: "w-full rounded-xl border border-white/10 bg-gray-800 px-4 py-3 text-sm text-white placeholder-gray-500 transition focus:border-emerald-500/50 focus:outline-none focus:ring-1 focus:ring-emerald-500/50 sm:max-w-xs"
						}, null, 8, ["onUpdate:modelValue"]), [[vModelText, search.value]])]),
						createVNode("div", { class: "overflow-hidden rounded-2xl border border-white/5 bg-gray-900" }, [createVNode("table", { class: "w-full text-left text-sm" }, [createVNode("thead", { class: "border-b border-white/5 text-xs uppercase tracking-wider text-gray-500" }, [createVNode("tr", null, [
							createVNode("th", { class: "px-6 py-4" }, "Name"),
							createVNode("th", { class: "px-6 py-4 hidden sm:table-cell" }, "Domain"),
							createVNode("th", { class: "px-6 py-4 hidden md:table-cell" }, "Email"),
							createVNode("th", { class: "px-6 py-4 hidden lg:table-cell" }, "Plan"),
							createVNode("th", { class: "px-6 py-4" }, "Status"),
							createVNode("th", { class: "px-6 py-4 text-right" }, "Actions")
						])]), createVNode("tbody", { class: "divide-y divide-white/5" }, [(openBlock(true), createBlock(Fragment, null, renderList(__props.businesses.data, (business) => {
							return openBlock(), createBlock("tr", {
								key: business.id,
								class: "transition hover:bg-white/[0.02]"
							}, [
								createVNode("td", { class: "px-6 py-4" }, [createVNode(unref(Link), {
									href: _ctx.route("businesses.show", business.id),
									class: "font-medium text-white hover:text-emerald-400 transition"
								}, {
									default: withCtx(() => [createTextVNode(toDisplayString(business.name), 1)]),
									_: 2
								}, 1032, ["href"])]),
								createVNode("td", { class: "px-6 py-4 text-gray-400 hidden sm:table-cell" }, toDisplayString(business.domain || "—"), 1),
								createVNode("td", { class: "px-6 py-4 text-gray-400 hidden md:table-cell" }, toDisplayString(business.email), 1),
								createVNode("td", { class: "px-6 py-4 hidden lg:table-cell" }, [createVNode("span", { class: "text-gray-400" }, toDisplayString(planLabel(business.plan)), 1)]),
								createVNode("td", { class: "px-6 py-4" }, [createVNode("span", { class: [statusColor(business.status), "inline-flex rounded-full px-2.5 py-0.5 text-xs font-medium capitalize"] }, toDisplayString(business.status), 3)]),
								createVNode("td", { class: "px-6 py-4 text-right" }, [createVNode(unref(Link), {
									href: _ctx.route("businesses.edit", business.id),
									class: "text-gray-400 transition hover:text-white mr-3"
								}, {
									default: withCtx(() => [createTextVNode(" Edit ")]),
									_: 1
								}, 8, ["href"]), createVNode("button", {
									onClick: ($event) => destroy(business.id),
									class: "text-gray-400 transition hover:text-red-400"
								}, " Delete ", 8, ["onClick"])])
							]);
						}), 128)), __props.businesses.data.length === 0 ? (openBlock(), createBlock("tr", { key: 0 }, [createVNode("td", {
							colspan: "6",
							class: "px-6 py-12 text-center text-gray-500"
						}, " No businesses found. ")])) : createCommentVNode("", true)])])]),
						__props.businesses.last_page > 1 ? (openBlock(), createBlock("div", {
							key: 1,
							class: "mt-6 flex justify-center gap-2"
						}, [(openBlock(true), createBlock(Fragment, null, renderList(__props.businesses.links, (link) => {
							return openBlock(), createBlock(Fragment, { key: link.label }, [link.url ? (openBlock(), createBlock(unref(Link), {
								key: 0,
								href: link.url,
								innerHTML: link.label,
								class: ["rounded-lg px-3 py-2 text-sm transition", link.active ? "bg-emerald-500 text-gray-950 font-semibold" : "text-gray-400 hover:bg-white/5 hover:text-white"]
							}, null, 8, [
								"href",
								"innerHTML",
								"class"
							])) : (openBlock(), createBlock("span", {
								key: 1,
								innerHTML: link.label,
								class: "rounded-lg px-3 py-2 text-sm text-gray-600"
							}, null, 8, ["innerHTML"]))], 64);
						}), 128))])) : createCommentVNode("", true)
					])])];
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
	(ssrContext.modules || (ssrContext.modules = /* @__PURE__ */ new Set())).add("resources/js/Pages/Businesses/Index.vue");
	return _sfc_setup ? _sfc_setup(props, ctx) : void 0;
};
//#endregion
export { _sfc_main as default };
