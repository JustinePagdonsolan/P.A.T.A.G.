<x-layouts.app :title="'PATAG | Government Officials'">
  <div class="min-h-screen bg-[#f6f1ec]">
    <div class="patag-gradient text-white">
      <div class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <nav class="flex items-center gap-3 text-sm">
          <a href="{{ route('landing') }}" class="px-4 py-2 rounded-full bg-white/10">Home</a>
          <a href="{{ route('dashboard') }}" class="px-4 py-2 rounded-full bg-white/10">Dashboard</a>
          <a href="{{ route('news') }}" class="px-4 py-2 rounded-full bg-white/10">News</a>
          <a href="{{ route('bills.index') }}" class="px-4 py-2 rounded-full bg-white/10">Bills</a>
          <a href="{{ route('officials.index') }}" class="px-4 py-2 rounded-full bg-emerald-500/80 text-white">Officials</a>
        </nav>
        <div class="flex items-center gap-4 text-sm text-white/80">
          <span>Alangilan, Batangas</span>
          <a href="{{ route('profile.index') }}" class="w-8 h-8 rounded-full bg-white/20 block"></a>
        </div>
      </div>
      <div class="max-w-6xl mx-auto px-6 pb-10">
        <h1 class="text-3xl font-serif text-center">P.A.T.A.G.</h1>
        <p class="text-center text-white/70">Search and explore verified government officials nationwide</p>
        <form class="mt-6 flex flex-col md:flex-row gap-3 justify-center" action="{{ route('officials.index') }}" method="GET">
          <input class="w-full md:w-72 rounded-full px-4 py-3 text-sm text-[#2a1c14]" placeholder="Search Government Official or Keyword" name="q" />
          <input class="w-full md:w-48 rounded-full px-4 py-3 text-sm text-[#2a1c14]" placeholder="Location" name="location" />
          <button class="bg-emerald-500 text-white px-6 py-3 rounded-full text-sm font-semibold">Search</button>
        </form>
      </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-10 grid md:grid-cols-[240px_1fr] gap-6">
      <aside class="space-y-6">
        <div class="rounded-3xl bg-patag-800 text-white p-5">
          <p class="font-semibold">Stay informed</p>
          <p class="text-xs text-white/70 mt-2">On pending and approved laws</p>
          <a href="{{ route('hub.budget') }}" class="mt-4 w-full bg-white/15 px-4 py-2 rounded-full text-xs inline-flex justify-center">View Tracker</a>
        </div>
        <div class="patag-card rounded-3xl p-5">
          <p class="text-sm font-semibold">Filters</p>
          <div class="mt-3 space-y-3 text-xs text-[#5a4636]">
            <div>
              <p class="font-semibold">Status</p>
              <label class="flex items-center gap-2 mt-1"><input type="checkbox" /> Active</label>
              <label class="flex items-center gap-2"><input type="checkbox" /> Appointed</label>
              <label class="flex items-center gap-2"><input type="checkbox" /> Elected</label>
            </div>
            <div>
              <p class="font-semibold">Branch</p>
              <label class="flex items-center gap-2 mt-1"><input type="checkbox" /> Executive</label>
              <label class="flex items-center gap-2"><input type="checkbox" /> Legislative</label>
              <label class="flex items-center gap-2"><input type="checkbox" /> Judicial</label>
            </div>
          </div>
        </div>
      </aside>
      <main>
        <div class="flex items-center justify-between">
          <h2 class="font-serif text-xl">Government Officials</h2>
          <select class="rounded-full px-3 py-2 text-sm">
            <option>Sort by</option>
            <option>Most viewed</option>
            <option>Recently updated</option>
          </select>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-4 mt-6">
          @foreach(range(1, 9) as $i)
          <div class="patag-card rounded-3xl p-4">
            <div class="flex items-center gap-3">
              <div class="w-12 h-12 rounded-full bg-patag-500"></div>
              <div>
                <p class="font-semibold">Esperanza Lim</p>
                <p class="text-xs text-[#7a5e48]">Mayor</p>
              </div>
            </div>
            <div class="flex gap-2 mt-3 text-[10px]">
              <span class="patag-pill px-2 py-1 rounded-full">SENATE</span>
              <span class="patag-pill px-2 py-1 rounded-full">LOCATION</span>
            </div>
            <p class="text-xs text-[#5a4636] mt-3">The quick brown fox jumps over the lazy dog.</p>
            <a href="{{ route('officials.show') }}" class="text-xs font-semibold text-[#5a4636] mt-4 inline-flex">View Profile →</a>
          </div>
          @endforeach
        </div>
        <div class="flex items-center justify-between text-xs text-[#7a5e48] mt-6">
          <span>Showing 12 out of 17 officials</span>
          <div class="flex gap-2">
            <a href="{{ route('officials.index', ['page' => 1]) }}" class="px-3 py-1 rounded-full bg-white shadow">Previous</a>
            <a href="{{ route('officials.index', ['page' => 2]) }}" class="px-3 py-1 rounded-full bg-white shadow">Next</a>
          </div>
        </div>
      </main>
    </div>
  </div>
</x-layouts.app>
