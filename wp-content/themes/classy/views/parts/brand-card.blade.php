<div class="brand-card">
    <h3 class="brand-card__title">{{$title}}</h3>

    <div class="description brand-card__description">{!! $description !!}</div>

    <a href="{{$link['url']}}" class="button button--default button--brand" {{$link['target'] === '_blank' ? 'target="_blank" rel="nofollow noopener noreferrer"' : ''}}>{{$link['title']}}</a>
</div>