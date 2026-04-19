---
wave: 1
depends_on: []
files_modified:
  - functions.php
  - header.php
  - searchform.php
autonomous: true
objective: "Implement conversion-driving UX components: the Intent-Based Booking Sticky Bar and Concierge Predictive Search."
must_haves:
  - "Intent-based sticky bar visible on scroll"
  - "Predictive search functionality active"
  - "Components accessible via keyboard"
---

# Plan 02: High-Impact UX Components

## Objective

Build the primary conversion levers. The intent-based sticky booking bar reduces friction for travelers, while the concierge-style predictive search provides an elevated, anticipatory discovery experience.

## Context

Luxury hospitality UX demands speed and intent-focus. These components must trigger based on user scroll or interaction and remain lightweight.

## Tasks

<task id="02-02-01">
<name>Intent-Based Booking Bar</name>
<files>
- functions.php
- header.php
</files>
<action>
Create a sticky bar component in `header.php` or a dedicated template part. Use JS to trigger visibility based on scroll depth or interaction.
</action>
<verify>
Ensure sticky bar appears when expected and is keyboard navigable.
</verify>
<done>[ ]</done>
</task>

<task id="02-02-02">
<name>Concierge Predictive Search</name>
<files>
- functions.php
- searchform.php
</files>
<action>
Implement a REST API endpoint for predictive search results that categorizes results (rooms, dining, amenities) and style as an overlay.
</action>
<verify>
Confirm search results appear as user types and include proper ARIA live regions.
</verify>
<done>[ ]</done>
</task>

## Must-Haves

- [ ] Booking sticky bar shows on scroll
- [ ] Predictive search returns categorized JSON results
- [ ] Both components meet accessibility requirements from Phase 1
