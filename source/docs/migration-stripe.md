---
title: Stripe Migration
description: Plans and details for Stripe migration of subscriptions
extends: _layouts.documentation
section: content
---

# Stripe Migration Overview {#stripe-migration-overview}

The subscriptions of users within Stripe are kept in Stripe primarily with the data held within CiviCRM as a representation of that.  Thus Stripe is the System of Record for its data.  

## Prerequisites for Stripe {#page-items}

Need list here


## Steps for Stripe

* Export the Stripe subscriptions
* Setup database to hold temporary tables (use create_tables.sql)
* Import Stripe subscriptions into db (use import_subs.php)
* Remove $0 subscriptions that will not be moved over - associate (and maybe family1) 
   (*not done yet*)
* Find Contacts for subscriptions (use find_contacts.php)
* Review data for issues - no contact found, 
* Run import script on prepared subscriptions (use add_subs.php - **still not working yet**)

Files within the https://github.com/nova-labs/civicrm-nl-scripts repo



