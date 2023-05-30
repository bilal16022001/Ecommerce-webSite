<div>
    <section class="content-main">
                    <div class="content-header">
                        <div>
                            <h2 class="content-title card-title">Sub Category List</h2>

                        </div>
                        <div>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#add" class="btn btn-primary btn-sm rounded">Add SubCategory </a>

                            <div  wire:ignore.self class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Add SubCategory</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form  wire:submit.prevent="insertSubCategory">
                                            <div class="mb-4">
                                                <label>Category</label>
                                                <select class="form-control mb-2" wire:model="Category_id">
                                                    <option value="">choose category </option>
                                                        @foreach($Categories as $Category)
                                                <option value="{{$Category->id}}">{{$Category->name}}</option>
            
                                                       @endforeach
                                                 </select>
                                                 @error('Category_id')
                                                 <div class="alert alert-danger">{{$message}}</div>
                                                 @enderror
                                                <label for="product_name" class="form-label">Name</label>
                                                <input type="text" placeholder="SubCategory" class="form-control mb-2" id="product_name" wire:model="name" />
                                                @error('name')
                                                 <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" value="Save" />
                                              </div>
                                        </form>
                                    </div>

                                  </div>
                                </div>
                              </div>
                        </div>

                    </div>
                    <div class="card mb-4">

                        <!-- card-header end// -->
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#ID</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">SubCategory Name</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   @foreach($subCategry as $item)
                                     <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->SubCategory->name}}</td>
                                        <td>
                                            <a href="" class="btn btn-sm font-sm rounded btn-brand" data-bs-toggle="modal" data-bs-target="#exampleModal" wire:click.prevent="getSubCategory({{ $item->id }})" ></i> Edit </a>
                                            <a href="#" wire:click.prevent="deleteSubCategory({{ $item->id }})" class="btn btn-sm font-sm btn-light rounded" data-bs-toggle="modal" data-bs-target="#delete"> <i class="material-icons md-delete_forever"></i> Delete </a>
                                        </td>
                                     </tr>
                                   @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive //end -->
                        </div>

                        <!-- card-body end// -->
                    
                    </div>
                    <!-- card end// -->
                    <!---start edit modal--->
                    <div  wire:ignore.self  class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Sub Category</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form  wire:submit.prevent="UpdateSubCategory">
                                        <div class="mb-4">
                                            <label>Category</label>
                                            <select class="form-control mb-2" wire:model="Category_id">
                                                <option value="">choose category </option>
                                                    @foreach($Categories as $Category)
                                            <option value="{{$Category->id}}">{{$Category->name}}</option>
        
                                                   @endforeach
                                             </select>
                                             @error('Category_id')
                                             <div class="alert alert-danger">{{$message}}</div>
                                             @enderror
                                            <label for="product_name" class="form-label">Name</label>
                                            <input type="text" placeholder="SubCategory" class="form-control mb-2" id="product_name" wire:model="name" />
                                            @error('name')
                                             <div class="alert alert-danger">{{$message}}</div>
                                            @enderror
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <input type="submit" class="btn btn-primary" value="Save" />
                                          </div>
                                    </form>
                                </div>
                            
                            </div>
                        </div>
                    </div>
                    <!----end edit modal---->
                    <!----start delete modal---->
                    <div  wire:ignore.self  class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">delete Category</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to delete this category ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary" wire:click.prevent="confirmDeleteSubCategory">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!----end delete modal---->
                </section>
                

    </div>