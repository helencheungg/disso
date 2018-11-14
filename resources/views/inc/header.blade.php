<header class="py-2 px-3 bg-dark text-light">
  <div class="container-fluid">
    <div class="row">
      <div class="header_lhs col-sm">
        <div class="logo float-left mr-4">
          <h2><a href="/">{{config('app.name', 'UNTITL3.')}}</a></h2>
        </div>
      </div>
      <div class="header_rhs col-sm mt-1 float-right">
        <div class="float-right">
          <div class="search_bar d-inline">
            <input id="search_bar" type="text"/>
            <input id="search_button" type="submit"/>
          </div>
          <a class="mx-4 d-inline" href="/login">Login/Register</a>
          <a id="cart d-inline" href="/cart">Cart <span id="cart_no">(0)</span></a>
        </div>
      </div>
    </div>
  </div>
</header>
