@php($cards = [
  ['title' => 'My Activity', 'copy' => 'Review saved bills, reactions, bookmarks, and policy follows.'],
  ['title' => 'Citizen Dashboard', 'copy' => 'See your personal timeline of civic participation on PATAG.'],
  ['title' => 'Engagement History', 'copy' => 'Track submitted survey responses and representative outreach actions.'],
  ['title' => 'Public Pulse Participation', 'copy' => 'View your contribution footprint across issue threads.'],
])
<x-placeholder-page title="PATAG | My Activity" eyebrow="Citizen Dashboard" headline="My Activity" description="Placeholder activity feed showing your PATAG engagement history." :cards="$cards" />
