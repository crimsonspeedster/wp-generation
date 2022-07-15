@php
    $footer = get_field('footer', 'option');
    $settings = get_field('common', 'option');
@endphp

<footer class="footer">
    <div class="container grid footer-row">
        <div class="footer-logo">
            <a href="{{get_home_url()}}" class="logo logo--footer">Logo</a>

            <p class="footer-logo__description">{{$footer['description']}}</p>

            <div class="footer-logo__cards">
                <img width="34" src="{{get_template_directory_uri().'/img/master_card.svg'}}" alt="master card">

                <img width="61" src="{{get_template_directory_uri().'/img/visa.svg'}}" alt="visa">
            </div>

            <ul class="footer-logo__social">
                @foreach($footer['social_links'] as $item)
                    <li>
                        <a href="{{$item['link']}}" target="_blank" rel="nofollow noopener noreferrer">
                            <img src="{{$item['image']['sizes']['thumbnail']}}" alt="{{$item['image']['alt']}}">
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="footer-menu">
            <h3 class="footer__subtitle">Menu</h3>

            <div class="footer__menu footer__menu--default">
                {{
                    wp_nav_menu([
                        'menu' => 'footer-menu'
                    ])
                }}
            </div>
        </div>

        <div class="footer-legal">
            <h3 class="footer__subtitle">Legal</h3>

            <div class="footer__menu footer__menu--legal">
                {{
                    wp_nav_menu([
                        'menu' => 5
                    ])
                }}
            </div>
        </div>

        <div class="footer-office">
            <h3 class="footer__subtitle">Office</h3>

            <div class="footer__menu footer__menu--office">
                <ul class="menu">
                    <li><a href="mailto:{{$settings['admin_mail']}}">{{$settings['admin_mail']}}</a></li>

                    <li>{{$settings['phone']}}</li>

                    <li class="footer--office__flex">
                        @foreach($settings['address_repeater'] as $item)
                            <span>{{$item['address']}}</span>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>