<x-layouts.app :title="'PATAG | Bill Detail'">
  <div class="min-h-screen bg-[#f6f1ec]">
    <div class="patag-gradient text-white">
      <div class="max-w-6xl mx-auto px-6 py-10">
        <a href="{{ route('bills.index') }}" class="text-sm text-white/70">← All Bills</a>
        <div class="mt-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
          <div>
            <div class="flex items-center gap-2 text-xs">
              <span class="patag-pill px-3 py-1 rounded-full">B11</span>
              <span class="patag-pill px-3 py-1 rounded-full">Category</span>
            </div>
            <h1 class="text-3xl font-serif mt-3">Bill Title</h1>
            <p class="text-sm text-white/70">Brief description of the bill.</p>
            <div class="flex gap-2 mt-4">
              <button class="px-4 py-2 rounded-full bg-white/10 text-xs">Approve</button>
              <button class="px-4 py-2 rounded-full bg-white/10 text-xs">Disapprove</button>
              <button class="px-4 py-2 rounded-full bg-white/10 text-xs">Bookmark</button>
            </div>
          </div>
          <div class="text-xs text-white/60">Filed: 2025-01-10</div>
        </div>
      </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-10 grid lg:grid-cols-[2fr_1fr] gap-6">
      <div class="space-y-6">
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">Legislative process</p>
          <div class="mt-4 grid grid-cols-2 md:grid-cols-5 gap-4 text-xs text-[#5a4636]">
            @foreach(['Filed', 'House', 'Senate', 'President', 'Enacted'] as $stage)
            <div class="flex items-center gap-3">
              <div class="w-8 h-8 rounded-full border border-[#bba494] flex items-center justify-center">@if($stage === 'House')✓@endif</div>
              <span>{{ $stage }}</span>
            </div>
            @endforeach
          </div>
        </div>
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">Summary</p>
          <h2 class="font-semibold mt-3">What this bill does</h2>
          <p class="text-sm text-[#5a4636] mt-2">Full description and context goes here. This section can be populated with official legislative summaries.</p>
        </div>
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">In the news</p>
          <div class="mt-3 rounded-2xl border border-[#e2d6cc] p-4">
            <p class="text-sm font-semibold">News title about the bill</p>
            <p class="text-xs text-[#7a5e48] mt-2">News media • Timestamp</p>
          </div>
        </div>
      </div>
      <aside class="space-y-6">
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">Direct attribution</p>
          <div class="mt-3 space-y-2">
            <div class="rounded-full bg-[#efe4da] px-4 py-2 text-sm">Name</div>
            <div class="rounded-full bg-[#efe4da] px-4 py-2 text-sm">Name</div>
          </div>
        </div>
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">Public pulse</p>
          <div class="mt-4 space-y-3 text-xs text-[#5a4636]">
            <div>
              <div class="flex justify-between"><span>Approved</span><span>64%</span></div>
              <div class="h-2 rounded-full bg-[#efe4da] overflow-hidden"><div class="h-full w-2/3 bg-emerald-500"></div></div>
            </div>
            <div>
              <div class="flex justify-between"><span>Disapproved</span><span>36%</span></div>
              <div class="h-2 rounded-full bg-[#efe4da] overflow-hidden"><div class="h-full w-1/3 bg-rose-500"></div></div>
            </div>
          </div>
        </div>
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">Take action</p>
          <p class="text-sm text-[#5a4636] mt-3">Tell where you stand and send a templated message to lawmakers handling this bill.</p>
          <button class="mt-4 w-full bg-patag-700 text-white py-2 rounded-full text-sm">Open Pressure Hub</button>
        </div>
      </aside>
    </div>
  </div>
</x-layouts.app>
