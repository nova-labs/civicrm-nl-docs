---
title: Migration overview
description: Overview of migration steps
extends: _layouts.documentation
section: content
---

# Overview {#overview}

The migration is based on individual scripts written as part of a Laravel application.  Each script can be run and fixed individually.  The three phases are Extract, Transform and Load (ETL). 

Some of the functions are gone 'by hand' rather than in a script.  For instance, Stripe is exported as CSV in the Stripe console and imported into the database using DB utilities.  

## Prerequisites for migration {#prerequisites-for-migration}

* Drupal 8 installed via composer 
* CiviCRM installed as a Drupal module
* other CiviCRM code and modules - need details  
* Configuration of CiviCRM

## Migration activities

### Export data 
* Export users, groups and group membership out of spaceman
* Export subscriptions out of Stripe

### Transform data
* 

## Testing


## Post testing changes 

