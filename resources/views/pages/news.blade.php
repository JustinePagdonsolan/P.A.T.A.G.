@php($cards = [
  ['title' => 'Headline Verifier', 'copy' => 'Compare top stories with official records and source provenance before sharing.'],
  ['title' => 'Fact-Check Badges', 'copy' => 'Review story labels such as Verified, Contested, and Needs Context.'],
  ['title' => 'Public Pulse', 'copy' => 'Understand how communities are reacting to breaking developments.'],
  ['title' => 'Related Bills', 'copy' => 'Open linked legislation and see where policy conversations connect to news.'],
])
<x-placeholder-page title="PATAG | News" eyebrow="Civic Newsroom" headline="Policy News & Verification" description="A placeholder newsroom for policy stories, context cards, and credibility signals." :cards="$cards" />
