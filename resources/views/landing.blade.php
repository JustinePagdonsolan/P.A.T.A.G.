<x-layouts.app :title="'P.A.T.A.G. | Landing'">
  <div class="min-h-screen patag-gradient text-white">
    <header class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="w-12 h-12 rounded-2xl bg-white/20 flex items-center justify-center text-lg font-semibold">P</div>
        <div>
          <p class="text-sm uppercase tracking-[0.25em] text-white/70">P.A.T.A.G.</p>
          <p class="font-serif text-lg">Truth is a public utility.</p>
        </div>
      </div>
      <nav class="hidden md:flex items-center gap-6 text-sm text-white/80">
        <a href="{{ route('landing') }}" class="text-white font-medium">Home</a>
        <a href="#" class="hover:text-white">Dashboard</a>
        <a href="{{ route('bills.index') }}" class="hover:text-white">Bills</a>
        <a href="{{ route('officials.index') }}" class="hover:text-white">Officials</a>
        <a href="{{ route('login') }}" class="px-4 py-2 rounded-full bg-white/15 hover:bg-white/25">Login</a>
      </nav>
    </header>

    <section class="max-w-6xl mx-auto px-6 pb-16">
      <div class="bg-white/15 rounded-3xl p-8 md:p-12 shadow-soft">
        <div class="flex flex-col lg:flex-row gap-10 items-center">
          <div class="flex-1 space-y-6">
            <div class="inline-flex items-center gap-2 rounded-full bg-white/20 px-4 py-2 text-sm">
              <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
              Trusted, verified, non-partisan data hub
            </div>
            <h1 class="text-4xl md:text-5xl font-serif">Public Access to Truth, Alliances, and Governance</h1>
            <p class="text-white/80 text-lg">
              PATAG is an open Filipino civic platform that follows every peso, every bill, and every politician across the four branches of government.
            </p>
            <div class="flex flex-col md:flex-row gap-3">
              <div class="flex-1 flex items-center bg-white/10 rounded-full px-4 py-3">
                <input class="bg-transparent flex-1 outline-none text-sm" placeholder="Search officials, bills, agencies" />
                <span class="text-white/60 text-sm">⌘K</span>
              </div>
              <button class="bg-white text-patag-900 px-6 py-3 rounded-full text-sm font-semibold">Search</button>
            </div>
            <div class="flex flex-wrap gap-4 text-sm text-white/70">
              <div>01 — Search anything below</div>
              <div>02 — Save to your page</div>
              <div>03 — Take action in your district</div>
            </div>
          </div>
          <div class="flex-1 w-full">
            <div class="grid grid-cols-2 gap-4">
              <div class="rounded-2xl bg-white/20 p-4">
                <p class="text-xs text-white/70">Latest RA</p>
                <p class="font-semibold">RA 11999</p>
                <p class="text-xs text-white/60 mt-2">Signed 2 hrs ago</p>
              </div>
              <div class="rounded-2xl bg-white/20 p-4">
                <p class="text-xs text-white/70">Urgent Bill</p>
                <p class="font-semibold">S.B. 2111</p>
                <p class="text-xs text-white/60 mt-2">Committee hearing</p>
              </div>
              <div class="rounded-2xl bg-white/20 p-4">
                <p class="text-xs text-white/70">COA Flag</p>
                <p class="font-semibold">DPWH Audit</p>
                <p class="text-xs text-white/60 mt-2">3 red flags</p>
              </div>
              <div class="rounded-2xl bg-white/20 p-4">
                <p class="text-xs text-white/70">Top Issue</p>
                <p class="font-semibold">Rice Tariffication</p>
                <p class="text-xs text-white/60 mt-2">Public pulse +12%</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="max-w-6xl mx-auto px-6 py-16">
    <div class="grid md:grid-cols-3 gap-6">
      <div class="patag-card rounded-3xl p-6">
        <h3 class="font-serif text-xl">Fact-checked official profiles</h3>
        <p class="text-sm text-[#5a4636] mt-3">Neutral, verified, cross-referenced profiles of public officials nationwide.</p>
        <a href="{{ route('officials.index') }}" class="text-sm font-semibold mt-6 inline-flex items-center gap-2">View officials →</a>
      </div>
      <div class="patag-card rounded-3xl p-6">
        <h3 class="font-serif text-xl">Legislative progress tracker</h3>
        <p class="text-sm text-[#5a4636] mt-3">Track bills from filing to enactment with visual timelines.</p>
        <a href="{{ route('bills.index') }}" class="text-sm font-semibold mt-6 inline-flex items-center gap-2">Track bills →</a>
      </div>
      <div class="patag-card rounded-3xl p-6">
        <h3 class="font-serif text-xl">Public pulse analytics</h3>
        <p class="text-sm text-[#5a4636] mt-3">See anonymized insights by region, occupation, and sector.</p>
        <a href="#" class="text-sm font-semibold mt-6 inline-flex items-center gap-2">View analytics →</a>
      </div>
    </div>
  </section>

  <section class="max-w-6xl mx-auto px-6 pb-16">
    <h2 class="font-serif text-2xl">Today across the four branches</h2>
    <div class="grid md:grid-cols-2 gap-6 mt-6">
      <div class="rounded-3xl bg-patag-900 text-white p-6">
        <h3 class="font-semibold">Executive Desk</h3>
        <p class="text-sm text-white/70 mt-2">New executive orders and updated promise tracker.</p>
      </div>
      <div class="rounded-3xl bg-patag-800 text-white p-6">
        <h3 class="font-semibold">Legislative Desk</h3>
        <p class="text-sm text-white/70 mt-2">Bills under deliberation with live committee status.</p>
      </div>
      <div class="rounded-3xl bg-patag-700 text-white p-6">
        <h3 class="font-semibold">Accountability Desk</h3>
        <p class="text-sm text-white/70 mt-2">COA red flags and ombudsman updates.</p>
      </div>
      <div class="rounded-3xl bg-patag-600 text-white p-6">
        <h3 class="font-semibold">Alliances Desk</h3>
        <p class="text-sm text-white/70 mt-2">Political networks and party shifts mapped.</p>
      </div>
    </div>
  </section>

  <footer class="bg-patag-900 text-white">
    <div class="max-w-6xl mx-auto px-6 py-10 grid md:grid-cols-4 gap-8 text-sm">
      <div>
        <p class="font-semibold">PATAG</p>
        <p class="text-white/70 mt-2">Public Access for Truth, Alliances, and Governance</p>
      </div>
      <div>
        <p class="font-semibold">Platform</p>
        <ul class="mt-3 space-y-2 text-white/70">
          <li>Methodology</li>
          <li>Data sources</li>
          <li>Transparency policy</li>
        </ul>
      </div>
      <div>
        <p class="font-semibold">Learn more</p>
        <ul class="mt-3 space-y-2 text-white/70">
          <li>FAQ</li>
          <li>Case studies</li>
          <li>Best practices</li>
        </ul>
      </div>
      <div>
        <p class="font-semibold">Support</p>
        <ul class="mt-3 space-y-2 text-white/70">
          <li>Contact</li>
          <li>Legal</li>
          <li>Report an issue</li>
        </ul>
      </div>
    </div>
  </footer>
</x-layouts.app>
