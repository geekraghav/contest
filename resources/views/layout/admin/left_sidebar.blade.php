<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
  <div class="mdc-drawer__header">
    <a href="/home" class="brand-logo" style="font-size: 1.2em;color: #fff;text-decoration: none;">
    Contest Panel
    </a>
  </div>
  <div class="mdc-drawer__content">
    <div class="user-info">
      <p class="name"> {{ @ucwords(auth()->user()->name)}} </p>
      <p class="email">{{ @ucwords(auth()->user()->email) }}</p>
    </div>
    <div class="mdc-list-group">
      <nav class="mdc-list mdc-drawer-menu">
        <div class="mdc-list-item mdc-drawer-item">
            <a class="mdc-drawer-link" href="/home">
            <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">track_changes</i>
              Dashboard
            </a>
          </div>
      </nav>
</div>
    <div class="profile-actions">
    <form action="{{ route('logout') }}" method="POST">
        {{ csrf_field() }}
      <button class="btn text-white" type="submit">Logout</button>
    </form>
    </div>

  </div>
</aside>
