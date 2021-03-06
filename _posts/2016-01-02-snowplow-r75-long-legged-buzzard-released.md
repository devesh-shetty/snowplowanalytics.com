---
layout: post
title-short: Snowplow 75 Long-Legged Buzzard
title: Snowplow 75 Long-Legged Buzzard released with support for Urban Airship Connect and SendGrid
tags: [snowplow, webhook, sendgrid, urbanairship]
author: Ed
category: Releases
---

We are pleased to announce the immediate availability of [Snowplow 75 Long-Legged Buzzard][snowplow-release]. This release lets you warehouse the event streams generated by Urban Airship and SendGrid, and also updates our [web-recalculate] [web-recalculate] data model.

![R75 Long-Legged Buzzard] [release-image]

The new webhook integrations are as follows:

1. **Urban Airship** - for tracking mobile app-related events from [Urban Airship][urbanairship-website] using the new [Urban Airship Connect] [urbanairship-connect] product
2. **SendGrid** - for tracking email-related events delivered by [SendGrid][sendgrid-website] via [SendGrid webhooks] [sendgrid-webhooks]

Here are the sections after the fold:

1. [Urban Airship Connect support](/blog/2016/01/02/snowplow-r75-long-legged-buzzard-released/#urbanairship)
2. [SendGrid webhook support](/blog/2016/01/02/snowplow-r75-long-legged-buzzard-released/#SendGrid)
3. [Updated data model](/blog/2016/01/02/snowplow-r75-long-legged-buzzard-released/#datamodel)
4. [Upgrading](/blog/2016/01/02/snowplow-r75-long-legged-buzzard-released/#upgrading)
5. [Roadmap and contributing](/blog/2016/01/02/snowplow-r75-long-legged-buzzard-released/#roadmap-etc)
6. [Documentation and help](/blog/2016/01/02/snowplow-r75-long-legged-buzzard-released/#help)

<!--more-->

<h2 id="urbanairship">1. Urban Airship Connect support</h2>

The Urban Airship Connect adapter in lets you track mobile app events delivered by [Urban Airship Connect][urbanairship-connect]. Using this functionality you can warehouse all of your Urban Airship mobile app and push notification events alongside your existing Snowplow events.

For help setting up Urban Airship Connect support, see the [Urban Airship Connect setup][urbanairship-setup] wiki page.

For technical details on this adapter, see the [Urban Airship Connect adapter][urbanairship-tech-docs] wiki page.

<h2 id="SendGrid">2. SendGrid webhook support</h2>

The SendGrid webhook adapter lets you track all email-related events emitted by SendGrid through their [SendGrid webhooks] [sendgrid-webhooks]. It's great for keeping track of your email campaigns, allowing you to see which emails generate the most interest.  

For help setting up SendGrid support, see the [SendGrid webhook setup][sendgrid-setup] wiki page.

For technical details on this adapter, see the [SendGrid webhook adapter][sendgrid-tech-docs] wiki page.

<h2 id="datamodel">3. Updated data model</h2>

Community member [Bernardo Srulzon] [bernardosrulzon] has contribued an update to one of our SQL data models: [web-recalculate] [web-recalculate].

The updated data model is more efficient (consuming less disk space), and now creates a helpful cookie-ID-to-user-ID map. Thanks Bernardo!

<h2 id="upgrading">4. Upgrading</h2>

<h3 id="configuring-emretlrunner">4.1 Upgrading EmrEtlRunner and StorageLoader</h3>

The latest version of the EmrEtlRunner and StorageLoader are available from our Bintray [here][app-dl].

In your EmrEtlRunner's `config.yml` file, update your `hadoop_enrich` job's version to 1.5.0, like so:

{% highlight yaml linenos %}
  versions:
    hadoop_enrich: 1.5.0 # WAS 1.4.0
{% endhighlight %}

For a complete example, see our [sample `config.yml` template][emretlrunner-config-yml].

<h3 id="upgrading-change-form">4.2 Redshift</h3>

You'll need to deploy the Redshift tables for any webhooks you plan on ingesting into Snowplow. You can find the Redshift table deployment instructions on the corresponding webhook setup wiki pages:

* [SendGrid webhook Redshift setup][sendgrid-setup-redshift]
* [UrbanAirship Connect webhook Redshift setup][urbanairship-setup-redshift]

<h2 id="roadmap-etc">5. Roadmap and contributing</h2>

We welcome any contributions of webhook adapters for other services - for details on getting started, see our wiki page [How to integrate a webhook into Snowplow][webhook-contributing]. Please note that contributing will require some experience in Scala at this time.

Similarly, if you would like to sponsor the Snowplow team to build a webhook adapter, do [get in touch][sponsorship-contact]!

Upcoming Snowplow releases include:

* [Release 76 Bird TBC][r76-milestone], which will refresh our EmrEtlRunner app, including updating Snowplow to using the EMR 4.x AMI series
* [Release 77 Bird TBC][r77-milestone], which will bring the Kinesis pipeline up-to-date with the most recent Scala Common Enrich releases. This will also include click redirect support in the Scala Stream Collector
* [Release 78 Bird TBC][r78-milestone], which will introduce basic event deduplication in Hadoop prior to loading Redshift

Note that these releases are always subject to change between now and the actual release date.

<h2 id="help">6. Documentation and help</h2>

Documentation relating to the new webhook support is available on the wiki:

* [Setting up a webhook][webhook-setup]
* [Technical documentation on webhooks][webhook-tech-docs]

As always, if you do run into any issues or don't understand any of the new features, please [raise an issue][issues] or get in touch with us via [the usual channels][talk-to-us].

For more details on this release, please check out the [R75 Release Notes][snowplow-release] on GitHub.

[release-image]: /assets/img/blog/2016/01/long-legged_buzzard.jpg

[urbanairship-website]: http://www.urbanairship.com/
[urbanairship-connect]: https://www.urbanairship.com/products/connect
[sendgrid-website]: http://www.sendgrid.com/
[sendgrid-webhooks]: https://sendgrid.com/docs/API_Reference/Webhooks/index.html

[webhook-setup]: https://github.com/snowplow/snowplow/wiki/Setting-up-a-Webhook
[urbanairship-setup]: https://github.com/snowplow/snowplow/wiki/Urban-Airship-Connect-webhook-setup
[urbanairship-setup-redshift]: https://github.com/snowplow/snowplow/wiki/Urban-Airship-Connect-webhook-setup#22-redshift
[sendgrid-setup]: https://github.com/snowplow/snowplow/wiki/SendGrid-webhook-setup
[sendgrid-setup-redshift]: https://github.com/snowplow/snowplow/wiki/SendGrid-webhook-setup#22-redshift

[webhook-tech-docs]: https://github.com/snowplow/snowplow/wiki/Snowplow-technical-documentation#1b-webhooks
[urbanairship-tech-docs]: https://github.com/snowplow/snowplow/wiki/Urban-Airship-Connect-webhook-adapter
[sendgrid-tech-docs]: https://github.com/snowplow/snowplow/wiki/SendGrid-webhook-adapter

[bernardosrulzon]: https://github.com/bernardosrulzon
[web-recalculate]: https://github.com/snowplow/snowplow/tree/master/5-data-modeling/sql-runner/redshift/sql/web-recalculate

[emretlrunner-config-yml]: https://github.com/snowplow/snowplow/blob/master/3-enrich/emr-etl-runner/config/config.yml.sample
[app-dl]: http://dl.bintray.com/snowplow/snowplow-generic/snowplow_emr_r75_long_legged_buzzard.zip

[webhook-contributing]: https://github.com/snowplow/snowplow/wiki/How-to-integrate-a-webhook-into-Snowplow
[sponsorship-contact]: mailto:contact@snowplowanalytics.com
[issues]: https://github.com/snowplow/snowplow/issues
[talk-to-us]: https://github.com/snowplow/snowplow/wiki/Talk-to-us
[snowplow-release]: https://github.com/snowplow/snowplow/releases/r75-long-legged-buzzard

[r76-milestone]: https://github.com/snowplow/snowplow/milestones/Release%2076%20%5BCLI%5D%20Bird%20TBC
[r77-milestone]: https://github.com/snowplow/snowplow/milestones/Release%2077%20%5BKIN%5D%20Bird%20TBC
[r78-milestone]: https://github.com/snowplow/snowplow/milestones/Release%2078%20%5BKIN%5D%20Bird%20TBC
