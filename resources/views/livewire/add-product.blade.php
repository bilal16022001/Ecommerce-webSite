<div>
<section class="content-main">
                <div class="row">
                    <div class="col-9">
                        <div class="content-header">
                            <h2 class="content-title">Add New Product</h2>
                            <div>
                                
                                <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4">
                            <div class="card-header">
                                <h4>Add Products</h4>
                            </div>
                            <div class="card-body">
                                <form wire:submit.prevent="insertProduct" enctype="multipart/form-data">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Product title</label>
                                        <input type="text" placeholder="Type here" class="form-control" id="product_name" wire:model="name" />
                                    </div>
                                    <div class="mb-4">
                                        <label class="form-label">Full description</label>
                                        <textarea placeholder="Type here" class="form-control" rows="4" wire:model="Description"></textarea>
                                    </div>
                                    <div class="row">
                                        
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Price</label>
                                        <input type="text" placeholder="Type here" class="form-control" id="product_name" wire:model="Price" />
                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Category</label>
                                        
                                        <select class="form-control" wire:model="Category_id">   
                                        <option value="">choose category</option>
                                            @foreach($Categoreis as $Category)
                                    <option value="{{$Category->id}}">{{$Category->name}}</option>
                                    
                                           @endforeach
                                     </select>

                                       

                                        {{$Category_id}}

                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Sub-Category</label>
                                        <select class="form-control" wire:model="SubCategory_id">   
                                        <option value="">choose Sub category</option>
                                        @foreach($SubCategory as $SubCategory)   

                                            <option value="{{$SubCategory->id}}">{{$SubCategory->name}}</option>
        
                                            @endforeach
                                             </select>                                    </div>
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">image product</label>
                                        <input type="file" placeholder="Type here" class="form-control" id="product_name" wire:model="imageProduct" />
                                    </div>
                                        
                                    </div>

                                    
                                    
                                </form>
                            </div>
                        </div>


                        
                        <!-- card end// -->
                       
                        <!-- card end// -->
                    </div>
                   
                </div>
            </section>
</div>
