<div class="col-2">
    <ul class="list-group">
        <a href="{{ route('panel.home') }}"><li class="list-group-item {{ (request()->is('panel/home')) ? 'active' : '' }}"><i class="fas fa-home fas-custom"></i>Mon Compte</li></a>
        @if (Auth::user()->whitelisted == 0)
        <a href="{{ route('whitelist.index') }}"><li class="list-group-item {{ (request()->is('panel/whitelist')) ? 'active' : '' }}"><i class="far fa-address-card fas-custom"></i>Whitelist</li></a>
        @endif
        @if (Auth::user()->admin >= 4)
            <hr>
            <a href="{{ route('panel.admin.home') }}"><li class="list-group-item {{ (request()->is('admin')) ? 'active' : '' }}"><i class="fas fa-users-cog fas-custom"></i>Administration</li></a>
        @endif    
    </ul>
</div>