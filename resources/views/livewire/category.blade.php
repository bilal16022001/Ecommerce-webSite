<div>
    <section class="content-main">
                    <div class="content-header">
                        <div>
                            <h2 class="content-title card-title">Category List</h2>

                        </div>
                        <div>

                            <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary btn-sm rounded">Add Category </a>

                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Add Category</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form wire:submit.prevent="insertcategory">
                                            <div class="mb-4">
                                                <label for="product_name" class="form-label">Category</label>
                                                <input type="text" placeholder="Type here" class="form-control mb-2" id="product_name" wire:model="Name" />
                                                @error('name')
                                                 <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Date</th>
                                            <th scope="col" class="text-end">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0901</td>
                                            <td><b>Marvin McKinney</b></td>
                                            <td>marvin@example.com</td>
                                            <td>$9.00</td>
                                            <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                            <td>03.12.2020</td>
                                            <td class="text-end">
                                                <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                                <div class="dropdown">
                                                    <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#">View detail</a>
                                                        <a class="dropdown-item" href="#">Edit info</a>
                                                        <a class="dropdown-item text-danger" href="#">Delete</a>
                                                    </div>
                                                </div>
                                                <!-- dropdown //end -->
                                            </td>
                                        </tr>







                                    </tbody>
                                </table>
                            </div>
                            <!-- table-responsive //end -->
                        </div>

                        <!-- card-body end// -->
                    </div>
                    <!-- card end// -->

                </section>

    </div>
