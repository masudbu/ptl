<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="{{route('dashboard')}}" class="app-brand-link">
      <span class="app-brand-text demo menu-text fw-bold ms-2">Paramount</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
      <a href="{{route('dashboard')}}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <li class="menu-item {{ (request()->is('previous-production-record','next-production-record','daily-production-review','daily-production-form','daily-production-view','production-advance-search','show-production-view','show-production')) ? 'open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-book"></i>
        <div data-i18n="Layouts">Production Report</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item {{ (request()->is('daily-production-form')) ? 'active' : '' }}">
          <a href="{{route('dailyProductionEntryForm')}}" class="menu-link">
            Production Entry
          </a>
        </li>
        <li class="menu-item {{ (request()->is('daily-production-view','production-advance-search','show-production-view','show-production')) ? 'active' : '' }}">
          <a href="{{route('dailyProductionList')}}" class="menu-link">
            <div data-i18n="Without navbar">Production List</div>
          </a>
        </li>
        <li class="menu-item {{ (request()->is('daily-production-review','previous-production-record','next-production-record')) ? 'active' : '' }}">
          <a href="{{route('dailyProductionReview')}}" class="menu-link">
            <div data-i18n="Without navbar">Daily Production</div>
          </a>
        </li>
      </ul>
    </li>

    <li class="menu-item {{ (request()->is('yarndyeing')) ? 'open' : '' }}">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-upload"></i>
        <div data-i18n="Layouts">Production Uploads</div>
      </a>

      <ul class="menu-sub">
        <li class="menu-item {{ (request()->is('yarndyeing')) ? 'active' : '' }}">
          <a href="{{route('ptl-yarnDyeing')}}" class="menu-link">
            Yarn Dyeing
          </a>
        </li>
      </ul>
    </li>

  <!--     <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-layout"></i>
          <div data-i18n="Layouts">Layouts</div>
        </a>

        <ul class="menu-sub">
          <li class="menu-item">
            <a href="layouts-without-menu.html" class="menu-link">
              <div data-i18n="Without menu">Without menu</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-without-navbar.html" class="menu-link">
              <div data-i18n="Without navbar">Without navbar</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-container.html" class="menu-link">
              <div data-i18n="Container">Container</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-fluid.html" class="menu-link">
              <div data-i18n="Fluid">Fluid</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="layouts-blank.html" class="menu-link">
              <div data-i18n="Blank">Blank</div>
            </a>
          </li>
        </ul>
      </li>
-->
      <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Pages</span>
      </li>
      <li class="menu-item {{ (request()->is('finish-to-final')) ? 'open' : '' }}">
        <a href="#" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
          <div data-i18n="Fabric-Transfer">Fabric Transfer</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item">
            <a href="#" class="menu-link" target="_blank">
              <div data-i18n="Basic">PT To SD</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="#" class="menu-link" target="_blank">
              <div data-i18n="Basic">SD To Finishing</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="{{route('finishToFinal')}}" class="menu-link" target="_blank">
              <div data-i18n="Basic">Finishing To Final</div>
            </a>
          </li>
        </ul>
      </li>
      <li class="menu-item {{ (request()->is('department-create','add-process')) ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-cog"></i>
          <div data-i18n="Misc">Master Setup</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('department-create')) ? 'active' : '' }}">
            <a href="{{route('departmentForm')}}" class="menu-link">
              <div data-i18n="Error">Department</div>
            </a>
          </li>
          <li class="menu-item {{ (request()->is('add-process')) ? 'active' : '' }}">
            <a href="{{route('processForm')}}" class="menu-link">
              <div data-i18n="Under Maintenance">Process</div>
            </a>
          </li>
        </ul>
      </li>

      <li class="menu-item {{ (request()->is('users')) ? 'open' : '' }}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
          <i class="menu-icon tf-icons bx bx-dock-top"></i>
          <div data-i18n="Account Settings">Account Settings</div>
        </a>
        <ul class="menu-sub">
          <li class="menu-item {{ (request()->is('users')) ? 'active' : '' }}">
            <a href="{{ route('get_users') }}" class="menu-link">
              <div data-i18n="Account">Users</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-notifications.html" class="menu-link">
              <div data-i18n="Notifications">Notifications</div>
            </a>
          </li>
          <li class="menu-item">
            <a href="pages-account-settings-connections.html" class="menu-link">
              <div data-i18n="Connections">Connections</div>
            </a>
          </li>
        </ul>
      </li>
    </ul>
</aside>