<x-layouts.app :title="'PATAG | Journalist Verification'">
  <div class="min-h-screen patag-gradient flex items-center justify-center px-6 py-16">
    <div class="patag-panel rounded-3xl p-10 w-full max-w-2xl text-white shadow-soft">
      <button class="text-xs px-3 py-1 rounded-full bg-white/10">Back</button>
      <h1 class="text-2xl font-semibold mt-6">Verify your credentials</h1>
      <p class="text-sm text-white/70">Optional ID upload unlocks a Verified Badge and advanced research tools.</p>
      <form class="mt-6 space-y-4">
        <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Institution / Organization name" />
        <div class="rounded-xl border border-dashed border-white/30 p-4 text-sm text-white/70">Upload professional or press ID</div>
        <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Author portfolio or professional profile" />
        <p class="text-xs text-white/60">Pending verification. You may access sites in pending status until human reviewers confirm your credentials.</p>
        <label class="flex items-center gap-2 text-xs text-white/70">
          <input type="checkbox" /> I agree to the Terms of Service and Privacy Policy
        </label>
        <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold">Create account</button>
        <p class="text-center text-xs text-white/70">Already have an account? <a href="{{ route('login') }}" class="text-white font-semibold">Login</a></p>
      </form>
    </div>
  </div>
</x-layouts.app>
