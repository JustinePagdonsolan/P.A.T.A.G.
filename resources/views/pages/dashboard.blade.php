@php($cards = [
  ['title' => 'Promise Tracker', 'copy' => 'Track campaign promises, fulfilled commitments, and pending deliverables in one dashboard panel.'],
  ['title' => 'Public Pulse', 'copy' => 'View sentiment snapshots and district-level reactions to current policy decisions.'],
  ['title' => 'Fact-Check Badges', 'copy' => 'Surface verified claims, source strength, and confidence markers for major headlines.'],
  ['title' => 'Citizen Briefing', 'copy' => 'Get a daily summary of civic activity, legislation, and local governance updates.'],
])
<x-placeholder-page title="PATAG | Dashboard" eyebrow="Citizen Dashboard" headline="National Civic Dashboard" description="Your personalized PATAG overview for governance, policy, and accountability signals." :cards="$cards" />
