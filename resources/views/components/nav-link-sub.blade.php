<li class="nav-item">

    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="collapse" data-target="#collapsibleNavbar">
        <i class="fas fa-fw fa-{{ $icon }}"></i>
        <span>{{ $text }}</span>
    </a>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            @foreach($submenu as $key => $value)
            <li class="nav-item{{ $value['subactive'] }}">
                <a class="nav-link" href="{{ $value['suburl'] }}">
                    <i class="fas fa-fw fa-{{ $value['subicon'] }}"></i>
                    <span>{{ $value['subtext'] }}</span>
                </a>
            </li>
            @endforeach
        </ul>
    </div>
</li>
@push('scripts')
<script>
    $(function(){
        if(
        $( "#collapsibleNavbar > ul > li.nav-item" ).hasClass( "active" )==true){
            $('#collapsibleNavbar').addClass('in show');
        };
    });
</script>
@endpush