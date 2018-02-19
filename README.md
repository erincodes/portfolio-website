# portfolio-website
My Personal Website Project (PWP) is a portfolio website to demonstrate my work to potential clients. 

## Milestone 1 Feedback
This is a good start and overall direction for your PWP project. Your project is set up according to spec, and your HTML looks good overall.

The user interface and visual design of your site will be important in conveying a positive impression upon your leads. During your wireframing process, consider what information and/or "calls to action" you may want to feature prominently that could facilitate a good conversion rate. Might the mobile layout need to be a bit different from the desktop layout, and how so? What will resonate with the kind of clients you are interested in working with? Every PWP will require a contact form, but do you also have other outlets like social media or mailing lists that you might want to incorporate too? 

A few of the things I mentioned above really veer off into territory that is not covered in this class like design and marketing, but your UI and content strategy are certainly relevant to your development process ahead. We're keeping the scope very narrow, so it may help to think of this as just an experimental go-round with your online presence and development process. As a freelancer, your website needs will likely expand beyond this tiny project after graduation. I suggest continuing to work with Daniel Heron on developing and refining the marketing aspects to support your freelance career goals.

Nice job. Your Milestone 1 passes at [Tier III](https://bootcamp-coders.cnm.edu/projects/personal/rubric/).

### Edits &amp; Suggestions
- Good idea to kill any "dead code" that's left behind - that means deleting the commented-out code that's leftover.
- Watch HTML indentation. This becomes more important as the document becomes more complex. If the indentation is correct and accurate, building and debugging pages becomes much easier. 

## Milestone 2&alpha; Feedback
Nice work - your direction and layout ideas are clear and well defined. Overall the element layout should work well with the Bootstrap grid with a few simple customizations to the default navbar. I think everything you'll need for that is already built into Bootstrap - have a look at the flexbox options, they may be of help.

The interactive and animated elements will likely need some JavaScript that is not included with Bootstrap however, so be prepared for some potential complexity there. But overall it shouldn't be too difficult. I have some recommendations below. 

**Tesimonials**: Rotating a set of content can be done with some custom jQuery. It will basically cycle thorough each quote and fade-in/fade-out after a delay. You may need to build this from scratch, and I can help point you in the right direction when the time comes.

**Portfolio**: The behavior you're wanting here will require using some JavaScript tools. For the thumbnail carousel functionality, I think [Flickity](https://flickity.metafizzy.co) might be worth a look. It's touch/swipe enabled for mobile, and responsive. 

The built-in Bootstrap tooltips probably not the best choice for your gallery as the functionality and amount of data you can display is limited. Traditionally tooltips are really only intended to display a brief line of text, so I think you'll need a different solution here.

One idea that that came to my mind was something along the lines of this: https://tympanus.net/codrops/2014/06/19/ideas-for-subtle-hover-effects/. This would be CSS driven and won't require any additional JS.

If you're set on going with a hover info bubble, I'd take a look at a customizable tooltip JS plugin like [Tooltipster](http://iamceege.github.io/tooltipster/).

Either way, be prepared for some potential challenges that come with building this part of the UI and integrating such solutions.

**Contact Me**: Do you have an existing mail list that you'd like to integrate with this site? If so, have a look at the official  documentation for the list software you're using and look for  integration instructions for PHP or JavaScript. Depending on what/how I'm not sure how easily it can be integrated into our existing Swiftmailer-driven contact form, but there could be some easy options available. Simplest solution: the "Subscribe to email list" option is a simple opt-in field and the mail-list subscription could be something you manage manually at this point.

**Footer**: Bootstrap has a built-in "fixed-bottom" class you can use. You can disable it using some custom CSS in a `@media` query on the appropriate breakpoints.

Your directory structure and code all look good. I think you're ready to begin development.

Build your PWP in a file named `index.php` inside `/public_html`. CSS, images, and JS directories should also be inside `public_html` and siblings to `/documentation`. We won't be using the `/documentation` directory any longer.

If you feel ahead of the curve during your development phase in the coming weeks, have a look at the [PWP Contact Form Doc](https://bootcamp-coders.cnm.edu/class-materials/jquery-validated-captcha-form/) for an overview of the Swiftmailer integration.

Nice work. Your Milestone 1 passes at [Tier IV](https://bootcamp-coders.cnm.edu/projects/personal/rubric/). You're clear to begin development!

### Edits &amp; Suggestions
- [FontAwesome](https://fontawesome.com/) is a great resource for free iconography.

## Milestone 2b Feedback

You're making good progress on you pwp site. It looks clean and simple.
There is an error from the way your picture is sized.

Consider reducing the break point of your navbar. 
There are some misaligned elements on the page that become more visible in mobile view.
Consider making the links to your github and Linkedin profiles larger or icons.

Keep up the good work. Your Milestone 2b grade is Tier IV.
