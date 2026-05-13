<x-layouts.app :title="'PATAG | Role Selection'">
  <div class="min-h-screen patag-gradient flex items-center justify-center px-6 py-16">
    <div class="patag-panel rounded-3xl p-10 w-full max-w-2xl text-white shadow-soft">
      <button class="text-xs px-3 py-1 rounded-full bg-white/10">Back</button>
      <h1 class="text-2xl font-semibold mt-6">How will you use PATAG?</h1>
      <p class="text-sm text-white/70">This shapes the data and tools you'll see. You can update later.</p>
      <div class="grid md:grid-cols-3 gap-4 mt-8">
        <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
          <p class="font-semibold">Citizen / Voter</p>
          <p class="text-xs text-white/70 mt-2">Track officials, voting records, and public pulse.</p>
        </div>
        <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
          <p class="font-semibold">Student / Researcher</p>
          <p class="text-xs text-white/70 mt-2">Access verified data for academic research.</p>
        </div>
        <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
          <p class="font-semibold">Journalist / Media</p>
          <p class="text-xs text-white/70 mt-2">Get real-time data and verified sources.</p>
        </div>
      </div>
      <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold mt-8">Continue</button>
      <p class="text-center text-xs text-white/70 mt-4">Already have an account? <a href="{{ route('login') }}" class="text-white font-semibold">Login</a></p>
    </div>
  </div>
</x-layouts.app>
