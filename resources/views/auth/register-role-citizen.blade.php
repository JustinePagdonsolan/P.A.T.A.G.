<x-layouts.app :title="'PATAG | Citizen Details'">
  <div class="min-h-screen patag-gradient flex items-center justify-center px-6 py-16">
    <div class="patag-panel rounded-3xl p-10 w-full max-w-2xl text-white shadow-soft">
      <a href="{{ route('register.role') }}" class="text-xs px-3 py-1 rounded-full bg-white/10 inline-flex">Back</a>
      <h1 class="text-2xl font-semibold mt-6">Tell us about you</h1>
      <p class="text-sm text-white/70">Help us surface data relevant to your community and sector.</p>
      <form class="mt-6 space-y-4" action="{{ route('profile.activity') }}" method="GET">
        <div class="grid md:grid-cols-2 gap-4">
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Occupational industry" name="occupational_industry" />
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Select industry" name="selected_industry" />
        </div>
        <div class="grid md:grid-cols-2 gap-4">
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="City / Municipality" name="city_or_municipality" />
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Province" name="province" />
        </div>
        <div class="flex flex-wrap gap-4 text-sm text-white/70">
          <span>Are you a registered voter?</span>
          <label class="flex items-center gap-2"><input type="radio" name="voter" /> Yes</label>
          <label class="flex items-center gap-2"><input type="radio" name="voter" /> No</label>
          <label class="flex items-center gap-2"><input type="radio" name="voter" /> SK Voter</label>
        </div>
        <label class="flex items-center gap-2 text-xs text-white/70">
          <input type="checkbox" /> I agree to the Terms of Service and Privacy Policy
        </label>
        <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold">Create account</button>
        <p class="text-center text-xs text-white/70">Already have an account? <a href="{{ route('login') }}" class="text-white font-semibold">Login</a></p>
      </form>
    </div>
  </div>
</x-layouts.app>
