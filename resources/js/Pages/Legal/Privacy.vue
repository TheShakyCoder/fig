<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
  <Head title="Privacy Policy" />

  <div class="min-h-screen bg-gray-950">
    <!-- Subtle glow -->
    <div class="pointer-events-none absolute top-0 left-1/2 -translate-x-1/2 h-[400px] w-[600px] rounded-full bg-emerald-500/5 blur-3xl"></div>

    <div class="relative mx-auto max-w-3xl px-6 py-16 sm:px-8">
      <!-- Logo -->
      <div class="mb-12">
        <Link href="/">
          <span class="text-3xl font-bold tracking-tight text-white">fig<span class="text-emerald-400">.</span></span>
        </Link>
      </div>

      <!-- Header -->
      <h1 class="text-3xl font-bold text-white sm:text-4xl">Privacy Policy</h1>
      <p class="mt-2 text-sm text-gray-500">Last updated: 16 June 2026</p>

      <!-- Content -->
      <article class="mt-10 space-y-8 text-gray-300 leading-relaxed">

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">1. Who We Are</h2>
          <p>Fig Limited ("Fig", "we", "us", or "our") is a web design and hosting company registered in England. Our registered address is Penwortham, Preston, Lancashire. We are the data controller responsible for your personal data.</p>
          <p class="mt-3">If you have any questions about this privacy policy or how we handle your data, please contact us at <a href="mailto:support@fig.ltd.uk" class="text-emerald-400 hover:text-emerald-300">support@fig.ltd.uk</a> or by WhatsApp on 07515 382159.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">2. What Data We Collect</h2>

          <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mt-5 mb-2">Information you provide to us</h3>
          <ul class="list-disc list-inside space-y-1 text-sm">
            <li>Name, email address, phone number, and postcode when you submit our contact form.</li>
            <li>Business name, domain name, and other details when you become a client.</li>
            <li>Payment information when you subscribe to one of our plans (processed securely by our payment provider &mdash; we do not store card details).</li>
            <li>Any information you include in emails or messages to us.</li>
          </ul>

          <h3 class="text-sm font-semibold text-gray-400 uppercase tracking-wider mt-5 mb-2">Information collected automatically</h3>
          <ul class="list-disc list-inside space-y-1 text-sm">
            <li>Technical data such as your IP address, browser type and version, operating system, and device information.</li>
            <li>Usage data including pages visited, time spent on pages, and navigation paths.</li>
            <li>Cookie data &mdash; see Section 7 below for full details.</li>
          </ul>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">3. How We Use Your Data</h2>
          <ul class="space-y-2 text-sm">
            <li><strong class="text-white">To provide our services:</strong> Designing, building, hosting, and managing your website as agreed with you.</li>
            <li><strong class="text-white">To respond to enquiries:</strong> Replying to messages submitted through our contact form, email, or WhatsApp.</li>
            <li><strong class="text-white">To process payments:</strong> Invoicing for the Design &amp; Build fee and annual domain renewals.</li>
            <li><strong class="text-white">To improve our website:</strong> Analysing how visitors use our site so we can make it better.</li>
            <li><strong class="text-white">To comply with legal obligations:</strong> Meeting our legal and regulatory requirements under UK and EU law.</li>
          </ul>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">4. Legal Basis for Processing (GDPR)</h2>
          <p class="mb-3 text-sm">Under the UK General Data Protection Regulation (UK GDPR) and the Data Protection Act 2018, we rely on the following lawful bases:</p>
          <ul class="space-y-2 text-sm">
            <li><strong class="text-white">Consent:</strong> Where you have given clear consent for us to process your personal data for a specific purpose, such as submitting the contact form or accepting cookies.</li>
            <li><strong class="text-white">Contract:</strong> Where processing is necessary to perform a contract with you, or to take steps at your request before entering into a contract (e.g. providing hosting services).</li>
            <li><strong class="text-white">Legitimate interests:</strong> Where processing is necessary for our legitimate business interests, provided these are not overridden by your rights. This includes improving our services and website security.</li>
            <li><strong class="text-white">Legal obligation:</strong> Where we need to process your data to comply with a legal requirement.</li>
          </ul>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">5. Data Sharing</h2>
          <p class="mb-3 text-sm">We do not sell, rent, or trade your personal data. We may share your data with:</p>
          <ul class="list-disc list-inside space-y-1 text-sm">
            <li>Hosting infrastructure providers who help us deliver our services (servers, CDN, DNS).</li>
            <li>Payment processors for handling payments securely.</li>
            <li>Email service providers for transactional communications.</li>
            <li>Professional advisers including accountants and legal advisers where necessary.</li>
            <li>Law enforcement or regulatory bodies where required by law.</li>
          </ul>
          <p class="mt-3 text-sm">All third-party providers are required to process your data securely and in accordance with applicable data protection law.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">6. Data Retention</h2>
          <ul class="list-disc list-inside space-y-1 text-sm">
            <li>Contact form submissions are retained for 12 months unless you become a client, in which case they form part of your client record.</li>
            <li>Client data is retained for the duration of your contract and for 6 years afterwards (in line with HMRC requirements).</li>
            <li>Website analytics data is anonymised after 26 months.</li>
            <li>Cookie consent preferences are stored for 12 months.</li>
          </ul>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">7. Cookies</h2>
          <p class="text-sm">Our website uses cookies to ensure it functions correctly and to improve your experience. When you first visit our site, a cookie consent banner will ask for your permission before any non-essential cookies are set.</p>

          <div class="mt-4 overflow-hidden rounded-xl border border-white/10">
            <table class="w-full text-sm text-left">
              <thead class="bg-white/5">
                <tr>
                  <th class="px-4 py-2 text-gray-400 font-medium">Cookie</th>
                  <th class="px-4 py-2 text-gray-400 font-medium">Purpose</th>
                  <th class="px-4 py-2 text-gray-400 font-medium">Type</th>
                  <th class="px-4 py-2 text-gray-400 font-medium">Duration</th>
                </tr>
              </thead>
              <tbody class="divide-y divide-white/5">
                <tr>
                  <td class="px-4 py-2 text-white font-mono text-xs">cookie_consent</td>
                  <td class="px-4 py-2">Stores your cookie preference</td>
                  <td class="px-4 py-2">Essential</td>
                  <td class="px-4 py-2">12 months</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 text-white font-mono text-xs">XSRF-TOKEN</td>
                  <td class="px-4 py-2">CSRF protection</td>
                  <td class="px-4 py-2">Essential</td>
                  <td class="px-4 py-2">Session</td>
                </tr>
                <tr>
                  <td class="px-4 py-2 text-white font-mono text-xs">fig_session</td>
                  <td class="px-4 py-2">Maintains your logged-in session</td>
                  <td class="px-4 py-2">Essential</td>
                  <td class="px-4 py-2">Session</td>
                </tr>
              </tbody>
            </table>
          </div>
          <p class="mt-3 text-sm">You can control cookies through your browser settings. Disabling essential cookies may affect the functionality of our website.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">8. Your Rights Under GDPR</h2>
          <p class="mb-3 text-sm">Under the UK GDPR, you have the following rights in relation to your personal data:</p>
          <ul class="space-y-2 text-sm">
            <li><strong class="text-white">Right of access:</strong> You can request a copy of the personal data we hold about you.</li>
            <li><strong class="text-white">Right to rectification:</strong> You can ask us to correct inaccurate or incomplete data.</li>
            <li><strong class="text-white">Right to erasure:</strong> You can ask us to delete your data where there is no compelling reason to continue processing it.</li>
            <li><strong class="text-white">Right to restrict processing:</strong> You can ask us to suspend processing of your data in certain circumstances.</li>
            <li><strong class="text-white">Right to data portability:</strong> You can request your data in a structured, commonly used, machine-readable format.</li>
            <li><strong class="text-white">Right to object:</strong> You can object to processing based on legitimate interests or for direct marketing purposes.</li>
            <li><strong class="text-white">Right to withdraw consent:</strong> Where we rely on consent, you can withdraw it at any time without affecting the lawfulness of prior processing.</li>
          </ul>
          <p class="mt-3 text-sm">To exercise any of these rights, please email us at <a href="mailto:support@fig.ltd.uk" class="text-emerald-400 hover:text-emerald-300">support@fig.ltd.uk</a>. We will respond within one month. If you are not satisfied with how we handle your data, you have the right to lodge a complaint with the Information Commissioner's Office (ICO) at <a href="https://ico.org.uk" class="text-emerald-400 hover:text-emerald-300" target="_blank" rel="noopener">ico.org.uk</a>.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">9. Data Security</h2>
          <p class="text-sm">We take appropriate technical and organisational measures to protect your personal data against unauthorised access, alteration, disclosure, or destruction. These include SSL/TLS encryption on all pages, secure hosting infrastructure, regular security updates, and access controls limiting who can view personal data.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">10. International Transfers</h2>
          <p class="text-sm">Your data is primarily processed within the United Kingdom and European Economic Area. Where data is transferred outside the UK/EEA (for example, to infrastructure providers), we ensure appropriate safeguards are in place, such as Standard Contractual Clauses or adequacy decisions recognised by the UK government.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">11. Children's Privacy</h2>
          <p class="text-sm">Our services are not directed at individuals under 16 years of age. We do not knowingly collect personal data from children. If you believe we have collected data from a child, please contact us and we will delete it promptly.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">12. Changes to This Policy</h2>
          <p class="text-sm">We may update this privacy policy from time to time. Any changes will be posted on this page with an updated revision date. We encourage you to review this policy periodically.</p>
        </section>

        <section>
          <h2 class="text-lg font-semibold text-white mb-3">13. Contact Us</h2>
          <p class="text-sm">If you have any questions about this privacy policy, please contact us:</p>
          <div class="mt-3 text-sm">
            <p class="font-semibold text-white">Fig Limited</p>
            <p>Email: <a href="mailto:support@fig.ltd.uk" class="text-emerald-400 hover:text-emerald-300">support@fig.ltd.uk</a></p>
            <p>WhatsApp: 07515 382159</p>
            <p>Web: <a href="https://fig.ltd.uk" class="text-emerald-400 hover:text-emerald-300">fig.ltd.uk</a></p>
          </div>
        </section>
      </article>

      <!-- Footer -->
      <div class="mt-16 border-t border-white/5 pt-6 flex items-center justify-between text-xs text-gray-600">
        <p>&copy; {{ new Date().getFullYear() }} Fig Limited</p>
        <Link href="/terms" class="text-gray-500 hover:text-gray-400">Terms of Service</Link>
      </div>
    </div>
  </div>
</template>
