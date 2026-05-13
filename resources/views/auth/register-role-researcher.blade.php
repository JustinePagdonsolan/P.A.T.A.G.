<x-layouts.app :title="'PATAG | Research Details'">
  <div class="min-h-screen patag-gradient flex items-center justify-center px-6 py-16">
    <div class="patag-panel rounded-3xl p-10 w-full max-w-2xl text-white shadow-soft">
      <a href="{{ route('register.role') }}" class="text-xs px-3 py-1 rounded-full bg-white/10 inline-flex">Back</a>
      <h1 class="text-2xl font-semibold mt-6">Research details</h1>
      <p class="text-sm text-white/70">Optional ID upload unlocks a Verified Badge and advanced research tools.</p>
      <form class="mt-6 space-y-4" action="{{ route('profile.activity') }}" method="GET">
        <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Organization type" name="organization_type" />
        <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Institution or organization name" name="institution_name" />
        <label class="rounded-xl border border-dashed border-white/30 p-4 text-sm text-white/70 block cursor-pointer">
          Click to upload identification card
          <input type="file" class="hidden" name="identification_card" />
        </label>
        <label class="flex items-center gap-2 text-xs text-white/70">
          <input type="checkbox" /> I agree to the Terms of Service and Privacy Policy
        </label>
        <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold">Create account</button>
        <p class="text-center text-xs text-white/70">Already have an account? <a href="{{ route('login') }}" class="text-white font-semibold">Login</a></p>
      </form>
    </div>
  </div>
</x-layouts.app>
