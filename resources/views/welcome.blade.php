<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="{{ asset('images/favicon.jpg') }}" type="image/jpeg">
    <link rel="preload" href="{{ asset('fonts/A1-Regular.ttf') }}" as="font" type="font/ttf"
        crossorigin="anonymous">

    <title>A1 Properties - Your Trusted Real Estate Company</title>
    <link rel="canonical" href="https://a1properties.ae/">

    <meta name="description"
        content="Explore a wide range of residential and commercial properties with A1 Properties. Find your dream home or investment opportunity.">
    <meta name="keywords"
        content="A1 Properties, Real Estate, Property Listings, Homes for Sale, Apartments for Rent, Commercial Real Estate, Property Investment">
    <meta property="og:title" content="A1 Properties - Your Trusted Real Estate Company">
    <meta property="og:description"
        content="Explore a wide range of residential and commercial properties with A1 Properties. Find your dream home or investment opportunity.">
    <meta property="og:image" content="https://a1properties.ae/images/favicon.jpg">
    <meta property="og:url" content="URL of your A1 Properties website">
    <meta name="twitter:card" content="https://a1properties.ae/images/favicon.jpg">
    <meta name="twitter:title" content="A1 Properties - Your Trusted Real Estate Company">
    <meta name="twitter:description"
        content="Explore a wide range of residential and commercial properties with A1 Properties. Find your dream home or investment opportunity.">
    <meta name="twitter:image" content="https://a1properties.ae/images/favicon.jpg">
    <script defer>
        if (!localStorage.getItem('videoLoaded')) {
            // Set the video URL in localStorage
            localStorage.setItem('videoUrl', 'https://a1properties.ae/backend/storage/a1/home-video.mp4');
            localStorage.setItem('videoUrlMbl', 'https://a1properties.ae/backend/storage/a1/home-video-mobile.mp4');
        }
    </script>
      <link rel="preload" href="https://a1properties.ae/backend/storage/a1/home-video.mp4" as="video" type="video/mp4" />
      <link rel="preload" href="https://a1properties.ae/backend/storage/a1/home-video-mobile.mp4" as="video" type="video/mp4" />

    <link rel="preload" as="image" loading="lazy" href="https://a1properties.ae/backend/storage/a1/dubai-bg.webp">
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '863561894809179');
        fbq('track', 'PageView');
    </script>
    <noscript><img alt="facebook" height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=863561894809179&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "A1 Properties",
      "url": "https://a1properties.ae/",
      "logo": "https://a1properties.ae/backend/storage/a1/logo/c/a1-logo-black.webp",
      "alternateName": "A1 Properties Real Estate",
      "sameAs": [
        "https://www.instagram.com/a1propertiesuae/?hl=en",
        "https://www.facebook.com/a1propertiesuae",
        "https://twitter.com/a1propertiesuae",
        "https://www.linkedin.com/company/a1propertiesllc/mycompany/",
        "https://www.youtube.com/channel/UCLEnpl069-3RJf3kfBT5A6g"
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+971 4 351 5583",
          "contactType": "customer service",
          "email": "info@a1properties.ae",
          "areaServed": "AE",
          "availableLanguage": "en"
        }
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "A1 Properties",
      "image": "https://a1properties.ae/backend/storage/a1/logo/c/a1-logo-black.webp",
      "@id": "",
      "url": "https://a1properties.ae/",
      "telephone": "+971 4 351 5583",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1702 Fairmont Dubai, Sheikh Zayed Road",
        "addressLocality": "Dubai",
        "postalCode": "128805",
        "addressCountry": "AE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 25.226678476194756,
        "longitude": 55.278118924113166
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday"
        ],
        "opens": "09:00",
        "closes": "18:00"
      },
      "sameAs": [
        "https://www.facebook.com/a1propertiesuae",
        "https://twitter.com/a1propertiesuae",
        "https://www.instagram.com/a1propertiesuae/",
        "https://www.youtube.com/channel/UCLEnpl069-3RJf3kfBT5A6g",
        "https://www.linkedin.com/company/a1propertiesllc/mycompany/",
        "https://a1properties.ae/"
      ]
    }
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "A1 Properties",
      "url": "https://a1properties.ae",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>



    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QHH6Z7H0FB"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-QHH6Z7H0FB');
    </script>
    <!-- Buttonizer -->
    <script type="text/javascript">
        (function(n, t, c) {
            var o = t.createElement("script");
            o.async = !0, o.src = "https://cdn.buttonizer.io/embed.js", o.onload = function() {
                window.Buttonizer.init(c)
            }, t.head.appendChild(o)
        })(window, document, "2a443212-8d6c-4933-94a9-fe2d542c58b0");
    </script>
    <!-- End Buttonizer -->



    @vite(['resources/sass/app.scss'])

    @vite(['resources/js/app.js'])

</head>

<body>
    <div id="app">
    </div>
</body>

</html>
