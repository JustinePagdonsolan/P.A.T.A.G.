@php($cards = [
  ['title' => "Track My District's Budget", 'copy' => 'Placeholder budget tiles for allocation, disbursement, and delivery progress.'],
  ['title' => 'Budget Drilldowns', 'copy' => 'Inspect category-level spending and implementation snapshots.'],
  ['title' => 'Alert Flags', 'copy' => 'Raise anomalies when spending patterns deviate from approved plans.'],
  ['title' => 'Transparency Log', 'copy' => 'Connect district spending to source documents and updates.'],
])
<x-placeholder-page title="PATAG | Budget Tracker" eyebrow="District Budget" headline="Track My District's Budget" description="Placeholder budget tracker for district-level fiscal transparency." :cards="$cards" />
