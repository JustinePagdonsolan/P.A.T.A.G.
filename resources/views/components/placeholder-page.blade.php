@props([
  'title' => 'PATAG | Placeholder',
  'eyebrow' => 'PATAG Placeholder',
  'headline' => 'Coming soon',
  'description' => 'This page is a styled placeholder while full data integrations are in progress.',
  'cards' => [],
])

<x-layouts.app :title="$title">
  <div class="min-h-screen bg-[#f6f1ec]">
    <div class="patag-gradient text-white">
      <div class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center">P</div>
          <span class="font-semibold">PATAG</span>
        </div>
        <nav class="hidden md:flex items-center gap-3 text-sm">
          <a href="{{ route('landing') }}" class="px-4 py-2 rounded-full bg-white/10">Home</a>
          <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-full bg-white/10">Dashboard</a>
          <a href="{{ route('news') }}" class="px-4 py-2 rounded-full bg-white/10">News</a>
          <a href="{{ route('hub.index') }}" class="px-4 py-2 rounded-full bg-white/10">Action Hub</a>
          <a href="{{ route('profile.index') }}" class="px-4 py-2 rounded-full bg-white/10">Profile</a>
        </nav>
      </div>
      <div class="max-w-6xl mx-auto px-6 pb-10">
        <p class="text-xs uppercase tracking-[0.2em] text-white/70">{{ $eyebrow }}</p>
        <h1 class="font-serif text-4xl mt-3">{{ $headline }}</h1>
        <p class="text-sm text-white/75 mt-3 max-w-3xl">{{ $description }}</p>
      </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-10 grid lg:grid-cols-[2fr_1fr] gap-6">
      <main class="space-y-4">
        <div class="patag-card rounded-3xl p-6">
          <p class="text-xs uppercase tracking-wide text-[#7a5e48]">Feature preview</p>
          <div class="mt-4 h-44 rounded-2xl bg-gradient-to-br from-[#d8c6b8] to-[#b2947d]"></div>
        </div>
        <div class="grid md:grid-cols-2 gap-4">
          @foreach($cards as $card)
            <div class="patag-card rounded-3xl p-5">
              <h2 class="font-serif text-xl">{{ $card['title'] }}</h2>
              <p class="text-sm text-[#5a4636] mt-2">{{ $card['copy'] }}</p>
            </div>
          @endforeach
        </div>
      </main>

      <aside class="space-y-4">
        <div class="patag-card rounded-3xl p-5">
          <p class="text-xs uppercase tracking-wide text-[#7a5e48]">Quick links</p>
          <div class="mt-3 space-y-2 text-sm">
            <a href="{{ route('methodology') }}" class="block rounded-full bg-[#efe4da] px-4 py-2">Data Methodology</a>
            <a href="{{ route('profile.privacy') }}" class="block rounded-full bg-[#efe4da] px-4 py-2">Privacy / Security</a>
            <a href="{{ route('profile.notifications') }}" class="block rounded-full bg-[#efe4da] px-4 py-2">Notifications</a>
            <a href="{{ route('contact') }}" class="block rounded-full bg-[#efe4da] px-4 py-2">Contact PATAG</a>
          </div>
        </div>
        <div class="patag-card rounded-3xl p-5 text-sm text-[#5a4636]">
          <p class="font-semibold">Static preview mode</p>
          <p class="mt-2">This page intentionally has no backend logic yet. It is route-complete for navigation and design review.</p>
        </div>
      </aside>
    </div>
  </div>
</x-layouts.app>
