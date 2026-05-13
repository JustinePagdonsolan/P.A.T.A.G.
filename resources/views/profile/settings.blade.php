@php($cards = [
  ['title' => 'Settings', 'copy' => 'Configure account defaults, interface preferences, and dashboard behavior.'],
  ['title' => 'Role Preferences', 'copy' => 'Adjust citizen, researcher, and journalist view priorities.'],
  ['title' => 'Accessibility', 'copy' => 'Placeholder controls for readability and navigation support.'],
  ['title' => 'Integration Controls', 'copy' => 'Preview external feed and sync options.'],
])
<x-placeholder-page title="PATAG | Settings" eyebrow="Account Settings" headline="Settings" description="Placeholder settings panel for account customization." :cards="$cards" />
