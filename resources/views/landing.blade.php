<x-layouts.app :title="'P.A.T.A.G. | Landing'">
  <div class="min-h-screen bg-[#1f1f1f] py-8">
    <div class="max-w-4xl mx-auto px-4">
      <div class="rounded-[28px] bg-white overflow-hidden shadow-2xl">
        <div class="px-6 py-4 bg-white border-b">
          <div class="flex items-center justify-center">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 rounded-full bg-[#d9c6a4] px-4 py-2 text-xs text-[#3a2c1d] shadow">
              <span class="inline-block h-2 w-2 rounded-full bg-white"></span>
              <span>Search</span>
              <span class="rounded-full bg-white/80 px-2 py-0.5 text-[10px]">Index</span>
            </a>
          </div>
        </div>

        <div class="relative">
          <div class="h-40 bg-gradient-to-r from-[#2f5a40] via-[#8c5f42] to-[#c3a08d]"></div>
          <div class="absolute inset-x-0 top-6 flex items-center justify-center gap-6 text-white">
            <div class="h-16 w-16 rounded-full bg-white/20 flex items-center justify-center">🛡️</div>
            <div>
              <p class="text-2xl font-serif tracking-widest">P.A.T.A.G.</p>
              <p class="text-sm text-white/80">Truth is a public utility.</p>
            </div>
          </div>
        </div>

        <div class="px-8 py-6">
          <div class="grid grid-cols-4 gap-4">
            <div class="h-20 rounded-xl bg-[#d6d6d6]"></div>
            <div class="h-20 rounded-xl bg-[#d6d6d6]"></div>
            <div class="h-20 rounded-xl bg-[#d6d6d6]"></div>
            <div class="h-20 rounded-xl bg-[#d6d6d6]"></div>
          </div>

          <div class="mt-6 text-sm text-[#3d2f24]">
            <p class="font-semibold">PATAG — Public Access for Truth, Alliances, and Governance — is the open Filipino civic platform that follows every peso, every bill, and every politician across the four branches of government.</p>
            <div class="mt-4 text-xs text-[#5b4a3a] space-y-1">
              <p>01 — Search anything below</p>
              <p>02 — Save today’s front page</p>
              <p>03 — Take action in your district</p>
            </div>
            <div class="mt-4 text-xs text-[#5b4a3a]">Goal: Secure + fact-check + infos. Reports + trends</div>
          </div>

          <nav class="mt-6 flex flex-wrap gap-3" aria-label="Primary account and navigation links">
            <a href="{{ route('login') }}" class="px-5 py-2 rounded-full bg-[#2a1c14] text-white text-xs font-semibold">Login</a>
            <a href="{{ route('register') }}" class="px-5 py-2 rounded-full bg-[#6a4a38] text-white text-xs font-semibold">Create account</a>
            <a href="{{ route('hub.index') }}" class="px-5 py-2 rounded-full bg-[#efe4da] text-[#3d2f24] text-xs font-semibold">Action Hub</a>
          </nav>

          <div class="mt-6">
            <p class="font-serif text-lg text-[#7a4b1e]">Today across the four branches.</p>
            <div class="mt-4 space-y-3">
              <a href="{{ route('officials.index') }}" class="h-14 rounded-2xl bg-gradient-to-r from-[#7b3f1a] to-[#2d1a0f] block"></a>
              <a href="{{ route('bills.index') }}" class="h-14 rounded-2xl bg-[#6a6d74] block"></a>
              <a href="{{ route('news') }}" class="h-14 rounded-2xl bg-[#cfc9c6] block"></a>
              <a href="{{ route('dashboard') }}" class="h-14 rounded-2xl bg-[#a09085] block"></a>
            </div>
          </div>
        </div>

        <div class="bg-gradient-to-r from-[#2f5a40] via-[#81492b] to-[#c7805b] px-8 py-8 text-white">
          <div class="grid grid-cols-5 gap-6 text-xs">
            <div>
              <p class="font-semibold">Nametly</p>
              <a href="{{ route('landing') }}" class="mt-2 text-white/70 block">Home</a>
              <a href="{{ route('service') }}" class="text-white/70 block">Service</a>
              <a href="{{ route('hub.index') }}" class="text-white/70 block">Agenda</a>
              <a href="{{ route('methodology') }}" class="text-white/70 block">Developers</a>
            </div>
            <div>
              <p class="font-semibold">Platform</p>
              <a href="{{ route('profile.activity') }}" class="mt-2 text-white/70 block">Individuals</a>
              <a href="{{ route('dashboard') }}" class="text-white/70 block">Teams</a>
              <a href="{{ route('news') }}" class="text-white/70 block">Investigations</a>
            </div>
            <div>
              <p class="font-semibold">Features</p>
              <a href="{{ route('officials.index') }}" class="mt-2 text-white/70 block">Case studies</a>
              <a href="{{ route('hub.surveys') }}" class="text-white/70 block">New explorations</a>
              <a href="{{ route('hub.budget') }}" class="text-white/70 block">Dataverse</a>
              <a href="{{ route('methodology') }}" class="text-white/70 block">Best practices</a>
            </div>
            <div>
              <p class="font-semibold">Learn more</p>
              <a href="{{ route('about') }}" class="mt-2 text-white/70 block">FAQ</a>
              <a href="{{ route('news') }}" class="text-white/70 block">Case studies</a>
              <a href="{{ route('methodology') }}" class="text-white/70 block">Best practices</a>
            </div>
            <div>
              <p class="font-semibold">Support</p>
              <a href="{{ route('contact') }}" class="mt-2 text-white/70 block">Contact</a>
              <a href="{{ route('service') }}" class="text-white/70 block">Support</a>
              <a href="{{ route('profile.privacy') }}" class="text-white/70 block">Legal</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
