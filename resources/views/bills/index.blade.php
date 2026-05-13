<x-layouts.app :title="'PATAG | Legislative Tracker'">
  <div class="min-h-screen bg-[#f6f1ec]">
    <div class="patag-gradient text-white">
      <div class="max-w-6xl mx-auto px-6 py-10">
        <div class="flex items-center gap-4">
          <div class="w-16 h-16 rounded-2xl bg-white/10 flex items-center justify-center">⚖️</div>
          <div>
            <h1 class="text-2xl font-serif">Legislative Progress Tracker</h1>
            <p class="text-sm text-white/70">Every bill. Every stage. Every author.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-10 space-y-6">
      @foreach(range(1, 3) as $i)
      <div class="patag-card rounded-3xl p-6">
        <div class="flex items-center justify-between text-xs text-[#7a5e48]">
          <div class="flex items-center gap-2">
            <span class="patag-pill px-3 py-1 rounded-full">B11</span>
            <span class="patag-pill px-3 py-1 rounded-full">Category</span>
          </div>
          <span>Filed: 2025-01-10</span>
        </div>
        <div class="mt-4">
          <h2 class="text-lg font-semibold">Bill Title</h2>
          <p class="text-sm text-[#5a4636]">Brief description of the bill and its civic focus.</p>
        </div>
        <div class="mt-6">
          <p class="text-xs text-[#7a5e48] uppercase tracking-wide">Legislative Process</p>
          <div class="mt-3 flex items-center justify-between text-xs text-[#5a4636]">
            @foreach(['Filed', 'House', 'Senate', 'President', 'Enacted'] as $stage)
            <div class="flex flex-col items-center gap-2">
              <div class="w-6 h-6 rounded-full border border-[#bba494] flex items-center justify-center">@if($stage === 'Senate')✓@endif</div>
              <span>{{ $stage }}</span>
            </div>
            @endforeach
          </div>
        </div>
        <div class="mt-6 flex items-center justify-between text-xs text-[#7a5e48]">
          <div class="flex items-center gap-2">
            <span class="patag-pill px-3 py-1 rounded-full">Authored by</span>
            <span class="patag-pill px-3 py-1 rounded-full">Name</span>
            <span class="patag-pill px-3 py-1 rounded-full">Name</span>
          </div>
          <div class="flex gap-2">
            <button class="w-8 h-8 rounded-full bg-[#f0e7df]">👍</button>
            <button class="w-8 h-8 rounded-full bg-[#f0e7df]">👎</button>
            <button class="w-8 h-8 rounded-full bg-[#f0e7df]">🔖</button>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</x-layouts.app>
