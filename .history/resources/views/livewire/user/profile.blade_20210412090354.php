<div>
    <section class="page-banner-110">
        <div class="py-5 text-center">
          <img class="d-block mx-auto mb-4" src="{{ 'https://ui-avatars.com/api/?name='.Auth::user()->name.'&size=72' }}" alt="" width="72" height="72">
          <h2>{{ Auth::user()->name }}</h2>
          <p class="lead">{{ Auth::user()->email }}</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your cart</span>
                        <span class="badge badge-secondary badge-pill">3</span>
                    </h4>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <button type="button" class="btn">Publicar Articulo</button>
                        </li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Billing address</h4>
                </div>
            </div>
        </div>
    </section>
</div>
