<x-layouts.app :title="'PATAG | Research Details'">
  <div class="min-h-screen patag-gradient flex items-center justify-center px-6 py-16">
    <div class="patag-panel rounded-3xl p-10 w-full max-w-2xl text-white shadow-soft">
      <button class="text-xs px-3 py-1 rounded-full bg-white/10">Back</button>
      <h1 class="text-2xl font-semibold mt-6">Research details</h1>
      <p class="text-sm text-white/70">Optional ID upload unlocks a Verified Badge and advanced research tools.</p>
      <form class="mt-6 space-y-4">
        <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Organization type" />
        <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Institution or organization name" />
        <div class="rounded-xl border border-dashed border-white/30 p-4 text-sm text-white/70">Click to upload identification card</div>
        <label class="flex items-center gap-2 text-xs text-white/70">
          <input type="checkbox" /> I agree to the Terms of Service and Privacy Policy
        </label>
        <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold">Create account</button>
        <p class="text-center text-xs text-white/70">Already have an account? <a href="{{ route('login') }}" class="text-white font-semibold">Login</a></p>
      </form>
    </div>
  </div>
</x-layouts.app>
