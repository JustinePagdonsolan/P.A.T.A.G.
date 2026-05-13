@php($cards = [
  ['title' => 'Profile', 'copy' => 'Manage account details, civic interests, and district preferences.'],
  ['title' => 'Notifications', 'copy' => 'Set alerts for officials, bills, and survey updates.'],
  ['title' => 'My Activity', 'copy' => 'Review your civic interactions in the PATAG Citizen Dashboard.'],
  ['title' => 'Fact-Check Badges', 'copy' => 'Track your verification interactions and saved references.'],
])
<x-placeholder-page title="PATAG | Profile" eyebrow="Account" headline="Profile" description="Placeholder profile center for account and civic activity preferences." :cards="$cards" />
