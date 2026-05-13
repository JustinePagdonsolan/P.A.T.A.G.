@php($cards = [
  ['title' => 'Notifications', 'copy' => 'Choose how you receive updates for bills, officials, and district trends.'],
  ['title' => 'Public Pulse Alerts', 'copy' => 'Get pinged when sentiment shifts on monitored issues.'],
  ['title' => 'Promise Tracker Alerts', 'copy' => 'Receive milestone notices for tracked pledges.'],
  ['title' => 'Survey Reminders', 'copy' => 'Stay informed when National Survey cycles open.'],
])
<x-placeholder-page title="PATAG | Notifications" eyebrow="Account Alerts" headline="Notifications" description="Placeholder notification center for civic update preferences." :cards="$cards" />
