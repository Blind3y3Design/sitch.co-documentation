---
title: Development Standards Guide
taxonomy:
    category: development
except: Best practices and guidelines for working as a developer with Situaiton Interactive.
---

## Working with Situation Dev

## Development

- **No Hardcoding of URLs**: Please do not hard code URLs or IP Addresses.  When we move servers to our production server, we don't want anything pointing back to our dev server.
- **Pre-Processors**: Most of us use CSS pre-processors.  We like *Sass* more, but if you prefer *Less*, that's cool.  Just give us a source file.  And BTW - any other pre-processor may require a conversation with us.
- **Working with Images**: Our designers give you PSDs.  We want text and you do too.  We prefer that you don't have images with text in them (except for logos and stuff).  We prefer that all images have HTML text overlaying them for easy updates and...that thing called Google.
	- When working with Social or Theatre Icons, an SVG would be prefered over a PNG. They're more versatile and scalable. Examples can be found on the [ColorPurple](http://colorpurple.com/) site. If you need a new icon please check [here](http://dev.bowdenweb.com/a/i/cons/icomoon/svg/) first, and verify if the icon is correct with a designer.
- **Mobile Friendly**: We prefer a responsive site, but sometimes it just ain't feasible in our timelines or with the client's vision for mobile (but most of the time responsive happens).  You can make it adaptive or a separate mobile experience.  *It just has to past Google's mobile friendly test*.
- **WordPress Back-End**: We are building all our sites WordPress.  Our team at Situation who does the content has become accustom to a certain interface.  Make it easy and familiar for them, build it the "Situation Way".  If you haven't already grabbed our WordPress install, you can also grab documentation [here](#).
- **Web Fonts**: We want you to use *Web Font Loader* to optimize font loading and we want you to make your own font package in order to minimize the "k" size to just the fonts we need from either *Fonts.com*, *Typekit* or *Typography.com*.  Credentials available upon request.
	- *Note*: Fonts loaded from *Typography.com* will not work with *Web Font Loader* and must be added to the site and server using their specific implementation.
- **Server Side Detection**: Please always use widths as opposed to device sniffing when building a site out.  However, there are some exceptions to this, but they should be done client side through *JavaScript* so we don't interrupt any caching plugins we are using:
	- Device sniffing for when a phone number should be clicked to call.
	- Other instances such as geo-location that relate to the mobile only experience that can occur on both iPad and iPhone or their equivalent Android devices.  
- **Plugins**: Over the years, we have trusted these WordPress plugins and if they don't come with your WP install, then you should install them.
	- Yoast SEO
	- CMS Page Order
	- Advanced Custom Fields Pro (we have a license upon request).
	- Gravity Forms (we have a license upon request).
	- **Jeremy is going to add more here**.
- **CDNs**: We want to optimize load time and save bandwidth costs.  Web servers charge a lot for bandwidth and tend to be slower.  So, we use Rackspace CDN or Amazon S3.  There are plugins for WordPress available for these to upload your entire media library to it and replace URLs.  *Do it: Save us money, make the site load faster*.
- **Email Notifications**: We love Gravity Forms--It sends notifications to specified email addresses.  Server sent emails can get blacklisted.  Use Postmark to send emails.  Install Postmark plugin in WordPress, enter our credentials and this will replace the stock send mail through WordPress with PostMark.  PostMark works everyday to ensure they are never blacklisted.  We trust them.

## Deployment

- **Use Git and Beanstalk**: We need you to check-in your files to GIT and deploy through Beanstalk.  This way we have a working copy in our GIT repository.
	- [Deploying Wordpress with Beanstalk](http://guides.beanstalkapp.com/deployments/deploying-wordpress.html)
	- [Deployment Best Practices](http://guides.beanstalkapp.com/deployments/best-practices.html)
	- [Code Review Workflow](http://guides.beanstalkapp.com/code-review/guide-to-code-review.html)
- **Make Notes in GIT and Beanstalk**: If you overwrite a WP database, make a backup and tell us you did so.  Whatever you did, make that note in GIT otherwise GIT is as useless as a file server.
- **Auto Prefixer and Minification**: Before deploying, you need to use Auto Prefixer to ensure everything works seamlessly across platforms and minify your file for optimal load time.
- **Documentation**: You're not an island.  Other developers will touch your work.  Make that experience easy for them.  Put a *readme.txt* file on the GIT repository of anything and everything that a developer should know.
	- A good example can be found [here](https://bitbucket.org/situationinteractive/oneworldobservatory.com)
- **No Database References to Dev Server**: If you are using WordPress or anything, please make sure that you replace any URLs in the database to match the live server, not the dev server.  Our dev server is wimpy and can't handle real traffic.

