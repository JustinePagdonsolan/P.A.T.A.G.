@php($cards = [
  ['title' => 'Action & Engagement Hub', 'copy' => 'Coordinate issue campaigns, civic participation, and district-level calls to action.'],
  ['title' => 'National Survey', 'copy' => 'Launch and review survey modules tied to current policy topics.'],
  ['title' => 'Find Your Representative', 'copy' => 'Quickly locate district officials and their public records.'],
  ['title' => "Track My District's Budget", 'copy' => 'Monitor district allocations and spending progress through timeline cards.'],
])
<x-placeholder-page title="PATAG | Action Hub" eyebrow="Action and Engagement" headline="Action & Engagement Hub" description="Placeholder coordination space for campaigns, surveys, and district action tools." :cards="$cards" />
