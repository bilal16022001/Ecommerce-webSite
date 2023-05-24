<div  >
    
         <section class="content-main">
                <div class="content-header">
                    <div>
                        <h2 class="content-title card-title">Products </h2>
                        
                    </div>
                    <div>
                        
                        <a href=" {{route('AddProducts')}} " class="btn btn-primary btn-sm rounded">Create new</a>
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
                    @foreach($products as $product)
                    <div class="card-body">
                        <div class="row gx-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-4 row-cols-xxl-5">
                            <div class="col">
                                <div class="card card-product-grid">
                                    <a href="#" class="img-wrap"> <img src="  {{asset('attachments/'. $product->imageProduct)}} " alt="Product" /> </a>
                                    <div class="info-wrap">
                                        <a href="#" class="title text-truncate">  {{$product->name}} </a>
                                        <div class="price mb-2">${{$product->price}}</div>
                                        <!-- price.// -->
                                        <a href="#" class="btn btn-sm font-sm rounded btn-brand" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="material-icons md-edit"></i> Edit </a>
                                        <a href="#" class="btn btn-sm font-sm btn-light rounded"> <i class="material-icons md-delete_forever"></i> Delete </a>
 
                                    </div>
                                </div>
                                <!-- card-product  end// -->
                            </div>
                           
                        </div>
                        <!-- row.// -->
                    </div>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
                    @endforeach
                    <!-- card-body end// -->
                </div>
                <!-- card end// -->
               
            </section>
</div>
