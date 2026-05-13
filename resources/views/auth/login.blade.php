<x-layouts.app :title="'PATAG | Login'">
  <div class="min-h-screen patag-gradient flex flex-col">
    <header class="max-w-6xl mx-auto px-6 py-6 flex items-center justify-between text-white">
      <a href="{{ route('landing') }}" class="flex items-center gap-3">
        <div class="w-10 h-10 rounded-xl bg-white/20 flex items-center justify-center">P</div>
        <span class="font-semibold">PATAG</span>
      </a>
      <nav class="hidden md:flex items-center gap-6 text-sm text-white/70">
        <a href="{{ route('service') }}" class="hover:text-white">Service</a>
        <a href="{{ route('contract') }}" class="hover:text-white">Contract</a>
        <a href="{{ route('about') }}" class="hover:text-white">About</a>
      </nav>
      <a href="{{ route('profile.settings') }}" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center">⚙️</a>
    </header>

    <div class="flex-1 flex items-center justify-center px-6 pb-16">
      <div class="patag-panel rounded-3xl p-10 w-full max-w-md text-white shadow-soft">
        <h1 class="text-2xl font-semibold text-center">Login</h1>
        <form class="mt-8 space-y-4" action="{{ route('dashboard') }}" method="GET">
          <div>
            <label class="text-xs uppercase tracking-wide text-white/60">Email</label>
            <input class="mt-2 w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Email" />
          </div>
          <div>
            <label class="text-xs uppercase tracking-wide text-white/60">Password</label>
            <input class="mt-2 w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Password" type="password" />
          </div>
          <div class="flex items-center justify-between text-xs text-white/70">
            <label class="flex items-center gap-2">
              <input type="checkbox" class="rounded border-white/40 bg-white/10" />
              Remember me
            </label>
            <a href="{{ route('profile.privacy') }}" class="hover:text-white">Forgot password?</a>
          </div>
          <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold">Login</button>
          <p class="text-center text-xs text-white/70">Don't have an account? <a href="{{ route('register') }}" class="text-white font-semibold">Register</a></p>
        </form>
      </div>
    </div>
  </div>
</x-layouts.app>
