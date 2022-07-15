<!DOCTYPE html>
<html>
<head>
    <meta charset="{{ bloginfo( 'charset' ) }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="pingback" href="{{ bloginfo('pingback_url') }}" />
    <link rel="alternate" type="application/rss+xml" title="{{ bloginfo('name') }} RSS Feed" href="{{ bloginfo('rss2_url') }}" />
    <link rel="shortcut icon" href="{{ CLASSY_THEME_DIR }}assets/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;700;800;900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <title>{{ wp_title('|', true, 'right') }}</title>
    {{ wp_head() }}
</head>
<body {{ body_class() }}>

{{ get_header() }}

<main id="page">
    @yield('content')
</main>

{{ get_footer() }}

{{ wp_footer() }}
</body>
</html>
