---
title: Membership design
description: How to enumerate the properties of members and attach them to Contact data
extends: _layouts.documentation
section: content
---

# Membership {#membership}

Each member will need to be a contact in the system to be manageable within CiviCRM.  Additionally, for most users they will also need to be able to log in which will require that they have a matching (WordPress) login.  

## Membership Types {#membership-types}

### Contact

* We do not store these contacts in Spaceman at all. Only ad hoc lists, MailChimp, or Meetup’s list of people who RSVP’d to meetups. This is new functionality.
* Contacts who are manually entered (other sources, paper interest forms, etc)
* Does not have a login/password
* Can be subscribed to mailing lists (opted in elsewhere)
* May have attended an open house or something, but hasn’t taken a class

### Guest

* No requirements
* Default status
* Can take signoff classes, but can’t use the tools unsupervised until they take GO
* Contact + wp_user
* Creates account on nova-labs.org
* Can manage their own mailing list subscriptions

### Attendee

* Has taken GO
* Can use signed off tools unsupervised
* Contact + wp_user
* Creates account on nova-labs.org
* Can manage their own mailing list subscriptions

### Associate

* Anyone can opt-in for $50/month
* Can’t get the card without taking GO
* Contact + wp_user + Membership (+ Recurring Contribution)
* Submits “join/membership” form on nova-labs.org. If logged in with an existing Guest/Attendee account, form is pre-filled. If not, account and Contact record are created along with Membership.
* Can manage their own mailing list subscriptions

### Key

* Sponsored by key and approved by board
* $100/month
* Anyone who has ever been key and lapsed payment can just start paying $100 again and get key privileges back.  One way to do this is have a flag that the membership team can change that allows someone to select key membership, spaceman has an “alumni” status that implements this.
* A record of sponsor/sponsee must be maintained
* Contact + wp_user + Membership (+ Recurring Contribution) + Relationship “Sponsored By”
* In Phase 1, promoting to Key status will be handled manually. Alumni status will be noted on the expired Membership, so membership team can easily see that they are a former member.
* The Spaceman style approach is possible where we only allow users to access the Key level Membership page if they have been given that access by membership team. Or the entire upgrade can be handled manually/in person. For future development, if policies are developed that allow an “apply for Key membership” option that can be implemented as well.
* Key member nominations can be processed via an online form available only to current Key members. This nomination would add a Relationship “Nominated By” to the nominee’s record and could kick off further workflow or notifications.

### Family Member

* Only key members can have family members
* Family members have key access and key rights (including sponsorship)
* First is $0/month, $10 after that
* A record family member relations must be maintained
* Contact + wp_user + Membership + Relationship “Family of”
* If $0/mo, use 100% discount code to set up
* Otherwise set up as $10/mo Recurring Contribution
* Expires if primary Key membership expires 
* Manually created by membership team

### Incubator employee (basically identical to family member)

* Incubator must be key member
* Employees members have key access and key rights (including sponsorship)
* First is $0/month, $10 after that
* A record of names of employers/employees must be maintained
* Contact + wp_user + Membership + Relationship “Employee Of”
* Similar to Family in other respects


## Other notes

Also, we need a way to have “bartered” membership for interns and people with a lot of time to volunteer and not much money.  Only someone on the membership team should be able to make someone “bartered.”  May make sense to handle this as a coupon code.

If a bartered member is otherwise identical, a membership record with no automatic renewal or associated recurring contribution can be created. This membership could, for instance, be set to expire at the end of the calendar year. If the barter was continued, membership team would go in and change the expiration date on the membership record or create a new membership entry. Membership can also be manually set to expired at any time if the barter relationship ended early.
