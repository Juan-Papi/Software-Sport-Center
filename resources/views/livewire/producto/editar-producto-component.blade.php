<div>
    <div class="container-fluid px-2 px-md-4">
        <div class="page-header min-height-300 border-radius-xl mt-4"
            style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
            <span class="mask  bg-gradient-primary  opacity-6"></span>
        </div>
        <div class="card card-body mx-3 mx-md-4 mt-n6">
            <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
<<<<<<< HEAD
                            <h6 class="mb-3">Datos del producto</h6>
=======
                            <h6 class="mb-3">Actualizacion del producto</h6>
>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756
                        </div>
                    </div>
                </div>
                <div class="card-body p-3">
                    @if (session('status'))
                        <div class="row">
                            <div class="alert alert-success alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('status') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    @if (Session::has('demo'))
                        <div class="row">
                            <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                <span class="text-sm">{{ Session::get('demo') }}</span>
                                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                    aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
                    <form wire:submit.prevent='updateProducto'>
                        <div class="row">

                            <div class="mb-3 col-md-6">
                                <label class="form-label">Marca</label>
                                <select name="tipo_id" id="" class="form-control border border-2 p-2"
                                    wire:model="marca_id">
<<<<<<< HEAD
                                    <option value="">Seleccionar Marca</option>
=======
                                    <option value="">Selecione la marca</option>
>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('marca_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
<<<<<<< HEAD
=======

>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756
                            <div class="mb-3 col-md-6">
                                <label class="form-label">Categoria</label>
                                <select name="tipo_id" id="" class="form-control border border-2 p-2"
                                    wire:model="categoria_id">
<<<<<<< HEAD
                                    <option value="">Seleccionar Categoria</option>
=======
                                    <option value="">Selecionar categoria</option>
>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                @error('categoria_id')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
<<<<<<< HEAD
                            <div class="mb-3 col-md-6">

                                <label class="form-label">Precio</label>
                                <input wire:model="precio" name="precio" type="number"
                                    class="form-control border border-2 p-2">
                                @error('precio')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
=======

                            <div class="mb-3 col-md-12">
                                <label class="form-label form-label-lg">Stock</label>
                                <input wire:model="stock" name="stock" type="number" class="form-control form-control-lg border border-2 p-2">
                                @error('stock')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>
                            
>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756

                            <div class="mb-3 col-md-12">

                                <label for="floatingTextarea2">Descripcion</label>
<<<<<<< HEAD
                                <textarea wire:model="descripcion" class="form-control border border-2 p-2" placeholder=" Say something about yourself"
                                    id="floatingTextarea2" rows="4" cols="50"></textarea>
=======
                                <textarea wire:model="descripcion" class="form-control border border-2 p-2"
                                    placeholder="Escriba aqui todo acerca del producto .... " id="floatingTextarea2" rows="4" cols="50"></textarea>
>>>>>>> ce89abfeb4e9f214c30687adac501f67e0065756
                                @error('descripcion')
                                    <p class='text-danger inputerror'>{{ $message }} </p>
                                @enderror
                            </div>

                        </div>
                        <button type="button" wire:click="goBack()" class="btn bg-gradient-dark">Cancelar</button>
                        <button type="submit" class="btn bg-gradient-dark">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
