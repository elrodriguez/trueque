<div>
    <section class="page-banner-110">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="{{ 'https://ui-avatars.com/api/?name='.Auth::user()->name.'&size=72' }}" alt="" width="72" height="72">
          <h2>{{ Auth::user()->name }}</h2>
          <p class="lead">{{ Auth::user()->email }}</p>
        </div>
        <div class="row">
            <div class="col-md-4 order-md-2 mb-4">
            </div>
    </section>
</div>
