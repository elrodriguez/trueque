<div>
    <section class="login-registration-wrapper pt-10 pb-10">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                   <div class="login-registration-style-2 mt-50">
                       <h1 class="heading-4 font-weight-500 title primary-btn" style="padding: 10px;"><i class="mdi mdi-cloud-upload"></i> Registrar un Producto</h1>
                       <div class="login-registration-form pt-10">
                           <form action="#">
                                <div class="single-form form-default form-border">
                                    <label>Categoria</label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <select class="form-select">
                                                <option class="">Seleccionar..</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Descripción Corta</label>
                                    <div class="row">
                                        <div class="col-sm-12 form-input">
                                            <textarea id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Descripción Larga</label>
                                    <div class="row">
                                        <div class="col-sm-12 form-input">
                                            <textarea id="exampleFormControlTextarea1" rows="6"  placeholder="..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border ">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <label>N° de articulos o Servicios Indicados</label>
                                            <div class="form-input">
                                                <input type="text" placeholder="...">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label>Estado</label>
                                            <select class="form-select">
                                                <option>Seleccionar..</option>
                                                <option value="1">Uno</option>
                                                <option value="2">Dos</option>
                                                <option value="3">Tres</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border">
                                    <label>Preferencias para el cobro</label>
                                    <div class="row">
                                        <div class="col-sm-12  form-input">
                                                <textarea id="exampleFormControlTextarea1" rows="3" placeholder="..."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-form form-default form-border ">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label>N° de articulos o Servicios Indicados</label>
                                            <div class="form-input">
                                                <input style="padding: 5px;" type="file" placeholder="...">
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Imagen principal</label>
                                            <div class="form-input mb-2">
                                                <input style="padding: 5px;" type="file" placeholder="...">
                                            </div>
                                            @if ($photo_1)
                                                <img src="{{ $photo->temporaryUrl() }}" class="rounded mx-auto d-block">
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label>Imagen dos</label>
                                            <div class="form-input mb-2">
                                                <input style="padding: 5px;" type="file" placeholder="...">
                                            </div>
                                            @if ($photo_2)
                                                <img src="{{ $photo_2->temporaryUrl() }}" class="rounded mx-auto d-block">
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            <label>Imagen tres</label>
                                            <div class="form-input mb-2">
                                                <input style="padding: 5px;" type="file" placeholder="...">
                                            </div>
                                            @if ($photo_3)
                                                <img src="{{ $photo_3->temporaryUrl() }}" class="rounded mx-auto d-block">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <br/>
                                <div class="single-form">
                                    <button class="main-btn primary-btn">ACEPTAR</button>
                                    <button class="main-btn gray-btn">Volver</button>
                                </div>
                           </form>
                       </div>
                   </div>
                </div>
            </div>
        </div>
    </section>
</div>
