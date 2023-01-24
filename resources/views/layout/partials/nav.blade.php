<aside class="sidebar offcanvas-lg offcanvas-start">


    <div class="logo-brand mt-lg-5">
      <img
        src="{{asset('img/logo.png')}}"
        alt="Logo Shoso"
        width="52"
        height="50"
      />
      <div>
        <h6 class="title-store">Disniplix</h6>
        <p class="tagline-store">The Best Online Movie Marketplace</p>
      </div>
    </div>
    <hr>
    <nav class="menu flex-fill">
      <div class="section-menu">
        <a href="/" class="item-menu active" onclick="handleClickMenu(this)">
          <p>Home</p>
        </a>
        <div id="drop-con" style="display: flex; flex-direction: row;">
          <a href="#" class="item-menu dropdown-btn" >
            Category <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-menu">
            @foreach ($category as $c )
              <a href="/category/{{$c->id}}" class="dropdown-item">{{$c->name}}</a>
            @endforeach
           
          </div>
        </div>
        <div id="drop-con" style="display: flex; flex-direction: row;">
          <a href="#" class="item-menu dropdown-btn" >
            Manage Film <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-menu">
            <a href="{{route('createfilm')}}" class="dropdown-item">Add Film</a>
            <a href="{{route('indexfilm')}}" class="dropdown-item">View All Film</a>
           
          </div>
        </div>
        <a href="{{route('admintrans')}}" class="item-menu" onclick="handleClickMenu(this)">
          <p>History Transaction</p>
        </a>

        <a href="/contact" class="item-menu" onclick="handleClickMenu(this)">
          <p>Contact</p>
        </a>
        <div id="drop-con" style="display: flex; flex-direction: row;">
          <a href="#" class="item-menu dropdown-btn" >
            Profile <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-menu">
            <a href="{{route('pwview')}}" class="dropdown-item">Change Password</a>
            <a href="{{route('editview')}}" class="dropdown-item">Edit Profile</a>
           
          </div>
        </div>
        <a href="{{route('logout')}}" class="item-menu" onclick="handleClickMenu(this)">
          <p>Logout</p>
        </a>

      </div>
      
    </nav>
    <footer>
      <div class="d-flex gap-3 align-items-center mb-4">
        <img src="{{asset('icons/ic_mode.svg')}}" alt="Mode Display" />
        <p id="label-mode" class="flex-fill label-mode">Light Mode</p>
        <div>
          <input
            id="checkbox"
            type="checkbox"
            class="toggle-theme"
            aria-label="Toggle Theme"
          />
          <label for="checkbox" class="label-toggle">
            <img
              src="{{asset('icons/ic_moon.svg')}}"
              width="50%"
              class="ic-theme"
              id="ic-dark"
              alt="Icon Dark"
            />
            <img
              src="{{asset('icons/ic_sun.svg')}}"
              width="50%"
              class="ic-theme"
              id="ic-light"
              alt="Icon Light"
            />
          </label>
        </div>
      </div>
      <p class="footerText-1">©2022 Disniplix. All rights reserved.</p>
      <p class="footerText-2">Web Programming Project</p>

    </footer>
</aside>