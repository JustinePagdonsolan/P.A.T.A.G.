<x-layouts.app :title="'PATAG | Official Profile'">
  <div class="min-h-screen bg-[#f6f1ec]">
    <div class="patag-gradient text-white">
      <div class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between">
        <nav class="flex items-center gap-3 text-sm">
          <a href="{{ route('landing') }}" class="px-4 py-2 rounded-full bg-white/10">Home</a>
          <a href="#" class="px-4 py-2 rounded-full bg-white/10">Dashboard</a>
          <a href="#" class="px-4 py-2 rounded-full bg-white/10">News</a>
          <a href="{{ route('bills.index') }}" class="px-4 py-2 rounded-full bg-white/10">Bills</a>
        </nav>
        <div class="flex items-center gap-4 text-sm text-white/80">
          <span>Alangilan, Batangas</span>
          <div class="w-8 h-8 rounded-full bg-white/20"></div>
        </div>
      </div>
    </div>

    <div class="max-w-6xl mx-auto px-6 py-10">
      <a href="{{ route('officials.index') }}" class="text-sm text-[#6a4a38]">← Back</a>
      <div class="grid md:grid-cols-[260px_1fr] gap-6 mt-4">
        <div class="space-y-4">
          <div class="rounded-3xl bg-white p-4 shadow">
            <div class="w-full h-44 rounded-2xl bg-patag-500"></div>
          </div>
          <div class="patag-card rounded-3xl p-4 text-xs">
            <div class="flex gap-2">
              <span class="patag-pill px-2 py-1 rounded-full">SENATE</span>
              <span class="patag-pill px-2 py-1 rounded-full">LOCATION</span>
            </div>
            <p class="text-[#5a4636] mt-3">Widely regarded as the "Strongest Public Servant" in modern history.</p>
          </div>
          <div class="patag-card rounded-3xl p-4 text-xs">
            <p class="font-semibold mb-2">Policies and Laws</p>
            <ul class="space-y-1 text-[#5a4636]">
              <li>Anti-Selos Act 4951</li>
              <li>Anti-Selos Act 4951</li>
              <li>Anti-Selos Act 4951</li>
            </ul>
          </div>
        </div>
        <div class="space-y-4">
          <div class="patag-card rounded-3xl p-6">
            <h1 class="text-2xl font-serif">Gojo Satoru</h1>
            <p class="text-sm text-[#5a4636] mt-1">Secretary of the Department of Supernatural Defense & Human Safety</p>
            <div class="grid md:grid-cols-2 gap-4 text-sm text-[#5a4636] mt-4">
              <div>
                <p>Department: DSDHS (Office of the Strongest)</p>
                <p>Date Assumed: April 2022</p>
                <p>Status: Active (Limitless)</p>
              </div>
              <div>
                <p>Appointed By: The Higher Ups</p>
                <p>Official Seal: Crossed Eyes & Blue Void Emblem</p>
              </div>
            </div>
          </div>
          <div class="patag-card rounded-3xl p-6">
            <h2 class="font-semibold">Career History</h2>
            <ul class="mt-3 text-sm text-[#5a4636] space-y-2">
              <li><strong>2022 – Present:</strong> Secretary, Department of Supernatural Defense</li>
              <li><strong>2016 – 2022:</strong> Head Instructor, Tokyo Metropolitan Technical High School</li>
              <li><strong>2006 – 2016:</strong> Senior Special Operative, Jujutsu Operations Division</li>
              <li><strong>Birth – 2006:</strong> Heir Apparent to the Gojo Clan</li>
            </ul>
          </div>
          <div class="patag-card rounded-3xl p-6">
            <div class="flex items-center justify-between">
              <h2 class="font-semibold">Position History</h2>
              <span>▾</span>
            </div>
          </div>
          <div class="patag-card rounded-3xl p-6">
            <h2 class="font-semibold">Public Records</h2>
            <ul class="mt-3 text-sm text-[#5a4636] space-y-2">
              <li><strong>Executive Issuance 001:</strong> Total ban on grade 4 worker exploitation.</li>
              <li><strong>Budget Transparency:</strong> 100% of hidden inventory accounts disclosed.</li>
              <li><strong>Audit Status:</strong> COA report — Perfect Clarity.</li>
            </ul>
          </div>
          <div class="patag-card rounded-3xl p-6 flex items-center justify-between">
            <span class="font-semibold">News and Controversies</span>
            <span>▾</span>
          </div>
          <div class="patag-card rounded-3xl p-6 flex items-center justify-between">
            <span class="font-semibold">Sources and References</span>
            <span>▾</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layouts.app>
