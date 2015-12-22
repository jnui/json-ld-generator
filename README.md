# json-ld-generator
js and php app to generate json-ld snippets (currently limited to one additionalType)

This small PHP and javascript app was created to make it easier to produce JSON-LD snippets that can be put on to your website.
<<<<<<< HEAD
=======
Why
---
Copy and pasting into a text file is error prone, I cannot tell you how many times I've made an error, and had to go back and fix the problem. This little app will help avoid that.

here is an example of what is produced.
```
{
  "@context": "http://schema.org",
  "@type": "Store",
  "additionalType": "http://www.productontology.org/id/Flooring",
  "url": "http://www.mystore.com",
  "logo": "http://www.mystore.com/files/theme/logo.png",
  "hasMap": "http://mapurl.com",
  "email": "me@here.com",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "boca ratonhttp://www.mystore.com",
      "addressRegion": "FL",
      "postalCode": "33437",
      "streetAddress": "12 main st"
    },
    "description": "this is the long description this is the long descriptionthis is the long descriptionthis is the long descriptionthis is the long description",
    "name": "my store name",
    "telephone": "561-555-5555",
    "openingHours": "Mon-Fri 08:00-17:00, Sat 09:00-16:00",
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "41.0092",
      "longitude": "-72.93484"
    },
    "sameAs" : [ "http://mapurl-on-google-maps.com"]
}
``` 
you can then test to make sure it is valid by going to the structured data testing tool at this link https://developers.google.com/structured-data/testing-tool/

Usage
-----

install onto a web server that supports PHP and open the json-ld.php file in a browser.

The page will show a regular form to accept the fields that can be changed. Just type into the form and hit the submit button, you will get instant results.
>>>>>>> 2a4b954bcbcd59cb59ea2380c0a8b372851b38f5

