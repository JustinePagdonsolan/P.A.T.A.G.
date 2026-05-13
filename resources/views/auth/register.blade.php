<x-layouts.app :title="'PATAG | Create Account'">
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
    </header>

    <div class="flex-1 flex items-center justify-center px-6 pb-16">
      <div class="patag-panel rounded-3xl p-10 w-full max-w-md text-white shadow-soft">
        <h1 class="text-2xl font-semibold text-center">Create an account</h1>
        <form class="mt-8 space-y-4" action="{{ route('register.role') }}" method="GET">
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Full name" />
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Email" />
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="MM/DD/YYYY" />
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Password" type="password" />
          <input class="w-full rounded-xl bg-white/10 border border-white/10 px-4 py-3 text-sm" placeholder="Confirm Password" type="password" />
          <button class="w-full bg-black/40 hover:bg-black/60 text-white py-3 rounded-xl font-semibold">Continue →</button>
          <p class="text-center text-xs text-white/70">Already have an account? <a href="{{ route('login') }}" class="text-white font-semibold">Login</a></p>
        </form>
      </div>
    </div>
  </div>
</x-layouts.app>
