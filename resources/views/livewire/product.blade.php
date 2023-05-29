<div>
    <section class="content-main">
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Products </h2>

            </div>
            <div>

                <a href=" {{ route('AddProducts') }} " class="btn btn-primary btn-sm rounded">Add Product </a>
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control" />
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>All category</option>
                            <option>Electronics</option>
                            <option>Clothings</option>
                            <option>Something else</option>
                        </select>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                            <option>Latest added</option>
                            <option>Cheap first</option>
                            <option>Most viewed</option>
                        </select>
                    </div>
                </div>
            </header>
            <!-- card-header end// -->
            <div class="card-body">
                <div class="row ">

                    @foreach ($products as $item )
                    <div class="col-sm-12 col-md-4 col-xl-4 col-lg-4">
                        <div class="card card-product-grid">
                            <a href="#" class="img-wrap"> <img src="{{ asset('attachments/' . $item->imageProduct) }}" alt="Product" /> </a>
                            <div class="info-wrap">
                                <a href="#" class="title text-truncate">{{ $item->name }}</a>
                                <div class="price mb-2">${{ $item->price}}</div>
                                <!-- price.// -->
                                <a href="EditProduct/{{$item->id}}" class="btn btn-sm font-sm rounded btn-brand" ></i> Edit </a>
                                <a href="#" wire:click.prevent="deleteProduct({{ $item->id }})" class="btn btn-sm font-sm btn-light rounded" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="material-icons md-delete_forever"></i> Delete </a>
                            </div>
                        </div>
                        <!-- card-product  end// -->
                    </div>
                    @endforeach
                </div>
                <!-- row.// -->
            </div>
            <!-- card-body end// -->
        </div>
        <!-- card end// -->

    </section>

    <div  wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    hshhs
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" wire:click.prevent="confirmDeleteProduct">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Button trigger modal -->


<!-- Modal -->


